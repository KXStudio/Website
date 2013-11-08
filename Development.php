<?php
$PAGE_TITLE    = "KXStudio : Development";
$PAGE_TYPE     = "NONKXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Development");
$PAGE_SOURCE_2 = ARRAY("Development");
include_once("includes/header.php");
?>

<p>
    This page is meant for people that want to contribute to KXStudio.
</p>
<p>
    Please note that KXStudio has project pages in both SourceForge and Launchpad (you can check the respective links on the left).<br/>
    SourceForge does the website, code and repository hosting, while Launchpad is used for managing bugs, questions/answers and the RSS news feed.<br/>
    The Cadence tools don't use SourceForge or Launchpad, but are hosted on github instead at <a href="https://github.com/falkTX/Cadence" class="external text" rel="nofollow" target="_blank">https://github.com/falkTX/Cadence</a>.
</p>
<p>
    If you're looking to report a bug in the Cadence tools, use the github "Issues" interface available <a href="https://github.com/falkTX/Cadence/issues" class="external text" rel="nofollow" target="_blank">here</a>.<br/>
    For KXStudio related bugs <a href="https://bugs.launchpad.net/kxstudio" class="external text" rel="nofollow" target="_blank">click here</a>.<br/>
    <br/>
</p>

<p>
    Regarding KXStudio development, we currently need:
</p>
<ul>
    <li>A Graphic designer that can make Gtk3 themes</li>
    <li>Anyone that would like to make some good video tutorials</li>
    <li>Non-Ubuntu users to beta-test the Cadence tools</li>
</ul>

<p>
    In any case, you should always check the <a href="<?php echo $ROOT; ?>/Development:TODO">KXStudio TODO List</a> to find out what you can do.<br />
    (You don't need to know programming to help).
</p>
<p>
    KXStudio future plans are discussed <a href="http://linuxmusicians.com/viewtopic.php?f=47&amp;t=8078" class="external text" rel="nofollow" target="_blank">here</a>.
</p>
<br/>

<?php
include_once("includes/footer.php");
?>
