<?php 

/*==========  Database connection  ==========*/

include '../config.php';

if ($db_found) {
	$SQL="SELECT * FROM reservation";
	$result=mysql_query($SQL);

	while ($db_field=mysql_fetch_assoc($result)) {
		print 
		"<article class='bookings'>
			<header><h2>Reservation#: ".$db_field['ID']."</h2></header>
			 First name: <span>".$db_field['name']."</span><BR>
			 Last name: <span>".$db_field['surname']."</span><BR>
			 Tel: <span>".$db_field['tel']."</span><BR>
			 Email: <span>".$db_field['email']."</span><BR>
			 Date: <span>".$db_field['date']."	</span><BR>
			 Time: <span>".$db_field['time']."	</span><BR>
			 Number of people: <span>".$db_field['nr-people']."	</span><BR>
		</article>"."\r\n";
	}

	mysql_close($db_handle);
}
else{
	print "DB not found";
	mysql_close($db_handle);
}

 ?>
 <!doctype html>
 <html>
     <head>
         <meta charset="utf-8">
         <meta name="description" content="">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="../css/admin-style.css">
         <script type="text/javascript" src="../engine1/jquery.js"></script>
         <script>
         $(document).ready(function(){
         	$('.bookings').fadeIn('slow');
         });
         </script>
     </head>
     <body>
 	
    
     </body>
 </html>