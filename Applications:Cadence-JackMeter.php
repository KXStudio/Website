<?php
$PAGE_TITLE    = "KXStudio : Applications : Cadence-JackMeter";
$PAGE_TYPE     = "APPLICATION";
$PAGE_SOURCE_1 = ARRAY("/Applications", "/Applications:Cadence-JackMeter");
$PAGE_SOURCE_2 = ARRAY("Applications", "Cadence-JackMeter");
include_once("includes/header.php");
?>

<!-- intro -->
<p>
    Cadence-JackMeter is a digital peak meter for JACK.<br/>
    It automatically connects itself to all application JACK output ports that are also connected to the system output.
</p>
<p>
    This tool can be executed as 'cadence-jackmeter' for monitoring outputs or 'cadence-jackmeter -in' for monitoring inputs.
</p>

<!-- Interface -->
<h3><span class="mw-headline" id="Interface"> The Interface </span></h3>
<p>
    A screenshot follows:<br/>
    <a href="screenshots/cadence-jackmeter.png" class="external text" rel="nofollow"><img src="screenshots/cadence-jackmeter.png" alt="cadence-jackmeter.png" /></a>
</p>
<p>
    This is a regular digital-audio peak meter as you probably have seen many times before.<br/>
    Note that the peak values are based on programming data (0.0 &lt;-&gt; 1.0) and not dB.
</p>
<p>
    The meter has small lines to guide you. The value of these lines are (from bottom to top):
</p>
<ul>
    <li>0.30%</li>
    <li>0.50%</li>
    <li>0.70%</li>
    <li>0.83%</li>
    <li>0.90%</li>
    <li>0.96%</li>
</ul>

<!-- Usage -->
<h3><span class="mw-headline" id="Usage"> Usage </span></h3>
<p>
    Simply run it and it will automatically connect to all JACK audio ports currently outputting sound to the 'system' client (or inputs if using '-in' argument).<br/>
    The JACK client name is 'M' for "meter". When you change connections in the JACK graph, Cadence-JackMeter will change accordingly.
</p>

<!-- Download -->
<h3><span class="mw-headline" id="Download"> Download </span></h3>
<p>
    Cadence-JackMeter is available in the KXStudio repositories and ArchLinux AUR ('cadence-tools' package in the KXStudio repositories, 'cadence' in AUR).<br/>
    <img src="images/ico_arch.png" alt="" class="img_text_align_spaced"/>
        <a href="https://aur.archlinux.org/packages/cadence/" class="external text a_bigger_text" rel="nofollow" target="_blank">
         ArchLinux</a> (AUR)<br/>
    <img src="images/ico_debian.png" alt="" class="img_text_align_spaced"/>
        <a href="apt://cadence-tools" class="external text a_bigger_text">
         Debian/Ubuntu</a> (via KXStudio repositories)<br/>
</p>
<p>
    Pre-compiled binaries are available for Linux and Windows (part of the Cadence bundle).<br/>
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
