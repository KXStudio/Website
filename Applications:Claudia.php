<?php
$PAGE_TITLE    = "KXStudio : Applications : Claudia";
$PAGE_TYPE     = "APPLICATION_NU";
$PAGE_SOURCE_1 = ARRAY("/Applications", "/Applications:Claudia");
$PAGE_SOURCE_2 = ARRAY("Applications", "Claudia");
include_once("includes/header.php");
?>

<!-- intro -->
<p>
    Claudia is a LADISH frontend; it's just like Catia, but focused at session management through LADISH.<br/>
    It has a bit more features than the official LADISH GUI, with a nice preview of the main canvas in the bottom-left.<br/>
    It also implements the 'Claudia-Launcher' add-application style for LADISH.
</p>

<!-- Interface -->
<h3><span class="mw-headline" id="Interface"> The Interface </span></h3>
<p>
    A screenshot follows:<br/>
    <a href="screenshots/claudia.png" class="external text" rel="nofollow"><img src="screenshots/claudia.png" alt="claudia.png" /></a>
</p>

<!-- Download -->
<h3><span class="mw-headline" id="Download"> Download </span></h3>
<p>
    Claudia is available in the KXStudio repositories and ArchLinux AUR ('claudia' package in the KXStudio repositories, 'cadence-claudia' in ArchLinux).<br/>
    <img src="images/ico_arch.png" alt="" class="img_text_align_spaced"/>
        <a href="https://aur.archlinux.org/packages/cadence-claudia/" class="external text a_bigger_text" rel="nofollow" target="_blank">
         ArchLinux</a> (AUR)<br/>
    <img src="images/ico_debian.png" alt="" class="img_text_align_spaced"/>
        <a href="apt://claudia" class="external text a_bigger_text">
         Debian/Ubuntu</a> (via KXStudio repositories)<br/>
</p>
<p>
    Pre-compiled binaries are available for Linux (part of the Cadence bundle).<br/>
    <img src="images/ico_linux.png" alt="" class="img_text_align_spaced"/>
        <a href="http://sourceforge.net/projects/kxstudio/files/Releases/cadence/Cadence-0.8.1-linux32.tar.xz/download" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Linux 32bit</a><br/>
    <img src="images/ico_linux.png" alt="" class="img_text_align_spaced"/>
        <a href="http://sourceforge.net/projects/kxstudio/files/Releases/cadence/Cadence-0.8.1-linux64.tar.xz/download" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Linux 64bit</a><br/>
</p>
<p>
    The latest source code is hosted on github, together with bug reports, feature requests, etc.<br/>
     <img src="images/ico_github.png" alt="" class="img_text_align_spaced"/>
        <a href="https://github.com/falkTX/Cadence" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Source code</a><br/>
     <img src="images/ico_github.png" alt="" class="img_text_align_spaced"/>
        <a href="https://github.com/falkTX/Cadence/issues?state=open" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Bug reports / Feature requests</a><br/>
</p>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
