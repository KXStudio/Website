<?php
$PAGE_TITLE    = "KXStudio : Documentation";
$PAGE_TYPE     = "KXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Documentation");
$PAGE_SOURCE_2 = ARRAY("Documentation");
include_once("includes/header.php");
?>

<p>
    If you're looking for help regarding an <b>Ubuntu</b> feature, please search within the
      <a href="http://ubuntuforums.org/" class="external text" rel="nofollow" target="_blank">Ubuntu Forums</a>.<br/>
    For general <b>Linux Audio</b> help, use the
      <a href="http://linuxmusicians.com/" class="external text" rel="nofollow" target="_blank">LinuxMusicians Forums</a> or
      <a href="http://lists.linuxaudio.org/listinfo/linux-audio-user/" class="external text" rel="nofollow" target="_blank">LinuxAudio Mailing List</a>.<br/>
    You can also use <b>IRC</b> on irc.freenode.net (or .com) server, channel
      <a href="https://webchat.freenode.net/?channels=#kxstudio" class="external text" rel="nofollow" target="_blank">#kxstudio</a>,
      <a href="https://webchat.freenode.net/?channels=#opensourcemusicians" class="external text" rel="nofollow" target="_blank">#opensourcemusicians</a> or
      <a href="https://webchat.freenode.net/?channels=#kxstudio,#opensourcemusicians" class="external text" rel="nofollow" target="_blank">both</a>.<br/>
</p>
<p>
    Please note that documentation for KXStudio is a work in progress, if you need some information not available here, you can try:
</p>
<ul>
    <li><a href="http://wiki.linuxaudio.org/wiki/start" class="external text" rel="nofollow" target="_blank">LinuxAudio Wiki</a></li>
    <li><a href="https://help.ubuntu.com/community/UbuntuStudio/HowTos" class="external text" rel="nofollow" target="_blank">UbuntuStudio Community Documentation</a></li>
</ul>

<!-- TOPICS -->
<p>
    <br/>
    Some useful topics:
</p>

<!-- KXSTUDIO RELEASE -->
<p>
    <b>KXStudio 12.04.3 Release</b>
</p>
<ul>
    <li><a href="<?php echo $ROOT; ?>/Documentation:KXStudio12043:About">About</a></li>
    <li><a href="<?php echo $ROOT; ?>/Documentation:KXStudio12043:ReleaseNotes">Release Notes</a></li>
</ul>

<!-- KXSTUDIO DISTRIBUTION -->
<p>
    <br/>
    <b>KXStudio Distribution &amp; Repositories</b> (outdated)
</p>
<ul>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Repository:Meta-Packages">Available Meta-Packages</a></li>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Repository:RegisterCommercial">Register/Activate your purchased software</a></li>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Repository:Upgrade">Upgrade from an existing Debian/Ubuntu installation</a></li>
</ul>

<!-- KXSTUDIO MANUAL -->
<p>
    <br/>
    <b>KXStudio Manual</b>
</p>
<ul>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Manual:kxstudio_introduction">Introduction</a></li>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Manual:kxstudio_and_free_software">KXStudio and Free Software</a></li>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Manual:downloading_and_booting_kxstudio">Downloading, booting and running KXStudio 'live'</a></li>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Manual:installing_kxstudio">Installing KXStudio</a></li>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Manual:package_management">Package Management</a></li>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Manual:video_drivers">Installing non-free video drivers</a></li>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Manual:included_and_recommended_apps">Included and recommended apps</a></li>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Manual:linux_audio_overview">Linux Audio Overview</a></li>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Manual:alsa_and_kxstudio">ALSA and KXStudio</a></li>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Manual:cadence_introduction">An introduction to Cadence</a></li>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Manual:jack_configuration">JACK Configuration</a></li>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Manual:simple_claudia_studio">Creating a simple LADISH studio using Claudia</a></li>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Manual:latency">Latency compensation and xrun reduction tips</a></li>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Manual:wineasio_and_reaper">WineASIO and REAPER</a></li>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Manual:useful_links_and_getting_help">Useful Links And Getting Help</a></li>
</ul>
<p>
    (The manual is being written by Dan MacDonald with the assistance of Aaron Wolf, falkTX and the LinuxMusicians community).
</p>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
