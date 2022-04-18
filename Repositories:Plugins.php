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
        Click on the thumbnail to see the full-size image.<br/>
        Individual deb files can be downloaded, requiring at least Debian 11 / Ubuntu 20.04 or superior.<br/>
        <b>If a "data" download is listed, it needs to be installed first before the architecture-dependent one</b>.
    </p>
    <p>
        You might also want to check:
    </p>
    <ul>
        <li><a href="<?php echo $ROOT; ?>/Repositories:Applications">Applications in the repositories</a></li>
        <li><a href="<?php echo $ROOT; ?>/Repositories:FAQ">Frequent asked questions</a></li>
    </ul>
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
