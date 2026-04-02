#!/usr/bin/env bash
set -euo pipefail

# Move to the script folder so paths are always correct.
cd "$(dirname "$0")"

# Ensure pip tooling is available and up to date.
python3 img_converter/img_converter.py


# Install required libraries for SVG <-> raster conversion.
python3 -m pip install cairosvg pillow

# Run the converter (reads file_to_convert, writes converted_files, deletes converted inputs).
python3 img_converter.py
