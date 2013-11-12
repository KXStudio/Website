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
    KXStudio is and always be a free and open-source project to everyone.<br/>
    Donations will help ensure that developers have the needed enthusiasm and motivation to keep working hard on the project.<br/>
    Just because we're open-source doesn't mean we're allergic to money. ;)
</p>

<p>
    Currently the KXStudio project accepts donations via Flattr or PayPal.<br/>
    You can do a one-time donation or subscribe monthly.<br/>
    In either case, we thank you in advance for any donation you make!<br/>
    <br/>
</p>

<?php
if ($db_link) {
$cur_amount    = 0.0;
$sql_donations = mysql_query("SELECT * FROM donations WHERE MONTH(dt) = MONTH(NOW()) AND YEAR(dt) = YEAR(NOW())");

if (mysql_num_rows($sql_donations)) {
    while ($sql_row = mysql_fetch_assoc($sql_donations)) {
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
        <input type="hidden" name="currency_code" value="EUR">
        <input type="hidden" name="notify_url" value="http://kxstudio.sourceforge.net/donate/ipn.php"/>
        <input type="hidden" name="return" value="http://kxstudio.sourceforge.net/donate/thankyou.php"/>
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
                    <option value="Small">Small : €5.00 EUR - monthly</option>
                    <option value="Medium">Medium : €10.00 EUR - monthly</option>
                    <option value="Large">Large : €25.00 EUR - monthly</option>
                </select>
            </td></tr>
        </table>
        <input type="hidden" name="currency_code" value="EUR">
        <input type="hidden" name="notify_url" value="http://kxstudio.sourceforge.net/donate/ipn.php" />
        <input type="hidden" name="return" value="http://kxstudio.sourceforge.net/donate/thankyou.php" />
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
