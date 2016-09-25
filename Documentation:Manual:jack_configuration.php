<?php
$PAGE_TITLE    = "KXStudio";
$PAGE_TYPE     = "NONKXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Documentation", "/Documentation", "/Documentation:Manual:jack_configuration");
$PAGE_SOURCE_2 = ARRAY("Documentation", "Manual", "JACK Configuration");
include_once("includes/header.php");
?>

<div class="level1">

<p>
Most of JACK&#039;s important configuration options are set within the Driver tab of Cadence&#039;s JACK Settings window which you can access via Configure under Cadence&#039;s main window, as shown below:
</p>

<p>
<a href="<?php echo $ROOT; ?>/screenshots/cadence-jacksettings2.png" class="media" title="cadence-jack-settings.png"><img src="<?php echo $ROOT; ?>/screenshots/cadence-jacksettings2.png" class="media" title="JACK Settings" alt="JACK Settings" /></a>
</p>

</div>

<h2><span name="jack_driver" id="jack_driver">JACK Driver</span></h2>
<div class="level2">

<p>
The driver column to the left selects which JACK driver you wish to configure and use next time you start JACK with Cadence. Those using FireWire devices should use the FireWire driver but otherwise you should select ALSA for your JACK driver.
</p>

<p>
The top 3 drop-down options within Cadence&#039;s ALSA driver configuration are the most important as these let you select which device(s) to use for physical audio IO. If &#039;Duplex Mode&#039; is enabled then you can assign different ALSA devices to handle Input and Output individually. This could be useful, for example, if you need a mic input but wanted to have your sound output via a USB audio device that doesn&#039;t have a mic input. In this case you could use your computers onboard ALSA device, which likely does have a mic input, as a separate input device. If Duplex Mode is not selected then the top drop-down is used to select the ALSA device to use for both audio input and output.
</p>

</div>

<h2><span name="jack_properties" id="jack_properties">JACK Properties</span></h2>
<div class="level2">

<p>
Sample Rate, Buffer Size and Periods/Buffer determine the base JACK latency. Their default values of 48000, 1024 and 2 respectively should work with most devices but a latency over 10ms is not usually considered good enough to be called realtime. Anyone interested in multitrack recording may wish to experiment with these settings to achieve the lowest, xrun-free latency their hardware will allow. It is possible to achieve 1ms latency with good hardware and the correct configuration.
</p>

<p>
<strong>Sample Rate</strong> Due to the way latency is calculated, it is recommended you use 48000 or 96000Hz for the lowest latency.
</p>

<p>
<strong>Buffer</strong> A smaller buffer gives lower latency. The lowest size most devices can handle is 64. Lower quality hardware may not handle any lower than 512.
</p>

<p>
<strong>Periods/Buffer</strong> The larger the period size, the higher the latency but the less chance of xruns. Experiment with using 2 or 3 periods/buffer.
</p>

<p>
<strong>Extra Latency</strong> To achieve the highest level of precision in overdubbing you should provide the extra latency values (in frames) which can be obtained with jack_iodelay. This process is covered in the Latency chapter.
</p>

</div>

<h2><span name="checking_for_errors_with_cadence-logs" id="checking_for_errors_with_cadence-logs">Checking for errors with cadence-logs</span></h2>
<div class="level2">

<p>
If JACK fails to start you can find out whats causing the problem by checking the Cadence logs. You can access the Cadence logs by launching it from under the &#039;Tools&#039; tab of the main Cadence window or you can run <strong>cadence-logs</strong> from a terminal.
</p>

</div>

<h2><span name="jack_and_firewire" id="jack_and_firewire">JACK and FireWire</span></h2>
<div class="level2">

<p>
kmix and alsamixer do not support FFADO. To adjust levels, enable phantom power and change other options for FireWire devices use ffado-mixer after you have started JACK with the FireWire driver. If you have trouble, running ffado-diag in a terminal may tell you more than Cadence&#039;s JACK error logs.
</p>

</div>

<h2><span name="rtirq_configuration" id="rtirq_configuration">rtirq configuration</span></h2>
<div class="level2">

<p>
This is an optional step that can help reduce latency. rtirq is a script that detects audio devices and prioritises them with the kernel according to a list specified in its configuration file. KXStudio&#039;s default rtirq configuration looks like:
</p>

<p>
RTIRQ_NAME_LIST=“firewire snd usb i8042”
</p>

<p>
Here we see FireWire devices have priority over ALSA and USB devices because its mentioned first. If you are mainly running JACK on a USB device you may wish to make usb the first item in the list by editing that line in the rtirq config file with a command such as:
</p>
<pre class="code">kdesudo kate /etc/default/rtirq</pre>

</div>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
