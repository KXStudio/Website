<?php
$PAGE_TITLE    = "KXStudio Documentation";
$PAGE_TYPE     = "NONKXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Documentation", "/Documentation", "/Documentation:KXStudio1804:ReleaseNotes");
$PAGE_SOURCE_2 = ARRAY("Documentation", "KXStudio 18.04", "Release Notes");
include_once("includes/header.php");
?>

<p>
    These are the release notes related to the KXStudio 18.04 Release, based on Neon 18.04 LTS. (which in turn is based on Ubuntu)<br/>
</p>

<p><br/></p>

<h4><span class="mw-headline" id="LiveDVDNotes">KXStudio 18.04 Live-DVD Notes</span></h4>
<ul>
    <li>The live session user name is "kxstudio" and has no password.</li>
    <li>Wine is not included in the Live-DVD, it needs to be installed if required.<br/>
        A meta-package called kxstudio-meta-wine was created or it, for convenience. Just open Synaptic and install it.
    </li>
    <li>Sometimes the keyboard layout is not set-up correctly on the live session. This can be manually fixed by running:
        <pre>setxkbmap pt</pre>
        <i>(replace '</i>pt<i>' by the relevant keyboard layout/language).</i>
    </li>
    <li>Installation for (U)EFI systems will fail due to missing packages if not connected to the internet.<br/>
        If you need to install on such systems, make sure to connect to the internet before starting the installer.
    </li>
    <!--<li>The list of packages installed on the Live-DVD is available
            <a href="<?php echo $ROOT; ?>/Paste/c6i94" class="external text" rel="nofollow">here</a> for 32bit and
            <a href="<?php echo $ROOT; ?>/Paste/MpWgT" class="external text" rel="nofollow">here</a> for 64bit.</li>-->
</ul>

<p><br/></p>

<h4><span class="mw-headline" id="CurrentNotes">Current 14.04.5 Notes</span></h4>
<ul>
    <li>TODO: test 18.04 and write relevant notes here</li>
</ul>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
