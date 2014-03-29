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

<!-- TODO: -->
<!-- avw.lv2 -->
<!-- drmr -->
<!-- drumgizmo -->
<!-- eq10q -->
<!-- hexter -->
<!-- holap -->
<!-- phasex -->
<!-- pizmidi-plugins -->
<!-- triceratops-lv2 -->
<!-- whysynth -->
<!-- wsynth-dssi -->
<!-- zynaddsubfx -->

<!-- see later the non-free stuff, pianoteq, loomer, linuxdsp, etc -->

<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/screenshots/add64.png">
           <img src="screenshots/thumb/add64.png" alt="add64" class="img_thumb_150"/>
        </a></p>
    </td><td>
        <p>
            <b><a href="apt://add64" style="color: rgb(100,230,100);">Add64</a></b> (Standalone)<br/>
            Add64 is the result of experiments around additive synthesis and is intended for research purposes only.<br/>
            The spectral drawing scheme for the harmonics and envelopes has been inspired by the virtual pipe organ Aeolus by Fons Adriaensen.<br/>
            Project Page: <a href="https://sourceforge.net/projects/add64/" class="external text" rel="nofollow" target="_blank">https://sourceforge.net/projects/add64/</a><br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/screenshots/amsynth.png">
           <img src="screenshots/thumb/amsynth.png" alt="amsynth" class="img_thumb_150"/>
        </a></p>
    </td><td>
        <p>
            <b><a href="apt://amsynth" style="color: rgb(100,230,100);">amsynth</a></b> (Standalone + DSSI + LV2)<br/>
            amsynth is a software synth that provides a classic subtractive synthesizer topology.<br/>
            Project Page: <a href="http://code.google.com/p/amsynth/" class="external text" rel="nofollow" target="_blank">http://code.google.com/p/amsynth/</a><br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/screenshots/calf.jpg">
           <img src="screenshots/thumb/calf.png" alt="calf" class="img_thumb_150"/>
        </a></p>
    </td><td>
        <p>
            <b><a href="apt://calf-plugins" style="color: rgb(100,230,100);">Calf studio gear</a></b> (Standalone + LADSPA + DSSI + LV2) [*]<br/>
             The Calf plugins include all todays frequently used studio effects along with some feature-rich sound processors.<br/>
            Homepage: <a href="http://calf.sourceforge.net/" class="external text" rel="nofollow" target="_blank">http://calf.sourceforge.net/</a><br/>
            [*] This is a custom version which adds back LADSPA, DSSI and LV2 external-UI support removed by upstream, see
              <a href="https://github.com/falkTX/calf" class="external text" rel="nofollow" target="_blank">this link</a>.
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p>
           <img src="screenshots/thumb/nogui.png" alt="nogui" class="img_thumb_150"/>
        </p>
    </td><td>
        <p>
            <b><a href="apt://caps" style="color: rgb(100,230,100);">CAPS</a></b> (LADSPA)<br/>
            The C* Audio Plugin Suite (CAPS) comprises a range of classic sound effects and a few more basic audio DSP units, signal and noise generators.<br/>
            The suite's aim is to provide impeccable sound quality, computational efficiency and no perceptible latency.<br/>
            Homepage and Documentation: <a href="http://quitte.de/dsp/caps.html" class="external text" rel="nofollow" target="_blank">http://quitte.de/dsp/caps.html</a><br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/screenshots/drumkv1.png">
           <img src="screenshots/thumb/drumkv1.png" alt="drumkv1" class="img_thumb_150"/>
        </a></p>
    </td><td>
        <p>
            <b><a href="apt://drumkv1" style="color: rgb(100,230,100);">drumkv1</a></b> (Standalone + LV2)<br/>
            drumkv1 is an old-school all-digital drum-kit sampler synthesizer with stereo fx.<br/>
            Homepage: <a href="http://drumkv1.sourceforge.net/" class="external text" rel="nofollow" target="_blank">http://drumkv1.sourceforge.net/</a><br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p>
           <img src="screenshots/thumb/nogui.png" alt="nogui" class="img_thumb_150"/>
        </p>
    </td><td>
        <p>
            <b><a href="apt://fomp" style="color: rgb(100,230,100);">Fomp</a></b> (LV2)<br/>
            Fomp is an LV2 port of the MCP, VCO, FIL, and WAH plugins by Fons Adriaensen.<br/>
            There are 13 plugins in total: 1 auto-wah, 1 EQ, 3 chorus, 5 filters, and 3 oscillators.<br/>
            Homepage: <a href="http://drobilla.net/software/fomp/" class="external text" rel="nofollow" target="_blank">http://drobilla.net/software/fomp/</a><br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p>
           <img src="screenshots/thumb/nogui.png" alt="nogui" class="img_thumb_150"/>
        </p>
    </td><td>
        <p>
            <b><a href="apt://linuxsampler-dssi" style="color: rgb(100,230,100);">LinuxSampler</a></b> (DSSI)<br/>
            Free, streaming capable open source pure software audio sampler with professional grade features,<br/>
            comparable to both hardware and commercial Windows/Mac software samplers.<br/>
            Homepage and Documentation: <a href="http://www.linuxsampler.org/" class="external text" rel="nofollow" target="_blank">http://www.linuxsampler.org/</a><br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p>
           <img src="screenshots/thumb/nogui.png" alt="nogui" class="img_thumb_150"/>
        </p>
    </td><td>
        <p>
            <b><a href="apt://linuxsampler-lv2" style="color: rgb(100,230,100);">LinuxSampler</a></b> (LV2, 2 channels)<br/>
            Free, streaming capable open source pure software audio sampler with professional grade features,<br/>
            comparable to both hardware and commercial Windows/Mac software samplers.<br/>
            Homepage and Documentation: <a href="http://www.linuxsampler.org/" class="external text" rel="nofollow" target="_blank">http://www.linuxsampler.org/</a><br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p>
           <img src="screenshots/thumb/nogui.png" alt="nogui" class="img_thumb_150"/>
        </p>
    </td><td>
        <p>
            <b><a href="apt://linuxsampler-lv2-32chan" style="color: rgb(100,230,100);">LinuxSampler</a></b> (LV2, 32 channels)<br/>
            Free, streaming capable open source pure software audio sampler with professional grade features,<br/>
            comparable to both hardware and commercial Windows/Mac software samplers.<br/>
            Homepage and Documentation: <a href="http://www.linuxsampler.org/" class="external text" rel="nofollow" target="_blank">http://www.linuxsampler.org/</a><br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p>
           <img src="screenshots/thumb/nogui.png" alt="nogui" class="img_thumb_150"/>
        </p>
    </td><td>
        <p>
            <b><a href="apt://linuxsampler-vst" style="color: rgb(100,230,100);">LinuxSampler</a></b> (VST)<br/>
            Free, streaming capable open source pure software audio sampler with professional grade features,<br/>
            comparable to both hardware and commercial Windows/Mac software samplers.<br/>
            Homepage and Documentation: <a href="http://www.linuxsampler.org/" class="external text" rel="nofollow" target="_blank">http://www.linuxsampler.org/</a><br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p>
           <img src="screenshots/thumb/nogui.png" alt="nogui" class="img_thumb_150"/>
        </p>
    </td><td>
        <p>
            <b><a href="apt://mda-lv2" style="color: rgb(100,230,100);">MDA</a></b> (LV2)<br/>
            MDA-LV2 is an LV2 port of the MDA plugins by Paul Kellett.<br/>
            It contains 36 high-quality plugins for a variety of tasks.<br/>
            Homepage: <a href="http://drobilla.net/software/mda-lv2/" class="external text" rel="nofollow" target="_blank">http://drobilla.net/software/mda-lv2/</a><br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p>
           <img src="screenshots/thumb/nogui.png" alt="nogui" class="img_thumb_150"/>
        </p>
    </td><td>
        <p>
            <b><a href="apt://rev-plugins" style="color: rgb(100,230,100);">REV-Plugins</a></b> (LADSPA)<br/>
            Reverb LADSPA plugins.<br/>
            Includes a stereo reverb plugin based on the well-known greverb, and LADSPA versions of zita-rev1 in resp. stereo and first order Ambisonic mode.<br/>
            Homepage: <a href="http://kokkinizita.linuxaudio.org/linuxaudio/index.html" class="external text" rel="nofollow" target="_blank">http://kokkinizita.linuxaudio.org/linuxaudio/index.html</a><br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/screenshots/samplv1.png">
           <img src="screenshots/thumb/samplv1.png" alt="samplv1" class="img_thumb_150"/>
        </a></p>
    </td><td>
        <p>
            <b><a href="apt://samplv1" style="color: rgb(100,230,100);">samplv1</a></b> (Standalone + LV2)<br/>
            samplv1 is an old-school all-digital polyphonic sampler synthesizer with stereo fx.<br/>
            Homepage: <a href="http://samplv1.sourceforge.net/" class="external text" rel="nofollow" target="_blank">http://samplv1.sourceforge.net/</a><br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/screenshots/synthv1.png">
           <img src="screenshots/thumb/synthv1.png" alt="synthv1" class="img_thumb_150"/>
        </a></p>
    </td><td>
        <p>
            <b><a href="apt://synthv1" style="color: rgb(100,230,100);">synthv1</a></b> (Standalone + LV2)<br/>
            synthv1 is an old-school all-digital 4-oscillator subtractive polyphonic synthesizer with stereo fx.<br/>
            Homepage: <a href="http://synthv1.sourceforge.net/" class="external text" rel="nofollow" target="_blank">http://synthv1.sourceforge.net/</a><br/>
        </p>
    </td></tr>
</table>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
