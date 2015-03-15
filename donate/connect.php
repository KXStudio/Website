<?php

global $db_link;

if ($db_hostname)
{

$db_link = mysql_connect($db_hostname, $db_user_ro, $db_pass_ro);

if ($db_link) {
mysql_set_charset("utf8");
mysql_select_db($db_database, $db_link);
}

}
else
{

$db_link = FALSE;

}

?>
