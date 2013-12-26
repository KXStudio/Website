<?php
$PAGE_TITLE    = "KXStudio News";
$PAGE_TYPE     = "NORMAL";
$PAGE_SOURCE_1 = ARRAY("/News");
$PAGE_SOURCE_2 = ARRAY("News");
include_once("includes/header.php");
?>

<p><b>THIS IS A FAKE PAGE, KXSTUDIO NEWS USES A DYNAMIC MODULE NOW</b></p>

<div style="position: absolute; top: 120px; right: 100px;">
    <a href="http://feeds.launchpad.net/kxstudio/announcements.atom"><img src="images/rss.png" alt="RSS"/></a>
</div>

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
    <img src="/screenshots/news/carla-2.0-report_edit-dialog.png" alt=""/>
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
    Checkout the <a href="http://kxstudio.sourceforge.net/Documentation:KXStudio12043:About">About</a> or <a href="http://kxstudio.sourceforge.net/Documentation:KXStudio12043:ReleaseNotes">Release Notes</a> to find out more about this release.
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
    Give it a visit now! <a href="http://kxstudio.sourceforge.net/">http://kxstudio.sourceforge.net/</a>
</p>

<hr/>

<p>
    <span style="font-size: 20px">&gt; Carla Plugin Host 1.0.0 released!</span><br/>
    On <i>2013-07-02</i> by<i> falkTX</i>
</p>
<p>
    After more than 2 years in development, here it is - the first stable release of Carla is now available!<br/>
    <a href="http://kxstudio.sourceforge.net/screenshots/carla.png"><img src="http://kxstudio.sourceforge.net/screenshots/carla.png" alt="carla.png"/></a><br/>
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
    Downloads available at the usual place, <a href="http://kxstudio.sourceforge.net/Downloads#Binaries">KXStudio Downloads</a>.<br/>
</p>
<p>
    For more information about Carla check its own application page <a href="http://kxstudio.sourceforge.net/Applications:Carla">here</a>.<br/>
    We'll be updating that page in the next few days, with some tutorials and workflow videos as well, so stay tuned!<br/>
</p>
<p>
    You can follow the release discussion over at <a href="https://linuxmusicians.com/viewtopic.php?f=24&t=11249" class="external free" rel="nofollow">LinuxMusicians forums</a>.<br/>
    If you find this application useful and/or want to help further development, please consider a <a href="http://kxstudio.sourceforge.net/Donations">donation</a>.<br/>
</p>

<a href="http://kxstudio.sourceforge.net/"></a>

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
    You can download the new ISOs at the KXStudio website, <a href="http://kxstudio.sourceforge.net/Downloads">http://kxstudio.sourceforge.net/Downloads</a>.
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
    <a href="http://kxstudio.sourceforge.net/Applications" class="external free" rel="nofollow" target="_blank">http://kxstudio.sourceforge.net/Applications</a><br/>
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
