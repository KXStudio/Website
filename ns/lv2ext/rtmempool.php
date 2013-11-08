<?php
$PAGE_TITLE    = "KXStudio LV2-Extensions Namespace";
$PAGE_TYPE     = "NAMESPACE";
$PAGE_SOURCE_1 = ARRAY("/ns", "/ns/lv2ext", "/ns/lv2ext/rtmempool");
$PAGE_SOURCE_2 = ARRAY("Namespace", "LV2-Extensions", "Realtime-Safe Memory Pool");
include_once("../../includes/header.php");
?>

<p>
    LV2 realtime safe memory pool extension definition.<br/>
</p>
<p>
    C header file: <a href="lv2_rtmempool.h">lv2_rtmempool.h</a>
<br/>
</p>

<hr/>

<p>
    List of hosts that use this extension:
    <ul>
        <li><a href="<?php echo $ROOT; ?>/Applications:Carla" target="_blank">Carla</a></li>
    </ul>
</p>
<br/>

<?php
include_once("../../includes/footer.php");
?>
