<?php
$PAGE_TITLE    = "KXStudio News";
$PAGE_TYPE     = "NEWS";
$PAGE_SOURCE_1 = ARRAY("/News");
$PAGE_SOURCE_2 = ARRAY("News");
include_once("includes/header.php");
?>

<p><b>THIS IS A FAKE PAGE, KXSTUDIO NEWS USES A DYNAMIC MODULE NOW</b></p>

<a href="" target="_blank"></a>

<p>
    <span style="font-size: 20px">&gt; Carla 2.5.7 released</span><br/>
    On <i>2023-09-30</i> by<i> falkTX</i>
</p>

<p>
    Hi everyone, a new release for the <a href="https://kx.studio/carla" class="external free" rel="nofollow" target="_blank">Carla Plugin Host</a> is here, v2.5.7 which includes some important fixes including a regression when used together with the (yet to be released) v2.6.x discovery tools.
</p>

<h3>Changelog</h3>
<ul>
    <li>Fix compatibility of plugin discovery with newer 2.6.x tools</li>
    <li>Fix crash when using JACK under Linux ARM</li>
    <li>Fix carla-lv2 pre-run with 0 frames</li>
    <li>Fix carla-vst GUI for high-dpi screens</li>
    <li>Fix carla-native-plugin library exported symbols</li>
    <li>Show custom error message when trying to start JACK driver without JACK</li>
    <li>Skip special treatment for LADISH (do not set session management hints)</li>
</ul>

<h3>Downloads</h3>
<p>
    To download Carla binaries or source code, jump on over to the <a href="https://kx.studio/Downloads" class="external free" rel="nofollow" target="_blank">KXStudio downloads section</a>.<br/>
    If you're using the KXStudio repositories, you can simply install "carla".<br/>
    Bug reports and feature requests are welcome! Jump on over to the <a href="https://github.com/falkTX/Carla" class="external free" rel="nofollow" target="_blank">Carla's Github project</a> page for those.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Cardinal 23.09 released</span><br/>
    On <i>2023-09-17</i> by<i> falkTX</i>
</p>
<p>
    Hello again everyone, it is time for another <a href="https://github.com/DISTRHO/Cardinal" target="_blank">Cardinal</a> release.<br/>
    <a href="https://github.com/DISTRHO/Cardinal" target="_blank">Cardinal</a>
    is a free and open-source virtual modular synthesizer plugin.<br/>
    It is based on the popular <a href="https://github.com/VCVRack/Rack/" target="_blank">VCV Rack</a>
    but with a focus on being a fully self-contained plugin version.
</p>
<p>
    The main change for this release is making the OSC remote control an official feature, with some initial documentation <a href="https://github.com/DISTRHO/Cardinal/blob/main/docs/OSC-REMOTE-CONTROL.md" target="_blank">here</a>.<br/>
    Then also the usual set of fixes and a few module updates.<br/>
    As an extra, Cardinal has its own website now, living at <a href="https://cardinal.kx.studio/" target="_blank">cardinal.kx.studio</a> with the online/wasm version still accessible by clicking "Try Live".
</p>
<h3>Changelog</h3>
<ul>
    <li>Add OSC Remote control</li>
    <li>Do not try to save and load module info per project, its a global setting since 22.07</li>
    <li>Fix a few missing details in macOS app bundles</li>
    <li>Fix Cardinal Mini window title after loading patches</li>
    <li>Fix crash when pressing F9 (used internally for generating screenshots)</li>
    <li>Fix crash when window creation fails (e.g. running headless)</li>
    <li>Fix headless build when OpenGL is available (but unused since it is headless)</li>
    <li>Fix stuck notes in CardinalNative MIDI handling</li>
    <li>Fix VST2 parameter changes</li>
    <li>Proper handling of XDG_DOCUMENTS_DIR</li>
    <li>Switch to regular/initial welcome patch for web/wasm builds</li>
</ul>

<h3>Modules related changes</h3>
<ul>
    <li>Add EnigmaCurry</li>
    <li>Audio File Player: Fix resampled playback for some files, many CPU optimizations</li>
    <li>Ildaeil: Add bridge reload button, in case hosted plugin crashes or times out</li>
    <li>Ildaeil: List Windows plugins under Linux</li>
    <li>Update unless_modules</li>
</ul>

<h3>Downloads</h3>
<p>
    The source code plus Linux, macOS and Windows binaries can be downloaded at
      <a href="https://github.com/DISTRHO/Cardinal/releases/tag/23.09" target="_blank">
          https://github.com/DISTRHO/Cardinal/releases/tag/23.09</a>.<br/>
    Cardinal is released as LV2, VST2, VST3 and CLAP plugin, plus AudioUnit and JACK/Standalone for certain systems.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Carla 2.5.6 released</span><br/>
    On <i>2023-08-04</i> by<i> falkTX</i>
</p>

<p>
    Hi everyone, a new release for the <a href="https://kx.studio/carla" class="external free" rel="nofollow" target="_blank">Carla Plugin Host</a> is here, v2.5.6 which includes some important fixes including a regression when used together with the (yet to be released) v2.6.x discovery tools.
</p>

<h3>Changelog</h3>
<ul>
    <li>Fix compatibility of plugin discovery with newer 2.6.x tools</li>
    <li>Fix crash when using JACK under Linux ARM</li>
    <li>Fix carla-lv2 pre-run with 0 frames</li>
    <li>Fix carla-vst GUI for high-dpi screens</li>
    <li>Fix carla-native-plugin library exported symbols</li>
    <li>Show custom error message when trying to start JACK driver without JACK</li>
    <li>Skip special treatment for LADISH (do not set session management hints)</li>
</ul>

<h3>Downloads</h3>
<p>
    To download Carla binaries or source code, jump on over to the <a href="https://kx.studio/Downloads" class="external free" rel="nofollow" target="_blank">KXStudio downloads section</a>.<br/>
    If you're using the KXStudio repositories, you can simply install "carla".<br/>
    Bug reports and feature requests are welcome! Jump on over to the <a href="https://github.com/falkTX/Carla" class="external free" rel="nofollow" target="_blank">Carla's Github project</a> page for those.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Cardinal 23.07 released</span><br/>
    On <i>2023-07-15</i> by<i> falkTX</i>
</p>
<p>
    Hello yet again everyone, it is time for another <a href="https://github.com/DISTRHO/Cardinal" target="_blank">Cardinal</a> release.<br/>
    <a href="https://github.com/DISTRHO/Cardinal" target="_blank">Cardinal</a>
    is a free and open-source virtual modular synthesizer plugin.<br/>
    It is based on the popular <a href="https://github.com/VCVRack/Rack/" target="_blank">VCV Rack</a>
    but with a focus on being a fully self-contained plugin version.
</p>
<p>
    There are quite a few nice changes this time, from finally allowing global user settings to improved audio plugin hosting.<br/>
    Let's go throught the main changes...
</p>

<h3>Global user settings</h3>
<p>
    As per user request Cardinal now defines a user directory for patches, modules settings and other details.<br/>
    This came as a necessity for the updated Ildaeil module, which needs to store plugin cache between runs.<br/>
    With this now in place, many things that Cardinal was missing compared to VCV Rack are now enabled, including:
</p>
<ul>
    <li>Allow modules to save and load settings in a known location</li>
    <li>Allow to save, list and load module presets and general files from a known location</li>
    <li>Menu action "File" -&gt; "Open recent" is now enabled</li>
    <li>Menu action "File" -&gt; "Overwrite template" is now enabled</li>
    <li>Menu action "Help" -&gt; "Open user folder" is now enabled</li>
    <li>Save and load user settings globally</li>
</ul>
<p>
    Please note that user settings are saved <b>per-variant</b>, so e.g. CardinalSynth and CardinalFX will have differnet settings.<br/>
    This is 100% intentional, and found to be generally useful - we want to have different base templates and favorites on Synth vs FX.<br/>
</p>
<p>
    Also, something not done on VCV Rack side, a "File" -&gt; "New (factory template)" is now available.<br/>
    This allows to load the Cardinal's original template instead of the user-saved one.
</p>

<h3>Ildaeil plugin hosting</h3>
<p>
    The Ildaeil module allows to load audio plugins (such as LV2 and VST3) inside Cardinal.<br/>
    With this update, Ildaeil will automatically scan and list binary plugins, bringing support for LADSPA, DSSI, VST2, VST3 and CLAP.<br/>
    When supported by the plugin Ildaeil will also show the list of available presets.
</p>
<p>
    <img src="/screenshots/news/cardinal-23.07-ildaeil.png" alt="cardinal+ildaeil"/>
</p>

<h3>AIDA-X module</h3>
<p>
    This releases introduces a new module, a port of the <a href="https://github.com/AidaDSP/AIDA-X" target="_blank">AIDA-X audio plugin</a> (also available separately as a standalone plugin).<br/>
    AIDA-X is an Amp Model Player leveraging AI and machine learning, with a target of providing high fidelity simulations of guitar amplifiers.<br/>
    It is also possible to run entire signal chains consisting of any combination of amp, cab, dist, drive, fuzz, boost and eq.
</p>
<p>
    The module loads AIDA-X files that have been trained to match a desired sound output.<br>
    Right-click on the module and select "Load model file..." to load an AIDA-X model file from disk.
</p>
<p>
    A quick model pack can be downloaded from 
<a href="https://drive.google.com/drive/folders/18MwNhuo9fjK8hlne6SAdhpGtL4bWsVz-" target="_blank">AIDA DSP's Google Drive folder</a>.<br>
    Check out the 
<a href="https://forum.mod.audio/c/neural/62" target="_blank">MOD Forum's Neural Modelling section</a> for an online place for discussion, sharing and all things related to Amp Models.
</p>
<p>
    <img src="/screenshots/news/cardinal-23.07-aida-x.png" alt="cardinal+aida-x"/>
</p>

<h3>Web browser persistent storage</h3>
<p>
    A nice little addition to the Cardinal's online web version (running at <a href="https://cardinal.kx.studio/" target="_blank">cardinal.kx.studio</a> or easily self-hostable) is browser-side peristent storage.<br>
    This means we are able to locally save patches and user settings on the web version of Cardnal, making it a little bit more useful and not purely a test tool.<br>
    Previously saved patches can be accessed via "File" -&gt; "Open local patch" menu.
</p>
<p>
    Also on the web version, it will now automatically detect lack of Web-SIMD support and load a non-optimized version of Cardinal.<br>
    This allows to load Cardinal on Safari and other WebKit based browsers, or any other that does not support Web-SIMD.<br>
    Worth noting that latest WebKit has finally added support for Web-SIMD, so this is more of a temporary measure until the update is rolled out everywhere.
</p>

<p>
    There are a few module updates too, and some important bug fixes too, see the changelog below.
</p>
<h3>Changelog</h3>
<ul>
    <li>Add AIDA-X module</li>
    <li>Add Bogaudio AD to mini variant</li>
    <li>Add (binary) plugin scanning to Ildaeil plugin hosting (LADSPA, DSSI, VST2, VST3 and CLAP)</li>
    <li>Add plugin presets to Ildaeil, when exposed on the plugin side</li>
    <li>Add VST2 plugin folder option to Windows installer</li>
    <li>Allow custom URL for remote instance connections</li>
    <li>Allow usage of local user directory and configs, expose related options</li>
    <li>Fix focus to input text dialogs</li>
    <li>Fix missing menubar cpu usage</li>
    <li>Invert scroll X direction</li>
    <li>Rework file menu</li>
    <li>Update base VCV Rack to v2.3.0</li>
    <li>Update Sapphire to v2.2.2 (adds Tube Unit)</li>
    <li>Update MindMeldModular and SurgeXT, for Rack 2.3 compatibility</li>
</ul>

<p><b>Build related changes</b></p>

<ul>
    <li>Bump minimum required macOS version to 10.15</li>
    <li>Fix build with GCC13</li>
    <li>Fix missing `make install` of mini variant</li>
    <li>LTO no longer enabled by default for release builds</li>
    <li>Only enable remote OSC control in headless builds</li>
    <li>Remove `NOPLUGINS` build option</li>
    <li>Remove use of `mingw-std-threads`</li>
    <li>Several optimizations and build tweaks</li>
</ul>

<p><b>Web version related changes</b></p>

<ul>
    <li>Add persistent storage (automatic on save, can be manually triggered via File menu)</li>
    <li>Add local (browser-side) patch loading via File menu (under "Open local patch")</li>
    <li>Automatically load no-simd version on browsers that do not support web-simd</li>
    <li>Disable cursor lock by default</li>
</ul>

<h3>Downloads</h3>
<p>
    The source code plus Linux, macOS and Windows binaries can be downloaded at
      <a href="https://github.com/DISTRHO/Cardinal/releases/tag/23.07" target="_blank">
          https://github.com/DISTRHO/Cardinal/releases/tag/23.07</a>.<br/>
    Cardinal is released as LV2, VST2, VST3 and CLAP plugin, plus AudioUnit and JACK/Standalone for certain systems.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Ildaeil v1.3 released</span><br/>
    On <i>2023-07-15</i> by<i> falkTX</i>
</p>
<p>
    Hello again everyone, a new release of
    <a href="https://github.com/DISTRHO/Ildaeil" target="_blank"><b>Ildaeil</b></a>
    is here.<br/>
    <a href="https://github.com/DISTRHO/Ildaeil" target="_blank"><b>Ildaeil</b></a>
    is mini-plugin host working as a plugin, allowing one-to-one plugin format reusage.<br/>
    The idea is to load it as a plugin inside your DAW and then the other "real" plugin inside Ildaeil.<br/>
    This allows, for example, a VST3 host to load LV2 plugins and vice-versa.
</p>
<p>
    The main changes this time are automatic binary plugin scanning, exposing plugin presets and simplified standalone.<br/>
    The automatic binary plugin scanning makes Ildaeil able to quickly list and load even more plugins than before.<br/>
    Scanned plugins are cached so the scan only happens once per plugin (or until its binary is updated).
</p>
<p>
    For the standalone, Ildaeil now has a single standalone variant instead of the old FX/Synth/MIDI separate programs.<br/>
    In order to make this work in a more generic way, buttons for "enable midi" and "enable input" are shown when viewing a plugin's generic UI.<br/>
    Also related to this, an online version is available at <a href="https://ildaeil.kx.studio/" target="_blank">ildaeil.kx.studio</a>,
    used for doing experiments with realtime audio and plugins on the Web.
</p>
<p>
    <img src="/screenshots/news/ildaeil-1.3.png" alt="ildaeil-1.3"/>
</p>

<p>
    Full changelog:
</p>
<ul>
    <li>Add auto-scan of binary plugins (LADSPA, DSSI, VST2, VST3 and CLAP)</li>
    <li>Add enable-input, enable-midi and buffer-size options for standalone</li>
    <li>Add macOS standalone to release binaries</li>
    <li>Add preset selector for plugins that expose them</li>
    <li>Improve VST3 hosting</li>
    <li>Initial experimental web version, public instance running at https://ildaeil.kx.studio/</li>
    <li>Set GUI as resizable when running as standalone</li>
    <li>Use a single standalone program instead of having Synth/FX/MIDI variants</li>
</ul>

<h3>Downloads</h3>
<p>
    The source code plus Linux, macOS and Windows binaries can be downloaded at
      <a href="https://github.com/DISTRHO/Ildaeil/releases/tag/v1.3" target="_blank">
          https://github.com/DISTRHO/Ildaeil/releases/tag/v1.3</a>.<br/>
    Ildaeil is released as CLAP, LV2, VST2 and VST3 plugin, plus JACK/Standalone for some systems.<br/>
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Carla 2.5.5 released</span><br/>
    On <i>2023-06-04</i> by<i> falkTX</i>
</p>

<p>
    Hello again everyone, a new release for the <a href="https://kx.studio/carla" class="external free" rel="nofollow" target="_blank">Carla Plugin Host</a> is here, v2.5.5 which brings a couple of fixes to the v2.5 series and internal tweaks for its future integration in <a href="https://obsproject.com/" target="_blank">OBS</a>.<br/>
    Worth noting that future releases of <a href="https://github.com/DISTRHO/Cardinal/" target="_blank">Cardinal</a> and <a href="https://github.com/DISTRHO/Ildaeil/" target="_blank">Ildaeil</a> will depend on this version (or later) for their audio plugin discovery support.
</p>

<h3>Changelog</h3>
<ul>
    <li>Allow IPC during plugin discovery (controlled by external tools)</li>
    <li>Expose a few extra APIs in carla-utils library</li>
    <li>Install extra carla-utils related headers during `make install`</li>
    <li>Fix invalid/empty LV2 paths for compatibility with lilv</li>
    <li>Fix LV2 plugin state for plugin bridges</li>
    <li>Fix showing engine device settings on systems without JACK</li>
    <li>Fix usage with LMMS on Windows</li>
    <li>Remove use of `REAL_BUILD` macro, no longer needed</li>
    <li>Tweaks for integration in OBS</li>
    <li>Other minor fixes and cleanup</li>
</ul>

<h3>Downloads</h3>
<p>
    To download Carla binaries or source code, jump on over to the <a href="https://kx.studio/Downloads" class="external free" rel="nofollow" target="_blank">KXStudio downloads section</a>.<br/>
    If you're using the KXStudio repositories, you can simply install "carla".<br/>
    Bug reports and feature requests are welcome! Jump on over to the <a href="https://github.com/falkTX/Carla" class="external free" rel="nofollow" target="_blank">Carla's Github project</a> page for those.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Introducing AIDA-X</span><br/>
    On <i>2023-04-25</i> by<i> falkTX</i>
</p>
<p>
    Hello everyone, I would like to introduce a new audio plugin -
    <a href="https://github.com/AidaDSP/AIDA-X" target="_blank">AIDA-X</a>.
</p>
<p>
    <img src="/screenshots/news/introducing-aida-x.png" alt="AIDA-X"/>
</p>
<p>
    <a href="https://github.com/AidaDSP/AIDA-X" target="_blank">AIDA-X</a>
    is an Amp Model Player, it loads models of AI trained music gear which you can then play in real-time.<br/>
    Its main intended use is to provide high fidelity simulations of amplifiers.<br/>
    However, it is also possible to run entire signal chains consisting of any combination of amp, cab, dist, drive, fuzz, boost and eq.<br/>
    See <a href="https://github.com/AidaDSP/AIDA-X" target="_blank">https://github.com/AidaDSP/AIDA-X</a>
    for more details on the project, including documentation and downloads.
</p>
<p>
    Behind the scenes AIDA-X uses
    <a href="https://github.com/jatinchowdhury18/RTNeural" target="_blank">RTNeural</a>,
    which does the heavy lifting for model processing.<br/>
    Similar to
    <a href="https://kx.studio/News/?action=view&url=introducing-masterme" target="_blank">master_me</a>,
    I did the desktop plugin related code so it obviously uses
    <a href="https://github.com/DISTRHO/DPF" target="_blank">DPF</a>
    for the cross-platform and plugin format support details.<br/>
</p>
<p>
    This new plugin comes out of an effort from me, <a href="https://aidadsp.github.io/" target="_blank">AIDA-DSP</a> and <a href="https://mod.audio/" target="_blank">MOD Audio</a>.<br/>
    Initially AIDA-DSP folks did the work to get <a href="https://github.com/jatinchowdhury18/RTNeural" target="_blank">RTNeural</a> working as its own embed-focused LV2 plugin,
    together with figuring out the AI training details.<br/>
    The initial idea was to have an LV2/MOD-specific plugin that would serve as "generic model loader", this is the <a href="https://github.com/AidaDSP/aidadsp-lv2" target="_blank">aidadsp-lv2</a> project.<br/>
    As part of my work for MOD Audio, I helped to get this LV2 plugin in a bit better shape and integrated on the platform.<br/>
    You can see a nice, extensive discussion with Jatin (RTNeural's main author) regarding how to best approach a "load it all" with it
    <a href="https://github.com/jatinchowdhury18/RTNeural/pull/88" target="_blank">here</a>.
</p>
<p>
    With all pieces in place the LV2 embed plugin was/is working quite well inside MOD units and other low-spec devices, but LV2 is not yet a widely supported format...<br/>
    We did not want to have it as a niche plugin, the technology around it is getting a lot of attention lately because of how damn cool it is.<br/>
    I took the initiative to make a desktop plugin for AIDA-DSP, based on DPF as usual, and then we built on top of that.
</p>

<h3>Model Training and Downloads</h3>
<p>
    If you are interesting on capturing/training your own models, MOD Audio has created a dedicated
    <a href="https://mod.audio/aida-x-modeling-guide" target="_blank">Modeling Guide page</a>.<br/>
    There's a dedicated space for sharing and discussing all things related to Amp Models in the <a href="https://forum.mod.audio/c/neural/62" target="_blank">MOD Forum's Neural Modelling section</a>.<br/>
</p>

<h3>Plugin Downloads</h3>
<p>
    There are pre-compiled binaries for Linux, macOS and Windows which can downloaded at
      <a href="https://github.com/AidaDSP/AIDA-X/releases" target="_blank">
          https://github.com/AidaDSP/AIDA-X/releases</a>.<br/>
    You can also find it in the KXStudio repositories as <b>aida-x</b> package.
</p>
<p>
    And you can also try it live online at <a href="https://mod.audio/aida-x-online/" target="_blank">mod.audio/aida-x-online</a>,
    though this last option uses pre-recorded audio loops instead of real audio input.
</p>
<p>
    Enjoy and have fun!
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Carla 2.5.4 released</span><br/>
    On <i>2023-03-13</i> by<i> falkTX</i>
</p>

<p>
    Hello again everyone, a new Carla release is here, v2.5.4 which brings a couple of fixes to the v2.5 series.
</p>
<p>
    <a href="https://kx.studio/carla" class="external free" rel="nofollow" target="_blank">Carla</a>
    is an audio plugin host, with support for many audio drivers and plugin formats.<br/>
    It has some nice features like automation of parameters via MIDI CC (and send output back as MIDI too) and full OSC control.
</p>

<h3>Changelog</h3>
<ul>
    <li>Fix crash/regression when using LV2 plugins without worker extension</li>
    <li>Fix compat with PyQt >= PyQt 5.15.8</li>
    <li>Fix macOS build</li>
    <li>Simplify JACK event handling, now using a single queue on the main thread</li>
</ul>

<h3>Downloads</h3>
<p>
    To download Carla binaries or source code, jump on over to the <a href="https://kx.studio/Downloads" class="external free" rel="nofollow" target="_blank">KXStudio downloads section</a>.<br/>
    If you're using the KXStudio repositories, you can simply install "carla".<br/>
    Bug reports and feature requests are welcome! Jump on over to the <a href="https://github.com/falkTX/Carla" class="external free" rel="nofollow" target="_blank">Carla's Github project</a> page for those.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Cardinal 23.02 released</span><br/>
    On <i>2023-02-28</i> by<i> falkTX</i>
</p>
<p>
    Hello again everyone, it is time for another <a href="https://github.com/DISTRHO/Cardinal" target="_blank">Cardinal</a> release.<br/>
    <a href="https://github.com/DISTRHO/Cardinal" target="_blank">Cardinal</a>
    is a free and open-source virtual modular synthesizer plugin.<br/>
    It is based on the popular <a href="https://github.com/VCVRack/Rack/" target="_blank">VCV Rack</a>
    but with a focus on being a fully self-contained plugin version.
</p>
<p>
    The main change for this release is the introduction of a "Mini" variant.<br/>
    This is a special variant with a very small, hand-picked module selection and limited IO (2 audio ports plus 5 CV).<br/>
    There are 2 main reasons for this variant to exist:
</p>
<ul>
    <li>make it easier for users new to the modular world to get a working setup, by only having some of the best possible modules available to choose from</li>
    <li>hand-pick modules that are simple enough to work reliably in a remote setup</li>
</ul>
<p>
    For now the list of selected modules is quite small, intentionally. We will add a few more as the need appears.<br/>
    All included modules support polyphony, reducing confusion for new users not yet used to mono vs poly approach in Rack/Cardinal.<br/>
    <br/>
    The 2nd reason (only having simple modules) is needed in order to support DSP/UI separation.<br/>
    Having this in place means we can run the DSP on a different machine than the UI.<br/>
    This is particularly interesting for running Cardinal on embed systems, being controlled remotely via web browser or native desktop application.<br/>
    Already doable with LV2 from 23.02 onwards, used for
      <a href="https://forum.mod.audio/t/distrho-cardinal-mini/9262" target="_blank">MOD Audio builds</a> (as seen in the screenshot).<br/>
    Later on this will be made possible on standalone too.
</p>
<p>
    <img src="/screenshots/news/cardinal-23.02.png" alt="cardinal"/>
</p>
<p>
    There are a few module updates too, and some important bug fixes too, see the changelog below.
</p>
<h3>Changelog</h3>
<ul>
    <li>Add Mini variant (very few hand-picked modules, with separate DSP/UI under LV2)
    <li>Add wasm-noopt build, needed for some web browsers
    <li>Add CardinalMIDI variant for AU (same as CardinalFX but has different tag)
    <li>Allow to build without SSE optimizations (using `NOSIMD=true`)
    <li>Check /usr and /usr/local directories for existing Carla tools on macOS
    <li>Do not reset Host MIDI pitch when receiving an all-notes-off event
    <li>Fix display of Host CV in non-main variants
    <li>Fix LV2 not reacting to buffer-size changes
    <li>Fix VST3 "SDK" versioning to be more officially compatible
    <li>Remove the `NOPLUGINS` build option
    <li>Several performance optimizations</li>
</ul>

<h3>Module changes</h3>
<ul>
    <li>Update Grande Modular to 2.7.2</li>
    <li>Update Surge XT to 2.1.3</li>
</ul>

<h3>Downloads</h3>
<p>
    The source code plus Linux, macOS and Windows binaries can be downloaded at
      <a href="https://github.com/DISTRHO/Cardinal/releases/tag/23.02" target="_blank">
          https://github.com/DISTRHO/Cardinal/releases/tag/23.02</a>.<br/>
    Cardinal is released as LV2, VST2, VST3 and CLAP plugin, plus AudioUnit and JACK/Standalone for certain systems.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Carla 2.5.3 released</span><br/>
    On <i>2023-01-15</i> by<i> falkTX</i>
</p>

<p>
    Hello everyone, it is release day again, sorta..<br/>
    This time we have a single update for
    <a href="https://kx.studio/carla" class="external free" rel="nofollow" target="_blank">Carla</a>.
</p>
<p>
    <a href="https://kx.studio/carla" class="external free" rel="nofollow" target="_blank">Carla</a>
    is an audio plugin host, with support for many audio drivers and plugin formats.<br/>
    It has some nice features like automation of parameters via MIDI CC (and send output back as MIDI too) and full OSC control.
</p>
<p>
    Same as last time for v2.5.2, this update backports fixes from the main development branch into the stable 2.5 series.<br/>
    The more substantial stuff will come for 2.6.0, still a few months away.
</p>

<h3>Changelog</h3>
<ul>
    <li>Always set time frame information for JUCE hosted plugins</li>
    <li>Fix canvaspreview out-of-bounds panning for patchbay</li>
    <li>Fix receiving LV2 atoms bigger than 32kB</li>
    <li>Fix peak metering reading values out of bounds</li>
    <li>Fix missing &lt;/li&gt; code in about information string</li>
    <li>Support the more verbose LV2 MIDI CC definitions</li>
    <li>Use SDL driver by default on Haiku</li>
</ul>

<h3>Downloads</h3>
<p>
    To download Carla binaries or source code, jump on over to the <a href="https://kx.studio/Downloads" class="external free" rel="nofollow" target="_blank">KXStudio downloads section</a>.<br/>
    If you're using the KXStudio repositories, you can simply install "carla".<br/>
    Bug reports and feature requests are welcome! Jump on over to the <a href="https://github.com/falkTX/Carla" class="external free" rel="nofollow" target="_blank">Carla's Github project</a> page for those.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Cardinal 22.12 released</span><br/>
    On <i>2022-12-20</i> by<i> falkTX</i>
</p>
<p>
    Greetings everyone, we have yet another release of <a href="https://github.com/DISTRHO/Cardinal" target="_blank">Cardinal</a>,
    this with some great module additions.<br/>
    <a href="https://github.com/DISTRHO/Cardinal" target="_blank">Cardinal</a>
    is a free and open-source virtual modular synthesizer plugin.<br/>
    It is based on the popular <a href="https://github.com/VCVRack/Rack/" target="_blank">VCV Rack</a>
    but with a focus on being a fully self-contained plugin version.
</p>
<p>
    The main changes for this release are new modules (Sapphire, Stoermelder Pack-one and Surge-XT) and web-assembly related fixes.<br/>
    Highly requested and specially interesting for users are the brand new Surge-XT modules, see
<a href="https://www.youtube.com/watch?v=8MavXLbI50A" target="_blank">Omri Cohen's video</a> for a cool overview of what they can do.<br/>
    As usual there are a few module updates too.
</p>
<p>
    <img src="/screenshots/news/cardinal-22.12.png" alt="cardinal"/>
</p>

<h3>Changelog</h3>
<ul>
    <li>Add portable standalone Windows binaries</li>
    <li>Add JTB Waves example/demo patch</li>
    <li>Fix SSE not being enabled in pffft for 32bit builds</li>
    <li>Improve docs for building Windows binaries</li>
    <li>Stop using LTO for macos-universal builds</li>
</ul>

<h3>Module changes</h3>
<ul>
    <li>Add Sapphire</li>
    <li>Add Stoermelder Pack-one</li>
    <li>Add Surge-XT</li>
    <li>Update BaconPlugs</li>
    <li>Update Befaco</li>
    <li>Update MindMeld</li>
    <li>Update PathSet</li>
</ul>

<h3>Web-assembly related changes</h3>
<ul>
    <li>Add Web-assembly build instructions</li>
    <li>Enable brotli compression on release files</li>
    <li>Enable emscripten --use-preload-cache flag, improves browser cache</li>
    <li>Fix keyboard input having wrong keys</li>
    <li>Fix mouse lock on chrome-based browsers</li>
    <li>Fix versioning</li>
</ul>

<h3>Special Notes</h3>
<ul>
    <li>Building now requires a compiler compatible with C++17</li>
    <li>Windows builds now require 0x0600/Vista, needed for Surge</li>
</ul>

<h3>Downloads</h3>
<p>
    The source code plus Linux, macOS and Windows binaries can be downloaded at
      <a href="https://github.com/DISTRHO/Cardinal/releases/tag/22.12" target="_blank">
          https://github.com/DISTRHO/Cardinal/releases/tag/22.12</a>.<br/>
    Cardinal is released as LV2, VST2, VST3 and CLAP plugin, plus AudioUnit and JACK/Standalone for certain systems.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Cardinal 22.11 released</span><br/>
    On <i>2022-11-27</i> by<i> falkTX</i>
</p>
<p>
    Hi everyone, we have another
    <a href="https://github.com/DISTRHO/Cardinal" target="_blank">Cardinal</a>
    release, 22.11, with a very welcome change and important bugfixes.<br/>
    <a href="https://github.com/DISTRHO/Cardinal" target="_blank">Cardinal</a>
    is a free and open-source virtual modular synthesizer plugin.<br/>
    It is based on the popular <a href="https://github.com/VCVRack/Rack/" target="_blank">VCV Rack</a>
    but with a focus on being a fully self-contained plugin version.
</p>
<p>
    Contributed by
    <a href="https://github.com/vitreo12" target="_blank">Francesco Cameli</a>
    we now have modules processing order based on cable connections rather than when they were first added to the Rack.<br/>
    With this, there is now a guarantee that no single sample feedback is introduced between cable connections,
    unless feedback connections are in place or modules have internal buffering.
</p>
<p>
    As an example, Francesco provided a simple patch that plays a sine wave through a sequence of 54 modules to measure the difference of the starting signal with the end one.<br/>
    As it can be seen below, with the old implementation there was definitely a delay introduced by the connections.<br/>
    (since the audio engine steps through the modules in the order in which they were created, ignoring which modules should come first according to the cable connections)
</p>
<p>
    <img src="/screenshots/news/cardinal-22.11a.png" alt="cardinal"/>
</p>
    With the new implementation the signal flow now correctly shows a null sum between the starting signal and the end one:
</p>
<p>
    <img src="/screenshots/news/cardinal-22.11b.png" alt="cardinal"/>
</p>
<p>
    Other important changes are fixes to VST3 multi-IO, CLAP having a multi-IO variant, and macOS Intel builds working much better.
</p>

<h3>Main Changelog</h3>
<ul>
    <li>Add classic subtractive polysynth example/demo patch</li>
    <li>Automatically reset modules processing order according to cable connections</li>
    <li>Enable CLAP "main" variant (multi-IO audio now implemented, CV ports still TODO)</li>
    <li>Fix CLAP audio port types (now set as stereo, fixes loading under Anklang)</li>
    <li>Fix memory alignment issues for macOS Intel platform</li>
    <li>Fix out of bounds read on host audio 2 meters</li>
    <li>Fix VST3 non-main ports not receiving audio</li>
    <li>Make macOS native standalone behaving like Linux and Windows regarding buffer-size changes</li>
    <li>Mark LV2 CV ports as optional</li>
    <li>Only use simde, drop sse2neon (following VCV Rack's approach to ARM binaries)</li>
</ul>

<h3>Module changes</h3>
<ul>
    <li>Add RebelTech</li>
    <li>Update Meander</li>
    <li>Fix crashes when loading patches with Macro Oscillator 2</li>
    <li>Fix out of bounds read in DrumKit modules</li>
</ul>

<h3>Downloads</h3>
<p>
    The source code plus Linux, macOS and Windows binaries can be downloaded at
      <a href="https://github.com/DISTRHO/Cardinal/releases/tag/22.11" target="_blank">
          https://github.com/DISTRHO/Cardinal/releases/tag/22.11</a>.<br/>
    Cardinal is released as LV2, VST2, VST3 and CLAP plugin, plus AudioUnit and JACK standalone for certain systems.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; DPF-Plugins v1.6 released</span><br/>
    On <i>2022-11-01</i> by<i> falkTX</i>
</p>
<p>
    Hello everyone, a new release of <a href="https://github.com/DISTRHO/DPF-Plugins" target="_blank">DPF-Plugins</a> is here.<br/>
    DPF-Plugins is a collection of DPF-based plugins, including Kars, MVerb and Nekobi.<br/>
    This release brings some fixes alongside finishing the VST3 versions and adds CLAP support.<br/>
</p>
<p>
    General changelog:
</p>
<ul>
    <li>Add linux-riscv64 builds to release binaries</li>
    <li>Fix / stabilize VST3 support</li>
    <li>Initial CLAP support</li>
    <li>Set audio port configuration for all plugins</li>
    <li>Set VST3 categories in a few more plugins</li>
    <li>Update to latest DPF</li>
</ul>
<p>
    Plugin specific changes:
</p>
<ul>
    <li>Kars: Fix playback after a sample rate change</li>
    <li>Nekobi: Fix deadlock when receiving a MIDI message bigger than 3 bytes</li>
    <li>Nekobi: Make waveform slider behave as a button</li>
    <li>ProM: Fix invalid context (GL compat instead of GL3) in some setups</li>
    <li>ProM: Force keyboard focus on click</li>
</ul>

<h3>Downloads</h3>
<p>
    The source code plus Linux, macOS and Windows binaries can be downloaded at
      <a href="https://github.com/DISTRHO/DPF-Plugins/releases/tag/v1.6" target="_blank">
          https://github.com/DISTRHO/DPF-Plugins/releases/tag/v1.6</a>.<br/>
    The plugins are released as LADSPA, DSSI, LV2, VST2, VST3, CLAP and JACK standalone.<br/>
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Cardinal 22.10 released</span><br/>
    On <i>2022-10-15</i> by<i> falkTX</i>
</p>
<p>
    Hello hello! We have yet another release,
    <a href="https://github.com/DISTRHO/Cardinal" target="_blank">Cardinal</a>
    22.10, with mostly bugfixes this time.<br/>
    <a href="https://github.com/DISTRHO/Cardinal" target="_blank">Cardinal</a>
    is a free and open-source virtual modular synthesizer plugin.<br/>
    It is based on the popular <a href="https://github.com/VCVRack/Rack/" target="_blank">VCV Rack</a>
    but with a focus on being a fully self-contained plugin version.
</p>
<p>
    There are no 3rd-party module changes or updates this time around, the release is more or less the combination of changes from 22.09 until today.<br/>
    Fixes are significant enough to warrant a new release, so here we are.
</p>
<p>
    The only actual new feature comes from a sync of the internal Ildaeil with the just released
    <a href="https://kx.studio/News/?action=view&url=ildaeil-v12-released">version 1.2</a> of it,
    which allows to load arbitrary files as plugins.<br/>
    For Cardinal this means it is easier to host VST2 and CLAP plugins without having to rely on an external Carla window (which typically needs to be installed separately too).
</p>
<p>
    <img src="/screenshots/news/cardinal-22.10.png" alt="cardinal"/>
</p>

<h3>Changelog</h3>
<ul>
    <li>Allow Ildaeil loading arbitrary files/binaries as plugins</li>
    <li>Fix headless build</li>
    <li>Fix Host Time step not triggering under certain conditions</li>
    <li>Fix missing CardinalNative during "make install"</li>
    <li>Fix missing MIDI support in CardinalNative Windows builds</li>
    <li>Remove superfulous modules in falkTX_-_Divide-no-Conquer.vcv example patch</li>
    <li>Several fixes to CLAP plugin version</li>
    <li>Update internal Carla to latest, brings initial experimental CLAP hosting</li>
</ul>

<h3>Downloads</h3>
<p>
    The source code plus Linux, macOS and Windows binaries can be downloaded at
      <a href="https://github.com/DISTRHO/Cardinal/releases/tag/22.10" target="_blank">
          https://github.com/DISTRHO/Cardinal/releases/tag/22.10</a>.<br/>
    Cardinal is released as LV2, VST2, VST3 and CLAP plugin, plus AudioUnit and JACK standalone for certain systems.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Ildaeil v1.2 released</span><br/>
    On <i>2022-10-15</i> by<i> falkTX</i>
</p>
<p>
    Hello again everyone, a new release of
    <a href="https://github.com/DISTRHO/Ildaeil" target="_blank"><b>Ildaeil</b></a>
    is here.<br/>
    <a href="https://github.com/DISTRHO/Ildaeil" target="_blank"><b>Ildaeil</b></a>
    is mini-plugin host working as a plugin, allowing one-to-one plugin format reusage.<br/>
    The idea is to load it as a plugin inside your DAW and then the other "real" plugin inside Ildaeil.<br/>
    This allows, for example, a VST3 host to load LV2 plugins.
</p>
<p>
    The main changes this time are being able to load arbitrary files as plugins and CLAP hosting.<br/>
    On the plugin type combo-box you now have "Load from file..." option, which will open a file-browser to select a plugin or music file.<br/>
    This allows, for example, to load CLAP and VST2 plugins.<br/>
    It is a semi-temporary measure while the auto-plugin scanning is not yet in place.
</p>
<p>
    The CLAP hosting, as everything in Ildaeil, comes from Carla side too.<br/>
    It should be considered experimental for now and will be part of Carla 2.6.0 update later.
</p>
<p>
    There are also quite a few CLAP plugin related fixes, and details on X11 UIs changed to better support NTK-based ones.
</p>
<p>
    <img src="/screenshots/news/ildaeil-1.2.png" alt="ildaeil-1.2"/>
</p>

<p>
    Full changelog:
</p>
<ul>
    <li>Allow loading arbitrary files/binaries as plugins</li>
    <li>Add extra plugin bridges to release binaries (32bit plugins on 64bit systems, Wine stuff in Linux 64bit)</li>
    <li>Improve compatibility with some X11 UIs (breaks recursion)</li>
    <li>Fix loading LV2 path parameters via "Open File..." button</li>
    <li>Several fixes to CLAP plugin variant</li>
    <li>Use system-wide Carla binaries when not found inside plugin bundle</li>
    <li>Update to latest Carla, with initial experimental CLAP hosting</li>
</ul>

<h3>Downloads</h3>
<p>
    The source code plus Linux, macOS and Windows binaries can be downloaded at
      <a href="https://github.com/DISTRHO/Ildaeil/releases/tag/v1.2" target="_blank">
          https://github.com/DISTRHO/Ildaeil/releases/tag/v1.2</a>.<br/>
    Ildaeil is released as CLAP, LV2, VST2 and VST3 plugin, plus JACK Standalone for some systems.<br/>
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Carla 2.5.2 released</span><br/>
    On <i>2022-10-15</i> by<i> falkTX</i>
</p>

<p>
    Hello again everyone, it is release day again!<br/>
    Let's start with
    <a href="https://kx.studio/carla" class="external free" rel="nofollow" target="_blank">Carla</a>.
</p>
<p>
    <a href="https://kx.studio/carla" class="external free" rel="nofollow" target="_blank">Carla</a>
    is an audio plugin host, with support for many audio drivers and plugin formats.<br/>
    It has some nice features like automation of parameters via MIDI CC (and send output back as MIDI too) and full OSC control.
</p>
<p>
    This update backports fixes from the main development branch into the stable 2.5 series.<br/>
    Nothing too big or serious, just a regular bug-fix update.<br/>
    The more substantial stuff will come for 2.6.0, still a few months away.
</p>

<h3>Changelog</h3>
<ul>
    <li>Fix includedir/libdir variables in pkg-config files</li>
    <li>Fix LV2 plugins sending MIDI events out of order when using MIDI mapping for control output ports</li>
    <li>Fix VST2 all-notes/sound-off events after re-activation</li>
    <li>Fix "use outer frame for carla-lv2" from v2.5.1</li>
    <li>Correct jackbridge build flags, prevent LTO from being used in wine stuff</li>
</ul>

<h3>Downloads</h3>
<p>
    To download Carla binaries or source code, jump on over to the <a href="https://kx.studio/Downloads" class="external free" rel="nofollow" target="_blank">KXStudio downloads section</a>.<br/>
    If you're using the KXStudio repositories, you can simply install "carla".<br/>
    Bug reports and feature requests are welcome! Jump on over to the <a href="https://github.com/falkTX/Carla" class="external free" rel="nofollow" target="_blank">Carla's Github project</a> page for those.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Carla 2.5.1 released</span><br/>
    On <i>2022-09-30</i> by<i> falkTX</i>
</p>

<p>
    Hello again everyone, a new Carla release is here, v2.5.1 which brings a couple of fixes to the v2.5 series.
</p>
<p>
    <a href="https://kx.studio/carla" class="external free" rel="nofollow" target="_blank">Carla</a>
    is an audio plugin host, with support for many audio drivers and plugin formats.<br/>
    It has some nice features like automation of parameters via MIDI CC (and send output back as MIDI too) and full OSC control.
</p>

<h3>Changelog</h3>
<ul>
    <li>Do not set scale factor for LV2 plugin UIs on macOS</li>
    <li>Fix external MIDI connections for JUCE engine driver</li>
    <li>Fix a few memory leaks and runtime issues</li>
    <li>Fix several race conditions</li>
    <li>Fix logic around engine driver listings</li>
    <li>Fix position of external patchbay graph nodes not being restored when switching from internal to external</li>
    <li>Fix RISC-V builds</li>
    <li>Fix win32 bridge builds on win64 systems (forcing usage of i686-w64-mingw32 if needed)</li>
    <li>Ignore some compiler warnings from Qt side</li>
    <li>Use an outer frame for carla-lv2 outgoing events</li>
</ul>

<h3>Downloads</h3>
<p>
    To download Carla binaries or source code, jump on over to the <a href="https://kx.studio/Downloads" class="external free" rel="nofollow" target="_blank">KXStudio downloads section</a>.<br/>
    If you're using the KXStudio repositories, you can simply install "carla".<br/>
    Bug reports and feature requests are welcome! Jump on over to the <a href="https://github.com/falkTX/Carla" class="external free" rel="nofollow" target="_blank">Carla's Github project</a> page for those.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Ildaeil v1.1 released</span><br/>
    On <i>2022-09-23</i> by<i> falkTX</i>
</p>
<p>
    Hello everyone, a new release of
    <a href="https://github.com/DISTRHO/Ildaeil" target="_blank"><b>Ildaeil</b></a>
    is here.<br/>
    <a href="https://github.com/DISTRHO/Ildaeil" target="_blank"><b>Ildaeil</b></a>
    is mini-plugin host working as a plugin, allowing one-to-one plugin format reusage.<br/>
    The idea is to load it as a plugin inside your DAW and then the other "real" plugin inside Ildaeil.<br/>
    This allows, for example, a VST3 host to load LV2 plugins.
</p>
<p>
    The main changes here are JSFX "plugin" host support, fixing the VST3 implementation and adding a CLAP version.
</p>
<p>
    <img src="/repo/screenshots/ildaeil.png" alt="ildaeil"/>
</p>
<p>
    Full changelog:
</p>
<ul>
    <li>Add linux-riscv64 builds</li>
    <li>Add source tarball (containing offline buildable source)</li>
    <li>Can now host JSFX "plugins"</li>
    <li>Fix all known VST3 issues</li>
    <li>Fix build for web-assembly</li>
    <li>Fix handling of LV2 plugins with path parameter</li>
    <li>Fix high-dpi LV2 UIs for certain systems</li>
    <li>Fix log sliders</li>
    <li>Ildaeil as CLAP plugin</li>
    <li>Use same bundle/folder for VST2 plugins on Linux and Windows</li>
    <li>Update internal Carla to v2.5.1</li>
</ul>

<h3>Downloads</h3>
<p>
    The source code plus Linux, macOS and Windows binaries can be downloaded at
      <a href="https://github.com/DISTRHO/Ildaeil/releases/tag/v1.1" target="_blank">
          https://github.com/DISTRHO/Ildaeil/releases/tag/v1.1</a>.<br/>
    Ildaeil is released CLAP, LV2, VST2 and VST3 plugin, plus JACK Standalone for some systems.<br/>
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Cardinal 22.09 released</span><br/>
    On <i>2022-09-19</i> by<i> falkTX</i>
</p>
<p>
    Greetings everyone, we have yet another release of <a href="https://github.com/DISTRHO/Cardinal" target="_blank">Cardinal</a>,
    with a good set of bugfixes and a few nice to have features.<br/>
    <a href="https://github.com/DISTRHO/Cardinal" target="_blank">Cardinal</a>
    is a free and open-source virtual modular synthesizer plugin.<br/>
    It is based on the popular <a href="https://github.com/VCVRack/Rack/" target="_blank">VCV Rack</a>
    but with a focus on being a fully self-contained plugin version.
</p>
<p>
    The main changes for this release, besides the fixes, are a dark vs light mode switch, CardinalNative build, finishing VST3 support and an initial CLAP version.<br/>
    There are a couple of new module collections and updates to existing ones too.
</p>
<p>
    <img src="/screenshots/news/cardinal-22.09.png" alt="cardinal"/>
</p>

<h3>Changelog</h3>
<ul>
    <li>Add CardinalNative standalone build (uses native audio from the system instead of JACK)</li>
    <li>Add CLAP plugin version (fx and synth variants only, for now)</li>
    <li>Add dark mode switch in View menu, enabled by default</li>
    <li>Add readme and license to zip/tar releases</li>
    <li>Add linux-riscv64 build</li>
    <li>Add -Wno-format-security to build flags</li>
    <li>Fix AU plugin crash when host does not provide time signature (x64 auval)</li>
    <li>Fix AU plugin not updating for buffer-size and sample-rate changes</li>
    <li>Fix VST2 crash when removing 1 of many similar instances</li>
    <li>Fix VST2 and VST3 initial UI size in some hosts</li>
    <li>Fix VST3 remaining issues and mark it as stable (only CV ports need attention, but no Host/DAW that I know implements these)</li>
    <li>Fix memory corruption and leaks when loading and removing modules</li>
    <li>Fix Bidoo not saving non-parameter data</li>
    <li>Fix Bidoo limonade crashing when canceling its save dialog</li>
    <li>Fix Ildaeil log sliders, allow mono input plugins</li>
    <li>Fix/remove stray Carla module from "DRMR - Interverb.vcv" example patch</li>
    <li>Split main variant audio IO in 4 stereo groups</li>
</ul>

<h3>Module changes</h3>
<ul>
    <li><a href="https://github.com/alefnull/alefsbits" target="_blank">Add alefsbits</a></li>
    <li><a href="https://github.com/dBiz/dBiz" target="_blank">Add dBiz</a></li>
    <li><a href="https://github.com/hannakoppelaar/h4n4-modules" target="_blank">Add H4N4</a></li>
    <li>Update AS</li>
    <li>Update MindMeld</li>
    <li>Update PathSet</li>
</ul>

<h3>Downloads</h3>
<p>
    The source code plus Linux, macOS and Windows binaries can be downloaded at
      <a href="https://github.com/DISTRHO/Cardinal/releases/tag/22.09" target="_blank">
          https://github.com/DISTRHO/Cardinal/releases/tag/22.09</a>.<br/>
    Cardinal is released as LV2, VST2, VST3 and CLAP plugin, plus AudioUnit and JACK standalone for certain systems.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Introducing master_me</span><br/>
    On <i>2022-09-18</i> by<i> falkTX</i>
</p>
<p>
    Hello everyone, this is a release announcement/introduction for a new audio plugin:
    <a href="https://github.com/trummerschlunk/master_me" target="_blank">master_me</a>.
</p>
<p>
    <img src="/screenshots/news/master-me.png" alt="master-me"/>
</p>
<p>
    <a href="https://github.com/trummerschlunk/master_me" target="_blank">master_me</a>
    is an automatic audio mastering plugin for live-streaming, podcasting and internet radio stations.<br/>
    It takes care of master levels and "polishes" the sound with a chain of effects while introducing no latency.<br/>
    <a href="https://github.com/trummerschlunk/master_me" target="_blank">master_me</a>
    is closely modeled after the audio chain of Klaus Scheuermann's mastering studio in Berlin, Germany.<br/>
    See <a href="https://github.com/trummerschlunk/master_me" target="_blank">https://github.com/trummerschlunk/master_me</a>
    for more details on the project, including documentation.
</p>
<p>
    Klaus is main author of this plugin, using faust to set up the various DSP components and also to generate an audio plugin.<br/>
    Using faust provided tools was deemed not enough, as there was a wish for something more custom, specially on the GUI side.<br/>
    I was contacted to help with this part, so obviously I went with
    <a href="https://github.com/DISTRHO/DPF" target="_blank">DPF</a>
    for dealing with all the plugin implementation details.<br/>
    And that is how we got here :)
</p>
<p>
    <a href="https://github.com/trummerschlunk/master_me" target="_blank">master_me</a>
    is now at version 1.1.0 actually, as we found a few bugs shortly after release which were important enough to hold before going on sharing/"marketing" the plugin.<br/>
    The plugin was actually quite valuable in ironing out some issues from DPF side, specially for dealing with VST3.<br/>
    So future releases of DPF-based plugins will improve because of it, and we get a cool new plugin too. Good stuff :)
</p>

<h3>Downloads</h3>
<p>
    There are pre-compiled binaries for Linux, macOS and Windows which can downloaded at
      <a href="https://github.com/trummerschlunk/master_me/releases" target="_blank">
          https://github.com/trummerschlunk/master_me/releases</a>.<br/>
    You can also find it in the KXStudio repositories as <b>master-me</b> package.<br/>
</p>
<p>
    Enjoy and have fun!
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Carla 2.4.4 and 2.5.0 released</span><br/>
    On <i>2022-07-16</i> by<i> falkTX</i>
</p>

<p>
    Hello again everyone, it is 2 Carla releases on the same day!
</p>
<p>
    <a href="https://kx.studio/carla" class="external free" rel="nofollow" target="_blank">Carla</a>
    is an audio plugin host, with support for many audio drivers and plugin formats.<br/>
    It has some nice features like automation of parameters via MIDI CC (and send output back as MIDI too) and full OSC control.
</p>
<p>
    The reason for 2 releases is so there is an update to the 2.4.x series, being shipped in some Linux distributions that do not update packages to new versions.<br/>
    Hopefully the bugfix is possible to push-through for such cases.<br/>
    The <a href="https://github.com/falkTX/Carla/releases/tag/v2.4.4" target="_blank">2.4.4 version</a> does not have prebuilt binaries, it is meant only for those building from source.<br/>
    For the <a href="https://github.com/falkTX/Carla/releases/tag/v2.5.0" target="_blank">2.5.0 version</a>, we have a couple new things.
</p>

<h3>JSFX</h3>
<p>
    JSFX (those nice little FX from REAPER) make an appearance, contributed by Jean Pierre Cimalando.<br/>
    Alike LV2 handling on Carla, you do not need to manually scan for these, Carla will automatically find them if you have some paths set.<br/>
    If you have run REAPER before, you most likely will have a bunch of new plugins available to use right away.<br/>
    Note that custom UIs for those are not supported yet, to be implemented later.
</p>

<h3>SDL engine driver</h3>
<p>
    A new engine driver makes an apparance, for SDL (both v1 and v2) which is handy when building for systems where neither JACK or RtAudio works.<br/>
    The main targets for this driver are HaikuOS and Web-Assembly, the latter one which has already been verified to work.<br/>
    I am sure there will still be more tweaks needed, but at least audio should now work on HaikuOS too. I will investigate more in depth later.
</p>

<h3>Updated core modules</h3>
<p>
    And finally, built-in DPF and JUCE have been updated to their latest versions.<br/>
    This required changing some deep internal code to match the updated APIs, so it cannot be pushed as bugfix.
</p>

<h3>Changelog</h3>
<p>
    That is mostly it for now, there are a few other minor changes and fixes too, changelog follows below.
</p>
<ul>
    <li>Add JSFX plugin support</li>
    <li>Add SDL engine driver</li>
    <li>Adapt engine code to allow single-threaded web-assembly builds</li>
    <li>Fix macOS installer to run without rosetta2</li>
    <li>Do not use -fno-gnu-unique on BSD</li>
    <li>Fix inaccurate MIDI CC rounding</li>
    <li>Fix one more python3.10 compatibility issue</li>
    <li>Fix one more Windows UTF-16 issue</li>
    <li>Support mod:volts as LV2 unit</li>
    <li>Update dependency list in INSTALL.md</li>
    <li>Use full driver settings dialog if opened via menu and engine is not running</li>
    <li>Update built-in DPF</li>
    <li>Update built-in JUCE to 7.0.1</li>
</ul>

<h3>Downloads</h3>
<p>
    To download Carla binaries or source code, jump on over to the <a href="https://kx.studio/Downloads" class="external free" rel="nofollow" target="_blank">KXStudio downloads section</a>.<br/>
    If you're using the KXStudio repositories, you can simply install "carla".<br/>
    Bug reports and feature requests are welcome! Jump on over to the <a href="https://github.com/falkTX/Carla" class="external free" rel="nofollow" target="_blank">Carla's Github project</a> page for those.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Cardinal 22.07 released</span><br/>
    On <i>2022-07-15</i> by<i> falkTX</i>
</p>
<p>
    Greetings everyone, we have another release of <a href="https://github.com/DISTRHO/Cardinal" target="_blank">Cardinal</a>,
    mostly with bugfixes and a new surprise feature.<br/>
    <a href="https://github.com/DISTRHO/Cardinal" target="_blank">Cardinal</a>
    is a free and open-source virtual modular synthesizer plugin.<br/>
    It is based on the popular <a href="https://github.com/VCVRack/Rack/" target="_blank">VCV Rack</a>
    but with a focus on being a fully self-contained plugin version.
</p>
<p>
    The main changes on this release are related to keyboard input focus and VST3 fixes.<br/>
    For the keyboard input issue (basically in some hosts it was/is impossible to type in anything) I created a
    <a href="https://github.com/DISTRHO/Cardinal/issues/304" target="_blank">meta-issue to track all other issues</a>,
    with a table for each DAW, OS and plugin varant being tested.<br/>
    This helped me understand the situation better, which is pretty much:
</p>
<ul>
    <li>Linux/X11 support is hit or miss, depends on how well the DAW supports Linux, those that give proper attention to Linux generally work fine</li>
    <li>macOS support is almost a non-issue, every DAW works except REAPER that does not give focus automatically to the UI but we can easily work around it</li>
    <li>Windows is a mess</li>
</ul>
<p>
    While I was in the process of testing for Windows, I broke my desktop PC, actual broken hardware.. oops :/<br/>
    So that got cut short, but I still added in a way that supposedly works better.<br/>
    Previously the UI would try to give itself focus shortly after appearing on screen, obviously this didn't work as lots of users still reported not being able to type anything.<br/>
    Now the UI will try to get keyboard input focus on every mouse press, which yes it is a bit ugly but let's see if that works.
</p>
<p>
    More attention was given to the VST3 version, specially testing in many new DAWs.<br/>
    It is very frustrating with VST3 as pretty much all DAWs initialize the plugin and UI in a different way. For example:
</p>
<ul>
    <li>Cubase creates an Edit Controller instance using the "FUnknown" uid type (only Steinberg DAWs do this, everyone else uses the proper Component/Controller uid types)</li>
    <li>Some DAWs (Ableton and Steinberg stuff at least) refuse to load plugins with separate Component and Edit Controller, even though this is an official VST3 feature</li>
    <li>Some DAWs require a valid initial size before attaching the UI (resulting in 0x0 UI size if not provided), while others don't care</li>
    <li>The way to have access to the "Host Context" varies between hosts, with Cardinal (using
    <a href="https://github.com/DISTRHO/DPF" target="_blank">DPF</a>) now having 5 places where it can possibly come from</li>
</ul>
<p>
    I was meant to have a release of
    <a href="https://github.com/DISTRHO/DPF-Plugins" target="_blank">DPF-Plugins</a>
    today alongside Cardinal, but due to finding so many VST3 related issues I decided to postpone it.
</p>

<h3>On the Browser</h3>
<p>
    One of the big highlights of this release, which may come as a surprise if you are not following the project too closely, is the whole of Cardinal running directly in a Web Browser.<br/>
    Yes it is a thing, and yes it works. You can try it at <a href="https://cardinal.kx.studio/" target="_blank">cardinal.kx.studio</a>.<br/>
    (Requires web-assembly support with SIMD, WebMIDI only works in Chrome-based browsers)
</p>
<p>
    <img src="/screenshots/news/cardinal-22.07.png" alt="cardinal"/>
</p>
<p>
    This was mostly meant as a research effort from my side to see how feasible it would be to run
    <a href="https://github.com/DISTRHO/DPF" target="_blank">DPF-based plugins</a>
    on the browser, using
    <a href="https://emscripten.org/" target="_blank">emscripten</a>
    to compile things into web-assembly.<br/>
    By my own surprise, the initial tests proved quite sucessful so I ended up going all the way in.
</p>
<p>
    It is still not complete, for example clipboard support is missing, and I noticed a few crashes, so it should still be considered experimental.<br/>
    Most of the crashes comes from Rack code and modules never having supported a 32bit build, which is the web-assembly target.<br/>
    Still, as Cardinal already had some work done for Linux and Windows 32bit support, most things just work as-is in the end.<br/>
</p>
<p>
    It is awesome, and perhaps ridiculous too, that this is even a thing that can exist and work so well.<br/>
    Starting with 22.07, wasm (web-assembly) builds are going to be part of the release binaries, and in the nightly/action builds too.
</p>
<p>
    Note that I purposefully did not use the new AudioWorklet APIs, as that requires special server setup.<br/>
    Everything is single-threaded but in turn it all works by simply hosting the files as-is.<br/>
    If you want to build it yourself, just setup <a href="https://emscripten.org/" target="_blank">emscripten</a> and use <pre>make USE_GLES2=true</pre>
</p>
<p>
    No source code modifications are necessary.<br/>
    Build has only been successfully made within a Linux host.
</p>

<h3>Changelog</h3>
<ul>
    <li>Adjust view menu similar to VCV Rack 2.1.2</li>
    <li>Allow building using OpenGL ES2 (with <i>USE_GLES=true</i> build flag, disables glBars module)</li>
    <li>Do not install JACK standalone on Windows by default</li>
    <li>Fix example patches not working as templates</li>
    <li>Fix file dialogs not working in macos-intel builds</li>
    <li>Fix missing opus as supported extension in audio file module</li>
    <li>Fix missing time information in AU version (regression in 22.06)</li>
    <li>Fix VST3 keyboard input through host keycodes</li>
    <li>Fix VST3 not loading under Cubase</li>
    <li>Fix VST3 UI not appearing under Studio One</li>
    <li>Give keyboard focus to UI on each mouse click</li>
    <li>Make X11 clipboard handling more robust</li>
    <li>Update all modules that use file browser dialogs</li>
    <li>Update internal Cardinal async file dialog API to add default filename</li>
    <li>Update to Rack 2.1.2</li>
</ul>

<h3>Downloads</h3>
<p>
    The source code plus Linux, macOS and Windows binaries can be downloaded at
      <a href="https://github.com/DISTRHO/Cardinal/releases/tag/22.07" target="_blank">
          https://github.com/DISTRHO/Cardinal/releases/tag/22.07</a>.<br/>
    Cardinal is released as LV2, VST2 and VST3 plugin, plus AudioUnit and JACK standalone for certain systems.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Cardinal 22.06 released</span><br/>
    On <i>2022-06-29</i> by<i> falkTX</i>
</p>
<p>
    Hello everyone, yet another release of <a href="https://github.com/DISTRHO/Cardinal" target="_blank">Cardinal</a> is here,
    with a few new modules and a bunch of bugfixes.<br/>
    <a href="https://github.com/DISTRHO/Cardinal" target="_blank">Cardinal</a>
    is a free and open-source virtual modular synthesizer plugin.<br/>
    It is based on the popular <a href="https://github.com/VCVRack/Rack/" target="_blank">VCV Rack</a>
    but with a focus on being a fully self-contained plugin version.
</p>
<p>
    <img src="/screenshots/news/cardinal-22.06.png" alt="cardinal"/>
</p>
<h3>Module changes</h3>
<ul>
    <li><a href="https://github.com/AScustomWorks/AS" target="_blank">Add AS modules</a></li>
    <li><a href="https://github.com/gosub/forsitan-modulare" target="_blank">Add forsitan modulare</a></li>
    <li><a href="https://github.com/Ahineya/vcv-myth-plugin" target="_blank">Add Myth modules</a></li>
    <li>Add <a href="https://github.com/DISTRHO/Cardinal/blob/main/docs/CARDINAL-MODULES.md#host-parameters-map" target="_blank">Host Parameters Map</a> core module</li>
    <li>Add <a href="https://github.com/DISTRHO/Cardinal/blob/main/docs/CARDINAL-MODULES.md#sassy-scope" target="_blank">Sassy Scope</a> core module</li>
    <li>Implement custom plugin GUIs for internal Ildaeil plugins</li>
    <li>Implement JSFX plugin support in Ildaeil</li>
    <li>Make Host Parameters smoothing optional</li>
    <li>Fix Fundamental flipped noise outputs</li>
    <li>Fix Fundamental wavetable garbage reads</li>
    <li>Fix Host Time trigger (tolerate max 2 frames of deviation, dont trigger on tick == 0)</li>
    <li>Fix Lilac export file dialog</li>
    <li>Update voxglitch</li>
</ul>

<h3>Cardinal core changes</h3>
<ul>
    <li>Fix FX and Synth VST3 versions not running under Ableton Live</li>
    <li>Fix macOS universal installer for M1/M2systems without rosetta2</li>
    <li>Fix mouse up event for imgui based widgets</li>
    <li>Fix scroll speed on macOS</li>
    <li>Fix VST2 plugin cleanup (crash on close)</li>
    <li>Fix VST3 MIDI CC input handling</li>
    <li>Fix VST3 UI initial size</li>
    <li>Fix VST3 UI resizing from host side</li>
    <li>Fix X11 file browser dialog not picking files with special characters or spaces</li>
    <li>Implement glfwCreateStandardCursor, allowing custom cursors from modules</li>
    <li>Show demo patches in file menu</li>
    <li>Several optimizations</li>
    <li>Update to Rack 2.1.1</li>
</ul>

<h3>Other changes</h3>
<ul>
    <li>Add VT_-_Jupiter_Ascent.vcv demo patch</li>
    <li>Change synth template to use Fundamental instead of Bogaudio modules</li>
    <li>Implement more details for lv2 export (category, unipolar/bipolar CV, lights as control outputs)</li>
</ul>

<h3>Downloads</h3>
<p>
    The source code plus Linux, macOS and Windows binaries can be downloaded at
      <a href="https://github.com/DISTRHO/Cardinal/releases/tag/22.06" target="_blank">
          https://github.com/DISTRHO/Cardinal/releases/tag/22.06</a>.<br/>
    Cardinal is released as LV2, VST2 and VST3 plugin, plus AudioUnit and JACK standalone for certain systems.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Cadence 0.9.2 release</span><br/>
    On <i>2022-06-19</i> by<i> falkTX</i>
</p>
<p>
    Cadence 0.9.2
      <a target="_blank" href="https://github.com/falkTX/Cadence/releases/tag/v0.9.2">has just been tagged</a>.<br/>
    No new features have been added to the code-base.<br/>
    The release is focused on fixing compatibility with new systems, specially for Python 3.10.<br/>
</p>
<p>
    This release is quite late, all things considered.<br/>
    Until a few days ago I was still running an Ubuntu 20.04 based OS, so I couldn't reproduce any crashes.<br/>
    A few people submitted fixes for Python 3.10 compatibility, but I did not want to tag a new release before running a few tests myself.<br/>
    I am now on a Ubuntu 22.04 based OS, so finally I was able to reproduce the reported issues and fix any extra ones that popped up.
</p>
<p>
    I still hope to give Cadence an overhaul, splitting into separate projects so it is easier to manage and package.<br/>
    The project started 12 years ago, there is some ugly code in there, nowadays I would have done a lot of stuff there differently.<br/>
    Splitting Cadence into subprojects will also help on this overhaul, because it is less code to update and maintain each time.<br/>
    But in any case, it is not something that will happen now, more like an idea/plan for later.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; KXStudio Monthly Report (May 2022)</span><br/>
    On <i>2022-05-31</i> by<i> falkTX</i>
</p>
<p>
    Hello all, it has been a while since the last time I wrote one of the "monthly" reports, but now back again.<br/>
    Typically I would write about stuff that was happening behind-the-scenes or to be released soon,<br/>
    but last couple of months have been mostly releases of stuff that was already in progress and was reported on already, or quick enough releases that could be done in a single month.<br/>
    Also, there was 
    <a href="https://kx.studio/News/?action=view&url=cardinal-2202-is-now-released" target="_blank">quite</a>
    a
    <a href="https://kx.studio/News/?action=view&url=cardinal-2203-released" target="_blank">lot</a>
    of
    <a href="https://kx.studio/News/?action=view&url=cardinal-2204-released" target="_blank">Cardinal</a>,
    like
    <a href="https://kx.studio/News/?action=view&url=cardinal-2205-has-been-released" target="_blank">a lot </a>
    of it. :)
</p>

<h3>Continuing with efforts torwards VST3</h3>
<p>
    VST3 support in
    <a href="https://github.com/DISTRHO/DPF" target="_blank">DPF</a>
    is not going as quickly as I hoped, with the last few details being hard to get right.<br/>
    As a way to learn more about VST3 specifics, and also because 
    <a href="https://github.com/obsproject/obs-studio/discussions/5074" target="_blank">I promised to do so</a>,
    I began doing a host-side implementation for 
    <a href="https://github.com/falkTX/Carla" target="_blank">Carla</a>.
</p>
<p>
    While <a href="https://github.com/falkTX/Carla" target="_blank">Carla</a> can already do VST3 plugins,
    it relies on
    <a href="https://github.com/juce-framework/JUCE/" target="_blank">JUCE</a> 
    for it which I am not totally happy with.<br/>
    Having JUCE built on Carla + Linux just to get VST3 support is something that has always bothered me.<br/>
    Because Linux does not have the concept of a OS-level event loop, a special way of mixing Qt and JUCE is in place, and feels very dirty.<br/>
    There are other technical reasons for disliking the approach, but I will skip the details here.
</p>
<p>
    Do note that, alike for VST2, I will keep using VST3 through JUCE for macOS and Windows.<br/>
    Mostly because I rarely use those systems, so overall it is safer to rely on JUCE for them.<br/>
    Maybe at some point the Carla VST3 implementation will be good enough to consider enabling the native approach on those systems too, but that can take a while.
</p>

<h3>Carla related things</h3>
<p>
    Speaking of Carla, I merged the Jean Pierre Cimalando's
    <a href="https://github.com/falkTX/Carla/pull/1529" target="_blank">JSFX</a> plugin support pull request,
    though still in the process of cleaning things up (in particular non-x64 builds are broken at the moment).<br/>
    Next release will have the feature enabled, which also propagates to stuff like
    <a href="https://github.com/DISTRHO/Ildaeil" target="_blank">Ildaeil</a>
    and its use in
    <a href="https://github.com/DISTRHO/Cardinal/blob/main/docs/CARDINAL-MODULES.md#ildaeil" target="_blank">Cardinal</a>. :D
</p>
<p>
    Also on Carla, I updated the in-tree JUCE to version 7.<br/>
    JUCE 7 can now host LV2 plugins too, but for that I will keep Carla's native implementation which is more complete (JUCE does not support CV ports or external UIs, for example).<br/>
    The update to JUCE also serves to help bring JUCE-based plugins into
    <a href="https://github.com/DISTRHO/DISTRHO-Ports" target="_blank">DISTRHO-Ports</a>
    and KXStudio packaging, since I reuse the same JUCE version for everything.<br/>
    My
    <a href="https://github.com/DISTRHO/JUCE/commits/juce7" target="_blank">usual set of patches</a>
    are complete now, and everything was ready to update DISTRHO-Ports main branch to it except it 
    <a href="https://github.com/mtytel/vital/issues/31" target="_blank">completely breaks Vital[ium]</a> :/
</p>
<p>
    The best approach is likely to have Vitalium be separate from DISTRHO-Ports, but setting that up takes a fair bit of time, so we won't see that so soon.<br/>
    Perhaps the updated Vital source (whenever that drops..) will have better compatibility with newer JUCE versions, unknown at this point.<br/>
    In any case, updates to DISTRHO-Ports are blocked at the moment because of this, but there is enough to do on other projects anyway.
</p>
<p>
    Still on Carla, I also updated its in-tree DPF, bringing over the UI code restructure from a while ago.<br/>
    This is important for the JSFX support, for possibily having their custom GUIs.<br/>
    I will probably skip them for the first Carla version with JSFX enabled, but it is good to have this in place early so there are less blockers for the implementation.<br/>
    The update also means being able to refresh the
    <a href="https://github.com/falkTX/Carla-Plugins/tree/develop" target="_blank">DPF-based internal plugins</a>,
    which have been ignored for a while.
</p>
<p>

<h3>Sassy Spreadsheet and Scope</h3>
<p>
    A little fancy tool caught my attention recently - the 
    <a href="https://sol-hsa.itch.io/sassy" target="_blank">sassy spreadsheet</a>.<br/>
    It was 
    <a href="https://sol-hsa.itch.io/sassy/devlog/356586/sassy-open-sourced" target="_blank">recently open-sourced</a>
    and with the GUI widgets being familiar (it uses 
    <a href="https://github.com/ocornut/imgui" target="_blank">imgui</a>)
    there were very high chances of it working on Linux.<br/>
    There were no official Linux builds or ways to build for Linux, but 
    <a href="https://github.com/jarikomppa/sassy/pull/1" target="_blank">not for long</a>!<br/>
    So while we can build and run it now, sadly any operation results in a crash :(<br/>
    I did some investigation but couldn't find why, author also couldn't tell.
</p>
<p>
    That said, because it is based on imgui and I have worked with it and implemented in a few places, I wondered about taking advantage of it..<br/>
    Can we take the very nice and properly behaving scope and use it somewhere else?<br/>
    Yes we can. Yay for open-source!
</p>
<p>
    <img src="/screenshots/news/sassy-scope-cardinal.png" alt="sassy-scope-cardinal"/>
</p>

<h3>KXStudio Repositories</h3>
<p>
    On Repository related updates, I finally began to update some packages.<br/>
    This really goes slow compared to previous times, as the newly introduced automated plugin tests fail.<br/>
    I should have expected that..<br/>
    It is great that we catch things early, but that also means updates can be blocked because of it.<br/>
    Sometimes errors are 
    <a href="https://github.com/sadko4u/lsp-plugins/issues/253" target="_blank">falsely</a> 
    <a href="https://github.com/sadko4u/lsp-plugins/issues/254" target="_blank">reported</a>, but sometimes 
    <a href="https://github.com/lsp-plugins/lsp-plugins-crossover/issues/2" target="_blank">actual plugin issues</a> 
    are found too.<br/>
    Kind of a pain to deal with when things fail, though in the long term it is for the best.
</p>
<p>
    Because it was just too old and even non-working for some users, the use of the external, non-PPA based repository has been removed.<br/>
    This basically means the the removal of the ardour package from the KXStudio repositories.<br/>
    My idea for it was to update it to version 7 and find a way to automate the whole split build (amd64, armhf and arm64 packages).<br/>
    Easier said than done, and there is too much I am doing already, it is hard to justify maintaining an extra repository just for a few packages.<br/>
    Apologies for taking so long for taking a decision on this, I always hope to be able to do everything and more, but always fall short.<br/>
    Doing less things is fine too.
</p>
<p>
    Another small removal is the "recommended" meta-packages, which I had setup as a way for users to easily install a few extra useful programs from outside the KXStudio repositories.<br/>
    Turns out, making a meta-package that can properly depend/install things across many debian versions and variants is hard.<br/>
    Packages get removed or renamed, and makes a whole mess of optional dependencies that is just best to simply not care about.<br/>
    And so it is now.
</p>
<p>
    Related to actual package updates, we have these for this month:
</p>
<ul>
    <li>airwindows-lv2 added (version 1.3)
    <li>dragonfly-reverb updated to 3.2.6
    <li>lsp-plugins updated to 1.2.1
</ul>

<p>&nbsp;</p>

<p>
    That is all for now, see you next time!
</p>


<hr/>

<p>
    <span style="font-size: 20px">&gt; Cardinal 22.05 has been released</span><br/>
    On <i>2022-05-15</i> by<i> falkTX</i>
</p>

<p>
    Hello everyone, yet another release of <a href="https://github.com/DISTRHO/Cardinal" target="_blank">Cardinal</a> is here.<br/>
    <a href="https://github.com/DISTRHO/Cardinal" target="_blank">Cardinal</a>
    is a free and open-source virtual modular synthesizer plugin.<br/>
    It is based on the popular <a href="https://github.com/VCVRack/Rack/" target="_blank">VCV Rack</a>
    but with a focus on being a fully self-contained plugin version.
</p>
<p>
    This is a big update with not just bug-fixes but also new modules and a few behaviour changes too.<br/>
    Particularly interesting for existing Rack users is the inclusion of the popular Fundamental modules,
    though in customized fashion.<br/>
    A new
    <a href="https://github.com/DISTRHO/Cardinal/blob/main/docs/CARDINAL-MODULES.md#audio-to-cv-pitch" target="_blank">Audio to CV Pitch</a>
    module also makes a debut, based on
    <a href="https://github.com/DISTRHO/PitchTrackingSeries" target="_blank">DISTRHO PitchTrackingSeries</a>
    which was a shared effort for
    <a href="https://moddevices.com/guitar-synth/" target="_blank">pushing the feature into hardware units</a>.
</p>
<p>
    <img src="/screenshots/news/cardinal-fundamental.png" alt="cardinal-fundamental"/>
</p>

<h3>Changelog</h3>
<ul>
    <li>Add macos-intel build (smaller in size and better fit for intel-based macs)</li>
    <li>Add main <a href="https://forum.moddevices.com/t/cardinal/7287/81" target="_blank">Cardinal variant for MOD builds</a></li>
    <li>Add <a href="https://github.com/DISTRHO/Cardinal/blob/main/docs/CARDINAL-MODULES.md#audio-to-cv-pitch" target="_blank">Audio to CV Pitch</a> Core module</li>
    <li>Fix buffer size not always correct in the Audio Unit plugin</li>
    <li>Force UI keyboard focus (delayed focus grab after UI is open)</li>
    <li>Mute audio output if bypassed</li>
    <li>Remap Ctrl key + mouse clicks to right-click on macOS to better deal with its silly "one button" UX</li>
    <li>Store a few more properties as plugin state, including favorites</li>
</ul>

<h3>Added plugins</h3>
<ul>
    <li><a href="https://github.com/CardinalModules/Fundamental" target="_blank">Fundamental</a> (fork with custom panels)</li>
    <li><a href="https://github.com/knchaffin/Meander" target="_blank">Meander</a></li>
    <li><a href="https://github.com/VegaDeftwing/PinkTromboneVCV" target="_blank">PinkTrombone</a></li>
    <li><a href="https://gitlab.com/unlessgames/unless_modules" target="_blank">unless_modules</a></li>
    <li><a href="https://github.com/korfuri/WhatTheRack" target="_blank">WhatTheRack</a></li>
</ul>

<h3>Updated modules</h3>
<ul>
    <li><a href="https://github.com/jhoar/AmalgamatedHarmonics" target="_blank">Amalgamated Harmonics</a></li>
    <li><a href="https://github.com/CardinalModules/AudibleInstruments" target="_blank">Audible Instruments</a></li>
    <li><a href="https://github.com/VCVRack/Befaco" target="_blank">Befaco</a> (adds Channel Strip)</li>
    <li><a href="https://github.com/sebastien-bouffier/Bidoo" target="_blank">Bidoo</a></li>
    <li><a href="https://github.com/bogaudio/BogaudioModules" target="_blank">BogaudioModules</a></li>
    <li><a href="https://github.com/jatinchowdhury18/ChowDSP-VCV/" target="_blank">ChowDSP</a></li>
    <li><a href="https://github.com/dbgrande/GrandeModular" target="_blank">GrandeModular</a> (adds VCA4)</li>
    <li><a href="https://github.com/MarcBoule/ImpromptuModular" target="_blank">ImpromptuModular</a> (adds Sygen and Variations)</li>
    <li><a href="https://github.com/MarcBoule/MindMeldModular" target="_blank">MindMeldModular</a></li>
    <li><a href="https://github.com/patheros/PathSetModules" target="_blank">Path Set</a> (adds GlassPane, Nudge and ShiftyExpander)</li>
    <li><a href="https://github.com/SteveRussell33/Prism" target="_blank">Prism</a></li>
    <li><a href="https://github.com/SteveRussell33/repelzen" target="_blank">repelzen</a></li>
    <li><a href="https://github.com/clone45/voxglitch" target="_blank">Voxglitch</a> (adds GrooveBox)</li>
    <li><a href="https://github.com/ValleyAudio/ValleyRackFree" target="_blank">ValleyAudio</a></li>
</ul>

<h3>Module fixes</h3>
<ul>
    <li>Fix Core Audio2 meters stuck state when both L &amp; R are disconnected</li>
    <li>Fix Core Blank panel tags</li>
    <li>Fix Core Host-MIDI-Map flooding console logs in case of error (only print the same error once)</li>
    <li>Fix Core Host-Time reset trigger for hosts with non-static buffer sizes</li>
    <li>Fix DrumKit Sequencer memory corruption</li>
    <li>Fix mscHack PingPong filter cutoff value when loaded without GUI</li>
</ul>

<h3>Extra Notes</h3>
<p>
    For packagers: fftw3f is now an optional dependency, required for "Audio to CV Pitch" module.<br/>
    The module will built if fftw3f is available during build, otherwise disabled.
</p>
<p>
    The "lv2export" stuff has been reworked and works now, includes 3 test plugins.<br/>
    This allows to export individual modules as single lv2 plugins, with very minimal binaries and no UI.<br/>
    For now it is still quite experimental, just to mess around with.<br/>
    Future releases might enable them by default, still undecided.
</p>

<h3>Downloads</h3>
<p>
    The source code plus Linux, macOS and Windows binaries can be downloaded at
      <a href="https://github.com/DISTRHO/Cardinal/releases/tag/22.05" target="_blank">
          https://github.com/DISTRHO/Cardinal/releases/tag/22.05</a>.<br/>
    Cardinal is released as LV2, VST2 and VST3 plugin, plus AudioUnit and JACK standalone for certain systems.<br/>
    The VST3 version is still considered experimental, prefer to use LV2 or VST2 if possible at this time.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Correction: Changes in KXStudio repositories</span><br/>
    On <i>2022-04-25</i> by<i> falkTX</i>
</p>
<p>
    This is a quick correction to <a href="https://kx.studio/News/?action=view&url=changes-in-kxstudio-repositories-2">yesterday's post regarding changes in the KXStudio repositories</a>.<br/>
    I mentioned that the minimum required version was Debian 12 / Bookworm.<br/>
    This is incorrect, the minimum is actually Debian 11 / Bullseye.
</p>
<p>
    Apologies for the lapse, have a good day! :)
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Changes in KXStudio repositories</span><br/>
    On <i>2022-04-24</i> by<i> falkTX</i>
</p>

<p>
    For the impatient ones, the too-long-didn't-read short summary is:
</p>
<ul>
    <li>Minimum required version to use the KXStudio repositories is now 20.04 / Focal or Debian 11 / Bullseye</li>
    <li>i386 / 32bit systems are no longer supported</li>
    <li>"Extras" repository has been marked as deprecated and should no longer be used</li>
</ul>

<h3>Updating base version to 20.04 / focal</h3>

<p>
    As Ubuntu 22.04 was just announced, I began to do work on the KXStudio repositories once again.<br/>
    They were using Ubuntu 18.04 as base for all builds, which is getting old now and only has 1 more year of support.<br/>
    That last part is important - when 18.04 goes end-of-line, no new
    <a href="https://help.launchpad.net/Packaging/PPA" class="external free" rel="nofollow" target="_blank">Launchpad PPA</a>
    builds are possible.<br/>
    And since the KXStudio project relies on those for its packages, I need to update the base version from time to time in order to be able to keep building things.
</p>
<p>
    If you need to ask why using PPAs and not something else, there just isn't another service that can do all that is required (that I know of).<br/>
    <a href="https://build.opensuse.org/" class="external free" rel="nofollow" target="_blank">OpenSUSE's Open Build System</a>
    is similar, but it cannot handle the inter-dependency of the different sub-repositories.<br/>
    For example, a "toolchain" repo is used on all builds but not exported to the user, so it is safe to update things like cmake and meson only for the repository builds without breaking the user's system/packages.
</p>
<p>
    The extreme alternative would be to move to ArchLinux and their new
    <a href="https://github.com/osam-cologne/archlinux-proaudio/blob/master/ANNOUNCEMENT.md" class="external free" rel="nofollow" target="_blank">Unofficial Pro-Audio Package Repository</a>,
    and while tempting, I think a lot of users would be disappointed and sad with that call.<br/>
    And hosting the entire build setup myself is not going to happen, I do not have the capacity or funds for such a thing.
</p>
<p>
    But back to the topic at hand, moving up on the base version for KXStudio package builds means the user-facing minimum version also goes up.
</p>
<p>
    So as of today <b>the minimum required version to use the KXStudio repositories is 20.04 / Focal or Debian 11 / Bullseye</b>.<br/>
    Newly installed systems can no longer use the old variant of the KXStudio repositories.<br/>
    The old 18.04-base packages are not going to be updated anymore.
</p>

<h3>Issues with i386 builds</h3>

<p>
    On 20.04 onwards, Ubuntu has disabled i386 PPA builds for all packages except those that are part of 20.04 release.<br/>
    The move to 20.04 as repository base is already taking place and I did quite a few tests to try and workaround the build limitation, but from what I can tell it is just not possible.<br/>
    This means <b>the KXStudio repositories will no longer provide i386 packages</b>.
</p>
<p>
    Everything else will keep working, including armhf and arm64 packages.<br/>
    Hopefully there are ways to still build a few 32bit things like wineasio and carla wine bridges, but those will be 64bit packages just with 32bit libraries.<br/>
    I did not actually test for this yet, more news on it soon.
</p>

<h3>Deprecated repositories</h3>

<p>
    The lack of i386 package builds makes it impossible to build system libraries as was the case for the
    <a href="https://kx.studio/Repositories:Extras">"Extras" repository</a>.<br/>
    Without such packages it becomes pointless, so the <b>"Extras" repository has been marked as deprecated and should no longer be used</b>.
</p>
<p>
    Somewhat related, the KXStudio "Music" sub-repository served no real use in the end.<br/>
    And since now seems to be the time for cleanup and breakage, this one was marked as deprecated too.
</p>
<p>
    Such deprecations make <b>apt</b> very unhappy, and it will begin complaining something like this:<br/>
</p>
<pre>
E: Repository 'http://ppa.launchpad.net/kxstudio-debian/music/ubuntu bionic InRelease' changed its 'Label' value from 'Music' to 'Deprecated'
N: This must be accepted explicitly before updates for this repository can be applied. See apt-secure(8) manpage for details.
</pre>
<p>
    Just cleanup the apt list cache and the errors go away, like this:<br/>
</p>
<p>
    <code>
    &nbsp;sudo rm -f /var/lib/apt/lists/*
    </code>
</p>
<p>
    If you were using the "Extras" repository and now have issues because JACK can not be installed or updated,
    you will need to revert it to the version from your official distribution repositories.<br/>
    Run this to fix it, replacing "focal" by the linux distribution version label that applies to your case:<br/>
</p>
<p>
    <code>
    &nbsp;sudo apt-get update<br/>
    &nbsp;sudo apt-get install libjack-jackd2-0/focal libjack-jackd2-0:i386/focal jackd2/focal
    </code>
</p>

<h3>Final notes</h3>

<p>
    I realize this will make a few people sad, if the i386 builds were something you were relying on.<br/>
    It pains me too, as this kinda encourages throwing away old usable hardware that cannot do 64bit.<br/>
    Moving away from Debian base is not something I want to do at this point, but keeping 18.04 as base is not sustainable, as builds for it will soon stop working.<br/>
    And doing full custom repositories is a massive endeavour, something I don't have the time and resources (or patience) for.<br/>
    In the end, I am grateful to still be able to push new builds.
</p>
<p>
    Speaking of new builds, those will still take a bit to appear, as I have decided to do things a bit better this time.<br/>
    Using Ubuntu 20.04 as base allows to update the "debian format" to 13 which simplifies the builds, all packages are being converted one by one.<br/>
    Also, I am uploading all
    <a href="https://github.com/KXStudio/Repository/tree/master/sources" class="external free" rel="nofollow" target="_blank">debian source details on a public git repo</a>,
    as a backup/precaution measure and also to more easily allow others to see how packages in the KXStudio repositories are done.<br/>
    I do not really expect contributions that way, but more transparency is always nice.<br/>
</p>
<p>
    Based on previous work done for
    <a href="https://github.com/DISTRHO/DPF-Plugins/blob/289bd3e0af17aea5849ebafa28ed1c609db68369/.github/workflows/build.yml#L358" class="external free" rel="nofollow" target="_blank">continous-testing in Carla and DPF</a>,
    I want to setup similar runtime tests for all plugins before they get pushed into the repositories.<br/>
    Compared to just a few years ago, testing plugins is now much easier,
    with Carla having a dedicated command-line test mode,
    <a href="https://lv2plug.in/pages/validating-lv2-data.html" class="external free" rel="nofollow" target="_blank">LV2 validation tools</a>
    becoming better and even
    <a href="https://open-music-kontrollers.ch/lv2/lv2lint/#" class="external free" rel="nofollow" target="_blank">lv2lint</a>
    that performs runtime tests.
</p>
<p>
    I still want to finalize a few things in
    <a href="https://github.com/DISTRHO/Cardinal" class="external free" rel="nofollow" target="_blank">Cardinal</a>
    before going full-force on the repositories, but that side is almost done now, so very soon my attention can go back to packaging.<br/>
    Good times ahead!
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Carla 2.4.3 has been released</span><br/>
    On <i>2022-02-19</i> by<i> falkTX</i>
</p>

<p>
    This is a small bugfix release for the Carla v2.4 series.
</p>
<p>
    <img src="/screenshots/carla.png" alt="carla"/>
</p>
<p>
    <a href="https://kx.studio/carla" class="external free" rel="nofollow" target="_blank">Carla</a>
    is an audio plugin host, with support for many audio drivers and plugin formats.<br/>
    It has some nice features like automation of parameters via MIDI CC (and send output back as MIDI too) and full OSC control.<br/>
</p>
<h3>Fixes</h3>
<ul>
    <li>Fix build for Alpine Linux and BSD</li>
    <li>Fix integration with internal Qt toolbar visibility state</li>
    <li>Fix plugin search (regression from 2.4.2)</li>
    <li>Fix several Windows UTF-16 issues</li>
</ul>

<h3>Build related changes</h3>
<ul>
    <li>Add -fno-gnu-unique to default build flags</li>
    <li>Implement VERBOSE make flag</li>
    <li>Make build compatible with LTO, now enabled on official macOS/Windows binaries</li>
    <li>Replace CARLA_EXPORT macro with separate API / PLUGIN export options</li>
    <li>Set new X-NSM-Exec desktop file property</li>
</ul>

<h3>Downloads</h3>
<p>
    To download Carla binaries or source code, jump on over to the <a href="https://kx.studio/Downloads" class="external free" rel="nofollow" target="_blank">KXStudio downloads section</a>.<br/>
    If you're using the KXStudio repositories, you can simply install "carla".<br/>
    Bug reports and feature requests are welcome! Jump on over to the <a href="https://github.com/falkTX/Carla" class="external free" rel="nofollow" target="_blank">Carla's Github project</a> page for those.
</p>

<h3>Notes for users</h3>
<p>
    This was already the case for v2.2 and v2.3 but it is worth reiterating:<br/>
    When using JACK2, the canvas - plugin integrations requires at least JACK2 v1.9.13.<br/>
    This is because Carla relies on JACK meta-data in order to store information about each plugin/client,
    and meta-data was only added to JACK2 in version 1.9.13.<br/>
    Alternatively, you can use JACK1 instead of JACK2, which has meta-data support since a long time.
</p>
<p>
    Also there are still no official Linux binary builds for v2.4.3.<br/>
    Carla v2.4.3 is provided in the KXStudio repositories and in many official Linux distribution repositories anyway.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Cardinal 22.04 released</span><br/>
    On <i>2022-04-04</i> by<i> falkTX</i>
</p>
<p>
    Hello everyone, yet another release of <a href="https://github.com/DISTRHO/Cardinal" target="_blank">Cardinal</a> is here,
    this time focused on bugfixes.<br/>
    <a href="https://github.com/DISTRHO/Cardinal" target="_blank">Cardinal</a>
    is a free and open-source virtual modular synthesizer plugin.<br/>
    It is based on the popular <a href="https://github.com/VCVRack/Rack/" target="_blank">VCV Rack</a>
    but with a focus on being a fully self-contained plugin version.
</p>
<p>
    <img src="/repo/screenshots/cardinal.png" alt="cardinal"/>
</p>
<p>
    Changelog:
</p>
<ul>
    <li>Add Interverb demo patch (in source code)</li>
    <li>Add retrigger to Host-MIDI</li>
    <li>Do not show resize handle on JACK Standalone</li>
    <li>Fix and enable ChowDSP Credit module</li>
    <li>Fix potential noise burts on load with ihtsyn MVerb-based modules</li>
    <li>Fix messed up graphics on Windows with High-DPI screens</li>
    <li>Fix resources not found on some Windows systems (by not relying on environment variables)</li>
    <li>Fix several Windows UTF-16 issues</li>
    <li>Fix X11 file dialogs not appearing on some systems (auto-activate needed DBus portal)</li>
    <li>Fix VST3 state under some hosts</li>
    <li>Make JACK Standalone more useful on Windows (log to console when possible, show error dialog if JACK not running)</li>
    <li>Optimizations to core modules and headless build</li>
    <li>Refresh default template, add FX and Synth specific template variants</li>
    <li>Tweak Host-MIDI default parameters</li>
</ul>

<h3>Downloads</h3>
<p>
    The source code plus Linux, macOS and Windows binaries can be downloaded at
      <a href="https://github.com/DISTRHO/Cardinal/releases/tag/22.04" target="_blank">
          https://github.com/DISTRHO/Cardinal/releases/tag/22.04</a>.<br/>
    Cardinal is released as LV2, VST2 and VST3 plugin, plus AudioUnit and JACK standalone for certain systems.<br/>
    The VST3 version is still considered experimental, prefer to use LV2 or VST2 if possible at this time.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Cardinal 22.03 released</span><br/>
    On <i>2022-03-21</i> by<i> falkTX</i>
</p>
<p>
    Hello everyone, a new release of Cardinal is here.<br/>
    This brings quite a few new extra modules, updates the existing ones and adds a few nice features as requested by users.<br/>
    This is what changed compared to the (initial) 22.02 release:
</p>
<ul>
    <li>Add Windows installer, shipping with optional Carla Plugin Host integration and JACK Standalone</li>
    <li>Add AudioUnit plugin format for macOS</li>
    <li>Fix build for HaikuOS (only headless possible for now)</li>
    <li>Fix crash in headless build when loading certain modules</li>
    <li>Fix GUI resize in high-dpi systems</li>
    <li>Fix Host MIDI-CC channel pressure and pitchbend interfering with CCs</li>
    <li>Fix repaints in macOS, allow to set update rate limit (only works in some hosts)</li>
    <li>Fix VST2 keyboard input always in uppercase in some hosts</li>
    <li>Force 32bit alignment for vectorized operations, fixes 32bit build</li>
    <li>Initial bypass implementation, MIDI only for now</li>
    <li>Make host audio meters independent from each other</li>
    <li>Merge CardinalFX and CardinalSynth VST2 folders as single Cardinal.vst</li>
    <li>Update VCV Rack base to v2.1</li>
</ul>

<h3>New modules</h3>
<p>
    There's quite a few modules in this release, below follows a link to each project.<br/>
    Same as in the previous release, all modules were checked for compatibility with GPLv3+ license.
    More details <a href="https://github.com/DISTRHO/Cardinal/blob/main/docs/LICENSES.md" target="_blank">here</a>.
</p>
<ul>
    <a href="https://github.com/8Mode/8Mode-VCV_Modules" target="_blank"><li>8Mode</a></li>
    <a href="https://github.com/aaronstatic/AaronStatic_modules" target="_blank"><li>Aaron Static</a></li>
    <a href="https://github.com/algoritmarte/AlgoritmarteVCVPlugin" target="_blank"><li>AlgoritmArte</a></li>
    <a href="https://github.com/AnimatedCircuits/RackModules" target="_blank"><li>Animated Circuits</a></li>
    <a href="https://github.com/CardinalModules/ArableInstruments" target="_blank"><li>Arable Instruments</a></li>
    <a href="https://github.com/kauewerner/Axioma" target="_blank"><li>Axioma</a></li>
    <a href="https://github.com/VCVRack/Befaco" target="_blank"><li>Befaco</a></li>
    <a href="https://github.com/catronomix/catro-modulo" target="_blank"><li>Catro/Modulo</a></li>
    <a href="https://github.com/jensschulze/GoodSheperd" target="_blank"><li>GoodSheperd</a></li>
    <a href="https://gitlab.com/hampton-harmonics/hampton-harmonics-modules" target="_blank"><li>Hampton Harmonics</a></li>
    <a href="https://github.com/janne808/kocmoc-rack-modules" target="_blank"><li>kocmoc</a></li>
    <a href="https://github.com/grough/lilac-loop-vcv" target="_blank"><li>Lilac Loop</a></li>
    <a href="https://github.com/martin-lueders/ML_modules" target="_blank"><li>ML Modules</a></li>
    <a href="https://github.com/MockbaTheBorg/MockbaModular" target="_blank"><li>Mockba Modular</a></li>
    <a href="https://github.com/netboy3/MSM-vcvrack-plugin" target="_blank"><li>MSM</a></li>
    <a href="https://github.com/mhetrick/nonlinearcircuits" target="_blank"><li>Nonlinear Circuits</a></li>
    <a href="https://github.com/RareBreeds/Orbits" target="_blank"><li>Orbits</a></li>
    <a href="https://github.com/CardinalModules/ArableInstruments" target="_blank"><li>Parable Instruments</a></li>
    <a href="https://github.com/patheros/PathSetModules" target="_blank"><li>Path Set</a></li>
    <a href="https://github.com/aptrn/stocaudio-modules" target="_blank"><li>stocaudio</a></li>
    <a href="https://github.com/clone45/voxglitch" target="_blank"><li>Voxglitch</a></li>
</ul>

<h3>Downloads</h3>
<p>
    The source code plus Linux, macOS and Windows binaries can be downloaded at
      <a href="https://github.com/DISTRHO/Cardinal/releases/tag/22.03" target="_blank">
          https://github.com/DISTRHO/Cardinal/releases/tag/22.03</a>.<br/>
    Cardinal is released as LV2, VST2 and VST3 plugin, plus AudioUnit and JACK standalone for certain systems.<br/>
    The VST3 version is still considered experimental, prefer to use LV2 or VST2 if possible at this time.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Ildaeil v1.0 released</span><br/>
    On <i>2022-02-21</i> by<i> falkTX</i>
</p>
<p>
    Hello everyone, another release is here, this time it is
    <a href="https://github.com/DISTRHO/Ildaeil" target="_blank">Ildaeil</a>.<br/>
    Something that was initially done as a test for
    <a href="https://github.com/falkTX/Carla" target="_blank">Carla</a>
    and
    <a href="https://github.com/ocornut/imgui" target="_blank">ImGui</a>
    usage within
    <a href="https://github.com/DISTRHO/DPF" target="_blank">DPF</a>,
    but turns out to be actually quite useful!<br/>
    To those that are not up to date on KXStudio developments, let's recap this little new project...<br/>
</p>
<p>
    <img src="/repo/screenshots/ildaeil.png" alt="ildaeil"/>
</p>
<p>
    <a href="https://github.com/DISTRHO/Ildaeil" target="_blank"><b>Ildaeil</b></a>
    is mini-plugin host working as a plugin allowing one-to-one plugin format reusage.<br/>
    The idea is to load it as a plugin inside your DAW and then the other "real" plugin inside Ildaeil.<br/>
    This allows, for example, a VST3 host to load LV2 plugins.
</p>
<p>
    For the more technically-minded people, this is basically a combination of
    <a href="https://github.com/falkTX/Carla" target="_blank">Carla</a>,
    <a href="https://github.com/DISTRHO/DPF" target="_blank">DPF</a>
    and
    <a href="https://github.com/DISTRHO/DPF-Widgets" target="_blank">DPF-Widgets</a>.<br/>
    There is some small code of its own for handling the drawing of the plugin list, generic GUI and offset the embed GUIs,
    but everything else is done by these other projects.<br/>
    Nothing that Ildaeil does is special, that Carla can't do, but using Carla means always having to deal with an extra window.<br/>
    When wanting to load a single LV2 plugin on a non-LV2 supported host for example, this becomes quite cumbersome.<br/>
    With a little bit of glue code to tie up Carla, DPF and a little GUI, this project becomes possible.
</p>

<h3>Example</h3>
<p>
    Here is an example, loading the LV2-specific plugin
    <a href="https://github.com/Dougal-s/Aether" target="_blank">Aether</a>
    inside
    <a href="https://www.renoise.com/" target="_blank">Renoise</a>, which does not support LV2 plugins.
</p>
<p>
    <img src="/screenshots/news/ildaeil-renoise-aether.png" alt="ildaeil-renoise-aether"/>
</p>
<p>
    You can see more of these screenshots
    <a href="https://github.com/DISTRHO/Ildaeil/tree/v1.0#screenshots" target="_blank">here</a>.
</p>

<h3>Details</h3>
<p>
    The Ildaeil name comes from the korean 일대일, which means "one to one".<br/>
    It is one plugin exposed to the host (Ildaeil itself) and one plugin loaded inside Ildaeil.
</p>
<p>
    When open, Ildaeil will show a list of plugins to pick from or the plugin editor if one is already selected.<br/>
    If the plugin provides an embedable UI, Ildaeil show will that by default, otherwise it shows a generic parameter list.<br/>
    Toggling between generic vs custom/embed view is possible.<br/>
    In the case of a plugin providing a custom UI that is not embedable, Ildaeil will show the generic view by default.<br/>
    You can press "Show Custom GUI" to open the plugin UI in an external window.<br/>
</p>

<p>
    For version 1.0, this is what we have:
</p>
<ul>
    <li>Available as JACK/Standalone, LV2, VST2 and VST3 (with VST3 being experimental)</li>
    <li>Can load internal (from Carla) and LV2 plugins</li>
    <li>Comes in Synth, FX and MIDI variants</li>
    <li>LV2 plugins can run in-process or bridged</li>
    <li>Works on macOS, Windows and Linux/X11 systems</li>
</ul>

<p>
    And these are the current limitations:
</p>
<ul>
    <li>Plugin parameters are not exposed to the host</li>
    <li>UI is not resizable by the host</li>
</ul>
<p>
    Later on, in theory, it should be able to load the other plugin formats supported by Carla
    (that being LADSPA, DSSI, VST2, VST3 and AU).<br/>
    There are some technical limitations that prevent this from happening right now,
    Carla will need some backend changes before this can happen.
</p>
<p>
    Note that exposing the parameters to the host is not in the immediate plans.
</p>

<h3>Downloads</h3>
<p>
    There are pre-compiled binaries for Linux, macOS and Windows which can downloaded at
      <a href="https://github.com/DISTRHO/Ildaeil/releases/tag/v1.0" target="_blank">
          https://github.com/DISTRHO/Ildaeil/releases/tag/v1.0</a>.<br/>
    You can also find it in the KXStudio repositories as <b>ildaeil</b> package.<br/>
</p>
<p>
    Have fun!
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Carla 2.4.2 has been released</span><br/>
    On <i>2022-02-19</i> by<i> falkTX</i>
</p>

<p>
    This is a bugfix release for Carla version v2.4 series, with some extra user-experience related changes.
</p>
<p>
    <img src="/screenshots/carla.png" alt="carla"/>
</p>
<p>
    <a href="https://kx.studio/carla" class="external free" rel="nofollow" target="_blank">Carla</a>
    is an audio plugin host, with support for many audio drivers and plugin formats.<br/>
    It has some nice features like automation of parameters via MIDI CC (and send output back as MIDI too) and full OSC control.<br/>
</p>
<h3>Fixes</h3>
<ul>
    <li>Fix a few crashes with JACK applications inside Carla</li>
    <li>Fix build on non-supported systems by JUCE</li>
    <li>Fix crash when LV2 X11 UI has non-mapped child window</li>
    <li>Fix compatibility with Python 3.10</li>
    <li>Fix default SF2/3 path</li>
    <li>Fix LV2 UI resizing on macOS</li>
    <li>Fix missing VST3 plugins not being searched recursively</li>
    <li>Disable GraphicsScene indexing method to prevent crashes</li>
    <li>Ensure custom data state save and restore always match</li>
</ul>

<h3>Changes</h3>
<ul>
    <li>Add "[carla]" prefix to printed messages</li>
    <li>Add appdata metadata information</li>
    <li>Add notice when Carla needs to be restarted after an LV2 rescan</li>
    <li>Add VST3 Windows common files to the default path (required by the latest VST3 spec)</li>
    <li>Default to JACK backend if pipewire-jack replacement is installed</li>
    <li>Implement dry/wet, volume and balance on JUCE hosted plugins</li>
    <li>Reload audio file if sample rate changes</li>
    <li>Use temporary files for big custom data values in bridges</li>
</ul>

<h3>Changes for using Carla as library</h3>
<ul>
    <li>Add 8 CV, 32 IO and 64 IO CarlaPatchbay variants</li>
    <li>Add audio port hints to backend, starting with lv2 sidechain</li>
    <li>Add static plugin build target</li>
    <li>Add WITH_LTO build option, disabled by default</li>
    <li>Allow setting a custom C++ namespace</li>
    <li>More work on experimental embed plugin UIs, now also possible on plugin bridges</li>
</ul>

<h3>Downloads</h3>
<p>
    To download Carla binaries or source code, jump on over to the <a href="https://kx.studio/Downloads" class="external free" rel="nofollow" target="_blank">KXStudio downloads section</a>.<br/>
    If you're using the KXStudio repositories, you can simply install "carla".<br/>
    Bug reports and feature requests are welcome! Jump on over to the <a href="https://github.com/falkTX/Carla" class="external free" rel="nofollow" target="_blank">Carla's Github project</a> page for those.
</p>

<h3>Notes for users</h3>
<p>
    This was already the case for v2.2 and v2.3 but it is worth reiterating:<br/>
    When using JACK2, the canvas - plugin integrations requires at least JACK2 v1.9.13.<br/>
    This is because Carla relies on JACK meta-data in order to store information about each plugin/client,
    and meta-data was only added to JACK2 in version 1.9.13.<br/>
    Alternatively, you can use JACK1 instead of JACK2, which has meta-data support since a long time.
</p>
<p>
    Also there are still no official Linux binary builds for v2.4.2.<br/>
    Carla v2.4.2 is provided in the KXStudio repositories and in many official Linux distribution repositories anyway.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; WineASIO v1.1.0 released</span><br/>
    On <i>2022-02-18</i> by<i> falkTX</i>
</p>
<p>
    Hello everyone, a new release of WineASIO is here.<br/>
    This is mostly for Wine >= 6.5 compatibility, and a few small fixes here and there.<br/>
    Check the <a href="https://github.com/wineasio/wineasio/commits/master" target="_blank">git log</a> for the precise changes.
</p>
<p>
    Details are explained in the <a href="https://github.com/wineasio/wineasio/tree/master#wine--65" target="_blank">README file</a>,
    but in short we now need to build an extra fake dll and use full paths when calling <b><code>regsvr32</code></b>.<br/>
    Where we previously needed:<br/>
    <b><code>wine64 regsvr32 wineasio.dll</code></b>
    <br/>
    Now we require the full path, on Ubuntu for example it is:<br/>
    <b><code>wine64 regsvr32 /usr/lib/x86_64-linux-gnu/wine/x86_64-windows/wineasio.dll</code></b>
</p>
<p>
    As was the case with v1.0.0, there are no pre-compiled binaries for WineASIO, though it is available as a package in the KXStudio repositories.<br/>
    You can find this v1.1.0 release at <a href="https://github.com/wineasio/wineasio/releases/tag/v1.1.0" target="_blank">github.com/wineasio/wineasio</a>.
</p>
<p>
    Small warning: WineASIO is not compatible with PipeWire.<br/>
    This is
    <a href="https://gitlab.freedesktop.org/pipewire/pipewire/-/issues/1495" target="_blank">under investigation</a>,
    it is not known at this point why it does not work for PipeWire's JACK implementation.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Cardinal 22.02 is now released</span><br/>
    On <i>2022-02-14</i> by<i> falkTX</i>
</p>
<p>
    It is finally here, the first release of <a href="https://github.com/DISTRHO/Cardinal" target="_blank">Cardinal</a>.<br/>
    Has been slowly brewing behind the scenes, and now ready for the masses.<br/>
    First, some introductions...
</p>
<p>
    <img src="/repo/screenshots/cardinal.png" alt="cardinal"/>
</p>
<p>
    <a href="https://github.com/DISTRHO/Cardinal" target="_blank">Cardinal</a>
    is a free and open-source virtual modular synthesizer plugin.<br/>
    It is based on the popular <a href="https://github.com/VCVRack/Rack/" target="_blank">VCV Rack</a>
    but with a focus on being a fully self-contained plugin version.
</p>
<p>
    Cardinal was created first and foremost as a way to have Rack as a proper open-source audio plugin.<br/>
    A proper audio plugin should be self-contained as much as possible, as to not interfere with the DAW/Host. Loading external modules clearly goes against this idea.<br/>
    Not to mention being <b>open-source</b>, otherwise we are at the mercy of the wishes of a company for what we can and cannot do, which is not that great...<br/>
    (in case you were not aware, VCV's Rack plugin version, called "Rack Pro", is a commercial closed-source product)
</p>
<p>
    It needs to be said that Cardinal project and its authors do not wish anything bad to the original/official Rack project.<br/>
    In fact, Cardinal wouldn't exist if not for Rack v2 release. (which has many needed things to make a plugin version work)<br/>

    Cardinal and Rack should be able to co-exist friendly and peacefully, as they clearly have different targets.<br/>
    It is likely most people will prefer to use Rack Pro for its official support and its big module collection (including commercial ones).<br/>

    A feature comparison between Cardinal and Rack Pro can be seen
    <a href="https://github.com/DISTRHO/Cardinal/blob/main/docs/DIFFERENCES.md" target="_blank">here</a>.
</p>
<p>
    With that out of the way, let's go through a quick overview.
</p>

<h3>Plugin variants</h3>
<p>
    Cardinal provides 3 plugin variants - <b>Main</b>, <b>Synth</b> and <b>FX</b>.<br/>
    They are all equivalent in performance and behaviour, with only the IO and metadata that changes.<br/>
    This is because some hosts are very strict on which plugins are allowed as instruments vs FX, so separate variants of the same plugin are needed.<br/>
</p>
<p>
    <b>FX</b> and <b>Synth</b> variants both have 2 audio outputs, while <b>Main</b> has 8.<br/>
    All variants have MIDI input and output support.
</p>
<p>
    <b>Main</b> provides 8 audio inputs and outputs and 10 CV inputs and outputs.<br/>
    Note that due to VST2 format not supporting CV ports, this variant is not available for VST2.
</p>
<p>
    <b>Synth</b> provides 2 audio outputs but no audio inputs or CV ports.<br/>
    Plugin type is set as "instrument".
</p>
<p>
    And finally <b>FX</b> provides 2 audio inputs and outputs, but no CV ports.<br/>
    Plugin type is set as regular "effect".
</p>

<h3>Included modules</h3>
<p>
    At the moment the following 3rd-party modules are provided:
</p>
<ul>
    <a href="https://github.com/netboy3/21kHz-rack-plugins" target="_blank"><li>21kHz</a></li>
    <a href="https://github.com/jhoar/AmalgamatedHarmonics" target="_blank"><li>Amalgamated Harmonics</a></li>
    <a href="https://github.com/AriaSalvatrice/AriaModules" target="_blank"><li>Aria Salvatrice</a></li>
    <a href="https://github.com/VCVRack/AudibleInstruments" target="_blank"><li>Audible Instruments</a></li>
    <a href="https://github.com/NikolaiVChr/Autinn" target="_blank"><li>Autinn</a></li>
    <a href="https://github.com/baconpaul/BaconPlugs" target="_blank"><li>Bacon Music</a></li>
    <a href="https://github.com/sebastien-bouffier/Bidoo" target="_blank"><li>Bidoo</a></li>
    <a href="https://github.com/bogaudio/BogaudioModules" target="_blank"><li>Bogaudio</a></li>
    <a href="https://github.com/cfoulc/cf" target="_blank"><li>cf</a></li>
    <a href="https://github.com/jatinchowdhury18/ChowDSP-VCV/" target="_blank"><li>ChowDSP</a></li>
    <a href="https://github.com/SVModular/DrumKit/" target="_blank"><li>DrumKit</a></li>
    <a href="https://github.com/VCVRack/ESeries" target="_blank"><li>E-Series</a></li>
    <a href="https://github.com/expertsleepersltd/vcvrack-encoders" target="_blank"><li>ExpertSleepers Encoders</a></li>
    <a href="https://github.com/EaterOfSheep/Extratone" target="_blank"><li>Extratone</a></li>
    <a href="https://github.com/RCameron93/FehlerFabrik" target="_blank"><li>Fehler Fabrik</a></li>
    <a href="https://github.com/gluethegiant/gtg-rack" target="_blank"><li>Glue the Giant</a></li>
    <a href="https://github.com/dbgrande/GrandeModular" target="_blank"><li>Grande</a></li>
    <a href="https://github.com/mhetrick/hetrickcv" target="_blank"><li>HetrickCV</a></li>
    <a href="https://github.com/nysthi/ihtsyn" target="_blank"><li>ihtsyn</a></li>
    <a href="https://github.com/MarcBoule/ImpromptuModular" target="_blank"><li>Impromptu</a></li>
    <a href="https://github.com/jeremywen/JW-Modules/" target="_blank"><li>JW-Modules</a></li>
    <a href="https://github.com/SteveRussell33/LifeFormModular" target="_blank"><li>LifeFormModular</a></li>
    <a href="https://github.com/mgunyho/Little-Utils" target="_blank"><li>Little Utils</a></li>
    <a href="https://github.com/LomasModules/LomasModules" target="_blank"><li>Lomas Modules</a></li>
    <a href="https://github.com/VegaDeftwing/LyraeModules" target="_blank"><li>Lyrae Modules</a></li>
    <a href="https://github.com/MarcBoule/MindMeldModular" target="_blank"><li>MindMeld</a></li>
    <a href="https://github.com/JustMog/Mog-VCV" target="_blank"><li>Mog</a></li>
    <a href="https://github.com/mschack/VCV-Rack-Plugins" target="_blank"><li>mscHack</a></li>
    <a href="https://github.com/SteveRussell33/Prism" target="_blank"><li>Prism</a></li>
    <a href="https://github.com/n0jo/rackwindows" target="_blank"><li>rackwindows</a></li>
    <a href="https://github.com/SteveRussell33/repelzen" target="_blank"><li>repelzen</a></li>
    <a href="https://gitlab.com/sonusdept/sonusmodular" target="_blank"><li>Sonus Modular</a></li>
    <a href="https://github.com/ValleyAudio/ValleyRackFree" target="_blank"><li>Valley</a></li>
    <a href="https://github.com/mhampton/ZetaCarinaeModules" target="_blank"><li>ZetaCarinae</a></li>
    <a href="https://github.com/zezic/ZZC" target="_blank"><li>ZZC</a></li>
</ul>
<p>
    Additionally Cardinal
    <a href="https://github.com/DISTRHO/Cardinal/blob/main/docs/CARDINAL-MODULES.md" target="_blank">provides its own modules</a>
     for DAW/Host automation, time position and internal plugin hosting.
</p>

<h3>Current status and future plans</h3>
<p>
    With the exception of a few bugs, Cardinal can be considered stable.<br/>
    Though currently the following should be noted:
</p>
<ul>
    <li>Keyboard input does not always work in some hosts <a href="https://github.com/DISTRHO/Cardinal/issues/24" target="_blank">#24</a></li>
    <li>VST3 support incomplete/experimental <a href="https://github.com/DISTRHO/Cardinal/issues/41" target="_blank">#41</a></li>
    <li>Windows 32bit builds do not work well <a href="https://github.com/DISTRHO/Cardinal/issues/80" target="_blank">#80</a></li>
</ul>
<p>
    A parameter expander module was not ready on time for this release, but will come soon in a future release.<br/>
    <a href="https://github.com/VCVRack/Fundamental" target="_blank">Fundamental</a>
    is on a similar situation, there are some artwork license issues that prevent us from using Fundamental exactly as we want.<br/>
    We plan to redo Fundamental's panel graphics in a more liberal license, so it then can be included in Cardinal.
</p>
<p>
    There are a few modules we want to add, but they are being evaluated carefully as going forward anything we add in Cardinal needs to remain there forever, for backwards compatibility.<br/>
    They must also have a GPLv3+ compatible license, which not all of them do.<br/>
    Not to mention a clear artwork/graphics license... it is amazing how many of these projects do not care or understand about software licenses :(<br/>
    Overall it makes packaging quite difficult, so it is natural that new modules are not added as fast as we wished for.
</p>
<p>
    Something I hope to try soon is an alternative way to handle MIDI to CV conversion, as I don't like the way Rack does it at the moment.<br/>
    The current Cardinal "core" modules follow the same exact approach as the official Rack, to make the transition easier,
    but some kind of "MIDI v2" modules will be done eventually.
</p>

<h3>Contributing</h3>
<p>
    If you like the project and want to help out, there are basic building instructions
    <a href="https://github.com/DISTRHO/Cardinal/blob/main/docs/BUILDING.md" target="_blank">here</a>,<br/>
    And an overview of the source code is available
    <a href="https://github.com/DISTRHO/Cardinal/blob/main/docs/OVERVIEW.md" target="_blank">here</a>.<br/>
</p>
<p>
    Currently we are all on <b>#cardinal</b> IRC room in irc.libera.chat server.<br/>
    Come join us in your favorite IRC client or through a Matrix bridge.
</p>
<p>
    Installing new modules on an existing Cardinal binary is not possible at run-time, but we can add new modules to the build.<br/>
    Details on this are available
    <a href="https://github.com/DISTRHO/Cardinal/discussions/28" target="_blank">here</a>.<br/>
    Also check
    <a href="https://github.com/DISTRHO/Cardinal/wiki/Possible-modules-to-include" target="_blank">this wiki page</a>
    where we discuss possible modules to include.
</p>

<h3>Installing and using</h3>
<p>
    Install instructions are available on
    <a href="https://github.com/DISTRHO/Cardinal/wiki/Install" target="_blank">this wiki page</a>.<br/>
    If you are using the KXStudio repositories you can simply install <b>cardinal-lv2</b>, <b>cardinal-vst2</b> or <b>cardinal-vst3</b> packages as usual.<br/>
    Consult the wiki page linked above for details on other distributions, or otherwise use the prebuilt binaries on the
    <a href="https://github.com/DISTRHO/Cardinal/releases" target="_blank">Cardinal releases</a> page.
</p>
<p>
    There is no Cardinal official media content as of yet,
    but if you are looking for tutorials just look for "VCV Rack" stuff which pretty much applies to Cardinal unchanged.<br/>
    Some modules will appear slightly different, or not be available, but the overall idea on how to use it is the same.
</p>
<p>
    A few CC-0 / public domain Cardinal patches are present
    <a href="https://github.com/DISTRHO/Cardinal/tree/main/patches" target="_blank">directly in the source code</a>.<br/>
    You can use those as your starting point, they are fully free to do what you want with.
</p>
<p>
    And that is it, go download, install and have fun!<br/>
    If you find an issue or want to request a potentially useful feature, please use the
    <a href="https://github.com/DISTRHO/Cardinal/issues" target="_blank">Cardinal issue tracker</a>.<br/>
    And happy Valentine's day too. \o/
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; DPF-Plugins v1.5 released</span><br/>
    On <i>2022-01-16</i> by<i> falkTX</i>
</p>
<p>
    Hello everyone, a new release of DPF-Plugins is here.<br/>
    DPF-Plugins is a collection of DPF-based plugins, including Kars, MVerb and Nekobi.<br/>
    This is mostly a bugfix release, keeping up with the cool kids for regular releases.<br/>
</p>
<p>
    Changelog:
</p>
<ul>
    <li>Initial experimental VST3 support</li>
    <li>Add bottom-right resize handle in glBars and ProM, needed in plugin formats that can't do host-side resizing<br/>
(ProM resize handle is invisible but still works, known issue)</li>
    <li>Some plugin GUIs can use Cairo instead of OpenGL, if OpenGL is not available at build time</li>
    <li>Standalones no longer require JACK, instead detecting at runtime if it is available</li>
    <li>Standalones will now use RtAudio for native audio device access in case JACK is not available</li>
    <li>ProM now ships with (optional) vendored libprojectM in case it is not available as system library</li>
    <li>ProM now sets up and uses OpenGL3 context instead of OpenGL2 forward compatibility mode, fixing usage on macOS and Windows</li>
    <li>Fix modal about dialogs</li>
    <li>Fix more High-DPI related issues</li>
    <li>Fix OpenGL context swap on GUI deletion, needed on hosts using OpenGL</li>
</ul>

<h3>Downloads</h3>
<p>
    The source code plus Linux, macOS and Windows binaries can be downloaded at
      <a href="https://github.com/DISTRHO/DPF-Plugins/releases/tag/v1.5" target="_blank">
          https://github.com/DISTRHO/DPF-Plugins/releases/tag/v1.5</a>.<br/>
    The plugins are released as LADSPA, DSSI, LV2, VST2, VST3 and JACK standalone.<br/>
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; KXStudio Monthly Report (November + December 2021)</span><br/>
    On <i>2021-12-31</i> by<i> falkTX</i>
</p>
<p>
    Hello all, this is yet another one of those monthly reports about the KXStudio project.<br/>
    But this time I also want to give a little overview of 2021 as a year.<br/>
    There was no November monthly report, due to me being busy with moving to a new place and a few other personal things.<br/>
    This month though there are a few things to report on.
</p>

<h3>DPF and VST3 work resumes</h3>
<p>
    After a little break on the VST3 implementation in DPF, I went back and
    <a href="https://github.com/DISTRHO/DPF/commit/2d916332ff773db629ef9211ac3b3a8a5a428ea0" target="_blank">reworked a few things</a>
    that were clearly done wrong.<br/>
    It is still considered experimental, but already works much better than before.<br/>
    For example, UI to DSP parameter changes works properly now, which was not the case before in some hosts (including reaper).
</p>
<p>
    Once complete, DPF based plugins will be one of the few that implement the whole component vs edit-controller separation.<br/>
    This might prove quite valuable in the future, specially after hosts also implement the same.<br/>
    We need to come back to this after I natively implement VST3 support in Carla.
</p>
<p>
    Just as before, I am keeping a TODO list of items
    <a href="https://github.com/DISTRHO/DPF/blob/develop/distrho/src/DistrhoPluginVST3.cpp#L39" target="_blank">near the top of the relevant source code</a>
    file for VST3. The same also
    <a href="https://github.com/DISTRHO/DPF/blob/develop/distrho/src/DistrhoUIVST3.cpp#L24" target="_blank">applies to the UI side</a>.<br/>
    The super short summary is that most common things already work, with only optional buses, MIDI CC handling and minor details missing.<br/>
    We don't get VST3 support finalized in DPF during 2021, but it shouldn't take that much longer now.
</p>

<h3>Continuing: Separating JACK tools from JACK1 and JACK2</h3>
<p>
    Mentioned last time was the effort of
    <a href="https://kx.studio/News/?action=view&url=kxstudio-monthly-report-october-2021" target="_blank">splitting the example-clients and tools</a>
    from the JACK repositories into a new repository/project.<br/>
    I have been working with David Runge on this (or better said,
    <a href="https://github.com/jackaudio/jack-example-tools/issues/9" target="_blank">he has been doing most of the work</a>)
    with me reviewing each set of changes to each file one by one.<br/>
    We are nearly finished, with only 1 file remaining.
</p>
<p>
    Afterwards there is still some work to be done on the build setup and testing the whole thing,
    but it is good to see things progressing on this area that was being sadly neglected for many years.<br/>
    If everything goes well, no one will notice a thing!<br/>
    Maintenance is a lot of work that goes unnoticed, fun stuff..
</p>

<h3>Python 3.10 and updated PyQt woes</h3>
<p>
    I do not know exactly the change that triggered it, but with newer versions of python and PyQt, pretty much all my tools that use PyQt are broken.<br/>
    The community was quite helpful on
    <a href="https://github.com/falkTX/Carla/pull/1550" target="_blank">fixing some Carla</a>
    <a href="https://github.com/falkTX/Carla/pull/1551" target="_blank">issues themselves</a>
    without my direct intervention (as I do not run a rolling-release Linux distribution, I am not directly affected).<br/>
    With this a new release of Carla is needed, the same for Cadence but that remains unfixed for the time being.
</p>

<h3>Cardinal, the Rack!</h3>
<p>
    A new project has been
    <a href="https://github.com/DISTRHO/Cardinal/issues/1" target="_blank">brewing behind the scenes</a>
    for more or less 3 months now.<br/>
    It was not in my plans when 2021 started, specially since quite a few other things needed more attention..<br/>
    But this was one of these things that is just impossible to put down as an idea.<br/>
    In fact, lack of attention in Carla and JACK lately are due to this project, it is simply too exciting.
</p>
<p>
    The quick history of the project is that, after
    <a href="https://vcvrack.com/" target="_blank">VCV Rack</a>
    <a href="https://github.com/VCVRack/Rack/tree/v2" target="_blank"> v2 source code was made public</a>,
    I began wondering if that codebase could be used for building an open-source plugin
    (unlike the official product, which is closed-source and commercial).<br/>
    After finding out that VCV's official plugin would only support VST2 and still only the same 3 base architectures (Linux, macOS and Windows 64bit),
    also how the whole thing would supposedly work - loading modules from the library just like in the standalone - 
    I was quite disappointed with the whole thing.<br/>
    Rack is something that always interested me, but I was put off from the (to put it mildly) abrasive attitude towards open-source ideas and Linux packaging.<br/>
    Running as standalone was also not that fun for me, I personally want to create synths and have those integrated in a DAW/sequencer workflow.
</p>
<p>
    There was a project called
    <a href="https://github.com/bsp2/VeeSeeVSTRack" target="_blank">VeeSeeVSTRack</a>
    that also attempted an open-source plugin version of Rack, but it had some serious drawbacks:
</p>
<ul>
    <li>Needs heavy changes to Rack source, which would have to be regularly maintained in order to keep up with upstream</li>
    <li>All included modules need to be patched a fair bit just to work with it</li>
    <li>Custom written plugin format support (so it only supported VST2)</li>
    <li>Custom written OS-level Window handling (only supporting Windows and Linux/X11)</li>
</ul>
<p>
    While the idea in general great, there was a not insignificant amount of work needed to maintain it.<br/>
    If attempting something like this, would be best to not make the same "mistakes", and think about the whole deal on the long term.<br/>
    With that in mind, the Cardinal project:
</p>
<ul>
    <li>Does not fork Rack's source code, instead it uses it as submodule, replacing only a few critical functions and files</li>
    <li>Besides internal modules, 3rd-party ones can be linked as-is with only changes to not use <i>osdialog</i> due to its event-blocking nature</li>
    <li>Relies on DPF for plugin format support, so we get JACK, LV2 and VST2 from the start, VST3 in progress</li>
    <li>Also relies on DPF for OS-level Window handling, so it works on macOS too (and eventually Haiku)</li>
</ul>
<p>
    Similar to VeeSeeVSTRack, Cardinal builds the entire module collection as part of one binary and uses the host audio thread to drive the engine.<br/>
    This means no online library access or external module loading, which is quite intentional.<br/>
    More information on the
    <a href="https://github.com/DISTRHO/Cardinal#why" target="_blank">"why" section of Cardinal's README</a>.
</p>
<p>
    The obvious question that might be in the air is what to make of the official Rack Pro plugin.<br/>
    To which I say - <b>if you enjoy Cardinal, go buy Rack Pro!</b><br/>
    Cardinal would not exist without VCV Rack, so it is for our best interest that Rack lives on for a long while.<br/>
    Also they serve different purposes:<br/>
    <b>Cardinal</b> is open-source modules only, all integrated into 1 binary.<br/>
    <b>Rack Pro</b> is just like the standalone with online library access, commercial modules etc. And obviously the official product too.<br/>
    The Cardinal project includes a
    <a href="https://github.com/DISTRHO/Cardinal/blob/main/doc/DIFFERENCES.md" target="_blank">table of differences between itself and Rack Pro</a>,
    in case you want to go deeper into technical details.
</p>
<p>
    Cardinal should be considered beta-state at the moment.<br/>
    While it already works quite well (except for a few known bugs as typical), there are a few missing pieces and license situation to sort out in detail.<br/>
    A lot of Rack module developers started coding because of it,
    so without fully understanding artwork and source code license implications quite a few of them just copied what others were doing.<br/>
    And this is the problem, Rack itself contains non-commercial and even non-derivatives clauses for its artwork.<br/>
    A lot of developers copied the non-commercial clause without thinking too much about it, which makes them quite tricky if not impossible to package in a Linux distribution.<br/>
    Before tagging v1.0, I want to sort out these details first, to ensure everything is done not only legally but also respectfully.<br/>
    Already started this on
    <a href="https://github.com/DISTRHO/Cardinal/blob/main/doc/LICENSES.md" target="_blank">this document</a>,
    which greatly helps in giving an overview of the used source code and artwork licenses.
</p>
<p>
    Before moving on, here's a screenshot, because everyone likes those. :)
</p>
<p>
    <img src="/screenshots/news/cardinal-2021-12.png" alt="cardinal"/>
</p>

<h3>Many other DPF additions</h3>
<p>
    While working on Cardinal, DPF got a real stress-test for some of its features.<br/>
    Some were missing and needed to be added in order to make Cardinal work proper, some were found to be broken.<br/>
    In no particular order, these changes were made in DPF to accommodate for Cardinal:
</p>
<ul>
    <li>Add clipboard (copy &amp; paste) support</li>
    <li>Add cursor support</li>
    <li>Add file dialog save support (used to be only loading allowed)</li>
    <li>Add "desktop portal" DBus service support for providing native file browser dialogs on Linux</li>
    <li>Add APIs around finding the bundle path of the plugin</li>
    <li>Allow LTO (Link-Time-Optimization) build</li>
    <li>Auto-creating macOS VST2 bundle from build step, instead of needing to run a script</li>
    <li>Many fixes around file browser dialog support</li>
    <li>Many fixes around VST2 keyboard input (WIP)</li>
</ul>
<p>
    The only missing feature at the moment is drag&amp;drop support, but that needs an implementation on pugl's side first.<br/>
    Once that side is done, I already have a plugin in which to test it the functionality, so it should be pretty quick.
</p>

<p>&nbsp;</p>

<p>
    And that is all for now.<br/>
    If you appreciate the kind of work I do, please
    <a href="https://kx.studio/Donations">consider a donation</a>.<br/>
    Thank you in advance for your support, happy holidays and a happy new year!<br/>
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; KXStudio Monthly Report (October 2021)</span><br/>
    On <i>2021-10-31</i> by<i> falkTX</i>
</p>
<p>
    Hello all, another one of those monthly reports about the KXStudio project is here.<br/>
    As you might have seen a few days ago we had
    <a href="https://kx.studio/News/?action=view&url=carla-241-has-been-released" target="_blank">v2.4.1 Carla release</a>.<br/>
    I was hoping to do a JACK2 release as well, but was busy with other things and did not have it ready on it. Next time then.
</p>

<h3>DPF + VST3 on pause</h3>
<p>
    While VST3 support in DPF has advanced enough to load already in quite a few hosts,
    I got personally annoyed with it after finding out the way I did the UI/DSP separation is just completely wrong. :(<br/>
    Working with the internals of VST3 has been quite frustrating, so just taking a little break from it.<br/>
    Currently still going with the target of finalizing VST3 support in DPF (at least in beta-like status) by the end of the year.
</p>
<p>
    I want to say, dealing with VST3 internals has made me appreciate LV2 even more.<br/>
    VST3 has some good design choices and ideas, but parts of it are also just awful and nonsensical.<br/>
    Hopefully after the initial implementation is done we do not have to change it much.
</p>

<h3>ImGui rendering issues fixed</h3>
<p>
    Last month I reported about
    <a href="https://github.com/ocornut/imgui" target="_blank">Dear ImGui</a>
    being integrated as a DPF widget, with only some high-dpi rendering issues remaining.<br/>
    Happy to report that this is finalized and tested to work on a couple of different configurations.<br/>
    I might do a quick plugin set from porting existing audio software to DPF, as a way to 100% verify ImGui in DPF.<br/>
    But for now Ildaeil (more on that below) has served as a nice test-case.
</p>

<h3>JSFX as plugin type in Carla</h3>
<p>
    Jean Pierre Cimalando has started work on adding
    <a href="https://www.reaper.fm/sdk/js/js.php" target="_blank">JSFX "plugin"</a> support
    for Carla.<br/>
    JSFX has nothing to do with JavaScript, but rather it originally comes from REAPER's extended audio processing capabilities.<br/>
    They have defined a format for writing audio plugins that can be written and compiled on the fly.<br/>
    This work from Jean is not yet complete, but great progress has already been made.<br/>
    It is likely to end up on the next Carla release.
</p>

<h3>A little new test-project: Ildaeil</h3>
<p>
    One crucial point for me accepting JSFX support in Carla was that it couldn't be limited to just Carla.<br/>
    But this support being added directly in Carla doesn't help with that.. or does it?
</p>
<p>
    Announcing <b>Ildaeil</b>! (sorta.. read on)<br/>
    In case you do not know,
    <a href="https://www.zrythm.org/en/" target="_blank">Zrythm</a>
    is using Carla as backend to deal with non-LV2 plugins.<br/>
    Some of the things it uses were never properly tested in Carla or any other software, making it hard to fix bugs.<br/>
    This combined with wanting JSFX on more hosts than just Carla and ImGui now fully working in DPF
    has given me enough motivation to try out a new project that would just combine everything into one.<br/>
    This project is called "Ildaeil".
</p>
<p>
    <a href="https://github.com/DISTRHO/Ildaeil" target="_blank">Ildaeil</a>
    is basically Carla as a minified plugin, where instead of running the full GUI you have a super minimal GUI and set of features.<br/>
    It uses DPF for the plugin-side (that is, to be an LV2, VST2 and VST3 plugin) and then Carla for the plugin hosting side.
    A bridge between the 2 worlds, basically.<br/>
    For now I made it so that it lists the available LV2 plugins on the system and allows to load 1 from the list, embedding its custom GUI if possible.
</p>

<p>
    <img src="/screenshots/news/ildaeil-2021-10.png" alt="ildaeil"/>
</p>

<p>
    This is not really an announcement because I have not yet decided the full scope of the project.<br/>
    There are a LOT of things it could do, but then it becomes quite the work to maintain.<br/>
    If you want to give it a try, feel free. But reports are welcome, feature requests are not (at this point).
</p>

<h3>Separating JACK tools from JACK1 and JACK2</h3>
<p>
    For a very long time I have been meaning to merge back the changes done in JACK examples and tools from JACK2 back to JACK1.<br/>
    Back in
    <a href="https://jackaudio.org/news/2020/10/15/jack2-v1915-release-and-current-status.html" target="_blank">JACK2 v1.9.15 release</a>
    I stated that help on this would be appreciated, but not much has happened since then.<br/>
    Now that PipeWire is slowly becoming a thing, this is becoming crucial.
</p>
<p>
    For distributions like Arch that do not typically split packages (hypothetically) installing pipewire-jack would remove jack2 and replace it with PipeWire's version.<br/>
    But the tools like <b>jack_connect</b>, <b>jack_wait</b>, etc are part of the jack2 package, not pipewire-jack.<br/>
    Installing pipewire-jack would (hypothetically) remove these tools.<br/>
    There are quite a few set ups out there that rely on them, so a solution is needed here.
</p>
<p>
    David Runge has started the effort of
    <a href="https://github.com/jackaudio/jack-example-tools" target="_blank">splitting these tools from the JACK repositories into a new one</a>.<br/>
    The idea is that JACK will no longer ship with them, and they become an extra set of tools to install separately.<br/>
    This allows to switch between JACK versions (JACK1, JACK2 or PipeWire) and keep the same exact set of tools.
</p>
<p>
    We will need to have new JACK1 and JACK2 versions that remove these tools before the new project can be officially tagged and released.<br/>
    More news on this soon.
</p>

<p>&nbsp;</p>

<p>
    That is all for now.<br/>
    There were a couple of other things done in DPF and a few other projects, but something I will cover in upcoming months.<br/>
    If you appreciate the kind of work I do, please
    <a href="https://kx.studio/Donations">consider a donation</a>.<br/>
    Thank you in advance for your support, and stay safe out there!<br/>
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Carla 2.4.1 has been released</span><br/>
    On <i>2021-10-15</i> by<i> falkTX</i>
</p>

<p>
    This is a bugfix for Carla version v2.4 series, bringing some improvements and fixing a few bugs.
</p>
<p>
    <a href="https://kx.studio/carla" class="external free" rel="nofollow" target="_blank">Carla</a>
    is an audio plugin host, with support for many audio drivers and plugin formats.<br/>
    It has some nice features like automation of parameters via MIDI CC (and send output back as MIDI too) and full OSC control.<br/>
</p>

<h3>Changelog</h3>
<ul>
    <li>Better handling of VST3 parameters (hide as needed, number of steps, etc)</li>
    <li>Fix compatibility with Python 3.10</li>
    <li>Fix getting the proper X11 UIs size for more plugins</li>
    <li>Fix plugin bridges not automatically closing if main Carla dies on macOS (similar to how it is done on Linux)</li>
    <li>Fix unused parameters preventing real ones from showing up in the edit plugin dialog</li>
    <li>Fix CarlaNativePlugin.h and CarlaPluginPtr.hpp header files not installed system-wide</li>
    <li>Fix XY-Controller GUI missing on "make install" target</li>
    <li>Fix VST2 plugins under macOS and High-DPI (by not reporting scale factor)</li>
    <li>Replace -lpthread usage with -pthread, fixing RISC-V builds</li>
    <li>Send keyboard and focus events as needed/possible to VST2 and VST3 UIs</li>
    <li>Small tweaks to XY-Controller (make lines 1px thick, close UI with Esc key)</li>
    <li>Special tweaks for static plugin target build (embeding carla statically in other applications/plugins)</li>
    <li>Other minor fixes and tweaks</li>
</ul>

<h3>Downloads</h3>
<p>
    To download Carla binaries or source code, jump on over to the <a href="https://kx.studio/Downloads" class="external free" rel="nofollow" target="_blank">KXStudio downloads section</a>.<br/>
    If you're using the KXStudio repositories, you can simply install "carla".<br/>
    Bug reports and feature requests are welcome! Jump on over to the <a href="https://github.com/falkTX/Carla" class="external free" rel="nofollow" target="_blank">Carla's Github project</a> page for those.
</p>

<h3>Notes for users</h3>
<p>
    This was already the case for v2.2 and v2.3 but it is worth reiterating:<br/>
    When using JACK2, the canvas - plugin integrations requires at least JACK2 v1.9.13.<br/>
    This is because Carla relies on JACK meta-data in order to store information about each plugin/client,
    and meta-data was only added to JACK2 in version 1.9.13.<br/>
    Alternatively, you can use JACK1 instead of JACK2, which has meta-data support since a long time.<br/>
    Note that the <a href="/Repositories:Extras">"extras" KXStudio repository</a> (which provides an updated JACK2) supports both Ubuntu 18.04 and 20.04.<br/>
    The UbuntuStudio backports PPA also provides updated JACK2 packages.
</p>
<p>
    There are no official Linux binary builds for v2.4.1 at this point.<br/>
    Carla v2.4.1 is provided in the KXStudio repositories and in many official Linux distribution repositories too anyway.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; KXStudio Monthly Report (September 2021)</span><br/>
    On <i>2021-09-30</i> by<i> falkTX</i>
</p>
<p>
    Hello all, it is time for yet another one of those monthly reports about the KXStudio project.<br/>
    In case you missed it last month, there are now dedicated
    <a href="https://kx.studio/Board" target="_blank">KXStudio Board</a>
    and
    <a href="https://kx.studio/Development" target="_blank">KXStudio Development</a>
    pages.<br/>
    These serve to give a quick overview of the work being planned and the one actively being done.<br/>
    Note that I typically remove stuff from the "done" column of the board a few days into the start of each month.
</p>

<h3>VST3 for DPF</h3>
<p>
    The first new thing worth mentioning is the substantial work for VST3 in
    <a target="_blank" href="https://github.com/DISTRHO/DPF">DPF</a>
    made this month.<br/>
    Though it is still in a state I consider alpha at the moment, everything that is crucial is implemented:
    from audio, midi, time position, parameters, programs, state, latency and gui.<br/>
    Not recommended to release anything based on this yet, as there are memory leaks and the GUI only works on Linux at the moment (and known to break REAPER due to not plugging into the host runloop yet).
</p>
<p>
    This VST3 implementation uses
    <a target="_blank" href="https://github.com/DISTRHO/DPF/tree/develop/distrho/src/travesty">custom C-compatible API headers</a>
    instead of the official SDK, so that we can have commercial plugins while not being tied to Steinberg and its restrictive licensing.<br/>
    There is a lot of boilerplate code to implement for stuff that the SDK typically does for you, and it is still pretty unclean, but works for now for testing.
</p>
<p>
    Worth noting that there is a clear DSP / UI separation for this VST3-compatible DPF implementation.<br/>
    Instead of the UI having direct access to the DSP side and just calling functions, everything is passed through a VST3 "connection point" as messages.<br/>
    There is something in place to support hosts that do not provide the "connection point" interfaces, so everything still works there too.
</p>
<p>
    I expect to finalize the VST3 support already in October as there does not seem to be any technical limitation or blocker,
    it is just time needed to implement all the things.<br/>
    Sadly VST3 only officially specifies support for Linux, macOS and Windows.<br/>
    DPF can build for more systems than just these 3, so I
    <a target="_blank" href="https://github.com/steinbergmedia/vst3sdk/issues/86">made a question/request upstream</a>
    for how to tackle the issue.
</p>

<h3>Other DPF updates</h3>
<p>
    In other DPF news, I began experimenting with supporting
    <a target="_blank" href="https://github.com/ocornut/imgui">Dear ImGui</a>
    as a widget implementation.<br/>
    Everything already works except drawing on the correct position with high-dpi, there are some weird quirks to figure out in regards to the OpenGL viewport.<br/>
    The target is to allow to use ImGui for the full plugin gui or just as a subwidget.
</p>
<p>
    <img src="/screenshots/news/imgui-widgets-2021-09.png" alt="imgui-widgets"/>
</p>
<p>
    Other worthy mentions on DPF world are the
    <a target="_blank" href="https://github.com/DISTRHO/DPF/blob/develop/FEATURES.md">FEATURES</a>
    and
    <a target="_blank" href="https://github.com/DISTRHO/DPF/blob/develop/LICENSING.md">LICENSING</a> 
    table, which should help people decide if DPF is worthy for them or not.<br/>
    As you might know, DPF is liberally licensed (under ISC) so that it can be used for commercial plugins without restrictions.<br/>
    Hopefully clearing the license situation helps on that side of things.
</p>

<p>&nbsp;</p>

<p>
    That is all for now.<br/>
    There are some bug-fix releases planned, but that will be something for October.<br/>
    If you appreciate the kind of work I do, please
    <a href="https://kx.studio/Donations">consider a donation</a>.<br/>
    Thank you in advance for your support, and stay safe out there!<br/>
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; KXStudio Monthly Report (August 2021)</span><br/>
    On <i>2021-08-31</i> by<i> falkTX</i>
</p>
<p>
    Hello all, another one of those monthly reports about the KXStudio project is here.<br/>
    This month as you might have seen we had
    <a href="https://kx.studio/News/?action=view&url=carla-232-has-been-released" target="_blank">not one</a>
    but
    <a href="https://kx.studio/News/?action=view&url=carla-plugin-host-v240-is-here" target="_blank">two Carla releases</a>.<br/>
    Mostly bugfixes as expected, the new stuff was all very minor compared to past releases.<br/>
    A few additonal things were added/fixed in Carla already since then, but all still very minor.<br/>
    Whatever is ready by next release day (October 15) will be what gets in next, just to get a nice pace of releases going.
</p>

<h3>More (final?) DPF updates</h3>
<p>
    DPF got a lot of attention once again.<br/>
    It is now on a state where I can focus on bugfixes rather than new things,
    even though I still want to try official SVG support.<br/>
    Everything that was in the previous DPF (that is, the git
    <a href="https://github.com/DISTRHO/DPF/tree/master/" target="_blank">master branch</a>)
    should now be in the develop branch.<br/>
    I am confident enough in this that made a new
    <a href="https://github.com/DISTRHO/DPF/tree/main" target="_blank">"main" branch</a>
    to be the default clone target (I will keep the old master branch untouched, as there are a few minor things that can't be made backwards compatible).
</p>

<h4>Fixing high-dpi support</h4>
<p>
    Something that got a fair bit of attention was high-dpi support.<br/>
    Previously DPF read the scale factor from the host (if provided, most do not) but now it can also figure it out on its own as fallback.<br/>
    There was a lot of
    <a href="https://github.com/DISTRHO/DPF/pull/301" target="_blank">back and forth</a>
    until
    <a href="https://github.com/DISTRHO/DPF/issues/308" target="_blank">it was verified</a>
    to
    <a href="https://github.com/DISTRHO/DPF/issues/311" target="_blank">work on all major OSes and formats</a>.<br/>
    I also updated the DPF-Plugins project so that all plugins contained within it support this.<br/>
    Even though some being bitmap-based causes their UI to look blurry, at least they will appear in the correct size.<br/>
    You can see them in the screenshot below.
</p>
<p>
    <img src="/screenshots/news/dpf-plugins-big-2021-08.png" alt="dpf-plugins-big"/>
</p>

<h4>sofd improvements</h4>
<p>
    Some care was given to the
    <a href="https://github.com/x42/sofd/" target="_blank">sofd module</a>
    used by DPF as fallback X11 file browser dialog.<br/>
    It serves us well enough because it generally works fine, but never looked that great in my opinion..<br/>
    I spent some time to change its colors a bit to follow a more traditional/usual approach, plus a dark theme because yes.<br/>
    And then on top make it work nicely for high-dpi setups too.<br/>
    Not everyone uses dark themes, so there needs to be a light theme option too, not sure yet if it can be chosen automatically.<br/>
    Personally I think it looks much better, but tastes are subjective. Anyway, the differences can be seen below:<br/>
    (will submit the changes upstream after all the DPF file dialog stuff is finalized and stable)
</p>
<p>
    <img src="/screenshots/news/sofd-compare-2021-08.png" alt="sofd-compare"/>
</p>

<h4>External UI</h4>
<p>
    As a final thing to mention for DPF, the last item that needed attention before the rework being in feature-parity with old branch, is external UI support.<br/>
    The idea being that we can reuse DPF APIs and plugin export support but do the UI stuff completely separately - be it separate process or a custom implementation.<br/>
    As long as it is in a way the plugin host expects things (ie, X11 window on Linux) things should just work..
</p>
<p>
    The old DPF master branch didn't support this fully, but there was some experimental stuff in place.<br/>
    Now it is back again, with a little
    <a href="https://github.com/DISTRHO/DPF/blob/main/distrho/extra/ExternalWindow.hpp#L37" target="_blank">more documentation</a>
    and better support - it should eventually be an official DPF feature.<br/>
    You can follow its discussion and progress
    <a href="https://github.com/DISTRHO/DPF/issues/313" target="_blank">here</a>
    and because everyone likes screenshots, here is one as a quick test of mpv running as the external UI:
</p>
<p>
    <img src="/screenshots/news/external-ui-mpv-2021-08.png" alt="external-ui-mpv"/>
</p>

<h3>ProM revived</h3>
<p>
    One little plugin I made quite some years ago but left it aside due to difficulties in packaging was
    <a href="https://github.com/DISTRHO/ProM/" target="_blank">ProM</a>.<br/>
    ProM is basically
    <a href="https://github.com/projectM-visualizer/projectm/" target="_blank">projectM</a>
    in plugin form, on top of DPF.<br/>
    It allows you to have old-school milkdrop-like visualizations on your DAW/host, it is an audio plugin after all.<br/>
    After a little fighting over building projectM correctly (directly in ProM source, aka "vendored"),
    I can now say it builds and runs on at least GNU/Linux, macOS and Windows.<br/>
    Taking from
    <a href="https://kx.studio/News/?action=view&url=kxstudio-monthly-report-july-2021" target="_blank">last month's automatic build setup</a>,
    binaries are
    <a href="https://github.com/DISTRHO/ProM/actions" target="_blank">automatically generated for these 3 OSes directly from GitHub</a>.<br/>
    To make Linux distribution packagers happy, the option to build against system-provided libprojectM is still present,
    and should work even better now as it finds the shared data prefix to use via pkg-config.
</p>
<p>
    <img src="/screenshots/news/prom-revival-2021-08.png" alt="prom-revival"/>
</p>

<h3>Website updates</h3>
<p>
    Worth of a little note, I updated the kx.studio website to better work in smaller screens, or vertical ones, or both like in mobile phones.<br/>
    The content itself is mostly unchanged, still need to tackle that (specially documentation, there is a lot of old stuff there).<br/>
    They typically call this "responsive design" I guess.<br/>
    The news part I didn't update, as otherwise it would break RSS readers, and the top menu needs to become of one those "hamburguer"-style things when width is low. A task for later.
</p>
<p>
    A final website update worth mentioning is the addition of the
    <a href="https://kx.studio/Board" target="_blank">board</a>
    and
    <a href="https://kx.studio/Development" target="_blank">development</a>
    pages.<br/>
    As people sometimes wonder what I have been doing lately (specially important for those that give out donations, thanks for that by the way!)
    the board view is now integrated into the site. I added color descriptions there too.<br/>
    Hopefully that makes everything more clear, and more visible too of course.
</p>

<p>&nbsp;</p>

<p>
    That is all for now.<br/>
    If you appreciate the kind of work I do, please
    <a href="https://kx.studio/Donations">consider a donation</a>.<br/>
    Thank you in advance for your support, and stay safe out there!<br/>
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Carla Plugin Host v2.4.0 is here</span><br/>
    On <i>2021-08-20</i> by<i> falkTX</i>
</p>
<p>
    Hello everyone, this is the announcement of the 2.4.0 version of the Carla Plugin Host.<br/>
    If you do not know, Carla is a fully-featured cross-platform audio plugin host, which can also run as a plugin.
</p>
<p>
    This release was initially meant to be 2.3.3 but there are some small new features so treating it as bugfix would be misleading.<br/>
    Semantically-speaking, new stuff means new version, so 2.4 it is.<br/>
    I was going to wait a bit more until a release, but it is Ubuntu feature freeze time, so got to go with what is available now in order to make it.<br/>
    Anyway, let's go through the (small) release highlights.
</p>

<table><tr><td width="40%">
<a href="/screenshots/news/carla-2.4_classic-skin.png">
    <img src="/screenshots/news/carla-2.4_classic-skin.png" style="max-width:100%;height:auto;" alt="audiofile"/>
</a>
</td><td width="60%">
<h3>Option to use classic skin by default</h3>
<p>
    Who doesn't like a little bit of nostalgia?<br/>
    Reminiscent of its v1.x days, the "classic" rack skin can now be made into the default.<br/>
    So now you can be on latest Carla with all the new stuff, but still feel retro. :D
</p>
<p>
    The dry/wet and volume controls are only accessible through the built-in plugin edit dialog,<br/>
    but in return the whole rack takes less screen space.
</p>
</td></tr></table>

<br/>

<table><tr><td width="40%">
<a href="/screenshots/news/carla-2.4_lv2-gtk-windows.png">
    <img src="/screenshots/news/carla-2.4_lv2-gtk-windows.png" style="max-width:100%;height:auto;" alt="lv2-gtk-windows"/>
</a>
</td><td width="60%">
<h3>LV2 Gtk UIs on any system</h3>
<p>
    After some changes on how Carla handles its Gtk UI bridges, it is now possible to build and use them on any system.<br/>
    Behind the scenes instead of directly linking against Gtk libraries,
    the Carla Gtk UI bridge will open the Gtk library/DLL to find the needed symbols in order to get a working Gtk setup.<br/>
    This doesn't change the behaviour on Linux, but allows to use Gtk-based UIs on systems like Windows and macOS.<br/>
    Its usefulness is a bit questionable, my main reason to change this was to be able to adapt to new Gtk versions more easily, but it has nice side effects.
</p>
<p>
    Currently there are no LV2 plugins released on macOS or Windows that make use of such a UI, but could change soon via
    <a href="https://github.com/DISTRHO/PawPaw" target="_blank">PawPaw</a>.<br/>
    I have been doing some tests and at least amsynth and Invada are possible to get working with their full UIs.<br/>
    Later on I will see if and how it could be possible to package such plugins with their UIs.
</p>
</td></tr></table>

<br/>

<h3>Full changelog</h3>
<ul>
    <li>Add option to use classic skin by default</li>
    <li>Add support for lv2 ui gtk bridges on any system</li>
    <li>Set display scale factor for carla-bridge-*/carla-single standalone usage (on macOS and X11 systems)</li>
    <li>Fix Linux VST3 plugin GUIs crash on close</li>
    <li>Fix build under msys2 (will not force static binaries)</li>
    <li>Fix keyboard focus for bridges on macOS (2nd attempt)</li>
    <li>Fix canvas icon in settings to be high-dpi compatible</li>
    <li>Fix wrong scale factor of plugin GUIs under macOS</li>
</ul>

<h3>Downloads</h3>
<p>
    To download Carla binaries or source code, jump on over to the <a href="https://kx.studio/Downloads" class="external free" rel="nofollow" target="_blank">KXStudio downloads section</a>.<br/>
    If you're using the KXStudio repositories, you can simply install "carla".<br/>
    Bug reports and feature requests are welcome! Jump on over to the <a href="https://github.com/falkTX/Carla" class="external free" rel="nofollow" target="_blank">Carla's Github project</a> page for those.
</p>

<h3>Notes for users</h3>
<p>
    This was already the case for v2.2 and v2.3 but it is worth reiterating:<br/>
    When using JACK2, the canvas - plugin integrations requires at least JACK2 v1.9.13.<br/>
    This is because Carla relies on JACK meta-data in order to store information about each plugin/client,
    and meta-data was only added to JACK2 in version 1.9.13.<br/>
    Alternatively, you can use JACK1 instead of JACK2, which has meta-data support since a long time.<br/>
    Note that the <a href="/Repositories:Extras">"extras" KXStudio repository</a> (which provides an updated JACK2) supports both Ubuntu 18.04 and 20.04.<br/>
    The UbuntuStudio backports PPA also provides updated JACK2 packages.
</p>
<p>
    There are no official Linux binary builds for v2.4 at this point.<br/>
    Carla v2.4 is provided in the KXStudio repositories and in many official Linux distribution repositories too anyway.
</p>

&nbsp;

<p>
    As always, if you appreciate the kind of work I do, please
    <a href="https://kx.studio/Donations">consider a donation</a>.<br/>
    Thank you in advance for your support, and stay safe out there!<br/>
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Carla 2.3.2 has been released</span><br/>
    On <i>2021-08-08</i> by<i> falkTX</i>
</p>

<p>
    This is a bugfix for Carla version v2.3 series, mostly fixing a few regressions with the previous release.
</p>

<h3>Changelog</h3>
<ul>
    <li>Add 32x32 icon</li>
    <li>Do not show --gdb in usage/help when not installed system-wide</li>
    <li>Fix default SF2 search path</li>
    <li>Fix keyboard focus for bridges on macOS</li>
    <li>Fix X11-UIs related regressions in v2.3.1</li>
</ul>

<h3>Downloads</h3>
<p>
    To download Carla binaries or source code, jump on over to the <a href="https://kx.studio/Downloads" class="external free" rel="nofollow" target="_blank">KXStudio downloads section</a>.<br/>
    If you're using the KXStudio repositories, you can simply install "carla".<br/>
    Bug reports and feature requests are welcome! Jump on over to the <a href="https://github.com/falkTX/Carla" class="external free" rel="nofollow" target="_blank">Carla's Github project</a> page for those.
</p>

&nbsp;

<p>
    As always, if you appreciate the kind of work I do, please
    <a href="https://kx.studio/Donations">consider a donation</a>.<br/>
    Thank you in advance for your support, and stay safe out there!<br/>
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; KXStudio Monthly Report (July 2021)</span><br/>
    On <i>2021-07-31</i> by<i> falkTX</i>
</p>
<p>
    Hello all, another monthly report about the KXStudio project is here.<br/>
    First, in case you missed it,
    <a href="https://kx.studio/News/?action=view&url=carla-231-has-been-released" target="_blank">Carla v2.3.1</a>
    and
    <a href="https://jackaudio.org/news/2021/07/16/jack2-v1919-release.html" target="_blank">JACK2 v1.9.19</a>
    have been released.<br/>
    A few issues were reported against this latest Carla release (regressions) so expect a v2.3.2 very soon.<br/>
    Due to travis-ci.org shutting down (and the replacement travis-ci.com being absolutely terrible) the binaries for these releases were not automated.<br/>
    Which brings me to this month's first topic.
</p>

<h3>Automated builds &amp; artifacts</h3>
<p>
    Since travis became unusable, and manually doing builds everytime is a bit of a pain, I began looking for alternatives.<br/>
    GitHub Actions seems to be what most developers have run to, but I am not really happy putting yet more stuff into GitHub.<br/>
    While there are some alternatives, even self-hosting, in the end being pragmatic I threw the towel and just let GitHub handle it.<br/>
    For projects that already have a presence on GitHub, the integration just makes sense.
</p>
<p>
    One of the issues with travis was the lack of daily/latest build binaries.<br/>
    While it was possible to setup, it usually required creating a tag or release to upload the binaries into.<br/>
    GitHub Actions can have "artifacts" associated with any build, with no special setup required from contributors.<br/>
    This was the main thing that pushed me to just stick with GitHub for this.<br/>
    If someone external to a project submits a pull-request, there will be automated builds with the proposed changes ready for testing.<br/>
    The fact that builds start immediately (instead of sometimes having to wait several hours like in other services) is super nice to see.
</p>
<p>
    But are there any benefits to users, you may ask.<br/>
    Well, take for the example JACK, for which I already added automated builds.<br/>
    If you open the
    <a href="https://github.com/jackaudio/jack2/actions" target="_blank">JACK2 GitHub Actions</a>
    page, there will be macOS and Windows installers for each build going forwards.<br/>
    When there comes a time where a change requires testing, there is no longer a need to build things manually.
</p>
<p>
    Automated builds via GitHub Actions (and the resulting artifacts) also fit nicely for DPF.<br/>
    I was able to create a "workflow" file (that is, a file that describes what to build and how) for DPF-based plugins,
    where it builds and publishes linux-armhf, linux-arm64, linux-x64, macOS (universal), win32 and win64 binaries,
    all in a single file.<br/>
    So you can basically take
    <a href="https://github.com/DISTRHO/DPF-Plugins/blob/master/.github/workflows/build.yml" target="_blank">
    this file</a>,
    place it in your own repository, and directly have all those linux, macOS and windows builds right away.<br/>
    I already have this setup for pretty all of DPF-based plugins under the
    <a href="https://github.com/DISTRHO/" target="_blank">DISTRHO GitHub organization</a>.<br/>
    As an experiment, I
    <a href="https://github.com/michaelwillis/dragonfly-reverb/pull/106" target="_blank">added the same support to dragonfly-reverb project</a>.<br/>
    So now if you go to its
    <a href="https://github.com/michaelwillis/dragonfly-reverb/actions" target="_blank">GitHub Actions</a>
    page and click on the latest commit, you will be able to download and install/use the build artifacts.
</p>
<p>
    This is extremely valuable, as not everyone has a macOS or Windows machine in order to do builds for those.<br/>
    Or maybe the other way around, someone on macOS or Windows without a Linux machine, etc etc.<br/>
    I also think of the situation of people wanting to try out a change in the code but don't have the developer tools needed to build the project themselves.<br/>
    While maybe not a big issue for DPF/Plugin projects (as they tend to be small in size),
    for things like Carla where build dependencies are a lot more involved, almost no one will have everything needed to make binaries alike the official ones.<br/>
    With these automated builds, you can basically create a pull request and just enjoy the build - which will follow the same exact conventions as official builds.
</p>
<p>
    Now, this is not in place for Carla just yet, but it is in progress.<br/>
    Currently DPF (plus the plugins made with them under DISTRHO) and JACK2 have automated builds via GitHub Actions.<br/>
    More will follow soon.
</p>

<h3>Packaging</h3>
<p>
    There are no updates regarding packages in the KXStudio repositories at this time.<br/>
    Even though some packaged plugins are out-of-date, yes..<br/>
</p>
<p>
    Thinking of packages, I might just do a whole month focused on them soon.<br/>
    There has been quite some nice releases of open-source audio plugins lately that would be great to have packaged,
    but lack of proper time for them is a problem.<br/>
    As the last details on DPF new release are being resolved, packaging might be the next thing to focus on.
</p>
<p>
    Special attention is needed on JUCE things though, because the LV2 wrapper is still somewhat of a pain for external developers to integrate properly.<br/>
    (If only JUCE devs made the LV2 wrapper official! errr...)
</p>
<p>
    Anyway, this packaging thing is not so much of news but more of wishes.<br/>
    Before new JUCE-based plugins get packaged, I want to sort out the LV2 wrapper mess, make it as easy as possible for developers to have official LV2 variants.<br/>
    Only me building LV2 versions (for the KXStudio repositories) is not something I want to push for anymore,
    rather it would be best for everyone to have said LV2 versions.
</p>

<p>&nbsp;</p>

<p>
    That is all for now.<br/>
    If you appreciate the kind of work I do, please
    <a href="https://kx.studio/Donations">consider a donation</a>.<br/>
    Thank you in advance for your support, and stay safe out there!<br/>
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Carla 2.3.1 has been released</span><br/>
    On <i>2021-07-16</i> by<i> falkTX</i>
</p>

<p>
    This is a bugfix for Carla version v2.3 series, fixing many bug reports and stuff I found along the way.
</p>
<p>
    Carla is an audio plugin host, with support for many audio drivers and plugin formats.<br/>
    It has some nice features like automation of parameters via MIDI CC (and send output back as MIDI too) and full OSC control.<br/>
</p>

<h3>Changelog</h3>
<ul>
    <li>Add NSLocalNetworkUsageDescription and NSMicrophoneUsageDescription in macOS builds</li>
    <li>Allow canvas eyecandy for Qt >= 5.12</li>
    <li>Alternative approach to deal with JACK postponed events (improves PipeWire usage)</li>
    <li>Implement parameter groups for VST2 plugins</li>
    <li>Ignore hosts calling Carla-VST effOpen twice (don't print errors)</li>
    <li>Listen to Windows and X11 plugin UI resize events (without extensions)</li>
    <li>Make some macOS dialogs modal</li>
    <li>Remove favorite plugins from list when they fail to load</li>
    <li>Update JUCE plugin code to new APIs, hook into VST2 for feature parity with native implementation</li>
    <li>Use new tick_double for JACK transport</li>
    <li>Use posix_spawn to launch macOS bridges</li>
    <li>Fix available decimal points on a few dialogs being incorrect</li>
    <li>Fix bridged plugin UIs appearing behind main carla window on macOS</li>
    <li>Fix canvas auto-refreshing on exit, potentially leading to crash</li>
    <li>Fix canvas split/join action</li>
    <li>Fix carla-vst-wine symbol visibility</li>
    <li>Fix default rack "skin" for a few plugins</li>
    <li>Fix initial size for LV2 UIs with no UI resize extension (all OSes)</li>
    <li>Fix loading state of Windows/macOS VST2 plugins without chunk</li>
    <li>Fix macOS binaries not being debug/symbol stripped</li>
    <li>Fix midi-pattern plugin having double notes on transport reposition</li>
    <li>Fix race condition (and potential crash) around postponed RT events</li>
    <li>Fix Qt >= 5.10 version checks</li>
    <li>Fix unused JACK latency callbacks (removed)</li>
    <li>Fix X11 UIs not having keyboard focus</li>
</ul>

<h3>Downloads</h3>
<p>
    To download Carla binaries or source code, jump on over to the <a href="https://kx.studio/Downloads" class="external free" rel="nofollow" target="_blank">KXStudio downloads section</a>.<br/>
    If you're using the KXStudio repositories, you can simply install "carla".<br/>
    Bug reports and feature requests are welcome! Jump on over to the <a href="https://github.com/falkTX/Carla" class="external free" rel="nofollow" target="_blank">Carla's Github project</a> page for those.
</p>

<h3>Notes for users</h3>
<p>
    This was already the case for v2.2 and v2.3 but it is worth reiterating:<br/>
    When using JACK2, the canvas - plugin integrations requires at least JACK2 v1.9.13.<br/>
    This is because Carla relies on JACK meta-data in order to store information about each plugin/client,
    and meta-data was only added to JACK2 in version 1.9.13.<br/>
    Alternatively, you can use JACK1 instead of JACK2, which has meta-data support since a long time.<br/>
    Note that the <a href="/Repositories:Extras">"extras" KXStudio repository</a> (which provides an updated JACK2) supports both Ubuntu 18.04 and 20.04.<br/>
    The UbuntuStudio backports PPA also provides updated JACK2 packages.
</p>
<p>
    There are no official Linux binary builds for v2.3.1 at this point.<br/>
    Carla v2.3.1 is provided in the KXStudio repositories and in many official Linux distribution repositories too anyway.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Changes in the extra KXStudio repositories regarding JACK2</span><br/>
    On <i>2021-07-05</i> by<i> falkTX</i>
</p>
<p>
    This is a small notice to everyone using JACK2 with the extra KXStudio repositories.
    (those for Ubuntu 18.04 and 20.04)
</p>
<p>
    A change in the JACK2 code has made it so a restart of the server is required after the update.<br/>
    The technical reason for this is an internal ABI change due to forced-alignment in a few struct/classes.<br/>
    This change is required for some ARM platforms where non-aligned access results in a bus error.
</p>
<p>
    If you use jackdbus (likely with KXStudio stuff), you will need to actually kill it. (or use the usual <b>cadence-session-start -s</b> command.<br/>
    If that does not work, good old restart is your friend. :)
</p>
<p>
    This small update brings JACK2 v1.9.19 early, as a way to get a little more testing before official release.<br/>
    That said release is planned for April 15.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; KXStudio Monthly Report (June 2021) and a Little Personal Note</span><br/>
    On <i>2021-06-31</i> by<i> falkTX</i>
</p>
<p>
    Hello all, another monthly report about the KXStudio project is here.<br/>
    A bit late this time, but let's ignore that. :)<br/>
</p>

cadence-session-start -s

<p>
    <span style="font-size: 20px">&gt; KXStudio Monthly Report (June 2021) and a Little Personal Note</span><br/>
    On <i>2021-06-31</i> by<i> falkTX</i>
</p>
<p>
    Hello all, another monthly report about the KXStudio project is here.<br/>
    A bit late this time, but let's ignore that. :)<br/>
</p>
<h3>DPF updates</h3>
<p>
    <a href="https://github.com/DISTRHO/DPF" target="_blank">
    DPF
    </a>
    got most of the attention again.<br/>
    Things are progressing, not as fast as I hoped, but there is progress.
    (I really underestimated the amount of time DPF would take)<br/>
    The main reason for the DPF attention and rework
    - updating its
    <a href="https://github.com/lv2/pugl" target="_blank">pugl graphics backend</a>
    to latest upstream with no patches - is complete.<br/>
    Only 1 small change is still custom, related to using
    <a href="https://github.com/x42/sofd/" target="_blank">sofd</a>
    as a fallback file browser dialog on Linux.<br/>
    After
    <a href="https://github.com/lv2/pugl/pull/49" target="_blank">some discussion with the author</a>,
    I realized such a change/patch doesn't belong in pugl.
    I will change this part of DPF at a later time.<br/>
    There are some small additions made on DPF-side of the code for pugl, but nothing that requires changing pugl itself.
</p>
<p>
    New stuff was added in DPF of course, first we have a complete
    <a href="https://github.com/DISTRHO/DPF/commit/495dcc4f03d6a2ed0d30c56c885e4eb7476f4488" target="_blank">port groups</a>
    implementation, based on an
    <a href="https://github.com/DISTRHO/DPF/pull/193" target="_blank">initial PR from Jean Pierre Cimalando</a>.<br/>
    It is supported on LV2, VST2 and JACK targets, wherever is possible on those anyway.<br/>
    For LV2, port groups are set in the meta-data for both audio/CV ports and parameters.<br/>
    For VST2, parameter groups are supported (named categories in VST world)<br/>
    For JACK, lv2-like meta-data is set on the audio and CV ports.<br/>
</p>
<p>
    Next, the JACK target can now always be built, by including
    <a href="https://github.com/DISTRHO/DPF/tree/develop/distrho/src/jackbridge" target="_blank">jackbridge</a>
    code from Carla (adapted to make fit DPF better, also liberally licensed).<br/>
    This makes it so that:
</p>
<ol>
    <li>JACK headers and libraries are not needed at build-time</li>
    <li>Compiled binaries to not link to libjack</li>
    <li>libjack is loaded dynamically at runtime, printing an error if not found</li>
</ol>
<p>
    As a 2nd step on top of this,
    <a href="https://github.com/thestk/rtaudio" target="_blank">RtAudio</a>
    is used as fallback in case JACK is not available or connecting to the JACK server fails
    (usually because it is simply not running)<br/>
    This has been requested a few times, and it is finally here.<br/>
    DPF will setup RtAudio so it opens the default audio input and output as needed. MIDI is not supported yet.<br/>
    In any case, such fallback makes testing of DPF plugins much easier, specially on systems that do not have JACK.
</p>
<p>
    Moving on, I started some
    <a href="https://github.com/DISTRHO/DPF/blob/develop/dgl/EventHandlers.hpp" target="_blank">
    classes that simply do event handling</a>,
    split off from the ImageButton and ImageKnob into something generic.<br/>
    The idea here is to make it easier for developers to get a working widget from scratch.<br/>
    Maybe this will help DPF based plugins to be more consistent on their behaviour too.<br/>
    Note that this work is not yet finalized, so these classes are not yet documented.<br/>
    I am using them on a new set of plugins, coding on a as-needed basis, so this will keep evolving over time.
</p>
<p>
    More stuff was added too, though not as substantial, including (in no particular order):
</p>
<ul>
    <li>Allow UI_TYPE = generic, so UI can be opengl or cairo, whichever is available</li>
    <li>Initial work for VST3 compatible plugins, lots to do.. (nothing to see just yet)</li>
    <li>Implemented Window::openFileBrowser() fallback for state files, so you always get a file browser</li>
</ul>
<p>
    DPF is now at a point where I want to focus on stability and testing.<br/>
    Out of all feature requests, only SVG support is deemed important and "breakage-worthy" (if that makes sense).<br/>
    Once SVG support is in, there will be a feature freeze and then getting everything to work at least as good as before.
</p>

<h3>One-Knob Series</h3>
<p>
    As a way to stress-test the new DPF and also start having some usable
    <a href="https://github.com/DISTRHO/DPF-Widgets" target="_blank">DPF-Widgets</a>
    I began a
    <a href="https://github.com/DISTRHO/OneKnob-Series" target="_blank">new project called One-Knob Series</a>
    that is going to be slowly brewing for the upcoming months.<br/>
    I am not taking a rush on this one, its initial purpose is to test DPF but it so happens that it is also a nice, fun and useful project.<br/>
    The idea here is to make a collection of stupidly simple but well-polished and visually pleasing audio plugins,
    with as little controls as possible, often just one knob and a few options.<br/>
    Eventually they will be not just as a test for DPF, but also as a show-case of what it can do, plus give an example of good practices within DPF.
</p>
<p>
    <img src="/screenshots/news/ok-series-2021-07.png" alt="ok-series"/>
</p>
<p>
    The guidelines for the collection are:
</p>
<ul>
    <li>Must have one main control/knob (linear or logarithmic), with one auxiliary slider/knob allowed but discouraged</li>
    <li>Can have maximum 3 auxiliary options (list of values or toggles)</li>
    <li>Parameter changes must be click-free</li>
    <li>GUI must be cleanly scalable (no bitmaps allowed or blurred resources when scaled)</li>
    <li>GUI must follow the same style</li>
</ul>
<p>
    I have a few ideas for useful one-knob style of plugins, to slowly be put into action throughout the year.<br/>
    Before you ask, you can already build and use them yes.<br/>
    I don't recommend doing so right now though.
</p>

<h3>Other</h3>
<p>
    A new Carla release is coming very soon, for the quarterly release pact once again.<br/>
    It is going to be a bugfix release, I will write more details about it in 13 days for the 15th of July.<br/>
    JACK2 will very likely see a new version too, pretty minimal but keeping with the spirit of doing regular releases.
</p>
<p>
    Now, into some personal notes...<br/>
    I am a little frustrated, perhaps disappointed, that pushing for donations doesn't work.<br/>
    The number of subcriptions has been going down, not up.<br/>
    While I want to keep doing these kinda of things, being realistic, it is really not sustainable.<br/>
    All the free time is basically spent on this, but it does not pay off.<br/>
    Perhaps that should have been expected..<br/>
    It seems that (in my opinion), in order to make it really pay off, a whole lot more effort would be needed.<br/>
    Not just with coding, but more regular interaction with community, basically a whole lot of reporting and being present.<br/>
    The projects that really succeed in such funding pretty much always have someone very "present" and visible within their community.<br/>
    It is tough, and maybe was just not feasible at all. We know audio development, specially on Linux or open-source, is very very niche.
</p>
<p>
    So it is clear that keeping this up as-is is not possible, a lot of my life stuff was ignored or put on hold (it was lockdown anyway, so not much of a problem).<br/>
    For the sake of sanity and balance, going forward for the next 6 months (so the rest of the year), plan is now:
</p>
<ul>
    <li>no more new-feature developments, bugfixes only (the svg and vst3 support in dpf being the exception, I feel like they are essential)</li>
    <li>will restrict time spent working on floss stuff to whatever is left from main job, no more weekends, max 40h/week</li>
    <li>when bugfixes get boring, will do packaging, website updates or writting user manuals</li>
</ul>
<p>
    And that's all for now.<br/>
    Obviously I will still keep working on these things, don't worry.<br/>
    Specially Carla and DPF have my main attention, but will be on a more reasonable pace from now on.<br/>
    As always, if you appreciate the kind of work I do, please
    <a href="https://kx.studio/Donations">consider a donation</a>.<br/>
    Thank you in advance for your support, and stay safe out there! See you soon!<br/>
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; KXStudio Monthly Report (May 2021)</span><br/>
    On <i>2021-05-31</i> by<i> falkTX</i>
</p>
<p>
    Hello all, another monthly report about the KXStudio project is here.<br/>
    I skipped last month as there was not much to report.<br/>
    Mainly there were new releases, but those had their own announcement (specifically,
    <a href="https://kx.studio/News/?action=view&url=carla-plugin-host-v23-is-here" target="_blank">
    Carla v2.3</a>
    and
    <a href="https://jackaudio.org/news/2021/04/15/jack2-v1918-release.html" target="_blank">
    JACK2 v1.9.18</a>).<br/>
    Afterwards there was a small personal situation (that is still unfolding) that took all my free time, so that was it.<br/>
    There are a few updates related to the month of May though!
</p>
<h3>DPF updates</h3>
<p>
    The main thing to report today is all the work that I've been putting in
    <a href="https://github.com/DISTRHO/DPF" target="_blank">DPF</a>
    recently.<br/>
    This has been a long-time coming, but better late than never.<br/>
    For those unaware, DPF is a very small C++ framework to create audio plugins with.<br/>
    It has UI support, but it is intentionally not a fully-fledged UI toolkit, same for its DSP side.<br/>
    It can export as LV2, VST2 and other plugin formats, but it does not try to do much more than that.<br/>
    Native OS events is handled behind the scenes via
    <a href="https://gitlab.com/lv2/pugl" target="_blank">pugl</a>.
</p>
<p>
    One major task to do was updating to
    <a href="https://drobilla.net/files/pugl_docs/overview.html" target="_blank">latest pugl</a>,
    because it supports many more things compared to old versions.<br/>
    pugl had its event system completely reworked though, so we can't just update and use it as-is.<br/>
    In the end, this update work is something that
    <a href="https://github.com/DISTRHO/DPF/pull/272" target="_blank">took several weeks</a>.<br/>
    I took the chance to rework some core components of DPF UI handling together with this,
    as there were a few parts of the code that
    <a href="https://github.com/DISTRHO/DPF/issues/68" target="_blank">proved confusing</a>
    to
    <a href="https://github.com/DISTRHO/DPF/issues/136" target="_blank">other developers</a>.<br/>
    Also added in
    <a href="https://github.com/DISTRHO/DPF/tree/develop/tests" target="_blank">testing units and demo applications</a>
    to help test several parts of DPF, though this is still very much work-in-progress.<br/>
    This was specially useful to ensure core parts were working before proceeding with the rework.<br/>
    Related to pugl update and rework, the Cairo backend of DPF is now pretty much on-par with its OpenGL one.<br/>
    The Demo tool (where we test images, events, resizing, etc) has consistent behaviour between the two.<br/>
    <br/>
    <img src="/screenshots/news/dpf-demo-2021-05.png" alt="dpf-demo"/>
</p>
<p>
    Continuing with the rework,
    <a href="https://github.com/DISTRHO/DPF/pull/281" target="_blank">special attention was given to resizing</a>.<br/>
    Resizing in LV2 UIs has always been something very painful, which still does not work correctly in many hosts.<br/>
    One culprit of this was the bad initial decision to use an LV2 extension to deal with UI resizing.<br/>
    Turns out,
    <a href="https://github.com/lv2/pugl/issues/42" target="_blank">we do not need this at all</a>!<br/>
    So the next version of DPF will
    <a href="https://github.com/DISTRHO/DPF/commit/0d6f63e9b284207efe27e798ccdfbb307ee56302" target="_blank">no longer make use</a>
    of
    <a href="https://github.com/DISTRHO/DPF/commit/d2b96431b2a5790e9d281f97e09e42ab2f90a927" target="_blank">LV2 UI resize extensions</a>.<br/>
    We will need to accommodate hosts to this, which is a breaking change.<br/>
    But it is not like LV2 plugin-side resizing was working well in the first place anyway.<br/>
    I already
    <a href="https://github.com/falkTX/Carla/commit/75ea9f5b2d184151c696f1dc648dfb700959c876" target="_blank">did this for Carla</a>.
    Likely will do similar things to
    <a href="http://drobilla.net/software/suil" target="_blank">suil</a>
    if no one else does.
</p>
<p>
    On even more DPF news, I created a new
    <a href="https://github.com/DISTRHO/DPF-Widgets" target="_blank">open-source code repository meant for reusable DPF UI widgets</a>.<br/>
    It has come to my attention that developers struggle with DPF having very little common widgets they are used to.<br/>
    I have made a few ones based on images for the
    <a href="https://github.com/DISTRHO/DPF-Plugins/" target="_blank">DPF-Plugins collection</a>,
    but some developers struggle to create individual widgets from scratch.<br/>
    This code repository will evolve over time, obviously as a new project which is only a few days old there is not much to see.<br/>
    One common request has been a resize handle, so that for plugin formats like VST2 which do not allow user-side resizing we still have a way for the user to resize the UI.<br/>
    There is one
    <a href="https://github.com/DISTRHO/DPF-Widgets/blob/main/generic/ResizeHandle.hpp" target="_blank">generic resize handle in the repository now</a>,
    usable for both Cairo and OpenGL backends.<br/>
    The first real widgets I am contributing to the repository are a port of
    <a href="https://github.com/IceDragon200/oui-blendish" target="_blank">oui-blendish</a>
    which provides blender-style looking widgets.<br/>
    I am still setting up the whole thing, but initial impressions are very good. It even works with High-DPI / custom scale factors!<br/>
    (ignore the bitmap icons on the screenshot below, those are only used in testing, I will later either replace them or remove them)<br/>
    <br/>
    <img src="/screenshots/news/dpf-widgets-blendish-2021-05.png" alt="dpf-widgets-blendish"/>
</p>
<p>
    Finally on DPF side, as contributions by Jean Pierre Cimalando,
    <a href="https://github.com/DISTRHO/DPF/pull/269" target="_blank">CMake is now supported</a>
    for building DPF and using it in plugins targeting DPF.<br/>
    As a second step on top of CMake, it is now possible to
    <a href="https://github.com/DISTRHO/DPF/pull/278" target="_blank">build DPF with MSVC on Windows</a>.<br/>
    I tried this myself and was able to build a DPF VST2 plugin with MSVC and run the output binary inside Carla.<br/>
    This is not my development workflow by any means (it was the first time I used MSVC!) but it opens up the process for many more people, which always great.<br/>
    <br/>
    <img src="/screenshots/news/dpf-msvc-2021-05.png" alt="dpf-msvc"/>
</p>
<p>
    One last bit of news regarding DPF is that I started testing the waters for VST3 support.<br/>
    There is almost nothing to see just yet, as there is enough to do in DPF regarding polishing, fixing bugs and handling requests so that VST3 work is not a priority.<br/>
    It is something that I have took an interest on lately though, as a potential way to attract commercial developers/vendors to DPF.<br/>
    (and perhaps some well needed funding? who knows..)
</p>
<p>
    Work on DPF will continue, you can grab all these changes from its
    <a href="https://github.com/DISTRHO/DPF/tree/develop" target="_blank">develop branch</a>.<br/>
    Expect more news about it next month.
</p>

<h3>Other updates</h3>
<p>
    While most of my time and attention was given to DPF, a few other things happened.<br/>
    There is the whole "Audacity was bought up by Muse Group and added CLA, plus telemetry coming soon" thing...<br/>
    I did some tests with building Audacity with mingw, and succeeded in setting up scripts to
    <a href="https://github.com/DISTRHO/PawPaw/blob/master/bootstrap-audacity.sh" target="_blank">build required dependencies</a>
    and then
    <a href="https://github.com/DISTRHO/PawPaw/blob/master/build-audacity.sh" target="_blank">build audacity itself</a>.<br/>
    From what I tested on Windows everything seems to work.<br/>
    (screenshot below is from Wine, but I also tested on real Windows via Virtual Machine)<br/>
    <br/>
    <img src="/screenshots/news/audacity-win32-build-2021-05.png" alt="audacity-win32-build"/>
    <br/>
    Most mingw needed fixes were
    <a href="https://github.com/audacity/audacity/pull/881" target="_blank">submitted upstream</a>,
    but them now requiring a CLA means the PR will likely stay open indefinitely.<br/>
    Also did some tests with
    <a href="https://github.com/audacity/audacity/discussions/877" target="_blank">building Audacity with wxQt</a>
    and while it kinda works, still has some obvious issues - the wxWidgets Qt backend is not feature complete so it is normal for those to happen.<br/>
    It is very likely I will end up maintaining some custom builds for Audacity once more network features creep in
    (analytics is coming to Audacity for sure, it is just a matter of when and how).<br/>
    I am not interested on a fork, only in a way for casual users to get similar builds to the official ones without user-data tracking.
</p>
<p>
    There are some other random things too, for example adding a new "-w" argument to the new jack2 zalsa tools so that it
    <a href="https://github.com/jackaudio/jack2/commit/23b9fb71b943595db90eb6e8dd48294600cfb0bb" target="_blank">waits until the requested soundcard is available</a>
    instead of failing to start.<br/>
    This is very handy when adding it as part of some boot process.
</p>
<p>
    Carla has also seen some
    <a href="https://github.com/falkTX/Carla/commit/c777cd02d92ba8a61adb29d61fd39f84e3d1bc55" target="_blank">pipewire-related</a>
    <a href="https://github.com/falkTX/Carla/commit/62a6410171c4b88b0b5a76cd0681d16152f9c9d1" target="_blank">fixes</a>.<br/>
    It is still not working 100%, but already know of a solution for them, just need to put that into code.<br/>
    Expect a v2.3.1 release soon with these fixes, and also the LV2 UI resize handling mentioned above.
</p>
<p>
    Finally I added support for
    <a href="https://github.com/falkTX/FFmpeg/commits/n4.4-jackoutdev" target="_blank">FFmpeg JACK output</a>.
    Seems to work well from what I tested, but I no longer have a need for it.<br/>
    Once I am done with DPF and other things, I will try to submit this upstream.
</p>
<p>
    Regarding packages in the KXStudio repositories, there are some small updates. Those are:
</p>
<ul>
    <li>Added bjumblr</i>
    <li>Added bslizr-uwu (custom skin to bslizr)</i>
    <li>bslizr updated to 1.2.14</i>
    <li>lsp-plugins updated to 1.1.30</i>
</ul>
<p>&nbsp;</p>
<p>
    That is all for now.<br/>
    If you appreciate the kind of work I do, please
    <a href="https://kx.studio/Donations">consider a donation</a>.<br/>
    Thank you in advance for your support, and stay safe out there!<br/>
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Carla Plugin Host v2.3 is here</span><br/>
    On <i>2021-04-15</i> by<i> falkTX</i>
</p>
<p>
    Hello everyone, this is the announcement of the 2.3 version of the Carla Plugin Host.<br/>
    If you do not know, Carla is a fully-featured cross-platform audio plugin host, which can also run as a plugin.
</p>
<p>
    This specific release, compared to v2.3-RC2, brings some much needed fixes to the MIDI Pattern plugin - it finally works as expected.<br/>
    There were some fixes done on the patchcanvas side, and for other stuff as reported by users.<br/>
    The full list of changes for v2.3 (coming from v2.3-RC2) are:
</p>
<ul>
    <li>Fix a float vs int usage, which will break in python soon</li>
    <li>Fix cancelling plugin discovery</li>
    <li>Fix main client name for multiple carlas inside NSM</li>
    <li>Fix missing vst3 poly aftertouch</li>
    <li>Fix patchcanvas use of keyboard modifiers</li>
    <li>Fix project filename/folder only set after saving once</li>
    <li>Fix recursive VST2 audioMasterAutomate parameter changes</li>
    <li>Fix sorting plugins by favorite</li>
    <li>Do not run 2nd instance of lv2 plugin if it has event output(s)</li>
    <li>Read lv2 midi:binding on control ports and parameters</li>
    <li>Use Ctrl+P to open/close side panel</li>
    <li>Use fixed buffers on standalone bridge mode</li>
    <li>midipattern: overall fix up</li>
    <li>midipattern: use Esc key to close UI</li>
</ul>
<p>
    The v2.3-RC1 announcement already listed the new features that v2.3 brings (compared to v2.2),
    but let's go through the release highlights again.
</p>

<table><tr><td width="40%">
<a href="/screenshots/news/carla-2.3_macos-universal.png">
    <img src="/screenshots/news/carla-2.3_macos-universal.png" style="max-width:100%;height:auto;" alt="macos-universal"/>
</a>
</td><td width="60%">
<h3>macOS arm64/universal build support</h3>
<p>
    Starting with v2.3, Carla natively supports the new macOS arm64 architecture, used in the new M1 hardware models.<br/>
    The Carla macOS universal build supports x86_64 and arm64 architectures at the same time, and should run on anything 10.12 or newer.
</p>
<p>
    As Carla has support for plugin bridges (even across architectures), I took care to make sure that the arm64 version can load x86_64 plugins.<br/>
    When a plugin fails to load in a specific way, Carla will try to load it again but now in x86_64 mode.<br/>
    This is currently working for VST2 and VST3 plugins.
</p>
<p>
    Additionally, for something that kept bothering me a lot, Carla will automatically remove plugins from macOS quarentine before loading them.<br/>
    This is not possible to do for AudioUnits as we do not have the full path to the plugin binary, but valid for all other formats.<br/>
    No more security theatre shenanigans here! :)
</p>
</td></tr></table>

<br/>

<table><tr><td width="40%">
<a href="/screenshots/news/carla-2.3_audiofile.png">
    <img src="/screenshots/news/carla-2.3_audiofile.png" style="max-width:100%;height:auto;" alt="audiofile"/>
</a>
</td><td width="60%">
<h3>General improvements to AudioFile plugin</h3>
<p>
    The AudioFile internal plugin received some deserved attention this time around.<br/>
    Besides basically reworking how its disk-streaming functionality (more robust and much less CPU usage),<br/>
    it finally can do resampling so it will sound correctly no matter the sample rate.<br/>
    Additionally mp3 support was added via
    <a href="https://github.com/mackron/dr_libs/blob/master/dr_mp3.h" target="_blank">dr_mp3</a>,
    as
    <a href="http://www.mega-nerd.com/libsndfile/" target="_blank">libsndfile</a>
    used by it does not yet officially support it.
</p>
<p>
    Both Audio and MIDI file plugins are now exposed as LV2 plugins, allowing to load and use these plugins outside of Carla.<br/>
    It supports file parameter plus patch Get/Set with State mapPath as expected for these kinds of plugins.<br/>
    The experimental "inline-display" of the AudioFile is also exposed as an LV2 feature.
</p>
</td></tr></table>

<br/>

<table><tr><td width="40%">
<a href="/screenshots/news/carla-2.3_audiofile.png">
    <img src="/screenshots/news/carla-2.3_midipattern.png" style="max-width:100%;height:auto;" alt="midipattern"/>
</a>
</td><td width="60%">
<h3>General improvements to MIDI Pattern plugin</h3>
<p>
    Not just the AudioFile plugin, but the MIDI Pattern one also received some much needed attention.<br/>
    The piano-roll UI code was reworked to ensure it worked well, as previously moving notes around just didn't work at all.<br/>
    Many precautions were added against edge-cases.
</p>
<p>
    Hovering notes will change the mouse cursor to better indicate the potential action in case of mouse press.<br/>
    And as with pretty much all other plugins in Carla, using Escape key will now close the plugin UI too.
</p>
</td></tr></table>

<br/>

<table><tr><td width="40%">
<a href="/screenshots/news/carla-2.3_windows.png">
    <img src="/screenshots/news/carla-2.3_windows.png" style="max-width:100%;height:auto;" alt="windows"/>
</a>
</td><td width="60%">
<h3>Reworked Windows builds</h3>
<p>
    The infrastructure used to build Windows binaries is now through
    <a href="https://github.com/DISTRHO/PawPaw" target="_blank">PawPaw</a>,
    as done with
    <a href="https://github.com/jackaudio/jack2-releases" target="_blank">JACK2</a>
    already.<br/>
    With this, I have control over the whole toolchain and libraries that are used in Carla Windows binaries (previously msys2 packages were used).
</p>
<p>
    For users, this means these binaries are more robust and with less dependencies.<br/>
    (I am building with static libraries as much as possible, so no more ligcc/libstdc++6 mess).<br/>
    The Windows zip file download no longer ships with a single Carla.exe, instead please run Carla.exe inside the Carla folder, should be easy to spot.
</p>
<p>
    For developers, a nice side-effect is that we can finally tweak the behaviour of the startup executable, now allowing debug messages to be seen.
    (though you need to run it in Console/PowerShell for that)<br/>
    The libraries that allow to use and talk to Carla Host API are now provided on these builds.
</p>
<p>
    Finally, it should be possible to build Carla under msys2 on Windows now.<br/>
    I can make a quick tutorial if that is something that interests you, let me know if that is the case.
</p>
</td></tr></table>

<br/>

<table><tr><td width="40%">
<a href="/screenshots/news/carla-2.3_icons.png">
    <img src="/screenshots/news/carla-2.3_icons.png" style="max-width:100%;height:auto;" alt="icons"/>
</a>
</td><td width="60%">
<h3>Use system/desktop theme icons (non-macOS/Windows only)</h3>
<p>
    Due to popular demand, there is now an option in the experimental settings to use system/desktop theme icons.<br/>
    This will remain as experimental feature for 1 release, so we can catch potential issues in the mean time, and fix them.<br/>
</p>
<p>
    Since I do not mind the default Carla icons (quite like them actually), this is not meant for me.<br/>
    Feel free to use it and report back if you spot something weird or incorrect.
</p>
</td></tr></table>

<br/>

<h3>Other notable changes</h3>
<ul>
    <li>Allow to run CV plugins in rack mode, with CV connected to a dummy port</li>
    <li>Carla-Control no longer has return remote url option, not needed after some fixes</li>
    <li>Clear up situation with nogui and carla-osc-gui script (explanation article to come later)</li>
    <li>Disable OSC by default on macOS (needs to ask permission to use network, which may look suspicious)</li>
    <li>Do not build external plugins by default</li>
    <li>General improvement to LV2 parameter API support</li>
    <li>Many, many, many bug-fixes</li>
</ul>

<h3>Downloads</h3>
<p>
    To download Carla binaries or source code, jump on over to the <a href="https://kx.studio/Downloads" class="external free" rel="nofollow" target="_blank">KXStudio downloads section</a>.<br/>
    If you're using the KXStudio repositories, you can simply install "carla-git" (plus "carla-lv2" and "carla-vst" if you're so inclined).<br/>
    Bug reports and feature requests are welcome! Jump on over to the <a href="https://github.com/falkTX/Carla" class="external free" rel="nofollow" target="_blank">Carla's Github project</a> page for those.
</p>

<h3>Notes for users</h3>
<p>
    This was already the case for v2.2 but it is worth reiterating:<br/>
    When using JACK2, the canvas - plugin integrations requires at least JACK2 v1.9.13.<br/>
    This is because Carla relies on JACK meta-data in order to store information about each plugin/client,
    and meta-data was only added to JACK2 in version 1.9.13.<br/>
    Alternatively, you can use JACK1 instead of JACK2, which has meta-data support since a long time.<br/>
    Note that the <a href="/Repositories:Extras">"extras" KXStudio repository</a> (which provides an updated JACK2) supports both Ubuntu 18.04 and 20.04.<br/>
    The UbuntuStudio backports PPA also provides updated JACK2 packages.
</p>
<p>
    There are no official Linux binary builds for v2.3 at this point.<br/>
    Since v2.3 the official builds are automated, but I did not bother setting that up for Linux yet as it is easier to get a working Linux build compared to macOS and Windows.<br/>
    Carla v2.3 is provided in the KXStudio repositories and in many official Linux distribution repositories too anyway.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; KXStudio Monthly Report (March 2021)</span><br/>
    On <i>2021-03-31</i> by<i> falkTX</i>
</p>
<p>
    Hello all, another monthly report about the KXStudio project is here.<br/>
</p>
<p>
    If you have been paying attention to these reports, you likely already know what is going to be covered here.<br/>
    Starting late February, I began using a
    <a href="https://board.kx.studio/" target="_blank">
    public kanban-style board</a>
    in order to show/list the things I am working on and plan to do on the short and medium term.<br/>
    In a few days I will delete the "done" items related to March, so that the "done" stuff actually relates to the current month.
</p>
<p>
    Now getting to the news..<br/>
    First, in case you missed it,
    DISTRHO-Ports and PawPaw
    <a href="https://kx.studio/News/?action=view&url=distrho-ports-2021-03-15-and-pawpaw-v11-releases" target="_blank">
    had a new release</a>,
    which finalizes the custom/redistributable Vitalium fork of <a href="https://github.com/mtytel/vital" target="_blank">Vital</a>.<br/>
    While testing, a few issues on the JUCE LV2 wrapper
    <a href="https://github.com/DISTRHO/JUCE/commit/a385a08755e360b290b699abe210fbeee7d756ff" target="_blank">were</a>
    <a href="https://github.com/DISTRHO/JUCE/commit/c5757368162300ff5afa0ddb001afaed1d6826c1" target="_blank">found</a>
    <a href="https://github.com/DISTRHO/JUCE/commit/c38ea34e7cd82d50709a487fbea7a00e57abe845" target="_blank">and</a>
    <a href="https://github.com/DISTRHO/JUCE/commit/d790bc8f2cc55a50948288ddbb1ac1632bd5c92a" target="_blank">fixed</a>.<br/>
    To the point of, at least on Linux, we now have the LV2 version behaving better than the VST3 one.<br/>
    Additionally, this
    <a href="https://github.com/DISTRHO/PawPaw" target="_blank">PawPaw</a>
    release automates the macOS-universal builds, something that is being applied for Carla and jack2 next releases.
</p>
<p>
    Speaking of Carla, the
    <a href="https://kx.studio/News/?action=view&url=carla-23-rc2-is-here" target="_blank">
    2.3-RC2
    </a>
    version was tagged, with the final v2.3 release scheduled for April 15.<br/>
    The remaining things to check and fix are all very minor, so we are all good for a release anyway.
</p>
<p>
    And speaking of jack2, current plans are to fix the macOS-universal meta-data situation among other minor things where possible.<br/>
    I began fetching the zita-a2j/j2a code to work as internal client (just like jack1 does) but found a few issues while testing.<br/>
    It already works well if the internal client is not unloaded, which is good enough for the setup I had in mind for it first - using it to
    <a href="https://wiki.moddevices.com/wiki/Audio_Through_USB#Using_USB_Audio_Gadget" target="_blank">
    expose USB audio gadget mode
    </a>
    in a MOD device.<br/>
    You can already grab the code from
    <a href="https://github.com/moddevices/jack2/commits/master" target="_blank">
    moddevices jack2 fork
    </a>
    though I will try fix the last things so it is good to add in next jack2 release, expected at April 15 as well.
</p>
<p>
    There is a big
    <a href="https://github.com/DISTRHO/DPF/commits/pugl-upstream-v2" target="_blank">
    DPF overhaul
    </a>
    of its graphic handling, mostly triggered from updating to latest pugl (used for window and event handling).<br/>
    There is nothing to show just yet, as the code does not even build right now.<br/>
    I am still on the phase of reworking some core C++ code, so yeah, nothing to show yet.
</p>
<p>
    On a small note, I also patched eg-sampler (LV2 example sampler) to
    <a href="https://github.com/lv2/lv2/pull/54" target="_blank">
    be able to load non-mono files
    </a>
    and
    <a href="https://github.com/lv2/lv2/pull/55" target="_blank">
    resample the audio sample to the host sample-rate</a>.<br/>
    There was a race condition when loading new files,
    <a href="https://github.com/lv2/lv2/pull/53" target="_blank">
    which is now fixed and merged upstream</a>.<br/>
    This work was mainly done in order to have a quick usable plugin using files for MOD, but overall everyone benefits.
</p>
<p>
    Regarding packages in the KXStudio repositories, there are a few updates. Those are:
</p>
<ul>
    <li>airwindows added</i>
    <li>melmatcheq.lv2 added (reusing LibraZik package, much appreciated!)</i>
    <li>distrho-ports updated to 2021-03-15</i>
    <li>lsp-plugins updated to 1.1.29</i>
    <li>sequencer64 updated to latest git</i>
</ul>
<p>
    And that is it for now.<br/>
    If you appreciate the kind of work I do, please consider a
    <a href="https://kx.studio/Donations">donation</a>.<br/>
    Thank you in advance for your support and stay safe out there!<br/>
</p>
<p>
    PS: 2 of the package updates above appear as a result of a Patreon perk ;)
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Carla 2.3 RC2 is here!</span><br/>
    On <i>2021-03-16</i> by<i> falkTX</i>
</p>
<p>
    Hello all, this is an announcement for the next release candidate for Carla v2.3.<br/>
    Comes after a few issues were reported and fixed,
    specially important for Windows users where plugin discovery did not work.<br/>
    The audiofile and midifile plugins were also finalized, the task I was waiting to finish before publishing this RC2.
</p>
<p>
    For the changes made in v2.3 (compared to v2.2) please see the
    <a href="https://kx.studio/News/?action=view&url=carla-23-rc1-is-here" target="_blank">
    Carla v2.3-RC1
    </a>
    announcement.<br/>
    The full list of changes in v2.3-RC2 is:
</p>
<ul>
    <li>Add audio and MIDI file information as parameter outputs</li>
    <li>Make audio and MIDI file host sync optional, enabled by default</li>
    <li>Accept oga and opus audio files</li>
    <li>Fix wine bridge build for certain systems</li>
    <li>Fix (native) plugin discovery under Windows</li>
    <li>Fix plugin search listing AU as possible type on Windows</li>
    <li>Fix loading project with VST3 plugin bridges</li>
</ul>

<h3>Downloads</h3>
<p>
    To download Carla binaries or source code, jump on over to the <a href="https://kx.studio/Downloads" class="external free" rel="nofollow" target="_blank">KXStudio downloads section</a>.<br/>
    If you're using the KXStudio repositories, you can simply install "carla-git" (plus "carla-lv2" and "carla-vst" if you're so inclined).<br/>
    Bug reports and feature requests are welcome! Jump on over to the <a href="https://github.com/falkTX/Carla" class="external free" rel="nofollow" target="_blank">Carla's Github project</a> page for those.
</p>

<h3>Final note</h3>
<p>
    Just a reminder that this is a release candidate, and not the final release yet.<br/>
    There are a few known issues I want to fix before tagging v2.3 as stable, but it is very very close.<br/>
    And of course, if you appreciate the kind of work I do, please consider a
    <a href="https://kx.studio/Donations">donation</a>.<br/>
    Thank you.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; DISTRHO-Ports 2021-03-15 and PawPaw v1.1 releases</span><br/>
    On <i>2021-03-16</i> by<i> falkTX</i>
</p>
<p>
    Hello everyone, I am happy to announce a new release for <a href="https://github.com/DISTRHO/DISTRHO-Ports/releases" target="_blank">DISTRHO-Ports</a>,
    and subsequently an update to <a href="https://github.com/DISTRHO/PawPaw" target="_blank">PawPaw</a> that adds the new plugins.<br/>
    In this DISTRHO-Ports release we now have 2 new plugins: SwankyAmp and Vitalium.
</p>
<p>
    <b>SwankyAmp</b> appears as a direct port contribution from Jean Pierre Cimalando, you can find the original plugin
    <a href="https://github.com/resonantdsp/SwankyAmp" target="_blank">here</a>.
</p>
<p>
    As for <b>Vitalium</b>, this is an open-source and redistributable version of
    <a href="https://vital.audio/" target="_blank">Vital</a>,
    a spectral warping wavetable synth that has recently being made
    <a href="https://github.com/mtytel/vital" target="_blank">open-source</a>.<br/>
    We cannot use the Vital brand or connect to its vital.audio online services,
    so this is completely removed from the Vitalium source code, with an alternative name and icon.
</p>
<p>
    So with this release, I updated PawPaw so it
    <a href="https://github.com/DISTRHO/PawPaw/releases/tag/v1.1" target="_blank">now includes SwankyAmp and Vitalium</a>.<br/>
    In case you forgot or are not aware, PawPaw is a little project to build and package LV2 plugins for macOS and Windows.<br/>
    Sadly due to technical difficulties I had to drop Windows 32-bit builds, which I imagine most will not care anyway.
</p>
<p>
    So now you can enjoy 2 new plugins, no matter if you use Linux, macOS or Windows.<br/>
    (for Linux builds, please refer to your distribution of choice, or grab them from the KXStudio repositories)
</p>
<p>
    Oh, and some screenshots of course, everybody loves those.
</p>
<h6>Reaper with SwankyAmp on Windows</h6>
<p>
    <img src="/screenshots/news/pawpaw-1.1-swankyamp.png" alt="pawpaw-1.1-swankyamp"></img>
</p>

<h6>Zrythm with Vitalium on macOS</h6>
<p>
    <img src="/screenshots/news/pawpaw-1.1-vitalium.png" alt="pawpaw-1.1-vitalium"></img>
</p>

<p>
    PS: Yes, Reaper supports LV2 now. And yes, Zrythm is quickly becoming a nice DAW too.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; KXStudio Monthly Report (February 2021)</span><br/>
    On <i>2021-02-28</i> by<i> falkTX</i>
</p>
<p>
    Hello all, another "monthly" report about the KXStudio project is here.<br/>
    There is not a whole lot of stuff this time around, this being a short month and also me moving to a different place.<br/>
    But there are still some things worth reporting, so let's get to that.
</p>
<p>
    First, in case you missed it,
    <a href="https://kx.studio/News/?action=view&url=carla-23-rc1-is-here" target="_blank">
    Carla v2.3-RC1 was tagged and released</a>,
    marking the first PyQt-based project of mine to have automated release binaries.<br/>
    This is crucial for having more frequent releases, as it reduces the workload that each release requires.<br/>
    It is now basically just
    <a href="https://github.com/falkTX/Carla-Releases/commit/2d13259a24a1a397f480bf6ab56e0c51bf5039dd" target="_blank">
    setting the commit hash
    </a>
    in the
    <a href="https://github.com/falkTX/Carla-Releases" target="_blank">
    Carla-Releases
    </a>
    project, and
    <a href="https://travis-ci.org/github/falkTX/Carla-Releases/builds/760799724" target="_blank">
    wait for the builds
    </a>
    to be done.<br/>
    And speaking of Carla, a few small issues were found and already fixed, so you can expect RC2 to be out very soon.
</p>
<p>
    On non-KXStudio related news,
    <a href="https://github.com/mtytel/vital" target="_blank">
    Vital is now open-source</a>.<br/>
    Obviously I have interest on packaging it in the KXStudio repositories but,
    even though the project is released under
    <a href="https://github.com/mtytel/vital/blob/main/LICENSE" target="_blank">
    GPLv3</a>, there are restrictions on the use of the name and its trademarks.<br/>
    So the idea right now is to (im)port it over to
    <a href="https://github.com/DISTRHO/DISTRHO-Ports" target="_blank">
    DISTRHO-Ports
    </a>
    project, with a change of name to Vitalium and an alternative icon made by unfa.<br/>
    This is already on-going, with one change required which was to update the
    <a href="https://github.com/DISTRHO/JUCE" target="_blank">
    DISTRHO JUCE fork
    </a>
    to the latest upstream v6.0.7 -
    this is
    <a href="https://github.com/DISTRHO/DISTRHO-Ports/commit/9dc5ca5cb5b4211441d579bfe86317eea3957919" target="_blank">
    done now
    </a> (including rebasing all of
    <a href="https://github.com/DISTRHO/DISTRHO-Ports/tree/master/libs/juce-current/patches" target="_blank">
    DISTRHO JUCE patches</a>).<br/>
    I will write something when the porting process is over, likely doing another release of
    <a href="https://github.com/DISTRHO/PawPaw" target="_blank">
    PawPaw
    </a>
    since simply having Vitalium as cross-platform LV2 plugin is worth an update.
</p>
<p>
    Package updates in the KXStudio repositories are very few this time.<br/>
    Basically soundtracker was added (as a special request from a friend) and Helio was updated to v3.3 (which served as a way to test the updated JUCE).
</p>
<p>
    On a final note, I am experimenting with a
    <a href="https://board.kx.studio/" target="_blank">
    public kanban-style board</a>.<br/>
    Not just to organize myself a bit better, but also as a way to let everyone know what I am working on at the moment and things that I will start to do relatively soon.<br/>
    You can see what has already been done this month so far (let's pretend we are already in March) and what might be coming soon.<br/>
    I am still playing with colors and tags, but general idea on the colors at the moment is:
</p>
<ul>
    <li><strong>yellow</strong>: packaging stuff or something related to kxstudio repositories</li>
    <li><strong>orange</strong>: articles or things to write (usually releases or news)</li>
    <li><strong>green</strong>: coding task which is similar to something I did before, so "easy" to do</li>
    <li><strong>red</strong>: bug-fixes</li>
    <li><strong>blue</strong>: porting over something that already exists/was done before. involves boring, copy, paste and adjust work</li>
    <li><strong>pink</strong>: brand new projects or things to do, which usually involve learning, research, testing, etc. can take long</li>
</ul>
<p>
    I have recently been trying to get some sort of
    <a href="https://mastodon.falktx.com/web/statuses/105731231590785248" target="_blank">
    crowd-funding going
    </a>
    (to help in terms of financial support).<br/>
    If you are a sponsor/subscriber, you might have felt that these monthly updates are too spread out and too few.<br/>
    So a public work-tracking board seems like a nice middle-ground, a way to indicate what is happening on a specific moment without having to wait for monthly reports or big splashy news.<br/>
    For now you can access the board at <a href="https://board.kx.studio/" target="_blank">board.kx.studio</a>; later on I will see if it can be embed into the main website.
</p>
<p>
    If you see anything you like in there or just simply appreciate the kind of work I do, please consider a
    <a href="https://kx.studio/Donations">donation</a>.<br/>
    I am not taking feature requests at the moment, as there is quite a few things in the backlog already, but once most of the
    <a href="https://github.com/DISTRHO/DPF" target="_blank">DPF</a>-related
    work is complete, I will revisit this idea.<br/>
    Thank you in advance for your support, stay safe out there!
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Carla 2.3 RC1 is here!</span><br/>
    On <i>2021-02-16</i> by<i> falkTX</i>
</p>
<p>
    Hello again everyone, a somewhat small but important Carla update is here!<br/>
    As there were many changes behind the scenes (specially for Windows builds) I am tagging it as Release Candidate for now.
</p>
<p>
    So this is the announcement of the first release candidate of Carla version 2.3.<br/>
    Carla is a fully-featured cross-platform audio plugin host, which itself can also run as a plugin (LV2 and VST2).<br/>
    It is a project slowly growing and maturing for over 10 years now!
</p>
<p>
    This release is the first step for automated releases of Carla, and
    <a href="https://github.com/falkTX/Cadence" target="_blank">other</a>
    <a href="https://github.com/falkTX/Cadence-Tools" target="_blank">PyQt</a>
    <a href="https://github.com/falkTX/Catia" target="_blank">projects</a>.
    Might not seem like big news, but it is!<br/>
    I don't make Carla releases very often as it tends to consume a lot of time,
    besides writing the release announcement (like this one), there is a lot of manual building and uploading.<br/>
    The situation got worse with 1 more build type for macOS universal support..<br/>
    This makes it more difficult to do quick bug-fixes than it should, and thus they tend to not happen much.<br/>
    There are still no automated Linux builds though, I will take care of that at a later point.<br/>
    In any case, I always keep the Carla package on the KXStudio repositories up to date, and ArchLinux is usually very quick on the updates too, so for Linux users this is not that big of a deal.
</p>
<p>
    With that said, let's go through some of this release highlights.
</p>

<table><tr><td width="40%">
<a href="/screenshots/news/carla-2.3_macos-universal.png">
    <img src="/screenshots/news/carla-2.3_macos-universal.png" style="max-width:100%;height:auto;" alt="macos-universal"/>
</a>
</td><td width="60%">
<h3>macOS arm64/universal build support</h3>
<p>
    Starting with v2.3, Carla natively supports the new macOS arm64 architecture, used in the new M1 hardware models.<br/>
    The Carla macOS universal build supports x86_64 and arm64 architectures at the same time, and should run on anything 10.12 or newer.
</p>
<p>
    As Carla has support for plugin bridges (even across architectures), I took care to make sure that the arm64 version can load x86_64 plugins.<br/>
    When a plugin fails to load in a specific way, Carla will try to load it again but now in x86_64 mode.<br/>
    This is currently working for VST2 and VST3 plugins.
</p>
<p>
    Additionally, for something that kept bothering me a lot, Carla will automatically remove plugins from macOS quarentine before loading them.<br/>
    This is not possible to do for AudioUnits as we do not have the full path to the plugin binary, but valid for all other formats.<br/>
    No more security theatre shenanigans here! :)
</p>
</td></tr></table>

<br/>

<table><tr><td width="40%">
<a href="/screenshots/news/carla-2.3_audiofile.png">
    <img src="/screenshots/news/carla-2.3_audiofile.png" style="max-width:100%;height:auto;" alt="audiofile"/>
</a>
</td><td width="60%">
<h3>General improvements to AudioFile plugin</h3>
<p>
    The AudioFile internal plugin received some deserved attention this time around.<br/>
    Besides basically reworking how its disk-streaming functionality (more robust and much less CPU usage),<br/>
    it finally can do resampling so it will sound correctly no matter the sample rate.<br/>
    Additionally mp3 support was added via
    <a href="https://github.com/mackron/dr_libs/blob/master/dr_mp3.h" target="_blank">dr_mp3</a>,
    as
    <a href="http://www.mega-nerd.com/libsndfile/" target="_blank">libsndfile</a>
    used by it does not yet officially support it.
</p>
<p>
    Both Audio and MIDI file plugins are now exposed as LV2 plugins, allowing to load and use these plugins outside of Carla.<br/>
    It supports file parameter plus patch Get/Set with State mapPath as expected for these kinds of plugins.<br/>
    The experimental "inline-display" of the AudioFile is also exposed as an LV2 feature.
</p>
</td></tr></table>

<br/>

<table><tr><td width="40%">
<a href="/screenshots/news/carla-2.3_windows.png">
    <img src="/screenshots/news/carla-2.3_windows.png" style="max-width:100%;height:auto;" alt="windows"/>
</a>
</td><td width="60%">
<h3>Reworked Windows builds</h3>
<p>
    The infrastructure used to build Windows binaries is now through
    <a href="https://github.com/DISTRHO/PawPaw" target="_blank">PawPaw</a>,
    as done with
    <a href="https://github.com/jackaudio/jack2-releases" target="_blank">JACK2</a>
    already.<br/>
    With this, I have control over the whole toolchain and libraries that are used in Carla Windows binaries (previously msys2 packages were used).
</p>
<p>
    For users, this means these binaries are more robust and with less dependencies.<br/>
    (I am building with static libraries as much as possible, so no more ligcc/libstdc++6 mess).<br/>
    The Windows zip file download no longer ships with a single Carla.exe, instead please run Carla.exe inside the Carla folder, should be easy to spot.
</p>
<p>
    For developers, a nice side-effect is that we can finally tweak the behaviour of the startup executable, now allowing debug messages to be seen.
    (though you need to run it in Console/PowerShell for that)<br/>
    The libraries that allow to use and talk to Carla Host API are now provided on these builds.
</p>
<p>
    Finally, it should be possible to build Carla under msys2 on Windows now.<br/>
    I can make a quick tutorial if that is something that interests you, let me know if that is the case.
</p>
</td></tr></table>

<br/>

<table><tr><td width="40%">
<a href="/screenshots/news/carla-2.3_icons.png">
    <img src="/screenshots/news/carla-2.3_icons.png" style="max-width:100%;height:auto;" alt="icons"/>
</a>
</td><td width="60%">
<h3>Use system/desktop theme icons (non-macOS/Windows only)</h3>
<p>
    Due to popular demand, there is now an option in the experimental settings to use system/desktop theme icons.<br/>
    This will remain as experimental feature for 1 release, so we can catch potential issues in the mean time, and fix them.<br/>
</p>
<p>
    Since I do not mind the default Carla icons (quite like them actually), this is not meant for me.<br/>
    Feel free to use it and report back if you spot something weird or incorrect.
</p>
</td></tr></table>

<br/>

<h3>Other notable changes</h3>
<ul>
    <li>Allow to run CV plugins in rack mode, with CV connected to a dummy port</li>
    <li>Carla-Control no longer has return remote url option, no longer needed after some fixes</li>
    <li>Clear up situation with nogui and carla-osc-gui script (explanation article to come later)</li>
    <li>Disable OSC by default on macos (needs to ask permission to use network, which may look suspicious)</li>
    <li>Do not build external plugins by default</li>
    <li>General improvement to LV2 parameter API support</li>
    <li>Many, many bug-fixes (not listed here, see the
    <a href="https://github.com/falkTX/Carla/commits/main?after=713c78330da410a6feacadd6e5a32a8408b212ff+0" target="_blank">
    git commit history
    </a>
    for the raw changes, including bug-fixes)</li>
</ul>

<h3>Notes for users</h3>
<p>
    There are no binary releases for Linux at the moment, and the old Windows 32bit No-SSE builds are gone.<br/>
    On Linux, use the packages from your distribution or ask the package maintainer to update.
</p>
<p>
    The macOS and Windows binaries are not signed/notarized.<br/>
    Carla-Control on macOS M1 fails to run natively, but is okay under rosetta2.
</p>

<h3>Downloads</h3>
<p>
    To download Carla binaries or source code, jump on over to the <a href="https://kx.studio/Downloads" class="external free" rel="nofollow" target="_blank">KXStudio downloads section</a>.<br/>
    If you're using the KXStudio repositories, you can simply install "carla-git" (plus "carla-lv2" and "carla-vst" if you're so inclined).<br/>
    Bug reports and feature requests are welcome! Jump on over to the <a href="https://github.com/falkTX/Carla" class="external free" rel="nofollow" target="_blank">Carla's Github project</a> page for those.
</p>

<h3>Final note</h3>
<p>
    With finally the Carla release out of the way, I will start work on DPF very soon, as mentioned on the last monthly report.<br/>
    If you appreciate the kind of work I do here, please consider a
    <a href="https://kx.studio/Donations">donation</a>.<br/>
    You can help to keep these projects alive and enthusiasm and motivation high by giving your support.<br/>
    Thank you.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; KXStudio Monthly Report (January 2021)</span><br/>
    On <i>2021-01-31</i> by<i> falkTX</i>
</p>
<p>
    Hello all, another monthly report about the KXStudio project is here.<br/>
    Last month I completely forgot to write a report, with the end of year and preparations for all the releases.<br/>
    Speaking of releases...
</p>
<p>
    A few things were released just 2 weeks ago.<br/>

    From a
    <a href="https://kx.studio/News/?action=view&amp;url=a-small-set-of-plugin-updates" target="_blank">
    quick update to DISTRHO/DPF-related
    </a> plugins,
    to announcing
    <a href="https://kx.studio/News/?action=view&url=announcing-pawpaw-cross-platform-lv2-ports-for-macos-and-windows" target="_blank">PawPaw</a>
    for cross-platform LV2 plugin builds.<br/>

    I had an idea to release
    <a href="https://github.com/falkTX/Carla" target="_blank">Carla</a>
    v2.3 also at the same time, but a few things are still not ready.
</p>
<p>
    And speaking of Carla now,
    <a href="https://github.com/DISTRHO/PawPaw/blob/master/bootstrap-carla.sh" target="_blank">good progress has been made</a>
    to setup automated builds, at least for macOS and Windows
    (as those are the more annoying to build for, compared to Linux or BSD).<br/>
    The dreadful issue of
    <a href="https://github.com/falkTX/Carla/issues/1334" target="_blank">DLL</a>
    <a href="https://github.com/falkTX/Carla/issues/1273" target="_blank">hell</a>
    causing Carla not to start on Windows
    <a href="https://github.com/falkTX/Carla/issues/1334#issuecomment-770314420" target="_blank">seems to be fixed</a>
    with this new updated build setup.<br/>
    There are a few things in progress that I plan to finish before calling it final:
</p>
<ul>
    <li>macOS arm64 build loading Intel 64bit plugins (already working for VST2, but not VST3)</li>
    <li>revised and rechecked LV2 patch/parameter support (seems good to me, just needs more testing)</li>
    <li>expose/export the internal audio and midi file players as lv2 plugins (almost there, some bugs still present)</li>
    <li>allow to use desktop theme icons (mostly finished, just a few dialogs need to be adjusted)</li>
    <li>translations (but as other things take priority for me, this might skip v2.3)</li>
</ul>
<p>
    I am not mentioning here things that are already completed, it is just to give you an overview of what is left.<br/>
    Plan was to have it finished by the end of January, but obviously didn't happen, so we can say "coming soon", again. :P
</p>
<p>
    Once more Carla stuff is finished and mostly only testing is left, I will begin some very much needed work and attention for
    <a href="https://github.com/DISTRHO/DPF" target="_blank">DPF</a>.<br/>
    DPF is using a very old
    <a href="https://gitlab.com/lv2/pugl/" target="_blank">pugl</a>
    version, modified along the way but mostly matching the version used in
    <a href="https://github.com/x42/robtk/tree/master/pugl" target="_blank">x42-plugins</a>.<br/>
    pugl API got revised and improved so much that feels worth the update.<br/>
    I
    <a href="https://github.com/DISTRHO/DPF/commits/pugl-upstream" target="_blank">started this already</a>,
    but had to dedicate my attention to other things in the mean time.<br/>
    Target is to not only update pugl, but an overall cleanup and minor reworks of the API where suitable/needed.<br/>
    By end of next month I will try to give a summarized report of the update status.
</p>
<p>
    Regarding packages in the KXStudio repositories, finally there has been some updates. Those are:
</p>
<ul>
    <li>die-plugins added</i>
    <li>adlplug updated to 1.0.2</i>
    <li>dpf-plugins updated to 1.4</i>
    <li>distrho-ports updated to 2021-01-14</i>
    <li>drumgizmo updated to 0.9.19</i>
    <li>lsp-plugins updated to 1.1.28</i>
    <li>new-session-manager updated to 1.5.0</i>
    <li>x42-plugins updated to 20210114</i>
    <li>zam-plugins updated to 3.14</i>
    <li>cmt fixed (symbol visibility issue)</i>
    <li>setbfree small fix (removed unused b_conv vst)</i>
    <li>whysynth fixed for newer distros</i>
</ul>
<p>
    That is all for now, stay safe out there.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Announcing PawPaw: cross-platform LV2 ports for macOS and Windows</span><br/>
    On <i>2021-01-15</i> by<i> falkTX</i>
</p>
<p>
    <a href="https://github.com/DISTRHO/PawPaw" target="_blank">PawPaw</a>
    is an open-source project that builds and packages <b>cross-platform LV2 audio plugins</b> (among other things, but let's focus on this now).<br/>
</p>
<p>
    It was created out of the need of many open-source developers to easily build their stuff for macOS and Windows,
    where usually dependencies are involved which need to be built manually.<br/>
    In order to make audio plugins self-contained, these dependencies/libraries need to be built statically,
    which most packaging projects do not do.<br/>
    Also, most open-source audio plugin projects do not have binaries for macOS or Windows,
    making it very difficult for users in these platforms to enjoy them.<br/>
</p>
<p>
    That last part is crucial.<br/>
    While on Linux LV2 is king, with so many plugins released as LV2, the same is not true for other platforms.<br/>
    I want to change that, so that the usual excuse "but there are no plugins, we won't bother with LV2" of audio developers can no longer be used.<br/>
    It is the typical circular-dependency problem. There are no hosts because there are no plugins and vice-versa.<br/>
    Hopefully with a big set of plugins, the situation will change.
</p>
<p>
    For the first release of PawPaw we have the following LV2 plugins: (note some of these are big collections of many plugins themselves)
</p>
<ul>
    <li>abgate</li>
    <li>artyfx</li>
    <li>blop</li>
    <li>caps</li>
    <li>die-plugins</li>
    <li>distrho-ports (arctican, dexed, drowaudio, klangfalter, luftikus, obxd, pitched-delay, refine, tal, temper, vex, wolpertinger)</li>
    <li>dpf-plugins (glBars, kars, max-gen, mini-series, mverb, ndc-plugs, nekobi)</li>
    <li>fomp</li>
    <li>mda</li>
</ul>
<p>
    Every single plugin has automated meta-data validation and runtime testing to make sure they work correctly.<br/>
    The quality of the plugins depends on the respective developer and project of course, but they should be safe from crashes.
</p>
<p>
    A big question now is "how can I use them?".<br/>
    At this moment, from what I am aware, only Ardour/ Mixbus and Carla support LV2 plugins on these platforms.<br/>
    Some applications like Audacity, Kushview Element and Mixxx support LV2, but usually only in Linux builds.<br/>
    Carla works as a VST2 plugin, so you can use it as a way to bridge these to regular hosts, but obviously not ideal.<br/>
    But hey, one step at a time. We have a few more LV2 plugins now on these platforms, and moving forward the list is only going to grow.
</p>

<h2>Screenshots</h2>
<h6>Ardour + Windows</h6>
<p>
    <img src="/screenshots/news/pawpaw-1.0-win.png" alt="pawpaw-1.0-win"></img>
</p>

<h6>Mixxx + macOS, loading ArtyFX plugins</h6>
<p>
    <img src="/screenshots/news/pawpaw-1.0-mixxx.png" alt="pawpaw-1.0-mixxx"></img>
</p>

<h2>Downloads</h2>
<p>
    You can find the macOS and Windows installers at
      <a href="https://github.com/DISTRHO/PawPaw/releases" target="_blank">
          https://github.com/DISTRHO/PawPaw/releases</a>.<br/>
    For macOS, 10.12 is required. These are universal builds that already support x64 and arm64 combined.<br/>
    For Windows, Windows 7 or superior is recommended, and a CPU capable of doing SSE2 operations is required.
</p>

<h2>Future plans</h2>
<p>
    For the future, I plan to rework the DISTRHO website so it contains all these details.<br/>
    Mainly so that it is a better overall presentation.<br/>
    And of course more plugins, though pull-requests are also very welcome for those.<br/>
    Carla is slowly in the process of using PawPaw for automated release builds, more on that at a later time.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; A small set of plugin updates</span><br/>
    On <i>2021-01-15</i> by<i> falkTX</i>
</p>
<p>
    Hello hello, it is release day again!<br/>
    Keeping up with the cool people, here is a set of plugin updates for the
      <a href="https://libreav.org/article/quarterly-release-pact" target="_blank">Quarterly Release Pact</a>.<br/>

    Do note that these are all source-only releases. For binaries, use your Linux distribution packages or the
    <a href="https://github.com/DISTRHO/PawPaw" target="_blank">PawPaw project</a>.<br/>
    With that said, let's begin...
</p>
<h4><a href="https://github.com/DISTRHO/DISTRHO-Ports/releases/tag/2021-01-15" target="_blank">DISTRHO-Ports 2021-01-14</a></h4>
<p>
    DISTRHO-Ports is a set of GNU/Linux and LV2 ports, imported into the codebase for easy packaging, maintaince and all that.<br/>
    This is a bug-fix release, getting the project ready for cross-platform builds and automated validation/testing.<br/>
    Changelog:
</p>
<ul>
    <li>Fix out of bounds buffer write in drowaudio-reverb (leading to memory corruption and/or crashes)</li>
    <li>Fix lv2 export preset meta-data validation</li>
    <li>Fix lv2 ttl generation when cross-compiling (e.g. using mingw and wine within linux)</li>
    <li>Fix exported symbols</li>
    <li>Fix build/compatibility with macOS 11 / arm64</li>
</ul>
</p>

<h4><a href="https://github.com/DISTRHO/DIE-Plugins/releases/tag/v1.1" target="_blank">DIE-Plugins v1.1</a></h4>
<p>
    DIE-Plugins is a collection of plugins imported into the DISTRHO project for easy packaging.<br/>
    Currently has only Ardour (Community Effect) plugins, mainly so you no longer need to build the entire Ardour codebase to get these plugins.<br/>
    Changelog:
</p>
<ul>
    <li>Fix a-fluidsynth port names</li>
    <li>Sync with upstream, now features are listed in ttl thus passing plugin checks/validation</li>
    <li>Use -fopenmp for building internal fluidsynth (where possible)</li>
</li>
</ul>
</p>

<h4><a href="https://github.com/DISTRHO/DPF-Plugins/releases/tag/v1.4" target="_blank">DPF-Plugins v1.4</a></h4>
<p>
    DPF-Plugins is a collection of DPF-based plugins, including Kars, MVerb and Nekobi.<br/>
    This is yet another bug-fix release, tagging a release before a big DPF overhaul planned for next month.<br/>
    Changelog:
</p>
<p><b>DPF:</b></p>
<ul>
    <li>Auto-detect compiler target, fixing as-is build with ARM systems</li>
    <li>Allow to use EXE_WRAPPER as makefile option, to help cross-compilation</li>
    <li>Fix build with headers in custom path</li>
    <li>Fix "make install" for macOS and Windows</li>
    <li>Fix exported LV2 metadata to pass checks/validation</li>
    <li>Make mouse-wheel delta independent of window size</li>
</ul>
<p><b>Kars:</b></p>
<ul>
    <li>Fix audio buffer reuse, causing bad audio in some hosts</li>
</ul>
<p><b>Nekobi:</b></p>
<ul>
    <li>Set default MIDI CC for all parameters</li>
</ul>
</p>
<p>
    More releases coming soon, stay tuned!
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Another DISTRHO-Ports update</span><br/>
    On <i>2020-12-28</i> by<i> falkTX</i>
</p>
<p>
    Hello again, another release of the
    <a href="https://github.com/DISTRHO/DISTRHO-Ports" target="_blank">DISTRHO-Ports</a> project is here.<br/>
    DISTRHO is an open-source project with the goal of making cross-platform audio plugins and GNU/Linux + LV2 ports.<br/>
    This release relates to the GNU/Linux and LV2 ports.
</p>
<p>
    Just like last time, this is yet again a more packager-focused release rather than user-focused.<br/>
    The biggest changes this time relate to bringing
    <a href="https://github.com/DISTRHO/JUCE" target="_blank">DISTRHO's JUCE fork</a>
    up to date with upstream, together with updating the
    <a href="https://github.com/DISTRHO/DISTRHO-Ports/tree/master/libs/juce-current/source/modules/juce_audio_plugin_client/LV2" target="_blank">LV2 wrapper</a>.<br/>
    Additionally, macOS and Windows support was fixed and tested to work, at least for LV2 plugins.<br/>
    (most of these plugins already have VST2 or AU for those 2 platforms, so the focus in on LV2 here)
</p>
<p>
    A new plugin was added,
    <a href="https://github.com/Chowdhury-DSP/CHOW" target="_blank">CHOW</a>,
    but mostly only because I required a fresh plugin to test the new JUCE codebase.<br/>
    Do note that new plugins can now build as LV2, VST2 and VST3 for GNU/Linux, which is nice to see.<br/>
    I want to create a little article/tutorial explaining how to port existing plugins into this project, but that will come at a later date.<br/>
</p>
<p>
    For now, the intention is to have all the ground-work needed for fresh plugins and LV2 ports.<br/>
    This ties up nicely with the upcoming
    <a href="https://github.com/DISTRHO/PawPaw" target="_blank">PawPaw</a>
    project, as we will soon have all these ports working as LV2 in macOS and Windows.<br/>
</p>
<p>
    Here is a quick screenshot I just took on macOS, Ardour loading a couple LV2 versions of DISTRHO-Ports.<br/>
    PS: This is a arm64/M1 build.<br/><br/>
    <img src="/screenshots/news/distrho-ports-lv2-macos.png" alt="distrho-ports-lv2-macos"></img>
</p>
<p>
    Because everyone loves changelogs, here it is for the full changes since last release 5 months ago:
</p>
<ul>
    <li>Add CHOW plugin (used to test updated JUCE)</li>
    <li>Include new and legacy JUCE in source code (legacy JUCE will only receive bug-fixes)</li>
    <li>Rebase DISTRHO-Ports patches against JUCE6 codebase, available in
        <a href="https://github.com/DISTRHO/DISTRHO-Ports/tree/master/libs/juce-current/patches" target="_blank">libs/juce-current/patches</a></li>
    <li>Fix LV2 wrapper to build against latest JUCE</li>
    <li>Fix build for macOS, including universal builds</li>
    <li>Fix build for Windows (using mingw)</li>
    <li>General cleanup to build system</li>
</ul>
<p>
    There are no pre-compiled binaries for this release, though the plugins are fully up-to-date in the KXStudio repositories.<br/>
    You can find this 2020-12-27 release at <a href="https://github.com/DISTRHO/DISTRHO-Ports/releases/tag/2020-07-14" target="_blank">
          github.com/DISTRHO/DISTRHO-Ports/releases</a>.<br/>
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; DIE-Plugins v1.0 released</span><br/>
    On <i>2020-12-25</i> by<i> falkTX</i>
</p>
<p>
    Hello everyone, I would like to announce a new project: DIE-Plugins.<br/>
    This is a collection of plugins imported into the DISTRHO project for easy packaging.<br/>
</p>
<p>
    "DIE" stands for DISTRHO Imported Effect.<br/>
    It is a play on words from the first imported plugins, "ACE", from the Ardour project.<br/>
    These are LV2 plugins only. License is the same as the original plugins, so GPLv2+.<br/>
    They are simply to die for ;)
</p>
<p>
    Now, on a serious note, this project was created when I was looking to package the Ardour built-in plugins (a.k.a. Ardour Community Effect) for
    <a href="https://pedalboards.moddevices.com/plugins" target="_blank">MOD</a>
    and the (still to be announced) cross-platform LV2 plugin project
    <a href="https://github.com/DISTRHO/PawPaw" target="_blank">PawPaw</a>.<br/>
    The biggest difficulty was having to build the entire Ardour codebase to get these plugins.<br/>
    While it seems possible to force the build of only the plugins, the build system still expects all sort of libraries for the main Ardour codebase.<br/>
    Since I am quite comfortable setting up custom Makefiles for quick little projects, that is how it started...
</p>
<p>
    Worth noting that all imported plugins have their bundle and URIs renamed, in order to make them compatible with the originals.<br/>
    The source code fetching and patching is also scripted, so it is easy to keep in sync with upstream.
</p>

<h3>Downloads</h3>
<p>
    The source code plus issue tracker is hosted at
      <a href="https://github.com/DISTRHO/DIE-Plugins" target="_blank">
          https://github.com/DISTRHO/DIE-Plugins</a>.<br/>
    Only glib2.0 and sndfile are required to build.<br/>
    If you have the KXStudio repositories enabled, you can install these with the package name "die-plugins".<br/>
    They are not available in binary form anywhere else at the moment, as the project is brand new.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; KXStudio Monthly Report (November 2020)</span><br/>
    On <i>2020-11-30</i> by<i> falkTX</i>
</p>
<p>
    Hello all, another "monthly" report about the KXStudio project is here.<br/>
    There has not been once since July and even though there are not many new details to share, I did not want to let another month pass without one.
</p>
<p>
    The main reason for the delay on writing is that my attention has been mostly focused on getting the
    <a href="https://www.kickstarter.com/projects/modduo/mod-dwarf" target="_blank">
    MOD Dwarf
    </a>
    software all ready for release, including new LV2 features on the MOD software stack.<br/>
    This usually does not affect me working on other open-source stuff, but the race to get everything ready on time drains more energy than usual.<br/>
    In order to not stress myself out, progress on other fronts has been a bit slower, though stuff like Carla 2.2 final release still happened.<br/>
    Some of this MOD work involved understanding the LV2 spec better and fixing or making new test plugins, so this will be useful outside the MOD platform too.<br/>
    (I already learned that the way Carla handles some LV2 features is wrong and started some work towards fixing that)
</p>
<p>
    Last month (October 2020) marks
    <a href="https://jackaudio.org/news/2020/10/15/jack2-v1915-release-and-current-status.html" target="_blank">
    the first release of JACK2
    </a>
    with me as maintainer that provides
    <a href="https://jackaudio.org/downloads/" target="_blank">
    macOS and Windows binaries</a>.<br/>
    I have been setting up automated builds for a few open-source projects for a bit of time now, and that is now re-used for JACK2.<br/>
    There is progress to make this usable for cross-platform plugins, which I was hoping to have a release for by now, but the travis-ci is having some issues against homebrew...<br/>
    Whenever that works again, I will make the official announcement of that
    <a href="https://github.com/DISTRHO/PawPaw" target="_blank">
    new project</a>.<br/>
    Later on this will be used for automating the builds of my PyQt projects like Carla and Catia.
</p>
<p>
    On the Cadence project, I began the work for splitting it into smaller, easier to maintain projects.<br/>
    The idea is to allow Catia (the patchbay-only application) and the small tools to be packaged and maintained separately.<br/>
    This will allow to have new releases of Catia, Cadence and its tools all separately.<br/>
    There is only 1 nasty bug to fix in Catia use of JACK2 meta-data before an official release is made, but it is not an easy one, so I am leaving it for later.<br/>
    Likely no public release on this until next year.
</p>
<p>
    And that is it for now.<br/>
    Usually I would write about the KXStudio repositories package update list, but there really has not been much happening there at all..<br/>
    Christmas holidays are not too far off, which will bring some time to try to get a few more things out.<br/>
    So expect some proper news again after that.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Carla Plugin Host v2.2 is finally here</span><br/>
    On <i>2020-10-12</i> by<i> falkTX</i>
</p>
<p>
    Hello everyone, this is the announcement of the 2.2 version of the Carla Plugin Host.<br/>
    If you do not know, Carla is a fully-featured cross-platform audio plugin host, which can also run as a plugin.
</p>
<p>
    This release announcement comes quite a few days after it was initially tagged and builds uploaded.<br/>
    I moved to a different place, everything got a bit delayed with that, and also me getting a small but well-needed break.<br/>
    Anyway, back to the topic at hand...
</p>
<p>
    Contrary to previous releases, there were not many graphical changes this time, but lots of stuff under the hood.<br/>
    One very important note for developers is that the "native" API to access carla as plugin (as used by LMMS)
    is still ABI and API-wise backwards compatible with 2.0, but the ABI and API of Carla as a library is not.<br/>
    This is because all host functions now have a "handle" prefix, so they can be reused for standalone, plugin and other variants.
</p>
<p>
    <b>Special thanks to everyone that did testing during the release candidate phase</b>, some with very complex setups! (as seen below)<br/>
    <a href="/screenshots/news/carla-2.2_usage.png">
        <img src="/screenshots/news/carla-2.2_usage.png" style="max-width:100%;height:auto;" alt="settings"/>
    </a>
</p>
<p>
    Now with that said, let's go through what's new, first the bigger changes and smaller stuff for last.
</p>

<table><tr><td width="40%">
<a href="/screenshots/news/carla-2.2_multi-client.png">
    <img src="/screenshots/news/carla-2.2_multi-client.png" style="max-width:100%;height:auto;" alt="settings"/>
</a>
</td><td width="60%">
<h3>Multi-Client + multi-instance improvements</h3>
<p>
    In order to allow multiple instances of Carla to work without conflicts,
    proper JACK multi-client multi-instance support was implemented.<br/>
    What this means is that you can have a name prefix for all plugins when in JACK multi-client mode,
    so that it is easier to understand where a plugin belongs to.<br/>
</p>
<p>
    Starting with v2.2, extra Carla instances will get a dedicated JACK client name suffix.<br/>
    On projects created with v2.2 and above, Carla will know which saved connections belong to which plugins,
    making it possible to load a session correctly where multiple Carla instances are involved.
</p>
<p>
    As a way to make this easier to manage and control, a new command-line argument was added, "--cnprefix=...".<br/>
    So now you can have a dedicated Carla instance that has its created JACK clients more globally recognisable.
</p>
<p>
    Also, when Carla runs under NSM, the JACK client name prefix is set automatically (coming from NSM).<br/>
    This is not enabled when loading pre-2.2 projects though, in order to keep backwards compatibility.
</p>
</td></tr></table>

<br/>

<table><tr><td width="40%">
<a href="/screenshots/news/carla-2.2_linux-vst3.png">
    <img src="/screenshots/news/carla-2.2_linux-vst3.png" style="max-width:100%;height:auto;" alt="settings"/>
</a>
</td><td width="60%">
<h3>Linux VST3 plugin support</h3>
<p>
    As new VST2 plugins can no longer be officially licensed and VST2 is very, very, very slowing being phased out, it is important to have VST3 support.</br>
</p>
<p>
    So now you can now scan and load Linux VST3 plugins under Carla.</br>
    It is no longer limited to macOS and Windows.</br>
</p>
<p>
    Worth noting is that this is not a custom implementation, but leveraging JUCE VST3 host support on Linux.</br>
    It recently got supported as part of their JUCE6 update.</br>
    There are no plans for a custom implementation at this point.
</p>
</td></tr></table>

<br/>

<h3>Small UI/UX improvements all around</h3>

<div style="display:flex;align-content:baseline;text-align:center;flex-wrap:wrap;">
    <table style="width:420px;">
    <tr><td>
    <a href="/screenshots/news/carla-2.2_uiux-keyboard.png">
        <img src="/screenshots/news/carla-2.2_uiux-keyboard.png" style="max-width:100%;height:auto;" alt="settings"/>
    </a>
    </td></tr>
    <tr><td>
    <p>
        The built-in keyboard right-click menu got a bit better.<br/>
        Everything is presented in a single menu, no more sub-menus are used.
    </p>
    </td></tr>
    </table>

    <table style="width:420px;">
    <tr><td>
    <a href="/screenshots/news/carla-2.2_uiux-mappedparam.png">
        <img src="/screenshots/news/carla-2.2_uiux-mappedparam.png" style="max-width:100%;height:auto;" alt="settings"/>
    </a>
    </td></tr>
    <tr><td>
    <p>
        The plugin built-in editor dialog now shows the currently mapped parameter type+value directly.<br/>
        No more clicking around needed to find out what the parameter is mapped to.
    </p>
    </td></tr>
    </table>

    <table style="width:420px;">
    <tr><td>
    <a href="/screenshots/news/carla-2.2_uiux-midilearn.png">
        <img src="/screenshots/news/carla-2.2_uiux-midilearn.png" style="max-width:100%;height:auto;" alt="settings"/>
    </a>
    </td></tr>
    <tr><td>
    <p>
        MIDI learn implemented, triggered via parameter mapping menu.<br/>
        Note that this is per plugin, not global, due to how Carla handles each plugin individually.
    </p>
    </td></tr>
    </table>

    <div style="width:390px;">
        <h5>Other "quality of life" improvements:</h5>
        <ul style="text-align:left;">
        <li>Added a 12400x9600 canvas size</li>
        <li>Added a 2x and 4x canvas image export mode</li>
        <li>Added a menu action to save current Carla canvas as image in the clipboard</li>
        <li>Added "Send MIDI notes" option to plugin built-in editor dialog</li>
        <li>Canvas positions are now always saved and restored, including in the plugin version</li>
        <li>Canvas positions are kept in sync across multiple Carla JACK instances and even Carla-Control</li>
        <li>Built-in plugin edit dialog tab state is kept when parameters are reloaded</li>
        <li>Implemented NSM "optional-gui"</li>
        <li>Plugin custom GUI Window title changes dynamically when renamed</li>
        <li>Package macOS plugin version, making Carla-Plugin usable with macOS 10.15</li>
        </ul>
    </div>
</div>

<br/>

<h3>Other notable changes</h3>
<ul>
    <li>Added new xycontroller plugin</li>
    <li>Added a "carla-osc-gui" script that starts a Carla instance in the background and connects to it using OSC.<br/>
        Closing the GUI does not close the engine, and it can be run again to reconnect later on.
    </li>
    <li>Always use maximum amount of channels for VST2 plugins</li>
    <li>Better handle the case of JACK server stop (or killed)</li>
    <li>Better implementation of LV2 state path, now saving files in the same directory as the Carla project</li>
    <li>Changed the way plugins are deleted, so they are now safely deleted only when no longer in use</li>
    <li>Implement MIDI CC and CV source parameter changes for bridges</li>
    <li>Improve the (still experimental) JACK-apps-as-plugins implementation,
        now mapping show/hide gui to NSM commands, sending arbitrary MIDI events and making it work on more systems</li>
    <li>Increase max value of the internal LFO plugin, so we can get reeeeeeeal slow</li>
    <li>Raise limit of plugins that can be loaded (512 default, 64 in rack)</li>
    <li>Tweaks for automatically converting internal Patchbay mode projects in JACK multi-client mode and vice-versa</li>
    <li>Working HaikuOS build, but no audio support yet</li>
</ul>
<p>
    Many other bug-fixes and small under-the-hood improvements (too many to list here).<br/>
    See the
    <a href="https://github.com/falkTX/Carla/commits/master?after=783352477fec5f135f2040afd09257d68211ca73+8" target="_blank">
      git log</a>
    for the full list of changes.
</p>

<h3>Notes for users</h3>
<p>
    When using JACK, the newly added features around the canvas require at least JACK v1.9.13.<br/>
    This is because Carla relies on JACK meta-data in order to store information about each plugin/client,
    and meta-data was only added to JACK2 in version 1.9.13.<br/>
    Alternatively, you can use JACK1 instead of JACK2, which has meta-data support since a long time.<br/>
    Note that the <a href="/Repositories:Extras">"extras" KXStudio repository</a> (which provides an updated JACK2) now supports Ubuntu 20.04 along-side 18.04.
</p>
<p>
    The code for scanning plugins had a little rework yet again, making some internal data structures change.<br/>
    Because of this, a full rescan of your plugins is needed after the update.<br/>
    This should fix previously missing plugins that happened in v2.1.<br/>
</p>
<p>
    The official Linux binary build does not provide native Linux-VST3 support.<br/>
    Packages from regular Linux distributions do not have this issue.
</p>

<h3>Downloads</h3>
<p>
    To download Carla binaries or source code, jump on over to the <a href="https://kx.studio/Downloads" class="external free" rel="nofollow" target="_blank">KXStudio downloads section</a>.<br/>
    If you're using the KXStudio repositories, you can simply install "carla-git" (plus "carla-lv2" and "carla-vst" if you're so inclined).<br/>
    Bug reports and feature requests are welcome! Jump on over to the <a href="https://github.com/falkTX/Carla" class="external free" rel="nofollow" target="_blank">Carla's Github project</a> page for those.
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Carla 2.2 RC2 is here!</span><br/>
    On <i>2020-09-07</i> by<i> falkTX</i>
</p>
<p>
    Hello everyone, this is an announcement for the next release candidate for Carla v2.2.<br/>
    Comes after a few issues were reported and fixed, and as an exception a new plugin is added.
</p>
<p>
    The new plugin is actually "XY Controller" from the Cadence project.<br/>
    It works pretty much the same way, except that received MIDI data will not change the UI elements.<br/>
    This is because this is a plugin now, not a standalone application anymore. But everything else remains.<br/>
    As a bonus, the X and Y are now plugin parameters, and work as parameter outputs too, so they can control other stuff in Carla.<br/>
</p>
<p>
    Why the plugin was added so suddenly will be explained in detail in a future Cadence release.<br/>
    But in short, I am splitting Cadence into easier to manage sub-projects.<br/>
    The "Meter" and "XY Controller" tools are now part of Carla, so they can be removed from Cadence.
</p>
<p>
    Besides the new plugin (which again is an exception, due to Carla v2.2 already being in Release-Candidate state) we only have bug-fixes.<br/>
    The full list of changes is:
</p>
<ul>
    <li>Add xycontroller plugin</li>
    <li>Auto-select text in plugin search entry when focused via shortcut</li>
    <li>Compress canvas clipboard image saving (as PNG)</li>
    <li>Disable OSC by default on macOS</li>
    <li>Fix crash when receiving unexpected VST2 time information</li>
    <li>Fix current project filename persistence after engine stop</li>
    <li>Fix deadlock when using VST3 plugins inside Carla as plugin</li>
    <li>Fix listing LV2 plugins on Windows (2.2 regression)</li>
    <li>Fix oddities with MIDI learn</li>
    <li>Fix potential crashes when opening or hiding plugin UIs</li>
    <li>Fix some plugins not having all their audio ports exposed</li>
    <li>Fix some plugin UIs not in front of Carla when first shown</li>
    <li>Fix wine bridge build against winehq-stable and winehq-stable</li>
    <li>Overall fix to midi pattern plugin</li>
    <li>Package macOS plugin version, making Carla-Plugin usable with macOS 10.15</li>
</ul>

<h3>Downloads</h3>
<p>
    To download Carla binaries or source code, jump on over to the <a href="https://kx.studio/Downloads" class="external free" rel="nofollow" target="_blank">KXStudio downloads section</a>.<br/>
    If you're using the KXStudio repositories, you can simply install "carla-git" (plus "carla-lv2" and "carla-vst" if you're so inclined).<br/>
    Bug reports and feature requests are welcome! Jump on over to the <a href="https://github.com/falkTX/Carla" class="external free" rel="nofollow" target="_blank">Carla's Github project</a> page for those.
</p>

<h3>Final note</h3>
<p>
    Just a reminder that this is a release candidate, and not the final release yet.<br/>
    There are still a few known issues, but since they are specific to certain workflows, the amount of users affected is limited.<br/>
    If you find any more of them, please let me know in the
    <a href="https://github.com/falkTX/Carla/issues" class="external free" rel="nofollow" target="_blank">github issue tracker</a>,
    thanks!
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; KXStudio Monthly Report (July 2020)</span><br/>
    On <i>2020-07-31</i> by<i> falkTX</i>
</p>
<p>
    Hello all, another monthly report about the KXStudio project is here.<br/>
    This actually covers June and July, since there was not much to tell during June.
</p>
<p>
    So... first, for those that did not notice, there was quite a few linux/opensource-audio releases on July 15, for the
    <a href="https://libremusicproduction.com/dev/release/">
        Quarterly Release Pact</a>.<br/>
    The "Quarterly Release Pact" is an informal agreement between developers to do releases of as much software as possible on a common day.<br/>
    This is a nice way to:
</p>
<ul>
    <li>Keep the software in the public eye</li>
    <li>Increase trust, as people see that the software is in development and is cared for</li>
    <li>Increase motivation of the developers, as seeing a group working (by their releases) is a good way to push them to do something too</li>
    <li>Engage in a kind of "Swarm Marketing": A small release does not have much impact and won't get featured often by news sites,
    but a whole group of software releases demands more attention.</li>
</ul>
<p>
    I can speak for myself that the release day is a great motivator to push releases.<br/>
    When such date is near, everything that has reached a certain point where a release is perhaps worth doing
    (but usually would be hold-off due to not being "perfect enough"), just gets released.<br/>
    Because to be fair, there is no point on holding off a release for long periods of time.<br/>
    If something really goes wrong, a quick bug-fix can be done, so why not. It is software, these things happen sometimes..
</p>
<p>
    With that in mind, the
    <a href="https://kx.studio/News/?action=view&url=a-distrho-ports-update" target="_blank">DISTRHO-Ports</a>
    and
    <a href="https://kx.studio/News/?action=view&url=wineasio-v100-released" target="_blank">WineASIO</a>
    projects got new releases.<br/>
    I worked (with some help) to move the DISTRHO-Ports build system from the super-old premake3 build system to meson.<br/>
    While irrelevant for users, it is very important for Linux distribution packagers because premake3 is simply no longer maintained
    (and thus not even installable in some cases).<br/>
    The other changes were not really that substantial in my view, but why not release anyway?<br/>
    As someone who has done a few packages myself, I can understand the pain of those that want to package something but have their work made difficult by this kind of problem.<br/>
    (If all goes well, DISTRHO-Ports provided plugins will be installable as packages in the next Ubuntu version already!)
</p>
<p>
    <a href="https://github.com/DISTRHO/DISTRHO-Ports" target="_blank">DISTRHO-Ports</a>
    has been reworked in a way so that we can keep the existing plugins untouched,
    while adding/supporting new plugins made with JUCE6.<br/>
    The "legacy" plugins will have LV2 and VST2 formats, while new ones will support LV2, VST2 and VST3.<br/>
    I plan to write a tutorial on how to add a plugin to this project, so that other people than me can contribute.<br/>
    This will increase the number of ported plugins drastically, as it does not have to wait on me to to do it. (I have a lot on my plate already..)<br/>
    Once we have a good number of new plugins, or the next release day comes (in 3 months), you can count on yet another release! :)
</p>
<p>
    Regarding
    The <a href="https://github.com/wineasio/wineasio" target="_blank">WineASIO</a>,
    it was ready for release for some time, so I did the release in more of a "why not?" state.<br/>
    You can read more about this release
    <a href="https://kx.studio/News/?action=view&url=wineasio-v100-released">
    here</a>,
    but in short, I am now maintaining the WineASIO project. :)<br/>
    This is because the previous maintainer wished to step down doing so, and I was already fixing WineASIO for packaging in the KXStudio repositories anyway,
    which basically involves maintaining it.<br/>
    It is important to note that it is really only maintaining the code (so that it keeps working on new Wine versions).<br/>
    So there is not going to be any new features added to it, only bug-fixes.
</p>
<p>
    In other news,
    <a href="https://kx.studio/News/?action=view&url=carla-22-rc1-is-here">
    Carla 2.2 Release Candidate 1 is out</a>.<br/>
    It was a bit more rushed than I wished for, with a late release because I had to fight with some macOS incompatibility issues..
    but that should not happen too much in the future.<br/>
    I already have in mind what to focus on for version 2.3, but I really hope that with this 2.2 release I can kinda already leave Carla a bit on the side
    (which was already supposed to have happened in version 2.1 by the way), because other projects really need my attention right now.<br/>
    The final Carla 2.2 release is just siting on a timer now in a way.<br/>
    My target is to make it available for Ubuntu 20.10, so I will fix whatever bugs I can until the time arrives for Ubuntu 20.10 package freeze.
    (So final release in October 2020)
</p>
<p>
    Unrelated to the release pact now, I am working on automated builds for a few projects, learning along the way how that is usually handled.<br/>
    This is not that useful for Linux users, because distributions can build and package up stuff quickly; it is more for macOS and Windows users for whom it is much harder to build stuff.<br/>
    The automated builds will cover plugins (distrho-ports, dpf-plugins and more), Carla and even JACK.<br/>
    It is not completely ready yet, but very, very close to done. Expect a few announcements regarding this in the coming weeks!
</p>
<p>
    Something I need to mention... I know people have been asking about an ardour package update (in KXStudio repositories).<br/>
    I will get to it eventually, yes, sorry for the delay.<br/>
    Ardour is a different kind of build, so I need to find a nice way of handling it.
    (I want to repackage the official binary, as authors are ok with it)<br/>
    Previously it was all very manual work, it is better to avoid that this time around.<br/>
    My focus in the past few weeks has been on Carla and now the automated build setups, so packaging got put aside for now.
</p>
<p>
    And speaking of packages, here is the list of updates and additions in regards to June and July 2020:
</p>
<ul>
    <li>helio-workstation added</i>
    <li>new-session-manager added, replaces non-session-manager</i>
    <li>fluajho updated to 1.6.1</i>
    <li>lsp-plugins updated to 1.1.24</i>
    <li>mod-host updated to latest git</i>
    <li>patroneo updated to 1.6.1</i>
    <li>sequencer64 updated to 0.96.8</i>
    <li>vico updated to 1.2.1</i>
    <li>x42-plugins updated to 20200714</i>
    <li>zam-plugins updated to 1.13</i>
</ul>
<p>
    That is all for now, stay safe and sane out there!
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Carla 2.2 RC1 is here!</span><br/>
    On <i>2020-07-16</i> by<i> falkTX</i>
</p>
<p>
    Hello again everyone, it is release day! <i>(casually late again, but only 3 days late this time, yay progress!)</i><br/>
</p>
<p>
    This is the announcement of the first release candidate of Carla 2.2.<br/>
    Carla is a fully-featured cross-platform audio plugin host, which itself can also run as a plugin.<br/>
    As done with 2.1, there is no beta release for v2.2 and we are going straight into a release candidate.
</p>
<p>
    Contrary to previous releases, there were not many graphical changes this time, but lots of stuff under the hood.<br/>
    One very important note for developers is that the "native" API to access carla as plugin (as used by LMMS)
    is still ABI and API-wise backwards compatible with 2.0, but the ABI and API of Carla as a library is not.<br/>
    This is because all host functions now have a "handle" prefix, so they can be reused for standalone, plugin and other variants.
</p>
<p>
    Now with that said, let's go through what's new, first the bigger changes and smaller stuff for last.
</p>

<table><tr><td width="40%">
<a href="/screenshots/news/carla-2.2_multi-client.png">
    <img src="/screenshots/news/carla-2.2_multi-client.png" style="max-width:100%;height:auto;" alt="settings"/>
</a>
</td><td width="60%">
<h3>Multi-Client + multi-instance improvements</h3>
<p>
    In order to allow multiple instances of Carla to work without conflicts,
    proper JACK multi-client multi-instance support was implemented.<br/>
    What this means is that you can have a name prefix for all plugins when in JACK multi-client mode,
    so that it is easier to understand where a plugin belongs to.<br/>
</p>
<p>
    Starting with v2.2, extra Carla instances will get a dedicated JACK client name suffix.<br/>
    On projects created with v2.2 and above, Carla will know which saved connections belong to which plugins,
    making it possible to load a session correctly where multiple Carla instances are involved.
</p>
<p>
    As a way to make this easier to manage and control, a new command-line argument was added, "--cnprefix=...".<br/>
    So now you can have a dedicated Carla instance that has its created JACK clients more globally recognisable.
</p>
<p>
    Also, when Carla runs under NSM, the JACK client name prefix is set automatically (coming from NSM).<br/>
    This is not enabled when loading pre-2.2 projects though, in order to keep backwards compatibility.
</p>
</td></tr></table>

<br/>

<table><tr><td width="40%">
<a href="/screenshots/news/carla-2.2_linux-vst3.png">
    <img src="/screenshots/news/carla-2.2_linux-vst3.png" style="max-width:100%;height:auto;" alt="settings"/>
</a>
</td><td width="60%">
<h3>Linux VST3 plugin support</h3>
<p>
    As new VST2 plugins can no longer be officially licensed and VST2 is very, very, very slowing being phased out, it is important to have VST3 support.</br>
</p>
<p>
    So now you can now scan and load Linux VST3 plugins under Carla.</br>
    It is no longer limited to macOS and Windows.</br>
</p>
<p>
    Worth noting is that this is not a custom implementation, but leveraging JUCE VST3 host support on Linux.</br>
    It recently got supported as part of their JUCE6 update.</br>
    There are no plans for a custom implementation at this point.
</p>
</td></tr></table>

<br/>

<h3>Small UI/UX improvements all around</h3>

<div style="display:flex;align-content:baseline;text-align:center;flex-wrap:wrap;">
    <table style="width:420px;">
    <tr><td>
    <a href="/screenshots/news/carla-2.2_uiux-keyboard.png">
        <img src="/screenshots/news/carla-2.2_uiux-keyboard.png" style="max-width:100%;height:auto;" alt="settings"/>
    </a>
    </td></tr>
    <tr><td>
    <p>
        The built-in keyboard right-click menu got a bit better.<br/>
        Everything is presented in a single menu, no more sub-menus are used.
    </p>
    </td></tr>
    </table>

    <table style="width:420px;">
    <tr><td>
    <a href="/screenshots/news/carla-2.2_uiux-mappedparam.png">
        <img src="/screenshots/news/carla-2.2_uiux-mappedparam.png" style="max-width:100%;height:auto;" alt="settings"/>
    </a>
    </td></tr>
    <tr><td>
    <p>
        The plugin built-in editor dialog now shows the currently mapped parameter type+value directly.<br/>
        No more clicking around needed to find out what the parameter is mapped to.
    </p>
    </td></tr>
    </table>

    <table style="width:420px;">
    <tr><td>
    <a href="/screenshots/news/carla-2.2_uiux-midilearn.png">
        <img src="/screenshots/news/carla-2.2_uiux-midilearn.png" style="max-width:100%;height:auto;" alt="settings"/>
    </a>
    </td></tr>
    <tr><td>
    <p>
        MIDI learn implemented, triggered via parameter mapping menu.<br/>
        Note that this is per plugin, not global, due to how Carla handles each plugin individually.
    </p>
    </td></tr>
    </table>

    <div style="width:390px;">
        <h5>Other "quality of life" improvements:</h5>
        <ul style="text-align:left;">
        <li>Added a 12400x9600 canvas size</li>
        <li>Added a 2x and 4x canvas image export mode</li>
        <li>Added a menu action to save current Carla canvas as image in the clipboard</li>
        <li>Added "Send MIDI notes" option to plugin built-in editor dialog</li>
        <li>Canvas positions are now always saved and restored, including in the plugin version</li>
        <li>Canvas positions are kept in sync across multiple Carla JACK instances and even Carla-Control</li>
        <li>Built-in plugin edit dialog tab state is kept when parameters are reloaded</li>
        <li>Implemented NSM "optional-gui"</li>
        <li>Plugin custom GUI Window title changes dynamically when renamed</li>
        </ul>
    </div>
</div>

<br/>

<h3>Other notable changes</h3>
<ul>
    <li>Added a "carla-osc-gui" script that starts a Carla instance in the background and connects to it using OSC.<br/>
        Closing the GUI does not close the engine, and it can be run again to reconnect later on.
    </li>
    <li>Always use maximum amount of channels for VST2 plugins</li>
    <li>Better handle the case of JACK server stop (or killed)</li>
    <li>Better implementation of LV2 state path, now saving files in the same directory as the Carla project</li>
    <li>Changed the way plugins are deleted, so they are now safely deleted only when no longer in use</li>
    <li>Implement MIDI CC and CV source parameter changes for bridges</li>
    <li>Improve the (still experimental) JACK-apps-as-plugins implementation,
        now mapping show/hide gui to NSM commands, sending arbitrary MIDI events and making it work on more systems</li>
    <li>Increase max value of the internal LFO plugin, so we can get reeeeeeeal slow</li>
    <li>Raise limit of plugins that can be loaded (512 default, 64 in rack)</li>
    <li>Tweaks for automatically converting internal Patchbay mode projects in JACK multi-client mode and vice-versa</li>
    <li>Working HaikuOS build, but no audio support yet</li>
</ul>
<p>
    Many other bug-fixes and small under-the-hood improvements (too many to list here).<br/>
    See the
    <a href="https://github.com/falkTX/Carla/commits/master?after=783352477fec5f135f2040afd09257d68211ca73+8" target="_blank">
      git log</a>
    for the full list of changes.
</p>

<h3>Notes for users</h3>
<p>
    When using JACK, the newly added features around the canvas require at least JACK v1.9.13.<br/>
    This is because Carla relies on JACK meta-data in order to store information about each plugin/client,
    and meta-data was only added to JACK2 in version 1.9.13.<br/>
    Alternatively, you can use JACK1 instead of JACK2, which has meta-data support since a long time.
</p>
<p>
    The code for scanning plugins had a little rework yet again, making some internal data structures change.<br/>
    Because of this, a full rescan of your plugins is needed after the update.<br/>
    This should fix previously missing plugins that happened in v2.1.<br/>
</p>

<h3>Downloads</h3>
<p>
    To download Carla binaries or source code, jump on over to the <a href="https://kx.studio/Downloads" class="external free" rel="nofollow" target="_blank">KXStudio downloads section</a>.<br/>
    If you're using the KXStudio repositories, you can simply install "carla-git" (plus "carla-lv2" and "carla-vst" if you're so inclined).<br/>
    Bug reports and feature requests are welcome! Jump on over to the <a href="https://github.com/falkTX/Carla" class="external free" rel="nofollow" target="_blank">Carla's Github project</a> page for those.
</p>

<h3>Final note</h3>
<p>
    Just a reminder that this is a release candidate, and not the final release yet.<br/>
    I did my best to fix all issues that I was able to reproduce, but some can still happen.<br/>
    Please let me know if find any, thanks!
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; A DISTRHO-Ports update</span><br/>
    On <i>2020-07-15</i> by<i> falkTX</i>
</p>
<p>
    Hello again, another release for the
    <a href="https://libremusicproduction.com/dev/release/">Quarterly Release Pact</a> is here.<br/>
    This one is a "small" update of the
    <a href="https://github.com/DISTRHO/DISTRHO-Ports">DISTRHO-Ports</a> project.<br/>
    It is a more packager-focused release rather than user-focused, because the (super old) build system was finally updated.<br/>
    This alone warrants a new release by itself, as it finally becomes possible for the project to be packaged in regular linux distributions.
</p>
<p>
    There are a few new plugins and fixes with this release, bigger changes are coming at a later date.<br/>
    I want to update the DISTRHO-Ports website and have "nightly builds" of the plugin binaries, but this will take time.<br/>
    For now, at least we have the plugins building and working on modern distributions.
</p>
<p>
    Here is a resume of the full changes since last release in 2018:
</p>
<ul>
    <li>Add HiReSam plugin port</li>
    <li>Add ReFine plugin port</li>
    <li>Add Temper plugin port</li>
    <li>Fix build for ARM NEON target</li>
    <li>Fix LV2 UI notifications happening in non-GUI thread</li>
    <li>Fix LV2 meta-data to pass lv2lint errors</li>
    <li>Update JUCE (current plugins frozen in a known good but slightly old version, with cherry-picked fixes)</li>
    <li>Switch build system from premake3 to meson</li>
</ul>
<p>
    There are no pre-compiled binaries for this release, though the plugins are fully up-to-date in the KXStudio repositories.<br/>
    You can find this 2020-07-14 release at <a href="https://github.com/DISTRHO/DISTRHO-Ports/releases/tag/2020-07-14" target="_blank">
          github.com/DISTRHO/DISTRHO-Ports/releases</a>.<br/>
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; WineASIO v1.0.0 released</span><br/>
    On <i>2020-07-15</i> by<i> falkTX</i>
</p>
<p>
    Hello everyone, a perhaps unexpected release is here.<br/>
    This is a release of WineASIO, as a way to announce maintainer change as well as making it up to date with current Wine.
</p>
<p>
    The previous maintainer, Joakim Hernberg, publicly said that he was looking for someone to take lead on the project.<br/>
    When I was doing packaging of WineASIO to the KXStudio repositories, there were a couple of fixes needed... and eventually just decided to maintain it since I was in a way already doing that.<br/>
    With the green-light for taking over the project, I did a couple of changes that seemed (to me) relevant and useful.<br/>
    The Cadence-specific WineASIO settings were also split off to become a standalone tool, and it is now the ASIO "control panel" for the WineASIO driver.
</p>
<img src="https://raw.githubusercontent.com/wineasio/wineasio/master/screenshot.png" alt="screenshot"/>
<p>
    I do not plan to make new development for WineASIO, only maintain it to keep it alive and working.<br/>
    The new "control panel" was an exception due to it being, in my opinion, a user experience fix.<br/>
    (understanding the Windows registry can be hard, so the "panel" allows us to skip on having to deal with that)
</p>
<p>
    This is what changed compared to the previous official release:
</p>
<ul>
    <li>Add custom GUI for WineASIO settings, made in PyQt5 (taken from Cadence project code)</li>
    <li>Add packaging script</li>
    <li>Fix code to work with latest Wine</li>
    <li>Fix control panel startup</li>
    <li>Rework Makefile, common rules for 32 and 64bit builds</li>
</ul>
<p>
    There are no pre-compiled binaries for WineASIO, though it is available as a package in the KXStudio repositories.<br/>
    You can find this v1.0.0 release at <a href="https://github.com/wineasio/wineasio/releases/tag/v1.0.0" target="_blank">
          github.com/wineasio/wineasio</a>.<br/>
</p>

<hr/>

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
