<?php
$PAGE_TITLE    = "KXStudio : Applications : Cadence";
$PAGE_TYPE     = "APPLICATION_NU";
$PAGE_SOURCE_1 = ARRAY("/Applications", "/Applications:Cadence");
$PAGE_SOURCE_2 = ARRAY("Applications", "Cadence");
include_once("includes/header.php");
?>

<!-- intro -->
<p>
    Cadence is a set of tools useful for audio production.<br/>
    Cadence itself is also an application (the main one), which this page will document.<br/>
    There are other applications that are part of the Cadence suite, they are usually named as the "Cadence tools".<br/>
    They are:
</p>
<ul>
    <li><a href="<?php echo $ROOT; ?>/Applications:Catarina">Catarina</a></li>
    <li><a href="<?php echo $ROOT; ?>/Applications:Catia">Catia</a></li>
    <li><a href="<?php echo $ROOT; ?>/Applications:Claudia">Claudia</a></li>
</ul>
<p>
    Some of these also have sub-tools, such as Cadence-JackMeter and Claudia-Launcher.<br/>
    Each of these sub-tools is properly documented in its respective page.
</p>
<p>
    Cadence can be executed as 'cadence'.<br/>
    Running it with '--minimized' makes it start minimized in the systray.
</p>

<!-- Interface -->
<h3><span class="mw-headline" id="Interface"> The Interface </span></h3>
<p>
    A screenshot of the first, "System" tab:<br/>
    <i>(The panels on the left display system information and checks, and on the right you have the current status of the JACK server and bridges)</i><br/>
    <a href="screenshots/cadence1.png" class="external text" rel="nofollow"><img src="screenshots/cadence1.png" alt="cadence1.png"/></a>
</p>
<p>
    A screenshot of the second, "Tools" tab:<br/>
    <i>(The screenshots are clickable, which will start their respective tools)</i><br/>
    <a href="screenshots/cadence2.png" class="external text" rel="nofollow"><img src="screenshots/cadence2.png" alt="cadence2.png"/></a>
</p>
<p>
    A screenshot of the third, "Tweaks" tab:<br/>
    <i>(This tab allows you to carry out some audio and system related tasks. Some options are not available on certain systems)</i><br/>
    <a href="screenshots/cadence3.png" class="external text" rel="nofollow"><img src="screenshots/cadence3.png" alt="cadence3.png"/></a>
</p>

<!-- Download -->
<h3><span class="mw-headline" id="Download"> Download </span></h3>
<p>
    Cadence is available in the KXStudio repositories and ArchLinux (both with 'cadence' package name).<br/>
    <img src="images/ico_arch.png" alt="" class="img_text_align_spaced"/>
        <a href="https://www.archlinux.org/packages/community/x86_64/cadence/" class="external text a_bigger_text" rel="nofollow" target="_blank">
         ArchLinux</a> (Community)<br/>
    <img src="images/ico_debian.png" alt="" class="img_text_align_spaced"/>
        <a href="apt://cadence" class="external text a_bigger_text">
         Debian/Ubuntu</a> (via KXStudio repositories)<br/>
</p>
<p>
    Pre-compiled binaries are available for Linux and Windows.<br/>
    <img src="images/ico_linux.png" alt="" class="img_text_align_spaced"/>
        <a href="http://sourceforge.net/projects/kxstudio/files/Releases/cadence/Cadence-0.8.1-linux32.tar.xz/download" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Linux 32bit</a><br/>
    <img src="images/ico_linux.png" alt="" class="img_text_align_spaced"/>
        <a href="http://sourceforge.net/projects/kxstudio/files/Releases/cadence/Cadence-0.8.1-linux64.tar.xz/download" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Linux 64bit</a><br/>
    <img src="images/ico_windows.png" alt="" class="img_text_align_spaced"/>
        <a href="http://sourceforge.net/projects/kxstudio/files/Releases/cadence/Cadence-0.8.1-win32.zip/download" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Windows 32bit</a><br/>
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
