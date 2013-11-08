<?php
$PAGE_TITLE    = "KXStudio Namespace";
$PAGE_TYPE     = "NAMESPACE";
$PAGE_SOURCE_1 = ARRAY("/ns");
$PAGE_SOURCE_2 = ARRAY("Namespace");
include_once("../includes/header.php");
?>

<h6>Canvas</h6>
<ul>
    <li><a href="canvas/split">Split</a></li>
    <li><a href="canvas/x_split">X Split</a></li>
    <li><a href="canvas/y_split">Y Split</a></li>
</ul>
<br/>

<h6>Developer Documentation (doxygen)</h6>
<ul>
    <li><a href="dev-docs/CarlaBackend">Carla Backend</a></li>
</ul>
<br/>

<h6>LV2 Extensions</h6>
<ul>
    <li><a href="lv2ext/external-ui">External UI</a></li>
    <li><a href="lv2ext/programs">Programs</a></li>
    <li><a href="lv2ext/rtmempool">Realtime-Safe Memory Pool</a></li>
</ul>
<br/>

<?php
include_once("../includes/footer.php");
?>
