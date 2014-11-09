<?php 

include '../config.php';

if ($db_found) {

$SQL = "SELECT * FROM `home`";
$result=mysql_query($SQL);
$post = mysql_fetch_assoc($result);

if (isset($_POST['submit'])) {
	$file = $_FILES['file'];
	$file_name=$file['name'];
	$file_type=$file['type'];
	$file_size=$file['size'];
	$file_path = $file['tmp_name'];
	$content = strip_tags(nl2br($_POST['content']));

	if ($file_name!="" && ($file_type="image/jpeg"||$file_type="image/png"||$file_type="image/gif")&&$file_size<=104857645454) {
		if (move_uploaded_file($file_path,'images/'.$file_name)) {
			$query = mysql_query("UPDATE home SET image='images/$file_name' WHERE text='$content'");
			if ($query==true) {
				print "<script>alert('Обновено');</script>";
			}
			else{
				print "<script>alert('nasrah se');</script>";
			}
		}
	}


	//$image=$_POST['img'];
	$query = "UPDATE home SET text='$content'";
	mysql_query($query);
	print "<script>alert('Обновено');</script>";
	header("refresh: 0.1; url=../admin.php"); 
}
}

	/*$SQL = "SELECT * FROM `home`";
	$result = mysql_query($SQL);

	if (isset($_POST['submit'])) {
		/*$content = $_POST['content'];
		$query = "UPDATE home SET text='$content'";
		mysql_query($query);
		print "pressed";
	}

print "<div id='welcome-page'>
<form action='home.php' method='POST'>";
	while ($db_field=mysql_fetch_assoc($result)) {
		print $db_field['image'];
		print "<textarea name='content'>".$db_field['text']."</textarea>";
	}
	print "<input type='submit' name='submit' value='Обнови'/></form></div>";
	mysql_close($db_handle);
}
else{
	print "db not found";
}

*/
 ?>

 <?php if (!isset($_POST['submit'])) : ?>
<div id='welcome-page'>
 <form action="admin/home.php" method="post" enctype="multipart/form-data">
 	<img src="admin/<?php print $post['image']; ?>" width="300" height="150" alt="">
 	<input type="file" name="file">
 	<textarea name="content"><?php print $post['text']; ?></textarea>
 	<input type="submit" name="submit" value="Обнови">
 </form>
</div>
<?php endif; ?>