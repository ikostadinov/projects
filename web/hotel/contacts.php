<?php 
$page = 'contacts.php';
include 'includes/header.inc.php';

$usermessage = '';

if (isset($_POST["submit"])) {
  if (isset($_POST["from"])) {
    $from = addslashes($_POST["from"]); // sender
    $subject = addslashes($_POST["subject"]);
    $message = addslashes($_POST["message"]);
    // message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = wordwrap($message, 70);
    // send mail
    mail("admin@hotel.fulba.com",$subject,$message,"From: $from\n");
    $usermessage =  "Thank you for sending us feedback";
  }
}
?>
    		<div id="main-content">
    			<div id="address">
                <iframe width="600" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=202891482094519785015.0004e411d1e512b707ef6&amp;ie=UTF8&amp;t=m&amp;ll=42.015695,23.083069&amp;spn=0.007652,0.01457&amp;z=16&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps/ms?msa=0&amp;msid=202891482094519785015.0004e411d1e512b707ef6&amp;ie=UTF8&amp;t=m&amp;ll=42.015695,23.083069&amp;spn=0.007652,0.01457&amp;z=16&amp;source=embed" style="color:#cc5baa;text-align:left" target="_blank">Bigger map</a></small>
                <p>                    
                2700 Blagoevgrad <br>
                bul. Dimitar Solunski 20<br>
                phone: 073/88 16 96; 0879 260 360<br>
                e-mail: reception@bali-avm.com
                </p>
            </div>
            <div id="contact-form">
			<?php if (!isset($_POST['submit'])) : ?>
                <form method="post">
                    <input type="email" placeholder="Email" name="from" required size="30"><br>
                    <input type="text" placeholder="Subject" name="subject" required size="30"><br>
                    <textarea placeholder="Comment" rows="20" cols="30" name="message" required></textarea><br>
                    <input type="submit" name="submit" value="Send">
                </form>
				<?php endif; ?>
                <?php print $usermessage; ?>
            </div>
    		</div>
<?php 

include 'includes/footer.inc.php';

 ?>