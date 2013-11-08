<?php
$PAGE_TITLE    = "KXStudio : Applications : Cadence-JackSettings";
$PAGE_TYPE     = "APPLICATION";
$PAGE_SOURCE_1 = ARRAY("/Applications", "/Applications:Cadence-JackSettings");
$PAGE_SOURCE_2 = ARRAY("Applications", "Cadence-JackSettings");
include_once("includes/header.php");
?>

<!-- intro -->
<p>
    Cadence-JackSettings is a simple and easy-to-use configure dialog for jackdbus (either JACK2 or JACK1 + DBus patch).<br/>
    It can configure JACK's driver and engine parameters (network not yet implemented), and it also supports LADISH studios.
</p>
<p>
    This tool can be executed as 'cadence_jacksettings' or from within <a href="<?php echo $ROOT; ?>/Applications:Cadence">Cadence</a>,
    <a href="<?php echo $ROOT; ?>/Applications:Catia">Catia</a> and <a href="<?php echo $ROOT; ?>/Applications:Claudia">Claudia</a>.
</p>

<!-- Interface -->
<h3><span class="mw-headline" id="Interface"> The Interface </span></h3>
<p>
    A screenshot of the first, "Engine" tab:<br/>
    <a href="screenshots/cadence-jacksettings1.png" class="external text" rel="nofollow"><img src="screenshots/cadence-jacksettings1.png" alt="cadence-jacksettings1.png" /></a>
</p>
<p>
    A screenshot of the second, "Driver" tab:<br/>
    <a href="screenshots/cadence-jacksettings2.png" class="external text" rel="nofollow"><img src="screenshots/cadence-jacksettings2.png" alt="cadence-jacksettings2.png" /></a>
</p>
<p>
    The third tab, "Network", is not implemented yet.
</p>
<p>
    You probably recognize some options from other JACK configure tools such as QjackCtl.<br/>
    They are similar because they manage the same thing (JACK). The difference is mostly at the layout level — that is, how things are organized in the GUI.
</p>
<p>
    Most options have a tooltip to help. The 'driver' option (table on the left in the 2nd screenshot) will trigger small changes on the layout.<br/>
    NOTE: Leaving a particular driver selected after closing the tool will result in that driver being used the next time JACK starts.
</p>

<!-- Usage -->
<h3><span class="mw-headline" id="Usage"> Usage </span></h3>
<p>
    The options will be available (or not) according to your JACK version.<br/>
    JACK1 and JACK2 options are different, so Cadence-JackSettings interface will change for them. Some set-ups might also have LADISH specific options.<br/>
    <i>(For this first release Cadence-JackSettings is targeted at JACK2 and some minor JACK1 options will be missing)</i>.
</p>
<p>
    If you want a more in-depth explanation of what each option does, you can checkout your 'jackd' manual page or view it online <a href="http://trac.jackaudio.org/wiki/jackd%281%29" class="external text" rel="nofollow" target="_blank">here</a>.<br/>
    The first part of that manual relates to the 'Engine' options, then specific driver ones.<br/>
    Remember that Cadence-JackSettings doesn't really uses 'jackd', but since we are both targeting JACK the options are the same.
</p>
<p>
    NOTE: The settings are shared across jackdbus-capable applications (jack_control and ladiconf), but not QjackCtl.<br/>
    QjackCtl doesn't support querying and storing settings via jackdbus (it uses its own internal settings), so any change in it will not affect Cadence-JackSettings and vice-versa.<br/>
    We recommend using only Cadence and avoid (or uninstall) QjackCtl.
</p>

<!-- Download -->
<h3><span class="mw-headline" id="Download"> Download </span></h3>
<p>
    Cadence-JackSettings is available in the KXStudio repositories and ArchLinux AUR ('cadence-tools' package in the KXStudio repositories, 'cadence' in AUR).<br/>
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
