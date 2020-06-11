<?php
$PAGE_TITLE    = "KXStudio News";
$PAGE_TYPE     = "NEWS";
$PAGE_SOURCE_1 = ARRAY("/News");
$PAGE_SOURCE_2 = ARRAY("News");
include_once("includes/header.php");
?>

<p><b>THIS IS A FAKE PAGE, KXSTUDIO NEWS USES A DYNAMIC MODULE NOW</b></p>

<p>
    <span style="font-size: 20px">&gt; Carla 2.1.1 has been released</span><br/>
    On <i>2020-06-11</i> by<i> falkTX</i>
</p>

<p>
    This is a bugfix for Carla version v2.1 series, fixing many bug reports and stuff I found along the way.
</p>
<p>
    Carla is an audio plugin host, with support for many audio drivers and plugin formats.<br/>
    It has some nice features like automation of parameters via MIDI CC (and send output back as MIDI too) and full OSC control.<br/>
</p>

<h3>Changelog</h3>
<ul>
    <li>Fix carla-control not handling CLI argument for custom address</li>
    <li>Fix carla-plugin not handling all callbacks</li>
    <li>Fix carla-plugin LV2 UI not showing up if host supports touch feature</li>
    <li>Fix for some plugin formats having 0 audio ports</li>
    <li>Fix occasional crashes due to canvas shadow (Qt bug, shadow is disabled by now)</li>
    <li>Fix canvas ports text width calculation with new Qt</li>
    <li>Fix wrong assertion with size 1 MIDI messages</li>
    <li>Fix errors in the icons</li>
    <li>Fix incorrect base conversion for MIDI CC assignments</li>
    <li>Fix rpath specification in pkg-config files</li>
    <li>Fix build with Qt 5.15</li>
    <li>Discovery: Force language to be "C" (English) so we can parse errors</li>
    <li>Discovery: assume midi inputs = 1 if VST plugin is synth</li>
    <li>Make canvas ports and groups ignore middle mouse clicks</li>
    <li>Improve performance of canvas "inline display" rendering</li>
    <li>Other miscellaneous bug fixes</li>
</ul>

<h3>Downloads</h3>
<p>
    To download Carla binaries or source code, jump on over to the
      <a href="https://kx.studio/Downloads" class="external free" rel="nofollow" target="_blank">KXStudio downloads section</a>.<br/>
    Carla v2.1 is available pre-packaged in the KXStudio repositories, ArchLinux and Ubuntu since 20.04.
      On those you can simply install the <b>carla</b> package.<br/>
    Bug reports and feature requests are welcome! Jump on over to the
      <a href="https://github.com/falkTX/Carla" class="external free" rel="nofollow" target="_blank">Carla's Github project</a> page for those.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; KXStudio Monthly Report (May 2020)</span><br/>
    On <i>2020-05-31</i> by<i> falkTX</i>
</p>
<p>
    Hello all, another monthly report about the KXStudio project is here.<br/>
    It has been a few months since one of these, which I apologise for.<br/>
    It was wrong of me to assume I will have news every single month,
    some are just a bit slow on news due to external circumstances.
</p>
<p>
    Anyway, a lot of work is going into Carla,
    <a href="https://github.com/falkTX/Carla/pull/1158" target="_blank">lots of bug-fixes</a>.<br/>
    A good collection of them are piling up, which makes a v2.1.1 release worthy, so expect that in the next few days.
</p>
<p>
    One of the new features in Carla is Linux VST3 support, already available if you use <b>carla-git</b>.<br/>
    There is also a category filter in the add-plugin dialog now, and
    <a href="https://kx.studio/tmp/scr_osx_highdpi.png" target="_blank">better handling of high-dpi mode</a>.<br/>
    That is basically it in regards to frontend/GUI changes, everything else is on the backend/audio-host side.<br/>
    All of this will be in Carla v2.2, with a tentative release date of July 15.
</p>
<p>
    Other developments happening behind the scenes are a
    <a href="https://github.com/DISTRHO/DISTRHO-Ports/tree/juce6" target="_blank">DISTRHO-Ports</a>
    update
    (setting old JUCE aside and using new
    <a href="https://github.com/DISTRHO/juce/commits/juce6?after=5b18d44c570a061b1c7a074e5d86ac3d1b5d559a+0" target="_blank">juce6</a>
    branch for Linux VST3 plugins), plus
    <a href="https://github.com/DISTRHO/DISTRHO-Ports/pull/50" target="_blank">updating its build system to meson</a>.<br/>
    The <a href="https://github.com/wineasio/wineasio" target="_blank">WineASIO</a>
    project was finally given to me officially, so expect a release soon for that too.<br/>
    There is also a big
    <a href="https://github.com/DISTRHO/DPF/commits/pugl-upstream" target="_blank">DPF rework</a>
    going on, and a new project for
    <a href="https://github.com/DISTRHO/PawPaw" target="_blank">cross-platform LV2 plugin binaries</a>.<br/>
    Those will be announced at a later point in time, once ready.
</p>
<p>
    Regarding package updates in the repositories, there have been a few since the last monthly report. Those are:
</p>
<ul>
    <li>element added</i>
    <li>impro-visor added</i>
    <li>ladish fixed to work on systems without python2</i>
    <li>amsynth updated to 1.10.0</i>
    <li>avldrums.lv2 updated to 0.4.1</i>
    <li>bsequencer updated to 1.4.2</i>
    <li>bshapr updated to 0.9</i>
    <li>bslizr updated to 1.2.6</i>
    <li>carla-git updated</i>
    <li>fluajho updated to 1.5</i>
    <li>geonkick updated to 2.1.1</i>
    <li>lsp-plugins updated to 1.1.22</i>
    <li>mod-host updated to latest git</i>
    <li>patroneo updated to 1.5</i>
    <li>vico updated to 1.1</i>
    <li>x42-plugins updated to 20200411</i>
</ul>
<p>
    Not so much work got done in regards to the website and documentation.<br/>
    Perhaps for next time.
</p>
<p>
    That is all for now, stay safe out there.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Carla 2.1 is here!</span><br/>
    On <i>2020-04-15</i> by<i> falkTX</i>
</p>

<p>
    Exactly one year after 2.0, Carla version 2.1 is here!
</p>
<p>
    Carla is an audio plugin host, with support for many audio drivers and plugin formats.<br/>
    It has some nice features like automation of parameters via MIDI CC (and send output back as MIDI too) and full OSC control.<br/>
</p>
<p>
    This is a small but significant update that builds up on top of what was released in 2.0.<br/>
    Please see the
    <a href="https://kx.studio/News/?action=view&url=carla-21-rc1-is-here">
      2.1-RC1 announcement
    </a>
    for details on what is is new in 2.1.<br/>
</p>
<p>
    Unlike last time, there are no official plans for version 2.2 just yet, my focus will now be going into the DPF and JACK projects instead.<br/>
    The <a href="https://github.com/falkTX/Carla/tree/master" target="_blank">
      master branch of Carla's code repository
    </a>
    is now for 2.1, while the previous 2.0 master got renamed "hotfix-2.0.0".<br/>
    No new features will be added to 2.1 series, only bugfixes.<br/>
</p>

<h3>Changes since 2.1-RC2</h3>
<ul>
    <li>Add a simple cv2audio plugin</li>
    <li>Brown color for CV ports, to make them more easily recognizable</li>
    <li>Fix crash loading LV2 plugin with CV and latency ports</li>
    <li>Fix mingw/gcc-9 build</li>
</ul>

<h3>Changes between 2.1-RC2 and 2.1-RC1</h3>
<ul>
    <li>Fix crash on stack unwind for a few operations</li>
    <li>Fix duplicate data (name, label, uid) used in VST synth/fx Shell plugin</li>
    <li>Fix JACK metadata usage for multiple carla instances and plugin renames</li>
    <li>Fix MIDI CC assignment showing wrong selected value (base 16 vs 10)</li>
    <li>Fixup carla-control (was broken in RC1)</li>
    <li>Optimize and reduce memory usage of UI bridges</li>
    <li>Overall fix of postponed RT events</li>
    <li>Give focus to bridged UIs when first shown</li>
    <li>Ignore any LV2 patch:writable that is not an lv2:Parameter</li>
    <li>Rename experimental "prevent bad things" option and give it a tool-tip</li>
    <li>Support the new LV2 UI requestParameterValue API</li>
    <li>Support the new LV2 UI background/foreground color API</li>
    <li>Many other miscellaneous bug fixes, see the git log for details</li>
</ul>

<h3>Downloads</h3>
<p>
    To download Carla binaries or source code, jump on over to the
      <a href="https://kx.studio/Downloads" class="external free" rel="nofollow" target="_blank">KXStudio downloads section</a>.<br/>
    Carla v2.1 is available pre-packaged in the KXStudio repositories, ArchLinux and Ubuntu since 20.04.
      On those you can simply install the <b>carla</b> package.<br/>
    Bug reports and feature requests are welcome! Jump on over to the
      <a href="https://github.com/falkTX/Carla" class="external free" rel="nofollow" target="_blank">Carla's Github project</a> page for those.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; KXStudio Monthly Report (February 2020)</span><br/>
    On <i>2020-02-29</i> by<i> falkTX</i>
</p>
<p>
    Hello everyone, it is time for another monthly report in regards to the KXStudio project.<br/>
</p>
<p>
    First, there were many bugfixes made to Carla, we are very close to RC2.<br/>
    I only have 2 things that I want to do before the RC2,
    first being fixing multi-instance under multi-client mode and second is to finalize the last couple of bugfixes.<br/>
    So the RC2 should be out in a few days, maximum weeks.
</p>
<p>
    Second, something that came out of (re-)packaging WineASIO
    (and moving away from Cadence, but that is a story for another day...).<br/>
    I am taking over as maintainer of the WineASIO project.<br/>
</p>
<p>
    WineASIO is something that is mostly "done", there is not much that we can add to it.<br/>
    Since I have to keep it building in order to package it, I spoke with upstream and let them know I was available to take over.<br/>
    (maintaince work is pretty minimal, just got to make it build basically)
</p>
<p>
    We are trying to take over
    <a href="https://github.com/WineASIO" target="_blank">github.com/WineASIO</a>
    organization, so we can place the source code repository in there.<br/>
    If that takes too long, the repository will just end up at
    <a href="https://github.com/falkTX/WineASIO" target="_blank">github.com/falkTX/WineASIO</a>
    as it is for the moment.<br/>
    In any case, we will see v1.0.0 release of WineASIO quite soon!
</p>
<p>
    The KXStudio repositories' armhf build of surge has been fixed.<br/>
    I have opened a
    <a href="https://github.com/surge-synthesizer/surge/pull/1606" target="_blank">pull request on upstream surge</a>
    to discuss the armhf/arm64 needed changes (basically a SSE2 to NEON conversion).<br/>
    They are quite open to it, which is nice to see.<br/>
    We just need to fix some minor things now and that could likely be part of 1.7.0 release later on.<br/>
</p>
<p>
    Finally, these are the package updates made in the repositories:
</p>
<ul>
    <li>carla-git updated</i>
    <li>mod-cv-plugins updated to latest git</i>
    <li>sequencer64 updated to latest git, midi_control branch</i>
    <li>surge updated to 1.6.6</i>
    <li>cv-lfo-blender-lv2 added</i>
    <li>g2reverb added</i>
    <li>invada-studio-plugins (LADSPA) and invada-studio-plugins-lv2 added</i>
    <li>setbfree added, including VST2 version through lv2vst</i>
    <li>wineasio added</i>
    <li>zlfo added</i>
</ul>
<p>
    That is all for now. Have a great weekend everyone! :)
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; KXStudio Monthly Report (January 2020)</span><br/>
    On <i>2020-01-28</i> by<i> falkTX</i>
</p>
<p>
    Hello all, another monthly report about the KXStudio project is here.<br/>
</p>
<p>
    A few days ago, <a href="https://kx.studio/News/?action=view&url=carla-21-rc1-is-here">Carla 2.1-RC1 was announced</a>.<br/>
    As mentioned in that post, Carla's frontend move to C++ has started, for performance, reliability and debugging reasons.<br/>
    It is going to be something that, even though means a lot behind the scenes, visibly nothing will change. (except performance)<br/>
    Because of this, do not expect many UI related changes in Carla for the time being.
</p>
<p>
    There were more package updates in the repositories. Those are:
</p>
<ul>
    <li>lsp-plugins updated to 1.1.13</i>
    <li>x42-plugins updated to 20200114</i>
    <li>distrho-ports updated (added Temper as LV2 and VST plugin)</i>
    <li>bchoppr added</i>
    <li>bslizr added</i>
    <li>bsequencer added</i>
    <li>bshapr added</i>
    <li>geonkick added</i>
    <li>mod-cv-plugins added</i>
    <li>noise-repellent added</i>
    <li>regrader added</i>
</ul>
<p>
    A few of those were made possible thanks to LibraZik project, from which I imported a few.<br/>
    I am quite grateful for them, and you should be too! :)
</p>
<p>
    On a more personal side of things, I have started renting an office for work (both for employer and FLOSS stuff).<br/>
    Its setup took most of the time on the holidays, and quite a fair bit in January too.<br/>
    It is mostly done now, only final touches needed. It certainly helps as a kind of motivation boost, and as a way to keep focus too.
</p>
<p>
    Next month will be slower than usual, as I plan to focus more on "boring" stuff like updating the website and documentation.<br/>
    That is all for now.<br/>
</p>
<p>
    Since I mentioned it, I leave you with a picture of the office (the working area).<br/>
    See you next month!
</p>
<p>
    <img src="/screenshots/news/office-2020-01_d2.jpg" alt="office"/>
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Carla 2.1 RC1 is here!</span><br/>
    On <i>2020-01-19</i> by<i> falkTX</i>
</p>
<p>
    Hello again everyone, it is release day! <i>(kinda, just a casual 4 days late...)</i><br/>
</p>
<p>
    This is the announcement of the first release candidate of Carla 2.1.<br/>
    I am skipping the beta phase as done for the 2.0 release and going straight into a Release Candidate.<br/>
    This means there will be no more changes in the graphical user interface or engine/backend features, except when required for fixing bugs.<br/>
</p>
<p>
    Carla projects/sessions are meant to be fully compatible between between 2.0 and 2.1 versions, except for features marked experimental.<br/>
    The "native" API to access carla as plugin (as used by LMMS) is ABI and API-wise backwards compatible compatible with 2.0.<br/>
    If this is not the case, consider it a bug that needs to be fixed.
</p>
<p>
    As with the v2.0 release, the list of changes is a little big, so let's split it by parts.<br/>
    First, the highlights and major changes, in no particular order of relevance.<br/>
</p>

<br/>

<table><tr><td width="50%">
<a href="/screenshots/news/carla-2.1_cv-stuff.png">
    <img src="/screenshots/news/carla-2.1_cv-stuff.png" style="max-width:100%;height:auto;" alt="settings"/>
</a>
</td><td width="50%">
<h3>Better CV Support</h3>
<p>
    CV ports are now supported in the internal patchbay mode, meaning you do not need to use JACK with Carla in order to use CV plugins.
</p>
<p>
    Automable parameters can now be exposed as a CV port, so they can be controlled by regular CV sources or other plugins.<br/>
    This is a kinda feature preview, as there are some limitations at the moment:
</p>
<ul>
    <li>Parameter changes are not sample accurate<br/>(in a later version, Carla will split buffer up to 32 frames for more fine-grained control changes)</li>
    <li>Not all plugin formats and parameter types are allowed to be controlled this way<br/>(to be extended as I test more compatibility)</li>
    <li>Only available for parameter inputs, not outputs</li>
</ul>
<p>
    In order to make CV more useful by default, a new internal "MIDI to CV" plugin was added, originally created by Bram Giesen.<br/>
    More plugins will be added as needed, for now I recommend to use
    <a href="https://github.com/blablack/ams-lv2" target="_blank">ams-lv2</a>
    and
    <a href="https://github.com/moddevices/mod-cv-plugins" target="_blank">mod-cv-plugins</a>
    as they already do a lot.<br/>
</p>
<p>
    Also, a new variant of Carla as plugin was created that provides audio, MIDI and 5 CV ports (for each side).<br/>
    This allows CV signals to flow in and out of Carla as a plugin.
</p>
</td></tr></table>

<br/>

<table><tr><td width="50%">
<a href="/screenshots/news/carla-2.1_high-dpi.png">
    <img src="/screenshots/news/carla-2.1_high-dpi.png" style="max-width:100%;height:auto;" alt="settings"/>
</a>
</td><td width="50%">
<h3>High-DPI support (work in progress)</h3>
<p>
    Initial work was done to support high-DPI screens.<br/>
    Note that this was not tested very extensively, due to lack of proper hardware, but the requirements in terms of code are all there.<br/>
    There are still a few "normal" resolution bitmaps in use, to be replaced in future releases.<br/>
    You can click on the screenshot on the left to see Carla rendered at 3x the resolution.<br/>
    <br style="line-height:0.75em"/>
    So for now, the situation is:
</p>
<ul>
    <li>Most of the icons changed to scalable format</li>
    <li>UI will scale with the desktop automatically, as Qt takes care of that for us</li>
    <li>Some bitmaps still remain, to be replaced by vector images in a future release</li>
    <li>Not extensively tested, feedback is welcome</li>
</ul>
</td></tr></table>

<br/>

<table><tr><td width="50%">
<a href="/screenshots/news/carla-2.1_windows.png">
    <img src="/screenshots/news/carla-2.1_windows.png" style="max-width:100%;height:auto;" alt="settings"/>
</a>
</td><td width="50%">
<h3>Proper theme and Carla-Control for Windows</h3>
<p>
    The Windows build stack changed from using official Python and PyQt5 packages to msys ones, allowing us to link against them using mingw (Carla does not support MSVC)<br/>
    This makes it possible to use the proper "pro" theme like Linux and macOS already did, and also get Carla-Control finally working on Windows.
</p>
<p>
    Previously, the Carla Windows builds were using Qt's "fusion" theme (which the Carla "pro" theme is based on), which looks very similar but misses all of custom tweaks made for Carla.<br/>
    This includes, for example, preventing pop-up menus from taking the entire screen or ugly thick lines being drawn where a small one was expected.
</p>
<p>
    A small but important step towards cross-platform feature parity. \o/
</p>
</td></tr></table>

<br/>

<table><tr><td width="50%">
<a href="/screenshots/news/carla-2.1_mac-vst.png">
    <img src="/screenshots/news/carla-2.1_mac-vst.png" style="max-width:100%;height:auto;" alt="settings"/>
</a>
</td><td width="50%">
<h3>VST2 plugin for macOS and Windows, plus exposed parameters</h3>
<p>
    This is the final item that was missing for cross-platform feature parity.<br/>
    We now have Carla as VST2 plugin running on both macOS and Windows!
</p>
<p>
    Embedding of the full GUI on these systems is not possible, so a small "middleware" window is shown as the plugin custom UI.<br/>
    Not the best experience, but allows Carla to finally work as VST2.<br/>
</p>
<p>
    Additionally, 100 parameters are exposed to the host, dynamically used in the order of the plugins loaded.<br/>
    So for example, if the first plugin in the rack has 20 parameters, the first 20 parameters of carla-vst will be mapped to that plugin.<br/>
    This continues in order for the remaining plugin parameters until we reach 100 of them.
</p>
<p>
    When Carla is loaded as an internal plugin, parameters will be dynamically available too.<br/>
    This feature is not available in the LV2 version of Carla though, at least not yet.
</p>
<p>
    Note: Carla plugins are not "notarized" yet, so they will not run under latest macOS 10.15/Catalina where this is a requirement.
</p>
</td></tr></table>

<br/>

<table><tr><td width="50%">
<a href="/repo/screenshots/carla-vst-wine.png">
    <img src="/repo/screenshots/carla-vst-wine.png" style="max-width:100%;height:auto;" alt="settings"/>
</a>
</td><td width="50%">
<h3>Wine-native bridge, sorta experimental</h3>
<p>
    This is a way to load Linux binaries under Windows applications running with Wine, in case you need that for some reason<br/>
    Personally I made it so that I could run the native Carla inside FL Studio, which allows me to use its sequencer but not have to deal with Windows plugins.
</p>
<p>
    This is available in the KXStudio repositories as "carla-vst-wine" package, you need to copy /usr/lib/winvst/Carla* into your Wine VST dll folder to make it work.<br/>
    It requires Carla to be installed system-wide, so it cannot work if Carla is downloaded manually.
</p>
<p>
    Building it is kinda tricky, as it requires building a native-windows dll first, and then a few things with winegcc...<br/>
    Packager documentation will be added soon to Carla's source code repository, so other Linux distributions can pick it up.<br/>
</p>
<p>
    I demoed this feature at Sonoj last year (2019), you can watch it as the 3rd part of <a href="https://media.ccc.de/v/sonoj2019-1914-carla-magic" target="_blank">this video</a>.
</p>
</td></tr></table>

<table><tr><td width="50%">
<a href="/screenshots/news/carla-2.1_add-plugin.png">
    <img src="/screenshots/news/carla-2.1_add-plugin.png" style="max-width:100%;height:auto;" alt="settings"/>
</a>
</td><td width="50%">
<h3>Refreshed add-plugin dialog and favorite plugins</h3>
<p>
    The add-plugin dialog had a major overhaul, now looking much better and with more content visible at once.<br/>
    Target was to improve the user experience, making clear that there are filters available. (it was not so obvious in previous versions)
</p>
<p>
    The star on the most-left section of the table is to mark a plugin as a favorite, which will add it as a shortcut to the right-click menus on empty rack and patchbay areas.
</p>
</td></tr></table>

<table><tr><td width="50%">
<a href="/screenshots/news/carla-2.1_params.png">
    <img src="/screenshots/news/carla-2.1_params.png" style="max-width:100%;height:auto;" alt="settings"/>
</a>
</td><td width="50%">
<h3>Single-page and grouped plugin parameters</h3>
<p>
    The dialog for the generic plugin parameter view also had an update.<br/>
    All parameters are now placed in the same tab (separated only by input and output types), and grouped when supported by the plugin.<br/>
    The options for mapping a parameter to a MIDI CC were taken out and replaced by a button that triggers a menu with the relevant options.
</p>
<p>
    Note that, at the moment, only a few LV2 plugins support parameter groups.<br/>
    This is because most hosts do not support this feature, so plugins do not have many incentives to support such a thing.<br/>
    And with not a lot of plugins supporting it, hosts also do not care that much. The usual circular dependency deal...<br/>
    But since the feature applies quite nicely to Carla, made sense to add it.
</p>
<p>
    The group can be collapsed by clicking on it.
</p>
<p>
    A similar feature will be added to the patchbay in a later release, so we can group audio ports too. :)
</p>
</td></tr></table>

<h3>More UI changes</h3>
<p>
    The rack items will dynamically show as many knobs as possible<br/>
    You can now change the "skin" and color of any rack item, making it easy to identify certain plugins<br/>
    Added buffer-size, sample-rate and xrun information to the status; clicking on the xrun counter will reset it to zero<br/>
</p>

<h5>Canvas changes</h5>
<p>
    Right-clicking on a canvas group will show options for quickly connecting all ports to another group<br/>
    Many small tweaks and fixes, plus a few extra actions, as contributed by Nikita Zlobin (to be documented on the user manual)<br/>
    Support for Ardour-style inline-displays, marked experimental in this release (sadly cannot be made stable until Carla v3.0)<br/>
</p>

<h5>Carla-control and OSC rework</h5>
<p>
    Carla's OSC support has been reworked, now has its own dedicated page in the settings.<br/>
    Carla-Control has been extended to support all non-local-dependent features of the main Carla (like patchbay management and transport controls).<br/>
    This will be extended even further in future releases.<br/>
</p>

<h5>AU and VST3 support is back, by leveraging JUCE</h5>
<p>
    Disabled during a previous 2.0 beta release, support for the JUCE library was removed and replaced by a heavily stripped-down version of it. (while it was still GPlv2 licensed)<br/>
    The reasons for that decision still remain relevant, but in order to keep in mind with Carla's goals, I decided to add back JUCE support - but now completely optional.<br/>
    It will always be possible to build Carla without JUCE, it is only used for extra hardware and plugin format support.<br/>
    In fact, Linux builds by default do not use it, as there is no need for it.
</p>
<p>
    Anyway, the published macOS and Windows Carla builds do use JUCE, which means Carla supports VST3 under macOS and Windows, and AU under macOS.<br/>
    As a bonus, it is now possible to show the custom control panel of ASIO devices. :)
</p>
<p>
    Worth noting is that JUCE does not support VST3 under Linux at this point, so neither does Carla even if you build it yourself with JUCE enabled.
</p>

<h3>Other changes</h3>
<p>
    Within a bunch of small fixes and new implementations, here are some changes that deserve to be mentioned:<br/>
</p>
<ul>
    <li>Carla now requires Qt5, can no longer work with Qt4; but can still use LV2 Qt4 UIs with its built-in bridges</li>
    <li>NSM is now supported for JACK applications</li>
    <li>Added a 16 MIDI port mode for JACK applications</li>
    <li>Added "Cancelable actions" during project and plugin bridges load, so they will no longer time-out; instead the user has the option to cancel them at anytime</li>
    <li>Initial support for LV2 parameter API</li>
    <li>Initial support for LV2 file paths, assuming plugin has no custom UI (click on the show-gui button to open a file dialog)</li>
</ul>

<h3>Notes for developers and packagers</h3>
<ul>
    <li>Linking against the JACK library directly is now possible by using `make JACKBRIDGE_DIRECT=true`, which allows for building Carla as an internal client</li>
</ul>

<h3>Notes for users</h3>
<p>
    The code for scanning plugins had a little rework, again, making some internal data structures change.<br/>
    Because of this, a full rescan of your plugins is needed after the update.<br/>
</p>

<h3>Downloads</h3>
<p>
    To download Carla binaries or source code, jump on over to the <a href="https://kx.studio/Downloads" class="external free" rel="nofollow" target="_blank">KXStudio downloads section</a>.<br/>
    If you're using the KXStudio repositories, you can simply install "carla-git" (plus "carla-lv2" and "carla-vst" if you're so inclined).<br/>
    Bug reports and feature requests are welcome! Jump on over to the <a href="https://github.com/falkTX/Carla" class="external free" rel="nofollow" target="_blank">Carla's Github project</a> page for those.
</p>

<h3>Future and final notes</h3>
<p>
    I have started a change of the Carla's frontend coding language, from Python to C++ (for performance, reliability and debugging reasons).<br/>
    There are a few canvas related things, currently experimental, that can never be made stable or fast due to how Python/PyQt works.<br/>
    Also Carla is not scaling very well at the moment, and the addition of CV controlled parameters and inline-displays does not help its case.<br/>
    So a move of the entire frontend to C++ makes quite a lot of sense.<br/>
    Whenever this is finished a new release will be made.<br/>
    But it is going to be something that, even though means a lot behind the scenes, visibly nothing will change. (except performance)<br/>
    Because of this, do not expect many UI related changes in Carla for the time being.
</p>
<p>
    A user manual for Carla has been started.<br/>
    It proved to be quite helpful for development too, as I had to justify why things are the way they are, and explain how they work too.<br/>
    Now that Carla UI should not change too much for a while, it is the right time for such thing.<br/>
    I personally dislike writing such things, but understand it can be quite useful.<br/>
    The work-in-progress manual is at <a href="https://kx.studio/Documentation:Manual:Carla">https://kx.studio/Documentation:Manual:Carla</a>.<br/>
    (Not much to see there at the moment though, give me time)
</p>
<p>
    That's it.<br/>
    Please remember that this is a release candidate, and not the final release.<br/>
    Some issues are expected, I will do my best to fix all reports that get to me.<br/>
    If I don't know about the issues though, I can't fix them. So please report any issues you find, thanks!
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; KXStudio Monthly Report (December 2019)</span><br/>
    On <i>2019-12-16</i> by<i> falkTX</i>
</p>
<p>
    Hello all, another monthly report about the KXStudio project is here.<br/>
</p>
<p>
    There is not a whole lot of new exciting stuff this time around, as most of the time was spent on Carla new features and bug-fixing.<br/>
    I am doing a push towards CV support in Carla (a "MIDI to CV" internal plugin was added, for example),<br/>
    with only 1 new feature to be implemented - allowing to automate any regular parameter with CV.<br/>
    The idea is to make it easier to automate things in Carla, by exposing individual parameters in the patchbay as CV ports.<br/>
    There is only 1 month left for the planned release, so going to be tight on time, but still seems doable, specially with holidays coming.<br/>
    (so more free time to work on this)
</p>
<p>
    There were a few minor package updates in the repositories. Those are:
</p>
<ul>
    <li>x42-plugins updated to 20191215</i>
    <li>zam-plugins updated to 3.12</i>
    <li>sequencer64 added (Qt5 build from git master)</i>
</ul>
<p>
    A new small extra repository has been created, one I have been using for some time now.<br/>
    This came out of the necessity to update JACK2, but JACK not being something we can distribute in generic packages like KXStudio does for applications and plugins.<br/>
    A few pieces of software, like JACK2 and other libraries, cannot be made into generic deb packages.<br/>
    So, I want to create a few small but nice repositories for basic utilities and nice-to-have things.<br/>
    For now, I have created a first, small one for Ubuntu 18.04 users (which includes me, obviously :P) which contains an updated JACK2, Wine-RT, among other small things.<br/>
    You can find more details about this repository and all future ones coming soon at
      <a href="https://kx.studio/Repositories:Extras">https://kx.studio/Repositories:Extras</a>.
</p>
<p>
    In some news regarding the JACK2 project, it
      <a href="https://jackaudio.org/news/" target="_blank">has its own news page</a>
    now, so I won't be posting JACK2 related stuff here anymore.<br/>
    The latest about it, which is worth mentioning, is that its mailing list is back online once again! \o/
</p>
<p>
    <a href="https://github.com/falkTX/Cadence/releases/tag/v0.9.1" target="_blank">Cadence v0.9.1</a> was released, just tagging it in its git repo so distributions can pick it up.<br/>
    It was mostly needed due to an incompatibility with Python 3.8.
</p>
<p>
    And finally, donations for the KXStudio project (basically myself) are open once again, now even with a Patreon page.<br/>
    In the past I mentioned that, due to legal costs, it was not worth having them while in Germany and I would open them again once I moved.<br/>
    That happened a few months ago, but I dislike dealing with these things, so it took some time...<br/>
    They are open once again now, though I removed the PayPal subscription option and counter for now.<br/>
    (I am intentionally not posting the link here, I trust that if you care enough, you know where to find it)
</p>
<p>
    Next month hopefully a new Carla release will be here.<br/>
    Catia will be made into a standalone project, leaving Cadence behind. But that is news for another time... :)
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; KXStudio Monthly Report (November 2019)</span><br/>
    On <i>2019-11-16</i> by<i> falkTX</i>
</p>
<p>
    Hello everyone, it is time for another monthly report in regards to the KXStudio project.<br/>
</p>
<p>
    First, the most important I think, some small repository changes have been made.<br/>
    I added a "KXStudio" suffix to the repository names, so you get stuff like "KXStudio Plugins" in your package manager now.<br/>
    This was requested by a user, and makes a lot of sense.<br/>
    The bad news is that your package manager is likely to complain about the changes, as it thinks it is a sign of trouble.<br/>
    That is not the case though, as I am here just informing you of that. :)<br/>
    A quick "solution" to this is to simply delete the cached apt list information, so the package manager will not have the previous repository title, like so:<br/>
    <code>
    sudo rm -rf /var/lib/apt/lists/*
    </code>
</p>
<p>
    There were a few new packages added to the repositories.<br/>
    First, for the basic infrastructure, we got meson 0.51.2 and premake5. A few projects need this in order to build, so we got to have them first.<br/>
    The more exciting ones are added and updated application and plugins, the changes on that are:
</p>
<ul>
    <li>drumgizmo updated to 0.8.1</i>
    <li>fluajho updated to 1.4.1</i>
    <li>moony updated to 0.30.0, enabled inline display</i>
    <li>patroneo updated to 1.4.1</i>
    <li>vico updated to 1.0.1</i>
    <li>surge added</i>
    <li>dragonfly-reverb added</i>
    <li>hybridreverb2 added</i>
    <li>wolf-shaper added</i>
    <li>wolf-spectrum added</i>
</ul>
<p>
    Lastly, preparations for the next Carla release are well under way.<br/>
    I was able to update and build generic Windows and Linux binaries (with Qt 5.9), and macOS is mostly working but still needs some fixing.<br/>
    In the past I used to do a bunch of beta releases until the final one was declared stable.<br/>
    I am going against this now, and will directly do a "Release Candidate" where no more new stuff can be added, only bug-fixing.<br/>
    The next "Linux Audio release day" is January 15, so that will be the target date.<br/>
</p>
<p>
    PS: Many of the new packages were imported from the LibraZik project, for which I am extremely grateful for.<br/>
    The surge armhf build fails at this point, to be fixed soon.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; KXStudio Monthly Report (October 2019)</span><br/>
    On <i>2019-10-15</i> by<i> falkTX</i>
</p>
<p>
    Hello all, today is October 15, a Linux/Libre-Audio release day.<br/>
    I do not have anything to actually release (that is ready anyway), so I thought to instead start something new.<br/>
</p>
<p>
    Every month, starting with this one, we will have a monthly report regarding the latest stuff in KXStudio.<br/>
    This will involve new releases, package updates to its repositories, important bug-fixes and short-term plans.<br/>
    So let's begin...
</p>
<p>
    First of all, in case you somehow missed it,
    <a href="https://kx.studio/News/?action=view&amp;url=jack2-v1913-release">
        a new JACK2 release is here</a>!<br/>
    This finally brings meta-data support into JACK2. More information about meta-data in JACK can be found
    <a href="https://jackaudio.org/metadata/" target="_blank">
        here</a>.<br/>
</p>
<p>
    On the repositories, "helm" package had an issue where the plugin could not find its own presets.<br/>
    (This was caused due to KXStudio repositories going ahead on renaming "helm" to "Helm" as the former already exists)<br/>
    <br style="line-height:0.5em"/>
    ZynAddSubFX got (re-)added, using its nice and fancy Zyn-Fusion UI.<br/>
    In the old repositories there was "zynaddsubfx" for old UI, and "zynaddsubfx-git" for the new one.<br/>
    The "git" package is gone, only "zynaddsubfx" is there now and it has the new UI. +1 for progress!<br/>
    <br style="line-height:0.5em"/>
    x42-plugins got updated to 20191013 release.<br/>
    <br style="line-height:0.5em"/>
    Fluajho, Patroneo and Vico were added. (nice simple tools from Nils Hilbricht)<br/>
    These last ones were tricky since they use python libraries.<br/>
    In order to make it a generic package I resorted to cxfreeze which makes it run independent of the system python.<br/>
</p>
<p>
    Coming soon is Carla 2.1-beta1.<br/>
    The actual software is ready for the beta1 release, but setting up the infrastructure for an updated Qt5 build is taking longer than expected.<br/>
    The current 2.0 builds use quite an old Qt version: Qt5.5 on macOS, Qt4(!) on Linux, which I do not accept for new releases going forward.<br/>
    Windows builds are ready to go though, you can find test binaries on Carla's
    <a href="https://github.com/falkTX/Carla/releases">
        github</a>.<br/>
    Once I finish setting up the builds for Linux and macOS, I will make the announcement. Very likely in mid-November.
</p>
<p>
    Finally,
    <a href="https://www.sonoj.org/" target="_blank">
        Sonoj
    </a>
    is coming!<br/>
    Sonoj is an annual event/convention in Cologne, Germany, about music production with free and open source software.<br/>
    It features demonstrations, talks and hands-on workshops.<br/>
    You can meet like-minded people, learn insider knowledge and tricks, participate in their one-hour production challenge!<br/>
    It is only a few days from now, so please get ready! :)<br/>
    I will be doing a talk in Sonoj about the past, present and future of JACK.<br/>
    So please come and say hi, registration is free!<br/>
</p>

<hr/>

<!--

<p>
    <span style="font-size: 20px">&gt; JACK2 v1.9.13 release</span><br/>
    On <i>2019-10-06</i> by<i> falkTX</i>
</p>
<p>
    A new version of JACK2 has just been released.<br/>
    You can grab the latest release source code at
        <a href="https://github.com/jackaudio/jack2/releases" target="_blank">
            https://github.com/jackaudio/jack2/releases</a>.<br/>
    The official changelog is:<br/>
</p>
<ul>
    <li>Meta-data API implementation. (and a few tools updated with support for it)</li>
    <li>Correct GPL licence to LGPL for files needed to build libjack.</li>
    <li>Remove FreeBoB backend (superseded by FFADO).</li>
    <li>define JACK_LIB_EXPORT, useful for internal clients.</li>
    <li>Mark jack_midi_reset_buffer as deprecated.</li>
    <li>Add example systemd unit file</li>
    <li>Signal to systemd when jackd is ready.</li>
    <li>Set "seq" alsa midi driver to maximum resolution possible.</li>
    <li>Fix loading internal clients from another internal client.</li>
    <li>Code cleanup and various fixes. (too many to mention here, see git log for details)</li>
</ul>
<p>
    This release is focused on meta-data support, and this is why it took so long.<br/>
    There might be odd cases here and there and a few bugs, as it is often the case for all software...<br/>
    So please make sure to report back any issues!<br/>
    <br style="line-height:0.5em"/>
    Special thanks goes to Rui Nuno Capela for the initial pull-request regarding meta-data.<br/>
    There was some work needed afterwards, but that was the biggest hurdle and motivation needed for a new release. :)
</p>
<p>
    There are still no updated macOS or Windows builds, those will be handled at a later date.<br/>
    Current plan is to have JACK1 feature-parity first (only a2jmidid and zita internal clients missing now),<br/>
    and afterwards merging examples/tools and header files to be shared between JACK1 and JACK2.<br/>
</p>
<p>
    The situation regarding development of JACK and JACK1 considered legacy has not changed since last release 2 years ago.<br/>
    See
    <a href="https://kx.studio/News/?action=view&amp;url=jack2-1912-release-and-future-plans">
        https://kx.studio/News/?action=view&amp;url=jack2-1912-release-and-future-plans
    </a>
    for more information.
</p>
<p>
    PS: I will be in Cologne for
    <a href="https://www.sonoj.org/" target="_blank">Sonoj</a>,
    giving a talk about "Past, Present and Future of JACK".<br/>
    There is no registration fee, so please feel free to come by and say hello! :)
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; The KXStudio are (slowly) coming back</span><br/>
    On <i>2019-09-23</i> by<i> falkTX</i>
</p>

<p>
    Greetings from Portugal.<br/>
    After some time setting up in a new country, thinking and planning, I (falkTX) decided a few things in regards to the KXStudio project.<br/>
</p>

<p>
    First of all, if you have not noticed, the KXStudio ISO images were taken down.<br/>
    They were using Ubuntu 14.04 as base, that while still works in many cases, starts to show its age.<br/>
    The fact that I can no longer run it myself (due to a new GPU that is unsupported in its older OS stack) forced me to finally move to something new.<br/>
    <br style="line-height:0.5em"/>
    Wherever new ISOs will come back again is undecided at this point.<br/>
    They are not a priority at all right now, so if I get to make them again it is not going to be this year or the beginning of the next.<br/>
    I still like KDE/Plasma the best in terms of desktop experience, so that would remain.<br/>
    Plasma and KDE ecosystem is changing too fast, it does not make it easy for what I want in KXStudio.<br/>
    Perhaps when Qt6 is out, KDE/Plasma5 will slow down a bit, we'll see...<br/>
</p>

<p>
    Anyway, the bigger news is that the KXStudio repositories are coming back!<br/>
    (for those that do not know, KXStudio has repositories that sit on top of any Debian or Ubuntu system and provides updates and new packages related to audio/music production)<br/>
    <br style="line-height:0.5em"/>
    To be honest, they are already back right now :), but not in a state that matches what they used to be before.<br/>
    I am in the process of bringing over all the relevant packages slowly. A few packages per day so in a few weeks we should be good again. :)<br/>
    <br style="line-height:0.5em"/>
    Anyway, a new repository setup was really needed.<br/>
    Previously, the repositories were mixing packages built in 3 different Ubuntu versions and there was a separate gcc5 variant of the repos with a few packages that use the new libstc++ ABI introduced in gcc5.1.<br/>
    This was a pain to manage, so better to rethink it.<br/>
    I kept things somewhat updated over the years, and did not change/break the repositories in a meaningful way because 14.04 was still supported and what I used daily anyway.<br/>
    Now that enough time has passed and 14.04 is officially EOL, perfect chance to rework the repositories for the future!<br/>
</p>

<p>
    Here is the current situation:
</p>

<ul>
    <li>
    The new repositories require at least Ubuntu 18.04 or Debian 10 (or equivalent)
    </li>

    <li>
    There is a single deb file to be installed in order to activate the repositories.<br/>
    <br style="line-height:0.25em"/>
    (hopefully no more libstc++ ABI breakages again, please...?)
    </li>

    <li>
    The old repositories are considered legacy and will no longer be updated.<br/>
    <br style="line-height:0.25em"/>
    Packages included on them will still remain available for some time.
    </li>

    <li>
    You will not be automatically updated to the new repositories, it has to be done manually<br/>
    <br style="line-height:0.25em"/>
    This is to prevent breakage of existing systems, mostly for keeping "old" packages installable.<br/>
    Once you update to the new repositories, you will not be able to "apt-get install" packages that were present in the old repositories but are not yet in the new ones.<br/>
    This is intentional. There are quite a few packages that I will not be supporting anymore, and thus won't end up in the repos.<br/>
    When you move to the new repos, you will be able to remove the KXStudio specific version of package and then install whatever version someone else provides.<br/>
    I will not be uploading packages to the new repositories that I do not intend to keep updated.
    </li>

    <li>
    armhf and arm64 are now supported targets, taking Raspberry Pi 3 as the minimum specs<br/>
    <br style="line-height:0.25em"/>
    With this, the repos will support 32 and 64bit Intel-based architecture, plus 32 and 64bit ARM.
    </li>

    <li>
    Audio plugins (including standalone synths and FX) are the focus of the repos.<br/>
    <br style="line-height:0.25em"/>
    General applications and tools will not be supported anymore.<br/>
    This is mainly to reduce the burden of maintaining the repos, as applications often have very complex dependencies compared to plugins (some are actually quite difficult to build).<br/>
    I will be packaging a few that I personally use, or that have stalled in feature development.
    </li>

    <li>
    All available application and plugin packages are listed
    <a href="https://kx.studio/Repositories:Applications" target="_blank">here</a>
    and
    <a href="https://kx.studio/Repositories:Plugins" target="_blank">here</a>
    respectively.<br/>
    <br style="line-height:0.25em"/>
    There are direct deb files to download from those pages, for those that want something specific in the repos but do not want to enable the full thing.<br/>
    These 2 pages are automatically generated, and fetch their contents directly from the repositories.<br/>
    </li>

    <li>
    There is a page dedicated to questions about the repositories
    <a href="https://kx.studio/Repositories:FAQ" target="_blank">here</a>.<br/>
    <br style="line-height:0.25em"/>
    I will be updating this page as more questions appear.
    </li>
</ul>

<p>
    Speaking of updates, the website needs some touches here and there...<br/>
    Already started with a few, like removing the home carousel and all use of JavaScript, plus updating the pages related to the repositories obviously. :)<br/>
    It is a moving target as pretty much all websites, so don't be surprised to see changes, though they won't be that substantial..
</p>

<p>
    That is all for now, thank you.<br/>
</p>

<p>
    PS: You might be wondering why I am writing this text in first person, contrary to other past posts.<br/>
    This is mainly because, well, KXStudio was and still is a one-person project (with the occasional help here and there for small things).<br/>
    I am making an effort to not write "marketing speech"-like anymore, just that.<br/>
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Carla 2.0.0 is finally here!</span><br/>
    On <i>2019-04-15</i> by<i> falkTX</i>
</p>

<p>
    After many years, Carla version 2.0.0 is finally here!
</p>
<p>
    Carla is an audio plugin host, with support for many audio drivers and plugin formats.<br/>
    It has some nice features like automation of parameters via MIDI CC (and send output back as MIDI too) and full OSC control.<br/>
</p>
<p>
    Version 2.0 took this long because I was never truly happy with its current state, often pushing new features but not fully finishing them.<br/>
    So the "solution" was to put everything that is not considered stable yet behind an experimental flag in the settings.<br/>
    This way we can have our stable Carla faster, while upcoming features get developed and tagged as experimental during testing.<br/>
</p>
<p>
    Preparations for version 2.1 are well under way, a beta for it will be out soon.<br/>
    But that is a topic for another day.
</p>

<h3>Changes since 2.0-RC4</h3>
<ul>
    <li>Fix missing argument in note-on/off osc example</li>
    <li>Fix word-wrap in add-plugin dialog</li>
    <li>Fix Windows README.txt line endings</li>
    <li>Build windows binaries with -mstackrealign</li>
    <li>Don't show side panel in carla-control</li>
    <li>Show "Label/URI" instead of just "Label"</li>
    <li>Keep application signals alive (so Ctrl+C works even while engine is closed)</li>
    <li>Update copyright year</li>
</ul>

<h3>Downloads</h3>
<p>
    To download Carla binaries or source code, jump on over to the
      <a href="https://kx.studio/Downloads" class="external free" rel="nofollow" target="_blank">KXStudio downloads section</a>.<br/>
    Carla v2.0.0 is available pre-packaged in the KXStudio repositories and UbuntuStudio backports, plus on ArchLinux and Ubuntu since 19.04.
      On those you can simply install the <b>carla</b> package.<br/>
    Bug reports and feature requests are welcome! Jump on over to the
      <a href="https://github.com/falkTX/Carla" class="external free" rel="nofollow" target="_blank">Carla's Github project</a> page for those.
</p>

<h3>Videos</h3>
<p>
    There is no manual or quick-start guide for Carla yet, apologies for that.<br/>
    But there are some videos of presentations I did regarding Carla's features and workflows,
    those should give you an introduction of its features and what you can do with it:<br/>
</p>
<h6>@ Sonoj 2017</h6>
<p>
    <iframe width="1024" height="576" src="https://media.ccc.de/v/sonoj2017-1704-carla-plugin-host/oembed" frameborder="0" allowfullscreen></iframe>
</p>
<h6>@ LAC 2018</h6>
<p>
    <iframe width="1024" height="576" src="https://media.ccc.de/v/lac2018-24-carla_plugin_host_feature_overview_and_workflows/oembed" frameborder="0" allowfullscreen></iframe>
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Changes in KXStudio repos, regarding Carla and JACK2</span><br/>
    On <i>2019-03-22</i> by<i> falkTX</i>
</p>
<p>
    This is a small notice to everyone using Carla and JACK2 with the KXStudio repos.
</p>
<p>
    First, in preparation for Carla 2.0 release, the (really) old <b>carla</b> package is now the new v2.0 series,
      while <b>carla-git</b> now contains the development/latest version.<br/>
    If you are not interested in testing Carla's new stuff and prefer something known to be more stable,
      install the <b>carla</b> package after the latest updates.
</p>
<p>
    Second, a change in JACK2 code has made it so a restart of the server is required after the update.<br/>
    (but for a good reason, as JACK2 is finally getting meta-data support; this update fixes client UUIDs)<br/>
    If you use jackdbus (likely with KXStudio stuff), you will need to actually kill it.<br/>
    If that does not work, good old restart is your friend. :)
</p>
<p>
    One important thing to note is that the <b>lmms</b> package now conflicts with the <b>carla-git</b> one.<br/>
    This is because some code has changed in latest Carla that makes v2.0 vs development/latest ABI-incompatible.<br/>
    In simpler terms, LMMS can only either be compiled against the stable or development version of Carla.<br/>
    The obvious choice is to use the stable version, so after the updates if you notice LMMS is missing, just install it again.<br/>
    (If you have <b>carla-git</b> installed, <b>carla</b> will be installed/switched automatically)
</p>
<p>
    I tried to make the transition of these updates as smooth as possible,
      but note that you likely need to install updates twice to complete the process.<br/>
</p>
<p>
    In other news, we got a new domain!^-^)/<br/>
    Also Carla v2.0 release date has been set - 15th of April.<br/>
    Unless a major issue is found, expect a release announcement on that day.<br/>
    See you soon then! ;)
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Carla 2.0 RC4 is here!</span><br/>
    On <i>2019-03-02</i> by<i> falkTX</i>
</p>
<p>
    Hello again everyone!<br/>
    This is a quick fix for the Carla Plugin Host (soon-to-be) stable series.<br/>
</p>

<h3>Changelog</h3>
<ul>
    <li>carla-vst: Add Ardour workaround for its 'Analysis' window</li>
    <li>carla-vst: Fix typo leading to buffer size of 1 during plugin activation</li>
    <li>Fix for some stupid plugins messing up with global signals (restore original signals after creating plugin)</li>
    <li>Fix dry/wet for VST plugins (by creating extra buffer for inline processing)</li>
    <li>Fix crash in RtAudio when ALSA soundcard is listed but not available</li>
    <li>Fix crash on JACK buffer size changes in patchbay mode</li>
    <li>Fix crash when directly loading vst shell plugins (carla-single or drag&amp;drop dll file)</li>
    <li>Fix loading multiple exported LV2 plugins (always copy full carla-plugin binary when exporting)</li>
    <li>Fix missing transport information when Carla is not jack transport master</li>
    <li>Fix opening a few VST2 UIs (we give up trying to follow VST spec, always assume UI opens nicely)</li>
    <li>Fix plugin bridges not working under Fedora (RT threads were able to be setup, but not started)</li>
    <li>Automatically terminate wine bridges if main carla dies</li>
    <li>Calculate VST2 ppqPos in a more reliable way</li>
    <li>Do not set up RtAudio in "hog device" mode</li>
    <li>Do not build external plugins in debug or strict build</li>
    <li>Handle more sources of VST2 automation via audioMasterAutomate</li>
    <li>Handle worst-case scenario of carla-plugin buffer size being too low</li>
</ul>
<p>
    I am not confident enough to call it the stable version just yet,
      as some of these release changes actually introduced new code.<br/>
    But the target date for the stable release is now set - middle of April.<br/>
    There are no more release-blocker bugs for Carla v2,0 anymore, so it is just a matter of time now.<br/>
</p>

<h3>Downloads</h3>
<p>
    To download Carla binaries or source code, jump on over to the <a href="https://kxstudio.linuxaudio.org/Downloads" class="external free" rel="nofollow" target="_blank">KXStudio downloads section</a>.<br/>
    If you're using the KXStudio repositories, you can simply install "carla-git" (plus "carla-lv2" and "carla-vst" if you're so inclined).<br/>
    Bug reports and feature requests are welcome! Jump on over to the <a href="https://github.com/falkTX/Carla" class="external free" rel="nofollow" target="_blank">Carla's Github project</a> page for those.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; DPF-Plugins v1.2 released</span><br/>
    On <i>2019-03-02</i> by<i> falkTX</i>
</p>
<p>
    Hello everyone, a new release of DPF-Plugins is here.<br/>
    This is mostly a bugfix release, with a few little new things.<br/>
    This is what changed compared to the last release:
</p>
<ul>
    <li>Fix glBars and ProM plugins not being built and installed</li>
    <li>Kars: Added release and volume parameters</li>
    <li>Kars: Remove its useless UI</li>
    <li>Nekobi: Add enum values for waveform parameter</li>
    <li>Remove modguis, they are maintained in a separate repo</li>
</ul>

<h3>DPF changes</h3>
<p>
    DPF (the small framework behind these plugins) saw some important changes.<br/>
    They are not all relevant to DPF-Plugins directly, but worth mentioning:
</p>
<ul>
    <li>Fix samplerate property in lv2 UIs</li>
    <li>Fix (implement) parent window for about dialogs for MacOS and Windows</li>
    <li>Add get/set scaling to Window</li>
    <li>Add option to automatically scale plugin UIs</li>
    <li>Allow plugin UIs to be user-resizable, test with info and meters example</li>
    <li>Implement basic effGetParameterProperties in vst plugins (boolean, integer and log flags)</li>
    <li>Implement midi out</li>
    <li>Implement enumerator style of parameters</li>
    <li>Implement LV2-trigger-type parameters</li>
    <li>Implement Shift-click to reset sliders</li>
    <li>Report supported LV2 options in generated ttl</li>
    <li>Render VST2 parameter-text integer, boolean and enum parameters</li>
    <li>Rework calculation of VST transport/time info</li>
    <li>Set _NET_WM_WINDOW_TYPE for our X11 windows</li>
</ul>
<p>
    Other things worth noting is that 2 new exciting things are currently under development:
      Cairo graphics support and AU plugin wrapper.<br/>
    Eventually these will be part of core DPF, but for now they are being discussed and worked on with other developers.
</p>

<h3>Downloads</h3>
<p>
    The source code plus Linux, macOS and Windows binaries can be downloaded at
      <a href="https://github.com/DISTRHO/DPF-Plugins/releases/tag/v1.2" target="_blank">
          https://github.com/DISTRHO/DPF-Plugins/releases/tag/v1.1</a>.<br/>
    The plugins are released as LADSPA, DSSI, LV2, VST2 and JACK standalone.<br/>
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Carla 2.0 RC3 is here!</span><br/>
    On <i>2019-01-15</i> by<i> falkTX</i>
</p>
<p>
    Hello everyone, happy new year!<br/>
    This is a quick fix for the Carla Plugin Host (soon-to-be) stable series.<br/>
    Only very small fixes here, and a change on how specific plugins load.<br/>
    This release starts a "release early, release often" attitude, that hopefully I can maintain from now on.<br/>
</p>

<h3>Changelog</h3>
<ul>
<li>Fix bridge-lv2-x11 crash when manually started from CLI</li>
<li>LV2: Don't prefer plugin bridges for certain hardcoded plugins (Calf, ir.lv2 and v1 series)</li>
<li>VST: Do not call plugin effEditIdle on update display opcode, fixing crashes for a few plugins</li>
</ul>

<p>
    Previously a few plugins were hardcoded to run as plugin bridges, as they were deemed unsafe because of how they use their plugin UIs (instance-access).<br/>
    Carla automatically started these plugins as bridges, as to not crash the main process when Gtk and Qt gets in the way.<br/>
    Plugin state in bridges have a few issues (as plugin bridges are experimental right now), which I was hoping to fix before the final 2.0 is here.<br/>
    But that will not happen it seems (not an easy fix), so now these plugins will run normally as all others do, in the same process.<br/>
    This means the following possible breaking changes:<br/>
</p>
<ul>
<li>If v1 plugin series are compiled with a Qt version different than the one Carla is using, expect a crash on load or soon afterwards</li>
<li>Calf plugin UIs will be missing their graphs by default, unless you disable running plugin UIs in bridge mode in Carla settings</li>
</ul>
<p>
    This is not an issue for other plugin UIs that use Qt or Gtk, as they do not use LV2 instance-access.<br/>
    Carla runs Gtk and Qt LV2 UIs in a separate process, but because these UIs require direct access to the plugin instance, they cannot be bridged.<br/>
</p>

<h3>Downloads</h3>
<p>
    To download Carla binaries or source code, jump on over to the <a href="https://kxstudio.linuxaudio.org/Downloads" class="external free" rel="nofollow" target="_blank">KXStudio downloads section</a>.<br/>
    If you're using the KXStudio repositories, you can simply install "carla-git" (plus "carla-lv2" and "carla-vst" if you're so inclined).<br/>
    Bug reports and feature requests are welcome! Jump on over to the <a href="https://github.com/falkTX/Carla" class="external free" rel="nofollow" target="_blank">Carla's Github project</a> page for those.
</p>

<h3>Future</h3>
<p>
    A
      <a href="https://github.com/falkTX/Carla/milestones/2.0-final" class="external free" rel="nofollow" target="_blank">
        "2.0-final" milestone</a>
      is on GitHub, which lists the remaining issues to be fixed before 2.0 is considered "final".<br/>
    New features already made its way to Carla, but sit on the
      <a href="https://github.com/falkTX/Carla/commits/develop" class="external free" rel="nofollow" target="_blank">
        develop branch</a>.<br/>
    When the "final" version is released, expect a 2.1-beta to come shortly afterwards.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; JackAss v1.1 release</span><br/>
    On <i>2019-01-15</i> by<i> falkTX</i>
</p>
<p>
    This is a tiny bugfix for JackAss, a VST plugin that provides JACK-MIDI support for VST hosts.<br/>
</p>
<p>
    The only change is that <b>Wine 64bit builds work now</b>, so you can finally load it inside 64bit Windows applications running on GNU/Linux via Wine.<br/>
    Tested to work with FL Studio 20.<br/>
    <a href="/screenshots/news/jackass_flstudio_v1.1.png"><img src="/screenshots/news/jackass_flstudio_v1.1.png" alt=""/></a><br/>
</p>
<p>
    You can find JackAss source code and bug tracker in Github,
    at <a href="https://github.com/falkTX/JackAss/" class="external free" rel="nofollow" target="_blank">https://github.com/falkTX/JackAss/</a>.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Carla 2.0 RC2 is here!</span><br/>
    On <i>2018-10-27</i> by<i> falkTX</i>
</p>
<p>
    Hello everyone, this is the announcement for a Carla stable update.<br/>
    Only 2 blocking issues remain, 1 of which needs testing to see if it still happens or not.<br/>
</p>

<h3>General fixes</h3>
<ul>
<li>Fix build against fluidsynth 2.0</li>
<li>Fix build on Haiku OS</li>
<li>Fix build with external plugins enabled but no OpenGL available</li>
<li>Fix detection of old Windows dll plugins</li>
<li>Fix dynamic/split process cycle for plugin bridges</li>
<li>Fix internal plugins receiving wrong frame position on split buffers</li>
<li>Fix program changes coming through as bank changes in MIDI output</li>
<li>Fix a possible race condition in plugin code</li>
<li>Fix some warnings triggered by gcc-8</li>
<li>Fix LV2 plugins with UI feedback ports in bridge mode not receiving feedback events</li>
<li>Fix macOS specific note visible in settings when not running macOS</li>
<li>libjack: Fix applications that register clients right after being started</li>
</ul>

<h3>Usability fixes</h3>
<ul>
<li>Always show keyboard in plugin edit dialog if plugin has midi inputs</li>
<li>Always expand user home path (~/) when loading project from CLI</li>
<li>Don't try to find binary type of certain plugins when loading project (avoid assertions)</li>
<li>Use executable basename on jack apps as name when initial name is empty</li>
<li>libjack: Catch window close when possible, and hide it instead closing entire application</li>
<li>libjack: Implement basic session management via SIGUSR1 signal</li>
</ul>

<h3>Downloads</h3>
<p>
    To download Carla binaries or source code, jump on over to the <a href="http://kxstudio.linuxaudio.org/Downloads" class="external free" rel="nofollow" target="_blank">KXStudio downloads section</a>.<br/>
    If you're using the KXStudio repositories, you can simply install "carla-git" (plus "carla-lv2" and "carla-vst" if you're so inclined).<br/>
    Bug reports and feature requests are welcome! Jump on over to the <a href="https://github.com/falkTX/Carla" class="external free" rel="nofollow" target="_blank">Carla's Github project</a> page for those.
</p>

<h3>Future</h3>
<p>
    Work for KXStudio 18.04 ISO is under way, should only take a few more weeks now.<br/>
    Next JACK2 release will be quite nice, we have meta-data now (thanks to Rui),
    but that will be handled after KXStudio 18.04 ISO release.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Carla 2.0 RC1 is here!</span><br/>
    On <i>2018-09-16</i> by<i> falkTX</i>
</p>
<p>
    Hello again everyone, and surprise, the stable 2.0 version of Carla is coming!<br/>
</p>
<p>
    This is the announcement of the first release candidate of Carla 2.0.<br/>
    Very little features were added, focus went on stability instead.<br/>
    The 'master' branch on Carla's source code is now for stable content, all new stuff will go to 'develop'.<br/>
    My intention is to really let Carla on the side for now. If I can do it or not remains to be seen...<br/>
</p>
<p>
    The list of changes is a little big, so let's split it by parts.<br/>
    First, the highlights and major changes.<br/>
</p>

<h3>Highlights and major changes</h3>
<h5>LinuxSampler removed, replaced by SFZero</h5>
<p>
    Basically I removed the code that interacted internally with LinuxSampler, and replaced it by SFZero.<br/>
    There are a lot of reasons for this change, but we can resume it to 3 points:<br/>
</p>
<ul>
    <li>LinuxSampler API being overcomplicated</li>
    <li>SFZ handling not very reliable</li>
    <li>Licensing issues</li>
</ul>
</p>
<p>
    Removing LinuxSampler means we lose support for GIG files, also SFZero loads the entire kit in RAM.<br/>
    But, in return, SFZ files now always load without getting muted or having to do dirty workarounds.<br/>
    Plus, with this, Carla can keep SFZ support while maintaining its GPLv2 license intact.<br/>
</p>
<p>
    Note that SFZero does not support some opcodes, so the playback might sound different.<br/>
    At a later date, a release will be made that will focus on SFZ support.<br/>
</p>

<h5>Big windows fixes</h5>
<p>
    Carla under has always a been a bit behind, compared to its Linux and macOS support.<br/>
    Not anymore!<br/>
</p>
<p>
    Carla can now run as a plugin in Windows, and also the PyQt-based big-meter, midi-pattern and notes plugins.<br/>
    With this done, Carla as LV2 is now included in the Windows builds.<br/>
</p>
<p>
    The export of a single plugin as LV2, though it is an experimental feature, now also works on Windows.<br/>
    Because Windows does not handle symlinks very well, Carla copies its resources instead.<br/>
</p>
<p>
    Scanning plugins will no longer show a console window.<br/>
    The font engine was changed from native to freetype, which not only fixes the mini-canvas but gives a better presentation too.<br/>
    Plugin bridges work once again, and now even better as Carla now initializes Windows resources on them (like static pthread and OLE).<br/>
</p>

<h5>UI changes</h5>
<p>
    The piano-keyboard widget got some attention, now has 4 different highlight colors, 3 input layouts (qwerty, qwertz and azerty) and allows to change the offset when using the PC keyboard to send notes.<br/>
    Just right-click on a piano-keyboard widget to trigger these options.<br/>
</p>
<p>
    The rack looks a bit different now, as the possible "skins" for the plugin slots are now exposed and can be changed at any time.<br/>
    You can change the background color too. Because why not? :)<br/>
</p>
<p>
    Make the knobs and rack buttons more white-theme friendly.<br/>
    This was needed to get white backgrounds working correctly, so for those of you that prefer Carla in a more bright theme, it will behave better now (why would you do that though?)<br/>
</p>

<h3>Other changes</h3>
<p>
    Some changes that make sense or are useful enough, and that deserve to be mentioned.<br/>
</p>
<ul>
    <li>Allow control output parameters to go out of bounds, thus displaying the correct value</li>
    <li>Automatically restart plugin bridges when plugin is re-activated, using last saved state</li>
    <li>Don't allow to disable jack transport if running in multi-client mode</li>
    <li>Don't close and re-open VST plugin UIs on show/hide</li>
    <li>Don't change any engine settings if it currently running</li>
    <li>Don't list lv2 plugins that are not supported</li>
    <li>Don't make Windows or macOS plugin UIs resizable for now</li>
    <li>Implement loop-mode for audio-file plugin, turn it on by default</li>
    <li>Implement support for buffer size changes in RtAudio JACK driver, and ignore JACK sample rate mismatch</li>
    <li>Implement SF3 support (SF2 files with OGG audio files instead of raw WAV)</li>
    <li>Force fftw thread-safe mode when starting Carla as standalone</li>
    <li>Plugins with more than 2 audio ports can now be loaded in rack mode (the extra ports are just ignored)</li>
    <li>Save and restore BPM with a project</li>
    <li>Save and restore last used BPM, if not loading a project</li>
</ul>

<h3>Fixes</h3>
<p>
    Besides the ones already mentioned for Windows, we also have:
</p>
<ul>
    <li>Big push to get transport working correctly</li>
    <li>General fixes against dynamic buffer sizes</li>
    <li>Several fixes to UI size and UI bridges under macOS</li>
    <li>Fix all PNGs that triggered libpng warnings</li>
    <li>Fix canvas rubberband being invisible after a canvas refresh</li>
    <li>Fix embedded UI covering window controls under certain hosts (in a Qt5 Linux build)</li>
    <li>Fix switching plugin positions in plugin mode</li>
</ul>

<h3>Notes for developers and packagers</h3>
<ul>
    <li>Base python scripts are no longer installed in dist-packages</li>
    <li>Carla front-end code was moved to its own folder</li>
    <li>FluidSynth version 1.1.7 is now required for soundfont support</li>
    <li>UI bridges can now be started from CLI with just the plugin URI</li>
    <li>New CarlaNativePlugin header and library exported, exposes Carla's Rack and Patchbay internals to 3rd party applications</li>
</ul>
<p>
    Currently work-in-progress is a complete REST API of Carla's backend, allowing to have full control of a remote Carla instance.<br/>
    (and not in a limited fashion like done with Carla-Control / OSC).<br/>
    Initial code for it is already done, and tested to work.<br/>
    If this interests you, let me know!<br/>
</p>
<p>
</p>

<h3>Notes for users</h3>
<p>
    The code for scanning plugins had a little rework, making some internal data structures change.<br/>
    Because of this, a full rescan of your plugins is needed after the update.<br/>
</p>
<p>
    When running Patchbay mode in JACK, changing the buffer size might cause a crash.<br/>
    This is not a common action to do, so not a priority to fix.<br/>
</p>

<h3>Downloads</h3>
<p>
    To download Carla binaries or source code, jump on over to the <a href="http://kxstudio.linuxaudio.org/Downloads" class="external free" rel="nofollow" target="_blank">KXStudio downloads section</a>.<br/>
    If you're using the KXStudio repositories, you can simply install "carla-git" (plus "carla-lv2" and "carla-vst" if you're so inclined).<br/>
    Bug reports and feature requests are welcome! Jump on over to the <a href="https://github.com/falkTX/Carla" class="external free" rel="nofollow" target="_blank">Carla's Github project</a> page for those.
</p>

<h3>Future</h3>
<p>
    With Carla done, next up is DPF handling and KXStudio 18.04 ISO release, while trying to get a new JACK2 release out too.<br/>
    Note that after these 3 items are done, I plan to take a well-needed break from open-source project maintenance.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Carla 2.0 beta7 is here!</span><br/>
    On <i>2018-07-23</i> by<i> falkTX</i>
</p>
<p>
    Hello again everyone, I am glad to bring you the 7th beta of the upcoming Carla 2.0 release.<br/>
    Last time I said beta6 would be the last beta, but let's ignore that for now... ;)<br/>
</p>
<p>
    This release focuses on bug-fixes rather than new features.<br/>
    Most of the new features were added because of contributions, which are very appreciated.<br/>
    There are no big flashy screenshots this time, sorry.<br/>
</p>
<p>
    One breaking change for this release is the removal of most of the plugins bundled in Carla's code.<br/>
    They were moved into a separate repository, to keep Carla's code-base smaller.<br/>
    If you are building Carla yourself and you want those extra internal plugins, make sure to enable git submodules.
</p>
<p>
    Here is a list of the most relevant changes and fixes for this release:
</p>
<ul>
  <li>Add confirmation dialog for quitting Carla</li>
  <li>Add confirmation dialog for "Remove All" and "New File" actions</li>
  <li>Add internal MIDI Channel A/B plugin</li>
  <li>Add semitones parameter to internal midi-transpose plugin</li>
  <li>Implement move up/down plugins in rack (right-click menu)</li>
  <li>Implement LV2 UI port notifications to feedback messages to UI</li>
  <li>Implement more libjack stubs, Catia now loads inside Carla :)</li>
  <li>Transport controls are now considered stable and always enabled, no longer in experimental settings</li>
  <li>Disable ableton-link and audio kits search UI elements if not built/enabled</li>
  <li>Do not capture logs if running in nogui mode</li>
  <li>Do not use or check for kVstParameterUsesIntegerMinMax VST property</li>
  <li>Do not lockup on close in case audio driver stops working</li>
  <li>Export LV2 window is now a simple combo-box, making it more usable</li>
  <li>Save plugin author name in exported LV2 plugin</li>
  <li>Increase polling rate for non-gui mode (30 Hz), fixes slow OSC handling</li>
  <li>Fix mouse position offset of Carla-embed mouse events</li>
  <li>Fix processing of internal plugins with multi MIDI inputs</li>
  <li>Fix crash when closing a session containing bridges with Ctrl+C</li>
  <li>Fix patchbay/graph to work with variable buffer sizes</li>
  <li>Fix some issues regarding integer parameter control</li>
  <li>Fix controlling logarithmic parameters with MIDI CC</li>
  <li>Fix "MIDI CC 0x01" not selectable in some systems</li>
  <li>Fix loading of VST plugin parameters and LV2 state for plugin bridges</li>
  <li>Fix carla-single usage under ladish</li>
  <li>Fix file dialog filter of the internal MIDI file plugin</li>
</ul>

<h3>Downloads</h3>
<p>
    To download Carla binaries or source code, jump on over to the <a href="<?php echo $ROOT; ?>/Downloads" class="external free" rel="nofollow" target="_blank">KXStudio downloads section</a>.<br/>
    If you're using the KXStudio repositories, you can simply install "carla-git" (plus "carla-lv2" and "carla-vst" if you're so inclined).<br/>
    Bug reports and feature requests are welcome! Jump on over to the <a href="https://github.com/falkTX/Carla" class="external free" rel="nofollow" target="_blank">Carla's Github project</a> page for those.
</p>

<h3>Future</h3>
<p>
    The next Carla release is meant to close the 2.0 features, and focus on feature parity between all OSes.<br/>
    It might take some time though (unless there is major regression that makes a new release required).
</p>
<p>
    For now I plan to focus on other things that have been on the backlog for some time,
      including DPF, KXStudio 18.04 ISO and JACK maintenance.<br/>
    News on that will be published when something is ready, please be patient.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Cadence 0.9.0 release and KXStudio 18.04 preparations</span><br/>
    On <i>2018-04-02</i> by<i> falkTX</i>
</p>
<p>
    Cadence 0.9.0 has just been tagged in its
      <a target="_blank" href="https://github.com/falkTX/Cadence">git repository</a>.<br/>
    No new features have been added to the code-base.<br/>
    The release is focused on the Qt5 port, and of course the fixes that have been added over time.<br/>
    Qt4 is no longer supported; the code was updated to work with Qt5, without having a fallback Qt4 mode (unlike Carla).<br/>
    Cadence Qt5 port is needed for a proper KXStudio 18.04 release, as we will be using KDE5 Plasma as desktop environment.<br/>
</p>
<p>
    The
      <a target="_blank" href="https://github.com/KXStudio/KXStudio/tree/master/welcome">KXStudio "Welcome" wizard</a>
      has also been ported to Qt5.<br/>
    This finalizes the Qt4 =&gt; Qt5 porting process, with all KXStudio tools now running in Qt5.<br/>
</p>
<p>
    In other news, the preparations for KXStudio's 18.04 ISO release
      <a target="_blank" href="https://github.com/KXStudio/KXStudio/commits/master">have started</a>.<br/>
    The decision is to use
      <a target="_blank" href="https://neon.kde.org/">Neon</a>
      as the base distro for the next ISO images, with Breezy-Dark as default theme.<br/>
    The KXStudio configuration files have been ported from KDE4 to KDE5, with only a few tweaks missing now.<br/>
    If you're running the KXStudio repositories with Neon 16.04, you can already install the kxstudio-desktop-neon package. :)<br/>
</p>
<p>
    Note that Ubuntu 18.04 (and thus Neon 18.04) is not out yet, so a release will of course have to wait for them first.<br/>
    (Neon does not actually have their 18.04 repositories fully ready at this point)<br/>
    We will have beta images first, to let users test and give feedback.<br/>
    When everything seems to run fine, and I am happy with the results, the final image will released.<br/>
    No estimation on the 'when' just yet though - it will be out when it's ready - so please don't keep asking. ;)<br/>
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Carla 2.0 beta6 is here!</span><br/>
    On <i>2018-01-25</i> by<i> falkTX</i>
</p>
<p>
    Hello again everyone, I am glad to bring you the 6th beta of the upcoming Carla 2.0 release.<br/>
    It has been over one year since the last Carla release, it was about time. :)<br/>
    This should be the last beta for the 2.0 series, as next one is planned to be release candidate 1.
</p>
<p>
    There were quite some changes under the hood, mostly in a good way.<br/>
    The trade-off for users is that this means losing some features, the biggest ones being VST3 and AU plugin support.<br/>
    The way audio and MIDI devices are handled on Windows and macOS also changed, no longer having dynamic MIDI ports.<br/>
    See the previous post about Carla to get more details on the "breaking changes".
</p>
<p>
    But let's move on with the good stuff!<br/>
    Here are some of the highlights for this release:
</p>

<table><tr><td>
<img src="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta6_transport.png" alt="transport"/>
</td><td>
<h3>Transport controls and Ableton Link support (experimental)</h3>
<p>
    Previous releases of Carla had basic time controls already,
        but it was quite basic and lacked options for JACK transport and BPM control.<br/>
    Now JACK transport is optional, transport works for non-JACK drivers and BPM can be adjusted manually.<br/>
    Ableton Link support was added in was well, as another way to sync transport. It was not extensively tested though.<br/>
    Also note that, due to compiler support, the current Carla macOS builds do not support Link.<br/>
</p>
<p>
    Transport can misbehave when rolling back or forwards, so this feature is still classified as experimental.<br/>
    The plan is to have transport stabilized when the final 2.0 version is released.<br/>
</p>
</td></tr></table>

<p><br/></p>

<table><tr><td>
<a href="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta6_settings.png">
    <img src="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta6_settings_crop.png" alt="settings"/>
</a>
</td><td>
<h3>Tweak of settings page</h3>
<p>
    Carla's settings dialog received an overhaul.<br/>
    Everything that was deemed unstable was moved into a new 'experimental' page, and disabled by default.<br/>
    So in order to use plugin bridges for example, you need to first enable experimental features, then the bridges.<br/>
    The (experimental) features mentioned on this article all have to be enabled in the same way too.<br/>
    Last but not least, a page dedicated to Wine settings (wine-prefix, wine startup binary, RT variables) was added.<br/>
</p>
</td></tr></table>

<p><br/></p>

<table><tr><td>
<a href="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta6_jack-apps.png">
    <img src="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta6_jack-apps_crop.png" alt="jack-apps"/>
</a>
</td><td>
<h3>Load of JACK applications as plugins (Linux only, experimental)</h3>
<p>
    This is a big one... :)<br/>
    Initially just an idea that became an ugly hack/test for private use only, I soon realized it had great potential.<br/>
    So I split the code used for plugin bridges and made it more generic so it could be re-used for such features.<br/>
    And here we have it, JACK applications running as regular plugins inside Carla - including showing/hiding their main interface.<br/>
    Applications also receive JACK transport as rolling in the host.<br/>
</p>
<p>
    In this mode Carla basically becomes a self-contained JACK server, and exposes a special libjack to the client.<br/>
    The client connects to Carla believing it's actually connecting to "JACK", as Carla implements libjack API through its plugin bridge mechanism.<br/>
    Within Carla you first define a fixed number of audio and midi ports at the start.<br/>
    Ports are allocated dynamically on the plugin side, but get mixed down at the end to the number of outputs selected.<br/>
    This is a nice workaround against clients that dynamically register their ports, sometimes with random names too.<br/>
    With Carla jack-apps-as-plugins method, the client ports are persistent.<br/>
</p>
<p>
    The full libjack API is not implemented though, only the important parts, in order to get most applications running.<br/>
    The most notable missing calls are related precise timing information and non-callback based processing.<br/>
    Also no session management is implemented at the moment.<br/>
    But, even without this, stuff like audacity, lmms, hydrogen, renoise and vlc work.<br/>
</p>
<p>
    This is a work in progress, but already working quite well considering how new it is.<br/>
</p>
</td></tr></table>

<p><br/></p>

<table><tr><td>
<a href="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta6_export-lv2.png">
    <img src="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta6_export-lv2_crop.png" alt="export-lv2"/>
</a>
</td><td>
<h3>Export any loaded plugin or file as a single LV2 plugin (experimental)</h3>
<p>
    Another big feature of this release is the possibility to export any plugin or sound file loaded in Carla
        as its own self-contained (LV2) plugin.<br/>
    This can really be any regular plugin, a sound bank (e.g. an SFZ file), a plugin bridge or even JACK application.<br/>
    The exported plugin will run with the smallest amount of wrapping possible between the host and the carla loaded plugin.<br/>
    Carla will not appear at all, triggering the "show ui" on the host will show the actual plugin UI.<br/>
    ***Note that the exported plugins are not portable! They require Carla to be always installed on the same location.***<br/>
</p>
<p>
    Audio, MIDI, transport information, custom UI are fully working already.<br/>
    The only missing feature at the moment is LV2 state, which needs to map to DSSI configures, VST chunks and other stuff.<br/>
    Although working for non-Linux systems, this was not tested.<br/>
    Testing of this feature in general is very appreciated.<br/>
</p>
</td></tr></table>

<p><br/></p>

<table><tr><td>
<a href="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta6_freebsd.png">
    <img src="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta6_freebsd_crop.png" alt="freebsd"/>
</a>
</td><td>
<h3>FreeBSD and other non-Linux systems</h3>
<p>
    After the removal of the juce library from the code-base (as
        <a href="http://kxstudio.linuxaudio.org/News/?action=view&url=breaking-changes-in-carla-plugin-host" target="_blank">
            discussed before</a>),
        Carla was free to support more than just the big 3 OSes.<br/>
    With the help of the community, Carla is now available to install on FreeBSD through its ports system.<br/>
    I was able to build and install it myself as well, and actually make good noise on a BSD system. Neat! :)<br/>
    It's also now possible to build Carla for GNU/Hurd and HaikuOS as well, and I imagine for even more systems if one so desires.<br/>
    If this is something you're interested in and need some help, let me know.
</p>
</td></tr></table>

<p><br/></p>

<h3>Other changes</h3>
<p>
    There are quite a lot of other smaller changes made in Carla since beta5, these include:<br/>
</p>
<ul>
  <li>Added artwork and license to about dialog</li>
  <li>Added carla-rack no-midi-out mode as plugin</li>
  <li>Allow drag&amp;drop of plugin binaries into Rack view</li>
  <li>Add "prevent bad plugin behaviour" option (experimental, Linux only)</li>
  <li>Auto-detect wine-prefix for plugin bridges</li>
  <li>Expand usable MIDI keyboard keys a little (Z-M plus Q-P for 2 full octaves and 5 extra keys)</li>
  <li>Implement parameter text for plugin bridges</li>
  <li>Implement "Manage UIs" option for macOS and Windows</li>
  <li>Place more parameters per tab in editor dialog</li>
  <li>Show active peaks and enable keyboard for carla-rack group in canvas</li>
  <li>Knobs are now controlled in a linear way</li>
  <li>Previous experimental plugins removed, and carla-zynaddsubfx no longer exported</li>
  <li>Rack view can handle integeter knobs properly</li>
  <li>Save and restore canvas positions (standalone only for now)</li>
</ul>

<h3>Special Notes</h3>
<ul>
  <li>Carla as plugin and Carla-Control are still not available for Windows, likely won't be done for v2.0.</li>
</ul>

<h3>Downloads</h3>
<p>
    To download Carla binaries or source code, jump on over to the <a href="<?php echo $ROOT; ?>/Downloads" class="external free" rel="nofollow" target="_blank">KXStudio downloads section</a>.<br/>
    If you're using the KXStudio repositories, you can simply install "carla-git" (plus "carla-lv2" and "carla-vst" if you're so inclined).<br/>
    Bug reports and feature requests are welcome! Jump on over to the <a href="https://github.com/falkTX/Carla" class="external free" rel="nofollow" target="_blank">Carla's Github project</a> page for those.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; JACK2 1.9.12 release and future plans</span><br/>
    On <i>2017-12-21</i> by<i> falkTX</i>
</p>
<p>
    A few days ago a new version of JACK2 was released.<br/>
    You can grab the latest release source code at
        <a href="https://github.com/jackaudio/jack2/releases" target="_blank">
            https://github.com/jackaudio/jack2/releases</a>.<br/>
    The official changelog is:<br/>
</p>
<ul>
    <li>Fix Windows build issues</li>
    <li>Fix build with gcc 7</li>
    <li>Show hint when DBus device reservation fails</li>
    <li>Add support for internal session files</li>
</ul>
<p>
    If you did not know already, I am now maintaining JACK2 (and also JACK1).<br/>
    So this latest release was brought to you by yours truly. ;)<br/>
</p>
<p>
    The release was actually already tagged on the git repo quite some time ago, but I was waiting to see if Windows builds were possible.<br/>
    I got side-tracked with other things and 1.9.12 ended up not being released for some time, until someone reminded me of it again... :)<br/>
    There are still no updated macOS or Windows builds, but I did not want to delay the release further because of it.<br/>
    The 1.9.11 release (without RC label) was skipped to avoid confusion with the versions.<br/>
    So 1.9.12 is the latest release as of today. macOS and Windows binaries still use an older 1.9.11 version.
</p>
<p>
    Being the maintainer of both JACK1 and JACK2 means I can (more or less) decide the future of JACK.<br/>
    I believe a lot of people are interested to know the current plan.<br/>
</p>
<p>
    First, JACK1 is in bug-fix mode only.<br/>
    I want to keep it as the go-to reference implementation of JACK, but not add any new features to it.<br/>
    The reason for this is to try to get JACK1 and JACK2 to share as much code as possible.<br/>
    Currently JACK2 includes its own copy of JACK headers, examples and utilities, while JACK1 uses sub-repositories.<br/>
    During the course of next year (that is, 2018) I want to get JACK2 to slowly use the same stuff JACK1 does, then switch to use the same repositories as submodules like JACK1 does.<br/>
    This will reduce the differences between the 2 implementations, and make it a lot easier to contribute to the examples and utilities provided by JACK.<br/>
    (Not to mention the confusion caused by having utilities that work in simlar yet different ways)<br/>
    We will keep JACK1 "frozen" until this is all done.<br/>
</p>
<p>
    Second, but not least important, is to get the JACK1 specific features into JACK2.<br/>
    A few things were added into JACK1 after JACk2 was created, that never made it into JACK2.<br/>
    This includes meta-data (JACK2 does have the API, but a non-functional one) and the new internal clients.<br/>
    The purpose is to reduce reasons users might have to switch/decide between JACK1 and JACK2.<br/>
    JACK2 should have all features that JACK1 has, so that most users choose JACK2.<br/>
</p>
<p>
    Now, you are probably getting the impression that the focus will be on JACK2, which is correct.<br/>
    Though I realize some developers might prefer JACK1's design, the long "battle" of JACK1 and JACK2 needs to stop.<br/>
    Development of new features will happen in the JACK2 codebase, and JACK1 will slowly become legacy.<br/>
    Well, this is my personal plan at least.<br/>
</p>
<p>
    Not sure if this all can be done in 2018, but better to take things slowly and get things done than do nothing at all.<br/>
    I will keep you updated on the progress through-out the year.<br/>
    Happy holidays everyone!<br/>
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Breaking changes in Carla Plugin Host</span><br/>
    On <i>2017-11-21</i> by<i> falkTX</i>
</p>
<p>
    Hello everyone, I have some bad and good news about Carla.<br/>
    If you've been following the development on the git repository you likely know what this is about.<br/>
    There were some major changes done to Carla's code base in the past few days.<br/>
</p>
<p>
    The biggest change is the <b>removal of the Juce library</b>.<br/>
    The reasons for this are well known by some developers, but I'll not write about them here.<br/>
    After looking around for alternatives,
    I decided to fork an older GPLv2 compatible version of Juce and strip it down to the really essential parts needed
    to get Carla to build and run - even if it meant losing some of the features.<br/>
    The possibility to change to an entirely different C++ framework crossed my mind,
    but the amount of effort and breaking changes would be too big.<br/>
    I called the end result 'water'. You can say Carla doesn't need Juce, water is fine ;)<br/>
    There's only a few classes and files needed for I/O, XML and AudioGraph handling, everything else is gone. \o/
</p>
<p>
    The implications for this change are not big for Linux users,
    and is even a source of good news for other OpenSource Operating System users like FreeBSD and HaikuOS.<br/>
    In short, because Juce is no longer there, we have <b>lost support for VST3 and AudioUnit plugins</b>.<br/>
    Plus VST2 plugins on Windows and MacOS are now handled by Carla's code instead of relying on Juce.<br/>
    This heavily reduces the amount of compatible plugins handled by Carla, because Juce had a lot of hacks in order
    to make a lot of commercial plugins run properly.<br/>
    Also Carla on Windows and MacOS used Juce to handle Audio and MIDI devices,
    which now has been changed to RtAudio and RtMidi.<br/>
    RtAudio &amp; RtMidi are not as fully-featured as Juce was (we lose dynamic MIDI ports, for example),
    but I am glad to have Juce gone from the code-base.<br/>
    (You can say that parts of it are still there, but my conscience is clear,
    and Carla remains self-contained which was my main point since v2.0 development started)
</p>
<p>
    The next breaking change relates to the internal plugins used in Carla.<br/>
    The <b>plugins that already exist as LV2 will stop being exported with the carla.lv2</b> bundle.<br/>
    Plus these plugins will soon be removed from the default build.<br/>
    They quickly bloat the Carla binaries, as they include their artwork.
    Not to mention increasing the clone and building times.<br/>
    The plan is to have them disabled by default and moved into a new repository as submodule.<br/>
    Oh and the "experimental" plugins are going away soon.
    It was a mistake to make them Carla-specific in the first place, they should be regular audio plugins instead.
<p>
    Another breaking change is the removal of modgui support.<br/>
    The code only worked for PyQt4, which is no longer the default for Carla source-based builds.<br/>
    Plus it required webkit, which brings a big list of dependencies.
    I would have to port the code to webengine/chromium to make it work with PyQt5... no thanks.<br/>
</p>
<p>
    The final breaking change is the introduction of the <b>Experimental option in Carla's settings</b>.<br/>
    Everything that is not stable at the moment went there as an option, and got disabled by default. This includes:
</p>
<ul>
    <li>Plugin bridges</li>
    <li>Wine options</li>
    <li>Force-stereo mode</li>
    <li>Canvas eye-candy</li>
    <li>Canvas with OpenGL</li>
</ul>
<p>
    All new in-development / testing features will get introduced as experimental first.<br/>
    This will speed up the release of 2.0, since not everything needs to be finished for it.<br/>
    For example, plugin bridges can still be there and not fully implemented, and we still have 2.0-stable out!
</p>
<p>
    That's it! Thanks for reading so far.<br/>
    In other news, I gave a small presentation about Carla in this year's Sonoj Conference.<br/>
    You can check it out here:<br/>
    <a target="_blank" href="https://media.ccc.de/v/sonoj2017-1704-carla-plugin-host">
      https://media.ccc.de/v/sonoj2017-1704-carla-plugin-host
      </a>
</p>
<p>
    Carla 2.0-beta6 will be out soon :)
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; DPF-Plugins v1.1 released</span><br/>
    On <i>2017-06-17</i> by<i> falkTX</i>
</p>
<p>
    With some minor things finally done and all reported bugs squashed, it's time to tag a new release of DPF-Plugins.<br/>
    <a href="<?php echo $ROOT; ?>/screenshots/news/dpf-plugins-1.1.png">
        <img src="<?php echo $ROOT; ?>/screenshots/news/dpf-plugins-1.1_crop.png" alt=""/>
    </a>
</p>
<p>
    The initial 1.0 version was not really advertised/publicized before, as there were still a few things I wanted done first
      - but they were already usable as-is.<br/>
    The base framework used by these plugins (DPF) will get some deep changes soon, so better to have this release out now.
</p>
<p>
    I will not write a changelog here, it was just many small changes here and there for all the plugins since v1.0.<br/>
    Just think of this release as the initial one. :P
</p>
<p>
    The source code plus Linux, macOS and Windows binaries can be downloaded at
      <a href="https://github.com/DISTRHO/DPF-Plugins/releases/tag/v1.1" target="_blank">
          https://github.com/DISTRHO/DPF-Plugins/releases/tag/v1.1</a>.<br/>
    The plugins are released as LADSPA, DSSI, LV2, VST2 and JACK standalone.<br/>
</p>
<p>
    As this is the first time I show off the plugins like this, let's go through them a little bit...<br/>
    The order shown is more or less the order in which they were made.<br/>
    Note that most plugins here were made/ported as a learning exercise, so not everything is new.<br/>
    Many thanks to Ant&oacute;nio Saraiva for the design of some of these interfaces!
</p>

<h3>Mini-Series</h3>
<p>
    This is a collection of small but useful plugins, based on the good old LOSER-Dev Plugins.<br/>
    This collection currently includes 3 Band EQ, 3 Band Splitter and Ping Pong Pan.<br/>
    <br/>
    <img src="https://raw.githubusercontent.com/DISTRHO/DPF-Plugins/master/plugins/3BandEQ/Screenshot.png" alt="3bandeq"/>
    <img src="https://raw.githubusercontent.com/DISTRHO/DPF-Plugins/master/plugins/3BandSplitter/Screenshot.png" alt="3bandsplitter"/>
    <img src="https://raw.githubusercontent.com/DISTRHO/DPF-Plugins/master/plugins/PingPongPan/Screenshot.png" alt="pingpongpan"/>
</p>

<h3>MVerb</h3>
<p>
    Studio quality, open-source reverb.<br/>
    Its release was intended to provide a practical demonstration of Dattorro’s figure-of-eight reverb structure and provide the open source community with a high quality reverb.<br/>
    This is a DPF'ied build of the original
      <a href="https://github.com/martineastwood/mverb/" target="_blank">MVerb</a>
    plugin, allowing a proper Linux version with UI.<br/>
    <br/>
    <img src="https://raw.githubusercontent.com/DISTRHO/DPF-Plugins/master/plugins/MVerb/Screenshot.png" alt="mverb"/>
</p>

<h3>Nekobi</h3>
<p>
    Simple single-oscillator synth based on the Roland TB-303.<br/>
    This is a DPF'ied build of the
      <a href="https://github.com/gordonjcp/nekobee" target="_blank">nekobee</a>
    project, allowing LV2 and VST builds of the plugin, plus a nicer UI with a simple cat animation. ;)<br/>
    <br/>
    <img src="https://raw.githubusercontent.com/DISTRHO/DPF-Plugins/master/plugins/Nekobi/Screenshot.png" alt="nekobi"/>
</p>

<h3>Kars</h3>
<p>
    Simple karplus-strong plucked string synth.<br/>
    This is a DPF'ied build of the karplong DSSI example synth, written by Chris Cannam.<br/>
    It implements the basic Karplus-Strong plucked-string synthesis algorithm (Kevin Karplus &amp; Alex Strong, "Digital Synthesis of Plucked-String and Drum Timbres", Computer Music Journal 1983).<br/>
    <br/>
    <img src="https://raw.githubusercontent.com/DISTRHO/DPF-Plugins/master/plugins/Kars/Screenshot.png" alt="kars"/>
</p>

<h3>ndc-Plugs</h3>
<p>
    DPF'ied ports of some plugins from Niall Moody.<br/>
    See
      <a href="http://www.niallmoody.com/ndcplugs/plugins.htm" target="_blank">http://www.niallmoody.com/ndcplugs/plugins.htm</a>
    for the original author's page.<br/>
    This collection currently includes Amplitude Imposer, Cycle Shifter and Soul Force plugins.<br/>
    <br/>
    <img src="https://raw.githubusercontent.com/DISTRHO/DPF-Plugins/master/plugins/AmplitudeImposer/Screenshot.png" alt="amplitudeimposer"/>
    <img src="https://raw.githubusercontent.com/DISTRHO/DPF-Plugins/master/plugins/CycleShifter/Screenshot.png" alt="cycleshifter"/>
    <img src="https://raw.githubusercontent.com/DISTRHO/DPF-Plugins/master/plugins/SoulForce/Screenshot.png" alt="soulforce"/>
</p>

<h3>ProM</h3>
<p>
    <a href="http://projectm.sourceforge.net/" target="_blank">projectM</a> is an awesome music visualizer.<br/>
    This plugin makes it work as an audio plugin (LV2 and VST).<br/>
    <img src="https://raw.githubusercontent.com/DISTRHO/DPF-Plugins/master/plugins/ProM/Screenshot.png" alt="prom"/>
</p>

<h3>glBars</h3>
<p>
    This is an OpenGL bars visualization plugin (as seen in XMMS and XBMC/Kodi).<br/>
    Adapted from the
      <a href="https://github.com/nedko/jack_glbars/">jack_glbars</a>
    project by Nedko Arnaudov.<br/>
    <img src="https://raw.githubusercontent.com/DISTRHO/DPF-Plugins/master/plugins/glBars/Screenshot.png" alt="glbars"/>
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; KXStudio 14.04.5 release and future plans</span><br/>
    On <i>2017-06-10</i> by<i> falkTX</i>
</p>
<p>
    Hello there, it's time for another KXStudio ISO release! KXStudio 14.04.5 is here!<br/>
</p>
<p>
    Lots have changed in the applications and plugins for Linux Audio (even in KXStudio itself), so it was about time to see those ISO images updated.<br/>
    Behind the scenes, from what the user can see, it might appear as nothing has truly changed. After all, this is an updated image still based on Ubuntu 14.04, like those from 2 years ago.<br/>
    But we had a really big amount of releases for our beloved software, enough to deserve this small ISO update.<br/>
    There is no list of changes this time, sorry. The main thing worth mentioning is that base system is exactly the same, with only applications and plugins updated.<br/>
    You know the saying - if ain't broken, don't fix it!
</p>
<p>
    Before you ask.. no, there won't be a 16.04 based ISO release.<br/>
    When 2016 started KDE5 was not in a good enough shape, and it would need a lot of work (and time) to port all the changes made for KDE4 into KDE5.<br/>
    KDE5 is a lot better now than it used to be, but we missed the opportunity there.
</p>
<p>
    The current plan is to slowly migrate everything we have into KDE5 (meta-packages, scripts, tweaks, artwork, etc) and do a new ISO release in May 2018.<br/>
    (Yes, this means using Ubuntu 18.04 as base)<br/>
    The choice of KDE Plasma as desktop environment is not set in stone, other (lighter) desktops have appeared recently that will be considered.<br/>
    In the end it depends if it will be stable and good enough for audio production.
</p>
<p>
    You can download the new ISOs on the KXStudio website, at <a href="http://kxstudio.linuxaudio.org/Downloads#LiveDVD" target="_blank">http://kxstudio.linuxaudio.org/Downloads#LiveDVD</a>.<br/>
</p>
<p>
    And that's it for now.<br/>
    We hope you enjoy KXStudio, being it the ISO "distribution" release or the repositories.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Carla 2.0 beta5 is here!</span><br/>
    On <i>2017-01-05</i> by<i> falkTX</i>
</p>
<p>
    Hello again everyone, we're glad to bring you the 5th beta of the upcoming Carla 2.0 release.<br/>
    It has been more than 1 year since the last Carla release, this release fixes things that got broken in the mean time and continues the work towards Carla's 2.0 base features.<br/>
    There's quite a lot of changes under the hood, mostly bugfixes and minor but useful additions.<br/>
    With that being said, here are some of the highlights:
</p>

<table><tr><td>
<a href="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta5_carla-control.png"><img src="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta5_carla-control_crop.png" alt="carla-control"/></a>
</td><td>
<h3>Carla-Control is back!</h3>
<p>
    Carla-Control is an application to remotely control a Carla instance via network, using OSC messages.<br/>
    It stopped working shortly after Carla's move to 2.x development, but now it's back, and working a lot better.<br/>
    Currently works on Linux and Mac OS.
</p>
</td></tr></table>

<p><br/></p>

<table><tr><td>
<a href="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta5_logs-tab.png"><img src="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta5_logs-tab_crop.png" alt="logs-tab"/></a>
</td><td>
<h3>Logs tab</h3>
<p>
    This was also something that was brought back in this release.<br/>
    It was initially removed from the 2.x series because it did not work so well.<br/>
    Now the code has been fixed up and brought to life.
</p>
<p>
    You can disable it in the settings if you prefer your messages to go to the console as usual.<br/>
    Sadly this does not work on Windows just yet, only for Linux and Mac OS.<br/>
    But for Windows a Debug/Carla.exe file is included in this build (after you extract the exe as zip file), which can be used to see the console window.
</p>
</td></tr></table>

<p><br/></p>

<table><tr><td>
<a href="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta5_midi-pattern.png"><img src="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta5_midi-pattern_crop.png" alt="midi-pattern"/></a>
</td><td>
<h3>MIDI Sequencer is dead, long live MIDI Pattern!</h3>
<p>
    The internal MIDI Sequencer plugin was renamed to MIDI Pattern, and received some needed attention.<br/>
    Some menu actions and parameters were added, to make it more intuitive to use.<br/>
    It's now exported as part of the Carla-LV2 plugins package, and available for Linux and Mac OS.
</p>
</td></tr></table>

<p><br/></p>

<h3>More stuff</h3>
<ul>
  <li>Add carla-jack-single/multi startup tools</li>
  <li>Add 16 channel and 2+1 (sidechain) variant to Carla-Patchbay plugins</li>
  <li>Add new custom menu when right-clicking empty rack &amp; patchbay areas</li>
  <li>Add command-line option for help and version arguments</li>
  <li>Add command-line option to run Carla without UI (requires project file)</li>
  <li>Add X11 UI to Carla-LV2</li>
  <li>Remove MVerb internal plugin (conflicting license)</li>
  <li>Remove Nekofilter internal plugin (use fil4.lv2 instead)</li>
  <li>Implement plugin bridges for Mac OS and Windows</li>
  <li>Implement Carla-LV2 MIDI out</li>
  <li>Implement initial latency code, used for aligned dry/wet sound for now</li>
  <li>Implement support for VST shell plugins under Linux</li>
  <li>Implement sorting of LV2 scale points</li>
  <li>Allow to scan and load 32bit AUs under Mac OS</li>
  <li>Allow using the same midi-cc in multiple parameters for the same plugin</li>
  <li>Allow Carla-VST to be built with Qt5 (Linux only)</li>
  <li>Bypass MIDI events on carla-rack plugin when rack is empty</li>
  <li>Find plugin binary when saved filename doesn't exist</li>
  <li>Force usage of custom theme under Mac OS</li>
  <li>New option to wherever put UIs on top of carla (Linux only)</li>
  <li>Make canvas draggable with mouse middle-click</li>
  <li>Make it possible to force-refresh scan of LV2 and AU plugins</li>
  <li>Plugin settings (force stereo, send CC, etc) are now saved in the project file</li>
  <li>Renaming plugins under JACK driver mode now keeps the patchbays connections</li>
  <li>Update modgui code for latest mod-ui, supports control outputs now</li>
  <li>Lots and lots of bug fixes.</li>
</ul>
<p>
    There will still be 1 more beta release before going for a release candidate, so expect more cool stuff soon!<br/>
</p>

<h3>Special Notes</h3>
<ul>
  <li>Carla as plugin is still not available under Windows, to be done for the next beta.</li>
</ul>

<h3>Downloads</h3>
<p>
    To download Carla binaries or source code, jump into the <a href="<?php echo $ROOT; ?>/Downloads" class="external free" rel="nofollow" target="_blank">KXStudio downloads section</a>.<br/>
    If you're using the KXStudio repositories, you can simply install "carla-git" (plus "carla-lv2" and "carla-vst" if you're so inclined).<br/>
    Bug reports and feature requests are welcome! Jump into the <a href="https://github.com/falkTX/Carla" class="external free" rel="nofollow" target="_blank">Carla's Github project</a> page for those.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Changes in KXStudio repositories</span><br>
    On <i>2016-05-06</i> by<i> falkTX</i>
</p>

<p>
    Hey everyone, just a small heads up about the KXStudio repositories.
</p>

<p>
    If you use Debian Testing or the new Ubuntu 16.04 you probably saw some warnings regarding weak SHA1 keys when checking for updates.<br>
    We're aware of this issue and a fix is coming soon, but it will require some changes in the repositories.<br>
</p>

<p>
    First, we'll get rid of the 'lucid' builds and rebuild all of them in the 'trusty' series.<br>
    For those of you that were using Debian 6 or something older than Ubuntu 14.04, the repositories will stop working for you later this month.
</p>

<p>
    Second, the gcc5 specific packages will be migrated from 'wily' series to 'xenial'.<br>
    This means you'll no longer be able to use the KXStudio repositories if you're running Ubuntu 15.10.<br>
    If that's the case for you, please update to 16.04 as soon as possible. Note that 15.10 will be officially end-of-life in 2 months.
</p>

<p>
    And finally, the gcc5 packages will begin using Qt5 instead of Qt4 for some applications.<br>
    This will include Carla, Qtractor and the v1 series plugins.<br>
    Hopefully this won't break anything, but if it does please let us know.
</p>

<p>
    That's it for now. Have a nice weekend!
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; KXStudio Website has moved</span><br>
    On <i>2015-07-25</i> by<i> falkTX</i>
</p>

<p>
    Hey all,
</p>

<p>
    As you might have noticed sourceforge has been out of service for a while now.<br>
    That, coupled together with the previous adware/spyware fiasco led to me look for alternatives.
</p>

<p>
    So you can now find the KXStudio website at <a href="http://kxstudio.linuxaudio.org/">http://kxstudio.linuxaudio.org/</a>.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Carla 2.0 beta4 is here!</span><br/>
    On <i>2015-03-12</i> by<i> falkTX</i>
</p>
<p>
    Hello again everyone, we're glad to bring you the 4th beta of the upcoming Carla 2.0 release.<br/>
    This release is mostly focused on bug-fixing, so there aren't many splashy new features to show compared to previous ones.<br/>
    Still, here's the highlights:
</p>

<h2>Highlights</h2>

<table><tr><td>
<a href="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta4_updated-skins.png"><img src="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta4_updated-skins_crop.png" alt="updated-skins"/></a>
</td><td>
<h3>Updated plugin skins</h3>
<p>
  The plugin skins received some updates once again.<br/>
  They can now be collapsed in order to take less space.<br/>
  More to come soon.<br/>
</p>
</td></tr></table>

<p><br/></p>

<table><tr><td>
<a href="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta4_experimental-plugins.png"><img src="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta4_experimental-plugins_crop.png" alt="experimental-plugins"/></a>
</td><td>
<h3>New experimental plugins</h3>
<p>
  Some of the best linux-standalone tools are now working as internal Carla plugins.<br/>
  And because Carla exports its internal plugins as LV2, you'll also get them as LV2.<br/>
  Note that this is still experimental!<br/>
  Also, there's no support whatsoever from the original authors...<br/>
</p>
</td></tr></table>

<p><br/></p>

<table><tr><td>
<a href="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta4_mod-guis.png"><img src="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta4_mod-guis_crop.png" alt="mod-guis"/></a>
</td><td>
<h3>MOD GUI Support</h3>
<p>
  Carla can now show LV2 MOD GUIs, handled like a regular LV2 UI type.<br/>
  Note that this only works on the right setups (you need MOD-UI to be working first).<br/>
  It's not available on pre-compiled binaries, but you can get it via the KXStudio repositories.<br/>
</p>
</td></tr></table>

<p><br/></p>

<h3>More changes</h3>

<ul>
  <li>LinuxSampler code has been reworked and it's working better, it now exposes 2 output parameters.</li>
  <li>The plugin bridge code has been reworked; bridges are much more stable and MIDI-out is working.</li>
  <li>NSM code has also been reworked, testers welcome.</li>
  <li>OSC ports can be static by using CARLA_OSC_TCP_PORT and CARLA_OSC_UDP_PORT environment variables.</li>
  <li>Time panel can be shown/hidden as needed.</li>
  <li>DISTRHO-based internal plugins are back, specifically 3BandEQ/Splitter, PingPongPan, Nekobi, MVerb, VectorJuice and WoobleJuice.</li>
  <li>carla-single script is back, allowing you to quickly test and run all plugins.</li>
  <li>Carla as plugin allows new, open and save-as (export) menu actions.</li>
  <li>Start of new midi-sequencer plugin, still experimental and Linux-only for now.</li>
  <li>MIDI file internal plugin now saves the contents, so you can share projects without worrying if the file exists on the other system.</li>
  <li>Added 6 basic parameters to the ZynAddSubFX internal plugin.</li>
  <li>New MIDI channel filter plugin.</li>
  <li>LV2 and AU plugins are cached and automatically updated when needed, no need for scanning.</li>
  <li>Patchbay mode is now working for non-JACK drivers.</li>
  <li>Carla saves internal and external connections, specially useful in patchbay mode.</li>
  <li>Lots and lots of bug fixes.</li>
</ul>

<h3>Special Notes</h3>
<ul>
  <li>Renaming plugins currently is not safe (unless using Rack mode).</li>
  <li>GIG/SF2/SFZ skin still to be done, and some others...</li>
  <li>Plugin bridges only work on Linux right now. They used to be working for OSX but stopped due to a OS limitation.</li>
  <li>Windows 64bit builds a shows small console windows when discovering plugins. This is not intended and will hopefully be fixed soon.</li>
</ul>

<h3>Downloads</h3>
<p>
    To download Carla binaries or source code, jump into the <a href="<?php echo $ROOT; ?>/Downloads" class="external free" rel="nofollow" target="_blank">KXStudio downloads section</a>.<br/>
    If you're using the KXStudio repositories, you can simply install "carla-git" instead (plus "carla-lv2" and "carla-vst" if you're so inclined).<br/>
    Bug reports and feature requests are welcome! Jump into the <a href="https://github.com/falkTX/Carla" class="external free" rel="nofollow" target="_blank">Carla's GitHub project</a> page for those.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Carla 2.0 beta3 is here!</span><br/>
    On <i>2014-10-24</i> by<i> falkTX</i>
</p>
<p>
    Hello again everyone, we're glad to bring to you the 3rd beta of the upcoming Carla 2.0 release.<br/>
    There have been quite a few nice features implemented since beta2; here are the highlights.
</p>

<h2>Highlights</h2>

<table><tr><td>
<a href="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta3_internal-patchbay.png"><img src="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta3_internal-patchbay_crop.png" alt="internal-patchbay"/></a>
</td><td>
<h3>Internal Patchbay</h3>
<p>
  This new engine processing mode is similar to what JACK does for all clients and what other modular applications do.<br/>
  Every plugin gets its own canvas group and ports allowing you to interconnect plugin audio and MIDI.<br/>
  You can use this mode to build complex plugin routing scenarios, perhaps involving several layers of rack and patchbays.<br/>
  <br/>
  <i>Note that this is currently not available for non-JACK drivers; but for those you can use the internal carla-patchbay plugin.<br/>
  There's no support for LV2 Control-Voltage ports as of yet, this will be implemented in the next beta together with MIDI-OSC.</i><br/>
</p>
</td></tr></table>

<p><br/></p>

<table><tr><td>
<a href="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta3_vst-plugin.png"><img src="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta3_vst-plugin_crop.png" alt="new-look"/></a>
</td><td>
<h3>Carla as VST plugin (Linux only)</h3>
<p>
  With the first beta of Carla 2.0 we introduced Carla as a plugin, which worked as both internal and LV2.<br/>
  Now Carla is available as a VST plugin too, allowing you to load it all DAWs released for Linux.<br/>
  There are 4 variants: Rack-Synth, Rack-FX, Patchbay-Synth and Patchbay-FX.<br/>
</p>
</td></tr></table>

<p><br/></p>

<table><tr><td>
<a href="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta3_lmms-plugin.png"><img src="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta3_lmms-plugin_crop.png" alt="lmms-plugin"/></a>
</td><td>
<h3>Carla LMMS Plugin</h3>
<p>
  Carla has an LMMS plugin too, as Carla-Patchbay and Carla-Rack instruments.<br/>
  So finally you can use native softsynths within LMMS!<br/>
  The carla-lmms plugin code is already in LMMS and will be part of its 1.1 release.<br/>
  <br/>
  If you're using the KXStudio repositories and feel like giving it a try simply install carla-git and lmms.<br/>
</p>
</td></tr></table>

<p><br/></p>

<table><tr><td>
<a href="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta3_au-plugins.png"><img src="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta3_au-plugins_crop.png" alt="au-plugins"/></a>
</td><td>
<h3>AU Plugins (MacOS only)</h3>
<p>
  AU plugins are working in Carla now.<br/>
  Carla's plugin compatibility increases once more.<br/>
</p>
</td></tr></table>

<p><br/></p>

<table><tr><td>
<a href="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta3_updated-skins.png"><img src="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta3_updated-skins_crop.png" alt="updated-skins"/></a>
</td><td>
<h3>New and updated skins</h3>
<p>
  There's a new OpenAV-style plugin slot skin.<br/>
  Calf and ZynFX have been updated.<br/>
  More to come soon.<br/>
</p>
</td></tr></table>

<p><br/></p>

<table><tr><td>
<a href="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta3_no-skins.png"><img src="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta3_no-skins_crop.png" alt="no-skins"/></a>
</td><td>
<h3>Old non-skin mode</h3>
<p>
  You can now use the old non-skin mode from Carla 1.x series.<br/>
  This saves space if you load lots of plugins at once.<br/>
</p>
</td></tr></table>

<p><br/></p>

<h3>More stuff</h3>
<ul>
  <li>New time panel added, but it's very incomplete.</li>
  <li>LV2 plugin discovery is now automatic, but without plugin checks or testing.</li>
  <li>LV2 plugins are fully working on MacOS and Windows, including their native UIs (Cocoa and HWND respectively).</li>
</ul>
<p>
    There will still be 1 or 2 more beta releases before going for a release candidate, so expect more cool stuff soon!<br/>
</p>

<h3>Downloads</h3>
<p>
    To download Carla binaries or source code, jump into the <a href="<?php echo $ROOT; ?>/Downloads" class="external free" rel="nofollow" target="_blank">KXStudio downloads section</a>.<br/>
    If you're using the KXStudio repositories, you can simply install "carla-git" instead (plus "carla-lv2" and "carla-vst" if you're so inclined).<br/>
    Bug reports and feature requests are welcome! Jump into the <a href="https://github.com/falkTX/Carla" class="external free" rel="nofollow" target="_blank">Carla's Github project</a> page for those.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; DISTRHO: New plugins and minor fixing</span><br/>
    On <i>2014-08-26</i> by<i> falkTX</i>
</p>
<p>In this release we bring 4 new Linux plugin ports:<br>
  - EasySSP<br>
  - LUFS Meter<br>
  - Luftikus<br>
  - Stereo Source Separator<br>
  (Go to <a href="http://distrho.sourceforge.net/ports" target="_blank">http://distrho.sourceforge.net/ports</a> to see the current list of Linux ports.)
</p>
<p>The DPF-based plugins also had some minor fixes:<br>
  - 3BandEQ/Splitter had its sliders inverted, now fixed<br>
  - ProM now has pre-compiled linux binaries; UI can be resized by using - and + keys<br>
  - MVerb knobs order has been fixed<br>
  - Allow to open UI in LV2 hosts that don't support options feature (Ingen)<br>
  - Workaround for some VST hosts that don't set sample rate during init (Ardour3 and energyXT)<br>
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; The 2nd beta of Carla 2.0 is here!</span><br/>
    On <i>2014-08-15</i> by<i> falkTX</i>
</p>
<p>
    The Carla Plugin Host 2.0 beta2 release is finally here!<br/>
    This release was slightly delayed in order to ensure plugin bridges were working properly.<br/>
    If you haven't heard about the Carla 2.x series do so <a href="<?php echo $ROOT; ?>/News/?action=view&url=the-first-carla-20-beta-is-here" class="external free" rel="nofollow" target="_blank">here</a>.
</p>
<p>
    In short, this release makes plugin bridges actually work and it's the first to support MacOS (>= 10.6).<br/>
    The backend is now completely toolkit agnostic, only depending on the native window system (like X11 on Linux).<br/>
    This release is much more stable when compared to the previous beta - it will no longer eat your cat! ;)<br/>
    It should already be good enough for regular usage, if you can ignore some incomplete UI things.
</p>
<p>
    Known issues / Release notes: (all to be fixed in the next beta)
</p>
<ul>
    <li>All DPF and JUCE-based internal plugins were removed to reduce code size and complexity, they will be re-introduced later</li>
    <li>AU plugin support is available on MacOS, but the discovery mechanism fails to find them</li>
    <li>Linux release has support for bridging Window plugins using Wine (32bit and 64bit).</li>
    <li>Linux 32bit release will not load 64bit plugins even if ran on a 64bit system</li>
    <li>MacOS Carla-Rack LV2 plugin fails to show UI</li>
    <li>MacOS and Windows do not support native widgets in LV2 yet (Cocoa and HWND, respectively)</li>
    <li>MacOS release is 64bit only but it can load 32bit plugins</li>
    <li>Windows 64bit build doesn't provide GIG and SFZ support, use the 32bit build if you need those</li>
    <li>Windows builds do not support bridges (ie, 32bit plugins on a 64bit Carla) or Carla as plugin</li>
</ul>
<p>
    The next beta will change a few things, specially UI-wise.<br/>
    The discovery mechanism needs to be reworked for AU support and faster LV2 access.<br/>
    Adding plugins and browsing presets will probably change too.<br/>
    LMMS and VST plugin versions of Carla-Rack are also planned, but no promises for these.<br/>
    We'll be posting more news as things are developed.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; DISTRHO New release pack (2014-07-16)</span><br/>
    On <i>2014-07-16</i> by<i> falkTX</i>
</p>
<p>
    <b>DISTRHO has a new release!</b>
</p>
<p>
    In this release we cleaned up all the plugins, added new ones and removed those that we not considered good enough.<br/>
    Standalones are no longer available. Highlife was removed as a requested by its authors.
</p>
<p>
    The plugins we added to Ports are:
</p>
<ul>
    <li>Dexed</li>
    <li>KlangFalter</li>
    <li>MVerb</li>
    <li>Nekobi</li>
    <li>Obxd</li>
    <li>PitchedDelay</li>
</ul>
<p>
    Additionally we made a new plugin - <a href="https://github.com/DISTRHO/ProM" class="external free" rel="nofollow" target="_blank">ProM</a>
      - a music visualizer as audio plugin based on projectm.
</p>
<p>
    See the plugins and ports sections on <a href="http://distrho.sourceforge.net/" class="external free" rel="nofollow" target="_blank">
      DISTRHO's website</a> for screenshots and downloads.<br/>
    The complete source code is available at <a href="https://github.com/DISTRHO/" class="external free" rel="nofollow" target="_blank">https://github.com/DISTRHO/</a>.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Introducing JackAss</span><br/>
    On <i>2014-05-16</i> by<i> falkTX</i>
</p>
<p>
    JackAss is a VST plugin that provides JACK-MIDI support for VST hosts.<br/>
    Simply load the plugin in your favourite host to get a JACK-MIDI port.<br/>
    Each new plugin instance creates a new MIDI port.<br/>
</p>
<p>
    <b>Here's JackAss loaded in FL Studio:</b><br/><br/>
    <a href="<?php echo $ROOT; ?>/screenshots/news/jackass_flstudio.png"><img src="<?php echo $ROOT; ?>/screenshots/news/jackass_flstudio_crop.png" alt=""/></a><br/><br/>
    <br/>
    <b>And an example setup in Carla for it:</b><br/><br/>
    <a href="<?php echo $ROOT; ?>/screenshots/news/jackass_carla.png"><img src="<?php echo $ROOT; ?>/screenshots/news/jackass_carla_crop.png" alt=""/></a><br/><br/>
</p>
<p>
    JackAss sends the notes from the host to its JACK-MIDI port.<br/>
    It also exposes 50 parameters, which send a MIDI CC message when changed.<br/>
    You can use this to easily control external applications that accept JACK-MIDI input and possibly CC for automation (like Carla).<br/>
</p>
<p>
    Additionally there's a JackAssFX plugin, which only exposes parameters to send as MIDI CC, in case you don't need MIDI/notes.<br/>
</p>
<p>
    JackAss currently has builds for Linux, MacOS and Windows, all 32bit and 64bit. Just follow
        <a href="https://github.com/falkTX/JackAss/tree/master/release" class="external free" rel="nofollow" target="_blank">this link</a>.<br/>
    As a bonus, you also get special Wine builds - load it in a Windows application running in Linux via Wine and you get a real, native JACK-MIDI port from it!<br/>
</p>
<p>
    You can find JackAss source code and bug tracker in Github: <a href="https://github.com/falkTX/JackAss/" class="external free" rel="nofollow" target="_blank">https://github.com/falkTX/JackAss/</a>.<br/>
</p>
<p>
    PS: Why JackAss? Because it outputs to JACK. ;)
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; The first Carla 2.0 beta is here!</span><br/>
    On <i>2014-04-22</i> by<i> falkTX</i>
</p>
<p>
    Carla 2.0 is a full rework of the first Carla release.<br/>
    It's currently under development with a planned release later this year.<br/>
    Today the first beta is released, and we'll show you what to expect when the final version arrives.<br/>
</p>
<p>
    To download binaries or source code, jump into the <a href="<?php echo $ROOT; ?>/Downloads" class="external free" rel="nofollow" target="_blank">KXStudio downloads section</a>.<br/>
    If you're using the KXStudio repositories, you can simply install "carla-git" and "carla-plugins-lv2" instead.<br/>
    Bug reports and feature requests are welcome! Jump into the <a href="https://github.com/falkTX/Carla" class="external free" rel="nofollow" target="_blank">Carla's Github project</a> page for those.
</p>
<p>
    <b class="error">DISCLAIMER:</b> This is a beta release! Although all features mentioned here are working right now, they may be incomplete, have bugs or even eat your cat!<br/>
    <span  class="error">You've been warned.</span><br/>
</p>

<h2>Highlights</h2>

<table><tr><td>
<a href="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta_canvas-integration.png"><img src="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta_canvas-integration_crop.png" alt="new-look"/></a>
</td><td>
<h3>Canvas Integration</h3>
<p>
  When using the JACK multi-client mode, plugins will be mapped to their respective canvas group.<br/>
  Double-clicking the plugin group will show its UI, while pressing 'delete' will remove the actual plugin.<br/>
  There's extra right-click options, and the keyboard and meters will react accordingly.<br/>
</p>
</td></tr></table>

<p><br/></p>

<table><tr><td>
<a href="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta_newlook.png"><img src="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta_newlook_crop.png" alt="new-look"/></a>
</td><td>
<h3>New Look</h3>
<p>
  Each plugin gets its own slot skin.<br/>
  Different colors are attributed to each kind of plugin (EQ, delay, distortion, etc).<br/>
  Specialized skins that match the author/maker are used when appropriate.<br/>
</p>
</td></tr></table>

<p><br/></p>

<table><tr><td>
<a href="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta_carla-as-plugin.png"><img src="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta_carla-as-plugin_crop.png" alt="new-look"/></a>
</td><td>
<h3>Carla-Rack as a Plugin</h3>
<p>
  Carla itself working as a plugin (rack-mode).<br/>
  This allows to use several rack instances inside a single Carla instance.<br/>
  Internal patch-bay mode is also planned, but probably only for 3.0.<br/>
</p>
</td></tr></table>

<p><br/></p>

<table><tr><td>
<a href="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta_carla-rack-lv2.png"><img src="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta_carla-rack-lv2_crop.png" alt="new-look"/></a>
</td><td>
<h3>Internal plugins as LV2</h3>
<p>
  Carla internal plugins are now exported as LV2.<br/>
  This includes carla-rack and zynaddsubfx!<br/>
  Plugins that released separately (such as DISTRHO and ZamAudio) are not included.<br/>
</p>
</td></tr></table>

<p><br/></p>

<table><tr><td>
<a href="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta_win32-bridge.png"><img src="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-beta_win32-bridge_crop.png" alt="new-look"/></a>
</td><td>
<h3>Plugin Bridges</h3>
<p>
  Running plugins in a separate process for crash-protection.<br/>
  Using a separate process also makes it possible to load plugins with a different architecture from the host,<br/>
  such as 32-bit plugins on 64-bit Carla and Windows plugins in Linux.<br/>
  <br/>
  <span class="error">NOTE:</span> This feature is currently only available within the KXStudio repos.<br/>
</p>
</td></tr></table>

<p><br/></p>

<h3>More stuff</h3>
<ul>
  <li>Qt5 ready (already used in Windows builds)</li>
  <li>Save and restore canvas connections</li>
  <li>LV2 CV ports and Worker extension are now implemented, allowing to load ams-lv2 and setBfree among other plugins</li>
  <li>VST3 and AU plugin support</li>
</ul>
<p>
    There's some other things planned, but they might be delayed until 3.0 so that this release doesn't take too long to happen.<br/>
    You can find the complete TODO list here:<br/>
    <a href="https://raw.github.com/falkTX/Carla/master/doc/Carla-TODO" class="external free" rel="nofollow" target="_blank">https://raw.github.com/falkTX/Carla/master/doc/Carla-TODO</a>.<br/>
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; KXStudio repositories now ready for Debian!</span><br/>
    On <i>2014-04-10</i> by<i> falkTX</i>
</p>
<p>
    <img src="<?php echo $ROOT; ?>/images/repos.png" alt="" style="float:left;"/>
    The KXStudio repositories are now ready for Debian and its derivatives (including the upcoming Ubuntu 14.04).<br/>
    They should work for all Debian versions since Wheezy and Ubuntu 12.04 or above.<br/>
    See the <a href="<?php echo $ROOT; ?>/Repositories">Repositories section</a> for more information and how to enable them.<br/>
</p>
<p>
    There's a list of available applications in the repository <a href="<?php echo $ROOT; ?>/Repositories:Applications">here</a>
        and plugins <a href="<?php echo $ROOT; ?>/Repositories:Plugins">here</a>.<br/>
    These 2 lists will quickly grow as more stuff is added in the repositories.<br/>
</p>
<p><br/></p>
<p>
    You can request new software to be packaged in this
        <a href="https://linuxmusicians.com/viewtopic.php?f=47&t=10643" class="external free" rel="nofollow" target="_blank">LinuxMusicians forum topic</a>
        (although things seems a bit slow now, we'll eventually get to everyone's requests).<br/>
    Please report any issues regarding packages <a href="https://github.com/KXStudio/KXStudio/issues" class="external free" rel="nofollow" target="_blank">here</a>.<br/>
</p>
<p>
    If you use the repositories, please donate to help keep packager(s) motivated. See <a href="<?php echo $ROOT; ?>/Donations"><?php echo $ROOT; ?>/Donations</a>.<br/>
    All this month donations will go to ensure falkTX has a good trip to the Linux Audio Conference next month!<br/>
    <br/>
</p>
<p>
    PS: AVLinux users wanting to use the KXStudio repositories should be patient.<br/>
    Something cool might come up when falkTX and GMaq meet in next month's LAC. ;)<br/>
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Small Carla notice for JACK1 users (and 1.2.3 release)</span><br/>
    On <i>2013-12-26</i> by<i> falkTX</i>
</p>
<p>
    While I was doing a Carla video I got into a show-stopper bug in JACK2 (it kept crashing because of complex MIDI mixdown, see
    <a href="https://github.com/jackaudio/jack2/issues/46" class="external free" rel="nofollow" target="_blank">this</a>).<br/>
    So in the meantime I have to use JACK1, and while doing so I found a pretty nasty bug...<br/>
    <b>No system connections</b> were shown in the patchbay canvas!<br/>
<p>
    I don't know if others suffered from the bug (I always run JACK2) or though it was how it really worked.<br/>
    In any case, the Carla patchbay will show all JACK connections now - wherever they are from Carla plugins or system ones.
</p>
<p>
    <b>Updating to version 1.2.3 is recommended</b>, specially if you use JACK1.<br/>
    For a list of changes you can check the Carla stable git log
     <a href="https://github.com/falkTX/Carla/commits/stable" class="external free" rel="nofollow" target="_blank">here</a>,
    which allows to directly see what changed in the code.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Carla 2.0 development progress report</span><br/>
    On <i>2013-12-17</i> by<i> falkTX</i>
</p>
<p>
    This is a progress report for the new Carla, version 2.0.<br/>
    It will take a while to get a release ready, but there are already a few things done and stuff to show.
</p>
<h3>Backend</h3>
<p>
    First, <b>the backend is being rewritten to not use any system toolkit</b>.<br/>
    In 1.x series I've used Qt4 to handle graphics, but that might be a problem soon with Qt5 (cannot mix Qt4 and Qt5 stuff together).<br/>
    Plus I want the Carla backend to be toolkit agnostic, so that in the future it may be re-usable for others no matter what their main toolkit is.<br/>
    The main backend header files are now ANSI C compatible, thus increasing the chances of re-usability (as some Linux developers have a weird aversion to C++...).
</p>
<p>
    Because Qt is no longer used in the backend code, I needed something else to handle graphics and other advanced stuff - Juce was selected for this.<br/>
    Juce is a C++ framework focused on audio applications and plugins, which suits Carla nicely.<br/>
    There's a lot of useful things inside it that will make developing new features much easier (like the internal patchbay mode).<br/>
    Other things like AU and VST3 plugin hosting will be possible too thanks to Juce, although they are not relevant to Linux.
</p>
<p>
    Loading <b>Carla as a plugin</b> is also being worked on.<br/>
    There target two main targets with this:
</p>
<ul>
    <li>Load entire Carla projects - rack or patchbay - as a single plugin in the graph (avoiding clutter);</li>
    <li>Carla itself as an LV2 plugin;</li>
</ul>
<p>
    If you been following the LinuxMusicians forums you know that internal Carla plugins are already available as LV2 plugins (yes, that includes zynaddsubfx-lv2!).<br/>
    Once the Carla internal plugin work is complete, you automatically get an LV2 version of it as well! :D
</p>
<h3>Front-end</h3>
<p>
    There has been a few changes on the UI side as well.<br/>
    For example, the <b>plugin edit dialog</b> now looks like this:
</p>
<p>
    <img src="<?php echo $ROOT; ?>/screenshots/news/carla-2.0-report_edit-dialog.png" alt=""/>
</p>
<p>
    As seen the image, the user will be able to use "Stereo Balance" or "Mono Panning".<br/>
    The new layout also allows for a much <b>smaller window size</b>.<br/>
</p>
<p>
    Lastly, there's plans to bring <b>custom skins to plugin "slots"</b>, in a similar way to Reason.<br/>
    This is something I still have to investigate to find the best possible way to do it.<br/>
    It should be expandable so that random plugins can also use skins, probably via a new LV2 extension.<br/>
    More on this later.
</p>
<br/>
<p>
    That's all for now.<br/>
    Soon there will be a new DISTRHO release, so stay tuned!
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; New releases and future plans</span><br/>
    On <i>2013-11-27</i> by<i> falkTX</i>
</p>
<p>
    Hello everyone, there have been a couple of releases and changes on the KXStudio world.<br/>
</p>
<p>
    First of, a new release of the <b>KXStudio Live-DVD</b> is now available.<br/>
    This is a bug-fix for the 12.04.x series, which current users should already have if their systems are up to date.<br/>
    Checkout the <a href="<?php echo $ROOT; ?>/Documentation:KXStudio12043:About">About</a> or <a href="<?php echo $ROOT; ?>/Documentation:KXStudio12043:ReleaseNotes">Release Notes</a> to find out more about this release.
</p>
<p>
    Several <b>new versions of Carla</b> have been released since its first announcement, the last one currently being 1.2.2.<br/>
    For a change-log you can check the <a href="https://github.com/falkTX/Carla/commits/stable">git log (stable branch)</a> in github.<br/>
    This way you can see what actually changed in the code, instead of just seeing a description list.
</p>
<p>
    A new <b>DISTRHO</b> release is planned for release next month, and a few minor plugins.<br/>
    Hopefully the Plugin Toolkit will be ready by then, which should help the creation of new audio plugins (soon!).
</p>
<p>
    Lastly, after much discussion and consideration, the <b>KXStudio repositories are moving to Debian</b>.<br/>
    The current 12.04.x release is still fully supported, this is something that will happen slowly through 2014.<br/>
    Having the KXStudio repos in Debian means any Debian based distribution can make use of KXStudio goods, and not just Ubuntu ones.<br/>
    Although there are already happy users with Debian + KXStudio, this process is not yet complete.<br/>
    We'll make a new announcement once the Debian repos are ready for wide use.
</p>
<p>
    Oh, and the KXStudio website is currently being redone a little.<br/>
    Give it a visit now! <a href="<?php echo $ROOT; ?>/"><?php echo $ROOT; ?>/</a>
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Carla Plugin Host 1.0.0 released!</span><br/>
    On <i>2013-07-02</i> by<i> falkTX</i>
</p>
<p>
    After more than 2 years in development, here it is - the first stable release of Carla is now available!<br/>
    <a href="<?php echo $ROOT; ?>/screenshots/carla.png"><img src="<?php echo $ROOT; ?>/screenshots/carla.png" alt="carla.png"/></a><br/>
</p>
<p>
    Carla Plugin Host, or just Carla, is an audio plugin host, with support for many audio drivers and plugin formats.<br/>
    It has some nice features like automation of parameters via MIDI CC and full OSC control.<br/>
</p>
<p>
    Carla currently supports LADSPA (including LRDF), DSSI, LV2, and VST plugin formats, plus GIG, SF2 and SFZ file support.<br/>
    It uses JACK as the default and preferred audio driver but also supports native drivers like ALSA, DirectSound or CoreAudio.<br/>
</p>
<p>
    We currently release source code plus Windows and Linux binaries (focus goes into the Linux version).<br/>
    Downloads available at the usual place, <a href="<?php echo $ROOT; ?>/Downloads#Binaries">KXStudio Downloads</a>.<br/>
</p>
<p>
    For more information about Carla check its own application page <a href="<?php echo $ROOT; ?>/Applications:Carla">here</a>.<br/>
    We'll be updating that page in the next few days, with some tutorials and workflow videos as well, so stay tuned!<br/>
</p>
<p>
    You can follow the release discussion over at <a href="https://linuxmusicians.com/viewtopic.php?f=24&t=11249" class="external free" rel="nofollow">LinuxMusicians forums</a>.<br/>
    If you find this application useful and/or want to help further development, please consider a <a href="<?php echo $ROOT; ?>/Donations">donation</a>.<br/>
</p>

<a href="<?php echo $ROOT; ?>/"></a>

<hr/>

<p>
    <span style="font-size: 20px">&gt; KXStudio 12.04.1 released!</span><br/>
    On <i>2013-01-05</i> by<i> falkTX</i>
</p>
<p>
    After much hard work, a new release of KXStudio is ready!<br/>
    The previous ISO images were getting old, and since Cadence (and KXStudio in general) is now much more stable, it was time for an update.<br/>
    Existing KXStudio users already have 90% of the changes and fixes as KXStudio uses the repositories for everything.<br/>
    Still, this is a big milestone for the project. It's a step towards perfection.
</p>
<p>
    Here's a quick list of changes since the previous 12.04 release.
<p>
<ul>
    <b>Apps:</b>
    <li>Add AriaMaestosa, Giada and Petri-Foo to the DVD and default install</li>
    <li>Upgrade Cadence to the beta1 release (lots of fixes!)</li>
    <li>Fully up-to-date apps and plugins (as of 30/12/2012)</li>
    <li>Use KDE 4.9.4 on the Live-DVD (repositories now have 4.9.5)</li>
    <li>Use Firefox-KDE PPA on the Live-DVD</li>
</ul>
<ul>
    <b>Desktop/Theme:</b>
    <li>Add kxstudio-text plymouth (used when no gpu drivers are available)</li>
    <li>Fix plymouth Live-DVD "eject disk now" text not visible (and any other labels/info)</li>
    <li>Change KDE desktop theme to slim-glow (backported latest release from KDE 4.10)</li>
    <li>Change cursor theme to oxy-zion</li>
    <li>Disable KDE bouncing cursor by default</li>
    <li>Use Claudia-Launcher instead of Klaudia in KDE kickoff (start menu)</li>
</ul>
<ul>
    <b>Settings:</b>
    <li>Auto-disable PulseAudio respawn</li>
    <li>Set default asoundrc file to snd-aloop</li>
    <li>Set default jack prio to 85</li>
    <li>Use ALSA-Audio bridge instead of PulseAudio (no longer installed by default)</li>
</ul>
<ul>
    <b>Welcome Wizard:</b>
    <li>Add theme screenshot button</li>
    <li>Add theme font size option</li>
    <li>Auto-register 64bit WineAsio too (done in 'wine stuff' step)</li>
    <li>Don't update user theme to KXStudio by default</li>
    <li>Disable theme updates if not running KDE4 or XFCE</li>
</ul>
<p>
    The DVD works properly now (no need to re-login to apply settings anymore) and also has an option to boot to RAM (requires at least 3Gb to work).<br/>
    You can download the new ISOs at the KXStudio website, <a href="<?php echo $ROOT; ?>/Downloads"><?php echo $ROOT; ?>/Downloads</a>.
    <br/><br/>
</p>
<p>
    This release is dedicated to Hatsuke Miku, a [virtual] Vocaloid singer that recently has seen original artwork released under a Creative Commons license.<br/>
    We believe that actions like this one (and others in 2012) indicate that the world embraces open-source culture more and more, every day.<br/>
    You can find more about Miku
      <a href="http://www.crypton.co.jp/mp/pages/prod/vocaloid/cv01_us.jsp" class="external free" rel="nofollow" target="_blank">here</a>,
    and the its CC artwork
      <a href="http://piapro.net/en_for_creators.html" class="external free" rel="nofollow" target="_blank">here</a>.
    <br/><br/>
</p>
<p>
    We hope you enjoy KXStudio and the updated Cadence.<br/>
    Soon enough the website will have full documentation for it and other subjects, so stay tuned!
</p>

<p>
    <a href="http://www.linuxmusicians.com/viewtopic.php?f=24&t=10484" class="external free" rel="nofollow" target="_blank"><b>Comments and discussion</b></a>
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Call for Testing - Cadence pre-Beta</span><br/>
    On <i>2012-09-17</i> by<i> falkTX</i>
</p>
<p>
    Hello everybody!<br/>
    We're almost in the Beta1 release of Cadence!<br/>
    <br/>
    For those of you who don't know, Cadence is what KXStudio uses to manage the entire audio ecosystem.<br/>
    'Cadence' is by itself the main app of a series of tools (call it the "Cadence tools").<br/>
    There's 'Catia', a simple JACK patchbay; 'Claudia' is a ladish frontend, very similar to Catia (and gladish); 'Carla' is the plugin host.<br/>
    Then there's the small tools - JackMeter, JackSettings, Logs, Render and XY-Controller (their names give away their funtionality).<br/>
    <br/>
    Cadence and its tools are currently being documented, and pages will appear here: (incomplete)<br/>
    <a href="<?php echo $ROOT; ?>/Applications" class="external free" rel="nofollow" target="_blank"><?php echo $ROOT; ?>/Applications</a><br/>
    (There's a topic in the KXStudio forums discussing the documentation <a href="http://www.linuxmusicians.com/viewtopic.php?f=47&t=9135" class="external free" rel="nofollow" target="_blank">here</a>).<br/>
    <br/>
    If you're running KXStudio now, you either have updates or have recently updated Cadence and sub-packages.<br/>
    I'll be pushing the latest Cadence code to the KXStudio repositories frequently in the next days while the testing happens.<br/>
    ArchLinux users can use this AUR package:
        <a href="https://aur.archlinux.org/packages.php?ID=50747" class="external free" rel="nofollow" target="_blank">https://aur.archlinux.org/packages.php?ID=50747</a><br/>
    You can checkout what's going on in the Cadence commits page:
        <a href="https://github.com/falkTX/Cadence/commits/master" class="external free" rel="nofollow" target="_blank">https://github.com/falkTX/Cadence/commits/master</a><br/>
    <br/>
    Not everything is fully ready right now, here's a list of things that will still be done before the Beta1 release:<br/>
    - Cadence audio-bridges, currently disabled<br/>
    - Carla Windows plugin-bridge support (Linux 32/64bit bridges are already in place though). Note that this will remain an experimental feature even for this release.<br/>
    - Carla-Control is unfinished, the GUI will do nothing useful right now.<br/>
    - Catia ALSA-MIDI support is currently disabled, but will still not be activated for this release.<br/>
    <br/>
    <br/>
    So, what needs testing?<br/>
    Pretty much everything. :D<br/>
    Run the apps, click on random stuff and try to make them crash. When that happens, or if notice something weird, please report the bug.<br/>
    I've done my best to make the tools as stable + crash-free as possible, but we can never be too sure about these things.<br/>
    <br/>
    You can report bugs directly in the official bug page at
        <a href="https://github.com/falkTX/Cadence/issues" class="external free" rel="nofollow" target="_blank">https://github.com/falkTX/Cadence/issues</a>.<br/>
    (Reporting a bug in that page allows you to receive notifications whenever something is done related to it).<br/>
    <br/>
    <br/>
    Thanks in advance to everyone that decides to help!<br/>
    If you love these tools and they are useful to you, please consider making donation by following this link:<br/>
        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=PDGZL8PKSNHYW" class="external free" rel="nofollow" target="_blank">https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=PDGZL8PKSNHYW</a>.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; KXStudio 12.04 is out!</span><br/>
    On <i>2011-12-21</i> by<i> falkTX</i>
</p>
<p>
    Hey there everyone, it's that time again!<br/>
    KXStudio is now ready for the masses, now using Ubuntu 12.04 as the base.
    </p><p>KDE4 remains the officially supported Desktop, with XFCE on 2nd place.<br/>
    For this release I re-introduced the ISOs, although only 32bit for now. So now installing KXStudio can take 3 forms: Live-DVD, Ubuntu upgrade or NetBoot.<br />
    The Live-DVD uses KDE4, if you want XFCE instead please install UbuntuStudio first then follow the upgrade instructions as detailed <a href="<?php echo $ROOT; ?>/Documentation:Ubuntu:Upgrade">here</a>.
    </p><p>The Cadence tools are currently being ported to python3 in a new repo - <a href="https://github.com/falkTX/Cadence" class="external free" rel="nofollow" target="_blank">https://github.com/falkTX/Cadence</a>.<br/>
    Catarina, Catia, Claudia and the minor tools are almost beta state right now. Carla and Claudia-Launcher are still in the works (but already very functional), and the real 'Cadence' app is yet to be ported.<br/>
    These tools are already available on KXStudio in their latest git state, and will be released as beta for the while world very soon.
    </p><p>The DISTRHO plugin suite is now near completion and it's targeted for a new release this weekend.<br/>
    The entire collection is already available in the KXStudio repos but yet part of the meta-packages (will be added shortly after the official release).<br/>
    Generic linux binaries will be made available for non-KXStudio users as before.
</p>

<hr/>

-->

<p>
    Note: Since the KXStudio website has been internally reworked (removed mediawiki, much simpler PHP code now), the old news have been removed.<br/>
    <br/>
</p>

<?php
include_once("includes/footer.php");
?>
