<?php 

include '../config.php';

if ($db_found) {
if (isset($_POST['submit'])) {


		$name=$_POST['name'];
		$description=$_POST['descr'];
		$weight=$_POST['weight'];
		$price=$_POST['price'];
		$type=$_POST['type'];


		$file = $_FILES['file'];
		$file_name=$file['name'];
		$file_type=$file['type'];
		$file_size=$file['size'];
		$file_path = $file['tmp_name'];

if ($file_name!="" && ($file_type="image/jpeg"||$file_type="image/png"||$file_type="image/gif")&&$file_size<=1073741824) {
		if (move_uploaded_file($file_path,'images/'.$file_name)) {
		$query="INSERT INTO menu(name,description,weight,price,image,foodtype) VALUES('$name','$description','$weight','$price','images/$file_name','$type')";
		$result = mysql_query($query);
		if ($result==true) {
			print "<script>alert('Добавен!');</script>";
			header("refresh: 0.1; url=../menu.php");
		}
	}

}
}
}

?>

	
 <?php if (!isset($_POST['submit'])) : ?>
		<form action="admin/menu-add-item.php" method='post' enctype="multipart/form-data">
	<table id='menu-item'>
		<tr>
			<td>Изображение: </td>
			<td><input type="file" name="file"></td>
		</tr>
		<tr>
			<td>Име: </td>
			<td>
				<input type="text" name="name" value="">
			</td>
		</tr>
		<tr>
			<td>Съдържание: </td>
			<td><input type="text" name="descr" value="" size="50"></td>
		</tr>
		<tr>
			<td>Грамаж: </td>
			<td><input type="text" name="weight" value="" size="4">г.</td>
		</tr>
		<tr>
			<td>Цена: </td>
			<td><input type="text" name="price" value="" size="4">лв.</td>
		</tr>
		<tr>
			<td>Вид: </td>
			<td><select name="type">
			<option value="salad">Салата</option>
			<option value="main-dish">Основно</option>
			<option value="dessert">Десерт</option>
		</select></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Добави"></td>
		</tr>	
				</table>	
		</form>	

		<?php endif; ?>
		
