<?php
$PAGE_TITLE    = "KXStudio : Applications";
$PAGE_TYPE     = "KXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Applications");
$PAGE_SOURCE_2 = ARRAY("Applications");
include_once("includes/header.php");
?>

<!--
  TODO: carla-control icon
  -->

<div class="box box-description">
    <p>
        This section lists the applications made by the KXStudio Team.<br/>
        All applications are open-source and completely free.
    </p>
    <p>
        You might also want to check:
    </p>
    <ul>
        <li><a href="<?php echo $ROOT; ?>/Repositories:Applications">Applications in the repositories</a></li>
    </ul>
    <br/>
</div>

<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/Applications:Cadence#Interface">
           <img src="screenshots/thumb/cadence.png" alt="cadence" class="img_thumb_150"/>
        </a></p>
        <p>
            <img src="images/ico_arch.png" alt=""/>
            <img src="images/ico_debian.png" alt=""/>
            <img src="images/ico_ubuntu.png" alt=""/>
            <img src="images/ico_linux.png" alt=""/>
        </p>
    </td><td>
        <p>
            <img src="images/ico_cadence.png" class="img_text_align" alt=""/>
            <b><a href="<?php echo $ROOT; ?>/Applications:Cadence">Cadence</a></b><br/>
            Cadence is a set of tools useful for audio production.<br/>
            This is the main app. It performs system checks, manages JACK, calls other tools and make system tweaks.<br/>
            <i>(Most of the tools below are part of the Cadence suite)</i>.
            <br/><br/><br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/Applications:Cadence-JackMeter#Interface">
           <img src="screenshots/thumb/cadence-jackmeter.png" alt="cadence-jackmeter" class="img_thumb_150"/></p>
        </a><p>
            <img src="images/ico_arch.png" alt=""/>
            <img src="images/ico_debian.png" alt=""/>
            <img src="images/ico_ubuntu.png" alt=""/>
            <img src="images/ico_linux.png" alt=""/>
       <!-- <img src="images/ico_mac.png" alt=""/> -->
            <img src="images/ico_windows.png" alt=""/>
        </p>
    </td><td>
        <p>
            <img src="images/ico_cadence.png" class="img_text_align" alt=""/>
            <b><a href="<?php echo $ROOT; ?>/Applications:Cadence-JackMeter">Cadence-JackMeter</a></b><br/>
            Cadence-JackMeter is a digital peak meter for JACK.<br/>
            It automatically connects itself to all application JACK output ports that are also connected to the system output.<br/>
            <br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/Applications:Cadence-JackSettings#Interface">
           <img src="screenshots/thumb/cadence-jacksettings.png" alt="cadence-jacksettings" class="img_thumb_150"/></p>
        </a><p>
            <img src="images/ico_arch.png" alt=""/>
            <img src="images/ico_debian.png" alt=""/>
            <img src="images/ico_ubuntu.png" alt=""/>
            <img src="images/ico_linux.png" alt=""/>
        </p>
    </td><td>
        <p>
            <img src="images/ico_cadence.png" class="img_text_align" alt=""/>
            <b><a href="<?php echo $ROOT; ?>/Applications:Cadence-JackSettings">Cadence-JackSettings</a></b><br/>
            Cadence-JackSettings is a simple and easy-to-use configure dialog for jackdbus.<br/>
            It can configure JACK's driver and engine parameters, and it also supports LADISH studios.<br/>
            <br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/Applications:Cadence-Logs#Interface">
           <img src="screenshots/thumb/cadence-logs.png" alt="cadence-logs" class="img_thumb_150"/></p>
        </a><p>
            <img src="images/ico_arch.png" alt=""/>
            <img src="images/ico_debian.png" alt=""/>
            <img src="images/ico_ubuntu.png" alt=""/>
            <img src="images/ico_linux.png" alt=""/>
        </p>
    </td><td>
        <p>
            <img src="images/ico_cadence.png" class="img_text_align" alt=""/>
            <b><a href="<?php echo $ROOT; ?>/Applications:Cadence-Logs">Cadence-Logs</a></b><br/>
            Cadence-Logs is a small tool that shows JACK, A2J, LASH and LADISH logs in a multi-tab window.<br/>
            This is very similar to the the 'ladilog' app but here the logs are viewed in a text box, making it easy to browse and extract status messages using copy and paste commands.<br/>
            <br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/Applications:Cadence-Render#Interface">
           <img src="screenshots/thumb/cadence-render.png" alt="cadence-render" class="img_thumb_150"/></p>
        </a><p>
            <img src="images/ico_arch.png" alt=""/>
            <img src="images/ico_debian.png" alt=""/>
            <img src="images/ico_ubuntu.png" alt=""/>
            <img src="images/ico_linux.png" alt=""/>
        </p>
    </td><td>
        <p>
            <img src="images/ico_cadence.png" class="img_text_align" alt=""/>
            <b><a href="<?php echo $ROOT; ?>/Applications:Cadence-Render">Cadence-Render</a></b><br/>
            Cadence-Render is a tool to record (or 'render') a JACK project using jack-capture, controlled by JACK Transport.<br/>
            It supports a vast number of file types and can render in both realtime and freewheel modes.<br/>
            <br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/Applications:Cadence-XYController#Interface">
           <img src="screenshots/thumb/cadence-xycontroller.png" alt="cadence-xycontroller" class="img_thumb_150"/></p>
        </a><p>
            <img src="images/ico_arch.png" alt=""/>
            <img src="images/ico_debian.png" alt=""/>
            <img src="images/ico_ubuntu.png" alt=""/>
            <img src="images/ico_linux.png" alt=""/>
       <!-- <img src="images/ico_mac.png" alt=""/> -->
            <img src="images/ico_windows.png" alt=""/>
        </p>
    </td><td>
        <p>
            <img src="images/ico_cadence.png" class="img_text_align" alt=""/>
            <b><a href="<?php echo $ROOT; ?>/Applications:Cadence-XYController">Cadence-XY Controller</a></b><br/>
            Cadence-XY Controller is a simple XY widget that sends and receives data from Jack MIDI.<br/>
            It can send data through specific channels and has a MIDI Keyboard too.<br/>
            <br/><br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/Applications:Catarina#Interface">
           <img src="screenshots/thumb/catarina.png" alt="catarina" class="img_thumb_150"/></p>
        </a><p>
            <img src="images/ico_arch.png" alt=""/>
            <img src="images/ico_debian.png" alt=""/>
            <img src="images/ico_ubuntu.png" alt=""/>
            <img src="images/ico_linux.png" alt=""/>
       <!-- <img src="images/ico_mac.png" alt=""/> -->
            <img src="images/ico_windows.png" alt=""/>
        </p>
    </td><td>
        <p>
            <img src="images/ico_catarina.png" class="img_text_align" alt=""/>
            <b><a href="<?php echo $ROOT; ?>/Applications:Catarina">Catarina</a></b><br/>
            Catarina is a Patchbay test app, created while the PatchCanvas module was being developed.<br/>
            It allows the user to experiment with the patchbay, without using ALSA, JACK or LADISH.<br/>
            You can save &amp; load patchbay configurations too.<br/>
            <br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/Applications:Catia#Interface">
           <img src="screenshots/thumb/catia.png" alt="catia" class="img_thumb_150"/></p>
        </a><p>
            <img src="images/ico_arch.png" alt=""/>
            <img src="images/ico_debian.png" alt=""/>
            <img src="images/ico_ubuntu.png" alt=""/>
            <img src="images/ico_linux.png" alt=""/>
       <!-- <img src="images/ico_mac.png" alt=""/> -->
            <img src="images/ico_windows.png" alt=""/>
        </p>
    </td><td>
        <p>
            <img src="images/ico_catia.png" class="img_text_align" alt=""/>
            <b><a href="<?php echo $ROOT; ?>/Applications:Catia">Catia</a></b><br/>
            Catia is a JACK Patchbay, with some neat features like A2J bridge support and JACK Transport.<br/>
            It's supposed to be as simple as possible (there's
                <a href="<?php echo $ROOT; ?>/Applications:Claudia">Claudia</a> for advanced things),
                so it can work nicely on non-Linux platforms.<br/>
            <br/>
            <br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/Applications:Claudia#Interface">
           <img src="screenshots/thumb/claudia.png" alt="claudia" class="img_thumb_150"/></p>
        </a><p>
            <img src="images/ico_arch.png" alt=""/>
            <img src="images/ico_debian.png" alt=""/>
            <img src="images/ico_ubuntu.png" alt=""/>
            <img src="images/ico_linux.png" alt=""/>
        </p>
    </td><td>
        <p>
            <img src="images/ico_claudia.png" class="img_text_align" alt=""/>
            <b><a href="<?php echo $ROOT; ?>/Applications:Claudia">Claudia</a></b><br/>
            Claudia is a LADISH frontend; it's just like Catia, but focused at session management through LADISH.<br/>
            It has a bit more features than the official LADISH GUI, with a nice preview of the main canvas in the bottom-left.<br/>
            It also implements the 'Claudia-Launcher' add-application style for LADISH.<br/>
            <br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/Applications:Claudia-Launcher#Interface">
           <img src="screenshots/thumb/claudia-launcher.png" alt="claudia-launcher" class="img_thumb_150"/></p>
        </a><p>
            <img src="images/ico_arch.png" alt=""/>
            <img src="images/ico_debian.png" alt=""/>
            <img src="images/ico_ubuntu.png" alt=""/>
        </p>
    </td><td>
        <p>
            <img src="images/ico_claudia-launcher.png" class="img_text_align" alt=""/>
            <b><a href="<?php echo $ROOT; ?>/Applications:Claudia-Launcher">Claudia-Launcher</a></b><br/>
            Claudia-Launcher is a multimedia application launcher with LADISH support.<br/>
            It searches for installed packages (not binaries), and displays the respective content as a launcher.<br/>
            The content is got through an hardcoded database, created and/or modified to suit the target distribution.<br/>
            <br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/Applications:Carla#Interface">
           <img src="screenshots/thumb/carla.png" alt="carla" class="img_thumb_150"/></p>
        </a><p>
            <img src="images/ico_arch.png" alt=""/>
            <img src="images/ico_debian.png" alt=""/>
            <img src="images/ico_ubuntu.png" alt=""/>
            <img src="images/ico_linux.png" alt=""/>
            <img src="images/ico_mac.png" alt=""/>
            <img src="images/ico_windows.png" alt=""/>
        </p>
    </td><td>
        <p>
            <img src="images/ico_carla.png" class="img_text_align" alt=""/>
            <b><a href="<?php echo $ROOT; ?>/Applications:Carla">Carla</a></b><br/>
            Carla is an audio plugin host, with support for many audio drivers and plugin formats.<br/>
            It has some nice features like automation of parameters via MIDI CC and full OSC control.<br/>
            Currently supports LADSPA, DSSI, LV2, VST2/3 and AU plugin formats, plus GIG, SF2 and SFZ sounds banks.<br/>
            <br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/Applications:Carla-Control#Interface">
           <img src="screenshots/thumb/carla.png" alt="carla-control" class="img_thumb_150"/></p>
        </a><p>
            <img src="images/ico_arch.png" alt=""/>
            <img src="images/ico_debian.png" alt=""/>
            <img src="images/ico_ubuntu.png" alt=""/>
            <img src="images/ico_linux.png" alt=""/>
            <img src="images/ico_mac.png" alt=""/>
        </p>
    </td><td>
        <p>
            <img src="images/ico_carla.png" class="img_text_align" alt=""/>
            <b><a href="<?php echo $ROOT; ?>/Applications:Carla-Control">Carla-Control</a></b><br/>
            TODO.<br/>
            <br/>
        </p>
    </td></tr>
</table>

<hr/>

<h5><span class="mw-headline">What do those little icons mean?</span></h5>

<table>
    <tr>
        <td align="right"><img src="images/ico_arch.png" alt=""/> - </td>
        <td>Supports ArchLinux (Available in <a href="https://aur.archlinux.org" class="external text" rel="nofollow" target="_blank">AUR</a>)</td>
    </tr><tr>
        <td align="right"><img src="images/ico_debian.png" alt=""/> - </td>
        <td>Supports Debian (Available at the <a href="<?php echo $ROOT; ?>/Repositories#Debian">KXStudio Repositories</a>)</td>
    </tr><tr>
        <td align="right"><img src="images/ico_ubuntu.png" alt=""/> - </td>
        <td>Supports Ubuntu (Available at the <a href="<?php echo $ROOT; ?>/Repositories#Ubuntu">KXStudio Repositories</a>)</td>
    </tr><tr>
        <td align="right"><img src="images/ico_linux.png" alt=""/> - </td>
        <td>Supports all GNU/Linux systems in general (Binaries and Source Code available in the <a href="<?php echo $ROOT; ?>/Downloads">Downloads</a> page)</td>
    </tr><tr>
        <td align="right"><img src="images/ico_mac.png" alt=""/> - </td>
        <td>Supports Mac OS (Package available in the <a href="<?php echo $ROOT; ?>/Downloads">Downloads</a> page)</td>
    </tr><tr>
        <td align="right"><img src="images/ico_windows.png" alt=""/> - </td>
        <td>Supports Windows (Binaries available in the <a href="<?php echo $ROOT; ?>/Downloads">Downloads</a> page)</td>
    </tr>
</table>

<hr/>

<p></p>

<?php
include_once("includes/footer.php");
?>
