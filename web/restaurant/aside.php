                <?php 
include 'config.php';
 ?>
                <?php                 
                 $today=date('Y-m-d', time()+86400);
                 if (isset($_POST['reserve'])) {
                 $name=addslashes($_POST['name']);
                 $surname=addslashes($_POST['surname']);
                 $tel=addslashes($_POST['tel']);
                 $email=addslashes($_POST['email']);
                 $date=$_POST['date'];
                 $time=$_POST['hour'].$_POST['minutes'].'00';
                 $nr_people=$_POST['nr_people'];
                     if ($db_found) {
                         $SQL="INSERT into reservation(name,surname,tel,email,date,time,`nr-people`)
                          VALUES('$name','$surname','$tel','$email','$date','$time','$nr_people')";
                        $result = mysql_query($SQL);

                       $message = "Dear Mrs/Mr $surname,\n you have successfully reserved a table on $date at ".$_POST['hour'].":".$_POST['minutes']."h for $nr_people people\n\nEnjoy your meal!";
                        mysql_close($db_handle);
                        mail($email, 'Reservation', $message,"From: Reastaurant Reservation");
                         print "<script>alert('Успешна резервация! Очакваме ви!');</script>";
                         header("refresh: 0.1; url=index.php"); 
						 
						 require('fpdf17/fpdf.php');

class PDF extends FPDF
{
function Header()
{
$this->SetFont('Arial','B',12);
$this->Ln(1);
}
function Footer()
{
$this->SetY(-15);
$this->SetFont('Arial','I',8);
$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
function ChapterTitle($num, $label)
{
$this->SetFont('Arial','',12);
$this->SetFillColor(200,220,255);
$this->Cell(0,6,"$num $label",0,1,'L',true);
$this->Ln(0);
}
function ChapterTitle2($num, $label)
{
$this->SetFont('Arial','',12);
$this->SetFillColor(249,249,249);
$this->Cell(0,6,"$num $label",0,1,'L',true);
$this->Ln(0);
}
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->SetTextColor(32);
$pdf->Cell(0,5,'Restaurant Name',0,1,'R');
$pdf->Cell(0,5,'Restaurant Address',0,1,'R');
$pdf->Cell(0,5,'Restaurant Email',0,1,'R');
$pdf->Cell(0,5,'Restaurant Tel',0,1,'R');
$pdf->Cell(0,30,'',0,1,'R');
$pdf->SetFillColor(200,220,255);
$pdf->ChapterTitle('Reservation Date ',$date.", ".$_POST['hour'].":".$_POST['minutes']);
$pdf->Cell(0,20,'',0,1,'R');
$pdf->SetFillColor(224,235,255);
$pdf->SetDrawColor(192,192,192);
$pdf->Cell(70,7,'Name',1,0,'L',1);
$pdf->Cell(50,7,'Phone',1,0,'L',1);
$pdf->Cell(40,7,'Nr of people',1,1,'L',1);
$pdf->Cell(70,7,$name." ".$surname,1,0,'L',0);
$pdf->Cell(50,7,$tel,1,0,'C',0);
$pdf->Cell(40,7,$nr_people,1,1,'C',0);
$pdf->Cell(190,40,'Hope to see u soon!',0,0,'C');
$filename="reservations/reservation-".$name." ".$surname.", ".$date.", ".$time.".pdf";
$pdf->Output($filename,'F');


$fileatt = $filename; // Path to the file                  
$fileatt_type = "application/pdf"; // File Type  
$fileatt_name = $filename; // Filename that will be used for the file as the attachment  
$email_from = "restaurantname@restaurant.com"; // Who the email is from  
$email_subject = "Reservation"; // The Subject of the email  
$email_message = "Dear Mrs/Mr $surname,\n you have successfully reserved a table on $date at ".$_POST['hour'].":".$_POST['minutes']."h for $nr_people people\n\nEnjoy your meal!";
$headers = "From: ".$email_from;  
$file = fopen($fileatt,'rb');  
$data = fread($file,filesize($fileatt));  
fclose($file);  
$semi_rand = md5(time());  
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";  
    
$headers .= "\nMIME-Version: 1.0\n" .  
            "Content-Type: multipart/mixed;\n" .  
            " boundary=\"{$mime_boundary}\"";  
$email_message .= "This is a multi-part message in MIME format.\n\n" .  
                "--{$mime_boundary}\n" .  
                "Content-Type:text/html; charset=\"iso-8859-1\"\n" .  
               "Content-Transfer-Encoding: 7bit\n\n" .  
$email_message .= "\n\n";  
$data = chunk_split(base64_encode($data));  
$email_message .= "--{$mime_boundary}\n" .  
                  "Content-Type: {$fileatt_type};\n" .  
                  " name=\"{$fileatt_name}\"\n" .  
                  //"Content-Disposition: attachment;\n" .  
                  //" filename=\"{$fileatt_name}\"\n" .  
                  "Content-Transfer-Encoding: base64\n\n" .  
                 $data .= "\n\n" .  
                  "--{$mime_boundary}--\n";  
$ok = @mail($email, $email_subject, $email_message, $headers);  
if($ok) { 
echo "<font face=verdana size=2><center>You file has been sent<br> to the email address you specified.<br> 
Make sure to check your junk mail!<br>
Click <a href=\"#\" onclick=\"history.back();\">here</a> to return to mysite.com.</center>";
} else {  
die("Sorry but the email could not be sent. Please go back and try again!");  
//mail($email, 'Reservation', $message,"From: Reastaurant Reservation");


                     }
                     else
                     {
                        print "db not found";
                     }
                 }


                 ?>
                <aside id="web-aside">
                    <?php if (!isset($_POST['reserve'])) : ?>
    				<header><h2>Резервация</h2></header>
    				<form action="aside.php" method="POST">
                        <input type="text" placeholder="Име" name="name"  required>
        				<input type="text" placeholder="Фамилия" name="surname" required>
        				<input type="tel" placeholder="Телефон" name="tel" pattern="\d*" required>
        				<input type="email" placeholder="Email" name="email" required>
        				<input type="date" name="date" value="<?php print $today; ?>" min="<?php print $today;?>" required><br>
        				<?php
                            
                            print "Час: <select name='hour'>";
                            for ($i=10; $i <23; $i++) { 
                                print "
                                <option>".$i."</option>";   
                            }
                            print "</select>"."\t".":"."\t";

                            print "<select name='minutes'>";
                            for ($i=0; $i<60; $i+=15) { 
                                if ($i==0) {
                                    $i="00";
                                }
                                print"
                                <option>".$i."</option>";
                            }
                            print "</select><br>";

                            print"Брой места: <select name='nr_people'>";
                            for ($i=1; $i <11 ; $i++) { 
                                print"
                                <option>".$i."</option>";
                            }
                            print "</select>";
                            ?>
                            
   
        				<input type="submit" name="reserve" value="Резервирай">
                    </form>
                <?php endif; ?>
    			</aside>