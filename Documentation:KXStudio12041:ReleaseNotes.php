<?php
$PAGE_TITLE    = "KXStudio Documentation";
$PAGE_TYPE     = "NONKXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Documentation", "/Documentation", "/Documentation:KXStudio12041:ReleaseNotes");
$PAGE_SOURCE_2 = ARRAY("Documentation", "KXStudio 12.04.1", "Release Notes");
include_once("includes/header.php");
?>

<p>
    These are the release notes related to the KXStudio 12.04.1 Release, based on Ubuntu 12.04.1 LTS.<br/>
    We recommend you to take a look at the Ubuntu's 12.04 release notes too,
        <a href="https://wiki.ubuntu.com/PrecisePangolin/ReleaseNotes" class="external text" rel="nofollow">here</a>.<br/>
    (Read the 'Kubuntu' notes if you use KDE, 'Xubuntu' for XFCE and so on).
</p>

<p><br/></p>

<h4><span class="mw-headline" id="LiveDVDNotes">KXStudio 12.04.1 Live-DVD Notes</span></h4>
<ul>
    <li>The live session user name is "kxstudio" and has no password.</li>
    <li>Because Carla is still unfinished, FeSTige is currently on the DVD (and thus in the default install).<br/>
        This is only temporary, FeSTige is no longer being developed and will be soon replaced by Carla functionality.</li>
    <li>Sometimes the keyboard layout is not set-up correctly on the live session. This can be manually fixed by running:<br/>
        <code>setxkbmap pt</code> <i>(replace 'pt' by the relevant keyboard layout/language).</i></li>
    <li>The guitarix version included in the DVD has CPU optimizations enabled and may not work on older systems.<br/>
        This can be fixed by updating its package during the live session.</li>
    <li>The list of packages installed on the Live-DVD is available
            <a href="<?php echo $ROOT; ?>/Paste/GvxoV" class="external text" rel="nofollow">here</a> for 32bit and
            <a href="<?php echo $ROOT; ?>/Paste/nUP7n" class="external text" rel="nofollow">here</a> for 64bit.</li>
</ul>

<p><br/></p>

<h4><span class="mw-headline" id="CurrentNotes">Current 12.04.1 Notes</span></h4>
<ul>
    <li>The Carla tool is unfinished, and as such it will show a warning every-time you start it.<br/>
        We're working hard to make it complete and stable as soon as possible, so stay tuned.</li>
    <li>Only KDE4 is officially supported now. XFCE will also work but your experience may not be as great.<br/>
        Other desktops are unsupported at this point.</li>
    <li>Ubuntu is focused at PulseAudio and doesn't provide good raw/ALSA mixers by default if you're Desktop is not KDE.<br/>
        On such cases you should disable the PulseAudio mixer and use another tool (such as kmix, qamix, volti or alsamixer).<br/>
        You may need to reconfigure the multimedia global shortcuts to use the new mixer</li>
    <li>Some applications and websites don't work nicely with dark themes, which KXStudio uses by default.<br/>
        This is not a bug in the theme(s) but rather upstream (ie, app and website authors).<br/>
        We encourage users to report such issues upstream so they can be fixed for everyone using dark themes.</li>
    <li>Synaptic is now used for handle package management in KXStudio, and as such users won't receive update notifications anymore.<br/>
        Users should open synaptic and do system updates on a regular basis.</li>
</ul>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
