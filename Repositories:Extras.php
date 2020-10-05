<?php
$PAGE_TITLE    = "KXStudio : Repositories : Extras";
$PAGE_TYPE     = "KXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Repositories", "/Repositories:Extras");
$PAGE_SOURCE_2 = ARRAY("Repositories", "Extras");
include_once("includes/header.php");
?>

<div class="box box-description">
    <p>
        This section contains extra repositories from the KXStudio project.<br/>
        As with the main KXStudio repositories, these extra ones also support both Intel-based and ARM-based CPU architectures.
    </p>
    <p>
        You might also want to check:
    </p>
    <ul>
        <li><a href="<?php echo $ROOT; ?>/Repositories:Applications">Applications in the repositories</a></li>
        <li><a href="<?php echo $ROOT; ?>/Repositories:Plugins">Plugins in the repositories</a></li>
        <li><a href="<?php echo $ROOT; ?>/Repositories:FAQ">Frequent asked questions</a></li>
    </ul>
</div>

<hr/>

<h3><span class="mw-headline">
<img src="images/ico_ubuntu.png" class="img_text_align" alt=""/> Ubuntu 18.04 and 20.04 specific extras
</span></h3>

<p>
    <span style="font-weight:lighter">Repository code:</span> ppa:kxstudio-debian/ubuntus
</p>
<p>
    This is a repository/PPA for Ubuntu 18.04 and 20.04 users with a few goodies that cannot be made into generic packages.<br/>
    All packages that require system integration or shared libraries that cannot be packaged in a generic way will be put in this repository.
</p>
<p>
    <b>This repository is only for Ubuntu 18.04 and 20.04 users!</b>
</p>
<p>
    The repository contains: (for both 18.04 and 20.04)
</p>
<ul>
    <li>Up-to-date FFADO and JACK2</li>
    <li>Patched alsa-driver source to prevent snd-aloop from being loaded as first soundcard</li>
</ul>
<p>
    The repository also contains: (specifically for 18.04)
</p>
<ul>
    <li>Up-to-date GCC (version 9 at the moment)</li>
    <li>FAudio package, needed for Wine-Staging (also updated libstb and libsdl2 as required)</li>
    <li>Wine-RT package (an old version, for now)</li>
    <li>Patched pulseaudio source to always install pulseaudio-module-jack (needed for JACK+PulseAudio bridge)</li>
</ul>
<p>
    Enabling this repository can be done with the following:
</p>
<pre>
<span style="color: rgb(110, 110, 110);"># Instructions</span>
sudo add-apt-repository ppa:kxstudio-debian/ubuntus
sudo apt-get update
</pre>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
