<?php
$PAGE_TITLE    = "KXStudio";
$PAGE_TYPE     = "NONKXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Documentation", "/Documentation", "/Documentation:Manual:cadence_introduction");
$PAGE_SOURCE_2 = ARRAY("Documentation", "Manual", "Cadence Introduction");
include_once("includes/header.php");
?>

<div class="level1">

<p>

Cadence controls and monitors various Linux sound systems as well as audio-related system settings. Below is a screenshot of its main window and following that is an explanation of what it all means and how you use it.
</p>

<p>
<a href="<?php echo $ROOT; ?>/screenshots/cadence1.png" class="media" title="cadence.png"><img src="<?php echo $ROOT; ?>/screenshots/cadence1.png" class="media" alt="" /></a>
</p>

</div>

<h2><span name="system_information" id="system_information">System Information</span></h2>
<div class="level2">

<p>

This tells you the operating system, kernel version, and whether you are running a 32 or 64 bit <acronym title="Operating System">OS</acronym>. The kernel could be said to be the engine of Linux and KXStudio includes a low-latency kernel which has been optimized to get the best performance from JACK.
</p>

</div>

<h2><span name="system_status" id="system_status">System Status</span></h2>
<div class="level2">

<p>

This lets you select the CPU Scaling Governor, a property of the Linux kernel which controls the CPU speed. In &#039;performance&#039; mode, your CPU will run at full speed all the time. This mode consumes the most power but ensures the best performance and minimum CPU-related sound issues. In many cases (especially on battery powered devices) using &#039;ondemand&#039; makes more sense as this ups the CPU speed when its needed but clocks it back down when the computer is idle which helps save power. <em>Note: to enable this option in KXStudio 12.04.1, you must first install “indicator-cpufreq” but this will be included on install in 12.04.2.</em>
</p>

</div>

<h2><span name="system_checks" id="system_checks">System Checks</span></h2>
<div class="level2">

<p>

Current kernel is a verification that you&#039;re running a realtime or lowlatency kernel. This check will be ticked already if you installed from the KXStudio <acronym title="International Organization for Standardization">ISO</acronym> as it includes a low latency kernel. The other check verifies that your user is included in the audio group. Being a member of the audio group is required for your user to run JACK in realtime mode for optimal performance. You can add your user to the audio group by running:

</p>
<pre class="code">sudo adduser &lt;username&gt; audio</pre>

<p>

Replace &lt;username&gt; with your KXStudio user name when you run that command in a terminal. You will then need to log out and back in or reboot before your user will be recognised as being in the audio group.
</p>

</div>

<h2><span name="jack_status" id="jack_status">JACK Status</span></h2>
<div class="level2">

<p>

<strong>Server Status</strong> tells you if the JACK server is running or not. You cannot run any JACK-dependant software unless the JACK server is started beforehand.
</p>

<p>
<strong>Realtime</strong> tells you if JACK is running with realtime scheduling or not. Realtime scheduling allows JACK to take priority over other programs being run and hence improves performance of JACK applications.
</p>

<p>
<strong>DSP Load</strong> is the current CPU load estimated by JACK. If it gets too high you may experience performance issues.
</p>

<p>
<strong>Xruns</strong> For JACK to operate smoothly and without drop-outs it requires that its buffers (the memory used to transport audio) provide a continuous stream of data. Whenever this data fails to arrive in time to satisfy the requests of a JACK app it causes an xrun which is often accompanied by a disruption to the sound output. The key to success with JACK is to eliminate or avoid xruns.
</p>

<p>
<strong>Buffer</strong> size is measured in frames per second. It determines the latency between the audio being received by JACK and being sent to the output device. The smaller the buffer the lower the latency and, as a result, the higher the accuracy when monitoring audio for multitrack recording. 1024 is the default and is usually a safe value but smaller buffer sizes have less latency, i.e. less delay between the input and output. Try different settings to see how low you can go when recording without getting xruns. The functioning of lower size buffers depends on the power of your CPU and the specifics of your audio device. The lowest buffer most devices can handle well is 64.
</p>

<p>
<strong>Sample rate</strong> is the frequency JACK will run and record audio at. 44.1kHz is the CD audio standard, but 48kHz is more common to go with video or for other typical audio. Higher sample rates allow for higher quality but take more disk space. Even for professional purposes, 48kHz is usually fine as the default.
</p>

<p>
<strong>Latency</strong> is the JACK capture latency which measures the time taken to fill the audio capture buffer. This value is determined by the buffer, period size and samplerate settings used to start JACK.
</p>

</div>

<h2><span name="jack_controls" id="jack_controls">JACK Controls</span></h2>
<div class="level2">

<p>

<strong>Start</strong> Starts the JACK server, if its not running. This is the recommended way to start JACK.
</p>

<p>
<strong>Stop</strong> stops the JACK server. It is wise to save your work in any open JACK apps before stopping JACK, just to be safe.
</p>

<p>
<strong>Force restart</strong> should &#039;Start&#039; fail to start JACK, it is worth trying &#039;Force restart&#039; but you may lose the last changes made to the JACK settings.
</p>

<p>
<strong>Configure</strong> opens the JACK settings window, which is covered in the next chapter.
</p>

<p>
<strong>Switch Master</strong> tells JACK to apply any changes made in the JACK settings window.
</p>

<p>
<strong>Auto-start JACK or LADISH at login</strong> lets you pick if you&#039;d like to start JACK or a LADISH studio at boot. KXStudio includes an app called Claudia which lets you create virtual &#039;LADISH&#039; studios of interlinked audio applications. After creating such a studio within Claudia, you can use Cadence to configure your machine boot into a saved LADISH studio configuration. Starting a LADISH studio at boot also starts JACK using the settings defined within the studio.
</p>

</div>

<h2><span name="jack_bridges" id="jack_bridges">JACK Bridges</span></h2>
<div class="level2">

<p>

Cadences main window integrates the control of a few &#039;JACK bridges&#039; -services which enable alternate Linux sound systems to run seemlessly atop JACK.
</p>

<p>
The ALSA audio bridge enables one or more ALSA audio applications to access your JACK device when it is started. Most everybody will want to ensure this is kept running alongside JACK as it enables audio for non-JACK apps such as Firefox. If you have chosen for JACK to start at boot then the ALSA audio bridge also gets started automatically.
</p>

<p>
The ALSA MIDI bridge needs to be running if you want to use any MIDI hardware.
</p>

<p>
PulseAudio is not included by default with KXStudio, and so the PulseAudio bridge will not function without PulseAudio.. Most applications which use PA also use ALSA directly so there is then no need for PA or the bridge. If needed for some reason, you can use PA with JACK via the bridge if PulseAudio is installed first.

</p>

</div>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
