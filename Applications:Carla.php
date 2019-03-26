<?php
$PAGE_TITLE    = "KXStudio : Applications : Carla";
$PAGE_TYPE     = "APPLICATION";
$PAGE_SOURCE_1 = ARRAY("/Applications", "/Applications:Carla");
$PAGE_SOURCE_2 = ARRAY("Applications", "Carla");
include_once("includes/header.php");
?>

<!-- Intro -->
<p>
    Carla is an audio plugin host, with support for many audio drivers and plugin formats.<br/>
    It has some nice features like automation of parameters via MIDI CC (and send output back as MIDI too) and full OSC control.<br/>
</p>
<p>
    Carla currently supports LADSPA (including LRDF), DSSI, LV2, VST2/3 and AU plugin formats, plus GIG, SF2 and SFZ file support.<br/>
    It uses JACK as the default and preferred audio driver but also supports native drivers like ALSA, DirectSound or CoreAudio.<br/>
</p>
<p>
    There are 4 types of engine processing:
</p>
<ul>
    <li><b>Single-client</b>: (JACK driver only)<br/>
        Same as Multi-client, except that all JACK ports belong to a single master client.<br/>
        This is needed when a setup doesn't support multi-client JACK apps, such as LADISH.
    </li>
    <li><b>Multi-client</b>: (JACK driver only)<br/>
        Every single plugin is exposed as a new JACK client. Audio and MIDI ports are registered as needed.
    </li>
    <li><b>Rack</b>:<br/>
        Plugins are processed in order, from top to bottom.<br/>
        Plugins with non-stereo audio channels are not supported, but a forced-stereo option is available for Mono ones.
    </li>
    <li><b>Patchbay</b>:<br/>
        Modular patchbay mode, just like in JACK Multi-client and many other modular applications.<br/>
        Every plugin gets its own canvas group and ports allowing you to interconnect plugin audio and MIDI.
    </li>
</ul>

<!-- Interface -->
<h3><span class="mw-headline" id="Interface"> The Interface </span></h3>
<p>
    By default Carla uses its own internal theme, a screenshot of it follows along with some plugins:<br/>
    <a href="screenshots/carla.png" class="external text" rel="nofollow"><img src="screenshots/carla.png" alt="carla.png" /></a><br/>
    The user can keep the custom theme but use system colors, or simply disable the custom theme altogether.<br/>
    The result may not be as nice though.<br/>
</p>
<p>
    The 'Patchbay' uses the same canvas engine that Catarina, Catia and Claudia do:<br/>
    <a href="screenshots/carla-patchbay.png" class="external text" rel="nofollow"><img src="screenshots/carla-patchbay.png" alt="carla-patchbay.png" /></a>
</p>
<p>
    The last tab "Log" simply prints debug info from time to time when an internal error occurs, in a way that doesn't disturb the user.<br/>
    This tab is not available in the Windows version.<br/>
</p>

<!-- Usage -->
<h3><span class="mw-headline" id="Usage"> Usage </span></h3>
<p>
    The first time you run Carla you'll most likely want to scan for plugins.<br/>
    You can configure your plugin folders in the settings if needed. When done, use "Add New Plugin" in the toolbar, then press the "Refresh" button.<br/>
</p>
<p>
    Because Carla is a somewhat complex application, a single page is not enough to cover it entirely.<br/>
    (We're currently writing the rest of the pages so be back soon!)
</p>
<!-- <ul> -->
<!-- <li></li> -->
<!-- </ul> -->

<!-- Download -->
<h3><span class="mw-headline" id="Download"> Download </span></h3>
<p>
    Carla is available in the KXStudio repositories, Fedora and ArchLinux (all with 'carla' package name).
</p>
<p>
    Pre-compiled binaries are available for Linux, macOS and Windows (version 2.0.0).<br/>
    <img src="images/ico_linux.png" alt="" class="img_text_align_spaced"/>
        <a href="https://github.com/falkTX/Carla/releases/download/v2.0.0/Carla_2.0.0-linux32.tar.xz" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Linux 32bit</a><br/>
    <img src="images/ico_linux.png" alt="" class="img_text_align_spaced"/>
        <a href="https://github.com/falkTX/Carla/releases/download/v2.0.0/Carla_2.0.0-linux64.tar.xz" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Linux 64bit</a><br/>
    <img src="images/ico_mac.png" alt="" class="img_text_align_spaced"/>
        <a href="https://github.com/falkTX/Carla/releases/download/v2.0.0/Carla_2.0.0-macos.dmg" class="external text a_bigger_text" rel="nofollow" target="_blank">
         MacOS 64bit</a><br/>
    <img src="images/ico_windows.png" alt="" class="img_text_align_spaced"/>
        <a href="https://github.com/falkTX/Carla/releases/download/v2.0.0/Carla_2.0.0-win32.zip" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Windows 32bit (No SSE, for old PCs)</a><br/>
    <img src="images/ico_windows.png" alt="" class="img_text_align_spaced"/>
        <a href="https://github.com/falkTX/Carla/releases/download/v2.0.0/Carla_2.0.0-win32-nosse.zip" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Windows 32bit</a><br/>
    <img src="images/ico_windows.png" alt="" class="img_text_align_spaced"/>
        <a href="https://github.com/falkTX/Carla/releases/download/v2.0.0/Carla_2.0.0-win64.zip" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Windows 64bit</a><br/>
</p>
<p>
    The latest source code is hosted on github, together with bug reports, feature requests, etc.<br/>
     <img src="images/ico_github.png" alt="" class="img_text_align_spaced"/>
        <a href="https://github.com/falkTX/Carla/" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Project page</a><br/>
     <img src="images/ico_github.png" alt="" class="img_text_align_spaced"/>
        <a href="https://github.com/falkTX/Carla/archive/master.zip" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Source code (zip)</a><br/>
     <img src="images/ico_github.png" alt="" class="img_text_align_spaced"/>
        <a href="https://github.com/falkTX/Carla/issues?state=open" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Bug reports / Feature requests</a><br/>
</p>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
