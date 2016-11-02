<?php

define ("DB_HOST", "http://web.sinchronize.com"); // set database host

define ("DB_USER", "admin"); // set database user

define ("DB_PASS","admin"); // set database password

define ("DB_NAME","Login_User"); // set database name



$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");

$db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database");

?>
