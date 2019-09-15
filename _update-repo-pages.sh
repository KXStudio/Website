#!/bin/bash

set -e

ssh -A kx.studio bash <<EOF
set -e
cd ~/sites/kxstudio
git pull
cd repo
./generate-repo-page.sh apps    > applications.html
./generate-repo-page.sh plugins > plugins.html
EOF
