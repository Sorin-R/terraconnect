#!/usr/bin/env python3
"""
PPE/PPT/PPTX to PDF converter with layout-preserving backends.

Backends:
- Windows + Microsoft PowerPoint (best fidelity)
- LibreOffice / soffice (cross-platform fallback)

Examples:
    python3 ppe_pdf.py "presentation.pptx"
    python3 ppe_pdf.py /absolute/path/to/file.ppe
    python3 ppe_pdf.py "presentation group 4.pptx" -o /tmp/out.pdf
    python3 ppe_pdf.py "presentation.ppe" --backend libreoffice
"""

from __future__ import annotations

import argparse
import os
import shutil
import subprocess
import sys
import tempfile
from pathlib import Path
from typing import Optional


PP_SAVE_AS_PDF = 32
BASE_DIR = Path(__file__).resolve().parent
DEFAULT_UPLOAD_DIR = BASE_DIR / "upload"
DEFAULT_OUTPUT_DIR = BASE_DIR / "output"


class ConversionError(RuntimeError):
    """Raised when conversion fails for all available backends."""


def _find_soffice() -> Optional[str]:
    env_path = os.environ.get("SOFFICE_PATH")
    if env_path and Path(env_path).exists():
        return env_path

    for name in ("soffice", "libreoffice"):
        path = shutil.which(name)
        if path:
            return path

    mac_default = Path("/Applications/LibreOffice.app/Contents/MacOS/soffice")
    if mac_default.exists():
        return str(mac_default)

    return None


def _convert_with_powerpoint(input_file: Path, output_file: Path) -> None:
    if os.name != "nt":
        raise ConversionError("PowerPoint backend is only available on Windows.")

    try:
        import win32com.client  # type: ignore
    except Exception as exc:  # pragma: no cover
        raise ConversionError(
            "pywin32 is required for the PowerPoint backend. Install with: pip install pywin32"
        ) from exc

    app = None
    presentation = None
    try:
        app = win32com.client.DispatchEx("PowerPoint.Application")
        app.Visible = 0
        presentation = app.Presentations.Open(str(input_file), WithWindow=False)
        presentation.SaveAs(str(output_file), PP_SAVE_AS_PDF)
    except Exception as exc:  # pragma: no cover
        raise ConversionError(f"PowerPoint conversion failed: {exc}") from exc
    finally:
        if presentation is not None:
            presentation.Close()
        if app is not None:
            app.Quit()



def _run_soffice_convert(soffice: str, input_file: Path, outdir: Path, timeout: int) -> Path:
    cmd = [
        soffice,
        "--headless",
        "--nologo",
        "--nolockcheck",
        "--convert-to",
        "pdf:impress_pdf_Export",
        "--outdir",
        str(outdir),
        str(input_file),
    ]

    try:
        subprocess.run(cmd, check=True, capture_output=True, text=True, timeout=timeout)
    except subprocess.TimeoutExpired as exc:
        raise ConversionError(f"LibreOffice conversion timed out after {timeout}s.") from exc
    except subprocess.CalledProcessError as exc:
        stderr = (exc.stderr or "").strip()
        stdout = (exc.stdout or "").strip()
        details = stderr or stdout or "Unknown LibreOffice error"
        raise ConversionError(f"LibreOffice conversion failed: {details}") from exc

    generated = outdir / f"{input_file.stem}.pdf"
    if not generated.exists():
        raise ConversionError("LibreOffice finished but no PDF was created.")

    return generated



def _convert_with_libreoffice(input_file: Path, output_file: Path, timeout: int) -> None:
    soffice = _find_soffice()
    if not soffice:
        raise ConversionError(
            "LibreOffice not found. Install LibreOffice or set SOFFICE_PATH to soffice binary."
        )

    output_file.parent.mkdir(parents=True, exist_ok=True)

    if input_file.suffix.lower() != ".ppe":
        generated = _run_soffice_convert(soffice, input_file, output_file.parent, timeout)
        if generated.resolve() != output_file.resolve():
            shutil.move(str(generated), str(output_file))
        return

    # .ppe is not a common extension. Try as-is first, then try renamed copies.
    attempted_errors = []

    try:
        generated = _run_soffice_convert(soffice, input_file, output_file.parent, timeout)
        if generated.resolve() != output_file.resolve():
            shutil.move(str(generated), str(output_file))
        return
    except ConversionError as exc:
        attempted_errors.append(str(exc))

    with tempfile.TemporaryDirectory(prefix="ppe_to_pdf_") as tmp:
        tmp_dir = Path(tmp)
        for ext in (".pptx", ".ppt"):
            renamed = tmp_dir / f"{input_file.stem}{ext}"
            shutil.copy2(input_file, renamed)
            try:
                generated = _run_soffice_convert(soffice, renamed, output_file.parent, timeout)
                if generated.resolve() != output_file.resolve():
                    shutil.move(str(generated), str(output_file))
                return
            except ConversionError as exc:
                attempted_errors.append(f"[{ext}] {exc}")

    joined = " | ".join(attempted_errors)
    raise ConversionError(f"Could not convert .ppe file. Attempts: {joined}")


def _resolve_input_file(user_input: Path) -> Path:
    """
    Resolve input path.

    Supports:
    - absolute/relative real paths
    - bare filenames looked up in ./upload
    """
    candidate = user_input.expanduser()
    if candidate.exists():
        return candidate.resolve()

    upload_candidate = (DEFAULT_UPLOAD_DIR / user_input).expanduser()
    if upload_candidate.exists():
        return upload_candidate.resolve()

    if user_input.suffix == "":
        for ext in (".ppe", ".pptx", ".ppt"):
            alt = (DEFAULT_UPLOAD_DIR / f"{user_input.name}{ext}").expanduser()
            if alt.exists():
                return alt.resolve()

    raise FileNotFoundError(
        f"Input file not found: {user_input}. "
        f"Put the file in {DEFAULT_UPLOAD_DIR} or pass a full path."
    )



def convert_to_pdf(
    input_path: Path,
    output_path: Optional[Path] = None,
    backend: str = "auto",
    timeout: int = 120,
) -> Path:
    input_file = _resolve_input_file(input_path)

    if output_path is None:
        output_file = (DEFAULT_OUTPUT_DIR / f"{input_file.stem}.pdf").resolve()
    else:
        output_file = output_path.expanduser().resolve()

    if output_file.suffix.lower() != ".pdf":
        raise ValueError("Output file must use .pdf extension.")

    output_file.parent.mkdir(parents=True, exist_ok=True)

    errors = []

    if backend in ("auto", "powerpoint"):
        try:
            _convert_with_powerpoint(input_file, output_file)
            return output_file
        except Exception as exc:
            errors.append(f"powerpoint: {exc}")
            if backend == "powerpoint":
                raise ConversionError(errors[-1]) from exc

    if backend in ("auto", "libreoffice"):
        try:
            _convert_with_libreoffice(input_file, output_file, timeout=timeout)
            return output_file
        except Exception as exc:
            errors.append(f"libreoffice: {exc}")
            if backend == "libreoffice":
                raise ConversionError(errors[-1]) from exc

    raise ConversionError("All conversion backends failed: " + " | ".join(errors))



def _parse_args() -> argparse.Namespace:
    parser = argparse.ArgumentParser(
        description=(
            "Convert PPE/PPT/PPTX presentations to PDF while preserving layout. "
            "By default, input is read from ./upload and output is written to ./output."
        )
    )
    parser.add_argument(
        "input",
        type=Path,
        help="Source filename in ./upload or full path to .ppe/.ppt/.pptx",
    )
    parser.add_argument(
        "-o",
        "--output",
        type=Path,
        default=None,
        help="Output PDF path. Default: ./output/<input-name>.pdf",
    )
    parser.add_argument(
        "--backend",
        choices=("auto", "powerpoint", "libreoffice"),
        default="auto",
        help="Conversion backend. Default: auto",
    )
    parser.add_argument(
        "--timeout",
        type=int,
        default=120,
        help="Timeout in seconds for LibreOffice conversion. Default: 120",
    )
    return parser.parse_args()



def main() -> int:
    args = _parse_args()

    try:
        out_file = convert_to_pdf(
            input_path=args.input,
            output_path=args.output,
            backend=args.backend,
            timeout=args.timeout,
        )
        print(f"PDF created: {out_file}")
        return 0
    except Exception as exc:
        print(f"Error: {exc}", file=sys.stderr)
        return 1


if __name__ == "__main__":
    raise SystemExit(main())
