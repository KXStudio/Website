<?php
$PAGE_TITLE    = "KXStudio";
$PAGE_TYPE     = "NONKXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Documentation", "/Documentation", "/Documentation:Manual:package_management");
$PAGE_SOURCE_2 = ARRAY("Documentation", "Manual", "Package Management");
include_once("includes/header.php");
?>

<div class="level1">

<p>
In GNU/Linux, a “package” is a compressed file that usually contains a program or program data. The process of installing and removing software from packages is called package management.
</p>

<p>
KXStudio is based upon Ubuntu which is itself based on Debian GNU/Linux, so as a result KXStudio uses .deb packages along with the Ubuntu software repositories (repos). The KXStudio part is the pre-configured PPA&#039;s (Personal Package Archives) which supplement the Ubuntu repositories.
</p>

<p>
In KXStudio 12.04.3, the main package manager is called <strong>Muon</strong>. Muon is the easiest way to manage your software under KXStudio. KXStudio also includes the older Synaptic package manager and these instructions largely apply to that as well.
</p>

</div>

<h2><span name="system_upgrade" id="system_upgrade">System Upgrade</span></h2>
<div class="level2">

<p>
For increased system stability and security, it is recommended you keep all packages up-to-date. If your machine was not connected to the internet when you installed KXStudio, then the first thing you should do after installation is connect to the internet to perform a system upgrade. Note: you can always browse and remove packages from Muon but performing a system upgrade or installing new software from the repositories requires an internet connection.
</p>

<p>
Muon Update Manager is a simple program which automatically checks for and alerts you about updates. There will be an icon in the system tray to show you when updates are available.
</p>

<p>
If you want to manually check for updates, first open Muon Update Manager or instead the full Muon Package Manager, then click &#039;Check for updates&#039;. After it has finished checking for updates, it will tell you in the status bar at the bottom of its window how many upgradeable packages are available. If there are any updates, click &#039;Full Upgrade&#039; then &#039;Apply Changes&#039;. It will then ask you for your password before upgrading the system to the latest package versions.
</p>

<p>
Most programs will be ready as soon as updating has finished. In the case of some packages, such as the kernel, you will have to reboot before your updates can take effect.
</p>

</div>

<h2><span name="installing_packages" id="installing_packages">Installing packages</span></h2>
<div class="level2">

<p>
There are two main ways to install a package. If the program you want is available from the repositories it is recommended you install it from there. Not only is that easier than having to find a standalone package, you can trust it more and it will get automtically updated when you do a system update, after an update becomes available.
</p>

</div>

<h3><span name="installing_packages_via_muon" id="installing_packages_via_muon">Installing packages via Muon</span></h3>
<div class="level3">

<p>
Start Muon Package Manager, then type either the name of the program you want or search using a descriptive term.
</p>

<p>
When you have found the package you want, select it by clicking and then press the &#039;Mark for Installation&#039; button in the package details tab below or right-click the listing itself and choose &#039;Mark for installation&#039;.
</p>

<p>
If the chosen app requires additional packages be installed for it to function, then you will be asked to confirm the installation of the required additional packages. These extra packages are referred to as <em>dependencies</em>, and most reasonably complex programs have multiple dependencies. You can proceed to mark additional packages for installation and whenever you are ready install click &#039;Apply Changes&#039; in the toolbar at the top. Muon will then ask you for your password before it downloads and installs the requested packages.
</p>

<p>
If you install a graphical application you should be able to find and run it by typing the program name in the KDE menu search box.
</p>

</div>

<h3><span name="installing_from_a_deb_package_file" id="installing_from_a_deb_package_file">Installing from a .deb package file</span></h3>
<div class="level3">

<p>
There are many reasons why you should always try to install software from the repositories (or PPA&#039;s) rather than from .deb package files. Aside from saving time, using repositories ensures you are getting the correct packages for your distribution and then they will be automatically updated. In some cases, a .deb file will automatically install a repository to keep things updated, but not always. You will normally want to find repository versions or add PPA&#039;s to get software.
</p>

<p>
Confusingly, there are multiple version of Ubuntu, many packages are available in 32- or 64-bit flavours. When installing software that is only available in .deb packages (named from Ubuntu&#039;s parent distro called Debian), look for the option that best matches your installed system. KXStudio is based upon kubuntu 12.04(.3) which is codenamed Precise so it is compatible with packages made for that distribution. Make sure you get the 32- or 64-bit package as appropriate. The main Cadence window tells you if you are running a 32 bit (aka i386 or i686) or 64 bit (amd64) system.
</p>

<p>
Finding the correct package version is often the hardest part of installing from a .deb package. Installation is then straightforward enough. Firefox may be set to automatically open the installer when the file is downloaded or you can double-click the .deb package in the Firefox Downloads window to start installation. Otherwise, open Dolphin (the file manager), find the package you want to install and left click on it once. This opens the package with a program called gdebi-kde which will present you with an &#039;Install Package&#039; icon you must click to install the package. What usually happens is you will be prompted for your password, and then you may find you will need to click &#039;Install Package&#039; a second time before the package gets installed.
</p>

</div>

<h2><span name="removing_packages" id="removing_packages">Removing packages</span></h2>
<div class="level2">

<p>
In Muon, search for the package you wish to remove then select &#039;Removal&#039; or &#039;Purge&#039; from the “Mark for:” option within the package details tab or choose the corresponding option by right clicking on a package listing. If the program is already installed, the options will be either &#039;Mark for Removal&#039; which simply removes the package or &#039;Mark for Purge&#039; which also removes the programs settings. After having found and selected all the packages you wish to remove click &#039;Apply Changes&#039;. You will then be prompted for your password.
</p>

</div>

<h2><span name="removing_unneeded_dependencies" id="removing_unneeded_dependencies">Removing unneeded dependencies</span></h2>
<div class="level2">

<p>
Removing a package will not remove the dependencies which may have been installed with it. To remove such extra packages if nothing else installed requires them, within Muon Package Manager, go to the Edit menu and choose “Remove unnecessary packages.” Then, as with all other procedures, you will have to click “Apply Changes” and enter your password.
</p>

</div>

<h2><span name="adding_further_personal_package_archives_ppa_s" id="adding_further_personal_package_archives_ppa_s">Adding further Personal Package Archives (PPA&#039;s)</span></h2>
<div class="level2">

<p>
The KXStudio repositories are themselves PPA&#039;s. In some cases, you may want to add new PPA&#039;s to your system.
</p>

<p>
PPA&#039;s are especially useful if you want to help do beta testing or try pre-release versions of programs. In other cases, such as for KXStudio, PPA&#039;s supply stable releases that aren&#039;t maintained or up-to-date in the main system repositories. Installing from a PPA is easier and recommended in most cases over installing from .deb packages or compiling from source.
</p>

<p>
If a PPA is available, it will usually be listed on the projects website. For example, the latest stable release of LibreOffice isn&#039;t in the main repositories because it hasn&#039;t had completely thorough testing under this version of Ubuntu. LibreOffice offers a PPA for the stable version and another for beta testing. The address for the stable PPA is: ppa:libreoffice/ppa
</p>

<p>
To add the new PPA, open Muon and choose “Configure Software Sources” from the “Settings” menu then enter your password. In the window that appears, choose the tab “Other Software”. Click the “Add…” button and enter the PPA&#039;s address.
</p>

<p>
The maintainers of each PPA will keep your software up-to-date, so you only need to install it once. Then, after an update check in Muon, the packages will be listed for update or available for installation if no previous version was installed.
</p>

</div>

<h2><span name="repair_broken_packages" id="repair_broken_packages">Repair broken packages</span></h2>
<div class="level2">

<p>
If a package installation fails or you have package management issues such as being unable to install additional packages due to unresolved dependencies then try running one (or both) of the following commands from a terminal, such as Konsole
</p>
<pre class="code">sudo apt-get install -f
sudo dpkg --configure -a</pre>

</div>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
