<?php
$PAGE_TITLE    = "KXStudio : Applications : Cadence-Render";
$PAGE_TYPE     = "APPLICATION";
$PAGE_SOURCE_1 = ARRAY("/Applications", "/Applications:Cadence-Render");
$PAGE_SOURCE_2 = ARRAY("Applications", "Cadence-Render");
include_once("includes/header.php");
?>

<!-- intro -->
<p>
    Cadence-Render is a tool to record (or 'render') a JACK project using jack-capture, controlled by JACK Transport.<br/>
    It supports a vast number of file types and can render in both realtime and freewheel modes.<br/>
</p>
<p>
    This tool can be executed as 'cadence_render' or within <a href="<?php echo $ROOT; ?>/Applications:Catia">Catia</a> and
    <a href="<?php echo $ROOT; ?>/Applications:Claudia">Claudia</a> from their 'Tools' menu.<br/>
    The minimum required version of jack-capture is 0.9.60. If jack-capture is not found in $PATH, Cadence-Render will refuse to run.
</p>

<!-- Interface -->
<h3><span class="mw-headline" id="Interface"> The Interface </span></h3>
<p>
    A screenshot follows:<br/>
    <a href="screenshots/cadence-render.png" class="external text" rel="nofollow"><img src="screenshots/cadence-render.png" alt="cadence-render.png" /></a>
</p>
<p>
    You have two render modes: Realtime and Freewheel (more on that below).<br/>
    The Start and End Time specifies what part of the JACK project to record. The "now" buttons will change their values to the current JACK Transport location.<br/>
    Which encoding formats are available will depend on your current jack-capture version. Newer versions should support more formats. mp3 is not an option for the time being.<br/>
</p>
<p>
    When recording, the 'Render' button will change to 'Stop', and the progress bar will slowly fill indicating how much percentage of the project has been rendered so far.<br/>
    The rest of the interface is pretty straight forward.
</p>

<!-- Usage -->
<h3><span class="mw-headline" id="Usage"> Usage </span></h3>
<p>
    Cadence-Render uses jack-capture to do the actual recording in the background.<br/>
    When 'Render' is pressed it will change the JACK buffer-size first (if modified), relocate Transport to the position specified in "Start Time" and then start recording.<br/>
    The recording will automatically stop when JACK Transport reaches the time set in "End Time". If the buffer-size was changed, it will be changed back.<br/>
    This makes it particularly useful to render projects in freewheel mode with apps that don't support it directly.
</p>
<p>
    Changing the buffer size before recording might be useful if you use plugin automation in hosts that don't support per-sample automation.<br/>
    The way this works is that a plugin process() call is only called once per JACK callback and thus a plugin parameter will have low precision.<br/>
    Having a lower buffer size means the host will have to call process() more often (thus increasing precision), but at a cost of higher CPU usage.<br/>
    But note that, if the host or plugin takes too much time in the JACK callback, the audio buffer will not be filled properly and you'll most likely hear "cracks" (aka xruns). <!--<br/>-->
    Freewheel mode avoids these issues (see below).
</p>
<p>
    The recordings will be saved in the "Output folder" named as "jack_capture_#.ext", where '#' is a number suffix and '.ext' the appropriate extension for the selected encoding format.
</p>
<p>
    NOTE: We recommend the use of padding in your songs (ie, put some silence before the beginning and end of a song).<br/>
    This is because the very first sounds at the beginning of a song might not be timed properly (JACK apps need to catch up with the transport and start rolling). A padding of 8 beats is usually enough here.<br/>
    Also, when some applications reach their song end they might start-over transport at 0:00, which will cause the recording to never reach the "End Time" and thus never stop.
</p>

<!-- Extra -->
<h3><span class="mw-headline" id="RealtimeVsFreewheel"> Realtime vs. Freewheel </span></h3>
<p>
    In short, Realtime is the "live" version of audio you hear when making music. If you hear what you're doing, you're on realtime mode.<br/>
    Freewheel is the "offline" version, where audio (and midi) is processed as fast as possible. You won't hear anything when in this mode.<br/>
    During freewheel JACK will not allow new clients to be registered or connections to be made. It's literally meant to be used for recordings.
</p>
<p>
    Rendering in freewheel is sometimes useful because both host and plugins can take as much time as they need to process, independently of the buffer size.<br/>
    This is also useful when your project gets too big and can no longer play in realtime without xruns.
</p>
<p>
    Not all applications work in freewheel mode though, for example if it relies on any kind of event communication other than JACK-MIDI (like ALSA-MIDI or OSC).<br/>
    This is because JACK is running faster than realtime, so any external events can't catch up in time.<br/>
    We encourage you to use JACK-MIDI whenever possible. Not only does it allow freewheel rendering but also provides perfect timing between applications.
</p>

<!-- Download -->
<h3><span class="mw-headline" id="Download"> Download </span></h3>
<p>
    Cadence-Render is available in the KXStudio repositories and ArchLinux AUR ('cadence-tools' package in the KXStudio repositories, 'cadence' in AUR).<br/>
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
