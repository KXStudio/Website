<?php
$PAGE_TITLE    = "KXStudio";
$PAGE_TYPE     = "NONKXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Documentation", "/Documentation", "/Documentation:Manual:wineasio_and_reaper");
$PAGE_SOURCE_2 = ARRAY("Documentation", "Manual", "WineASIO and REAPER");
include_once("includes/header.php");
?>

<div class="level1">

</div>

<h2><span name="what_is_wine" id="what_is_wine">What is Wine?</span></h2>
<div class="level2">

<p>

KXStudio includes a program called Wine (Wine Is Not an Emulator) which allows most <acronym title="Microsoft">MS</acronym> Windows software to run under GNU/Linux. It is <acronym title="Free/Libre and Open Source Software">FLOSS</acronym> and does not require a copy of Windows to run it. While a number of Windows applications will not run at all under Wine, there is the odd app or game that runs better under Wine than real Windows! In most cases though, <acronym title="Microsoft">MS</acronym> Windows apps run slower under Wine than under a genuine Windows install. Overall, it is recommended to run native GNU/Linux software instead of using Windows software under Wine, but the option of Wine allows flexibility if no suitable, Linux-native alternative software is available at the moment.
</p>

</div>

<h2><span name="what_is_wineasio" id="what_is_wineasio">What is WineASIO?</span></h2>
<div class="level2">

<p>

Audio Stream Input/Output (ASIO) is the most common low-latency sound card driver protocol for <acronym title="Microsoft">MS</acronym> Windows, hence most professional Windows audio software is designed to work with ASIO. KXStudio includes WineASIO which provides an ASIO to JACK driver for Wine. This allows ASIO-compatible Windows software running under Wine to access your JACK device/server as if it was an ASIO device.
</p>

</div>

<h2><span name="configure_wineasio" id="configure_wineasio">Configure WineASIO</span></h2>
<div class="level2">

<p>

WineASIO provides a few options that can be configured within Cadence. These options are:
</p>
<ul>
<li class="level1"><div class="li"> Number of inputs</div>
</li>
<li class="level1"><div class="li"> Number of outputs</div>
</li>
<li class="level1"><div class="li"> Connect to hardware (auto-connect to JACK hardware ports)</div>
</li>
<li class="level1"><div class="li"> Autostart server (start JACK automatically if not already running)</div>
</li>
<li class="level1"><div class="li"> Fixed buffersize (if off, the host is allowed to change the current JACK buffersize on the fly)</div>
</li>
<li class="level1"><div class="li"> Preferred buffersize (if fixed buffersize is off, WineASIO attempts to use this value on startup)</div>
</li>
</ul>

<p>

(Cadence WineASIO settings screenshot: <a href="http://kxstudio.sourceforge.net/screenshots/cadence4.png" class="urlextern" title="http://kxstudio.sourceforge.net/screenshots/cadence4.png"  rel="nofollow">http://kxstudio.sourceforge.net/screenshots/cadence4.png</a>)
</p>

</div>

<h2><span name="registering_wineasio_libraries" id="registering_wineasio_libraries">Registering WineASIO libraries</span></h2>
<div class="level2">

<p>

If you ran KXStudio Welcome Setup before then you should already have the wineasio.dll library registered, otherwise or if you messed up your Wine configuration you should run:

</p>
<pre class="code">regsvr32 wineasio.dll</pre>

<p>

If you&#039;re running a 64-bit <acronym title="Operating System">OS</acronym> and you want to run 64-bit Windows software under wine, run the following too:

</p>
<pre class="code">wine64 regsvr32 wineasio.dll</pre>

<p>

You should only need to issue these commands once, if at all, and there is no harm in re-running them.
</p>

</div>

<h2><span name="what_is_reaper" id="what_is_reaper">What is REAPER?</span></h2>
<div class="level2">

<p>

KXStudio includes the <acronym title="Microsoft">MS</acronym> Windows version of REAPER (Rapid Environment for Audio Production, Engineering, and Recording). REAPER is proprietary software which runs as a fully-functional demo for trial. It is one of the most powerful and popular DAWs available for Windows and Mac OSX, and a native Linux version is in development. REAPER has proven popular under GNU/Linux due to its advanced audio production features, its not-<acronym title="Free/Libre and Open Source Software">FLOSS</acronym>-but-nonetheless-user-friendly licensing and its official support for running the Windows version under Wine.
</p>

</div>

<h2><span name="configure_reaper_for_wineasio_and_jack" id="configure_reaper_for_wineasio_and_jack">Configure REAPER for WineASIO and JACK</span></h2>
<div class="level2">
<ol>
<li class="level1"><div class="li"> Start REAPER then choose Preferences, the bottom option in the Options menu, or just push CTRL+P</div>
</li>
<li class="level1"><div class="li"> Choose Device under the Audio section from the list to the left of the Preferences window</div>
</li>
<li class="level1"><div class="li"> Choose ASIO from the Audio drop-down menu at the top of the Audio device settings options. You should then see &#039;WineASIO Driver&#039; is selected as the ASIO driver.</div>
</li>
<li class="level1"><div class="li"> Choose Audio from the list to the left of the Preferences window and untick &#039;Close audio device when stopped and application is inactive&#039;</div>
</li>
<li class="level1"><div class="li"> Apply, OK, done!</div>
</li>
</ol>

</div>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
