<?php
$PAGE_TITLE    = "KXStudio : Repositories : Extras";
$PAGE_TYPE     = "KXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Repositories", "/Repositories:Extras");
$PAGE_SOURCE_2 = ARRAY("Repositories", "Extras");
include_once("includes/header.php");
?>

<div class="box box-description">
    <p>
        <b>The extra repository is now deprecated and will no longer be updated</b>.
    </p>
    <p>
        It is no longer possible to build i386 packages on launchpad PPAs, and as such any system library packages end up broken for multi-arch systems.<br/>
        This prevents us from updating, for example, JACK2 without it completely breaking 32bit system compatibility.<br/>
        In order to prevent more breakage this repository should no longer be used.
    </p>
</div>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
