<?php 

include '../config.php';

$id = $_REQUEST['ID'];

mysql_query("DELETE FROM gallery WHERE ID='$id'") or die(mysql_error());

print "<script>alert('Успешно изтрито!');</script>";
header("refresh: 0.1; url=../admin.php");

 ?>