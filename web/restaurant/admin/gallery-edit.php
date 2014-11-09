<?php 

include '../config.php';



if ($db_found) {
	$SQL = "SELECT * FROM `gallery`";
	$result=mysql_query($SQL);
	
	print "<table id='gallery-table'  width='700'>";
	while ($row=mysql_fetch_assoc($result)) {
		$id = $row['ID'];
		print '<tr><td><img src="admin/'.$row['photo'].'" width="100" height="100" /></td>';
		print '<td><a class="edit" target="_blank" href="admin/gallery-edit-item.php?ID='.$id.'">Редактирай</a></td>';
		print '<td><a class="edit" target="_blank" href="admin/gallery-delete-item.php?ID='.$id.'">Изтрий</a></td></tr>';
	}
	print "</table>";

}
mysql_close($db_handle);
 ?>
