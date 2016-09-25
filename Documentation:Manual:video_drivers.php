<?php
$PAGE_TITLE    = "KXStudio";
$PAGE_TYPE     = "NONKXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Documentation", "/Documentation", "/Documentation:Manual:video_drivers");
$PAGE_SOURCE_2 = ARRAY("Documentation", "Manual", "Installing non-free video drivers");
include_once("includes/header.php");
?>

<div class="level1">

<p>
The majority of modern day PC hardware uses display technology from either Nvidia, ATI/AMD, or Intel.
</p>

<p>
Intel drivers are open source but the official Nvidia and ATI/AMD drivers are proprietary. Fresh KXStudio installations include official drivers for Intel video but only unofficial drivers for Nvidia and ATI/AMD. The official Nvidia or ATI/AMD drivers are easily added if required, and they often provide superior performance (especially for OpenGL 3D and gaming), extra or more complete features, and better power management.
</p>

</div>

<h2><span name="what_type_of_video_hardware_do_i_have" id="what_type_of_video_hardware_do_i_have">What type of video hardware do I have?</span></h2>
<div class="level2">

<p>
If you&#039;re unsure what vendor or model video hardware you have installed in your machine, open a terminal (such as Konsole) and type:
</p>
<pre class="code">lspci</pre>

<p>
lspci will &#039;List PCI&#039; hardware installed on your machine, including your video device - the make and model of which is listed as being a &#039;VGA compatible controller&#039;. If it is a Nvidia or ATI/AMD device then you may want to switch to the non-free driver, if its available for your hardware, to take advantage of the extra features and better performance.
</p>

</div>

<h2><span name="using_the_additional_drivers_tool" id="using_the_additional_drivers_tool">Using the &#039;Additional Drivers&#039; tool</span></h2>
<div class="level2">

<p>
The &#039;Additional Drivers&#039; tool can be used to simplify the process of downloading and installing or removing non-free video drivers. It requires that you are connected to the internet for it to fetch the requested drivers. From the KX Studio desktop menu you can find it under the Applications → System sub-menu or you may find it easier to search for it.
</p>

<p>
When you run the Additional Drivers tool it will check the type of video hardware you have before presenting a new window in which you will see a list of compatible drivers, if any are available. You may be presented with more than one suitable driver but it&#039;s safe to use the recommended version if you&#039;re unsure which version of the driver is best for you. Select a driver, then click &#039;Activate&#039; which will then download and install the new driver. The new driver will not take effect until you have rebooted.
</p>

</div>

<h2><span name="configure_default_laptop_screen_brightness" id="configure_default_laptop_screen_brightness">Configure default laptop screen brightness</span></h2>
<div class="level2">

<p>
Lower laptop screen brightness settings conserve energy and increase battery life but sometimes visibility can suffer. A fresh install of KXStudio/Ubuntu defaults to the lowest brightness settings, for my laptop display at least, and I find it uncomfortable on anything other than its highest brightness setting so I set that to be the default at boot by running the command:
</p>
<pre class="code">kdesudo kate /etc/rc.local</pre>

<p>
and adding the line
</p>
<pre class="code">echo 7 &gt; /sys/class/backlight/acpi_video0/brightness</pre>

<p>
somewhere before the line that says &#039;exit 0&#039;. This command sets the screen brightness to the max value of 7, the lowest brightness setting being 0. The file /sys/class/backlight/acpi_video0/max_brightness tells you what the max setting is.
</p>

<p>
It&#039;s important to note that the path to the brightness setting as well as the values used may differ depending on your video hardware. laptop model and display config so you will have to check for the presence of these files and discover their correct locations before modifying rc.local.
</p>

</div>

<h2><span name="nvidia_video_fixes_and_tweaks" id="nvidia_video_fixes_and_tweaks">Nvidia video fixes and tweaks</span></h2>
<div class="level2">

<p>
To enable the screen brightness control keys and disable the NVIDIA boot logo on my NVIDIA-using laptop using the non-free nvidia driver I had to create a file located at /usr/share/X11/xorg.conf.d/10-nvidia-brightness.conf so run a command like:
</p>
<pre class="code">kdesudo kate /usr/share/X11/xorg.conf.d/10-nvidia-brightness.conf</pre>

<p>
containing (copy/paste this into that .conf file)
</p>
<pre class="code">Section &quot;Device&quot;
  Identifier     &quot;Device0&quot;
  Driver         &quot;nvidia&quot;
  VendorName     &quot;NVIDIA Corporation&quot;
  BoardName      &quot;GeForce 8600M&quot;
  Option         &quot;RegistryDwords&quot; &quot;EnableBrightnessControl=1&quot;
  Option &quot;NoLogo&quot; &quot;true&quot;
EndSection</pre>

<p>
Then, after rebooting, I could hold the Fn key and use the up/down arrow keys to adjust my laptop screen brightness. I don&#039;t think the VendorName and BoardName matter too much here and this change should work for anyone using the non-free Nvidia driver on a laptop.
</p>

</div>

<h2><span name="additional_amd_issues" id="additional_amd_issues">Additional AMD issues</span></h2>
<div class="level2">

<p>
For thorough information about the proprietary AMD drivers, including how to install more up-to-date drivers or how to remove the proprietary drivers and return to the <acronym title="Free/Libre and Open Source Software">FLOSS</acronym> ones, see the <a href="http://wiki.cchtml.com/" class="urlextern" title="http://wiki.cchtml.com/"  rel="nofollow">AMD Linux driver community wiki.</a>
</p>

</div>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
