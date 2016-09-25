<?php
$PAGE_TITLE    = "KXStudio";
$PAGE_TYPE     = "NONKXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Documentation", "/Documentation", "/Documentation:Manual:downloading_and_booting_kxstudio");
$PAGE_SOURCE_2 = ARRAY("Documentation", "Manual", "Downloading, booting and running KXStudio &#039;live&#039;");
include_once("includes/header.php");
?>

<div class="level1">

<p>
The easiest way to try KXStudio and discover if it supports your hardware is to boot it directly off a DVD or a USB drive. You can easily do this on any computer without any effect on the currently installed system. Doing this is referred to as running a &#039;live&#039; system.
</p>

</div>

<h2><span name="or_64_bit" id="or_64_bit">32 or 64 bit?</span></h2>
<div class="level2">

<p>
Download the KXStudio Live-DVD images from:
</p>

<p>
<a href="<?php echo $ROOT; ?>/Downloads#LiveDVD" class="urlextern" title="<?php echo $ROOT; ?>/Downloads#LiveDVD"  rel="nofollow"><?php echo $ROOT; ?>/Downloads#LiveDVD</a>
</p>

<p>
Note: the image files are .iso format (which is just the initials of the International Standards Organization which defined the format). These contain the complete KXStudio operating system as well as many applications.
</p>

<p>
You&#039;ll notice there are both 32 and 64-bit versions. Unless you are installing KXStudio to multiple, different machines you will only need one image file. If your machine allows for it, the 64-bit version is recommended as it usually works faster. Note that you can still run 32-bit software under a 64-bit installation but not the other way around.
</p>

<p>
With the exception of maybe a few (mainly Atom CPU-based) netbooks and tablets; most laptops, notebooks and desktops since the middle of the last decade will have a 64-bit capable CPU. One sure sign is if your machine is running a 64-bit version of Windows then you know you can run 64-bit KXStudio. If you&#039;re unsure, the easiest way to find out is just to try booting the 64-bit version. However, 64-bit machines can still use the 32-bit installation, so the 32-bit option is functional for all systems.
</p>

</div>

<h2><span name="dvd_or_usb_boot" id="dvd_or_usb_boot">DVD or USB boot?</span></h2>
<div class="level2">

<p>
If your machine has a DVD drive and you have a blank DVD to spare then the easiest way to boot KXStudio is to burn the .iso to a DVD. <a href="https://help.ubuntu.com/community/BurningIsoHowto" class="urlextern" title="https://help.ubuntu.com/community/BurningIsoHowto"  rel="nofollow">Full instructions</a> are available for burning an iso file to a DVD under Windows, Mac, and GNU/Linux.
</p>

<p>
The other option is to boot from a USB drive. USB drives are faster than DVDs and can be set to save updates and work and function as a working system; but you won&#039;t experience the full speed and capacity of KXStudio until you install it to a hard drive.
</p>

<p>
If using USB, you will need a FAT32 formatted USB drive with at least 2 <acronym title="Gigabyte">GB</acronym> free space. You can then use the freely available <a href="http://linuxmusicians.com/viewtopic.php?f=19&amp;t=11479" class="urlextern" title="http://linuxmusicians.com/viewtopic.php?f=19&amp;t=11479"  rel="nofollow">Easy2Boot</a>,<a href="http://unetbootin.sourceforge.net/" class="urlextern" title="http://unetbootin.sourceforge.net/"  rel="nofollow">unetbootin</a> or the Ubuntu Startup Disk Creator to transfer the iso file and make it boot from your USB drive. Easy2Boot requires a little more effort to set up than unetbootin or USDC but it allows you to boot multiple ISOs from a single USB drive, which is immensely useful.
</p>

<p>
Using Unetbootin is as simple as selecting the &#039;Diskimage&#039; option, browsing to and selecting your downloaded KXStudio iso file, selecting the correct USB drive from the &#039;Drive&#039; drop-down menu and then clicking OK. After a few minutes wait you will be told when your USB drive is safe to be removed and ready to be booted.
</p>

</div>

<h2><span name="booting_kxstudio" id="booting_kxstudio">Booting KXStudio</span></h2>
<div class="level2">

<p>
Reboot your machine with the KXStudio DVD in the drive or with the Easy2Boot/unetbootin/USDC-modified USB drive attached. In rare cases, your computer will automatically boot KXStudio. Typically, however, you will need to find out how to enter the boot menu on your machine or enter the BIOS or UEFI menu to change the boot order so that the DVD and/or USB drive takes higher boot priority than the hard drive. Commonly, pressing F11 or F12 right at start up will bring up the boot options; pressing F2 will bring up the full BIOS menu. In other cases, DELETE or ESCAPE are used. If none of these work, refer to the manual for your computer or search online for machine-specific instructions.
</p>

<p>
If you boot the DVD, you will first be prompted to choose the language to use. When this occurs, you can either do nothing and wait 30 seconds before the default of English is chosen and booting continues or you can use the arrow keys and ENTER to choose an alternate language. Booting off USB does not bring up the language selection menu directly; instead you may change language settings under &#039;System Settings&#039;.
</p>

</div>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
