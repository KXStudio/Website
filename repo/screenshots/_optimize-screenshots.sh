#!/bin/bash

set -e

cd $(dirname $0)

for file in $(find . -name "*.png"); do
  pngcrush ${file} ${file}.new
  mv ${file}.new ${file}
done
