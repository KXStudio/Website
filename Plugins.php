<?php
$PAGE_TITLE    = "KXStudio : Plugins";
$PAGE_TYPE     = "KXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Plugins");
$PAGE_SOURCE_2 = ARRAY("Plugins");
include_once("includes/header.php");
?>

<div class="box box-description">
    <p>
        This section lists the audio plugins made or forked by the KXStudio Team.<br/>
        All plugins are open-source and completely free.
    </p>
    <p>
        You might also want to check:
    </p>
    <ul>
        <li><a href="<?php echo $ROOT; ?>/Repositories:Plugins">Plugins in the repositories</a></li>
    </ul>
    <br/>
</div>

<h3><span class="mw-headline" id="DISTRHO"> <img src="images/distrho-big.png" alt="distrho-big.png" class="img_text_align"/> </span></h3>
<p>
    DISTRHO provides cross-platform plugins and Linux ports, including MVerb and TAL NoiseMaker.<br/>
    The official website for DISTRHO is <a href="http://distrho.sourceforge.net/" class="external free" rel="nofollow" target="_blank">
        http://distrho.sourceforge.net/</a>, and its respective forums are located
    <a href="http://www.kvraudio.com/forum/viewforum.php?f=191" class="external text" rel="nofollow" target="_blank">here</a>.
</p>
<p>
    The
    <a href="https://github.com/DISTRHO/DPF-Plugins" class="external text" rel="nofollow" target="_blank">
        DPF-Plugins</a>
    project contains mostly original plugins made with our own framework (dubbed
    <a href="https://github.com/DISTRHO/DPF" class="external text" rel="nofollow" target="_blank">
        DPF</a>),
    <br/>
    while
    <a href="https://github.com/DISTRHO/DISTRHO-Ports" class="external text" rel="nofollow" target="_blank">
        DISTRHO-Ports</a>
    contains ports of 3rd party plugins made with
    <a href="https://github.com/DISTRHO/juce" class="external text" rel="nofollow" target="_blank">
        Juce</a>.
</p>

<hr/>

<h3><span class="mw-headline" id="dssi-vst"> dssi-vst </span></h3>
<p>
    This was initially a fork of dssi-vst, based on "k_amlie"'s code updates (to make it more RT friendly),
    with a few additional fixes including:
</p>
<ul>
    <li>Enabled compiler optimizations where possible (ie, -O2 -ffast-math etc)</li>
    <li>Implemented time-pos support, by using a dummy jack-client (only works if host uses JACK + Transport)</li>
    <li>Implemented custom data/chunk, unofficial DSSI stuff (supported in Carla and a few other hosts)</li>
    <li>Fixed UI re-opening after being closed</li>
    <li>Update vestige header, to make more plugins load</li>
</ul>
<p>
    falkTX is now the maintainer of this project.<br/>
    The source code is available
    <a href="https://github.com/falkTX/dssi-vst" class="external text" rel="nofollow" target="_blank">
        here</a>.
</p>

<hr/>

<h3><span class="mw-headline" id="fluidplug"> FluidPlug </span></h3>
<p>
    FluidPlug uses SoundFonts as LV2 plugins via FluidSynth.<br/>
    Made for hosts that do not support desktop UIs or loading of external files.
</p>
<p>
    The source code is available
    <a href="https://github.com/falkTX/FluidPlug" class="external text" rel="nofollow" target="_blank">
        here</a>.
</p>

<hr/>

<h3><span class="mw-headline" id="jackass"> JackAss </span></h3>
<p>
    JackAss is a VST plugin that provides JACK-MIDI support for VST hosts.<br/>
    Simply load the plugin in your favourite host to get a JACK-MIDI port.<br/>
    Each new plugin instance creates a new MIDI port.
</p>
<p>
    The source code is available
    <a href="https://github.com/falkTX/JackAss" class="external text" rel="nofollow" target="_blank">
        here</a>.
</p>

<hr/>

<h3><span class="mw-headline" id="lv2ext"> LV2 Extensions </span></h3>
<p>
    The KXStudio project has a few LV2 extensions of its own, adding missing functionality into the LV2 stack.<br/>
    These are:
</p>
<ul>
    <li><a href="ns/lv2ext/external-ui">External UI</a></li>
    <li><a href="ns/lv2ext/programs">Programs</a></li>
    <li><a href="ns/lv2ext/rtmempool">Realtime-Safe Memory Pool</a></li>
</ul>

<br/>

<?php
include_once("includes/footer.php");
?>
