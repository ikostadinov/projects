<?php 
$pageTitle="Ресторант  |Начало";
include 'header.php';
 ?>
    		<div id="web-content">
    			<div id="main-content">
    				<?php 
    					if ($db_found) {
    						$SQL="SELECT * FROM `home`";
    						$result = mysql_query($SQL);
    						print "<p>";
    						while ($db_field=mysql_fetch_assoc($result)) {
    							print '<img src="admin/'.$db_field['image'].'"width="300" height="150" align="left"/>';
    							print "<p>".nl2br($db_field['text'])."</p>";
    						}
    						mysql_close($db_handle);
    						print "</p>";
    					}
    					else{
    						print "db not found";
    					}

    				 ?>
    			</div>
    			<?php include 'aside.php'; ?>                
    		</div>
        </div>
        <?php 

include 'footer.php';

 ?>