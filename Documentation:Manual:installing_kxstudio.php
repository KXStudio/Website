<?php
$PAGE_TITLE    = "KXStudio";
$PAGE_TYPE     = "NONKXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Documentation", "/Documentation", "/Documentation:Manual:installing_kxstudio");
$PAGE_SOURCE_2 = ARRAY("Documentation", "Manual", "Installing KXStudio");
include_once("includes/header.php");
?>

<div class="level1">

<p>
There are a few important considerations you must be aware of before installing KXStudio. These include knowing what type of machine you are installing on, how its disks are to be arranged and whether or not you plan to boot any additional operating systems alongside KXStudio.
</p>

<p>
<strong>REMEMBER TO ALWAYS BACK UP</strong> all important files before you start modifying partitions or trying to install new operating systems!
</p>

</div>

<h2><span name="partitioning_options" id="partitioning_options">Partitioning options</span></h2>
<div class="level2">

<p>
Whether you are installing onto a UEFI or BIOS-based machine you will have the least trouble getting KXStudio to boot if you are able to let the KXstudio installer use your entire hard drive and automatically create the partitions for you. In any case, make sure that important files on the machine are backed up before installation in case you make a mistake during partitioning! It will also help to <a href="http://www.wikihow.com/Check-BIOS-Version" class="urlextern" title="http://www.wikihow.com/Check-BIOS-Version"  rel="nofollow">know if your machine is UEFI or not before you start installing.</a>
</p>

<p>
If you want to install KXStudio onto the same drive as an existing installation of Windows <a href="https://help.ubuntu.com/community/HowtoResizeWindowsPartitions" class="urlextern" title="https://help.ubuntu.com/community/HowtoResizeWindowsPartitions"  rel="nofollow">read this guide on how to resize your Windows drive</a>.
</p>

</div>

<h2><span name="uefi_windows_8_and_secureboot" id="uefi_windows_8_and_secureboot">UEFI, Windows 8 and SecureBoot</span></h2>
<div class="level2">

<p>
Many computers purchased since late 2011 use a technology called UEFI in place of the traditional BIOS to control and configure booting of operating systems. Due to UEFI being a new technology, GNU/Linux support is not yet as reliable as it is for older BIOS-based machines. In particular, Ubuntu and KXStudio cannot currently be dual-booted with Windows 8 with SecureBoot enabled without in-depth knowledge far beyond the scope of this guide. If you are hoping to dual boot Windows 8 with GNU/Linux you should look into disabling SecureBoot mode in your UEFI configuration.
</p>

</div>

<h2><span name="multi-booting_with_uefi" id="multi-booting_with_uefi">Multi-booting with UEFI</span></h2>
<div class="level2">

<p>
Those wishing to multi-boot Windows, OSX or other operating systems with KXStudio on a UEFI machine are recommended to obtain a copy of <a href="http://sourceforge.net/p/linux-secure/wiki/Home/" class="urlextern" title="http://sourceforge.net/p/linux-secure/wiki/Home/"  rel="nofollow">Linux Secure Remix</a> before you attempt installing KXStudio. If, after installing KXStudio on the same UEFI machine as Windows or OSX and rebooting, you don&#039;t see a boot menu offering a choice of operating systems you should boot Linux Secure Remix and run the Boot-Repair tool which fixes most GRUB/UEFI boot configuration issues and should get your machine multi-booting properly.
</p>

<p>
The Boot-Repair process is documented <a href="https://help.ubuntu.com/community/UEFI#Converting_Ubuntu_into_EFI_or_Legacy_mode" class="urlextern" title="https://help.ubuntu.com/community/UEFI#Converting_Ubuntu_into_EFI_or_Legacy_mode"  rel="nofollow">here.</a> If Boot-Repair doesn&#039;t cure your UEFI booting woes it would be worth trying <a href="http://refit.sourceforge.net/" class="urlextern" title="http://refit.sourceforge.net/"  rel="nofollow">rEFIt</a> or <a href="http://freedesktop.org/wiki/Software/gummiboot" class="urlextern" title="http://freedesktop.org/wiki/Software/gummiboot"  rel="nofollow">gummiboot.</a>/
</p>

</div>

<h2><span name="advanced_partitioning_options" id="advanced_partitioning_options">Advanced partitioning options</span></h2>
<div class="level2">

<p>
By default, the main GNU/Linux system (root) uses the same partition as your user files (home). For various reasons, such as for ease of later system updates, you may want separate partitions. While ideal, this step is optional and can be skipped if you are uncomfortable with the details or want to save time.
</p>

<p>
To customize your partitions, run “GParted” from the KXStudio live session before running the KXStudio installer.
</p>
<ol>
<li class="level1"><div class="li"> First, resize existing systems that you want to keep, if you have any</div>
</li>
<li class="level1"><div class="li"> Create a new “extended” partition in the empty space</div>
</li>
<li class="level1"><div class="li"> Within the extended partition, make a logical partition for your root (/) of at least 15GB and formatted as ext4. This will contain the <acronym title="Operating System">OS</acronym> and apps.</div>
</li>
<li class="level1"><div class="li"> Also within the extended partition, make a small partition for swap (virtual RAM) that is at least as large as your physical RAM size and put it at the end of the drive</div>
</li>
<li class="level1"><div class="li"> Again within the extended partition, create a logical ext4 partition for home (/home) for all your user files and preferences. Use all the remaining space or consider making a separate partition for media files</div>
</li>
</ol>
<ul>
<li class="level1"><div class="li"> If your drive is large enough, you may keep extra space free to later create partitions for additional GNU/Linux systems on the same machine</div>
</li>
<li class="level1"><div class="li"> To read more about partitioning, such as how to format to share files between Linux and Windows or Mac, see <a href="https://help.ubuntu.com/community/DiskSpace" class="urlextern" title="https://help.ubuntu.com/community/DiskSpace"  rel="nofollow">https://help.ubuntu.com/community/DiskSpace</a></div>
</li>
</ul>

</div>

<h2><span name="running_the_installer" id="running_the_installer">Running the installer</span></h2>
<div class="level2">

<p>
The KXStudio Live DVD is based upon Kubuntu 12.04.3 and uses the same installation tool so you can reference the <a href="https://help.ubuntu.com/community/GraphicalInstall" class="urlextern" title="https://help.ubuntu.com/community/GraphicalInstall"  rel="nofollow">official Ubuntu Install guide.</a> The only real difference is in step 7 as you will need to click the &#039;Install KXStudio&#039; icon on the desktop instead of clicking &#039;Install Ubuntu&#039; when you are ready to run the installer, that is if you chose to &#039;Try KXStudio before installing&#039; instead of choosing to run the installer directly at boot.
</p>

<p>
Contrary to what the Ubuntu installer seems to recommend with its network check, it is recommended that you disconnect from the internet before and whilst you install KXStudio so that updates are not fetched and the process is completed as quickly as possible. After a successful install and reboot you will be prompted to install any available updates.
</p>

<p>
If you did the advanced partitioning to separate your root and home, choose “manual” for partitioning in the installer. Mark to use your intended root partition as / and your intended home partition as /home, keeping the ext4 format for both.
</p>

</div>

<h2><span name="kxstudio_welcome_setup" id="kxstudio_welcome_setup">KXStudio Welcome Setup</span></h2>
<div class="level2">

<p>
After installing and booting KXStudio for the first time, you will see the KXStudio Welcome screen. It is recommended you choose &#039;Force reset of all settings&#039; if you have just completed a fresh install. &#039;Update basic settings&#039; may be useful to people running KXStudio Welcome on an existing installation or /home partition who don&#039;t want to replace all of their settings.
</p>

<p>
Using the KX Welcome &#039;Update Theme&#039; is known to cause text visibility issues for certain web sites and apps such a qtractor so use this option with caution. Update theme has a screenshot option that gives you a preview of what the desktop looks like with its modifications applied.
</p>

</div>

<h2><span name="multi-boot_issues_on_bios-based_machines" id="multi-boot_issues_on_bios-based_machines">Multi-boot issues on BIOS-based machines</span></h2>
<div class="level2">

<p>
Sometimes the installer fails to detect the operating systems and/or add the correct options to the GRUB boot menu ie no option to boot into Windows. To fix a boot menu on BIOS-based machines, it is usually sufficient to run:
</p>
<pre class="code">sudo update-grub
sudo grub-install /dev/sda</pre>

<p>
Type those commands into a terminal after booting into KXStudio and then reboot to check the new updated GRUB config. These commands make GRUB scan for other installed OSes, update its configuration and then write its updated configuration to the first HD which is /dev/sda.
</p>

<p>
<a href="http://www.supergrubdisk.org/super-grub2-disk/" class="urlextern" title="http://www.supergrubdisk.org/super-grub2-disk/"  rel="nofollow">Super Grub2 Disk</a> is very useful for fixing GRUB boot issues as it allows for booting Linux partitions on UEFI machines as well as legacy BIOS machines even when GRUB is missing or incorrectly configured. 
</p>

<p>
Another useful tool to ease GRUB2 configuration is <a href="https://launchpad.net/grub-customizer" class="urlextern" title="https://launchpad.net/grub-customizer"  rel="nofollow">GRUB Customizer.</a>
</p>

</div>

<h2><span name="important_notes_for_ssd_users" id="important_notes_for_ssd_users">Important notes for SSD users</span></h2>
<div class="level2">

<p>
If you have installed KXStudio onto an SSD, you may experience frequent stalls early in the boot process at the KXStudio boot splash screen. You can fix this by running:
</p>
<pre class="code">kdesudo kate /etc/default/grub</pre>

<p>
Remove the word &#039;splash&#039; from the GRUB_CMDLINE_LINUX_DEFAULT options, save the file then update and re-install GRUB using the two commands from the previous multi-boot section.
</p>

<p>
The KXStudio installer does not tweak the configuration of Solid State Drives for optimal performance. Follow <a href="http://www.howtogeek.com/62761/how-to-tweak-your-ssd-in-ubuntu-for-better-performance/" class="urlextern" title="http://www.howtogeek.com/62761/how-to-tweak-your-ssd-in-ubuntu-for-better-performance/"  rel="nofollow">this guide to optimize the performance of your SSD drives.</a>
</p>

</div>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
