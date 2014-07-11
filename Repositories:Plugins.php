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

<!--
  TODO: (no ui)
    foo-plugins
    jackass
    leet-plugins
    midimsg-lv2
    tap-plugins
    vcf-plugins
    vocoder-ladspa
    wasp-ladspa
  TODO: (with ui)
    ams-lv2
    beatslash-lv2
    calf-git
    cursynth
    deteriorate-lv2
    dssi-vst
    guitarix (*)
    hexter
    ir.lv2
    ls16 ?
    phasex
    spiralsynthmodular
    whysynth
    wsynth-dssi
    zynaddsubfx
  TODO: (distrho/juce)
    teragon-audio
    arctican-plugins
    dexed
    drowaudio-plugins
    juced-plugins
    klangfalter
    oxbd
    pitcheddelay
    safe-plugins
    tal-plugins
    vex
    wolpertinger
 -->

<!-- XXXpp -->
<!--
<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/screenshots/XXX.png">
           <img src="screenshots/thumb/XXX.png" alt="XXX" class="img_thumb_150"/>
        </a></p>
    </td><td>
        <p>
            <b><a href="apt://XXX" style="color: rgb(100,230,100);">XXX</a></b> (Standalone)<br/>
            <br/>
            Homepage: <a href="WWW" class="external text" rel="nofollow" target="_blank">WWW</a><br/>
        </p>
    </td></tr>
</table>
-->

<!-- see later the non-free stuff, pianoteq, loomer, linuxdsp, etc -->

<!-- Add64 -->
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

<!-- amsynth -->
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

<!-- Arpage + Zonage -->
<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/screenshots/arpage.png">
           <img src="screenshots/thumb/arpage.png" alt="arpage" class="img_thumb_150"/>
        </a></p>
    </td><td>
        <p>
            <b><a href="apt://arpage" style="color: rgb(100,230,100);">Arpage + Zonage</a></b> (Standalone)<br/>
            JACK MIDI arpeggiator with transport and tempo sync.<br/>
            Project Page: <a href="http://sourceforge.net/projects/arpage/" class="external text" rel="nofollow" target="_blank">http://sourceforge.net/projects/arpage/</a><br/>
        </p>
    </td></tr>
</table>

<!-- Arty FX -->
<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/screenshots/artyfx.png">
           <img src="screenshots/thumb/artyfx.png" alt="artyfx" class="img_thumb_150"/>
        </a></p>
    </td><td>
        <p>
            <b><a href="apt://artyfx" style="color: rgb(100,230,100);">Arty FX</a></b> (LV2)<br/>
            Arty FX is a plugin bundle of artistic “RT” effects.<br/>
            The aim is to allow the designing of your sound just as you desired using a fast, effiecient workflow.<br/>
            Homepage: <a href="http://openavproductions.com/artyfx/" class="external text" rel="nofollow" target="_blank">http://openavproductions.com/artyfx/</a><br/>
        </p>
    </td></tr>
</table>

<!-- Calf -->
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
              <a href="https://github.com/falkTX/calf" class="external text" rel="nofollow" target="_blank">this link</a>.<br/>
        </p>
    </td></tr>
</table>

<!-- CAPS -->
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

<!-- drmr -->
<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/screenshots/drmr.png">
           <img src="screenshots/thumb/drmr.png" alt="drmr" class="img_thumb_150"/>
        </a></p>
    </td><td>
        <p>
            <b><a href="apt://drmr" style="color: rgb(100,230,100);">drmr</a></b> (LV2)<br/>
            DrMr is an LV2 sampler plugin.<br/>
            It  gives a way for lv2 hosts to have a built in drum synth that can save its entire state.<br/>
            Project Page: <a href="https://github.com/nicklan/drmr/wiki" class="external text" rel="nofollow" target="_blank">https://github.com/nicklan/drmr/wiki</a><br/>
        </p>
    </td></tr>
</table>

<!-- DrumGizmo -->
<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/screenshots/drumgizmo.png">
           <img src="screenshots/thumb/drumgizmo.png" alt="drumgizmo" class="img_thumb_150"/>
        </a></p>
    </td><td>
        <p>
            <b><a href="apt://drumgizmo" style="color: rgb(100,230,100);">DrumGizmo</a></b> (Standalone + LV2)<br/>
            DrumGizmo is a cross-platform drum plugin and stand-alone application.<br/>
            It is comparable to several commercial drum plugin products.<br/>
            Homepage/Wiki: <a href="http://www.drumgizmo.org/wiki/" class="external text" rel="nofollow" target="_blank">http://www.drumgizmo.org/wiki/</a><br/>
        </p>
    </td></tr>
</table>

<!-- drumkv1 -->
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

<!-- EQ10Q -->
<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/screenshots/eq10q.png">
           <img src="screenshots/thumb/eq10q.png" alt="eq10q" class="img_thumb_150"/>
        </a></p>
    </td><td>
        <p>
            <b><a href="apt://eq10q" style="color: rgb(100,230,100);">EQ10Q</a></b> (LV2)<br/>
            EQ10Q is a powerfull and flexible parametric equalizer.<br/>
            It includes parametric equalization with diferent filter types like peaking, HPF, LPF, Shelving and Notch with IIR algorithms<br/>
            and a nice GUI displaying the equalization curve.<br/>
            Homepage: <a href="http://eq10q.sourceforge.net/" class="external text" rel="nofollow" target="_blank">http://eq10q.sourceforge.net/</a><br/>
        </p>
    </td></tr>
</table>

<!-- Fabla -->
<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/screenshots/fabla.png">
           <img src="screenshots/thumb/fabla.png" alt="fabla" class="img_thumb_150"/>
        </a></p>
    </td><td>
        <p>
            <b><a href="apt://fabla" style="color: rgb(100,230,100);">Fabla</a></b> (LV2)<br/>
            Fabla is a drum sampler plugin ideal for loading up your favorite sampled sounds and bashing away on a MIDI controller.<br/>
            Homepage: <a href="http://openavproductions.com/fabla/" class="external text" rel="nofollow" target="_blank">http://openavproductions.com/fabla/</a><br/>
        </p>
    </td></tr>
</table>

<!-- Fomp -->
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

<!-- HOLAP -->
<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/screenshots/horgand.png">
           <img src="screenshots/thumb/horgand.png" alt="horgand" class="img_thumb_150"/>
        </a></p>
    </td><td>
        <p>
            <b><a href="apt://holap" style="color: rgb(100,230,100);">HOLAP</a></b> (LADSPA + DSSI)<br/>
            HOLAP is a set of DSSI and LADSPA audio plugins including DSP effects and a FM synthesizer.<br/>
            Most of this LADSPA plugins are based on the wonderful ZynAddSubFX synthesizer (Paul Nasca) set of effects.<br/>
            Homepage: <a href="http://holap.berlios.de/" class="external text" rel="nofollow" target="_blank">http://holap.berlios.de/</a><br/>
        </p>
    </td></tr>
</table>

<!-- LinuxSampler -->
<table>
    <tr><td align="center">
        <p>
           <img src="screenshots/thumb/nogui.png" alt="nogui" class="img_thumb_150"/>
        </p>
    </td><td>
        <p>
            <b><a href="apt://linuxsampler-all" style="color: rgb(100,230,100);">LinuxSampler</a></b> (Standalone + DSSI + LV2 + VST)<br/>
            Free, streaming capable open source pure software audio sampler with professional grade features,<br/>
            comparable to both hardware and commercial Windows/Mac software samplers.<br/>
            Homepage and Documentation: <a href="http://www.linuxsampler.org/" class="external text" rel="nofollow" target="_blank">http://www.linuxsampler.org/</a><br/>
        </p>
    </td></tr>
</table>

<!-- MDA (LV2) -->
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

<!-- pizmidi-plugins -->
<table>
    <tr><td align="center">
        <p>
           <img src="screenshots/thumb/nogui.png" alt="nogui" class="img_thumb_150"/>
        </p>
    </td><td>
        <p>
            <b><a href="apt://pizmidi-plugins" style="color: rgb(100,230,100);">pizmidi</a></b> (VST)<br/>
            pizmidi is a collection of cross-platform MIDI processing plugins.<br/>
            Homepage: <a href="http://thepiz.org/plugins/" class="external text" rel="nofollow" target="_blank">http://thepiz.org/plugins/</a><br/>
            Project Page: <a href="http://code.google.com/p/pizmidi/" class="external text" rel="nofollow" target="_blank">http://code.google.com/p/pizmidi/</a><br/>
        </p>
    </td></tr>
</table>

<!-- REV-Plugins -->
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

<!-- samplv1 -->
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

<!-- Sorcer -->
<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/screenshots/sorcer.png">
           <img src="screenshots/thumb/sorcer.png" alt="sorcer" class="img_thumb_150"/>
        </a></p>
    </td><td>
        <p>
            <b><a href="apt://sorcer" style="color: rgb(100,230,100);">Sorcer</a></b> (LV2)<br/>
            Sorcer is a polyphonic wavetable synth plugin.<br/>
            Its sonic fingerprint is one of harsh modulated sub-bass driven walls of sound.<br/>
            Homepage: <a href="http://openavproductions.com/sorcer/" class="external text" rel="nofollow" target="_blank">http://openavproductions.com/sorcer/</a><br/>
        </p>
    </td></tr>
</table>

<!-- synthv1 -->
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

<!-- triceratops -->
<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/screenshots/triceratops.png">
           <img src="screenshots/thumb/triceratops.png" alt="triceratops" class="img_thumb_150"/>
        </a></p>
    </td><td>
        <p>
            <b><a href="apt://triceratops-lv2" style="color: rgb(100,230,100);">Triceratops</a></b> (LV2)<br/>
            Triceratops is a polyphonic subtractive synthesizer plugin.<br/>
            Project Page: <a href="http://sourceforge.net/projects/triceratops/" class="external text" rel="nofollow" target="_blank">http://sourceforge.net/projects/triceratops/</a><br/>
        </p>
    </td></tr>
</table>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
