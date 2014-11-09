<?php 

include '../config.php';
$id=$_REQUEST['ID'];

if ($db_found) {
	$SQL = "SELECT * FROM `working-time` WHERE ID='$id'";
	$result=mysql_query($SQL);
	$row = mysql_fetch_assoc($result);

	$day=$row['day'];
	$open=$row['open'];
	$close=$row['close'];

	if (isset($_POST['update'])) {

		$open_save=$_POST['open'];
		$close_save=$_POST['close'];


			$query = mysql_query("UPDATE `working-time` SET  open='$open_save', close='$close_save' WHERE ID='$id'");
			if ($query==true) {
				print "<script>alert('Успешна редакция!');</script>";
				header("refresh: 0.1; url=../admin.php"); 
			}
			else{
				print "<script>alert('nasrah se');</script>";
				mysql_error();
			}
		}

		
	}

mysql_close($db_handle);
 ?>
 <?php if(!isset($_POST['update'])) : ?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <link rel="stylesheet" href="../css/admin-style.css">
    </head>
    <body>
        
      <form  method='post' enctype="multipart/form-data"><table id='edit-item'>	
		<tr><td>Ден: </td>
			<td><?php print $day; ?></td>
		</tr>
		<tr>
			<td>Отворено от: </td>
			<td>
				<input type="text" name="open" value="<?php print $open; ?>" size="5" >
			</td>
		</tr>
		<tr>
			<td>Затворено в: </td>
			<td><input type="text" name="close" value="<?php print $close; ?>" size="5"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="update" value="Обнови"></td>
		</tr>			
</table></form>
<?php endif; ?>



    </body>
</html>
 