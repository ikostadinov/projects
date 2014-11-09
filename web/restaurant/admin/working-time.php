<?php 
include '../config.php';
 

if ($db_found) {
  $SQL = "SELECT * FROM `working-time`";
  $result=mysql_query($SQL);
  
  print "<div id='working-time'><table><tr><td colspan='3'><h2>Работно време</h2></td></tr>";
  while ($row=mysql_fetch_assoc($result)) {
    $id = $row['ID'];
    print '<tr><td>'.$row['day'].'</td>';
    print '<td>Отваря:'." ".$row['open'].'<BR>Затваря: '
          ." ".$row['close'].'</td>';
    print '<td><a class="edit" target="_blank" href="admin/working-time-edit.php?ID='.$id.'">Редактирай</a></td></tr>';
  }
  print "</table></div>";

}






                       /* $SQL = "SELECT * FROM  `working-time` ";
                        $result=mysql_query($SQL);
   
   print "<div id='working-time'>
   <table><tr><td colspan='2'><h2>Работно време</h2></td></tr><form action='working-time.php' method='POST'>";                     
while ($db_field=mysql_fetch_assoc($result)) {
                           print "
                            <tr>
                                <td>".$db_field['day']."</td>
                                <td><input type='text' value=".$db_field['open']." maxlength='5' size='5'></td>
                                <td><input type='text' value=".$db_field['close']." maxlength='5' size='5'></td>
                            </tr>";
                           
                        }
                        print "<tr><td colspan='3' align='right'><input type='submit' value='Обнови'></td></tr></form></table></div>";
                       mysql_close($db_handle);
                   }
                       else{
                       	print "db not found";
                       }*/

 ?>
 