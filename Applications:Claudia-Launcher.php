<?php
$PAGE_TITLE    = "KXStudio : Applications : Claudia-Launcher";
$PAGE_TYPE     = "APPLICATION_NU";
$PAGE_SOURCE_1 = ARRAY("/Applications", "/Applications:Claudia-Launcher");
$PAGE_SOURCE_2 = ARRAY("Applications", "Claudia-Launcher");
include_once("includes/header.php");
?>

<!-- intro -->
<p>
    Claudia-Launcher is a multimedia application launcher with LADISH support.<br/>
    It searches for installed packages (not binaries), and displays the respective content as a launcher.<br/>
    The content is got through an hardcoded database, created and/or modified to suit the target distribution.
</p>

<!-- Interface -->
<h3><span class="mw-headline" id="Interface"> The Interface </span></h3>
<p>
    A screenshot follows:<br/>
    <a href="screenshots/claudia-launcher.png" class="external text" rel="nofollow"><img src="screenshots/claudia-launcher.png" alt="claudia-launcher.png" /></a>
</p>

<!-- Download -->
<h3><span class="mw-headline" id="Download"> Download </span></h3>
<p>
    Claudia-Launcher is available in the KXStudio repositories and ArchLinux ('claudia' package in the KXStudio repositories, 'cadence' in ArchLinux).<br/>
    <img src="images/ico_arch.png" alt="" class="img_text_align_spaced"/>
    <a href="https://www.archlinux.org/packages/community/x86_64/cadence/" class="external text a_bigger_text" rel="nofollow" target="_blank">
         ArchLinux</a> (Community)<br/>
    <img src="images/ico_debian.png" alt="" class="img_text_align_spaced"/>
        <a href="apt://claudia" class="external text a_bigger_text">
         Debian/Ubuntu</a> (via KXStudio repositories)<br/>
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
