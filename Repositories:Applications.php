<?php
$PAGE_TITLE    = "KXStudio : Repositories : Applications";
$PAGE_TYPE     = "KXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Repositories", "/Repositories:Applications");
$PAGE_SOURCE_2 = ARRAY("Repositories", "Applications");
include_once("includes/header.php");
?>

<div class="box box-description">
    <p>
        This section lists the applications available in the repositories.<br/>
        Click on the yellow application name to install its respective package.<br/>
        You might also want to check:
    </p>
    <ul>
        <li><a href="<?php echo $ROOT; ?>/Repositories:Plugins">Plugins in the repositories</a></li>
    </ul>
    <br/>
</div>

<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/screenshots/cadence1.png">
           <img src="screenshots/thumb/cadence.png" alt="cadence" class="img_thumb_150"/>
        </a></p>
    </td><td>
        <p>
            <b><a href="apt://cadence" style="color: rgb(230,230,100);">Cadence</a></b> (JACK Toolbox)<br/>
            Cadence is a set of tools useful for audio production.<br/>
            This is the main app. It performs system checks, manages JACK, calls other tools and make system tweaks.<br/>
            Homepage and Documentation: <a href="http://kxstudio.sf.net/cadence" class="external text" rel="nofollow" target="_blank">http://kxstudio.sf.net/cadence</a><br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/screenshots/catia.png">
           <img src="screenshots/thumb/catia.png" alt="catia" class="img_thumb_150"/>
        </a></p>
    </td><td>
        <p>
            <b><a href="apt://catia" style="color: rgb(230,230,100);">Catia</a></b> (Patchbay)<br/>
            Catia is a JACK Patchbay, with some neat features like A2J bridge support and JACK Transport.<br/>
            It's supposed to be as simple as possible, so it can work nicely on non-Linux platforms.<br/>
            Homepage and Documentation: <a href="http://kxstudio.sf.net/catia" class="external text" rel="nofollow" target="_blank">http://kxstudio.sf.net/catia</a><br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/screenshots/claudia.png">
           <img src="screenshots/thumb/claudia.png" alt="claudia" class="img_thumb_150"/>
        </a></p>
    </td><td>
        <p>
            <b><a href="apt://claudia" style="color: rgb(230,230,100);">Claudia</a></b> (Session Manager)<br/>
            Claudia is a LADISH frontend; it's just like Catia, but focused at session management through LADISH.<br/>
            It has a bit more features than the official LADISH GUI, with a nice preview of the main canvas in the bottom-left.<br/>
            It also implements the 'Claudia-Launcher' add-application style for LADISH.<br/>
            Homepage and Documentation: <a href="http://kxstudio.sf.net/claudia" class="external text" rel="nofollow" target="_blank">http://kxstudio.sf.net/claudia</a><br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/screenshots/renoise.png">
           <img src="screenshots/thumb/renoise.png" alt="renoise" class="img_thumb_150"/>
        </a></p>
    </td><td>
        <p>
            <b><a href="apt://renoise" style="color: rgb(230,230,100);">Renoise</a></b> (Tracker, non-free)<br/>
            Renoise is a complete, expandable Digital Audio Workstation (DAW) with a refreshing twist.<br/>
            It lets you record, compose, edit, process and render production-quality audio using a tracker-based approach.<br/>
            It features a wide range of built-in audio processors, alongside support for all commonly used virtual instrument and effect plug-in formats.<br/>
            Homepage: <a href="http://www.renoise.com" class="external text" rel="nofollow" target="_blank">http://www.renoise.com</a><br/>
            User Manual: <a href="http://tutorials.renoise.com/wiki" class="external text" rel="nofollow" target="_blank">http://tutorials.renoise.com/wiki</a><br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/screenshots/sunvox.png">
           <img src="screenshots/thumb/sunvox.png" alt="sunvox" class="img_thumb_150"/>
        </a></p>
    </td><td>
        <p>
            <b><a href="apt://sunvox" style="color: rgb(230,230,100);">SunVox</a></b> (Tracker, non-free)<br/>

            SunVox is a small, fast and powerful modular synthesizer with pattern based sequencer (tracker).<br/>
            It is a tool for those people who like to compose music wherever they are, whenever they wish.<br/>
            On any device. SunVox is available for Windows, Linux, Mac OS X, Windows Mobile, PalmOS, Maemo, Meego, iOS and Android.<br/>
            Homepage: <a href="http://www.warmplace.ru/soft/sunvox/" class="external text" rel="nofollow" target="_blank">http://www.warmplace.ru/soft/sunvox/</a><br/>
            User Manual: <a href="http://www.warmplace.ru/wiki/sunvox:manual_en" class="external text" rel="nofollow" target="_blank">http://www.warmplace.ru/wiki/sunvox:manual_en</a><br/>
        </p>
    </td></tr>
</table>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
