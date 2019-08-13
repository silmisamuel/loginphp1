<?php
define ("DB_HOST", "silmiserver.mysql.database.azure.com"); // Your database host name
define ("DB_USER", "sisa122@silmiserver"); // Your database user
define ("DB_PASS","Ddyhajmou1"); // Your database password
define ("DB_NAME","examdemo"); // Your database name

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
$db = mysqli_select_db($link, DB_NAME) or die("Couldn't select database");
?>
