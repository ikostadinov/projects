<?php
session_start();
/*
if ($_SERVER['REQUEST_METHOD']=='POST') {
    if (isset($_POST['login'])) {
        $adminName=$_POST['adminName'];
        $adminPass=$_POST['adminPass'];

        if ($adminName=='admin' && $adminPass=='admin') {
            header("Location:admin.php");
        }
    }
}*/

include 'config.php';

if ($db_found) {
    $message="";
        if ($_SERVER['REQUEST_METHOD']=='POST') {
                if (isset($_POST['login'])) {
                    $username=$_POST['adminName'];
                    $password=$_POST['adminPass'];
                    

                 if (isset($username) && isset($password)) {
                     $query=mysql_query("SELECT * FROM users WHERE username='$username' AND password='$password'");
                     
                     $numrows= mysql_num_rows($query);

                     if ($numrows!=0) {
                        while ($row=mysql_fetch_assoc($query)) {
                            $dbusername=$row['username'];
                            $dbpassword=$row['password'];
                        }
                        if ($username==$dbusername&&$password==$dbpassword) {
                            $_SESSION['username']=$username;
                            header("Location: admin.php");
                        }
                     }
                     else{
                       $message= "Invalid credentials!";
                     }
                 }
            }
    }
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <link rel="stylesheet" href="css/admin-style.css">
        <script type="text/javascript" src="engine1/jquery.js"></script>
        <script>
        $(document).ready(function(){
        	$('form').animate({
        		marginTop:'150px'
        	},"slow");
        });
        </script>
    </head>
    <body>
        <div id="adminlogin">
		<form action="adminlogin.php" method="post">
		<input type="text" name="adminName" placeholder="Admin name" size="50"required><br>
		<input type="password" name="adminPass" placeholder="Admin password" size="50" required><br>
		<input type="submit" name="login" value="Login"><span id="message"><?php print $message; ?></span>
		</form>
        
    </div>
    </body>
   </html> 
