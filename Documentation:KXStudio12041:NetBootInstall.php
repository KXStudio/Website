<?php
$PAGE_TITLE    = "KXStudio Documentation";
$PAGE_TYPE     = "NONKXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Documentation", "/Documentation", "/Documentation:KXStudio12041:NetBootInstall");
$PAGE_SOURCE_2 = ARRAY("Documentation", "KXStudio 12.04.1", "NetBootInstall");
include_once("includes/header.php");
?>

<p>
    This section describes how to install a minimal Ubuntu system using a Net-Boot ISO.<br/>
    After the base install is done, we'll proceed to upgrade Ubuntu to KXStudio.
</p>
<p>
    There are some requirements you need to check before trying this:<br/>
    1 - Your system is connected to the internet via cable;<br/>
    2 - You've downloaded and burned a KXStudio Net-Boot ISO into a CD;<br/>
</p>

<p><br/></p>

<h5><span class="mw-headline" id="Step1">Step 1 - Boot from the ISO</span></h5>
<p>
    Make sure your PC is booting from CD drives (the F8 or F9 key during bios splash usually can change the boot media).<br/>
    If you can't find the key for that, make sure the CD drive is 1st device the PC tries to boot from (there's an option for that in the BIOS).
</p>

<p><br/></p>

<h5><span class="mw-headline" id="Step2">Step 2 - Install the base system</span></h5>
<p>
    When you boot from the ISO, the first thing you'll see is a list of languages - pick yours.<br/>
    Tip: Use the 'F3' key now to change the default keyboard language too.
</p>
<p>
    Now just click 'Enter' to start the installation.
</p>
<p>
    You'll notice this installation method looks rather old, but it's this way because we didn't load any drivers or special stuff yet.<br />
    You can browse through the interface using the keyboard. The mouse does nothing at this point.
</p>
<p>
    This installation method is exactly the same in an Ubuntu or Debian net-boot ISO, and it's very similar to the "alternate" method.<br />
    Note that if you never used this kind of methods to install a Linux system before, you probably should not install KXStudio this way!<br />
    Please go with UbuntuStudio 12.04 as a base install, and upgrade to KXStudio afterwards.
</p>
<p>
    Once you've installed the base system, it will automatically reboot.
    You can remove the CD now.
</p>

<p><br/></p>
<h5><span class="mw-headline" id="Step3">Step 3 - Enable the repositories</span></h5>
<p>
    Login in the terminal with the user credentials you entered during the installation.<br />
    Note: You won't get any feedback while entering the password - this is normal (actually a security feature).
</p>
<p>
    When logged in, run these commands to enable the KXStudio repositories:<br/>
    <code>
        sudo apt-get update<br/>
        sudo apt-get install python-software-properties wget<br/>
        sudo add-apt-repository ppa:kxstudio-team/kxstudio<br/>
        sudo apt-get update<br/>
        sudo apt-get install kxstudio-repos<br />
        sudo apt-get update<br/>
    </code>
</p>

<p><br/></p>

<h5><span class="mw-headline" id="Step4">Step 4 - Install the KXStudio Desktop</span></h5>
<p>
    For this "final" step, you can follow the <a href="<?php echo $ROOT; ?>/Documentation:Ubuntu:Upgrade">Upgrade From Ubuntu</a> tutorial, since the steps are the same.<br />
    Just skip to the Step 2 - <a href="<?php echo $ROOT; ?>/Documentation:Ubuntu:Upgrade#Step2">direct link</a>
</p>
<p>
    Of course, you won't have any GUI at this point, so you need to use the command-line methods.
</p>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
