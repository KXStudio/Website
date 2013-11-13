<?php
$PAGE_TITLE    = "KXStudio : Documentation";
$PAGE_TYPE     = "NONKXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Documentation", "/Documentation", "/Documentation:Repository:Upgrade");
$PAGE_SOURCE_2 = ARRAY("Documentation", "Repository", "Upgrade");
include_once("includes/header.php");
?>

<p>
    This section describes how to upgrade from a regular Ubuntu install (or variants), to a cool and fresh KXStudio Desktop.
</p>
<p>
    This method will work in all supported Ubuntu versions since Lucid (10.04, 11.10, 12.04 and 12.10).<br />
    The recommended version to use right now is 12.04.
</p>
<p>
    KXStudio officially supports KDE4 and partially XFCE (on 12.04/12.10, KXStudio will use UbuntuStudio desktop as base as it uses XFCE).<br/>
    You can still install KXStudio if using any other Desktop Environment, but there's no meta-packages for them, and we'll not document the install process here.<br/>
    Create a new topic in the forums if you want support for other DEs.
</p>

<p><br/></p>

<h5><span class="mw-headline" id="Step1">Step 1 - Enable the repositories</span></h5>
<p>
    Open up the 'Software Sources' (usually in the System menu), and on the 3rd party separator, add this code:<br/>
    ppa:kxstudio-team/kxstudio<br/>
    Alternatively, you can run this command, which has the same effect:<br/>
    <code>
        sudo add-apt-repository ppa:kxstudio-team/kxstudio
    </code>
</p>
<p>
    Next, reload the sources (method depends on the current application), and install the package 'kxstudio-repos'. Then reload the sources again.<br />
    You can do the same thing in the command-line with:<br />
    <code>
        sudo apt-get update<br/>
        sudo apt-get install kxstudio-repos<br/>
        sudo apt-get update
    </code>
</p>
<p>
    NOTE: If you're running 12.04, it's recommended to also install 'kxstudio-repos-kde49' which will update KDE4 to the stable 4.9.5 version.
</p>

<p><br/></p>

<h5><span class="mw-headline" id="Step2">Step 2 - Update the system</span></h5>
<p>
    Once you've got the repositories set-up, it's time to upgrade the system (ie, update the software, not upgrade to a newer Ubuntu release!).
</p>
<p>
    Simply use whatever tool your Desktop Environment provides (Ubuntu Software Center, Synaptic, Update Manager, KPackageKit, Muon, etc).<br />
    If you want to use the command-line, or if you just got too many dependency conflicts (can happen if you enabled many PPAs before upgrading to KXStudio), the command is:<br />
    <code>
        sudo apt-get dist-upgrade
    </code><br/>
    Even though it says 'dist-upgrade', it will not update the Ubuntu version. In this case, 'dist' means something like "resolve conflicts, even if some stuff gets removed".<br />
</p>
<p>
    This step will take some time. Some minor questions may appear while the upgrade takes place.
</p>

<p><br/></p>

<h5><span class="mw-headline" id="Step3">Step 3 - Install the KXStudio Desktop</span></h5>
<p>
    After the upgrade, it's time to install the main KXStudio packages.<br />
    Just like you did to install the 'kxstudio-repos' package, now install:
</p>
<p>
    For KDE4 -&gt; 'kxstudio-desktop-kde4'<br />
    For XFCE -&gt; 'kxstudio-desktop-xfce'<br />
    For other systems install 'kxstudio-desktop-base' and the ubuntu related package, like 'lubuntu-desktop' for LXDE<br />
</p>

<p><br/></p>

<h5><span class="mw-headline" id="Step4">Step 4 - Install the Multimedia Software</span></h5>
<p>
    This step if almost optional. Here we install the basic software for Audio, Graphics and Video.<br />
    Just like before, it's time to install some new meta-packages. They are available as listed here (following a tree view of dependencies):
</p>
<ul>
    <li>kxstudio-meta-all</li>
    <ul>
        <li>kxstudio-meta-audio</li>
        <ul>
            <li>kxstudio-meta-audio-plugins</li>
            <ul>
                <li>kxstudio-meta-audio-plugins-dssi</li>
                <li>kxstudio-meta-audio-plugins-ladspa</li>
                <li>kxstudio-meta-audio-plugins-lv2</li>
                <li>kxstudio-meta-audio-plugins-vamp</li>
                <li>kxstudio-meta-audio-plugins-vst</li>
            </ul>
        </ul>
        <li>kxstudio-meta-graphics</li>
        <li>kxstudio-meta-video</li>
    </ul>
    <li>kxstudio-meta-codecs</li>
    <li>kxstudio-meta-restricted-extras</li>
    <li>kxstudio-meta-non-free</li>
</ul>
<p>
    Install the meta-packages you want just like before (ie, search for the package and click to install, or use in command-line: <code>sudo apt-get install &lt;package-name&gt;</code>)<br />
    See <a href="<?php echo $ROOT; ?>/Documentation:Ubuntu:Meta-Packages">Documentation:Ubuntu:Meta-Packages</a> for a description of these meta-packages.<br />
</p>
<p>
    Note - meta-all recommends restricted extras, and audio recommends audio-plugins.
</p>

<p><br/></p>

<h5><span class="mw-headline" id="Step5">Step 5 - Install a Kernel (Optional)</span></h5>
<p>
    This step is optional, and mostly useful for audio production only.<br />
    Installing a kernel in KXStudio couldn't be easier - just install one of these packages:
</p>
<ul>
    <li>kxstudio-kernel-generic</li>
    <li>kxstudio-kernel-generic-pae <i>(32bit only)</i></li>
    <li>kxstudio-kernel-lowlatency</li>
    <li>kxstudio-kernel-lowlatency-pae <i>(32bit only)</i></li>
    <li>kxstudio-kernel-realtime <i>(10.04 or 12.04)</i></li>
    <li>kxstudio-kernel-realtime-pae <i>(10.04 or 12.04, 32bit only)</i></li>
</ul>
<p>
    The realtime kernels are only available for 10.04 and 12.04.<br />
    Ubuntu 10.04 uses a 2.6.33 RT kernel and 12.04 uses a 3.2.0 one.
</p>

<p><br/></p>

<h5><span class="mw-headline" id="Step6">Step 6 - Reboot and update settings</span></h5>
<p>
    After all this, it's time to reboot.<br />
    The next time you login, you'll see the KXStudio Welcome Screen to help you update your settings (and maybe the theme too).<br />
    You should also run 'cadence' and change your JACK settings to your preference.<br />
    Finally, just re-login again after updating the settings.
</p>

<p><br/></p>

<h5><span class="mw-headline" id="Step7">Step 7 - Enjoy!</span></h5>
<p>
    Of course, now it's time to enjoy!
</p>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
