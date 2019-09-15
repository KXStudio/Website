<?php
$PAGE_TITLE    = "KXStudio : Documentation";
$PAGE_TYPE     = "NONKXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Documentation", "/Documentation", "/Documentation:Repository:Meta-Packages");
$PAGE_SOURCE_2 = ARRAY("Documentation", "Repository", "Meta-Packages");
include_once("includes/header.php");
?>

<p style="color:#fa3a3a;">
    NOTE: The KXStudio repos are being reworked in a new setup, not all packages are available to install yet.
</p>

<p>
    This section describes all the meta-packages available in the KXStudio repositories, splitted by type.
</p>

<h3><span class="mw-headline" id="MetaPackageList">Meta-Package List</span></h3>
<p>
    In a tree-like view, the meta-packages are setup like this:
</p>
<ul>
    <li>kxstudio-meta-all<ul>
        <li>kxstudio-meta-audio</li>
        <li>kxstudio-meta-audio-plugins
            <table><tr><td>
                <ul>
                    <li>kxstudio-meta-audio-plugins-collection</li>
                </ul>
            </td>
            <td> or </td>
            <td>
                <ul>
                    <li>kxstudio-meta-audio-plugins-ladspa</li>
                    <li>kxstudio-meta-audio-plugins-dssi</li>
                    <li>kxstudio-meta-audio-plugins-lv2</li>
                    <li>kxstudio-meta-audio-plugins-vst</li>
                </ul>
            </td></tr></table>
        </li>
    </ul></li>
</ul>

<h3><span class="mw-headline" id="MetaPackageDetails">Meta-Package Details</span></h3>
<p>
    The main meta-packages are Audio, Audio-Plugins, Graphics and Video.<br/>
    The Audio-Plugins meta-package is also split into plugin categories, for anyone that wants more plugins, but not actually more applications.<br/>
</p>

<h3><span class="mw-headline" id="Notes">Notes</span></h3>
<p>
    The 'meta-all' package recommends 'meta-restricted-extras' and 'meta-audio' recommends 'meta-audio-plugins'.<br/>
    Depending on your distro these might be treated as dependencies.
</p>
<p>
    Audio plugins packages that include several formats (like drumgizmo that includes LV2 and VST) or standalone applications (like calf-plugins)
      are not part of the specific 'meta-audio-plugins-*' packages.<br/>
    This is because installing those will install additional plugin formats and/or full applications.<br/>
    To ensure, for example, that you get all possible LV2 plugins, install 'meta-audio-plugins' and 'meta-audio-plugins-lv2'.
</p>
<p>
    The 'meta-audio-plugins-collection' package is an alternative to installing all plugins at once.<br/>
    If you're the kind of person that only wants to install the best plugins, consider installing this package first before installing other audio meta-packages.<br/>
    This way installing 'meta-audio' will not pull 'meta-audio-plugins-ladspa', 'meta-audio-plugins-dssi', etc.
</p>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
