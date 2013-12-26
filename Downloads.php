<?php
$PAGE_TITLE    = "KXStudio : Downloads";
$PAGE_TYPE     = "DOWNLOADS";
$PAGE_SOURCE_1 = ARRAY("/Downloads");
$PAGE_SOURCE_2 = ARRAY("Downloads");
include_once("includes/header.php");

if (isset($_GET["id"])) {

$DOWNLOAD_IDS = ARRAY();

// KXStudio ISOs
$DOWNLOAD_IDS["101"] = "KXStudio_12.04.1_32bit.iso";
$DOWNLOAD_IDS["102"] = "KXStudio_12.04.1_64bit.iso";

// Cadence binaries
$DOWNLOAD_IDS["201"] = "Cadence-0.8-beta2-linux32.tar.xz";
$DOWNLOAD_IDS["202"] = "Cadence-0.8-beta2-linux64.tar.xz";
$DOWNLOAD_IDS["205"] = "Cadence-0.8-beta2-win32.zip";

// Carla binaries
$DOWNLOAD_IDS["211"] = "Carla-0.8-linux32.tar.xz";
$DOWNLOAD_IDS["212"] = "Carla-0.8-linux64.tar.xz";
$DOWNLOAD_IDS["215"] = "Carla-0.8-win32.zip";

// Deprecated binaries
$DOWNLOAD_IDS["301"] = "festige-1.0.2-x86.tar.gz";

$dlId = htmlspecialchars($_GET["id"]);

if (array_key_exists($dlId, $DOWNLOAD_IDS)) {

// Set sizes
$SIZE_IDS["101"] = "1745909760";
$SIZE_IDS["102"] = "1863237632";
$SIZE_IDS["201"] = "13419996";
$SIZE_IDS["202"] = "21380936";
$SIZE_IDS["205"] = "28950659";
$SIZE_IDS["211"] = "19637728";
$SIZE_IDS["212"] = "21272596";
$SIZE_IDS["215"] = "18927509";
$SIZE_IDS["301"] = "3705332";

$dlFile = $DOWNLOAD_IDS[$dlId];
$dlPath = "http://downloads.sourceforge.net/kxstudio/" . $dlFile;
$dlSize = $SIZE_IDS[$dlId];
?>

<p class="p_bigger_text">
  You are now downloading the file <b><?php echo $dlFile; ?></b><br/>
  If the download doesn't start automatically, click
   <a href="<?php echo $dlPath; ?>" class="external free" rel="nofollow" target="_blank">here</a>.
</p>

<a href="http://www.wargsang.de/KXStudioDownload.php?file=<?php echo $dlPath; ?>&size=<?php echo $dlSize; ?>" id="downloadRefId" style="display:none"></a>

<hr>

<p>
    Thank you for your interest on KXStudio and/or its software. <b>Please consider a donation</b> while the download takes place.<br/>
    Donations will help ensure that developers have the needed enthusiasm and motivation to keep working hard on the project.<br/>
    Just because we're open-source doesn't mean we're allergic to money. ;)
</p>

<p>
    Currently the KXStudio project accepts donations via Flattr or PayPal.<br/>
    You can do a one-time donation or subscribe monthly.<br/>
    In either case, we thank you in advance for any donation you make!<br/>
    <br/>
</p>

<table>
<tr><td width="40px;">
</td><td valign="bottom" width="150px">
    <a class="FlattrButton" style="display:none;" href="http://kxstudio.sourceforge.net/"></a>
    <noscript>
        <a href="http://flattr.com/thing/1098067/KXStudio" target="_blank">
        <img src="http://api.flattr.com/button/flattr-badge-large.png" alt="Flattr this" title="Flattr this" border="0" /></a>
    </noscript>
</td><td valign="bottom" width="150px">
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="A8QZW5UPVZGTW">
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form>
</td><td align="center" valign="bottom" width="220px">
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="7G5AKFSNVDBX8">
        <table>
            <tr><td>
                <input type="hidden" name="on0" value="Quantity">Quantity</td></tr>
            <tr><td>
                <select name="os0">
                    <option value="Small">Small : €5.00 EUR - monthly</option>
                    <option value="Medium">Medium : €10.00 EUR - monthly</option>
                    <option value="Large">Large : €25.00 EUR - monthly</option>
                </select>
            </td></tr>
        </table>
        <input type="hidden" name="currency_code" value="EUR">
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribe_LG.gif" border="0" name="submit" alt="PayPal">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form>
</td></tr>
</table>

<?php
} else { // array_key_exists
?>

<p class="error">
    Invalid download Id.
</p>

<?php
} // array_key_exists
?>

<p><br/></p>

<?php
} else { // isset
?>

<ul id="Artwork" name="Artwork">
    <li><b>Artwork</b></li>
    <p>
        The KXStudio artwork, which includes:<br/>
        &nbsp;&nbsp;- KDE4 color scheme<br/>
        &nbsp;&nbsp;- KDM theme<br/>
        &nbsp;&nbsp;- KSplash theme<br/>
        &nbsp;&nbsp;- Plymouth theme<br/>
        &nbsp;&nbsp;- QtCurve config<br/>
        &nbsp;&nbsp;- Gtk2/Qt3/Qt4 theme (using qtcurve engine)<br/>
        &nbsp;&nbsp;- Gtk3 theme (using solidity engine, incomplete)<br/>
        &nbsp;&nbsp;- Metacity theme<br/>
        &nbsp;&nbsp;- XFWM4 theme<br/>
        &nbsp;&nbsp;- Wallpapers<br/>
    </p>
    <p>
        By using QtCurve, our theme can perfectly match Gtk2, Qt3, KDE3, Qt4 and KDE4 applications.<br/>
        See the <a href="<?php echo $ROOT; ?>/Artwork">KXStudio Artwork</a> section for screenshots of various Desktop Environments using the KXStudio theme.<br/>
    </p>
    <p class="p_extra_spaced">
        Downloads:<br/>
        <a href="http://sourceforge.net/projects/kxstudio/files/Releases/artwork/kxstudio-artwork_20121222.tar.bz2/download" class="external free a_bigger_text" rel="nofollow" target="_blank">
            <img src="images/ico_kxstudio.png" alt="" class="img_text_align"/> KXStudio Artwork</a> (version 2012-12-22)
    </p>
</ul>

<p><br/></p>

<ul id="Binaries" name="Binaries">
    <li><b>Binary Releases</b></li>
    <p>
        Software developed by the KXStudio Team, pre-compiled and ready to run.<br/>
    </p>
    <p class="p_extra_spaced">
        Linux Downloads:<br/>
        <a href="http://sourceforge.net/projects/kxstudio/files/Releases/cadence/Cadence-0.8.1-linux32.tar.xz/download" class="external text a_bigger_text" rel="nofollow" target="_blank">
            <img src="images/ico_cadence.png" alt="" class="img_text_align"/> Cadence</a> (32bit, version 0.8.1)<br/>
        <a href="http://sourceforge.net/projects/kxstudio/files/Releases/cadence/Cadence-0.8.1-linux64.tar.xz/download" class="external text a_bigger_text" rel="nofollow" target="_blank">
            <img src="images/ico_cadence.png" alt="" class="img_text_align"/> Cadence</a> (64bit, version 0.8.1)<br/>
        <a href="http://sourceforge.net/projects/kxstudio/files/Releases/carla/Carla-1.2.3-linux32.tar.xz/download" class="external text a_bigger_text" rel="nofollow" target="_blank">
            <img src="images/ico_carla.png" alt="" class="img_text_align"/> Carla</a> (32bit, version 1.2.3)<br/>
        <a href="http://sourceforge.net/projects/kxstudio/files/Releases/carla/Carla-1.2.3-linux64.tar.xz/download" class="external text a_bigger_text" rel="nofollow" target="_blank">
            <img src="images/ico_carla.png" alt="" class="img_text_align"/> Carla</a> (64bit, version 1.2.3)<br/>
        <a href="http://sourceforge.net/projects/kxstudio/files/Releases/festige/festige-1.0.2-x86.tar.gz/download" class="external text a_bigger_text" rel="nofollow" target="_blank">
            <img src="images/ico_festige.png" alt="" class="img_text_align"/> FeSTige</a> (32bit, version 1.0.2)<br/>
    </p>
    <p class="p_extra_spaced">
        Windows Downloads:<br/>
        <a href="http://sourceforge.net/projects/kxstudio/files/Releases/cadence/Cadence-0.8.1-win32.zip/download" class="external text a_bigger_text" rel="nofollow" target="_blank">
            <img src="images/ico_cadence.png" alt="" class="img_text_align"/> Cadence</a> (32bit, version 0.8.1)<br/>
        <a href="http://sourceforge.net/projects/kxstudio/files/Releases/carla/Carla-1.2.3-win32.zip/download" class="external text a_bigger_text" rel="nofollow" target="_blank">
            <img src="images/ico_carla.png" alt="" class="img_text_align"/> Carla</a> (32bit, version 1.2.3)<br/>
    </p>
</ul>

<p><br/></p>

<ul id="SourceCode" name="SourceCode">
    <li><b>Source Code Releases</b></li>
    <p>
        Software developed by the KXStudio Team, released as source tarball so that distros other than Ubuntu (or advanced users) can pick it up.<br/>
        If you're running an Ubuntu based system, please use the <a href="<?php echo $ROOT; ?>/Repositories">KXStudio Repositories</a> instead.
    </p>
    <p class="p_extra_spaced">
        Downloads:<br/>
        <a href="http://sourceforge.net/projects/kxstudio/files/Releases/cadence/Cadence-0.8.1-src.tar.bz2/download" class="external free a_bigger_text" rel="nofollow" target="_blank">
            <img src="images/ico_cadence.png" alt="" class="img_text_align"/> Cadence</a> (version 0.8.1)<br/>
        <a href="http://sourceforge.net/projects/kxstudio/files/Releases/carla/Carla-1.1.0-src.tar.bz2/download" class="external free a_bigger_text" rel="nofollow" target="_blank">
            <img src="images/ico_carla.png" alt="" class="img_text_align"/> Carla</a> (version 1.1.0)<br/>
        <a href="http://sourceforge.net/projects/kxstudio/files/Releases/festige/festige-1.0.2-src.tar.gz/download" class="external free a_bigger_text" rel="nofollow" target="_blank">
            <img src="images/ico_festige.png" alt="" class="img_text_align"/> FeSTige</a> (version 1.0.2)<br/>
        <a href="http://sourceforge.net/projects/kxstudio/files/Releases/klaudia/klaudia-1.0.2.tar.gz/download" class="external free a_bigger_text" rel="nofollow" target="_blank">
            <img src="images/ico_klaudia.png" alt="" class="img_text_align"/> Klaudia</a> (version 1.0.2)<br/>
    </p>
</ul>

<hr/>

<ul id="LiveDVD" name="LiveDVD">
    <li><b>KXStudio 12.04.3 Live-DVD</b></li>
    <p>
        This is an Ubuntu 12.04.3 LTS based Live-DVD, used to test-drive KXStudio and/or install it to your HDD.<br/>
        It contains a snapshot of the KXStudio features as of <b>Oct 17, 2013</b> or <b>17/10/2013</b>. It uses KDE4 as Desktop Environment.
    </p>
    <p class="p_extra_spaced">
        Downloads:<br/>
    </p>
    <p>
        <a href="http://sourceforge.net/projects/kxstudio/files/Live/KXStudio_12.04.3_32bit.iso/download" class="external text a_bigger_text" rel="nofollow" target="_blank">
            <img src="images/ico_disc.png" alt="" class="img_text_align"/> KXStudio 12.04.3 Live-DVD <strong>- 32bit</strong></a><br/>
            &nbsp;&nbsp;&nbsp;&nbsp;md5sum: 2e937f1249e6608369f9d17401b16887<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;size: 1.8 Gb
    </p>
    <p>
        <a href="http://sourceforge.net/projects/kxstudio/files/Live/KXStudio_12.04.3_64bit.iso/download" class="external text a_bigger_text" rel="nofollow" target="_blank">
            <img src="images/ico_disc.png" alt="" class="img_text_align"/> KXStudio 12.04.3 Live-DVD <strong>- 64bit</strong></a><br/>
            &nbsp;&nbsp;&nbsp;&nbsp;md5sum: ecd0b53bfaddfdf96454c1840f05a90b<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;size: 1.9 Gb
    </p>
    <p>
        <b>*Please* make sure to read the <a href="<?php echo $ROOT; ?>/Documentation:KXStudio12043:ReleaseNotes">Release Notes</a></b> before using this DVD.<br/>
        You need to burn the ISO file into a DVD to make it usable, more details <a href="https://help.ubuntu.com/community/BurningIsoHowto" class="external free" rel="nofollow" target="_blank">here</a>.
    </p>
</ul>

<p><br/></p>

<hr/>

<ul id="AllDownloads" name="AllDownloads">
    <li><b>All Downloads</b></li>
    <p>
        You can access all the KXStudio downloads using the KXStudio SourceForge project page:<br/>
        <a href="http://sourceforge.net/projects/kxstudio/files/" class="external free" rel="nofollow" target="_blank">http://sourceforge.net/projects/kxstudio/files/</a>
    </p>
</ul>

<p><br/></p>

<?php
} // isset
include_once("includes/footer.php");
?>
