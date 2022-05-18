<?php
$PAGE_TITLE    = "KXStudio : Documentation";
$PAGE_TYPE     = "NONKXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Documentation", "/Documentation", "/Documentation:Repository:Meta-Packages");
$PAGE_SOURCE_2 = ARRAY("Documentation", "Repository", "Meta-Packages");
include_once("includes/header.php");
?>

<p>
    This section describes all the meta-packages available in the KXStudio repositories, split by type.
</p>

<h3><span class="mw-headline" id="MetaPackageList">KXStudio own package list</span></h3>
<p>
    These are for packages available through the KXStudio repositories.<br/>
    In a tree-like view, the meta-packages are setup like this:
</p>
<ul>
    <li>kxstudio-meta-all<ul>
        <li>kxstudio-meta-audio-applications</li>
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
<p>
    The "collection" is a subset, focusing on just the highlights/best plugins to install out of all LADSPA, DSSI, LV2 and VSTs
    (where LV2 format is preferred, if available).<br/>
    Whereas the specific plugin format packages are more complete, they will install all individual packages that contain plugins in that format.
</p>

<h3><span class="mw-headline" id="Notes">Notes</span></h3>
<p>
    The 'meta-audio-plugins-collection' package is an alternative to installing all plugins at once.<br/>
    If you're the kind of person that only wants to install the best plugins, consider installing this package first before installing other audio meta-packages.<br/>
    This way installing 'meta-audio-plugins' will not pull 'meta-audio-plugins-ladspa', 'meta-audio-plugins-dssi', etc.
</p>
<p>
    Audio plugins packages that include several formats (like drumgizmo that includes LV2 and VST) or standalone applications (like calf-plugins)
      are not part of the specific '*-audio-plugins-*' packages.<br/>
    This is because installing those will install additional plugin formats and/or full applications.<br/>
    To ensure, for example, that you get all possible LV2 plugins from KXStudio, install 'meta-audio-plugins' and 'meta-audio-plugins-lv2'.
</p>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
