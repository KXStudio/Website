<?php
$PAGE_TITLE    = "KXStudio LV2-Extensions Namespace";
$PAGE_TYPE     = "NAMESPACE";
$PAGE_SOURCE_1 = ARRAY("/ns", "/ns/lv2ext", "/ns/lv2ext/external-ui");
$PAGE_SOURCE_2 = ARRAY("Namespace", "LV2-Extensions", "External UI");
include_once("../../includes/header.php");
?>

<p>
    LV2 External UI extension is an <a href="http://lv2plug.in/ns/extensions/ui" target="_blank">LV2 UI</a> extension, subclass of <a href="http://lv2plug.in/ns/extensions/ui/#UI" target="_blank">http://lv2plug.in/ns/extensions/ui/#UI</a> just like <a href="http://lv2plug.in/ns/extensions/ui/#GtkUI" target="_blank">http://lv2plug.in/ns/extensions/ui/#GtkUI</a> is.<br/>
    It defines LV2UI_Widget pointer/handle as a pointer to LV2_External_UI_Widget, defined in the lv2_external_ui.h header (see below).<br/>
</p>
<ul>
    <li>C header file: <a href="lv2_external_ui.h">lv2_external_ui.h</a></li>
    <li>DSSI-like universal "wrapper": <a href="dssi_wrapper.c">dssi_wrapper.c</a>.<br/>
    Example DSSI-like implementation of external UI (made originally for lv2 nekobee). Must be built with defines for UI_EXECUTABLE and UI_URI (strings).</li>
</ul>
<p>
    This extension used to be available under the <b style="text-decoration: line-through;">http://lv2plug.in/ns/extensions/ui#external</b> URI, and later <b style="text-decoration: line-through;">http://nedko.arnaudov.name/lv2/external_ui/</b>.<br/>
    These old URIs are deprecated and the extension is available under the new <b>http://kxstudio.sf.net/ns/lv2ext/external-ui</b> URI.<br/>
    Or if you prefer, the old extensions are deprecated and a new one with exactly same semantics but different URI is available.<br/>
    <br/>
    NOTE: The old <b style="text-decoration: line-through;">http://nedko.arnaudov.name/lv2/external_ui/</b> URI has been removed from the header file, since there were no plugins using it.
</p>
<hr/>

<p>
    List of plugins that use this extension:
    <ul>
        <li><a href="http://calf.sourceforge.net/" target="_blank">Calf</a> (custom version as available <a href="https://github.com/falkTX/calf" target="_blank">here</a>)</li>
        <li><a href="http://distrho.sourceforge.net/" target="_blank">DISTRHO Plugins and Ports</a></li>
        <li><a href="http://www.drumgizmo.org/" target="_blank">DrumGizmo</a></li>
        <li><a href="http://drumkv1.sourceforge.net/" target="_blank">drumkv1</a></li>
        <li><a href="http://www.linuxdsp.co.uk/" target="_blank">linuxDSP</a></li>
        <li><a href="https://github.com/x42/meters.lv2" target="_blank">meters.lv2</a></li>
        <li><a href="https://www.pianoteq.com/pianoteq4" target="_blank">Pianoteq</a></li>
        <li><a href="http://samplv1.sourceforge.net/" target="_blank">samplv1</a></li>
        <li><a href="http://synthv1.sourceforge.net/" target="_blank">synthv1</a></li>
    </ul>
</p>

<p>
    List of hosts that use this extension:
    <ul>
        <li><a href="http://ardour.org" target="_blank">Ardour</a></li>
        <li><a href="<?php echo $ROOT; ?>/Applications:Carla" target="_blank">Carla</a></i></li>
        <li><a href="http://drobilla.net/software/jalv/" target="_blank">Jalv</a> (using <a href="jalv_extui_svn5273b.diff" target="_blank">this patch</a>)</li>
        <li><a href="http://qtractor.sourceforge.net" target="_blank">Qtractor</a></li>
    </ul>
</p>
<br/>

<?php
include_once("../../includes/footer.php");
?>
