<?php
$PAGE_TITLE    = "KXStudio : Repositories";
$PAGE_TYPE     = "KXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Repositories");
$PAGE_SOURCE_2 = ARRAY("Repositories");
include_once("includes/header.php");
?>

<div class="box box-description">
    <p>
        The KXStudio repositories support all Debian versions since <b>Jessie</b> and Ubuntu <b>14.04</b> or above.<br/>
        They should work on all Debian-based distributions and variants, but the way to enable them will differ.<br/>
        After the repositories are enabled and the system updated, we recommend you to install the "kxstudio-default-settings" package.<br/>
    </p>
    <p>
        You might also want to check:
    </p>
    <ul>
        <li><a href="<?php echo $ROOT; ?>/Repositories:Applications">Applications in the repositories</a></li>
        <li><a href="<?php echo $ROOT; ?>/Repositories:Plugins">Plugins in the repositories</a></li>
    </ul>
    <p>
        Below is information on how to enable the repositories.
    </p>
</div>

<hr/>

<h3><span class="mw-headline">
<img src="images/ico_debian.png" class="img_text_align" alt=""/> Debian / <img src="images/ico_ubuntu.png" class="img_text_align" alt=""/> Ubuntu
</span></h3>

<p>
    All Debian and Ubuntu users can enable our repositories by installing this deb file:
        <a href="https://launchpad.net/~kxstudio-debian/+archive/kxstudio/+files/kxstudio-repos_9.0.0%7Ekxstudio1_all.deb" class="free" rel="nofollow">kxstudio-repos.deb</a>.<br/>
    You can install it manually by running this:<br/>
</p>
<pre>
<span style="color: rgb(110, 110, 110);"># Download package file</span>
wget https://launchpad.net/~kxstudio-debian/+archive/kxstudio/+files/kxstudio-repos_9.0.0~kxstudio1_all.deb

<span style="color: rgb(110, 110, 110);"># Install it</span>
sudo dpkg -i kxstudio-repos_9.0.0~kxstudio1_all.deb
</pre>

<p><br/>
    This package contains:
</p>
<ul>
    <li>Various sources files that activates the separate repositories</li>
    <li>GPG keys used for package and repository signing</li>
    <li>A post-install script that enables an extra, Ubuntu-specific repository</li>
</ul>

<hr/>

<p>
    <b>NOTE:</b><br/>
    Please do not copy these instructions to your own website, wiki, etc.<br/>
    The package file link might change at anytime, and so the instructions themselves.<br/>
    Always refer to this exact page for how-to enable the KXStudio repositories please.
</p>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
