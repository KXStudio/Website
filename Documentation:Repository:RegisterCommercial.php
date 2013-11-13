<?php
$PAGE_TITLE    = "KXStudio : Documentation";
$PAGE_TYPE     = "NONKXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Documentation", "/Documentation", "/Documentation:Repository:RegisterCommercial");
$PAGE_SOURCE_2 = ARRAY("Documentation", "Repository", "RegisterCommercial");
include_once("includes/header.php");
?>

<p>
    This section describes how to activate the non-free software available in KXStudio.
    <br/><br/>
</p>

<h5><span class="mw-headline" id="LoomerPlugins">Loomer plugins</span></h5>
<p>
    All Loomer plugins work the same way.<br />
    Just open the respective plugin GUI you have the license for, click the "Options" button at the top and select "Enter Licence Key...".<br />
    Fill in your license details and you're done&#160;;)
    <br/><br/>
</p>

<h5><span class="mw-headline" id="Renoise">Renoise</span></h5>
<p>
    Renoise registration is a bit unusual, but fairly easy.<br />
    Once you have renoise installed in KXStudio (via repositories), go to your renoise backstage account and download the latest stable linux tarball that matches your system architecture (32bit or 64bit).<br />
    Unpack it, and copy the 'renoise' binary inside into '/usr/bin/'. The next time you start renoise, it will be registered to your account.<br />
    <b>Warning:</b> Do not run the install script in the tarball! If you really want to do so, please remove the 'renoise' package from your system first.
</p>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
