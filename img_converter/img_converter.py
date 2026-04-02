#!/usr/bin/env python3
"""Batch image converter for the img_converter workspace.

Behavior:
- Reads files from ./file_to_convert
- Supports inputs: .png, .jpg, .jpeg, .webp, .svg
- Detects each file extension and prompts for target extension
- Shows valid target choices (all supported formats except current one)
- Writes outputs to ./converted_files/.<extension>/
- Deletes source files after successful conversion
"""

from __future__ import annotations

import base64
import io
from pathlib import Path
from typing import Iterable

INPUT_DIR = Path(__file__).resolve().parent / "file_to_convert"
OUTPUT_DIR = Path(__file__).resolve().parent / "converted_files"

ALL_FORMATS = (".png", ".jpg", ".jpeg", ".webp", ".svg")
RASTER_INPUTS = {".png", ".jpg", ".jpeg", ".webp"}
SVG_INPUT = ".svg"
SUPPORTED_INPUTS = set(ALL_FORMATS)


def ensure_directories() -> None:
    INPUT_DIR.mkdir(parents=True, exist_ok=True)
    OUTPUT_DIR.mkdir(parents=True, exist_ok=True)


def get_extension_folder(extension: str) -> Path:
    folder = OUTPUT_DIR / extension.lower()
    folder.mkdir(parents=True, exist_ok=True)
    return folder


def make_output_path(source: Path, output_extension: str) -> Path:
    target_dir = get_extension_folder(output_extension)
    candidate = target_dir / f"{source.stem}{output_extension}"
    counter = 1

    while candidate.exists():
        candidate = target_dir / f"{source.stem}_{counter}{output_extension}"
        counter += 1

    return candidate


def require_pillow():
    try:
        from PIL import Image  # type: ignore
    except ImportError as exc:
        raise RuntimeError(
            "Missing dependency: pillow. Install with: pip install pillow"
        ) from exc
    return Image


def require_cairosvg():
    try:
        import cairosvg  # type: ignore
    except ImportError as exc:
        raise RuntimeError(
            "Missing dependency: cairosvg. Install with: pip install cairosvg"
        ) from exc
    return cairosvg


def read_image_size(image_path: Path) -> tuple[int, int] | None:
    try:
        Image = require_pillow()
    except RuntimeError:
        return None

    with Image.open(image_path) as img:
        return img.width, img.height


def raster_to_svg(raster_path: Path, output_path: Path) -> Path:
    extension = raster_path.suffix.lower()
    mime_by_extension = {
        ".png": "image/png",
        ".jpg": "image/jpeg",
        ".jpeg": "image/jpeg",
        ".webp": "image/webp",
    }
    mime_type = mime_by_extension.get(extension, "application/octet-stream")
    encoded = base64.b64encode(raster_path.read_bytes()).decode("ascii")
    size = read_image_size(raster_path)

    if size:
        width, height = size
        svg_text = (
            f'<svg xmlns="http://www.w3.org/2000/svg" width="{width}" '
            f'height="{height}" viewBox="0 0 {width} {height}">\n'
            f'  <image href="data:{mime_type};base64,{encoded}" '
            f'width="{width}" height="{height}" />\n'
            "</svg>\n"
        )
    else:
        svg_text = (
            '<svg xmlns="http://www.w3.org/2000/svg">\n'
            f'  <image href="data:{mime_type};base64,{encoded}" '
            'width="100%" height="100%" />\n'
            "</svg>\n"
        )

    output_path.write_text(svg_text, encoding="utf-8")
    return output_path


def svg_to_png_bytes(svg_path: Path) -> bytes:
    cairosvg = require_cairosvg()
    png_bytes = cairosvg.svg2png(url=str(svg_path))
    return png_bytes


def png_bytes_to_target(png_bytes: bytes, output_path: Path, target_extension: str) -> Path:
    if target_extension == ".png":
        output_path.write_bytes(png_bytes)
        return output_path

    Image = require_pillow()
    with Image.open(io.BytesIO(png_bytes)) as img:
        if target_extension in {".jpg", ".jpeg"}:
            img.convert("RGB").save(output_path, format="JPEG", quality=95, optimize=True)
        elif target_extension == ".webp":
            webp_mode = "RGBA" if "A" in img.getbands() else "RGB"
            img.convert(webp_mode).save(output_path, format="WEBP", quality=92, method=6)
        else:
            raise ValueError(f"Unsupported target format: {target_extension}")

    return output_path


def convert_raster_to_target(source_path: Path, target_extension: str) -> Path:
    output_path = make_output_path(source_path, target_extension)

    if target_extension == ".svg":
        return raster_to_svg(source_path, output_path)

    Image = require_pillow()
    with Image.open(source_path) as img:
        if target_extension in {".jpg", ".jpeg"}:
            img.convert("RGB").save(output_path, format="JPEG", quality=95, optimize=True)
        elif target_extension == ".png":
            img.save(output_path, format="PNG")
        elif target_extension == ".webp":
            webp_mode = "RGBA" if "A" in img.getbands() else "RGB"
            img.convert(webp_mode).save(output_path, format="WEBP", quality=92, method=6)
        else:
            raise ValueError(f"Unsupported target format: {target_extension}")

    return output_path


def convert_svg_to_target(source_path: Path, target_extension: str) -> Path:
    output_path = make_output_path(source_path, target_extension)
    png_bytes = svg_to_png_bytes(source_path)
    return png_bytes_to_target(png_bytes, output_path, target_extension)


def convert_file(source_path: Path, target_extension: str) -> Path:
    source_extension = source_path.suffix.lower()

    if source_extension not in SUPPORTED_INPUTS:
        raise ValueError(f"Unsupported input format: {source_extension}")
    if target_extension not in SUPPORTED_INPUTS:
        raise ValueError(f"Unsupported target format: {target_extension}")
    if target_extension == source_extension:
        raise ValueError("Target format cannot be the same as source format")

    if source_extension in RASTER_INPUTS:
        return convert_raster_to_target(source_path, target_extension)
    if source_extension == SVG_INPUT:
        return convert_svg_to_target(source_path, target_extension)

    raise ValueError(f"Unsupported conversion: {source_extension} -> {target_extension}")


def target_choices_for(source_extension: str) -> list[str]:
    return [ext for ext in ALL_FORMATS if ext != source_extension]


def prompt_target_extension(source_path: Path) -> str | None:
    source_extension = source_path.suffix.lower()
    options = target_choices_for(source_extension)

    print(f"\nFile: {source_path.name} (detected: {source_extension})")
    for index, extension in enumerate(options, start=1):
        print(f"  {index}. {extension}")
    print("  0. skip")

    max_choice = len(options)

    while True:
        try:
            choice = input(f"Choose target extension [1-{max_choice} or 0]: ").strip()
        except EOFError:
            print(f"[SKIP] {source_path.name}: no input received")
            return None

        if choice == "0":
            return None
        if choice.isdigit():
            index = int(choice)
            if 1 <= index <= max_choice:
                return options[index - 1]

        print(f"Invalid choice. Enter 1-{max_choice} or 0.")


def iter_supported_input_files() -> Iterable[Path]:
    for item in sorted(INPUT_DIR.iterdir()):
        if item.is_file() and item.suffix.lower() in SUPPORTED_INPUTS:
            yield item


def main() -> None:
    ensure_directories()
    files = list(iter_supported_input_files())

    if not files:
        print(
            "No files to convert in "
            f"'{INPUT_DIR}'. Supported: {', '.join(sorted(SUPPORTED_INPUTS))}"
        )
        return

    success_count = 0
    failure_count = 0
    skipped_count = 0

    for source in files:
        try:
            target_extension = prompt_target_extension(source)
            if target_extension is None:
                skipped_count += 1
                continue

            output = convert_file(source, target_extension)
            source.unlink()
            success_count += 1
            converted_path = output.relative_to(OUTPUT_DIR)
            print(f"[OK] {source.name} -> {converted_path} | source deleted")
        except Exception as exc:  # noqa: BLE001
            failure_count += 1
            print(f"[ERROR] {source.name}: {exc}")

    print(
        f"Finished. Successful: {success_count}, Failed: {failure_count}, Skipped: {skipped_count}"
    )


if __name__ == "__main__":
    main()
