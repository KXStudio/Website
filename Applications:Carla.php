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
    Carla currently supports LADSPA (including LRDF), DSSI, LV2, and VST plugin formats, plus GIG, SF2 and SFZ file support.<br/>
    It uses JACK as the default and preferred audio driver but also supports native drivers like ALSA, DirectSound or CoreAudio.<br/>
</p>
<p>
    There are 3 types of engine processing:
</p>
<ul>
    <li><b>Multi-client</b>: (JACK driver only)<br/>
        Every single plugin is exposed as a new JACK client. Audio and MIDI ports are registered as needed.
    </li>
    <li><b>Single-client</b>: (JACK driver only)<br/>
        Same as Multi-client, except that all JACK ports belong to a single master client.<br/>
        This is needed when a setup doesn't support multi-client JACK apps, such as LADISH.
    </li>
    <li><b>Rack</b>:<br/>
        Plugins are processed in order, from top to bottom.<br/>
        Plugins with non-stereo audio channels are not supported, but a forced-stereo option is available for Mono ones.
    </li>
</ul>
<p>
    Note: The internal patchbay does not save/restore connections yet, so you'll want to run Carla under some kind of Session Management. LADISH level 1 and NSM are implemented.
</p>

<!-- Interface -->
<h3><span class="mw-headline" id="Interface"> The Interface </span></h3>
<p>
    By default Carla uses its own internal theme, a screenshot of it follows along with some plugins:<br/>
    <a href="screenshots/carla.png" class="external text" rel="nofollow"><img src="screenshots/carla.png" alt="carla.png" /></a><br/>
    The user can keep the custom theme but use system colors, or simply disable the custom theme altogether.<br/>
    The result may not be as nice though.<br/>
</p>
<p>
    The 'Patchbay' uses the same canvas engine that Catarina, Catia and Claudia do:
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

<!-- Release Notes -->
<h3><span class="mw-headline" id="ReleaseNotes"> Release Notes </span></h3>
<p>
    The following are the release notes for version 1.0.2:
</p>
<ul>
    <li>Canvas does not save or restore connections.<br/>
        You need to use external session management for now.</li>

    <li>LADISH does not support multi-client JACK applications.<br/>
        To prevent any issues Carla will switch to single-client mode automatically.</li>

    <li>Rack mode is still a bit experimental, specially on non-JACK drivers.</li>

    <li>LV2 plugin support is incomplete (although already in a good state).<br/>
        Plugins that use CV ports or Worker extension will not work right now.</li>

    <li>Carla will not work with non-native LV2 Plugin UIs that require the instance-data extension.<br/>
        This is by design and not a bug.</li>

    <li>OSC control seems to work well, but has not been tested in great detail.<br/>
        Be sure to report any issues.</li>

    <li>Carla "PRO" theme, Carla-Control and ZynAddSubFX internal plugin are not available for Windows at this point.</li>
</ul>

<!-- Download -->
<h3><span class="mw-headline" id="Download"> Download </span></h3>
<p>
    Carla is available in the KXStudio repositories and ArchLinux AUR (both with 'carla' package name).<br/>
    <img src="images/ico_arch.png" alt="" class="img_text_align_spaced"/>
        <a href="https://aur.archlinux.org/packages/carla/" class="external text a_bigger_text" rel="nofollow" target="_blank">
         ArchLinux</a> (AUR)<br/>
    <img src="images/ico_debian.png" alt="" class="img_text_align_spaced"/>
        <a href="apt://carla" class="external text a_bigger_text">
         Debian/Ubuntu</a> (via KXStudio repositories)<br/>
</p>
<p>
    Pre-compiled binaries are available for Linux and Windows.<br/>
    <img src="images/ico_linux.png" alt="" class="img_text_align_spaced"/>
        <a href="http://sourceforge.net/projects/kxstudio/files/Releases/carla/Carla-1.1.0-linux32.tar.xz/download" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Linux 32bit</a><br/>
    <img src="images/ico_linux.png" alt="" class="img_text_align_spaced"/>
        <a href="http://sourceforge.net/projects/kxstudio/files/Releases/carla/Carla-1.1.0-linux64.tar.xz/download" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Linux 64bit</a><br/>
    <img src="images/ico_windows.png" alt="" class="img_text_align_spaced"/>
        <a href="http://sourceforge.net/projects/kxstudio/files/Releases/carla/Carla-1.1.0-win32.zip/download" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Windows 32bit</a><br/>
</p>
<p>
    The latest source code is hosted on github, together with bug reports, feature requests, etc.<br/>
     <img src="images/ico_github.png" alt="" class="img_text_align_spaced"/>
        <a href="https://github.com/falkTX/Carla" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Source code</a><br/>
     <img src="images/ico_github.png" alt="" class="img_text_align_spaced"/>
        <a href="https://github.com/falkTX/Carla/issues?state=open" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Bug reports / Feature requests</a><br/>
</p>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
