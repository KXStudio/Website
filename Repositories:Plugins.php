<?php
$PAGE_TITLE    = "KXStudio : Repositories : Plugins";
$PAGE_TYPE     = "KXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Repositories", "/Repositories:Plugins");
$PAGE_SOURCE_2 = ARRAY("Repositories", "Plugins");
include_once("includes/header.php");
?>

<div class="box box-description">
    <p>
        This section lists the audio plugins available in the repositories.<br/>
        Click on the green plugin name to install its respective package.<br/>
        (If the links don't work, make sure you have the 'apturl-kde' or 'apturl' packages installed)
    </p>
    <p>
        You might also want to check:
    </p>
    <ul>
        <li><a href="<?php echo $ROOT; ?>/Repositories:Applications">Applications in the repositories</a></li>
    </ul>
    <br/>
</div>

<p>
    <b><a href="apt://caps" style="color: rgb(100,230,100);">CAPS</a></b> (LADSPA)<br/>
    The C* Audio Plugin Suite (CAPS) comprises a range of classic sound effects and a few more basic audio DSP units, signal and noise generators.<br/>
    The suite's aim is to provide impeccable sound quality, computational efficiency and no perceptible latency.<br/>
    Homepage and Documentation: <a href="http://quitte.de/dsp/caps.html" class="external text" rel="nofollow" target="_blank">http://quitte.de/dsp/caps.html</a><br/>
</p>

<p>
    <b><a href="apt://rev-plugins" style="color: rgb(100,230,100);">REV-Plugins</a></b> (LADSPA)<br/>
    Reverb LADSPA plugins.<br/>
    Includes a stereo reverb plugin based on the well-known greverb, and LADSPA versions of zita-rev1 in resp. stereo and first order Ambisonic mode.<br/>
    Homepage: <a href="http://kokkinizita.linuxaudio.org/linuxaudio/index.html" class="external text" rel="nofollow" target="_blank">http://kokkinizita.linuxaudio.org/linuxaudio/index.html</a><br/>
</p>

<p><br /></p>

<?php
include_once("includes/footer.php");
?>
