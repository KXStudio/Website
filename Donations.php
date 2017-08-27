<?php
$PAGE_TITLE    = "KXStudio : Donations";
$PAGE_TYPE     = "DONATIONS";
$PAGE_SOURCE_1 = ARRAY("/Donations");
$PAGE_SOURCE_2 = ARRAY("Donations");
include_once("includes/header.php");

require "donate/config.php";
require "donate/connect.php";
?>

<p>
    KXStudio is and always will be a free and open-source project to everyone.<br/>
    Donations help ensure that developers have the needed enthusiasm and motivation to keep working on the project.<br/>
    Just because we're open-source doesn't mean we're allergic to money. ;)
</p>

<p>
    Currently the KXStudio project accepts donations via Flattr or PayPal.<br/>
    You can do a one-time donation or subscribe monthly.<br/>
    In either case, we thank you in advance for any donation you make!<br/>
</p>

<p>
    Note that PayPal takes a minimum 5% fee on all donations (10&euro; becomes 9.31&euro;).<br/>
    You can bypass this fee by sending money directly to falktx@falktx.com as a friend.<br/>
    <br/>
</p>

<?php
$cur_amount = 0.0;

if ($db_link) {
$sql_donations_month = mysql_query("SELECT * FROM donations WHERE MONTH(dt) = MONTH(NOW()) AND YEAR(dt) = YEAR(NOW())");
$sql_donations_last5 = mysql_query("SELECT * FROM donations ORDER BY dt DESC LIMIT 5");

if (mysql_num_rows($sql_donations_month)) {
    while ($sql_row = mysql_fetch_assoc($sql_donations_month)) {
        $cur_amount += $sql_row["amount"];
     }
}

$cur_percent = $cur_amount / 300.0 * 100.0;

if ($cur_percent > 100.0) {
    $cur_percent = 100.0;
}
?>

<div id="donations_container">
    This month donations: <?php print_r($cur_amount); ?> of 300.0 &euro; target<br/>
    <div id="donations_bar"><div style="width:<?php print_r($cur_percent); ?>%"></div></div>
    <p><br/></p>
</div>

<?php } /* $db_link */ ?>

<table>
<tr><td width="40px">
</td><td valign="bottom" width="200px">
    <?php if ($db_link) { ?>
    <b>Last 5 donations:</b><br/>
    <?php
        while ($sql_row = mysql_fetch_assoc($sql_donations_last5)) {
            echo "" . date("Y-m-d", strtotime($sql_row["dt"])) . " - " . $sql_row["amount"] . "&euro;<br/>";
        }
    } ?>
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
        <input type="hidden" name="currency_code" value="EUR">
        <input type="hidden" name="notify_url" value="http://kxstudio.linuxaudio.org/donate/ipn.php"/>
        <input type="hidden" name="return" value="http://kxstudio.linuxaudio.org/donate/thankyou.php"/>
        <input type="hidden" name="rm" value="2"/>
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
                    <option value="Small">Small : &euro;5.00 EUR - monthly</option>
                    <option value="Medium">Medium : &euro;10.00 EUR - monthly</option>
                    <option value="Large">Large : &euro;25.00 EUR - monthly</option>
                </select>
            </td></tr>
        </table>
        <input type="hidden" name="currency_code" value="EUR">
        <input type="hidden" name="notify_url" value="http://kxstudio.linuxaudio.org/donate/ipn.php"/>
        <input type="hidden" name="return" value="http://kxstudio.linuxaudio.org/donate/thankyou.php"/>
        <input type="hidden" name="rm" value="2"/>
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribe_LG.gif" border="0" name="submit" alt="PayPal">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form>
</td></tr>
</table>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
