<?php
$PAGE_TITLE    = "KXStudio : Repositories : Applications";
$PAGE_TYPE     = "KXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Repositories", "/Repositories:Applications");
$PAGE_SOURCE_2 = ARRAY("Repositories", "Applications");
include_once("includes/header.php");

function endsWith($haystack, $needle) {
    return strrpos($haystack, $needle, 0) === (strlen($haystack) - strlen($needle));
}

function print_app($package, $screenshot, $name, $category, $details) {

    if (! endsWith($screenshot, '.jpg')) {
        $screenshot = $screenshot . '.png';
    }

    echo
    '<table><tr><td align="center"><p>
    <a href="' . $ROOT . '/screenshots/' . $screenshot . '">
    <img src="screenshots/thumb/' . $screenshot . '" alt="' . $screenshot . '" class="img_thumb_150"/>
    </a></p></td><td><p><b>
    <a href="apt://' . $package . '" style="color: rgb(230,230,100);">' . $name . '</a></b> (' . $category . ')<br/>';

    for ($i = 0, $count = count($details); $i < $count; $i++) {
        echo $details[$i] . '<br>';
    }

    echo '</p></td></tr></table>';

}

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

<!--
  TODO:
  guitarix
  non-sequencer
 -->

<?php
/*
print_app("pkg", "scr", "name", "cat", ARRAY(
'txt1',
'txt2'
));
*/

print_app("ams", "ams", "AMS", "Modular Plugin Host", ARRAY(
'AlsaModularSynth is a realtime modular synthesizer and effect processor.',
'Homepage: <a href="http://alsamodular.sourceforge.net/" class="external text" rel="nofollow" target="_blank">http://alsamodular.sourceforge.net/</a>'
));

print_app("ardour", "ardour3", "Ardour", "DAW", ARRAY(
'Ardour is a multichannel hard disk recorder (HDR) and digital audio workstation (DAW).',
'It can be used to control, record, edit and run complex audio setups.',
'Homepage: <a href="http://ardour.org/" class="external text" rel="nofollow" target="_blank">http://ardour.org/</a>',
'User Manual: <a href="http://manual.ardour.org/" class="external text" rel="nofollow" target="_blank">http://manual.ardour.org/</a>'
));

print_app("ariamaestosa", "ariamaestosa.jpg", "Aria Maestosa", "MIDI Sequencer", ARRAY(
'Aria Maestosa is an open-source midi sequencer/editor.',
'It lets you compose, edit and play midi files with a few clicks in a user-friendly interface offering score, keyboard, guitar, drum and controller views.',
'Homepage: <a href="http://ariamaestosa.sourceforge.net/" class="external text" rel="nofollow" target="_blank">http://ariamaestosa.sourceforge.net/</a>',
'User Manual: <a href="http://ariamaestosa.sourceforge.net/man.html" class="external text" rel="nofollow" target="_blank">http://ariamaestosa.sourceforge.net/man.html</a>'
));

print_app("cadence", "cadence", "Cadence", "JACK Toolbox", ARRAY(
'Collection of tools useful for audio production.',
'This is the main app. It performs system checks, manages JACK, calls other tools and make system tweaks.',
'Homepage and Documentation: <a href="' . $ROOT . '/cadence" class="external text" rel="nofollow" target="_blank">' . $ROOT . '/cadence</a>'
));

print_app("carla", "carla", "Carla", "Modular Plugin Host", ARRAY(
'Carla is an audio plugin host, with support for many audio drivers and plugin formats.',
'It has some nice features like automation of parameters via MIDI CC and full OSC control.',
'Currently supports LADSPA, DSSI, LV2, and VST plugin formats, and GIG, SF2 and SFZ sounds banks.',
'Homepage and Documentation: <a href="' . $ROOT . '/carla" class="external text" rel="nofollow" target="_blank">' . $ROOT . '/carla</a>'
));

print_app("catia", "catia", "Catia", "Patchbay", ARRAY(
'JACK Patchbay, with some neat features like A2J bridge support and JACK Transport.',
'It\'s supposed to be as simple as possible, so it can work nicely on non-Linux platforms.',
'Homepage and Documentation: ' . $ROOT . '/catia" class="external text" rel="nofollow" target="_blank">' . $ROOT . '/catia</a>'
));

print_app("claudia", "claudia", "Claudia", "Session Manager", ARRAY(
'LADISH frontend; just like Catia, but focused at session management through LADISH.',
'It has a bit more features than the official LADISH GUI, with a nice preview of the main canvas in the bottom-left.',
'It also implements the \'Claudia-Launcher\' add-application style for LADISH.',
'Homepage and Documentation: <a href="' . $ROOT . '/claudia" class="external text" rel="nofollow" target="_blank">' . $ROOT . '/claudia</a>'
));

print_app("ingen", "ingen", "Ingen", "Modular Plugin Host", ARRAY(
'Ingen is a modular audio processing system for Linux using the JACK audio server and LV2 plugins.',
'Any saved Ingen graph can be loaded as an LV2 plugin on any system where Ingen is installed.',
'This allows users to visually develop custom plugins for use in other applications without programming.',
'Homepage: <a href="http://drobilla.net/software/ingen/" class="external text" rel="nofollow" target="_blank">http://drobilla.net/software/ingen/</a>',
));

print_app("jack-keyboard", "jack-keyboard", "jack-keyboard", "MIDI Utility", ARRAY(
'jack-keyboard is a virtual MIDI keyboard - it allows you to send JACK MIDI events using your PC keyboard.',
'It uses the same layout as trackers (like Impulse Tracker) did, so you have two and half octaves under your fingers.',
'Homepage: <a href="http://jack-keyboard.sourceforge.net/" class="external text" rel="nofollow" target="_blank">http://jack-keyboard.sourceforge.net/</a>',
));

print_app("jack-midi-clock", "nogui", "jack-midi-clock", "MIDI Utility", ARRAY(
'This is a command-line application that sends MIDI beat clock pulses based on the current tempo given by the JACK transport.',
'Homepage: <a href="http://www.teuton.org/~gabriel/jack_midi_clock/" class="external text" rel="nofollow" target="_blank">http://www.teuton.org/~gabriel/jack_midi_clock/</a>',
));

print_app("jalv", "nogui", "jalv", "LV2 Plugin Host", ARRAY(
'Jalv is a simple but fully featured LV2 host for Jack.',
'It runs LV2 plugins and exposes their ports as Jack ports, essentially making any LV2 plugin function as a Jack application.',
'Homepage: <a href="http://drobilla.net/software/jalv/" class="external text" rel="nofollow" target="_blank">http://drobilla.net/software/jalv/</a>',
));

print_app("lmms", "lmms", "LMMS", "DAW", ARRAY(
'LMMS combines the features of a tracker-/sequencer-program (pattern-/channel-/sample-/song-/effect-management)',
'and those of powerful synthesizers and samplers in a modern, user-friendly and easy to use graphical user-interface.',
'Homepage: <a href="http://lmms.sourceforge.net/" class="external text" rel="nofollow" target="_blank">http://lmms.sourceforge.net/</a>',
'Wiki: <a href="http://lmms.sourceforge.net/wiki/index.php/Main_Page" class="external text" rel="nofollow" target="_blank">http://lmms.sourceforge.net/wiki/index.php/Main_Page</a>',
));

print_app("luppp", "luppp", "Luppp", "Live Looper", ARRAY(
'Luppp is a music creation tool, intended for live use.',
'It focuses on real time processing and a fast intuitive workflow.',
'Homepage and Tutorials: <a href="http://openavproductions.com/luppp/" class="external text" rel="nofollow" target="_blank">http://openavproductions.com/luppp/</a>',
));

print_app("non-mixer", "non-mixer", "Non-Mixer", "Mixer", ARRAY(
'Powerful, reliable and fast modular Digital Audio Mixer.',
'It utilizes JACK for inter-application audio I/O and the NTK GUI toolkit for a fast and lightweight user interface.',
'Non-Mixer can be used alone or in concert with Non-Timeline and Non-Sequencer to form a complete studio.',
'Homepage: <a href="http://non.tuxfamily.org/wiki/Non%20Mixer" class="external text" rel="nofollow" target="_blank">http://non.tuxfamily.org/wiki/Non Mixer</a>',
'User Manual: <a href="http://non.tuxfamily.org/mixer/doc/MANUAL.html" class="external text" rel="nofollow" target="_blank">http://non.tuxfamily.org/mixer/doc/MANUAL.html</a>',
));

print_app("non-session-manager", "non-session-manager", "Non-Session-Manager", "Session Manager", ARRAY(
'API and an implementation for session management in the context of Linux Audio.',
'NSM clients use a well-specified OSC protocol to communicate with the session management daemon.',
'Homepage: <a href="http://non.tuxfamily.org/wiki/Non%20Session%20Manager" class="external text" rel="nofollow" target="_blank">http://non.tuxfamily.org/wiki/Non Session Manager</a>',
'User Manual: <a href="http://non.tuxfamily.org/nsm/MANUAL.html" class="external text" rel="nofollow" target="_blank">http://non.tuxfamily.org/nsm/MANUAL.html</a>',
));

print_app("non-timeline", "non-timeline", "Non-Timeline", "Audio Sequencer", ARRAY(
'Powerful, reliable and fast modular Digital Audio Timeline arranger.',
'It utilizes JACK for inter-application audio I/O and the NTK GUI toolkit for a fast and lightweight user interface.',
'Non-Timeline can be used alone or in concert with Non-Mixer and Non-Sequencer to form a complete studio.',
'Homepage: <a href="http://non.tuxfamily.org/wiki/Non%20Timeline" class="external text" rel="nofollow" target="_blank">http://non.tuxfamily.org/wiki/Non Timeline</a>',
'User Manual: <a href="http://non.tuxfamily.org/timeline/doc/MANUAL.html" class="external text" rel="nofollow" target="_blank">http://non.tuxfamily.org/timeline/doc/MANUAL.html</a>',
));

print_app("paulstretch", "paulstretch", "PaulStretch", "Audio Stretch", ARRAY(
'PaulStretch is a program for stretching the audio.',
'It is suitable only for extreme sound stretching of the audio (like 50x) and for applying special effects by "spectral smoothing" the sounds.',
'Homepage and Documentation: <a href="http://hypermammut.sourceforge.net/paulstretch/" class="external text" rel="nofollow" target="_blank">http://hypermammut.sourceforge.net/paulstretch/</a>',
'Note: This is a custom version that uses NTK, see
  <a href="https://github.com/original-male/paulstretch_cpp" class="external text" rel="nofollow" target="_blank">this link</a>.',
));

print_app("protrekkr", "protrekkr", "ProTrekkr", "Tracker", ARRAY(
'Tracker program combining a software synthesizer together with a traditional samples tracker',
'which can be used to create electronic music (like psytrance, trance goa, hard acid, IDM, chip, techno, etc)',
'for small sized intros, demos or games.',
'Project Page: <a href="http://code.google.com/p/protrekkr/" class="external text" rel="nofollow" target="_blank">http://code.google.com/p/protrekkr/</a>',
'Wiki: <a href="http://code.google.com/p/protrekkr/wiki/introduction?tm=6" class="external text" rel="nofollow" target="_blank">http://code.google.com/p/protrekkr/wiki/introduction?tm=6</a>',
'Note: This is a custom version with JACK audio support, see
  <a href="https://github.com/falkTX/protrekkr" class="external text" rel="nofollow" target="_blank">this link</a>.',
));

print_app("qsampler", "qsampler", "QSampler", "Sampler Frontend", ARRAY(
'LinuxSampler GUI front-end; it wraps as a client reference interface for the LinuxSampler Control Protocol.',
'Homepage: <a href="http://qsampler.sourceforge.net/" class="external text" rel="nofollow" target="_blank">http://qsampler.sourceforge.net/</a>',
));

print_app("qtractor", "qtractor", "Qtractor", "DAW", ARRAY(
'Qtractor is an Audio/MIDI multi-track sequencer application.',
'It evolves as a fairly-featured Linux desktop audio workstation GUI, specially dedicated to the personal home-studio.',
'Homepage: <a href="http://qtractor.sourceforge.net/" class="external text" rel="nofollow" target="_blank">http://qtractor.sourceforge.net/</a>',
'User Manual (PDF): <a href="http://downloads.sourceforge.net/qtractor/qtractor-0.5.x-user-manual.pdf" class="external text" rel="nofollow" target="_blank">http://downloads.sourceforge.net/qtractor/qtractor-0.5.x-user-manual.pdf</a>',
));

print_app("rosegarden", "rosegarden", "Rosegarden", "DAW", ARRAY(
'Rosegarden is a music composition and editing environment based around a MIDI sequencer that',
'features a rich understanding of music notation and includes basic support for digital audio.',
'Homepage: <a href="http://www.rosegardenmusic.com/" class="external text" rel="nofollow" target="_blank">http://www.rosegardenmusic.com/</a>',
'User Manual: <a href="http://www.rosegardenmusic.com/wiki/doc:manual-en" class="external text" rel="nofollow" target="_blank">http://www.rosegardenmusic.com/wiki/doc:manual-en</a>',
));
?>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
