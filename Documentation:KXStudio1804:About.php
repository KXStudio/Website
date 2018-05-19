<?php
$PAGE_TITLE    = "KXStudio Documentation";
$PAGE_TYPE     = "NONKXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Documentation", "/Documentation", "/Documentation:KXStudio1804:About");
$PAGE_SOURCE_2 = ARRAY("Documentation", "KXStudio 18.04", "About");
include_once("includes/header.php");
?>

<p>
    KXStudio 14.04.5 is an ISO release based on Ubuntu 18.04 LTS, made on 19/05/2018.<br/>
    Check the Live-DVD section in the Downloads page to download it (or just click <a href="<?php echo $ROOT; ?>/Downloads#LiveDVD">here</a>).
</p>

<p>
    The Live-DVD contains a highly optimized KDE5 Plasma desktop, together with a low-latency kernel (version x.xx).<br/>
    There's a lot of audio-related applications inside, with even more available to install via the repositories.
</p>

<p>
    The live system is based upon the Neon distribution with several tweaks
      (like disable file indexer and everything else that can introduce random xruns).
</p>

<p><br/></p>

<h4><span class="mw-headline" id="CurrentNotes">Current 18.04 Notes</span></h4>
<ul>
    <li>TODO: test 18.04 and write relevant notes here</li>
</ul>

<p><br/></p>

<h3><span class="mw-headline" id="Apps"> Pre-installed applications </span></h3>

<p>
    The list of pre-installed applications in the ISO follows, not listing audio plugins.<br/>
    NOTE: This list is outdated! (was made for 14.04.5 and needs to be updated)
</p>

<table>
<tr><td>
    <b>Audio</b>
</td><td>
    &nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;
</td><td>
    <b>Other</b>
</td></tr>
<tr><td valign="top">
<ul>
<!--     <li>amsynth</li> -->
    <li>Ardour</li>
    <li>Audacious</li>
    <li>Audacity</li>
    <li>Bristol</li>
    <li>Cadence (and sub-tools)</li>
<!--     <li>Calf Plugin Suite</li> -->
    <li>Carla</li>
<!--     <li>DISTRHO Plugins and Ports</li> -->
<!--     <li>DrumGizmo</li> -->
<!--     <li>Drumkv1</li> -->
    <li>Giada</li>
    <li>Guitarix</li>
    <li>Hydrogen</li>
    <li>Jamin</li>
    <li>LinuxSampler</li>
    <li>LMMS</li>
    <li>Mixxx</li>
    <li>MusE</li>
    <li>Non-Mixer</li>
    <li>Non-Sequencer</li>
    <li>Non-Session-Manager</li>
    <li>Non-Timeline</li>
<!--     <li>OpenAV Plugins</li> -->
    <li>Petri-Foo</li>
    <li>Phasex</li>
    <li>Qsampler</li>
    <li>Qsynth</li>
    <li>Qtractor</li>
    <li>Rakarrack</li>
    <li>Rosegarden</li>
<!--     <li>Samplv1</li> -->
    <li>SEQ24</li>
    <li>SooperLooper</li>
<!--     <li>Synthv1</li> -->
    <li>xjadeo</li>
<!--     <li>ZynAddSubFX</li> -->
</ul>
</td><td valign="top">
    &nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;
</td><td valign="top">
<ul>
    <li>Blender</li>
    <li>Clementine</li>
    <li>Digikam</li>
    <li>Firefox</li>
    <li>Gimp</li>
    <li>gparted</li>
    <li>Inkscape</li>
    <li>KDE base (ark, dolphin, gwenview, k3b, etc)</li>
    <li>Kdenlive</li>
    <li>LibreOffice (Impress and Writer)</li>
    <li>SMPlayer</li>
    <li>Synaptic</li>
    <li>VLC</li>
</ul>
</td></tr>
</table>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
