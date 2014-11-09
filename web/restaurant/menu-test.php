<?php 

include 'config.php';

if ($db_found) {
	$SQL="SELECT * FROM `menu`";
	$result=mysql_query($SQL);
}

 ?>
 <?php while ($db_field=mysql_fetch_assoc($result)) : ?>
<article class="salad" >
 <img src="admin/<?php print $db_field['image']; ?>" width="200" height="150" align="left">
    <p>Описание: <?php print $db_field['name']; ?></p>
    <p>Съдържание: <?php print $db_field['description']; ?></p>
     <p>Грамаж: <?php print $db_field['weight']."гр"; ?></p>
     <p>Цена: <?php print $db_field['price']."лв"; ?></p>
</article>
<?php endwhile; ?>