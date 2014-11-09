<?php 

include '../config.php';
$id=$_REQUEST['ID'];


if ($db_found) {


	
	$SQL = "SELECT * FROM `menu` WHERE ID='$id'";
	$result=mysql_query($SQL);
	$row = mysql_fetch_assoc($result);

	$name=$row['name'];
	$descr=$row['description'];
	$weight=$row['weight'];
	$price=$row['price'];
	$image =$row['image'];
	$type=$row['foodtype'];

	if (isset($_POST['save'])) {

		$name_save=$_POST['name'];
		$descr_save=$_POST['descr'];
		$weight_save=$_POST['weight'];
		$price_save=$_POST['price'];
		$type_save=$_POST['foodtype'];
		$file = $_FILES['file'];
		$file_name=$file['name'];
		$file_type=$file['type'];
		$file_size=$file['size'];
		$file_path = $file['tmp_name'];



	if ($file_name!="" && ($file_type="image/jpeg"||$file_type="image/png"||$file_type="image/gif")&&$file_size<=1073741824) {
		if (move_uploaded_file($file_path,'images/'.$file_name)) {
			$query = mysql_query("UPDATE menu SET  name='$name_save', description='$descr_save', weight='$weight_save', price='$price_save', image='images/$file_name', foodtype='$type_save' WHERE ID='$id'");
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
	else
	{
		$query = mysql_query("UPDATE menu SET  name='$name_save', description='$descr_save', weight='$weight_save', price='$price_save', foodtype='$type_save' WHERE ID='$id'");
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
mysql_close($db_handle);
 ?>
 <?php if(!isset($_POST['save'])) : ?>
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
		<tr><td>Изображение: </td>
			<td><img src="<?php print $image; ?>"  width="100" height="100" alt=""/><br><input type="file" name="file"></td>
		</tr>
		<tr>
			<td>Име: </td>
			<td>
				<input type="text" name="name" value="<?php print $name; ?>">
			</td>
		</tr>
		<tr>
			<td>Съдържание: </td>
			<td><input type="text" name="descr" value="<?php print $descr; ?>" size="50"></td>
		</tr>
		<tr>
			<td>Грамаж: </td>
			<td><input type="text" name="weight" value="<?php print $weight; ?>" size="4">г.</td>
		</tr>
		<tr>
			<td>Цена: </td>
			<td><input type="text" name="price" value="<?php print $price; ?>" size="4">лв.</td>
		</tr>
		<tr>
			<td>Вид: </td>
			<td><select name="foodtype">
			<?php 
			if ($type=='salad') {
				print "<option value='salad' selected>Салата</option>";
				print "<option value='main-dish'>Основно</option>";
				print "<option value='dessert'>Десерт</option>";

			}
			elseif ($type=='main-dish') {
				print "<option value='main-dish' selected>Основно</option>";
				print "<option value='salad'>Салата</option>";
				print "<option value='dessert'>Десерт</option>";
			}
			elseif ($type=='dessert') {
				print "<option value='dessert' selected>Десерт</option>";
				print "<option value='salad'>Салата</option>";
				print "<option value='main-dish'>Основно</option>";
			};
			 ?>
		</select></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="save" value="Обнови"></td>
		</tr>			
</table></form>
<?php endif; ?>



    </body>
</html>
 