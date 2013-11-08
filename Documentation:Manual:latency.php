<?php
$PAGE_TITLE    = "KXStudio";
$PAGE_TYPE     = "NONKXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Documentation", "/Documentation", "/Documentation:Manual:latency");
$PAGE_SOURCE_2 = ARRAY("Documentation", "Manual", "Latency compensation and xrun reduction tips");
include_once("includes/header.php");
?>

<div class="level1">

</div>

<h2><span name="compensating_for_loopback_latency" id="compensating_for_loopback_latency">Compensating for loopback latency</span></h2>
<div class="level2">

<p>

Although latency mostly refers to buffer size which delays immediate feedback of input, there is additional latency due to the basic processing of your audio interface. There is no way to reduce this “loopback” latency, but its existence will affect the timing of recorded overdubs. To address this, you can tell programs what the delay amount is so that compensation can be made, i.e. the recorded audio will be adjusted in time to account for this delay. Software alone cannot discover what the loopback latency is, so the following procedure is needed to determine the amount of compensation required:
</p>

<p>
You will need a loopback cable capable of connecting your audio device&#039;s physical input to its physical output.
</p>

<p>
1  - Connect your (mic) input to your (headphone) output with the loopback cable
</p>

<p>
2  - Start JACK with known good settings
</p>

<p>
3  - Open a terminal and run jack_iodelay. It will print &#039;Signal below threshold…&#039; until we make the JACK connections
</p>

<p>
4  - Use Catia or Claudia to connect the system capture_1 to &#039;jack_delay in&#039; and connect &#039;jack_delay out&#039; to the system playback_1 port
</p>

<p>
5  - With both physical and JACK connections made, jack_iodelay should print output such as &#039;use X for the backend arguments -I and -O&#039;
</p>

<p>
6  - In the terminal, use ctrl-C to stop jack_iodelay
</p>

<p>
7  - In Cadence or Claudia, open the JACK settings and enter the value X from jack_iodelay for both the the input and output extra latency values
</p>

<p>
8  - Engage the new JACK settings with the “Switch Master” button. If you re-run the above test there should be no additional loopback latency.
</p>

<p>
This information is used to tell programs how to adjust recordings so that the recorded result will line up precisely with how the original performance aligned with the previous tracks.
</p>

<p>
Because these settings are not saved in the software to go with the interface choice, you&#039;ll need to change them every time you switch devices. The easiest way to do this is to have Claudia sessions for each device so all the settings are saved together.
</p>

</div>

<h2><span name="minimizing_xruns" id="minimizing_xruns">Minimizing xruns</span></h2>
<div class="level2">

</div>

<h3><a name="disable_wireless_internet_when_recording" id="disable_wireless_internet_when_recording">Disable wireless internet when recording</a></h3>
<div class="level3">

<p>

Wifi adapters have been known to cause random xruns. Some laptops have an external hardware switch to disable wifi. Otherwise, uncheck “enable wireless” in the KDE system tray&#039;s network control. If primarily using ethernet, consider disabling wifi (aka 802.11 a/b/g/n) in the BIOS or UEFI menu.
</p>

</div>

<h3><a name="close_browsers_when_recording" id="close_browsers_when_recording">Close browsers when recording</a></h3>
<div class="level3">

<p>

Many pop-up ads and popular web sites make use of Adobe Flash. If you have any browser tabs open, it only takes one to be using a little bit of Flash to cause a big loss of CPU, lower latency and more xruns. You should try to avoid running unnecessary, CPU intensive programs when recording.
</p>

</div>

<h3><a name="avoid_realtime_resampling" id="avoid_realtime_resampling">Avoid realtime resampling</a></h3>
<div class="level3">

<p>

When using Digital Audio Workstations and similar apps such as samplers etc, it is recommended you convert any sound files you wish to import to use the same sample rate as the one you are using for JACK. Many apps let you import and use sound files of different sample rates to the one you are running JACK with but then attempt to resample the audio &#039;on-the-fly&#039; and this leads to xruns if your CPU cannot keep up.
</p>

<p>
You can check the sample rate of audio files using your favourite media player such as smplayer (push CTRL+I when playing your file) or VLC (push CTRL+J) or you can find out from the terminal using mediainfo. soundkonverter and XCFA are good tools for batch conversion of audio files.
</p>

</div>

<h3><a name="check_for_irq_conflicts" id="check_for_irq_conflicts">Check for IRQ conflicts</a></h3>
<div class="level3">

<p>

Open a terminal and run:

</p>
<pre class="code">cat /proc/interrupts</pre>

<p>

Ensure that your audio driver is not sharing an IRQ with another device. Fixing this can be as simple as changing which port a USB audio device is using, but otherwise <a href="http://www.wiki.linuxmusicians.com/doku.php?id=system_configuration#solve_irq_conflict_by_unbinding_devices" class="urlextern" title="http://www.wiki.linuxmusicians.com/doku.php?id=system_configuration#solve_irq_conflict_by_unbinding_devices"  rel="nofollow">see this guide to fixing IRQ conflicts.</a>

</p>

</div>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
