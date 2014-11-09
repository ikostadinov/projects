<?php 
$pageTitle="Ресторант  |Контакти";

include 'header.php';

$usermessage = '';

if (isset($_POST["submit"])) {
  if (isset($_POST["from"])) {
    $from = addslashes($_POST["from"]); // sender
    $subject = addslashes($_POST["subject"]);
    $message = addslashes($_POST["message"]);
    // message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = wordwrap($message, 70);
    // send mail
    mail("admin@restaurant.fulba.com",$subject,$message,"From: $from\n");
    $usermessage =  "Thank you for sending us feedback";
  }
}

 ?>
    		<div id="web-content">
    			<div id="main-content">
                    <?php if (!isset($_POST['submit'])) : ?>
    				<form action="contacts.php" method="POST">
    					<label for="name">Относно:</label><br>
    					<input type="text" name="subject" id="name" required><br>
    					<label for="email">Email:</label><br>
    					<input type="email" name="from" id="email" required><br>
    					<label for="comment">Коментар: </label><br>
    					<textarea name="message" id="comment" cols="50" rows="15" required></textarea><br>
    					<input type="submit" value="Изпрати" name="submit">
    				</form>
                    <?php endif; ?>
                    <?php print $usermessage; ?>
				</div>
    			<?php include 'aside.php'; ?>                
    		</div>
        </div>
        <?php 

include 'footer.php';

 ?>