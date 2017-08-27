<?php
$PAGE_TITLE    = "KXStudio : Donations";
$PAGE_TYPE     = "DONATIONS";
$PAGE_SOURCE_1 = ARRAY("/Donations");
$PAGE_SOURCE_2 = ARRAY("Donations");
include_once("includes/header.php");

require "donate/config.php";
require "donate/connect.php";

global $biggest_donation_date;
global $biggest_donation_value;
global $total_ever;

$biggest_donation_date  = "Unknown";
$biggest_donation_value = 0.0;
$total_ever = 0.0;

function print_donation_year($year) {

global $db_link;

if ($db_link === false) {
    echo '<tr><td colspan="6">DB connection failed</td></tr>';
    return;
}

global $biggest_donation_date;
global $biggest_donation_value;
global $total_ever;

$amount = 0.0;

$max_month  = 0.0;
$total_year = 0.0;

$donation_count = 0.0;

$sql_donations = mysql_query("SELECT * FROM donations WHERE YEAR(dt) = " . $year);

if (mysql_num_rows($sql_donations)) {
    while ($sql_row = mysql_fetch_assoc($sql_donations)) {
        $amount = $sql_row["amount"];
        $donation_count += 1.0;
        if ($amount > $max_month) {
            $max_month = $amount;
            if ($amount > $biggest_donation_value) {
                $biggest_donation_date  = date("Y-m-d", strtotime($sql_row["dt"]));
                $biggest_donation_value = $amount;
            }
        }
        $total_year += $amount;
    }
}

$total_ever += $total_year;

echo '<tr>';
echo '  <td>' . $year . '</td>';
echo '  <td>' . $donation_count . '</td>';
echo '  <td>' . number_format($total_year, 2) . '&euro;</td>';
if ($donation_count > 0.0) {
    echo '  <td>' . number_format($total_year/$donation_count, 2) . '&euro;</td>';
} else {
    echo '  <td>0&euro;</td>';
}
echo '  <td>' . number_format($total_year/12.0, 2) . '&euro;</td>';
echo '  <td>' . number_format($max_month, 2) . '&euro;</td>';
echo '</tr>';

}

?>

<p>
    KXStudio is and always be a free and open-source project to everyone.<br/>
    Donations will help ensure that developers have the needed enthusiasm and motivation to keep working hard on the project.<br/>
    Just because we're open-source doesn't mean we're allergic to money. ;)
</p>

<p>
    This page contain statistics regarding donations made to the KXStudio project over time.<br/>
    So far the KXStudio project has received <?php global $total_ever; echo number_format($total_ever, 2); ?>&euro; in donations.<br/>
    The biggest donation ever made was on <?php echo $biggest_donation_date; ?>, with a value of <?php echo number_format($biggest_donation_value, 2); ?>&euro;.<br/>
    Thank you very much for your generosity!
</p>

<div class="box box-description">
<table style="text-align:center;">
<tr>
    <td>&nbsp;Year&nbsp;</td>
    <td>&nbsp;Donation count&nbsp;</td>
    <td>&nbsp;Total received&nbsp;</td>
    <td>&nbsp;Average per donation&nbsp;</td>
    <td>&nbsp;Average per month&nbsp;</td>
    <td>&nbsp;Biggest single donation&nbsp;</td>
</tr>
<?php

for ($year = strftime("%Y"); $year >= "2013"; $year -= 1) {
    print_donation_year($year);
}

?>
</table>
</div>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
