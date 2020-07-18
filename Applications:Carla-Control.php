<?php
$PAGE_TITLE    = "KXStudio : Applications : Carla-Control";
$PAGE_TYPE     = "APPLICATION_NU";
$PAGE_SOURCE_1 = ARRAY("/Applications", "/Applications:Carla-Control");
$PAGE_SOURCE_2 = ARRAY("Applications", "Carla-Control");
include_once("includes/header.php");
include_once("includes/versions.php");
?>

<!-- intro -->
<p>
    Carla is an audio plugin host, with support for many audio drivers and plugin formats.<br/>
    Carla-Control is a remote control application for Carla, providing the same interface but with the real backend running on a different machine.
</p>

<!-- Interface -->
<h3><span class="mw-headline" id="Interface"> The Interface </span></h3>
<p>
    TODO
</p>

<!-- Usage -->
<h3><span class="mw-headline" id="Usage"> Usage </span></h3>
<p>
    TODO
</p>

<!-- Download -->
<h3><span class="mw-headline" id="Download"> Download </span></h3>
<p>
    Carla-Control is available in the KXStudio repositories, Fedora and ArchLinux (all with 'carla' package name).
</p>
<p>
    Pre-compiled binaries are available for Linux and macOS (version <?php echo $VERSION_CARLA; ?>).<br/>
    <img src="images/ico_linux.png" alt="" class="img_text_align_spaced"/>
        <a href="https://github.com/falkTX/Carla/releases/download/v<?php echo $VERSION_CARLA; ?>/Carla_<?php echo $VERSION_CARLA; ?>-linux32.tar.xz" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Linux 32bit</a> (requires Qt 5.9 or higher)<br/>
    <img src="images/ico_linux.png" alt="" class="img_text_align_spaced"/>
        <a href="https://github.com/falkTX/Carla/releases/download/v<?php echo $VERSION_CARLA; ?>/Carla_<?php echo $VERSION_CARLA; ?>-linux64.tar.xz" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Linux 64bit</a> (requires Qt 5.9 or higher)<br/>
    <img src="images/ico_mac.png" alt="" class="img_text_align_spaced"/>
        <a href="https://github.com/falkTX/Carla/releases/download/v<?php echo $VERSION_CARLA; ?>/Carla_<?php echo $VERSION_CARLA; ?>-macos.dmg" class="external text a_bigger_text" rel="nofollow" target="_blank">
         MacOS compatible build</a> (requires macOS 10.8 or higher)<br/>
    <img src="images/ico_mac.png" alt="" class="img_text_align_spaced"/>
        <a href="https://github.com/falkTX/Carla/releases/download/v<?php echo $VERSION_CARLA; ?>/Carla_<?php echo $VERSION_CARLA; ?>-macos-10.12.dmg" class="external text a_bigger_text" rel="nofollow" target="_blank">
         MacOS newer build</a> (requires macOS 10.12 or higher)<br/>
    <img src="images/ico_windows.png" alt="" class="img_text_align_spaced"/>
        <a href="https://github.com/falkTX/Carla/releases/download/v<?php echo $VERSION_CARLA; ?>/Carla_<?php echo $VERSION_CARLA; ?>-win32-nosse.zip" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Windows 32bit (No SSE, for old PCs)</a><br/>
    <img src="images/ico_windows.png" alt="" class="img_text_align_spaced"/>
        <a href="https://github.com/falkTX/Carla/releases/download/v<?php echo $VERSION_CARLA; ?>/Carla_<?php echo $VERSION_CARLA; ?>-win32.zip" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Windows 32bit</a><br/>
    <img src="images/ico_windows.png" alt="" class="img_text_align_spaced"/>
        <a href="https://github.com/falkTX/Carla/releases/download/v<?php echo $VERSION_CARLA; ?>/Carla_<?php echo $VERSION_CARLA; ?>-win64.zip" class="external text a_bigger_text" rel="nofollow" target="_blank">
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
