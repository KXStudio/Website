<?php
$PAGE_TITLE    = "KXStudio : Repositories : Plugins";
$PAGE_TYPE     = "KXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Repositories", "/Repositories:Plugins");
$PAGE_SOURCE_2 = ARRAY("Repositories", "Plugins");
include_once("includes/header.php");

function endsWith($haystack, $needle) {
    return strrpos($haystack, $needle, 0) === (strlen($haystack) - strlen($needle));
}

function print_plugin($package, $screenshot, $name, $category, $details) {

if (! endsWith($screenshot, '.jpg')) {
    $screenshot = $screenshot . '.png';
}

echo
'<table><tr><td align="center"><p>
<a href="' . $ROOT . '/screenshots/' . $screenshot . '">
<img src="screenshots/thumb/' . $screenshot . '" alt="' . $screenshot . '" class="img_thumb_150"/>
</a></p></td><td><p><b>
<a href="apt://' . $package . '" style="color: rgb(100,230,100);">' . $name . '</a></b> (' . $category . ')<br/>';

for ($i = 0, $count = count($details); $i < $count; $i++) {
    echo $details[$i] . '<br>';
}

echo '</p></td></tr></table>';

}

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

<?php
/*
print_plugin("pkg", "scr", "name", "cat", ARRAY(
'txt1',
'txt2'
));
*/

print_plugin("add64", "add64", "Add64", "Standalone", ARRAY(
'Add64 is the result of experiments around additive synthesis and is intended for research purposes only.',
'The spectral drawing scheme for the harmonics and envelopes has been inspired by the virtual pipe organ Aeolus by Fons Adriaensen.',
'Project Page: <a href="https://sourceforge.net/projects/add64/" class="external text" rel="nofollow" target="_blank">https://sourceforge.net/projects/add64/</a>'
));

print_plugin("amsynth", "amsynth", "amSynth", "Standalone + DSSI + LV2 + VST", ARRAY(
'amsynth is a software synth that provides a classic subtractive synthesizer topology.',
'Project Page: <a href="http://code.google.com/p/amsynth/" class="external text" rel="nofollow" target="_blank">http://code.google.com/p/amsynth/</a>',
));

print_plugin("arpage", "arpage", "Arpage + Zonage", "Standalone", ARRAY(
'JACK MIDI arpeggiator with transport and tempo sync.',
'Project Page: <a href="http://sourceforge.net/projects/arpage/" class="external text" rel="nofollow" target="_blank">http://sourceforge.net/projects/arpage/</a>'
));

print_plugin("artyfx", "artyfx", "Arty FX", "LV2", ARRAY(
'Arty FX is a plugin bundle of artistic “RT” effects.',
'The aim is to allow the designing of your sound just as you desired using a fast, effiecient workflow.',
'Homepage: <a href="http://openavproductions.com/artyfx/" class="external text" rel="nofollow" target="_blank">http://openavproductions.com/artyfx/</a>'
));

print_plugin("calf-plugins", "calf", "Calf studio gear", "Standalone + LV2", ARRAY(
'The Calf plugins include all todays frequently used studio effects along with some feature-rich sound processors.',
'Homepage: <a href="http://calf-studio-gear.org/" class="external text" rel="nofollow" target="_blank">http://calf-studio-gear.org/</a>'
));

print_plugin("caps", "nogui", "CAPS", "LADSPA", ARRAY(
'The C* Audio Plugin Suite (CAPS) comprises a range of classic sound effects and a few more basic audio DSP units, signal and noise generators.',
'The suite\'s aim is to provide impeccable sound quality, computational efficiency and no perceptible latency.',
'Homepage and Documentation: <a href="http://quitte.de/dsp/caps.html" class="external text" rel="nofollow" target="_blank">http://quitte.de/dsp/caps.html</a>'
));

print_plugin("drmr", "drmr", "drmr", "LV2", ARRAY(
'DrMr is an LV2 sampler plugin.',
'It  gives a way for lv2 hosts to have a built in drum synth that can save its entire state.',
'Project Page: <a href="https://github.com/nicklan/drmr/wiki" class="external text" rel="nofollow" target="_blank">https://github.com/nicklan/drmr/wiki</a>'
));

print_plugin("drumgizmo", "drumgizmo", "DrumGizmo", "Standalone + LV2 + VST", ARRAY(
'DrumGizmo is a cross-platform drum plugin and stand-alone application.',
'It is comparable to several commercial drum plugin products.',
'Homepage/Wiki: <a href="http://www.drumgizmo.org/wiki/" class="external text" rel="nofollow" target="_blank">http://www.drumgizmo.org/wiki/</a>'
));

print_plugin("drumkv1", "drumkv1", "drumkv1", "Standalone + LV2", ARRAY(
'drumkv1 is an old-school all-digital drum-kit sampler synthesizer with stereo fx.',
'Homepage: <a href="http://drumkv1.sourceforge.net/" class="external text" rel="nofollow" target="_blank">http://drumkv1.sourceforge.net/</a>'
));

print_plugin("eq10q", "eq10q", "EQ10Q", "LV2", ARRAY(
'EQ10Q is a powerfull and flexible parametric equalizer.',
'It includes parametric equalization with diferent filter types like peaking, HPF, LPF, Shelving and Notch with IIR algorithms',
'and a nice GUI displaying the equalization curve.',
'Homepage: <a href="http://eq10q.sourceforge.net/" class="external text" rel="nofollow" target="_blank">http://eq10q.sourceforge.net/</a>'
));

print_plugin("fabla", "fabla", "Fabla", "LV2", ARRAY(
'Fabla is a drum sampler plugin ideal for loading up your favorite sampled sounds and bashing away on a MIDI controller.',
'Homepage: <a href="http://openavproductions.com/fabla/" class="external text" rel="nofollow" target="_blank">http://openavproductions.com/fabla/</a>'
));

print_plugin("fomp", "nogui", "FOMP", "LV2", ARRAY(
'Fomp is an LV2 port of the MCP, VCO, FIL, and WAH plugins by Fons Adriaensen.',
'There are 13 plugins in total: 1 auto-wah, 1 EQ, 3 chorus, 5 filters, and 3 oscillators.',
'Homepage: <a href="http://drobilla.net/software/fomp/" class="external text" rel="nofollow" target="_blank">http://drobilla.net/software/fomp/</a>'
));

print_plugin("holap", "horgand", "HOLAP", "LADSPA + DSSI", ARRAY(
'HOLAP is a set of DSSI and LADSPA audio plugins including DSP effects and a FM synthesizer.',
'Most of this LADSPA plugins are based on the wonderful ZynAddSubFX synthesizer (Paul Nasca) set of effects.',
'Homepage: <a href="http://holap.berlios.de/" class="external text" rel="nofollow" target="_blank">http://holap.berlios.de/</a>'
));

print_plugin("linuxsampler-all", "nogui", "LinuxSampler", "Standalone + DSSI + LV2 + VST", ARRAY(
'Free, streaming capable open source pure software audio sampler with professional grade features,',
'comparable to both hardware and commercial Windows/Mac software samplers.',
'Homepage and Documentation: <a href="http://www.linuxsampler.org/" class="external text" rel="nofollow" target="_blank">http://www.linuxsampler.org/</a>'
));

print_plugin("mda-lv2", "nogui", "MDA-LV2", "LV2", ARRAY(
'MDA-LV2 is an LV2 port of the MDA plugins by Paul Kellett.',
'It contains 36 high-quality plugins for a variety of tasks.',
'Homepage: <a href="http://drobilla.net/software/mda-lv2/" class="external text" rel="nofollow" target="_blank">http://drobilla.net/software/mda-lv2/</a>'
));

print_plugin("pizmidi-plugins", "nogui", "pizmidi", "VST", ARRAY(
'pizmidi is a collection of cross-platform MIDI processing plugins.',
'Project Page: <a href="https://bitbucket.org/agraef/pizmidi/" class="external text" rel="nofollow" target="_blank">https://bitbucket.org/agraef/pizmidi/</a>'
));

print_plugin("rev-plugins", "nogui", "REV-Plugins", "LADSPA", ARRAY(
'Reverb LADSPA plugins.',
'Includes a stereo reverb plugin based on the well-known greverb, and LADSPA versions of zita-rev1 in resp. stereo and first order Ambisonic mode.',
'Homepage: <a href="http://kokkinizita.linuxaudio.org/linuxaudio/index.html" class="external text" rel="nofollow" target="_blank">http://kokkinizita.linuxaudio.org/linuxaudio/index.html</a>'
));

print_plugin("samplv1", "samplv1", "samplv1", "Standalone + LV2", ARRAY(
'samplv1 is an old-school all-digital polyphonic sampler synthesizer with stereo fx.',
'Homepage: <a href="http://samplv1.sourceforge.net/" class="external text" rel="nofollow" target="_blank">http://samplv1.sourceforge.net/</a>'
));

print_plugin("sorcer", "sorcer", "Sorcer", "LV2", ARRAY(
'Sorcer is a polyphonic wavetable synth plugin.',
'Its sonic fingerprint is one of harsh modulated sub-bass driven walls of sound.',
'Homepage: <a href="http://openavproductions.com/sorcer/" class="external text" rel="nofollow" target="_blank">http://openavproductions.com/sorcer/</a>'
));

print_plugin("synthv1", "synthv1", "synthv1", "Standalone + LV2", ARRAY(
'synthv1 is an old-school all-digital 4-oscillator subtractive polyphonic synthesizer with stereo fx.',
'Homepage: <a href="http://synthv1.sourceforge.net/" class="external text" rel="nofollow" target="_blank">http://synthv1.sourceforge.net/</a>'
));

print_plugin("triceratops", "triceratops", "Triceratops", "LV2", ARRAY(
'Triceratops is a polyphonic subtractive synthesizer plugin.',
'Project Page: <a href="http://sourceforge.net/projects/triceratops/" class="external text" rel="nofollow" target="_blank">http://sourceforge.net/projects/triceratops/</a>'
));

?>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
