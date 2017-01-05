<?php
$PAGE_TITLE    = "KXStudio News";
$PAGE_TYPE     = "NORMAL";
$PAGE_SOURCE_1 = ARRAY("/News");
$PAGE_SOURCE_2 = ARRAY("News");
include_once("includes/header.php");
?>

<p><b>THIS IS A FAKE PAGE, KXSTUDIO NEWS USES A DYNAMIC MODULE NOW</b></p>

<div style="position: absolute; top: 120px; right: 100px;">
    <a href="<?php echo $ROOT; ?>/News/?action=feed"><img src="images/rss.png" alt="RSS"/></a>
</div>

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

<p>
    Note: Since the KXStudio website has been internally reworked (removed mediawiki, much simpler PHP code now), the old news have been removed.<br/>
    <br/>
</p>

<?php
include_once("includes/footer.php");
?>
