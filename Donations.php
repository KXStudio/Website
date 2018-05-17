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
    Currently the KXStudio project accepts donations only via PayPal.<br/>
    Monthly subscriptions are not an option anymore.<br/>
    We thank you in advance for any donation you make!<br/>
</p>

<p>
    NOTE: PayPal takes a minimum 5% fee on all donations (10&euro; becomes 9.31&euro;).<br/>
    You can bypass this fee by sending money directly to falktx@falktx.com as a friend.<br/>
    <br/>
</p>

<table>
<tr><td width="40px">
</td><td valign="bottom" width="200px">
    <?php if ($db_link) { ?>
    <b>Last 5 donations:</b><br/>
    <?php
        $sql_donations_last5 = mysqli_query($db_link, "SELECT * FROM donations ORDER BY dt DESC LIMIT 5");

        while ($sql_row = mysqli_fetch_assoc($sql_donations_last5)) {
            echo "" . date("Y-m-d", strtotime($sql_row["dt"])) . " - " . $sql_row["amount"] . "&euro;<br/>";
        }
    } ?>
</td><td valign="bottom" width="150px" align="center">
    <strong>PayPal Single Donation</strong>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="A8QZW5UPVZGTW">
        <input type="hidden" name="currency_code" value="EUR">
        <input type="hidden" name="lc" value="US">
        <!--<input type="hidden" name="notify_url" value="https://kxstudio.linuxaudio.org/donate/ipn.php"/>-->
        <input type="hidden" name="return" value="https://kxstudio.linuxaudio.org/donate/thankyou.php"/>
        <input type="hidden" name="rm" value="2"/>
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal">
        <!--<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">-->
    </form>
</td></tr>

</table>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
