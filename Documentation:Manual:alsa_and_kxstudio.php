<?php
$PAGE_TITLE    = "KXStudio";
$PAGE_TYPE     = "NONKXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Documentation", "/Documentation", "/Documentation:Manual:alsa_and_kxstudio");
$PAGE_SOURCE_2 = ARRAY("Documentation", "Manual", "ALSA and KXStudio");
include_once("includes/header.php");
?>

<div class="level1">

<p>
The Advanced Linux Sound Architecture is the primary sound system used by Linux. Even those who only plan to use JACK with the FFADO (FireWire) drivers should still have familiarity with <acronym title="Advanced Linux Sound Architecture">ALSA</acronym>.
</p>

</div>

<h2><span name="kmix" id="kmix">kmix</span></h2>
<div class="level2">

<p>
The main <acronym title="Advanced Linux Sound Architecture">ALSA</acronym> mixer included with KXStudio is called kmix. You can use kmix to adjust audio input and output levels, mute and unmute channels and change other non-FireWire audio device settings such as selecting between SPDIF and analog inputs if your device has such features. The kmix system tray icon looks like this:
</p>

<p>
<img src="http://wiki.linuxaudio.org/_media/wiki/kmix-tray.png" class="media" title="The kmix icon" alt="The kmix icon" />
</p>

<p>
If you have a scrollwheel function on a mouse or trackpad, you can hover over the kmix tray icon and adjust the Master volume by moving the scrollwheel up and down. If you left-click on the kmix tray icon it will display a mini mixer. To see a full mixer with more controls, click the &#039;Mixer&#039; button within the mini mixer menu.
</p>

<p>
<a href="<?php echo $ROOT; ?>/screenshots/kmix.png" class="media" title="kmixer.png"><img src="<?php echo $ROOT; ?>/screenshots/kmix.png" class="media" title="kmix mixer" alt="kmix mixer" /></a>
</p>

<p>
Here we see the main kmix mixer window. kmix displays the controls for each <acronym title="Advanced Linux Sound Architecture">ALSA</acronym> device on its own separate tab. In this screenshot the &#039;HDA Intel&#039; onboard audio device is selected. 
</p>

<p>
You will notice that each fader has a small speaker icon just below it. When these speaker icons display a small red cross on them, as &#039;Beep&#039; does in the screenshot, that indicates the channel is currently muted. You can toggle muting simply by left-clicking on the speaker icons.
</p>

<p>
In the bottom right corner of the mixer window there is a tool icon. This icon allows you to configure which channels are available to control for the currently selected kmix device tab. You may find that some controls you need are missing at first, so you may add them via this Configure Channels window. A common example of when you might need to use the kmix Configure Channels window is if you are using any SPDIF (optical) ports, which are referred to as IEC958 devices under GNU/Linux, as such controls are often not displayed by default.
</p>

<p>
Whilst there is a standard defined for USB audio devices, relatively few devices fully comply with it. What this means for <acronym title="Advanced Linux Sound Architecture">ALSA</acronym> and USB devices is that sometimes you will see no controls under kmix for some USB devices or controls may not function as expected. Such issues may be worked around by inserting an app such as Non mixer or jack_mixer between an audio source and the problematic output device until the issue is fixed within <acronym title="Advanced Linux Sound Architecture">ALSA</acronym>.
</p>

</div>

<h2><span name="cadence_and_alsa" id="cadence_and_alsa">Cadence and ALSA</span></h2>
<div class="level2">

<p>
Cadence is primarily used to control and monitor the various Linux sound systems, including <acronym title="Advanced Linux Sound Architecture">ALSA</acronym>, under KXStudio. The main Cadence window has a &#039;JACK bridges&#039; section which contains two <acronym title="Advanced Linux Sound Architecture">ALSA</acronym>/JACK bridges - one for <acronym title="Advanced Linux Sound Architecture">ALSA</acronym> audio and one for MIDI. You will not hear audio produced by <acronym title="Advanced Linux Sound Architecture">ALSA</acronym>-only apps when JACK is running if the <acronym title="Advanced Linux Sound Architecture">ALSA</acronym> audio bridge is stopped. Likewise, you will be unable to access MIDI devices if the <acronym title="Advanced Linux Sound Architecture">ALSA</acronym> MIDI bridge isn&#039;t running when JACK is.
</p>

</div>

<h2><span name="non-jack_apps" id="non-jack_apps">non-JACK apps</span></h2>
<div class="level2">

<p>
As JACK increases in popularity, it is more widely supported. However, several apps are still <acronym title="Advanced Linux Sound Architecture">ALSA</acronym>-only. Such apps will have their audio channeled via the same <acronym title="Advanced Linux Sound Architecture">ALSA</acronym> to JACK bridge. These include:
</p>

<p>
<strong>Adobe Flash Player</strong> (as used by Firefox and other browsers for sites such as YouTube)
</p>

<p>
<strong>Skype</strong> If you don&#039;t require webcam or video support then it is recommended you use Mumble instead of Skype for VOIP. Although Mumble doesn&#039;t yet officially support JACK, there is a build of Mumble with JACK support available from the KXStudio repositories. However, if you need to use Skype it works fine provided the <acronym title="Advanced Linux Sound Architecture">ALSA</acronym> audio bridge is running.
</p>

<p>
<strong>Many games and other various programs</strong>
</p>

<p>
Some other apps have only partial JACK support. These work with JACK directly, have their own JACK connections, and function without the <acronym title="Advanced Linux Sound Architecture">ALSA</acronym> to JACK bridge, but their connections are not persistent. They will temporarily connect to JACK while playing but drop their connection as soon as playback is stopped. Examples of these apps are:
</p>

<p>
<strong>Audacity</strong>
</p>

<p>
<strong>SMPlayer</strong>
</p>

<p>
<strong>VLC</strong>
</p>

<p>
Hence, none of these offer the individual audio routing functionality or other features offered by fully JACK-native software.
</p>

</div>

<h2><span name="useful_alsa_commands" id="useful_alsa_commands">Useful ALSA commands</span></h2>
<div class="level2">

<p>
The following commands can be useful for troubleshooting <acronym title="Advanced Linux Sound Architecture">ALSA</acronym> issues in a terminal:
</p>
<pre class="code">alsamixer</pre>

<p>
The original <acronym title="Advanced Linux Sound Architecture">ALSA</acronym> mixer
</p>
<pre class="code">cat /proc/asound/cards</pre>

<p>
Displays attached <acronym title="Advanced Linux Sound Architecture">ALSA</acronym> devices
</p>
<pre class="code">cat ~/.asoundrc</pre>

<p>
Displays your <acronym title="Advanced Linux Sound Architecture">ALSA</acronym> configuration file
</p>
<pre class="code">sudo alsactl store 0</pre>

<p>
Saves the current settings for <acronym title="Advanced Linux Sound Architecture">ALSA</acronym> device 0
</p>

</div>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
