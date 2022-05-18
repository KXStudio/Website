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
        <li><a href="<?php echo $ROOT; ?>/Repositories:Applications">Applications in the repositories</a></li>
        <li><a href="<?php echo $ROOT; ?>/Repositories:Plugins">Plugins in the repositories</a></li>
    </ul>
</div>

<h5>How do I activate the KXStudio repositories?</h5>
<p>
    Just follow the instructions <a href="<?php echo $ROOT; ?>/Repositories">here</a>.
</p>

<h5>How do I remove/uninstall the KXStudio repositories?</h5>
<p>
    Simply uninstall the kxstudio-repos package with the "purge" option, like so:
</p>
<pre>
sudo apt-get purge kxstudio-repos
</pre>
<p>
    Due to how Debian packages work, uninstalling a package does not remove its <b>/etc</b> content, as these are treated as system configuration files.<br/>
    We must use the <b>purge</b> option in order to delete such files.<br/>
    Note that this operation will not uninstall or downgrade individual packages.
</p>

<h5>I upgraded my OS and can no longer install KXStudio packages</h5>
<p>
    It is common for Ubuntu (and maybe others) to disable or even automatically modify external repository files when upgrading to a new version.<br/>
    This leads to the KXStudio repositories no longer being setup properly.
</p>
<p>
    Simply uninstall (using "purge", see above) and reinstall the KXStudio repositories again.
</p>

<h5>What computer systems are supported?</h5>
<p>
    Any modern Debian or Ubuntu based system, running GNU/Linux.<br/>
    For Debian, version 11 (Bullseye) is required; on Ubuntu, 20.04 (Focal).<br/>
    Anything more recent than this should be compatible.<br/>
    <br style="line-height:0.5em"/>
    The only real requirement is it being a computer capable of running <b>x86_64</b> (pretty much everything nowadays)
    or an ARM-based system, which can be <b>armhf</b> (ARM 32bit with neon-vfpv4) or <b>aarch64</b> (ARM 64bit).<br/>
    Legacy i686 systems (PCs that cannot do 64bit) are not supported.
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

<h5>Why are applications not the focus for the KXStudio repositories?</h5>
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
      Packages in the KXStudio repositories have all these flags active (all plugin builds, plus audio threads set the needed CPU flags),
      so denormals become a thing of the past. :)<br/>
      <br style="line-height:0.5em"/>
      Something to note is that distributions like Debian, which want to keep support for old hardware, cannot enable this.
      This is because old hardware does not always have SSE2 support, so it becomes risky to enable it.</li>
</ul>

<h5>Why are packages prefixed with "5:" that bumps it over regular packages from other sources?</h5>
<p>
    This is for protection of those running the KXStudio repositories in rolling-release style distributions.<br/>
    An update from the distribution which does not follow KXStudio rules is a potential source of issues (see the points above).<br/>
    Better to have something stable that you know won't break during updates.<br/>
    (The focus on plugins in the repositories means it is much less work to maintain them, and this critical.
    The KXStudio repositories should be up-to-date as much as possible)
</p>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
