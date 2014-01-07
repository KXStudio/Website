<?php
$PAGE_TITLE    = "KXStudio : Repositories";
$PAGE_TYPE     = "KXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Repositories");
$PAGE_SOURCE_2 = ARRAY("Repositories");
include_once("includes/header.php");
?>

<div class="box box-description">
    <p>
        The KXStudio repositories support all Debian versions since Wheezy and Ubuntu 12.04 or above.<br/>
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

<h3><span class="mw-headline" id="Debian"><img src="images/ico_debian.png" class="img_text_align" alt=""/> Debian</h3>
<p>
    Debian users can enable our repositories by installing this deb file:
        <a href="https://launchpad.net/~kxstudio-debian/+archive/kxstudio/+files/kxstudio-repos_7.2.0%7Ekxstudio1_all.deb" class="external free" rel="nofollow" target="_blank">kxstudio-repos.deb</a>.<br/>
    If you're running Debian Wheezy, consider installing the backports repo package as well:
        <a href="https://launchpad.net/~kxstudio-debian/+archive/kxstudio/+files/kxstudio-repos-backports_7.2.0%7Ekxstudio1_all.deb" class="external free" rel="nofollow" target="_blank">kxstudio-repos-backports.deb</a>.
        (*<i>only</i>* for wheezy)<br/>
</p>
<p style="color:#fa3a3a;">
    NOTE: The Debian repositories are still a work-in-progress. Some KXStudio meta-packages are not installable right now.
</p>

<hr/>

<h3><span class="mw-headline" id="Ubuntu"><img src="images/ico_ubuntu.png" class="img_text_align" alt=""/> Ubuntu</span></h3>
<p>
    Ubuntu users can also install deb files for the repositories, but different files are needed for each version.<br/>
    As such, we recommend you to enable the repositories using the command-line instead. Just follow these steps:<br/>
</p>
<pre class="code">
<span style="color: rgb(110, 110, 110);"># Install needed tools</span>
sudo apt-get install software-properties-common wget<br/>
<span style="color: rgb(110, 110, 110);"># Enable KXStudio repo (press 'Enter' once asked)</span>
sudo add-apt-repository ppa:kxstudio-debian/kxstudio<br/>
<span style="color: rgb(110, 110, 110);"># Update software sources</span>
sudo apt-get update<br/>
<span style="color: rgb(110, 110, 110);"># Install kxstudio-repos</span>
sudo apt-get install kxstudio-repos<br/>
<span style="color: rgb(110, 110, 110);"># Update software sources again</span>
sudo apt-get update
</pre>

<br/>

<p>
  If you're running <b>Linux Mint Olivia</b> (based on Ubuntu 12.04), we need to correct for a bug in Mint's code. Run this <b>after</b> enabling the repos:
</p>
<pre class="code">
<span style="color: rgb(110, 110, 110);"># Fix add-apt-repository olivia vs precise mixup</span>
sudo sed -i "s/olivia/precise/" /etc/apt/sources.list.d/kxstudio*.list<br/>
<span style="color: rgb(110, 110, 110);"># Update software sources yet again</span>
sudo apt-get update
</pre>

<hr/>

<h3><span class="mw-headline" id="Ubuntu"><img src="images/ico_linux.png" class="img_text_align" alt=""/> Others</span></h3>
<p>
    Users on other linux distributions should enable the repositories that best match their distro.<br/>
    Remember that KXStudio offers repositories only for Debian and its based systems.<br/>
</p>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
