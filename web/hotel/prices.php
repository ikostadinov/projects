<?php 
$page = 'prices.php';
include 'includes/header.inc.php';

$message = '';
$tomorrow=date('Y-m-d', time()+86400);
$dayaftertomorrow=date('Y-m-d', time()+172800);

if ($db_found) {
    
    if (isset($_POST['book'])) {
    
    $fname=addslashes($_POST['fname']);
    $lname=addslashes($_POST['lname']);
    $email=addslashes($_POST['email']);
    $phone=addslashes($_POST['phone']);
    $checkin=addslashes($_POST['inDay']);
    $checkout=addslashes($_POST['outDay']);
    $type=addslashes($_POST['type']);
    $package=addslashes($_POST['package']);

    $query = "INSERT INTO reservation(fname,lname,email,phone,checkin,checkout,type,package) VALUES('$fname','$lname','$email','$phone','$checkin','$checkout','$type','$package')";

    $result = mysql_query($query);

    /*$countsingle = mysql_query("SELECT COUNT(type) FROM reservation WHERE type=1");

    $countdouble = mysql_query("SELECT COUNT(type) FROM reservation WHERE type=2");

    $counttriple = mysql_query("SELECT COUNT(type) FROM reservation WHERE type=3");

    $countappartment = mysql_query("SELECT COUNT(type) FROM reservation WHERE type=4");

    while ($row=mysql_fetch_assoc($countsingle)) {
           
        print "Single rooms:".20-.$row['COUNT(type)'];
    }

    while ($row=mysql_fetch_assoc($countdouble)) {
        print "Double rooms: ".$row['COUNT(type)'];
    }

    while ($row=mysql_fetch_assoc($counttriple)) {
        print "Triple rooms: ".$row['COUNT(type)'];
    }

    while ($row=mysql_fetch_assoc($countappartment)) {
        print "Appartments: ".$row['COUNT(type)'];
    }
*/


    $message="Successful reservation, please check your email <b>".
    $email."</b>!";
	
	$email_message = "Dear Mrs/Mr $lname,\n you have successfully reserved a room($type), during the period $checkin - $checkout!";
	
	mail($email, 'Reservation', $email_message,"From: Hotel Reservation");
                      


}

}



 ?>
    		<div id="main-content">
    			<div id="price">
                <table id="prices">
                    <tr>
                        <th>Room</th>
                        <th>Price</th>
                        <th>Night/<br>Breakfast/<br>Lunch</th>
                        <th>Night/<br>Breakfast/<br>Dinner</th>
                    </tr>
                    <tr>
                        <td>Single</td>
                        <td>€40</td>
                        <td>€50</td>
                        <td>€55</td>
                    </tr>
                    <tr>
                        <td>Double</td>
                        <td>€80</td>
                        <td>€90</td>
                        <td>€95</td>
                    </tr>
                    <tr>
                        <td>Triple/3ppl</td>
                        <td>€120</td>
                        <td>€130</td>
                        <td>€135</td>
                    </tr>
                    <tr>
                        <td>Appartment/4ppl</td>
                        <td>€160</td>
                        <td>€170</td>
                        <td>€175</td>
                    </tr>         
                </table>
                <div id="amount">
                <p>NIGHTS: <span class="nights">1</span></p>
                <p>TOTAL: <span class="sum">€40</span> </p>
            </div>
    	</div>
            <aside id="reservation">
                   <div id="booking">
                     <?php if (!isset($_POST['book'])) : ?>
                <form action="" method="POST">
                    <input type="text" name="fname" placeholder="First name" required autofocus><br/>
                    <input type="text" name="lname" placeholder="Last name" required><br/>
                    <input type="email" name="email" placeholder="Email" required><br/>
                    <input type="tel" name="phone" placeholder="Phone number" required><br/>
                    <label for="iday">Check in:</label><br/>
                    <input type="date" id="iday" value="<?php print $tomorrow; ?>" min="<?php print $tomorrow;?>" name="inDay" required><br/>
                    <label for="oday">Check out:</label><br/>
                    <input type="date" id="oday" value="<?php print $dayaftertomorrow; ?>" min="<?php print $dayaftertomorrow; ?>" max="2014-12-31" name="outDay" required><br/>
                    <label for="type">Type:</label><br>
                    <select name="type" id="type">
                        <option value="1" selected>Single</option>
                        <option value="2">Double</option>
                        <option value="3">Triple</option>
                        <option value="4">Appartment</option>
                    </select>
                    <br>
                    <label for="type">Package:</label>
                    <br>
                    <select name="package" id="package">
                        <option value="1" selected>Night</option>
                        <option value="2">Night/Breakfast/Lunch</option>
                        <option value="3">Night/Breakfast/Dinner</option>
                    </select>
                    <script>

                        $(function(){
                            $('#iday, #oday, #type, #package').change(function(){
                          var date1= new Date($('#iday').val());
                          var date2= new Date($('#oday').val());

                         var diff_date = Math.round((date2 - date1)/86400000);
                          
                         if (date1>date2 || diff_date==0) {
                            $("#bookBtn").hide('fast');
                            $('.nights').text("INCORRECT DATES");
                            $('.sum').hide('fast');
                         }
                         else{
                          $('.nights').text(diff_date).fadeIn('slow');
                            $("#bookBtn").fadeIn('fast');                
                      
                       
                            var val=$('#type').val();
                            var val2=$('#package').val();
                            //SINGLE + PACKAGES
                            if (val == 1 && val2 ==1) {
                                $('.sum').fadeOut();
                                $('.sum').text('€'+(40*diff_date)).fadeIn();
                            }
                            else if (val ==1 && val2==2) {
                                $('.sum').fadeOut();
                                $('.sum').text('€'+(50*diff_date)).fadeIn();
                            }
                            else if (val ==1 && val2==3) {
                                $('.sum').fadeOut();
                                $('.sum').text('€'+(55*diff_date)).fadeIn();
                            };
                            //DOUBLE + PACKAGES
                            if (val == 2 && val2 ==1) {
                                $('.sum').fadeOut();
                                $('.sum').text('€'+(80*diff_date)).fadeIn();
                            }
                            else if (val ==2 && val2==2) {
                                $('.sum').fadeOut();
                                $('.sum').text('€'+(90*diff_date)).fadeIn();
                            }
                            else if (val ==2 && val2==3) {
                                $('.sum').fadeOut();
                                $('.sum').text('€'+(95*diff_date)).fadeIn();
                            };
                            //TRIPLE + PACKAGES
                            if (val == 3 && val2 ==1) {
                                $('.sum').fadeOut();
                                $('.sum').text('€'+(120*diff_date)).fadeIn();
                            }
                            else if (val ==3 && val2==2) {
                                $('.sum').fadeOut();
                                $('.sum').text('€'+(130*diff_date)).fadeIn();
                            }
                            else if (val ==3 && val2==3) {
                                $('.sum').fadeOut();
                                $('.sum').text('€'+(135*diff_date)).fadeIn();
                            };
                            //APPARTMENT + PACKAGES
                            if (val == 4 && val2 ==1) {
                                $('.sum').fadeOut();
                                $('.sum').text('€'+(160*diff_date)).fadeIn();
                            }
                            else if (val ==4 && val2==2) {
                                $('.sum').fadeOut();
                                $('.sum').text('€'+(170*diff_date)).fadeIn();
                            }
                            else if (val ==4 && val2==3) {
                                $('.sum').fadeOut();
                                $('.sum').text('€'+(175*diff_date)).fadeIn();
                            }};

                        });
                    });
                    </script>
                    <input type="submit" name="book" id="bookBtn" value="Book Now">
                 </form>
                    <?php endif; ?>
                    <?php print $message; ?>
         </div>
            </aside>
                </div>
<?php 

include 'includes/footer.inc.php';

 ?>