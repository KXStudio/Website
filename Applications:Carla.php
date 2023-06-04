<?php
$PAGE_TITLE    = "KXStudio : Applications : Carla";
$PAGE_TYPE     = "APPLICATION";
$PAGE_SOURCE_1 = ARRAY("/Applications", "/Applications:Carla");
$PAGE_SOURCE_2 = ARRAY("Applications", "Carla");
include_once("includes/header.php");
include_once("includes/versions.php");
?>

<!-- Intro -->
<p>
    Carla is a fully-featured modular audio plugin host, with support for many audio drivers and plugin formats.<br/>
    It has some nice features like transport control, automation of parameters via MIDI CC and remote control over OSC.<br/>
</p>
<p>
    Carla currently supports LADSPA (including LRDF), DSSI, LV2, VST2, VST3 and AU plugin formats, plus SF2 and SFZ file support.<br/>
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

<!-- Goals and Vision -->
<h3><span class="mw-headline" id="Goals-and-Vision"> Goals and Vision </span></h3>
<p>
    Carla has the goal of being a simple and quick-to-use libre and open-source modular plugin host.<br/>
    This means several things:
</p>
<ul>
    <li>Be 100% free (free in price while also being free to use, modify and redistribute)</li>
    <li>Have its main features be simple to use</li>
    <li>Be fast from starting up to running plugins and having sound (assuming the user knows what to do)</li>
</ul>
<p>
    While simple in nature, a dumb-down host is not the target.<br/>
    Rather, it aims to be a simple tool that has advanced features under the hood, toggled by the user as needed.<br/>
    The basic functionality should be easily accessible and intuitive, while not making it hard for advanced users to do what they want.
</p>
<p>
    Carla's main functionality should be all about plugins and modularity, with Rack-mode (stereo top-down processing) as a bonus.<br/>
    In order to achieve this, it should load as many plugin formats as possible and allow inter-connectivity between them.<br/>
    Plugin bridges are used to load even more plugin formats and types, sometimes even those that are not native to the current platform.
</p>
<p>
    Carla should make it possible for others to use it within their projects.<br/>
    This is achieved by means of a simple API, plus Carla itself as a plugin.
</p>
<p>
    Remote control (over the network), while not its focus, should be possible.<br/>
    The backend can be running in one machine, while the frontend is in another.<br/>
    This is related to the previous point, where Carla should be usable by other projects.<br/>
    Being able to be remotely controlled allows Carla to run in embedded systems.
</p>
<p>
    Backwards-compatibility is a must.<br/>
    Carla should never implement a new feature that breaks old projects, nor making new projects unloadable in old versions.<br/>
    While a project with new features obviously won't load those in old Carla versions, the "old" supported features have to remain backwards-compatible.
</p>
<p>
    Carla should attempt to correct plugin mistakes whenever possible, so it runs as many of them as possible. A warning is logged in such cases.<br/>
    The target is to not annoy users that are unable to fix things by themselves (they cannot write code usually).<br/>
    The logged warnings should be clear enough that 3rd party developers understand what they have to fix after reading them.
</p>
<p>
    Carla should also be a great tool for debugging and developing new plugins.<br/>
    This is made possible by providing ways to run without audio, aka dummy driver, in order to detect leaks and memory issues.<br/>
    It also provides a way to test a single plugin and/or its custom UI.
</p>
<p>
    Finally, Carla should be able to be compiled and run in as many formats and platforms as possible.<br/>
    This means Linux, macOS and Windows as first-class platforms, but also be able to run in BSDs, HaikuOS and any other POSIX-compliant system.<br/>
    In terms of formats, this means running as Standalone and plugin (LV2 and VST2 minimum), while also providing its own API to easily extend it to more places.
</p>
<p>
    As a final note, it is worth saying that the personal goal of its author is to be able to make full songs within this single tool.<br/>
    This often involves running other tools inside Carla, but everything is still contained within it and managed by it.<br/>
    New features and requirements might be added to Carla as a way to achieve this goal.
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

<!-- Videos -->
<h3><span class="mw-headline" id="Videos"> Videos </span></h3>
<p>
    A few videos from falkTX, Carla's creator, showing off Carla's features and a few workflows.
</p>
<h6>Sonoj 2017</h6>
<p>
    <iframe width="1024" height="576" src="https://media.ccc.de/v/sonoj2017-1704-carla-plugin-host/oembed" frameborder="0" allowfullscreen></iframe>
</p>
<h6>LAC 2018</h6>
<p>
    <iframe width="1024" height="576" src="https://media.ccc.de/v/lac2018-24-carla_plugin_host_feature_overview_and_workflows/oembed" frameborder="0" allowfullscreen></iframe>
</p>

<!-- Download -->
<h3><span class="mw-headline" id="Download"> Download </span></h3>
<p>
    Carla is available in the KXStudio repositories, Fedora and ArchLinux (all with 'carla' package name).
</p>
<p>
    Pre-compiled binaries are available for Linux, macOS and Windows (version <?php echo $VERSION_CARLA; ?>).<br/>
    <img src="images/ico_linux.png" alt="" class="img_text_align_spaced"/>
        <a href="https://github.com/falkTX/Carla/releases/download/v<?php echo $VERSION_CARLA_OLD; ?>/Carla_<?php echo $VERSION_CARLA_OLD; ?>-linux32.tar.xz" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Linux 32bit</a> (requires Qt 5.9 or higher)<br/>
    <img src="images/ico_linux.png" alt="" class="img_text_align_spaced"/>
        <a href="https://github.com/falkTX/Carla/releases/download/v<?php echo $VERSION_CARLA_OLD; ?>/Carla_<?php echo $VERSION_CARLA_OLD; ?>-linux64.tar.xz" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Linux 64bit</a> (requires Qt 5.9 or higher)<br/>
    <img src="images/ico_mac.png" alt="" class="img_text_align_spaced"/>
        <a href="https://github.com/falkTX/Carla/releases/download/v<?php echo $VERSION_CARLA; ?>/Carla-<?php echo $VERSION_CARLA_MAJ; ?>-macos-universal.dmg" class="external text a_bigger_text" rel="nofollow" target="_blank">
         MacOS universal build</a> (requires macOS 10.12 or higher)<br/>
    <img src="images/ico_windows.png" alt="" class="img_text_align_spaced"/>
        <a href="https://github.com/falkTX/Carla/releases/download/v<?php echo $VERSION_CARLA; ?>/Carla-<?php echo $VERSION_CARLA_MAJ; ?>-win32.zip" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Windows 32bit</a><br/>
    <img src="images/ico_windows.png" alt="" class="img_text_align_spaced"/>
        <a href="https://github.com/falkTX/Carla/releases/download/v<?php echo $VERSION_CARLA; ?>/Carla-<?php echo $VERSION_CARLA_MAJ; ?>-win64.zip" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Windows 64bit</a><br/>
</p>
<p>
    The latest source code is hosted on github, together with bug reports, feature requests, etc.<br/>
     <img src="images/ico_github.png" alt="" class="img_text_align_spaced"/>
        <a href="https://github.com/falkTX/Carla/" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Project page</a><br/>
     <img src="images/ico_github.png" alt="" class="img_text_align_spaced"/>
        <a href="https://github.com/falkTX/Carla/archive/main.zip" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Source code (zip)</a><br/>
     <img src="images/ico_github.png" alt="" class="img_text_align_spaced"/>
        <a href="https://github.com/falkTX/Carla/issues?state=open" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Bug reports / Feature requests</a><br/>
</p>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
