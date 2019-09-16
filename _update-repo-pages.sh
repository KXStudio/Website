#!/bin/bash

set -e

ssh -A kx.studio bash <<EOF
set -e
cd ~/sites/kxstudio
git pull
cd repo
./generate-repo-page.sh apps    > applications.html.tmp
./generate-repo-page.sh plugins > plugins.html.tmp
mv applications.html.tmp applications.html
mv plugins.html.tmp      plugins.html
EOF
