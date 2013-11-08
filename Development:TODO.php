<?php
$PAGE_TITLE    = "KXStudio : Development : TODO";
$PAGE_TYPE     = "NONKXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Development", "/Development/TODO");
$PAGE_SOURCE_2 = ARRAY("Development", "TODO");
include_once("includes/header.php");
?>

<p>
    This page contains a list of things left to do for KXStudio.<br/>
    <br/>
</p>

<p>
    <b>Tasks for common people (not Team restricted):</b>
</p>
<ul>
    <li><s>KXStudio Dark Metacity theme (based on Ambiance)</s></li>
    <li>KXStudio Gtk3 Theme port <i>(In progress)</i></li>
        <p>
            Work has already been done for this, but it's still far from finished.<br/>
            The current theme uses the <a href="http://gnome-look.org/content/show.php?content=142331" class="external text" rel="nofollow" target="_blank">solidity-gtk3 engine</a>.<br/>
            It's available in the latest KXStudio Artwork release.
        </p>
    <li>Make kxstudio-menu module work on all systems <i>(In progress)</i></li>
        <p>
            kxstudio-menu has been proven to work on Gnome2, KDE3, KDE4 and XFCE4.<br />
            It may not work on LXDE, needs testing (any LXDE users here?).
        </p>
    <li>QJackCtl needs to support proper jackdbus save/load, so it shares configuration with Cadence and laditools</li>
</ul>
<br/>

<?php
include_once("includes/footer.php");
?>
