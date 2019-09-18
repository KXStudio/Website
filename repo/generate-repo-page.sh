#!/bin/bash

set -e

cd $(dirname "${0}")

REPO_TARGET="${1}"

if [ -z "${REPO_TARGET}" ]; then
    echo "usage: ${0} <apps|plugins>"
    exit 1
fi

PACKAGES_ARCHS=("amd64" "arm64" "armhf" "i386")
PACKAGES_BLACKLIST=("cadence-unity-support" "calf-ladspa" "carla-lv2" "carla-vst" "carla-bridge-linux32" "carla-bridge-linux64" "distrho-src" "lv2vst")
PACKAGES_WHITELIST=("cadence" "catarina" "catia" "claudia")
PACKAGES_BASE_URL="http://ppa.launchpad.net/kxstudio-debian/${REPO_TARGET}/ubuntu/"

rm -f Packages.gz Packages

wget -q http://ppa.launchpad.net/kxstudio-debian/${REPO_TARGET}/ubuntu/dists/bionic/main/binary-amd64/Packages.gz
gzip -d Packages.gz

PACKAGES=$(cat Packages | grep "Package: " | sed "s/Package: //g" | sort)

function is_blacklisted() {
    local TEST="${1}"
    local PACKAGE
    for PACKAGE in ${PACKAGES_BLACKLIST[@]}; do
        if [ ${TEST} = ${PACKAGE} ]; then
            return 0
        fi
    done
    return 1
}

function is_whitelisted() {
    local TEST="${1}"
    local PACKAGE
    for PACKAGE in ${PACKAGES_WHITELIST[@]}; do
        if [ ${TEST} = ${PACKAGE} ]; then
            return 0
        fi
    done
    return 1
}

function has_data_package() {
    local TEST="${1}-data"
    local PACKAGE
    for PACKAGE in ${PACKAGES[@]}; do
        if [ ${TEST} = ${PACKAGE} ]; then
            return 0
        fi
    done
    return 1
}

for PACKAGE in ${PACKAGES[@]}; do
    if is_blacklisted ${PACKAGE}; then
        continue
    fi

    PACKAGE_LINESTART=$(cat Packages | grep -x -n "Package: ${PACKAGE}" | cut -d ':' -f 1)
    PACKAGE_NUMLINES=$(cat Packages | tail -n +$((${PACKAGE_LINESTART} + 1)) | grep -n "Package: " | head -n 1 | cut -d ':' -f 1)
    if [ -n "${PACKAGE_NUMLINES}" ]; then
        PACKAGE_DETAILS=$(cat Packages | tail -n +${PACKAGE_LINESTART} | head -n ${PACKAGE_NUMLINES})
    else
        PACKAGE_DETAILS=$(cat Packages | tail -n +${PACKAGE_LINESTART})
    fi
    PACKAGE_FILENAME=$(echo "${PACKAGE_DETAILS}" | awk 'sub("Filename: ","")')

    if echo "${PACKAGE_FILENAME}" | grep -q "_all.deb" && ! is_whitelisted "${PACKAGE}"; then
        continue
    fi

    PACKAGE_DATA=$(has_data_package "${PACKAGE}" && echo "${PACKAGE}-data" || echo)
    PACKAGE_DESCRIPTION=$(echo "${PACKAGE_DETAILS}" | awk 'sub("Description: ","")')
    PACKAGE_PROVIDES=$(echo "${PACKAGE_DETAILS}" | awk 'sub("Provides: ","")')
    PACKAGE_SIZE=$(echo "${PACKAGE_DETAILS}" | grep -v "Installed-Size:" | awk 'sub("Size: ","")')
    PACKAGE_VERSION=$(echo "${PACKAGE_DETAILS}" | awk 'sub("Version: ","")' | cut -d ':' -f 2 | cut -d '-' -f 1)

    echo "<div class=\"repository-package\">"

    # screenshot
    SCREENSHOT=${PACKAGE}
    if [ ! -f "./screenshots/${SCREENSHOT}.png" ]; then
        SCREENSHOT=$(echo "${SCREENSHOT}" | sed "s/-lv2//g" | sed "s/-vst//g")
        if [ ! -f "./screenshots/${SCREENSHOT}.png" ]; then
            SCREENSHOT=""
        fi
    fi
    if [ -n "${SCREENSHOT}" ]; then
        echo "<div class=\"img_clickable\"><img src=\"/repo/screenshots/${SCREENSHOT}.png\" alt=\"${PACKAGE}\" class=\"img_thumb_150\"/>"
        echo "<div class=\"img_clickable_overlay\"><img src=\"/repo/screenshots/${SCREENSHOT}.png\" alt=\"${PACKAGE}\"/></div>"
        echo "</div>"
    else
        echo "<div><img src=\"/repo/screenshots/nogui.png\" alt=\"${PACKAGE}\" class=\"img_thumb_150\"/></div>"
    fi

    # full table
    echo "<div><table>"
    echo "<tr><td>Package Name:</td><td>${PACKAGE}</td></tr>"
    echo "<tr><td>Description:</td><td>${PACKAGE_DESCRIPTION}</td></tr>"
    echo "<tr><td>Version:</td><td>${PACKAGE_VERSION}</td></tr>"
    echo "<tr><td>Expected size:</td><td>"
    if [ ${PACKAGE_SIZE} -gt 999999 ]; then
        echo "$((${PACKAGE_SIZE} / 1024 / 1024))Mb"
    else
        echo "$((${PACKAGE_SIZE} / 1024))Kb"
    fi
    if [ -n "${PACKAGE_DATA}" ]; then
        PACKAGE_DATA_LINESTART=$(cat Packages | grep -x -n "Package: ${PACKAGE_DATA}" | cut -d ':' -f 1)
        PACKAGE_DATA_NUMLINES=$(cat Packages | tail -n +$((${PACKAGE_DATA_LINESTART} + 1)) | grep -n "Package: " | head -n 1 | cut -d ':' -f 1)
        if [ -n "${PACKAGE_DATA_NUMLINES}" ]; then
            PACKAGE_DATA_DETAILS=$(cat Packages | tail -n +${PACKAGE_DATA_LINESTART} | head -n ${PACKAGE_DATA_NUMLINES})
        else
            PACKAGE_DATA_DETAILS=$(cat Packages | tail -n +${PACKAGE_DATA_LINESTART})
        fi
        PACKAGE_DATA_SIZE=$(echo "${PACKAGE_DATA_DETAILS}" | grep -v "Installed-Size:" | awk 'sub("Size: ","")')
        echo "+ $((${PACKAGE_DATA_SIZE} / 1024 / 1024))Mb (data)"
    fi
    echo "</td></tr>"
    if [ ${REPO_TARGET} = "plugins" ]; then
        if [ -z "${PACKAGE_PROVIDES}" ]; then
            echo "<tr><td>Provides:</td><td>??</td></tr>"
        else
            echo "<tr><td>Provides:</td><td>"
            if echo "${PACKAGE_PROVIDES}" | grep -q standalone-plugin; then
                echo "Standalone "
            fi
            if echo "${PACKAGE_PROVIDES}" | grep -q ladspa-plugin; then
                echo "LADSPA "
            fi
            if echo "${PACKAGE_PROVIDES}" | grep -q dssi-plugin; then
                echo "DSSI "
            fi
            if echo "${PACKAGE_PROVIDES}" | grep -q lv2-plugin; then
                echo "LV2 "
            fi
            if echo "${PACKAGE_PROVIDES}" | grep -q vst-plugin; then
                echo "VST2 "
            fi
            if echo "${PACKAGE_PROVIDES}" | grep -q vst3-plugin; then
                echo "VST3 "
            fi
            echo "</td></tr>"
        fi
    fi
    echo "<tr><td>Downloads:</td><td>"
    if echo "${PACKAGE_FILENAME}" | grep -q "_all.deb"; then
            echo "<a href=\"${PACKAGES_BASE_URL}${PACKAGE_FILENAME}\" target=\"_blank\">all</a>&nbsp;&nbsp;"
    else
        for ARCH in ${PACKAGES_ARCHS[@]}; do
            PACKAGE_FILENAME_ARCHED=$(echo "${PACKAGE_FILENAME}" | sed "s/_amd64.deb/_${ARCH}.deb/g")
            echo "<a href=\"${PACKAGES_BASE_URL}${PACKAGE_FILENAME_ARCHED}\" target=\"_blank\">${ARCH}</a>&nbsp;&nbsp;"
        done
    fi
    if [ -n "${PACKAGE_DATA}" ]; then
        PACKAGE_FILENAME_DATA=$(echo "${PACKAGE_FILENAME}" | sed "s|/${PACKAGE}_|/${PACKAGE_DATA}_|g" | sed "s/_amd64.deb/_all.deb/g")
        echo "<a href=\"${PACKAGES_BASE_URL}${PACKAGE_FILENAME_DATA}\" target=\"_blank\">data</a>"
    fi
    echo "</tr>"
    echo "</table></div></div>"

    # separator
    echo "<br/>"
    echo
done

rm -f Packages.gz Packages
