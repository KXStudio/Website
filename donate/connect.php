<?php

global $db_link;

if ($db_hostname)
{

$db_link = mysqli_connect($db_hostname, $db_user_ro, $db_pass_ro);

if ($db_link) {
mysqli_set_charset($db_link, "utf8");
mysqli_select_db($db_link, $db_database);
}

}
else
{

$db_link = FALSE;

}

?>
