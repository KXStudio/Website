<?php
$PAGE_TITLE    = "KXStudio";
$PAGE_TYPE     = "NONKXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Documentation", "/Documentation", "/Documentation:Manual:linux_audio_overview");
$PAGE_SOURCE_2 = ARRAY("Documentation", "Manual", "Linux Audio Overview");
include_once("includes/header.php");
?>

<div class="level1">

<p>
Anyone intending to use GNU/Linux as a platform for audio or video production will benefit from understanding the primary Linux sound sub-systems, their purposes and limitations.
</p>

</div>

<h2><span name="alsa" id="alsa">ALSA</span></h2>
<div class="level2">

<p>
<a href="http://www.alsa-project.org" class="urlextern" title="http://www.alsa-project.org"  rel="nofollow">ALSA</a>, the Advanced Linux Sound Architecture, is a collection of drivers and libraries that provide Linux with audio and MIDI support for onboard, PCI, and USB audio hardware. ALSA doesn&#039;t support FireWire audio devices — that requires FFADO and JACK (see below).
</p>

<p>
ALSA alone is insufficient for most AV production tasks because only one application can access an ALSA device at any one time. JACK and Pulseaudio were created mainly to overcome this restriction although they target different use cases. KXStudio includes an ALSA/JACK bridge program called “snd-aloop daemon” which enables the user to run ALSA-only apps alongside JACK and other JACK-native software. This bridge is turned on by default when JACK is started - see the <a target="_blank" href="http://wiki.linuxaudio.org/wiki/cadence_introduction" class="wikilink1" target="_parent" title="cadence_introduction">Cadence</a> instructions for more information.
</p>

</div>

<h2><span name="jack" id="jack">JACK</span></h2>
<div class="level2">

<p>
The <a href="http://jackaudio.org" class="urlextern" title="http://jackaudio.org"  rel="nofollow">JACK Audio Connection Kit</a> is a program (jackd aka the JACK server) and a protocol/<acronym title="Application Programming Interface">API</acronym> that enables the connection of a number of different applications to an audio device as well as allowing them to share audio and/or MIDI data between themselves. JACK applications may be connected on the same machine or remotely over a network. Think of JACK as a virtual audio patch panel, like on a physical mixing desk. While making these connections is not always automatic, the JACK system provides unparalleled flexibility for combining different tools in whatever way you wish. JACK has become the pro-audio application interconnection standard under GNU/Linux and is becoming increasingly popular on other platforms.
</p>

</div>

<h2><span name="ffado" id="ffado">FFADO</span></h2>
<div class="level2">

<p>
<a href="http://ffado.org/" class="urlextern" title="http://ffado.org/"  rel="nofollow">FFADO</a> provides Free FireWire Audio Drivers (the “O” is for .Org). Unlike ALSA, FFADO depends upon JACK and does not work independently. Hence, when you select a FireWire audio device for use by JACK under the Cadence driver configuration, you are using the FFADO drivers.
</p>

</div>

<h2><span name="pulseaudio" id="pulseaudio">PulseAudio</span></h2>
<div class="level2">

<p>
<a href="http://pulseaudio.org" class="urlextern" title="http://pulseaudio.org"  rel="nofollow">PulseAudio</a> (PA) is a sound server which, like JACK, runs on top of ALSA to provide functions such as allowing more than one application to use an ALSA device simultaneously. Pulse is targetted at regular desktop and mobile users rather than low-latency audio production. Cadence includes a PulseAudio/JACK bridge enabling you to run PulseAudio apps under JACK, but there are very few apps which support PA without supporting JACK or ALSA. KXStudio does not include PulseAudio as part of the default installation, but it is easily installed with the package manager if required.
</p>

</div>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
