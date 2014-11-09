<?php
    if(isset($_POST['send'])){

  $name = $_POST['fname'];
  $mail_from= $_POST['email'];
  $message = $_POST['message'];
          
    $header="from: $name<$mail_from>";

    $to = "emil12543@gmail.com";
  $send_contact = mail($to, $message, $header);

  if($send_contact){
  echo "We've recived your contact information";
  }
  else {
  echo "ERROR";
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
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
        <style>
            input[type=text], input[type=email], textarea{
                margin-top:20px;
                border-radius: 5px;
                border: 1px solid #ccc;
                box-shadow:0px 0px 2px #000;
                color: white;
                font-weight: bold;
                font-size:15px;

            }

            input[type=text], input[type=email]{
                height:40px;
                width: 250px;
                padding-left: 40px;
            }

            input[type=text]
            {
               background: #b5bdc8 url('images/user.png') 5px 4px no-repeat; 

            }
            
            input[type=text]:focus, input[type=email]:focus, textarea:focus
            {
               border: 1px solid #FF0000; 
               box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1) inset, 0 0 8px rgba(240, 0, 0, 0.8);
            }


             input[type=email]
            {
               background: #b5bdc8 url('images/email.png') 5px 4px no-repeat; 
            }

            textarea
            {
                background: #b5bdc8 url('images/speech.png') 5px 4px no-repeat; 
                width: 250px;
                padding-left: 40px;
            }

            input[type=submit], input[type=reset]
            {
                background: #cc0000; 
                color: white;
                margin-top: 10px;
                margin-right: 10px;
                width: 100px;
                height: 40px;
                border: 1px solid #ccc;
                box-shadow:0px 0px 2px #000;
                cursor: pointer;
            }

            #form {
            	border-radius: 5px;
            	box-shadow: 0px 0px 3px #000;
            	background: #cdcccc;
            	padding: 20px;
                width: 290px;
            }

        </style>
    </head>
    <body>
        <div id="form">
        <h2>Контакти</h2>
        <form action="" method="post">
        <input type="text" placeholder="Име" name="fname" required><br>
        <input type="email" placeholder="E-mail" name="email" required><br>
        <textarea name="message" id="" cols="30" rows="10" placeholder="Вашето съобщение..." required></textarea><br>
        <input type="submit" name="send" value="Изпрати">
        <input type="reset" name="reset" value="Изчисти">
        </form>
        </div>
    </body>
</html>