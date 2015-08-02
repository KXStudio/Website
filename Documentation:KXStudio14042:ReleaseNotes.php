<?php
$PAGE_TITLE    = "KXStudio Documentation";
$PAGE_TYPE     = "NONKXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Documentation", "/Documentation", "/Documentation:KXStudio14042:ReleaseNotes");
$PAGE_SOURCE_2 = ARRAY("Documentation", "KXStudio 14.04.2", "Release Notes");
include_once("includes/header.php");
?>

<p>
    <span style="color:#fa3a3a;">The information on this page is incomplete or outdated.</span>
</p>

<p>
    These are the release notes related to the KXStudio 14.04.2 Release, based on Ubuntu 14.04.2 LTS.<br/>
</p>

<p><br/></p>

<h4><span class="mw-headline" id="LiveDVDNotes">KXStudio 12.04.3 Live-DVD Notes</span></h4>
<ul>
    <li>The live session user name is "kxstudio" and has no password.</li>
    <li>Sometimes the keyboard layout is not set-up correctly on the live session. This can be manually fixed by running:<br/>
        <code>setxkbmap pt</code> <i>(replace 'pt' by the relevant keyboard layout/language).</i></li>
    <li>The list of packages installed on the Live-DVD is available
            <a href="<?php echo $ROOT; ?>/Paste/UEqO4" class="external text" rel="nofollow">here</a> for 32bit and
            <a href="<?php echo $ROOT; ?>/Paste/NeFVA" class="external text" rel="nofollow">here</a> for 64bit.</li>
</ul>

<p><br/></p>

<h4><span class="mw-headline" id="CurrentNotes">Current 12.04.3 Notes</span></h4>
<ul>
    <li>Ubuntu is focused at PulseAudio and doesn't provide good raw/ALSA mixers by default if you're Desktop is not KDE.<br/>
        On such cases you should disable the PulseAudio mixer and use another tool (such as kmix, qamix, volti or alsamixer).<br/>
        You may need to reconfigure the multimedia global shortcuts to use the new mixer</li>
    <li>Some applications and websites don't work nicely with dark themes, which KXStudio uses by default.<br/>
        This is not a bug in the theme(s) but rather upstream (ie, app and website authors).<br/>
        We encourage users to report such issues upstream so they can be fixed for everyone using dark themes.</li>
    <li>The linux 3.8 kernel has a small regression for USB-Audio interfaces, forcing users to use a high JACK buffer-size value.<br/>
        If this affects you, consider installing linux-lowlatency-3.2, -3.5 or -3.11 which do not have the issue.</li>
</ul>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
