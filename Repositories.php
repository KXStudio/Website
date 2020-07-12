<?php
$PAGE_TITLE    = "KXStudio : Repositories";
$PAGE_TYPE     = "KXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Repositories");
$PAGE_SOURCE_2 = ARRAY("Repositories");
include_once("includes/header.php");

$DEBIAN_PACKAGE     = "kxstudio-repos_10.0.3_all.deb";
$DEBIAN_PACKAGE_URL = "https://launchpad.net/~kxstudio-debian/+archive/kxstudio/+files/" . $DEBIAN_PACKAGE;
?>

<div class="box box-description">
    <p>
        The KXStudio repositories support all Debian versions since <b>10 (Buster)</b> and Ubuntu <b>18.04 (Bionic)</b> or above including Ubuntu 20.04.<br/>
        They should work on all Debian-based distributions and variants.<br/>
        A computer running intel-based 32bit or 64bit with SSE2 is required,
        or alternatively an ARM-based system (32bit with neon-vfpv4 or 64bit).
    </p>
    <p>
        Once you have the repos installed, you can either manually install individual packages from them or
            add the meta-packages to automatically install large sets of recommended packages.<br/>
        See the <a href="<?php echo $ROOT; ?>/Documentation:Repository:Meta-Packages">Meta-Packages</a> page for more details.<br/>
        In either case, we always recommend to install the <b>kxstudio-default-settings</b> package after enabling the repositories.
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

<span style="color: rgb(110, 110, 110);"># Remove legacy repos</span>
sudo dpkg --purge kxstudio-repos-gcc5

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
