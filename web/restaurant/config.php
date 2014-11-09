<?php 
$user_name = "u878888734_resto";
$password = "barachucha2";
$database = "u878888734_resto";
$server = "mysql.1freehosting.com";

$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);

mysql_query("SET NAMES 'utf8'");

 ?>