<?php
$PAGE_TITLE    = "KXStudio : Downloads";
$PAGE_TYPE     = "DOWNLOADS";
$PAGE_SOURCE_1 = ARRAY("/Downloads");
$PAGE_SOURCE_2 = ARRAY("Downloads");
include_once("includes/header.php");
include_once("includes/versions.php");
?>

<h3 id="Binaries">Binary Releases</h3>
<p>
  Software developed by the KXStudio Team, pre-compiled and ready to run.<br/>
  If you're running a Debian or Ubuntu based system, please use the <a href="/Repositories">KXStudio Repositories</a> instead.<br/>
</p>
<p class="p_extra_spaced">
  <b>Linux Downloads:</b><br/>
<!--         &nbsp;<a href="http://sourceforge.net/projects/kxstudio/files/Releases/cadence/Cadence-0.8.1-linux32.tar.xz/download" class="external text a_bigger_text" rel="nofollow" target="_blank"> -->
<!--               <img src="images/ico_cadence.png" alt="" class="img_text_align"/> Cadence </a> (32bit, version 0.8.1)<br/> -->
<!--         &nbsp;<a href="http://sourceforge.net/projects/kxstudio/files/Releases/cadence/Cadence-0.8.1-linux64.tar.xz/download" class="external text a_bigger_text" rel="nofollow" target="_blank"> -->
<!--               <img src="images/ico_cadence.png" alt="" class="img_text_align"/> Cadence </a> (64bit, version 0.8.1)<br/> -->
  &nbsp;<a href="https://github.com/falkTX/Carla/releases/download/v<?php echo $VERSION_CARLA_OLD; ?>Carla_<?php echo $VERSION_CARLA_OLD; ?>-linux32.tar.xz" class="external text a_bigger_text" rel="nofollow" target="_blank">
        <img src="images/ico_carla.png" alt="" class="img_text_align"/> Carla2 </a> (32bit, version <?php echo $VERSION_CARLA_OLD; ?>, requires Qt 5.9 or higher)<br/>
  &nbsp;<a href="https://github.com/falkTX/Carla/releases/download/v<?php echo $VERSION_CARLA_OLD; ?>/Carla_<?php echo $VERSION_CARLA_OLD; ?>-linux64.tar.xz" class="external text a_bigger_text" rel="nofollow" target="_blank">
        <img src="images/ico_carla.png" alt="" class="img_text_align"/> Carla2 </a> (64bit, version <?php echo $VERSION_CARLA_OLD; ?>, requires Qt 5.9 or higher)<br/>
</p>
<p class="p_extra_spaced">
  <b>MacOS Downloads:</b><br/>
  &nbsp;<a href="https://github.com/falkTX/Carla/releases/download/v<?php echo $VERSION_CARLA; ?>/Carla-<?php echo $VERSION_CARLA_MAJ; ?>-macos-universal.dmg" class="external text a_bigger_text" rel="nofollow" target="_blank">
        <img src="images/ico_carla.png" alt="" class="img_text_align"/> Carla2 </a> (universal build, version <?php echo $VERSION_CARLA; ?>, requires macOS 10.12 or higher)<br/>
</p>
<p class="p_extra_spaced">
  <b>Windows Downloads:</b><br/>
<!--         &nbsp;<a href="http://sourceforge.net/projects/kxstudio/files/Releases/cadence/Cadence-0.8.1-win32.zip/download" class="external text a_bigger_text" rel="nofollow" target="_blank"> -->
<!--               <img src="images/ico_cadence.png" alt="" class="img_text_align"/> Cadence </a> (32bit, version 0.8.1)<br/> -->
  &nbsp;<a href="https://github.com/falkTX/Carla/releases/download/v<?php echo $VERSION_CARLA; ?>/Carla-<?php echo $VERSION_CARLA_MAJ; ?>-win32.zip" class="external text a_bigger_text" rel="nofollow" target="_blank">
        <img src="images/ico_carla.png" alt="" class="img_text_align"/> Carla2 </a> (32bit, version <?php echo $VERSION_CARLA; ?>)<br/>
  &nbsp;<a href="https://github.com/falkTX/Carla/releases/download/v<?php echo $VERSION_CARLA; ?>/Carla-<?php echo $VERSION_CARLA_MAJ; ?>-win64.zip" class="external text a_bigger_text" rel="nofollow" target="_blank">
        <img src="images/ico_carla.png" alt="" class="img_text_align"/> Carla2 </a> (64bit, version <?php echo $VERSION_CARLA; ?>)<br/>
</p>

<h3 id="SourceCode">Source Code Releases</h3>
<p>
  Software developed by the KXStudio Team, released as source tarball so that distros other than Ubuntu (or advanced users) can pick it up.<br/>
  If you rather see our git repos (for a list of commits for example) check out
      <a href="https://git.kx.studio/" class="external" rel="nofollow" target="_blank">https://git.kx.studio/</a>.
</p>
<p class="p_extra_spaced">
  <b>Downloads:</b><br/>
<!--         &nbsp;<a href="http://sourceforge.net/projects/kxstudio/files/Releases/cadence/Cadence-0.8.1-src.tar.bz2/download" class="external free a_bigger_text" rel="nofollow" target="_blank"> -->
<!--               <img src="images/ico_cadence.png" alt="" class="img_text_align"/> Cadence </a> (version 0.8.1)<br/> -->
  &nbsp;<a href="https://github.com/falkTX/Carla/archive/v<?php echo $VERSION_CARLA; ?>.tar.gz" class="external free a_bigger_text" rel="nofollow" target="_blank">
        <img src="images/ico_carla.png" alt="" class="img_text_align"/> Carla2 </a> (version <?php echo $VERSION_CARLA; ?>)<br/>
</p>

<h3 id="Repositories">Repository packages</h3>
<p>
  General-purpose debian packages for systems with Debian 11 / Ubuntu 20.04 or superior.<br/>
  See the dedicated <a href="/Repositories:Applications">Applications</a> and <a href="/Repositories:Plugins">Plugins</a> page for manual downloads,
  or the <a href="/Repositories">Repositories entry-point</a> page for how to enable them.
</p>

<!--
<hr/>

<ul id="Artwork" name="Artwork">
    <li><b>Artwork</b></li>
    <p>
        The KXStudio artwork, which includes:<br/>
        &nbsp;&nbsp;- KDE4 color scheme<br/>
        &nbsp;&nbsp;- KDM theme<br/>
        &nbsp;&nbsp;- KSplash theme<br/>
        &nbsp;&nbsp;- Plymouth theme<br/>
        &nbsp;&nbsp;- QtCurve config<br/>
        &nbsp;&nbsp;- Gtk2/Qt3/Qt4 theme (using qtcurve engine)<br/>
        &nbsp;&nbsp;- Gtk3 theme (using solidity engine, incomplete)<br/>
        &nbsp;&nbsp;- Metacity theme<br/>
        &nbsp;&nbsp;- XFWM4 theme<br/>
        &nbsp;&nbsp;- Wallpapers<br/>
    </p>
    <p>
        By using QtCurve, our theme can perfectly match Gtk2, Qt3, KDE3, Qt4 and KDE4 applications.<br/>
        See the <a href="/Artwork">KXStudio Artwork</a> section for screenshots of various Desktop Environments using the KXStudio theme.<br/>
    </p>
    <p class="p_extra_spaced">
        <b>Downloads:</b><br/>
        &nbsp;<a href="http://sourceforge.net/projects/kxstudio/files/Releases/artwork/kxstudio-artwork_20121222.tar.bz2/download" class="external free a_bigger_text" rel="nofollow" target="_blank">
              <img src="images/ico_kxstudio.png" alt="" class="img_text_align"/> KXStudio Artwork</a> (version 2012-12-22)
    </p>
</ul>
-->

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
