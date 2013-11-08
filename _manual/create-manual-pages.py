#!/usr/bin/env python3

import os

manualPages = (
"kxstudio_introduction",
"kxstudio_and_free_software",
"downloading_and_booting_kxstudio",
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
    webpage = "http://www.wiki.linuxmusicians.com/doku.php?id=%s" % page
    #os.system("wget %s -O %s" % (webpage, tmppage))

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
    readPart4 = readPart3.split("<h1><a name=", 1)[1].strip()
    # get the title
    kxPageTitle = readPart4.split(">", 1)[1].split("</a>", 1)[0].strip()

    # remove initial bits of html code (title)
    readPart5 = readPart4.split("</h1>", 1)[1].strip()

    # html cleanup
    readPart6 = readPart5.replace("<h2><a name=", "<h2><span name=").replace("</a></h2>", "</span></h2>")
    readPart7 = readPart6.replace("/lib/exe/", "http://www.wiki.linuxmusicians.com/lib/exe/")

    # custom mods
    readPart8 = readPart7.replace("http://www.wiki.linuxmusicians.com/lib/exe/detail.php?id=jack_configuration&amp;cache=cache&amp;media=cadence-jack-settings.png",
                                  "http://kxstudio.sourceforge.net/screenshots/cadence-jacksettings2.png")
    readPart8 = readPart8.replace("http://www.wiki.linuxmusicians.com/lib/exe/fetch.php?w=&amp;h=&amp;cache=cache&amp;media=cadence-jack-settings.png",
                                  "http://kxstudio.sourceforge.net/screenshots/cadence-jacksettings2.png")

    readPart8 = readPart8.replace("http://www.wiki.linuxmusicians.com/lib/exe/detail.php?id=cadence_introduction&amp;cache=cache&amp;media=cadence.png",
                                  "http://kxstudio.sourceforge.net/screenshots/cadence1.png")
    readPart8 = readPart8.replace("http://www.wiki.linuxmusicians.com/lib/exe/fetch.php?w=&amp;h=&amp;cache=cache&amp;media=cadence.png",
                                  "http://kxstudio.sourceforge.net/screenshots/cadence1.png")

    readPart8 = readPart8.replace("http://www.wiki.linuxmusicians.com/lib/exe/detail.php?id=simple_claudia_studio&amp;cache=cache&amp;media=claudia2.png",
                                  "http://kxstudio.sourceforge.net/screenshots/claudia-qtractor.png")
    readPart8 = readPart8.replace("http://www.wiki.linuxmusicians.com/lib/exe/fetch.php?w=&amp;h=&amp;cache=cache&amp;media=claudia2.png",
                                  "http://kxstudio.sourceforge.net/screenshots/claudia-qtractor.png")

    readPart8 = readPart8.replace("http://www.wiki.linuxmusicians.com/lib/exe/detail.php?id=alsa_and_kxstudio&amp;cache=cache&amp;media=kmixer.png",
                                  "http://kxstudio.sourceforge.net/screenshots/kmix.png")
    readPart8 = readPart8.replace("http://www.wiki.linuxmusicians.com/lib/exe/fetch.php?w=&amp;h=&amp;cache=cache&amp;media=kmixer.png",
                                  "http://kxstudio.sourceforge.net/screenshots/kmix.png")

    readPart8 = readPart8.replace(" The &#039;UAC3553B&#039; tab displays controls for a USB audio device whilst &#039;Playback Streams&#039; can be ignored unless you are using PulseAudio.",
                                  "")

    readPart8 = readPart8.replace("as &#039;Mic&#039; and &#039;Mic Boost&#039; do", "as &#039;Beep&#039; does")

    readPart8 = readPart8.replace("<a href=\"/doku.php?id=", "<a href=\"<?php echo $ROOT; ?>/Documentation:Manual:")

    kxPageContent  = '<?php\n'
    kxPageContent += '$PAGE_TITLE    = "KXStudio";\n'
    kxPageContent += '$PAGE_TYPE     = "NONKXSTUDIO";\n'
    kxPageContent += '$PAGE_SOURCE_1 = ARRAY("/Documentation", "/Documentation", "/Documentation:Manual:%s");\n' % page
    kxPageContent += '$PAGE_SOURCE_2 = ARRAY("Documentation", "Manual", "%s");\n' % kxPageTitle
    kxPageContent += 'include_once("includes/header.php");\n'
    kxPageContent += '?>\n'
    kxPageContent += '\n'

    kxPageContent += readPart8
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
