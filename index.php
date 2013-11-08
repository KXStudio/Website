<?php
$PAGE_TITLE    = "KXStudio";
$PAGE_TYPE     = "HOME";
$PAGE_SOURCE_1 = ARRAY();
$PAGE_SOURCE_2 = ARRAY();
include_once("includes/header.php");
?>

<p>
    KXStudio is a collection of applications and plugins for professional audio production.<br/>
    KXStudio provides Debian and Ubuntu compatible repositories and its own Linux Distribution currently based on Ubuntu 12.04.3 LTS.
</p>

<p>
    The KXStudio project is divided into 3 main sections:
</p>

<table>
    <tr><td width="130" height="130">
        <p><img src="images/cadence.png" alt="cadence.png" class="img_thumb_128"/></p>
    </td><td>
        <p>
            <b><a href="<?php echo $ROOT; ?>/Applications">Applications</a></b><br/>
            We offer our own custom set of applications and utilities for Linux and Windows.<br/>
            This includes a fully-featured audio plugin host, a JACK patchbay and more.<br/>
            <br/>
        </p>
    </td></tr>

    <tr><td width="130" height="130">
        <p><img src="images/distrho.png" alt="distrho.png" class="img_thumb_128"/></p>
    </td><td>
        <p>
            <b><a href="<?php echo $ROOT; ?>/Plugins">Plugins</a></b><br/>
            We provide a wide range of open-source audio plugins and Linux ports.<br/>
            We also provide custom patched plugins to work better and/or support more features.<br/>
        </p>
    </td></tr>

    <tr><td width="130" height="130">
        <p><img src="images/repos.png" alt="repos.png" class="img_thumb_128"/></p>
    </td><td>
        <p>
            <b><a href="<?php echo $ROOT; ?>/Repositories">Repositories</a></b><br/>
            Debian and Ubuntu compatible repositories are available.<br/>
            Use them to get extra applications and updates, or to upgrade to the KXStudio distribution.<br/>
            <br/>
        </p>
    </td></tr>
</table>

<p><br/></p>

<hr/>

<div align="center" class="div_donate">
    <p>
        If you want to help development, a donation, even small, is very welcome.<br/>
        Check the <a href="<?php echo $ROOT; ?>/Donations">Donations</a> section to know how you can make one.
    </p>
</div>
<br/>

<?php
include_once("includes/footer.php");
?>
