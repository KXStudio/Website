<?php
$PAGE_TITLE    = "KXStudio : Repositories : FAQ";
$PAGE_TYPE     = "KXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Repositories", "/Repositories:FAQ");
$PAGE_SOURCE_2 = ARRAY("Repositories", "FAQ");
include_once("includes/header.php");
?>

<div class="box box-description">
    <p>
        This section contains frequent asked questions about the KXStudio repositories.
    </p>
    <p>
        You might also want to check:
    </p>
    <ul>
        <li><a href="<?php echo $ROOT; ?>/Repositories">General information and how to activate</a></li>
        <li><a href="<?php echo $ROOT; ?>/Repositories:Applications">Applications in the repositories</a></li>
        <li><a href="<?php echo $ROOT; ?>/Repositories:Plugins">Plugins in the repositories</a></li>
    </ul>
</div>

<h5>How do I activate the KXStudio repos?</h5>
<p>
Just follow the instructions <a href="<?php echo $ROOT; ?>/Repositories">here</a>.
</p>

<h5>What computer systems are supported?</h5>
<p>
Any Debian or Ubuntu based system, running GNU/Linux.<br/>
For Debian, version 10 (Buster) is required; on Ubuntu, 18.04 (Bionic).<br/>
<br style="line-height:0.5em"/>
Intel-based and ARM-based systems are supported, 32 and 64bit for both.<br/>
For Intel-based systems a SSE2 capable CPU is required, while for ARM systems it is a neon-vfpv4 capable CPU.
</p>

<h5>I found an issue with a package, where can I report it?</h5>
<p>
Bug reports and package requests should be posted in the Github tracker
  <a href="https://github.com/KXStudio/Repository/issues" target="_blank">here</a>.
</p>

<h5>Can I make a request for this new awesome-super-great application?</h5>
<p>
You can, but it will likely not be answered. The KXStudio repositories focus on audio plugins, not general applications.
</p>

<h5>Why are applications not the focus for the KXStudio repos?</h5>
<p>
A few reasons actually:
</p>
<ul>
  <li>Applications can easily have flatpaks, snaps or whatever.<br/>
      If they provide officially supported binaries, why not use them instead of duplicating efforts (of making binaries).</li>
  <li>They often have very complex dependencies compared to plugins, some are actually quite difficult to build.</li>
  <li>Distributions have a lot of margin to get things right, compared to plugins.<br/>
      Plugins can be tricky for general GNU/Linux distributions, as they need to be self-contained.<br/>
      Applications are mostly fine as long as they start.</li>
  <li>Likely I will not use them, so they offer no benefit to me.</li>
</ul>

<h5>Why are plugins tricky for general distributions?</h5>
<p>
As you likely already know, we run a lot of audio plugins at the same time, all in the same process space.
If a single plugin misbehaves or crashes, it usually brings down the entire host or DAW.<br/>
</p>
<p>
So it is vital that we build the plugins in a way to minimize issues.
They must be self-contained and never conflict with each other (as much as possible anyway).
This entails, for example:
</p>
<ul>
  <li><b>Building all plugin code and its dependencies with hidden symbols</b>, so only the plugin-format-defined entry-points are visible within a shared object.<br/>
      When this is not done, a plugin that uses a different audio library version from the host will crash.<br/>
      This is usually not a problem if one uses only binaries from the distributions, but we cannot assume that it will always be that way...<br/>
      Note that this is not just about building plugins in a certain way, but also <b>all of its dependencies</b>.<br/>
      <br style="line-height:0.5em"/>
      For example: flatpaks, snaps, appimages and others include their own version of libraries needed by the application, which will publically expose symbols.<br/>
      In such cases, loading a plugin that uses a library also used by the host will result in a crash if their target versions don't match.<br/>
      Packages built in the KXStudio repositories do not have this issue.</li>
  <li><b>SSE2 optimizations required to prevent denormals</b>.<br/>
      We want to avoid denormals in audio applications, as it leads to very high CPU usage.<br/>
      Checking for denormals on each buffer cycle is not cost-free for the CPU, but we can setup things so that they don't even happen to begin with!<br/>
      This can be achieved by activating specific build flags (<i>-ffast-math -mfpmath=sse</i>) and set a few CPU flags in the audio thread.<br/>
      Some plugins include such flags as part of their build rules, but not all.<br/>
      Packages in the KXStudio repos have all these flags active (all plugin builds, plus audio threads set the needed CPU flags),
      so denormals become a thing of the past. :)<br/>
      <br style="line-height:0.5em"/>
      Something to note is that distributions like Debian, which want to keep support for old hardware, cannot enable this.
      This is because old hardware does not always have SSE2 support, so it becomes risky to enable it.</li>
</ul>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
