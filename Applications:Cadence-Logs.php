<?php
$PAGE_TITLE    = "KXStudio : Applications : Cadence-Logs";
$PAGE_TYPE     = "APPLICATION";
$PAGE_SOURCE_1 = ARRAY("/Applications", "/Applications:Cadence-Logs");
$PAGE_SOURCE_2 = ARRAY("Applications", "Cadence-Logs");
include_once("includes/header.php");
?>

<!-- intro -->
<p>
    Cadence-Logs is a small tool that shows JACK, A2J, LASH and LADISH logs in a multi-tab window.<br/>
    This is very similar to the the 'ladilog' app but here the logs are viewed in a text box, making it easy to browse and extract status messages using copy and paste commands.
</p>
<p>
    This tool can be executed as 'cadence_logs' or within <a href="<?php echo $ROOT; ?>/Applications:Catia">Catia</a> and
    <a href="<?php echo $ROOT; ?>/Applications:Claudia">Claudia</a> from their 'Tools' menu.
</p>

<!-- Interface -->
<h3><span class="mw-headline" id="Interface"> The Interface </span></h3>
<p>
    A screenshot follows, showing the JACK log:<br/>
    <a href="screenshots/cadence-logs.png" class="external text" rel="nofollow"><img src="screenshots/cadence-logs.png" alt="cadence-logs.png" /></a>
</p>
<p>
    It couldn't be simpler: 4 tabs for the different logs and 2 buttons.<br/>
    Each tab shows the log for the application indicated in the tab name. If a log does not exist, its tab will not be shown.<br />
    (As you can see in the screen-shot above the 'LASH' tab is missing, indicating that its log does not exist in the system).
</p>
<p>
    The 'Close' button will, obviously, close the tool window.<br/>
    The 'Purge all logs' button will empty <i>all</i> the available logs (it will not delete the files, but overwrite them). If a log file does not exist it will not be created.
</p>

<!-- Usage -->
<h3><span class="mw-headline" id="Usage"> Usage </span></h3>
<p>
    This is a very small tool with a very small purpose: to quickly view the audio-related logs and allow you to copy&amp;paste from them.<br/>
    The logs are actually files that exist within your home folder. The full filenames for each log are:<br/>
</p>
<ul>
    <li>JACK: ~/.log/jack/jackdbus.log</li>
    <li>A2J: ~/.log/a2j/a2j.log</li>
    <li>LASH: ~/.log/lash/lash.log</li>
    <li>LADISH: ~/.log/ladish/ladish.log</li>
</ul>

<!-- Download -->
<h3><span class="mw-headline" id="Download"> Download </span></h3>
<p>
    Cadence-Logs is available in the KXStudio repositories and ArchLinux AUR ('cadence-tools' package in the KXStudio repositories, 'cadence' in AUR).<br/>
    <img src="images/ico_arch.png" alt="" class="img_text_align_spaced"/>
        <a href="https://aur.archlinux.org/packages/cadence/" class="external text a_bigger_text" rel="nofollow" target="_blank">
         ArchLinux</a> (AUR)<br/>
    <img src="images/ico_debian.png" alt="" class="img_text_align_spaced"/>
        <a href="apt://cadence-tools" class="external text a_bigger_text">
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
