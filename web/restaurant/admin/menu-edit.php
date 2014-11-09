<?php 

include '../config.php';



if ($db_found) {
	$SQL = "SELECT * FROM `menu`";
	$result=mysql_query($SQL);
	
	print "<table id='menu-table'  width='700'>";
	while ($row=mysql_fetch_assoc($result)) {
		$id = $row['ID'];
		print '<tr><td><img src="admin/'.$row['image'].'" width="100" height="100" title="'.$row['description'].'"/></td>';
		print '<td>'.$row['name'].'<BR>'
					.$row['weight'].'<BR>'
					.$row['price'].'</td>';
		print '<td><a class="edit" target="_blank" href="admin/menu-edit-item.php?ID='.$id.'">Редактирай</a></td>';
		print '<td><a class="edit" target="_blank" href="admin/menu-delete-item.php?ID='.$id.'">Изтрий</a></td></tr>';
	}
	print "</table>";

}
mysql_close($db_handle);
 ?>



