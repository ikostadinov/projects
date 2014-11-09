<?php 

include '../config.php';

if ($db_found) {
	$SQL = "SELECT * FROM `menu`";
	$result=mysql_query($SQL);
	

	if (isset($_POST['submit'])) {
		$UID = $_REQUEST['ID'];
		$name=$_POST['name'];
		$description=$_POST['descr'];
		$weight=$_POST['weight'];
		$price=$_POST['price'];
		$type=$_POST['type'];
		$query="UPDATE menu SET name='$name', description='$description', weight='$weight', price='$price', type='$type' WHERE ID='$UID'";
		mysql_query($query) or die(mysql_error());
		print "<script>alert('Редактиран!');</script>";
		header("refresh: 0.1; url=../menu.php");
	}

}
 ?>
 <?php if (!isset($_POST['submit'])) : ?>
<?php while($db_field=mysql_fetch_assoc($result)) : ?>
	<?php print"<form action='admin/menu-edit-item.php' method='post'><table id='menu-item'>"; ?>
	
		<tr><td>Изображение: </td>
			<td><img src="admin/<?php print $db_field['image']; ?>"  width="100" height="100" alt=""><br><input type="file"></td>
		</tr>
		<tr>
			<td>Име: </td>
			<td>
				<input type="text" name="name" value="<?php print $db_field['name']; ?>">
			</td>
		</tr>
		<tr>
			<td>Съдържание: </td>
			<td><input type="text" name="descr" value="<?php print $db_field['description']; ?>" size="50"></td>
		</tr>
		<tr>
			<td>Грамаж: </td>
			<td><input type="text" name="weight" value="<?php print $db_field['weight']; ?>" size="4">г.</td>
		</tr>
		<tr>
			<td>Цена: </td>
			<td><input type="text" name="price" value="<?php print $db_field['price']; ?>" size="4">лв.</td>
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
			<td><input type="submit" name="submit" value="Обнови"></td>
		</tr>			
	<?php print "</table></form>"; ?>
<?php endwhile; ?>
<?php  endif; ?>
