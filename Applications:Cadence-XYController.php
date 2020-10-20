<?php
$PAGE_TITLE    = "KXStudio : Applications : Cadence-XY Controller";
$PAGE_TYPE     = "APPLICATION";
$PAGE_SOURCE_1 = ARRAY("/Applications", "/Applications:Cadence-XYController");
$PAGE_SOURCE_2 = ARRAY("Applications", "Cadence-XY Controller");
include_once("includes/header.php");
?>

<!-- intro -->
<p>
    Cadence-XY Controller is a simple XY widget that sends and receives data from Jack MIDI.<br/>
    It can send data through specific channels and has a MIDI Keyboard too.
</p>
<p>
    This tool can be executed as 'cadence_xycontroller'.
</p>

<!-- Interface -->
<h3><span class="mw-headline" id="Interface"> The Interface </span></h3>
<p>
    A screenshot follows showing the piano, running under <br/>
    <a href="screenshots/cadence-xycontroller.png" class="external text" rel="nofollow"><img src="screenshots/cadence-xycontroller.png" alt="cadence-xycontroller.png" /></a>
</p>
<p>
    Another screenshot, now running under Windows 8:<br/>
    <a href="screenshots/cadence-xycontroller_win8.png" class="external text" rel="nofollow"><img src="screenshots/cadence-xycontroller_win8.png" alt="cadence-xycontroller_win8.png" /></a>
</p>
<p>
    The XY widget is controlled by the mouse, and it syncs its values to the X and Y knobs. Moving the knobs will change the XY cursor accordingly.<br/>
    The "Smooth" checkbox will make XY cursor changes smoother (the cursor will follow the mouse with inertia), but it will not change the knobs' behaviour.
</p>
<p>
    There's also a MIDI-keyboard that is usually hidden (use "Settings" menu, "Show MIDI Keyboard" to show or hide it).<br/>
    You can use the mouse or keyboard to trigger notes. The keyboard uses a 'qwerty' layout.
</p>

<!-- Usage -->
<h3><span class="mw-headline" id="Usage"> Usage </span></h3>
<p>
    The first thing to do after starting this tool is to make the proper JACK connections so that it outputs the data somewhere (<a href="<?php echo $ROOT; ?>/Applications:Catia">Catia</a> does the job nicely).<br/>
</p>
<p>
    Cadence-XY Controller can both receive and send MIDI data. This data will not pass-through, which is intentional and not a design failure.<br/>
    MIDI channels used can be specified in the "Settings" menu. If data is received on a channel it's not set to listen to, such data will be ignored.
</p>
<p>
    MIDI data will be sent whenever the keyboard or XY cursor changes. When everything is stationary, no data is sent.<br/>
    MIDI-Keyboard actions will send regular MIDI note-on/offs. XY cursor changes will send MIDI data that look like this:<br/>
    <code>
        Status: &nbsp;0xB0 + <i>channel</i> - 1<br/>
        Control: 0x01 <i>(Modulation, as defined in "X Controls")</i><br/>
        Value: &nbsp;&nbsp;<i>X value percentage</i> * 127 / 100<br/>
    </code><br/>
</p>

<!-- Download -->
<h3><span class="mw-headline" id="Download"> Download </span></h3>
<p>
    Cadence-XYController is available in the KXStudio repositories and ArchLinux ('cadence-tools' package in the KXStudio repositories, 'cadence' in ArchLinux).<br/>
    <img src="images/ico_arch.png" alt="" class="img_text_align_spaced"/>
        <a href="https://www.archlinux.org/packages/community/x86_64/cadence/" class="external text a_bigger_text" rel="nofollow" target="_blank">
         ArchLinux</a> (Community)<br/>
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
