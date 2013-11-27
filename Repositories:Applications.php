<?php
$PAGE_TITLE    = "KXStudio : Repositories : Applications";
$PAGE_TYPE     = "KXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Repositories", "/Repositories:Applications");
$PAGE_SOURCE_2 = ARRAY("Repositories", "Applications");
include_once("includes/header.php");
?>

<div class="box box-description">
    <p>
        This section lists the applications available in the repositories.<br/>
        Click on the yellow application name to install its respective package.<br/>
        (If the links don't work, make sure you have the 'apturl-kde' or 'apturl' packages installed)
    </p>
    <p>
        You might also want to check:
    </p>
    <ul>
        <li><a href="<?php echo $ROOT; ?>/Repositories:Plugins">Plugins in the repositories</a></li>
    </ul>
    <br/>
</div>

<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/screenshots/cadence1.png">
           <img src="screenshots/thumb/cadence.png" alt="cadence" class="img_thumb_150"/>
        </a></p>
    </td><td>
        <p>
            <b><a href="apt://cadence" style="color: rgb(230,230,100);">Cadence</a></b> (JACK Toolbox)<br/>
            Collection of tools useful for audio production.<br/>
            This is the main app. It performs system checks, manages JACK, calls other tools and make system tweaks.<br/>
            Homepage and Documentation: <a href="http://kxstudio.sf.net/cadence" class="external text" rel="nofollow" target="_blank">http://kxstudio.sf.net/cadence</a><br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/screenshots/catia.png">
           <img src="screenshots/thumb/catia.png" alt="catia" class="img_thumb_150"/>
        </a></p>
    </td><td>
        <p>
            <b><a href="apt://catia" style="color: rgb(230,230,100);">Catia</a></b> (Patchbay)<br/>
            JACK Patchbay, with some neat features like A2J bridge support and JACK Transport.<br/>
            It's supposed to be as simple as possible, so it can work nicely on non-Linux platforms.<br/>
            Homepage and Documentation: <a href="http://kxstudio.sf.net/catia" class="external text" rel="nofollow" target="_blank">http://kxstudio.sf.net/catia</a><br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/screenshots/claudia.png">
           <img src="screenshots/thumb/claudia.png" alt="claudia" class="img_thumb_150"/>
        </a></p>
    </td><td>
        <p>
            <b><a href="apt://claudia" style="color: rgb(230,230,100);">Claudia</a></b> (Session Manager)<br/>
            LADISH frontend; just like Catia, but focused at session management through LADISH.<br/>
            It has a bit more features than the official LADISH GUI, with a nice preview of the main canvas in the bottom-left.<br/>
            It also implements the 'Claudia-Launcher' add-application style for LADISH.<br/>
            Homepage and Documentation: <a href="http://kxstudio.sf.net/claudia" class="external text" rel="nofollow" target="_blank">http://kxstudio.sf.net/claudia</a><br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p>
           <img src="screenshots/thumb/nogui.png" alt="nogui" class="img_thumb_150"/>
        </p>
    </td><td>
        <p>
            <b><a href="apt://linuxsampler" style="color: rgb(230,230,100);">LinuxSampler</a></b> (Sampler)<br/>
            Free, streaming capable open source pure software audio sampler with professional grade features,<br/>
            comparable to both hardware and commercial Windows/Mac software samplers.<br/>
            Homepage and Documentation: <a href="http://www.linuxsampler.org/" class="external text" rel="nofollow" target="_blank">http://www.linuxsampler.org/</a><br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/screenshots/non-mixer.png">
           <img src="screenshots/thumb/non-mixer.png" alt="non-mixer" class="img_thumb_150"/>
        </a></p>
    </td><td>
        <p>
            <b><a href="apt://non-mixer" style="color: rgb(230,230,100);">Non-Mixer</a></b> (Mixer)<br/>
            Powerful, reliable and fast modular Digital Audio Mixer.<br/>
            It utilizes JACK for inter-application audio I/O and the NTK GUI toolkit for a fast and lightweight user interface.<br/>
            Non-Mixer can be used alone or in concert with Non-Timeline and Non-Sequencer to form a complete studio.<br/>
            Homepage: <a href="http://non.tuxfamily.org/wiki/Non%20Mixer" class="external text" rel="nofollow" target="_blank">http://non.tuxfamily.org/wiki/Non Mixer</a><br/>
            User Manual: <a href="http://non.tuxfamily.org/mixer/doc/MANUAL.html" class="external text" rel="nofollow" target="_blank">http://non.tuxfamily.org/mixer/doc/MANUAL.html</a><br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/screenshots/non-session-manager.png">
           <img src="screenshots/thumb/non-session-manager.png" alt="non-session-manager" class="img_thumb_150"/>
        </a></p>
    </td><td>
        <p>
            <b><a href="apt://non-session-manager" style="color: rgb(230,230,100);">Non-Session-Manager</a></b> (Session Manager)<br/>
            API and an implementation for session management in the context of Linux Audio.<br/>
            NSM clients use a well-specified OSC protocol to communicate with the session management daemon.<br/>
            Homepage: <a href="http://non.tuxfamily.org/wiki/Non%20Session%20Manager" class="external text" rel="nofollow" target="_blank">http://non.tuxfamily.org/wiki/Non Session Manager</a><br/>
            User Manual: <a href="http://non.tuxfamily.org/nsm/MANUAL.html" class="external text" rel="nofollow" target="_blank">http://non.tuxfamily.org/nsm/MANUAL.html</a><br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/screenshots/non-timeline.png">
           <img src="screenshots/thumb/non-timeline.png" alt="non-timeline" class="img_thumb_150"/>
        </a></p>
    </td><td>
        <p>
            <b><a href="apt://non-timeline" style="color: rgb(230,230,100);">Non-Timeline</a></b> (Audio Sequencer)<br/>
            Powerful, reliable and fast modular Digital Audio Timeline arranger.<br/>
            It utilizes JACK for inter-application audio I/O and the NTK GUI toolkit for a fast and lightweight user interface.<br/>
            Non-Timeline can be used alone or in concert with Non-Mixer and Non-Sequencer to form a complete studio.<br/>
            Homepage: <a href="http://non.tuxfamily.org/wiki/Non%20Timeline" class="external text" rel="nofollow" target="_blank">http://non.tuxfamily.org/wiki/Non Timeline</a><br/>
            User Manual: <a href="http://non-daw.tuxfamily.org/MANUAL.html" class="external text" rel="nofollow" target="_blank">http://non-daw.tuxfamily.org/MANUAL.html</a><br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/screenshots/qsampler.png">
           <img src="screenshots/thumb/qsampler.png" alt="qsampler" class="img_thumb_150"/>
        </a></p>
    </td><td>
        <p>
            <b><a href="apt://qsampler" style="color: rgb(230,230,100);">QSampler</a></b> (Sampler Frontend)<br/>
            LinuxSampler GUI front-end; it wraps as a client reference interface for the LinuxSampler Control Protocol.<br/>
            Homepage: <a href="http://qsampler.sourceforge.net/" class="external text" rel="nofollow" target="_blank">http://qsampler.sourceforge.net/</a><br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/screenshots/renoise.png">
           <img src="screenshots/thumb/renoise.png" alt="renoise" class="img_thumb_150"/>
        </a></p>
    </td><td>
        <p>
            <b><a href="apt://renoise" style="color: rgb(230,230,100);">Renoise</a></b> (Tracker, non-free)<br/>
            Complete, expandable Digital Audio Workstation (DAW) with a refreshing twist.<br/>
            It lets you record, compose, edit, process and render production-quality audio using a tracker-based approach.<br/>
            It features a wide range of built-in audio processors, alongside support for all commonly used virtual instrument and effect plug-in formats.<br/>
            Homepage: <a href="http://www.renoise.com" class="external text" rel="nofollow" target="_blank">http://www.renoise.com</a><br/>
            User Manual: <a href="http://tutorials.renoise.com/wiki" class="external text" rel="nofollow" target="_blank">http://tutorials.renoise.com/wiki</a><br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/screenshots/protrekkr.png">
           <img src="screenshots/thumb/protrekkr.png" alt="protrekkr" class="img_thumb_150"/>
        </a></p>
    </td><td>
        <p>
            <b><a href="apt://protrekkr" style="color: rgb(230,230,100);">ProTrekkr</a></b> (Tracker)<br/>
            Tracker program combining a software synthesizer together with a traditional samples tracker<br/>
            which can be used to create electronic music (like psytrance, trance goa, hard acid, IDM, chip, techno, etc)<br/>
            for small sized intros, demos or games.<br/>
            Homepage: <a href="http://code.google.com/p/protrekkr/" class="external text" rel="nofollow" target="_blank">http://code.google.com/p/protrekkr/</a><br/>
            Wiki: <a href="http://code.google.com/p/protrekkr/wiki/introduction?tm=6" class="external text" rel="nofollow" target="_blank">http://code.google.com/p/protrekkr/wiki/introduction?tm=6</a><br/>
        </p>
    </td></tr>
</table>

<table>
    <tr><td align="center">
        <p><a href="<?php echo $ROOT; ?>/screenshots/sunvox.png">
           <img src="screenshots/thumb/sunvox.png" alt="sunvox" class="img_thumb_150"/>
        </a></p>
    </td><td>
        <p>
            <b><a href="apt://sunvox" style="color: rgb(230,230,100);">SunVox</a></b> (Tracker, non-free)<br/>
            Small, fast and powerful modular synthesizer with pattern based sequencer (tracker).<br/>
            It is a tool for those people who like to compose music wherever they are, whenever they wish.<br/>
            Homepage: <a href="http://www.warmplace.ru/soft/sunvox/" class="external text" rel="nofollow" target="_blank">http://www.warmplace.ru/soft/sunvox/</a><br/>
            User Manual: <a href="http://www.warmplace.ru/wiki/sunvox:manual_en" class="external text" rel="nofollow" target="_blank">http://www.warmplace.ru/wiki/sunvox:manual_en</a><br/>
        </p>
    </td></tr>
</table>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
