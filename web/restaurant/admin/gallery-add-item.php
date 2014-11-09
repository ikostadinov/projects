<?php 

include '../config.php';

if ($db_found) {
if (isset($_POST['submit'])) {

		$file = $_FILES['file'];
		$file_name=$file['name'];
		$file_type=$file['type'];
		$file_size=$file['size'];
		$file_path = $file['tmp_name'];

if ($file_name!="" && ($file_type="image/jpeg"||$file_type="image/png"||$file_type="image/gif")&&$file_size<=1073741824) {
		if (move_uploaded_file($file_path,'images/'.$file_name)) {
		$query="INSERT INTO gallery(photo) VALUES('images/$file_name')";
		$result = mysql_query($query) or die(mysql_error());
		if ($result==true) {
			print "<script>alert('Добавено!');</script>";
			header("refresh: 0.1; url=../admin.php");
		}
	}

}
}
}

?>

	
 <?php if (!isset($_POST['submit'])) : ?>
	<form action="admin/gallery-add-item.php" method='post' enctype="multipart/form-data">
	<table id='menu-item'>
		<tr>
			<td>Снимка: </td>
			<td><input type="file" name="file"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Добави"></td>
		</tr>
				</table>	
		</form>	
	
		<?php endif; ?>
		
