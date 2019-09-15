<?php
$PAGE_TITLE    = "KXStudio : Repositories : Applications";
$PAGE_TYPE     = "REPOSITORY_PACKAGES";
$PAGE_SOURCE_1 = ARRAY("/Repositories", "/Repositories:Applications");
$PAGE_SOURCE_2 = ARRAY("Repositories", "Applications");
include_once("includes/header.php");
?>

<div class="box box-description">
    <p>
        This section lists the applications available in the repositories.<br/>
        Click on the yellow application name to install its respective package.<br/>
        (If the links don't work, make sure you have the 'apturl-kde' or 'apturl' packages installed)
    </p>
    <p>
        You might also want to check:
    </p>
    <ul>
        <li><a href="<?php echo $ROOT; ?>/Repositories:Plugins">Plugins in the repositories</a></li>
    </ul>
    <br/>
</div>

<div class="repository-package-list">
<?php
include_once("repo/applications.html");
?>
</div>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
