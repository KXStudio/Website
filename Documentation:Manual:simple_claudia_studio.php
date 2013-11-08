<?php
$PAGE_TITLE    = "KXStudio";
$PAGE_TYPE     = "NONKXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Documentation", "/Documentation", "/Documentation:Manual:simple_claudia_studio");
$PAGE_SOURCE_2 = ARRAY("Documentation", "Manual", "Creating a simple LADISH studio using Claudia");
include_once("includes/header.php");
?>

<div class="level1">

<p>

JACK enables complex routing of audio and MIDI data between JACK-enabled apps. This enables the user to create their own custom instruments or virtual studios by combining several JACK apps. However, having such power would be of limited use if you had to manually patch programs together every time you wanted a specific configuration. This problem is addressed by JACK session managers such as LADISH.
</p>

<p>
KXStudio includes an app called Claudia which uses the LADISH JACK session management standard to save and restore JACK configurations or &#039;LADISH Studios&#039;. Claudia is one of two JACK patchbay apps included in KXStudio for making and removing JACK connections. The other app is Catia, a simpler program with no canvas preview and no saved connections (and available for Windows and OSX, unlike Claudia).
</p>

<p>
The use of Claudia and LADISH is best demonstrated with a simple example scenario. Let&#039;s say that you frequently find yourself wanting to record audio from a non-JACK app such as Firefox and you use qtractor to record the audio. To do this you must ensure JACK and Cadence&#039;s ALSA audio bridge are running and you must connect the alsa2jack capture ports to qtractor&#039;s JACK inputs. In this guide we will create a simple LADISH studio with Claudia that will start JACK and the ALSA bridges, load qtractor and connect alsa2jack to its inputs so its ready to record from Firefox at boot.
</p>

</div>

<h2><span name="creating_a_ladish_studio" id="creating_a_ladish_studio">Creating a LADISH studio</span></h2>
<div class="level2">

<p>

Before you can create a LADISH studio, you need to ensure that you can start JACK OK, ideally without any xruns. If JACK isn&#039;t already running then Claudia will try to automatically start JACK using the current JACK settings, which it shares with Cadence, when you start a studio but it will fail if your JACK settings aren&#039;t correct. See the previous &#039;An introduction to Cadence&#039; and &#039;JACK Configuration&#039; chapters for tips on setting up JACK.
</p>

<p>
Claudia&#039;s interface is divided into four main areas when a studio is loaded. The menus and controls are along the top, a studio and room list is displayed to the upper left, a canvas preview on the lower left (when a studio is loaded) then the currently selected studio occupies the rest of Claudia&#039;s window. Claudia may automatically create a new studio when you launch it, otherwise the main canvas will be blank save for some instructions to help you get started with creating a studio. As these instructions state, you can create a new LADISH studio by selecting &#039;New Studio&#039; from Claudia&#039;s studio menu. You can call the studio anything you want but I&#039;ll just use &#039;qtractor&#039; for the studio name.
</p>

</div>

<h2><span name="start_jack_and_the_alsa_bridge" id="start_jack_and_the_alsa_bridge">Start JACK and the ALSA bridge</span></h2>
<div class="level2">

<p>

If you&#039;ve not already got JACK running, then now is a good time to start it. You can either start JACK from Cadence, choose &#039;Start Studio&#039; from Claudia&#039;s studio menu or push F5 in Claudia. When you do this, you will notice Claudia&#039;s transport controls become available and at least two items appear on the studio canvas - the JACK &#039;Hardware Capture&#039; and &#039;Hardware Playback&#039; ports. These are only visible in Claudia when the JACK server is running. For the purposes of this example we also need the Cadence ALSA audio bridge to be running. When you have the ALSA audio bridge running you will see an extra two items (JACK clients) in Claudia&#039;s studio editing area- alsa2jack, which gets auto-connected to the Hardware Playback ports, and jack2alsa which gets auto-connected to the Hardware capture ports.
</p>

</div>

<h2><span name="adding_an_app_to_a_studio" id="adding_an_app_to_a_studio">Adding an app to a studio</span></h2>
<div class="level2">

<p>

Now we shall add qtractor into our studio by choosing &#039;Add New…&#039; from the application menu, selecting qtractor under the DAW tab of the Claudia launcher then choosing OK. This will launch qtractor and add it into our studio. You may want to minimise or move qtractor to a different virtual desktop for the moment if you only have a small display as we are still working within Claudia; where you should now see a new JACK client box for qtractor within the editor as well as a new item, called Qtractor, added to the studio list.
</p>

</div>

<h2><span name="making_jack_connections" id="making_jack_connections">Making JACK connections</span></h2>
<div class="level2">

<p>

We want this studio to automatically connect the outputs of alsa2jack (which outputs the sound of all non-JACK apps, such as Firefox) into qtractor so we must connect one to the other. Left-click on capture_1 within the alsa2jack box then, keeping the mouse button pressed, drag your pointer over the Master/in_1 input of qtractor, then let go. You should then see a blue line connecting the alsa2jack client to qtractor&#039;s input port - this indicates you have created a JACK connection between the two. Now do the same for alsa2jack&#039;s capture_2 and qtractor&#039;s Master/in_2 so that both the left and right channels will get sent from ALSA to qtractor. Finally, connect qtractor&#039;s Master/out_1 and Master/out_2 to the Hardware Playback ports so that you can hear qtractors output. That completes our studio configuration so save the studio, which should look something like this:
</p>

<p>
<a href="http://kxstudio.sourceforge.net/screenshots/claudia-qtractor.png" class="media" title="claudia2.png"><img src="http://kxstudio.sourceforge.net/screenshots/claudia-qtractor.png" class="media" title="Simple Claudia Studio example config" alt="Simple Claudia Studio example config" /></a>
</p>

</div>

<h2><span name="loading_a_studio_at_boot" id="loading_a_studio_at_boot">Loading a studio at boot</span></h2>
<div class="level2">

<p>

Cadence can automatically load a Claudia studio at system launch if you like. This should probably be avoided if you are using a system in which your studio&#039;s audio device is not always connected.
</p>

<p>
To set a studio to auto-load, go to the main Cadence window, check that &#039;Auto-start JACK or LADISH at login&#039; is ticked, and then click on the three dots to the right of this text. Choose &#039;Load LADISH studio&#039;, select the just-created qtractor studio and then push OK. Next time you reboot you should find JACK starts using the settings saved within your studio, qtractor loads automatically and if you open Claudia (or Catia) you should see alsa2jack is connected to qtractor.
</p>

</div>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
