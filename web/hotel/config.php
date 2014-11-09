<?php 
$user_name = "u196727129_hotel";
$password = "barachucha2";
$database = "u196727129_hotel";
$server = "mysql.1freehosting.com";

$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);

mysql_query("SET NAMES 'utf8'");

 ?>