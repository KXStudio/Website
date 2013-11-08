<?php
$PAGE_TITLE    = "KXStudio";
$PAGE_TYPE     = "NONKXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Documentation", "/Documentation", "/Documentation:Wiki");
$PAGE_SOURCE_2 = ARRAY("Documentation", "Wiki");
include_once("includes/header.php");
?>

<iframe id="wikitextframe" src="http://www.wiki.linuxmusicians.com/doku.php?do=export_html" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0"></iframe>

<?php
include_once("includes/footer.php");
?>
