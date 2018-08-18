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
    Currently the KXStudio project accepts donations via LiberaPay and PayPal.<br/>
    You can do a one-time donation or subscribe monthly.<br/>
    In either case, we thank you in advance for any donation you make!<br/>
</p>

<p>
    NOTE: PayPal takes a minimum 5% fee on all donations (for example, 10&euro; becomes 9.31&euro;).<br/>
    You can bypass this fee by sending money directly to falktx@falktx.com as a friend.<br/>
    <br/>
</p>

<?php
$cur_amount = 0.0;

if ($db_link) {
$sql_donations_month = mysqli_query($db_link, "SELECT * FROM donations WHERE MONTH(dt) = MONTH(NOW()) AND YEAR(dt) = YEAR(NOW())");
$sql_donations_last5 = mysqli_query($db_link, "SELECT * FROM donations ORDER BY dt DESC LIMIT 5");

if (mysqli_num_rows($sql_donations_month)) {
    while ($sql_row = mysqli_fetch_assoc($sql_donations_month)) {
        $cur_amount += $sql_row["amount"];
     }
}

$cur_percent = $cur_amount / 500.0 * 100.0;

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
        while ($sql_row = mysqli_fetch_assoc($sql_donations_last5)) {
            echo "" . date("Y-m-d", strtotime($sql_row["dt"])) . " - " . $sql_row["amount"] . "&euro;<br/>";
        }
    } ?>
</td><td valign="bottom" width="150px">
    <script src="https://liberapay.com/~42762/widgets/receiving.js"></script>
    <noscript>
        <a class="liberapay-btn" href="https://liberapay.com/~42762/donate">
            <svg viewBox="0 0 80 80" height="16" width="16">
                <g transform="translate(-78.37-208.06)" fill="#1a171b">
                    <path d="m104.28 271.1c-3.571 0-6.373-.466-8.41-1.396-2.037-.93-3.495-2.199-4.375-3.809-.88-1.609-1.308-3.457-1.282-5.544.025-2.086.313-4.311.868-6.675l9.579-40.05 11.69-1.81-10.484 43.44c-.202.905-.314 1.735-.339 2.489-.026.754.113 1.421.415 1.999.302.579.817 1.044 1.546 1.395.729.353 1.747.579 3.055.679l-2.263 9.278"/><path d="m146.52 246.14c0 3.671-.604 7.03-1.811 10.07-1.207 3.043-2.879 5.669-5.01 7.881-2.138 2.213-4.702 3.935-7.693 5.167-2.992 1.231-6.248 1.848-9.767 1.848-1.71 0-3.42-.151-5.129-.453l-3.394 13.651h-11.162l12.52-52.19c2.01-.603 4.311-1.143 6.901-1.622 2.589-.477 5.393-.716 8.41-.716 2.815 0 5.242.428 7.278 1.282 2.037.855 3.708 2.024 5.02 3.507 1.307 1.484 2.274 3.219 2.904 5.205.627 1.987.942 4.11.942 6.373m-27.378 15.461c.854.202 1.91.302 3.167.302 1.961 0 3.746-.364 5.355-1.094 1.609-.728 2.979-1.747 4.111-3.055 1.131-1.307 2.01-2.877 2.64-4.714.628-1.835.943-3.858.943-6.071 0-2.161-.479-3.998-1.433-5.506-.956-1.508-2.615-2.263-4.978-2.263-1.61 0-3.118.151-4.525.453l-5.28 21.948"/>
                </g>
            </svg>
            <span>Donate</span>
        </a>
    </noscript>
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
    </form>
</td><td align="center" valign="bottom" width="220px">
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="7G5AKFSNVDBX8">
        <table>
            <tr><td align="center">
                <input type="hidden" name="on0" value="Quantity"><strong>Paypal Subscription</strong></td></tr>
            <tr><td>
                <select name="os0">
                    <option value="Small">Small : &euro;5.00 EUR - monthly</option>
                    <option value="Medium">Medium : &euro;10.00 EUR - monthly</option>
                    <option value="Large">Large : &euro;25.00 EUR - monthly</option>
                </select>
            </td></tr>
        </table>
        <input type="hidden" name="currency_code" value="EUR">
        <input type="hidden" name="lc" value="US">
        <!--<input type="hidden" name="notify_url" value="https://kxstudio.linuxaudio.org/donate/ipn.php"/>-->
        <input type="hidden" name="return" value="https://kxstudio.linuxaudio.org/donate/thankyou.php"/>
        <input type="hidden" name="rm" value="2"/>
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribe_LG.gif" border="0" name="submit" alt="PayPal">
    </form>
</td></tr>

</table>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
