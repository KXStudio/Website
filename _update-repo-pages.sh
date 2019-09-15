#!/bin/bash

set -e

pushd $(dirname $0)/repo
./generate-repo-page.sh apps    > applications.html
# ./generate-repo-page.sh plugins > plugins.html
popd
