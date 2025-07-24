#!/bin/bash

set -e

cd $(dirname "${0}")

REPO_TARGET="${1}"

if [ -z "${REPO_TARGET}" ]; then
    echo "usage: ${0} <apps|plugins>"
    exit 1
fi

# supported architectures, i386 will eventually go away once we build everything on "focal"
PACKAGES_ARCHS=("amd64" "arm64" "armhf" "i386")

# software we know to be abandoned, so we give warning to users to maybe not rely on it so much
PACKAGES_ABANDONED=("ams-lv2" "arctican-plugins-lv2" "arctican-plugins-vst" "arpage" "autotalent" "beatslash-lv2" "easyssp-lv2" "easyssp-vst" "invada-studio-plugins-ladspa" "invada-studio-plugins-lv2" "juced-plugins-lv2" "juced-plugins-vst" "pizmidi-plugins" "teragonaudio-plugins-lv2" "teragonaudio-plugins-vst")

# stuff to be hidden, for various reasons
PACKAGES_BLACKLIST=("carla-bridge-linux32" "carla-bridge-linux64" "distrho-src" "jalv" "lv2vst" "wineasio-amd64")

# hidden packages, either abandoned by the author or stuff I no longer use and thus won't maintain updated here
PACKAGES_HIDDEN=("cadence" "cadence-tools" "catia" "claudia" "fluajho" "gladish" "ladish" "non-sequencer" "non-sequencer-git" "patroneo" "vico")

# stuff to always be shown, even when their arch is "all"
PACKAGES_WHITELIST=("cadence" "catia" "claudia" "impro-visor" "j2sc")

# packages with separate data package, merge into 1 single item
PACKAGES_SEPARATE_DATA=("hybridreverb2")

PACKAGES_BASE_URL="http://ppa.launchpad.net/kxstudio-debian/${REPO_TARGET}/ubuntu/"
PACKAGES_BASE_HTTPS="https://launchpad.net/~kxstudio-debian/+archive/${REPO_TARGET}/+files/"

rm -f Packages.gz Packages
mkdir -p pool-cache

wget -q http://ppa.launchpad.net/kxstudio-debian/${REPO_TARGET}/ubuntu/dists/bionic/main/binary-amd64/Packages.gz
gzip -d Packages.gz
mv Packages Packages.bionic

wget -q http://ppa.launchpad.net/kxstudio-debian/${REPO_TARGET}/ubuntu/dists/focal/main/binary-amd64/Packages.gz
gzip -d Packages.gz
mv Packages Packages.focal

cat Packages.bionic Packages.focal > Packages
PACKAGES=$(cat Packages | grep "Package: " | sed "s/Package: //g" | sort | uniq)

function is_abandoned() {
    local TEST="${1}"
    local PACKAGE
    for PACKAGE in ${PACKAGES_ABANDONED[@]}; do
        if [ ${TEST} = ${PACKAGE} ]; then
            return 0
        fi
    done
    return 1
}

function is_hidden() {
    local TEST="${1}"
    local PACKAGE
    for PACKAGE in ${PACKAGES_BLACKLIST[@]}; do
        if [ ${TEST} = ${PACKAGE} ]; then
            return 0
        fi
    done
    for PACKAGE in ${PACKAGES_HIDDEN[@]}; do
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
    # FIXME remove after 1 year
    if [ ${TEST} = "lsp-plugins-data" ]; then
        return 1
    fi
    for PACKAGE in ${PACKAGES[@]}; do
        if [ ${TEST} = ${PACKAGE} ]; then
            return 0
        fi
    done
    return 1
}

function has_separate_data_package() {
    local TEST="${1}"
    local PACKAGE
    for PACKAGE in ${PACKAGES_SEPARATE_DATA[@]}; do
        if [ ${TEST} = ${PACKAGE} ]; then
            return 0
        fi
    done
    return 1
}

function get_homepage() {
    local SOURCE="${1}"
    local VERSION="${2}"
    local SRC_FILENAME="${SOURCE}_$(echo ${VERSION} | sed 's/:/./').dsc"
    local SRC_LETTER=$(echo "${SOURCE}" | head -c 1)
    if [ ! -f "pool-cache/${SRC_FILENAME}" ]; then
        wget -q -O "pool-cache/${SRC_FILENAME}" "${PACKAGES_BASE_URL}/pool/main/${SRC_LETTER}/${SOURCE}/${SRC_FILENAME}"
        if [ $? != 0 ]; then
            rm -f "pool-cache/${SRC_FILENAME}"
            return 1
        fi
    fi
    cat "pool-cache/${SRC_FILENAME}" | awk 'sub("Homepage: ","")'
    return 0
}

function get_vcs_page() {
    local SOURCE="${1}"
    local VERSION="${2}"
    local SRC_FILENAME="${SOURCE}_$(echo ${VERSION} | sed 's/:/./').dsc"
    local SRC_LETTER=$(echo "${SOURCE}" | head -c 1)
    if [ ! -f "pool-cache/${SRC_FILENAME}" ]; then
        wget -q -O "pool-cache/${SRC_FILENAME}" "${PACKAGES_BASE_URL}/pool/main/${SRC_LETTER}/${SOURCE}/${SRC_FILENAME}"
        if [ $? != 0 ]; then
            rm -f "pool-cache/${SRC_FILENAME}"
            return 1
        fi
    fi
    cat "pool-cache/${SRC_FILENAME}" | awk 'sub("Kxstudio-Vcs: ","")'
    return 0
}

for PACKAGE in ${PACKAGES[@]}; do
    if is_hidden ${PACKAGE} || echo "${PACKAGE}" | grep -q -- "-static"; then
        continue
    fi

    PACKAGE_LINESTART=$(cat Packages | grep -x -n "Package: ${PACKAGE}" | cut -d ':' -f 1 | sort -n | tail -n 1)
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

    PACKAGE_BASENAME=$(basename "${PACKAGE_FILENAME}")

    PACKAGE_DATA=$(has_data_package "${PACKAGE}" && echo "${PACKAGE}-data" || echo)
    if [ -z "${PACKAGE_DATA}" ] && echo "${PACKAGE}" | grep -q -- \-; then
        PACKAGE_MAIN=$(echo "${PACKAGE}" | cut -d '-' -f 1)
        PACKAGE_DATA=$(has_data_package "${PACKAGE_MAIN}" && echo "${PACKAGE_MAIN}-data" || echo)
    fi
    PACKAGE_DESCRIPTION=$(echo "${PACKAGE_DETAILS}" | awk 'sub("Description: ","")')
    PACKAGE_PROVIDES=$(echo "${PACKAGE_DETAILS}" | awk 'sub("Provides: ","")')
    PACKAGE_SIZE=$(echo "${PACKAGE_DETAILS}" | grep -v "Installed-Size:" | awk 'sub("Size: ","")')
    PACKAGE_RVERSION=$(echo "${PACKAGE_DETAILS}" | awk 'sub("Version: ","")' | cut -d ':' -f 2)
    PACKAGE_VERSION=$(echo "${PACKAGE_RVERSION}" | cut -d '-' -f 1)
    PACKAGE_SOURCE=$(echo "${PACKAGE_DETAILS}" | awk 'sub("Source: ","")')
    if [ -z "${PACKAGE_SOURCE}" ]; then
        PACKAGE_SOURCE="${PACKAGE}"
    fi
    PACKAGE_HOMEPAGE=$(get_homepage "${PACKAGE_SOURCE}" "${PACKAGE_RVERSION}")
    PACKAGE_VCS_PAGE=$(get_vcs_page "${PACKAGE_SOURCE}" "${PACKAGE_RVERSION}")

    if echo "${PACKAGE_BASENAME}" | grep -q "carla-bridge-win64_"; then
        PACKAGE="carla-bridge-win"
        PACKAGE_DESCRIPTION="carla windows bridge"
    fi

    CLASS="repository-package"
    if is_abandoned ${PACKAGE}; then
        CLASS+=" abandoned"
    fi

    echo "<div class=\"${CLASS}\" id=\"${PACKAGE}\">"

    # screenshot
    SCREENSHOT=${PACKAGE}
    if [ ! -f "./screenshots/${SCREENSHOT}.png" ]; then
        SCREENSHOT=$(echo "${SCREENSHOT}" | sed "s/-lv2//g" | sed "s/-vst2//g" | sed "s/-vst3//g" | sed "s/-vst//g" | sed "s/-clap//g")
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
    echo "<tr><td>Package Name:</td><td><a href=\"#${PACKAGE}\" style=\"text-decoration:none;color:#D6D6D6;\">${PACKAGE}</a></td></tr>"
    echo "<tr><td>Description:</td><td>${PACKAGE_DESCRIPTION}</td></tr>"
    if [ -n "${PACKAGE_HOMEPAGE}" ] || [ -n "${PACKAGE_VCS_PAGE}" ]; then
        echo "<tr><td>Useful links:</td><td>"
        if [ -n "${PACKAGE_HOMEPAGE}" ]; then
            echo "<a href=\"${PACKAGE_HOMEPAGE}\" target=\"_blank\">Homepage</a>&nbsp;&nbsp;"
        fi
        if [ -n "${PACKAGE_VCS_PAGE}" ]; then
            echo "<a href=\"${PACKAGE_VCS_PAGE}\" target=\"_blank\">VCS</a>&nbsp;&nbsp;"
        fi
        echo "</td></tr>"
    fi
    echo "<tr><td>Version:</td><td>${PACKAGE_VERSION}</td></tr>"
    echo "<tr><td>Package size:</td><td>"
    if [ ${PACKAGE_SIZE} -gt 1048576 ]; then
        echo "$((${PACKAGE_SIZE} / 1024 / 1024))Mb"
    else
        echo "$((${PACKAGE_SIZE} / 1024))Kb"
    fi
    if [ -n "${PACKAGE_DATA}" ]; then
        PACKAGE_DATA_LINESTART=$(cat Packages | grep -x -n "Package: ${PACKAGE_DATA}" | cut -d ':' -f 1 | sort -n | tail -n 1)
        PACKAGE_DATA_NUMLINES=$(cat Packages | tail -n +$((${PACKAGE_DATA_LINESTART} + 1)) | grep -n "Package: " | head -n 1 | cut -d ':' -f 1)
        if [ -n "${PACKAGE_DATA_NUMLINES}" ]; then
            PACKAGE_DATA_DETAILS=$(cat Packages | tail -n +${PACKAGE_DATA_LINESTART} | head -n ${PACKAGE_DATA_NUMLINES})
        else
            PACKAGE_DATA_DETAILS=$(cat Packages | tail -n +${PACKAGE_DATA_LINESTART})
        fi
        PACKAGE_DATA_SIZE=$(echo "${PACKAGE_DATA_DETAILS}" | grep -v "Installed-Size:" | awk 'sub("Size: ","")')
        if [ ${PACKAGE_DATA_SIZE} -gt 1048576 ]; then
            echo "+ $((${PACKAGE_DATA_SIZE} / 1024 / 1024))Mb (data)"
        else
            echo "+ $((${PACKAGE_DATA_SIZE} / 1024))Kb (data)"
        fi
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
            if echo "${PACKAGE_PROVIDES}" | grep -q clap-plugin; then
                echo "CLAP "
            fi
            echo "</td></tr>"
        fi
    fi
    echo "<tr><td>Downloads:</td><td>"

    if echo "${PACKAGE_BASENAME}" | grep -q "carla-bridge-win64_"; then
        # amd64
        echo "<a href=\"${PACKAGES_BASE_HTTPS}${PACKAGE_BASENAME}\" target=\"_blank\">amd64</a>&nbsp;&nbsp;"
        # i386
        PACKAGE_BASENAME_ARCHED=$(echo "${PACKAGE_BASENAME}" | sed "s/-win64_/-win32_/g" | sed "s/_amd64.deb/_i386.deb/g")
        echo "<a href=\"${PACKAGES_BASE_HTTPS}${PACKAGE_BASENAME_ARCHED}\" target=\"_blank\">i386</a>&nbsp;&nbsp;(install both)"

    elif echo "${PACKAGE_BASENAME}" | grep -q "carla-vst-wine_"; then
        # amd64
        echo "<a href=\"${PACKAGES_BASE_HTTPS}${PACKAGE_BASENAME}\" target=\"_blank\">amd64</a>&nbsp;&nbsp;"
        # i386
        PACKAGE_BASENAME_ARCHED=$(echo "${PACKAGE_BASENAME}" | sed "s/_amd64.deb/_i386.deb/g")
        echo "<a href=\"${PACKAGES_BASE_HTTPS}${PACKAGE_BASENAME_ARCHED}\" target=\"_blank\">i386</a>&nbsp;&nbsp;"

    elif echo "${PACKAGE_BASENAME}" | grep -q "wineasio_"; then
        # amd64
        PACKAGE_BASENAME_ARCHED=$(echo "${PACKAGE_BASENAME}" | sed "s/wineasio_/wineasio-amd64_/g")
        echo "<a href=\"${PACKAGES_BASE_HTTPS}${PACKAGE_BASENAME_ARCHED}\" target=\"_blank\">amd64</a>&nbsp;&nbsp;"
        # i386
        PACKAGE_BASENAME_ARCHED=$(echo "${PACKAGE_BASENAME}" | sed "s/wineasio_/wineasio-i386_/g" | sed "s/_amd64.deb/_i386.deb/g")
        echo "<a href=\"${PACKAGES_BASE_HTTPS}${PACKAGE_BASENAME_ARCHED}\" target=\"_blank\">i386</a>&nbsp;&nbsp;"

    elif echo "${PACKAGE_BASENAME}" | grep -q "_all.deb"; then
        echo "<a href=\"${PACKAGES_BASE_HTTPS}${PACKAGE_BASENAME}\" target=\"_blank\">all</a>&nbsp;&nbsp;"

    else
        for ARCH in ${PACKAGES_ARCHS[@]}; do
            if [ "${ARCH}" = "i386" ] && (cat Packages.focal | grep -x -q "Package: ${PACKAGE}"); then
                continue
            fi
            PACKAGE_BASENAME_ARCHED=$(echo "${PACKAGE_BASENAME}" | sed "s/_amd64.deb/_${ARCH}.deb/g")
            echo "<a href=\"${PACKAGES_BASE_HTTPS}${PACKAGE_BASENAME_ARCHED}\" target=\"_blank\">${ARCH}</a>&nbsp;&nbsp;"
        done
    fi

    if [ -n "${PACKAGE_DATA}" ]; then
        if has_separate_data_package ${PACKAGE}; then
            PACKAGE_BASENAME_DATA=$(echo "${PACKAGE_BASENAME}" | sed "s|${PACKAGE}|${PACKAGE_DATA}|g" | sed "s/_amd64.deb/_all.deb/g")
        else
            PACKAGE_BASENAME_DATA=$(echo "${PACKAGE_BASENAME}" | sed "s|${PACKAGE}_|${PACKAGE_DATA}_|g" | sed "s/_amd64.deb/_all.deb/g")
        fi
        echo "<a href=\"${PACKAGES_BASE_HTTPS}${PACKAGE_BASENAME_DATA}\" target=\"_blank\">data</a>"
    fi
    echo "</td></tr>"
    echo "</table></div></div>"

    # separator
    echo "<br/>"
    echo
done

rm -f Packages Packages.bionic Packages.focal
