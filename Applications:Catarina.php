<?php
$PAGE_TITLE    = "KXStudio : Applications : Catarina";
$PAGE_TYPE     = "APPLICATION_NU";
$PAGE_SOURCE_1 = ARRAY("/Applications", "/Applications:Catarina");
$PAGE_SOURCE_2 = ARRAY("Applications", "Catarina");
include_once("includes/header.php");
?>

<!-- intro -->
<p>
    Catarina is a Patchbay test app, created while the PatchCanvas module was being developed.<br/>
    It allows the user to experiment with the patchbay, without using ALSA, JACK or LADISH.<br/>
    You can save &amp; load patchbay configurations too.<br/>
</p>

<!-- Interface -->
<h3><span class="mw-headline" id="Interface"> The Interface </span></h3>
<p>
    A screenshot follows:<br/>
    <a href="screenshots/catarina.png" class="external text" rel="nofollow"><img src="screenshots/catarina.png" alt="catarina.png" /></a>
</p>
<p>
    The 'File' menu and 'Project' toolbar provides actions related to projects: the common new, open and save.<br/>
    The 'Patchbay' menu and toolbar allows you to control what's inside the canvas. You can add/remove groups, add/remove ports and manage connections.<br/>
    The 'Canvas' menu and toolbar gives you control over the canvas zoom. The menu has actions for printing and saving an image of the current canvas.<br/>
</p>
<p>
    As with all the Cadence tools, you can hide the toolbar via 'Settings' menu, and also configure Catarina.<br/>
    The configure dialog looks like this:<br/>
    <a href="screenshots/catarina-configure.png" class="external text" rel="nofollow"><img src="screenshots/catarina-configure.png" alt="catarina-configure.png" /></a>
</p>
<p>
    You can change the theme used for the canvas (more on that below) and wherever or not to use bezier lines (will use straight lines if off).<br/>
    Fancy Eye-candy has 3 states:
</p>
<ul>
<li>Unchecked (None): no eye-candy;</li>
<li>Partially (Small): applies drop-shadow to the boxes, this is the default;</li>
<li>Checked (Full): box drop-shadow, fade-in/out animations and line glow;</li>
</ul>
<p>
    <i>(Note: Full eye-candy currently is EXPERIMENTAL, and will make Catarina crash at random times. The cause of the crashes are under investigation).</i><br/>
</p>
<p>
    You can also enable OpenGL for the canvas (so the entire 2D space is rendered in the GPU, which makes big projects render much faster) and Anti-aliasing.<br/>
    OpenGL is experimental within Qt4 itself, and will not work properly on all systems.<br/>
    Anti-aliasing has 3 states:
</p>
<ul>
<li>Unchecked (None): disable all anti-aliasing;</li>
<li>Partially (Small): applies only to the lines, this is the default;</li>
<li>Checked (Full): apply anti-aliasing everywhere;</li>
</ul>
<p>
    Settings will be applied as soon as you press 'OK', no need to restart Catarina.<br/>
</p>

<!-- Download -->
<h3><span class="mw-headline" id="Download"> Download </span></h3>
<p>
    Catarina is available in the KXStudio repositories and ArchLinux ('catarina' package in the KXStudio repositories, 'cadence' in ArchLinux).<br/>
    <img src="images/ico_arch.png" alt="" class="img_text_align_spaced"/>
        <a href="https://www.archlinux.org/packages/community/x86_64/cadence/" class="external text a_bigger_text" rel="nofollow" target="_blank">
         ArchLinux</a> (Community)<br/>
    <img src="images/ico_debian.png" alt="" class="img_text_align_spaced"/>
        <a href="apt://catarina" class="external text a_bigger_text">
         Debian/Ubuntu</a> (via KXStudio repositories)<br/>
</p>
<p>
    Pre-compiled binaries are available for Linux and Windows (part of the Cadence bundle).<br/>
    <img src="images/ico_linux.png" alt="" class="img_text_align_spaced"/>
        <a href="http://sourceforge.net/projects/kxstudio/files/Releases/cadence/Cadence-0.8.1-linux32.tar.xz/download" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Linux 32bit</a><br/>
    <img src="images/ico_linux.png" alt="" class="img_text_align_spaced"/>
        <a href="http://sourceforge.net/projects/kxstudio/files/Releases/cadence/Cadence-0.8.1-linux64.tar.xz/download" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Linux 64bit</a><br/>
    <img src="images/ico_windows.png" alt="" class="img_text_align_spaced"/>
        <a href="http://sourceforge.net/projects/kxstudio/files/Releases/cadence/Cadence-0.8.1-win32.zip/download" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Windows 32bit</a><br/>
</p>
<p>
    The latest source code is hosted on github, together with bug reports, feature requests, etc.<br/>
     <img src="images/ico_github.png" alt="" class="img_text_align_spaced"/>
        <a href="https://github.com/falkTX/Cadence" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Source code</a><br/>
     <img src="images/ico_github.png" alt="" class="img_text_align_spaced"/>
        <a href="https://github.com/falkTX/Cadence/issues?state=open" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Bug reports / Feature requests</a><br/>
</p>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
