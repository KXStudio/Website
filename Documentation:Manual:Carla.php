<?php
$PAGE_TITLE    = "KXStudio";
$PAGE_TYPE     = "NONKXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Documentation", "/Documentation", "/Documentation:Manual:Carla");
$PAGE_SOURCE_2 = ARRAY("Documentation", "Manual", "Carla");
include_once("includes/header.php");
?>

<?php readfile("manuals/carla.html"); ?>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
