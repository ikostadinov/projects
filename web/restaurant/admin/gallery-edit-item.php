<?php 

include '../config.php';
$id=$_REQUEST['ID'];

if ($db_found) {
	$SQL = "SELECT * FROM `gallery` WHERE ID='$id'";
	$result=mysql_query($SQL);
	$row = mysql_fetch_assoc($result);

	$photo=$row['photo'];


	if (isset($_POST['update'])) {

		//$photo_save=$_POST['photo'];

		$file = $_FILES['file'];
		$file_name=$file['name'];
		$file_type=$file['type'];
		$file_size=$file['size'];
		$file_path = $file['tmp_name'];



	if ($file_name!="" && ($file_type="image/jpeg"||$file_type="image/png"||$file_type="image/gif")&&$file_size<=1073741824) {
		if (move_uploaded_file($file_path,'images/'.$file_name)) {
			$query = mysql_query("UPDATE gallery SET  photo='images/$file_name' WHERE ID='$id'");
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
		<tr><td>Снимка: </td>
			<td><img src="<?php print $photo; ?>"  width="100" height="100" alt=""/><br><input type="file" name="file"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="update" value="Обнови"></td>
		</tr>			
</table></form>
<?php endif; ?>



    </body>
</html>
 