<?php
$PAGE_TITLE    = "KXStudio : Documentation";
$PAGE_TYPE     = "NONKXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Documentation", "/Documentation", "/Documentation:Repository:Meta-Packages");
$PAGE_SOURCE_2 = ARRAY("Documentation", "Repository", "Meta-Packages");
include_once("includes/header.php");
?>

<p>
    This section describes all the meta-packages available in the KXStudio repositories, splitted by type.
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

<h3><span class="mw-headline" id="RecommendedPackageList">Recommended Meta-Package List</span></h3>
<p>
    These are for packages that come from the Debian/Ubuntu repositories, not the KXStudio ones.<br/>
    In a tree-like view, the recommended meta-packages are setup like this:
</p>
<ul>
    <li>kxstudio-recommended-all<ul>
        <li>kxstudio-recommended-audio</li>
        <li>kxstudio-recommended-audio-plugins
            <ul>
                <li>kxstudio-recommended-audio-plugins-ladspa</li>
                <li>kxstudio-recommended-audio-plugins-dssi</li>
                <li>kxstudio-recommended-audio-plugins-lv2</li>
            </ul>
        </li>
        <li>kxstudio-recommended-graphics</li>
        <li>kxstudio-recommended-video</li>
    </ul></li>
</ul>

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
<p>
    The 'recommended-audio' recommends 'recommended-audio-plugins'.<br/>
    Depending on your distro this might be treated as a dependency.
</p>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
