<?php

global $db_link;
$db_link = mysql_connect($db_hostname, $db_user_rw, $db_pass_rw);

if ($db_link) {
mysql_set_charset("utf8");
mysql_select_db($db_database, $db_link);
}

?>
