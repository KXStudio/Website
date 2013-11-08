<?php
$PAGE_TITLE    = "KXStudio Documentation";
$PAGE_TYPE     = "NONKXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Documentation", "/Documentation", "/Documentation:Ubuntu:Meta-Packages");
$PAGE_SOURCE_2 = ARRAY("Documentation", "Ubuntu", "Meta-Packages");
include_once("includes/header.php");
?>

<p>
    This section describes all the meta-packages available in the KXStudio-Team Ubuntu repositories, splitted by type.
</p>

<h5><span class="mw-headline" id="MainMetaPackages">Main Meta-Packages</span></h5>
<p>
    The main meta-packages will simply install Audio, Graphic or Video applications.<br />
    The Audio meta-package is also split into plugin categories, for anyone that wants more plugins, but not actually more applications.<br />
    It's not like your KXStudio system will get slower with a bit more applications though...
</p>
<p>
    The main meta-packages are:
</p>
<ul>
    <li>kxstudio-meta-audio</li>
    <li>kxstudio-meta-audio-plugins</li>
    <li>kxstudio-meta-audio-plugins-ladspa</li>
    <li>kxstudio-meta-audio-plugins-dssi</li>
    <li>kxstudio-meta-audio-plugins-lv2</li>
    <li>kxstudio-meta-audio-plugins-vamp</li>
    <li>kxstudio-meta-audio-plugins-vst</li>
    <li>kxstudio-meta-graphics</li>
    <li>kxstudio-meta-video</li>
</ul>
<p>
    Some notes:<br/>
    'audio' recommends 'audio-plugins', and 'audio-plugins' depends on all it's sub-packages.<br />
    With the exception of KXStudio 12.04, 'graphics' recommends 'ubuntustudio-font-meta', which will install a nice collection of fonts.<br />
    On KXStudio 12.04, you have to install 'ubuntustudio-font-meta' manually if you want that font collection.
</p>

<p><br/></p>

<h5><span class="mw-headline" id="ExtraMetaPackages">Extra Meta-Packages</span></h5>
<p>
    The extra meta-packages are:
</p>
<ul>
    <li>kxstudio-meta-codecs <i>(12.04 only)</i></li>
    <li>kxstudio-meta-non-free</li>
    <li>kxstudio-meta-restricted-extras</li>
</ul>
<p>
    The 'codecs' package is self-explanatory, it will install a collection of codecs for gstreamer, sox and xine.<br />
</p>
<p>
    The 'non-free' will install some good but close-source software, like Renoise, energyXT, and Pianoteq.<br />
    These applications come as demos, see <a href="<?php echo $ROOT; ?>/Documentation:Ubuntu:RegisterCommercial">Documentation:Ubuntu:RegisterCommercial</a> to activate them if you have a license.
</p>
<p>
    The 'restricted-extras' is simply a combination of '[k|x]ubuntu-restricted-extras', and some other minor "restricted" stuff.<br />
    (In this case, "restricted" means that it can't be installed in Ubuntu by default, but you're safe to do it afterwards).<br />
    This package recommends 'kxstudio-meta-codecs'.
</p>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
