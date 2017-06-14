<?php
$PAGE_TITLE    = "KXStudio Documentation";
$PAGE_TYPE     = "NONKXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Documentation", "/Documentation", "/Documentation:KXStudio14045:ReleaseNotes");
$PAGE_SOURCE_2 = ARRAY("Documentation", "KXStudio 14.04.5", "Release Notes");
include_once("includes/header.php");
?>

<p>
    These are the release notes related to the KXStudio 14.04.5 Release, based on Ubuntu 14.04.5 LTS.<br/>
</p>

<p><br/></p>

<h4><span class="mw-headline" id="LiveDVDNotes">KXStudio 12.04.5 Live-DVD Notes</span></h4>
<ul>
    <li>The live session user name is "kxstudio" and has no password.</li>
    <li>Synaptic is used for handling package management in the Live-DVD, users do not receive package update notifications.<br/>
        Users should open synaptic (or a similar tool) and do system updates on a regular basis.</li>
    <li>Neither PulseAudio or Wine are included in the Live-DVD, they need to be installed if required.<br/>
        Because Firefox now requires PulseAudio, it will not produce any sound by default on this Live-DVD.
    </li>
    <li>Sometimes the keyboard layout is not set-up correctly on the live session. This can be manually fixed by running:
        <pre>setxkbmap pt</pre>
        <i>(replace '</i>pt<i>' by the relevant keyboard layout/language).</i>
    </li>
    <li>Installation for (U)EFI systems will fail due to missing packages if not connected to the internet.<br/>
        If you need to install on such systems, make sure to connect to the internet before starting the installer.
    </li>
    <li>The list of packages installed on the Live-DVD is available
            <a href="<?php echo $ROOT; ?>/Paste/c6i94" class="external text" rel="nofollow">here</a> for 32bit and
            <a href="<?php echo $ROOT; ?>/Paste/MpWgT" class="external text" rel="nofollow">here</a> for 64bit.</li>
</ul>

<p><br/></p>

<h4><span class="mw-headline" id="CurrentNotes">Current 14.04.5 Notes</span></h4>
<ul>
    <li>Some applications and websites don't work nicely with dark themes, which KXStudio uses by default.<br/>
        This is not a bug in the theme(s) but rather upstream (ie, app and website authors).<br/>
        We encourage users to report such issues upstream so they can be fixed for everyone using dark themes.</li>
    <li>The KXStudio GTK3 theme is unfinished. Applications that use GTK3 might appear slightly broken.</li>
</ul>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
