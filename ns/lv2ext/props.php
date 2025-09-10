<?php
$PAGE_TITLE    = "KXStudio LV2-Extensions Namespace";
$PAGE_TYPE     = "NAMESPACE";
$PAGE_SOURCE_1 = ARRAY("/ns", "/ns/lv2ext", "/ns/lv2ext/props");
$PAGE_SOURCE_2 = ARRAY("Namespace", "LV2-Extensions", "KXStudio Properties");
include_once("../../includes/header.php");
?>

<p>
    A set of custom LV2 properties created by and for KXStudio related projects.<br/>
</p>
<p>
    C header file: <a href="lv2_kx-props.h">lv2_kx-props.h</a>
<br/>
</p>

<h3 id="NonAutomatable">non automatable</h3>
<p>Port should not be automated by the host.</p>

<h3 id="Reset">reset</h3>
<p>Reset an internal processing plugin state (filters, oscillators, envelopes, lfos, etc) and kill all voices.</p>

<h3 id="TimePositionTicksPerBeat">ticks per beat</h3>
<p>How many ticks are in a beat.</p>

<h3 id="TransientWindowId">transient window id</h3>
<p>A window id from the host to be set as transient hint by the plugin.</p>

<hr/>

<p>
    List of hosts that use this extension:
    <ul>
        <li><a href="<?php echo $ROOT; ?>/Applications:Carla" target="_blank">Carla</a></li>
        <li><a href="https://github.com/mod-audio/mod-host" target="_blank">mod-host</a></li>
    </ul>
</p>
<br/>

<?php
include_once("../../includes/footer.php");
?>
