#!/usr/bin/env python3

import os

manualPages = (
"kxstudio_introduction",
"kxstudio_and_free_software",
"installing_kxstudio",
"package_management",
"video_drivers",
"included_and_recommended_apps",
"linux_audio_overview",
"alsa_and_kxstudio",
"cadence_introduction",
"jack_configuration",
"simple_claudia_studio",
"latency",
"wineasio_and_reaper",
"useful_links_and_getting_help"
)

for page in manualPages:
    print(page)
    tmppage = "tmp_%s" % page
    webpage = "http://wiki.linuxaudio.org/wiki/%s" % page
    os.system("wget %s -O %s" % (webpage, tmppage))

    tmppageFd   = open(tmppage, "r")
    tmppageRead = tmppageFd.read().strip()
    tmppageFd.close()

    # remove initial html code
    readPart1 = tmppageRead.split("<!-- wikipage start -->", 1)[1].strip()
    # remove TOC, if any
    readPart2 = readPart1.split("<!-- TOC END -->", 1)[-1].strip()
    # remove final html code
    readPart3 = readPart2.split("<!-- wikipage stop -->", 1)[0].strip()

    # remove first part of the page, we want the title
    readPart4 = readPart3.split("<h1 class=\"sectionedit1\"><a name=", 1)[1].strip()
    # get the title
    kxPageTitle = readPart4.split(">", 1)[1].split("</a>", 1)[0].strip()

    # remove initial bits of html code (title)
    readPart5 = readPart4.split("</h1>", 1)[1].strip()

    # custom mods
    readPart5 = readPart5.replace("/_detail/wiki/cadence.png?id=wiki%3Acadence_introduction",
                                  "<?php echo $ROOT; ?>/screenshots/cadence1.png")
    readPart5 = readPart5.replace("/_media/wiki/cadence.png",
                                  "<?php echo $ROOT; ?>/screenshots/cadence1.png")

    readPart5 = readPart5.replace("/_detail/wiki/cadence-wineasio.png?id=wiki%3Awineasio_and_reaper",
                                  "<?php echo $ROOT; ?>/screenshots/cadence3.png")
    readPart5 = readPart5.replace("/_media/wiki/cadence-wineasio.png",
                                  "<?php echo $ROOT; ?>/screenshots/cadence3.png")

    readPart5 = readPart5.replace("/_detail/wiki/cadence-jack-settings.png?id=wiki%3Ajack_configuration",
                                  "<?php echo $ROOT; ?>/screenshots/cadence-jacksettings2.png")
    readPart5 = readPart5.replace("/_media/wiki/cadence-jack-settings.png",
                                  "<?php echo $ROOT; ?>/screenshots/cadence-jacksettings2.png")

    readPart5 = readPart5.replace("/_detail/wiki/claudia2.png?id=wiki%3Asimple_claudia_studio",
                                  "<?php echo $ROOT; ?>/screenshots/claudia-qtractor.png")
    readPart5 = readPart5.replace("/_media/wiki/claudia2.png",
                                  "<?php echo $ROOT; ?>/screenshots/claudia-qtractor.png")

    readPart5 = readPart5.replace("/_detail/wiki/kmixer.png?id=wiki%3Aalsa_and_kxstudio",
                                  "<?php echo $ROOT; ?>/screenshots/kmix.png")
    readPart5 = readPart5.replace("/_media/wiki/kmixer.png",
                                  "<?php echo $ROOT; ?>/screenshots/kmix.png")

    k1 = '<a href="/_detail/wiki/kmix-tray.png?id=wiki%3Aalsa_and_kxstudio" class="media" title="wiki:kmix-tray.png">'
    k2 = '<img src="/_media/wiki/kmix-tray.png" class="media" title="The kmix icon" alt="The kmix icon" />'
    k3 = '</a>'
    readPart5 = readPart5.replace(k1+k2+k3, k2)
    readPart5 = readPart5.replace('?w=500" class="mediacenter" alt="" width="500"', '" class="media" alt=""')

    # html cleanup
    for i in range(2, 10):
        readPart5 = readPart5.replace(" class=\"sectionedit%i\"" % i, "")
    readPart5 = readPart5.replace("<h2><a name=", "<h2><span name=").replace("</a></h2>", "</span></h2>")
    readPart5 = readPart5.replace("<h3><a name=", "<h3><span name=").replace("</a></h3>", "</span></h3>")
    readPart5 = readPart5.replace("/_detail/wiki/", "http://wiki.linuxaudio.org/_detail/wiki/")
    readPart5 = readPart5.replace("/_media/wiki/", "http://wiki.linuxaudio.org/_media/wiki/")
    readPart5 = readPart5.replace('href="/wiki/', 'target="_blank" href="http://wiki.linuxaudio.org/wiki/')
    readPart5 = readPart5.replace('title="wiki:', 'title="')

    # FIXME: this should happen on the wiki
    readPart5 = readPart5.replace("kxstudio.sourceforge.net", "kxstudio.linuxaudio.org")

    # final adjustment
    readPart5 = readPart5.replace(" The &#039;UAC3553B&#039; tab displays controls for a USB audio device whilst &#039;Playback Streams&#039; can be ignored unless you are using PulseAudio.",
                                  "")
    readPart5 = readPart5.replace("as &#039;Mic&#039; and &#039;Mic Boost&#039; do", "as &#039;Beep&#039; does")

    readPart5 = readPart5.replace('href="http://kxstudio.linuxaudio.org/', 'href="<?php echo $ROOT; ?>/')
    readPart5 = readPart5.replace('title="http://kxstudio.linuxaudio.org/', 'title="')

    kxPageContent  = '<?php\n'
    kxPageContent += '$PAGE_TITLE    = "KXStudio";\n'
    kxPageContent += '$PAGE_TYPE     = "NONKXSTUDIO";\n'
    kxPageContent += '$PAGE_SOURCE_1 = ARRAY("/Documentation", "/Documentation", "/Documentation:Manual:%s");\n' % page
    kxPageContent += '$PAGE_SOURCE_2 = ARRAY("Documentation", "Manual", "%s");\n' % kxPageTitle
    kxPageContent += 'include_once("includes/header.php");\n'
    kxPageContent += '?>\n'
    kxPageContent += '\n'

    kxPageContent += readPart5
    kxPageContent += '\n'

    kxPageContent += '\n'
    kxPageContent += '<p><br/></p>\n'
    kxPageContent += '\n'

    kxPageContent += '<?php\n'
    kxPageContent += 'include_once("includes/footer.php");\n'
    kxPageContent += '?>\n'

    pageFd = open("Documentation:Manual:%s.php" % page, "w")
    pageFd.write(kxPageContent)
    pageFd.close()

    # removing temporary file
    os.remove(tmppage)
