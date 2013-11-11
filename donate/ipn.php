<?php

require "paypal_integration_class/paypal.class.php";
require "config.php";
require "connect_rw.php";

function esc($str) {
    global $db_link;
    return mysql_real_escape_string($str, $db_link);
}

$p = new paypal_class;

if ($p->validate_ipn()) {
    if($p->ipn_data["payment_status"] == "Completed") {
        $amount = $p->ipn_data['mc_gross'] - $p->ipn_data['mc_fee'];

        mysql_query("INSERT INTO donations (transaction_id,donor_email,amount,original_request)
                                            VALUES (
                                                    '".esc($p->ipn_data['txn_id'])."',
                                                    '".esc($p->ipn_data['payer_email'])."',
                                                    ".(float)$amount.",
                                                    '".esc(http_build_query($_POST))."'
                                            )");
    }
}
?>
