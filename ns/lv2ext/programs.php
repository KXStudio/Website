<?php
$PAGE_TITLE    = "KXStudio LV2-Extensions Namespace";
$PAGE_TYPE     = "NAMESPACE";
$PAGE_SOURCE_1 = ARRAY("/ns", "/ns/lv2ext", "/ns/lv2ext/programs");
$PAGE_SOURCE_2 = ARRAY("Namespace", "LV2-Extensions", "Programs");
include_once("../../includes/header.php");
?>

<p>
    LV2 Programs is an <a href="http://lv2plug.in/ns/lv2core#Specification" target="_blank">LV2 Extension</a> that allows a host to access plugin-side midi-mapped programs (ala DSSI style, but for LV2).<br/>
    It is not the same as <a href="http://lv2plug.in/ns/ext/presets" target="_blank">LV2 Presets</a>, which defines host-side presets where the plugin has no control or role whatsoever.<br/>
</p>
<p>
    C header file: <a href="lv2_programs.h">lv2_programs.h</a>
<br/>
</p>

<hr/>

<p>
    List of plugins that use this extension:
    <ul>
        <li><a href="http://distrho.sourceforge.net" target="_blank">DISTRHO Plugins and Ports</a></li>
        <li><a href="http://drobilla.net/software/mda-lv2/" target="_blank">mda-lv2</a> (using <a href="mda-lv2_programs.patch" target="_blank">this patch</a>)</li>
    </ul>
</p>

<p>
    List of hosts that use this extension:
    <ul>
        <li><a href="<?php echo $ROOT; ?>/Applications:Carla" target="_blank">Carla</a></li>
        <li><a href="http://qtractor.sourceforge.net" target="_blank">Qtractor</a></li>
    </ul>
</p>
<br/>

<?php
include_once("../../includes/footer.php");
?>
