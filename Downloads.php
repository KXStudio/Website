<?php
$PAGE_TITLE    = "KXStudio : Downloads";
$PAGE_TYPE     = "DOWNLOADS";
$PAGE_SOURCE_1 = ARRAY("/Downloads");
$PAGE_SOURCE_2 = ARRAY("Downloads");
include_once("includes/header.php");
?>

<ul id="Binaries" name="Binaries">
    <li><b>Binary Releases</b></li>
    <p>
        Software developed by the KXStudio Team, pre-compiled and ready to run.<br/>
    </p>
    <p class="p_extra_spaced">
        <b>Linux Downloads:</b><br/>
        &nbsp;<a href="http://sourceforge.net/projects/kxstudio/files/Releases/cadence/Cadence-0.8.1-linux32.tar.xz/download" class="external text a_bigger_text" rel="nofollow" target="_blank">
              <img src="images/ico_cadence.png" alt="" class="img_text_align"/> Cadence </a> (32bit, version 0.8.1)<br/>
        &nbsp;<a href="http://sourceforge.net/projects/kxstudio/files/Releases/cadence/Cadence-0.8.1-linux64.tar.xz/download" class="external text a_bigger_text" rel="nofollow" target="_blank">
              <img src="images/ico_cadence.png" alt="" class="img_text_align"/> Cadence </a> (64bit, version 0.8.1)<br/>
        &nbsp;<a href="https://github.com/falkTX/Carla/releases/download/v1.9.14/Carla_2.0-RC4-linux32.tar.xz" class="external text a_bigger_text" rel="nofollow" target="_blank">
              <img src="images/ico_carla.png" alt="" class="img_text_align"/> Carla2 </a> (32bit, version 2.0-RC4)<br/>
        &nbsp;<a href="https://github.com/falkTX/Carla/releases/download/v1.9.14/Carla_2.0-RC4-linux64.tar.xz" class="external text a_bigger_text" rel="nofollow" target="_blank">
              <img src="images/ico_carla.png" alt="" class="img_text_align"/> Carla2 </a> (64bit, version 2.0-RC4)<br/>
        &nbsp;<a href="http://sourceforge.net/projects/kxstudio/files/Releases/festige/festige-1.0.2-x86.tar.gz/download" class="external text a_bigger_text" rel="nofollow" target="_blank">
              <img src="images/ico_festige.png" alt="" class="img_text_align"/> FeSTige </a> (32bit, version 1.0.2)<br/>
    </p>
    <p class="p_extra_spaced">
        <b>MacOS Downloads:</b><br/>
        &nbsp;<a href="https://github.com/falkTX/Carla/releases/download/v1.9.14/Carla_2.0-RC4-macos.dmg" class="external text a_bigger_text" rel="nofollow" target="_blank">
              <img src="images/ico_carla.png" alt="" class="img_text_align"/> Carla2 </a> (version 2.0-RC4 for macOS 10.8 or higher)<br/>
    </p>
    <p class="p_extra_spaced">
        <b>Windows Downloads:</b><br/>
        &nbsp;<a href="http://sourceforge.net/projects/kxstudio/files/Releases/cadence/Cadence-0.8.1-win32.zip/download" class="external text a_bigger_text" rel="nofollow" target="_blank">
              <img src="images/ico_cadence.png" alt="" class="img_text_align"/> Cadence </a> (32bit, version 0.8.1)<br/>
        &nbsp;<a href="https://github.com/falkTX/Carla/releases/download/v1.9.14/Carla_2.0-RC4-win32.zip" class="external text a_bigger_text" rel="nofollow" target="_blank">
              <img src="images/ico_carla.png" alt="" class="img_text_align"/> Carla2 </a> (32bit, version 2.0-RC4)<br/>
        &nbsp;<a href="https://github.com/falkTX/Carla/releases/download/v1.9.14/Carla_2.0-RC4-win32-nosse.zip" class="external text a_bigger_text" rel="nofollow" target="_blank">
              <img src="images/ico_carla.png" alt="" class="img_text_align"/> Carla2 </a> (32bit version 2.0-RC4, No-SSE build for old PCS)<br/>
        &nbsp;<a href="https://github.com/falkTX/Carla/releases/download/v1.9.14/Carla_2.0-RC4-win64.zip" class="external text a_bigger_text" rel="nofollow" target="_blank">
              <img src="images/ico_carla.png" alt="" class="img_text_align"/> Carla2 </a> (64bit, version 2.0-RC4)<br/>
    </p>
</ul>

<p><br/></p>

<ul id="SourceCode" name="SourceCode">
    <li><b>Source Code Releases</b></li>
    <p>
        Software developed by the KXStudio Team, released as source tarball so that distros other than Ubuntu (or advanced users) can pick it up.<br/>
        If you're running a Debian or Ubuntu based system, please use the <a href="<?php echo $ROOT; ?>/Repositories">KXStudio Repositories</a> instead.
    </p>
    <p class="p_extra_spaced">
        <b>Downloads:</b><br/>
        &nbsp;<a href="http://sourceforge.net/projects/kxstudio/files/Releases/cadence/Cadence-0.8.1-src.tar.bz2/download" class="external free a_bigger_text" rel="nofollow" target="_blank">
              <img src="images/ico_cadence.png" alt="" class="img_text_align"/> Cadence </a> (version 0.8.1)<br/>
        &nbsp;<a href="https://github.com/falkTX/Carla/archive/v1.9.14.tar.gz" class="external free a_bigger_text" rel="nofollow" target="_blank">
              <img src="images/ico_carla.png" alt="" class="img_text_align"/> Carla2 </a> (version 2.0-RC4)<br/>
        &nbsp;<a href="http://sourceforge.net/projects/kxstudio/files/Releases/festige/festige-1.0.2-src.tar.gz/download" class="external free a_bigger_text" rel="nofollow" target="_blank">
              <img src="images/ico_festige.png" alt="" class="img_text_align"/> FeSTige </a> (version 1.0.2)<br/>
    </p>
</ul>

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
        See the <a href="<?php echo $ROOT; ?>/Artwork">KXStudio Artwork</a> section for screenshots of various Desktop Environments using the KXStudio theme.<br/>
    </p>
    <p class="p_extra_spaced">
        <b>Downloads:</b><br/>
        &nbsp;<a href="http://sourceforge.net/projects/kxstudio/files/Releases/artwork/kxstudio-artwork_20121222.tar.bz2/download" class="external free a_bigger_text" rel="nofollow" target="_blank">
              <img src="images/ico_kxstudio.png" alt="" class="img_text_align"/> KXStudio Artwork</a> (version 2012-12-22)
    </p>
</ul>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
