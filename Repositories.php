<?php
$PAGE_TITLE    = "KXStudio : Repositories";
$PAGE_TYPE     = "KXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Repositories");
$PAGE_SOURCE_2 = ARRAY("Repositories");
include_once("includes/header.php");

$DEBIAN_PACKAGE     = "kxstudio-repos_11.0.1_all.deb";
$DEBIAN_PACKAGE_URL = "https://launchpad.net/~kxstudio-debian/+archive/kxstudio/+files/" . $DEBIAN_PACKAGE;
?>

<div class="box box-description">
    <p>
        The KXStudio repositories support all Debian versions since <b>11 (Bookworm)</b> and Ubuntu <b>20.04 (Focal)</b> or above including Ubuntu 22.04.<br/>
        They should work on all Debian-based distributions and variants.
    </p>
    <p>
        The only real requirement is it being a computer capable of running <b>x86_64</b> (pretty much everything nowadays)
        or an ARM-based system, which can be <b>armhf</b> (ARM 32bit with neon-vfpv4) or <b>aarch64</b> (ARM 64bit).<br/>
        Legacy i686 systems (PCs that cannot do 64bit) are not supported.
    </p>
    <p>
        Once you have the repositories enabled, you should first update the software sources (using your preferred GUI or simply running <b>sudo apt update</b>),<br/>
        then either manually install individual packages or the meta-packages to automatically get large sets of audio tools and plugins.<br/>
        See the <a href="<?php echo $ROOT; ?>/Documentation:Repository:Meta-Packages">Meta-Packages</a> page for more details.<br/>
    </p>
    <p>
        We recommend to install the <b>kxstudio-default-settings</b> package after enabling the repositories.<br/>
        This will put in place a few system tweaks useful for audio, these include for example, minimizing swap usage and increasing maximum number of open files.
    </p>
    <p>
        You might also want to check:
    </p>
    <ul>
        <li><a href="<?php echo $ROOT; ?>/Repositories:Applications">Applications in the repositories</a></li>
        <li><a href="<?php echo $ROOT; ?>/Repositories:Plugins">Plugins in the repositories</a></li>
        <li><a href="<?php echo $ROOT; ?>/Repositories:FAQ">Frequent asked questions</a></li>
        <li><a href="<?php echo $ROOT; ?>/Repositories:Extras">Extra repositories from the KXStudio project</a></li>
    </ul>
    <p>
        Bug reports and package requests should be posted in the
            <a href="https://github.com/KXStudio/Repository/issues" target="_blank">Repository project page</a>.<br/>
        Below is information on how to enable the repositories.
    </p>
</div>

<hr/>

<h3><span class="mw-headline">
<img src="images/ico_debian.png" class="img_text_align" alt=""/> Debian / <img src="images/ico_ubuntu.png" class="img_text_align" alt=""/> Ubuntu
</span></h3>

<p>
    All Debian and Ubuntu users can enable our repositories by installing this deb file:
        <a href="<?php echo $DEBIAN_PACKAGE_URL; ?>" class="free" rel="nofollow">kxstudio-repos.deb</a>.<br/>
    You can install it manually by running this:<br/>
</p>
<pre>
<span style="color: rgb(110, 110, 110);"># Install required dependencies if needed</span>
sudo apt-get install apt-transport-https gpgv

<span style="color: rgb(110, 110, 110);"># Download package file</span>
wget <?php echo $DEBIAN_PACKAGE_URL . "\n"; ?>

<span style="color: rgb(110, 110, 110);"># Install it</span>
sudo dpkg -i <?php echo $DEBIAN_PACKAGE . "\n"; ?>
</pre>

<p>
    These packages contain:
</p>
<ul>
    <li>Various sources files that activates the separate repositories</li>
    <li>GPG keys used for package and repository signing</li>
    <li>A post-install script that clears up legacy repository setup</li>
</ul>

<hr/>

<p>
    <b>NOTE:</b><br/>
    Please do not copy these instructions to your own website, wiki, etc.<br/>
    The packages file link might change at anytime, and so the instructions themselves.<br/>
    Always refer to this exact page for how-to enable the KXStudio repositories please.
</p>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
