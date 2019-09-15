<?php
$PAGE_TITLE    = "KXStudio : Repositories : Plugins";
$PAGE_TYPE     = "REPOSITORY_PACKAGES";
$PAGE_SOURCE_1 = ARRAY("/Repositories", "/Repositories:Plugins");
$PAGE_SOURCE_2 = ARRAY("Repositories", "Plugins");
include_once("includes/header.php");
?>

<div class="box box-description">
    <p>
        This section lists the audio plugins available in the repositories.<br/>
        Click on the green plugin name to install its respective package.<br/>
        (If the links don't work, make sure you have the 'apturl-kde' or 'apturl' packages installed)
    </p>
    <p>
        You might also want to check:
    </p>
    <ul>
        <li><a href="<?php echo $ROOT; ?>/Repositories:Applications">Applications in the repositories</a></li>
    </ul>
    <br/>
</div>

<div class="repository-package-list">
<?php
include_once("repo/plugins.html");
?>
</div>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
