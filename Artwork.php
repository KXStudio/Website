<?php
$PAGE_TITLE    = "KXStudio";
$PAGE_TYPE     = "KXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Artwork");
$PAGE_SOURCE_2 = ARRAY("Artwork");
include_once("includes/header.php");
?>

<p>The KXStudio Desktop theme uses QtCurve as the rendering engine, making it available on Qt3, KDE3, Qt4, KDE4 and Gtk2 applications.<br />
There is a Metacity and XFWM theme as well.<br />
The icon theme used is Oxygen.
</p><p>Here's some screenshots showing off the theme on different Desktop Environments:<br />
</p>
<table border="1">
<tr>
<td align="center">
<p><a href="screenshots/kxstudio-kde3.png" class="external text" rel="nofollow"><img src="screenshots/thumb/kxstudio-kde3.png" alt="kxstudio-kde3.png" /></a><br />
KDE3 (Trinity)
</p>
</td>
<td align="center">
<p><a href="screenshots/kxstudio-kde4.png" class="external text" rel="nofollow"><img src="screenshots/thumb/kxstudio-kde4.png" alt="kxstudio-kde4.png" /></a><br />
KDE4
</p>
</td>
<td align="center">
<p><a href="screenshots/kxstudio-xfce.png" class="external text" rel="nofollow"><img src="screenshots/thumb/kxstudio-xfce.png" alt="kxstudio-xfce.png" /></a><br />
XFCE
</p>
</td>
</tr>
</table>
<p>You can get the entire artwork in the <a href="Downloads" title="Downloads">Downloads</a> section, just like any other application from us.
</p><p><br />
To properly apply this theme, you can follow these steps:
</p>
<ul>
<li>Install QtCurve (minimum KDE4 / Gtk2, Qt3 optional)</li>
<li>Set KDE color-scheme using the 'KXStudio.colors' provided</li>
<li>Set KDE widget style to QtCurve</li>
<li>Configure KDE QtCurve style, and load the 'KXStudio.qtcurve' config</li>
<li>Set Gtk2 theme to KXStudio (KXStudio decoration, QtCurve style, Oxygen icons)</li>
<li>Set Qt4/Qt3 style to QtCurve (using qtconfig-qt4/qt3)</li>
</ul>
<p>A XFWM decoration theme is available for XFCE. You might want to use 'Oxygen Mono Light|Dark' to get monochrome panel applets.<br />
Please note that Gtk3 is not supported at the moment.
</p><p><br />
</p>
<h2> <span class="mw-headline" id="The_Desktop_Session">The Desktop Session</span></h2>
<p>Besides the theme, the "KXStudio Desktop" also consists of (resumed):
</p>
<ul>
<li>JACK integration</li>
<li>Audio Session management through LADISH</li>
<li>One-app-to-rule them all (Cadence)</li>
</ul>
<p><br />
<b>JACK integration</b><br />
We're talking about making the whole system JACK dependant. JACK is started as soon as the user logs in, using the last session settings or a pre-setup LADISH Studio.<br />
For non-JACK aware apps, bridges are used.<br />
&#160;<i>PulseAudio</i> works nicely with JACK, although it needs a bit medium/high buffer size in order to work properly.<br />
&#160;<i>ALSA</i> has a plugin for JACK too, although it's not perfectly stable.<br />
&#160;<i>SDL</i>-Audio applications will need either a SDL-&gt;OSS-&gt;JACK, SDL-&gt;ALSA-&gt;JACK or SDL-&gt;PulseAudio-&gt;JACK bridge, since there's no native JACK support in SDL. If you're able to get an OSS-&gt;JACK bridge working, use it as it is preferred.
</p><p><br />
<b>Audio Session management through LADISH</b><br />
There needs to be a tool to manage audio projects (and non-audio as well), and LADISH already provides this functionality.<br />
By integrating with LADISH, we can set-up custom JACK settings, apps and connections, and load it at any time, even when login in.
</p><p><br />
<b>One-app-to-rule them all (Cadence)</b><br />
Cadence is our own app that controls the whole audio system, using JACK and LADISH.<br />
This is pre-alpha software though, and it's not even released yet (although it's already present in the KXStudio repositories for testing).<br />
<i>A full Cadence explanation/tutorial will be available once it reaches Alpha 1 (first public release)</i>
</p><p><br />
</p>
<h2> <span class="mw-headline" id="The_Desktop_Environment">The Desktop Environment</span></h2>
<p>There are plans to make our own Desktop Enviroment (including Window Manager), based on <a href="http://www.niallmoody.com/apps/twindy" class="external text" rel="nofollow">Twindy</a>.<br />
A *Mock-up* can be seen <a href="tmp/scr026.png" class="external text" rel="nofollow">here</a>.<br />
There's nothing done for it yet, and it won't be so soon, as there is plenty of stuff to do first&#160;;)
</p>
<p><br /></p>

<?php
include_once("includes/footer.php");
?>
