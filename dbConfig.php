<?php

define ("DB_HOST", "localhost"); // set database host

define ("DB_USER", ""); // set database user

define ("DB_PASS",""); // set database password

define ("DB_NAME",""); // set database name



$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Could not make connection.");

$db = mysql_select_db(DB_NAME, $link) or die("Could not select database");

?>
