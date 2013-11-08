<?php
$PAGE_TITLE    = "KXStudio : Plugins";
$PAGE_TYPE     = "KXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Plugins");
$PAGE_SOURCE_2 = ARRAY("Plugins");
include_once("includes/header.php");
?>

<div class="box box-description">
    <p>
        This section lists the audio plugins made by the KXStudio Team.<br/>
        You might also want to check:
    </p>
    <ul>
        <li><a href="<?php echo $ROOT; ?>/Repositories:Plugins">Plugins in the repositories</a></li>
    </ul>
    <br/>
</div>

<h3><span class="mw-headline" id="DISTRHO"> <img src="images/distrho-big.png" alt="distrho-big.png" class="img_text_align"/> </span></h3>
<p>
    DISTRHO provides cross-platform plugins and Linux ports, including HighLife and TAL NoiseMaker.<br/>
    The official website for DISTRHO is <a href="http://distrho.sourceforge.net/" class="external free" rel="nofollow" target="_blank">http://distrho.sourceforge.net/</a>, and its respective forums are located
      <a href="http://www.kvraudio.com/forum/viewforum.php?f=191" class="external text" rel="nofollow" target="_blank">here</a>.
</p>
<p>
    NOTE: This is the project KXStudio uses to release original and Linux-ported audio plugins.<br/>
    The split between projects allow us to make plugins non-dependent on KXStudio, but they are still made by the same team.<br/>
</p>

<hr/>

<h3><span class="mw-headline" id="Calf"> <img src="images/calf.png" alt="calf.png" class="img_text_align"/> Calf Plugins </span></h3>
<p>
    This is a fork of the latest development code of the Calf plugin suite, originally available at <a href="http://repo.or.cz/w/calf.git/" class="external free" rel="nofollow" target="_blank">http://repo.or.cz/w/calf.git/</a>.<br/>
</p>
<p>
    This fork was made to re-add purposefully removed features by Calf developers, which includes LADSPA, DSSI and LV2 External-UI support.<br/>
    Additionally, LRDF typos were corrected and all DSSI GUIs work now.
</p>
<p>
    The new source code is available <a href="https://github.com/falkTX/calf" class="external text" rel="nofollow" target="_blank">here</a>.
</p>

<hr/>

<h3><span class="mw-headline" id="dssi-vst"> dssi-vst </span></h3>
<p>
    This is a fork of dssi-vst, initially based on "k_amlie"'s code updates (to make it more RT friendly), with additional fixes from falkTX which includes:
</p>
<ul>
    <li>Enabled compiler optimizations where possible (ie, -O2 -ffast-math etc)</li>
    <li>Implemented time-pos support, by using a dummy jack-client (only works if host uses JACK + Transport)</li>
    <li>Implemented custom data/chunk, unofficial DSSI stuff (supported in Carla and a few other hosts)</li>
    <li>Fixed UI re-opening after being closed</li>
    <li>Update vestige header, to make more plugins load</li>
</ul>
<p>
    The source code is available <a href="https://github.com/falkTX/dssi-vst" class="external text" rel="nofollow" target="_blank">here</a>.
      There's a specific dssi-vst topic in the KXStudio forums <a href="http://linuxmusicians.com/viewtopic.php?f=47&t=8128" class="external text" rel="nofollow" target="_blank">here</a>.
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
