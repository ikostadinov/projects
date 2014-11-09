<?php 

require 'config.php';

 ?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <link rel="stylesheet" href="css/lightbox.css"> 
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/custom.js"></script>        
        <script src="js/modernizr.custom.js"></script>
        <script src="js/date.js"></script>

        <script>
        $(document).ready(function(){
            $('.show').click(function(){
                $('#booking').animate({
                    marginLeft: '200px'
                },'slow');   
            });

             $('.hide').click(function(){
                $('#booking').animate({
                    marginLeft: '-200px'
                },'slow');   
            });
        });

        </script>
    </head>
    <body>
    	<div id="wrapper">
    		<header id="web-header">
                <div id="logo">
                   <img src="http://icons.iconarchive.com/icons/dapino/summer-holiday/256/hotel-icon.png" width="150" height="150" alt="">
                </div>
    			<nav id="web-nav">
					<ul>
                        <?php 
                        if ($page=='index.php') {
                           print '<li><a href="index.php" class="active">Home</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="prices.php">Prices</a></li>
                        <li><a href="contacts.php">Contacts</a></li>';
                        }
                        elseif ($page=='gallery.php') {
                           print '<li><a href="index.php">Home</a></li>
                        <li><a href="gallery.php"  class="active">Gallery</a></li>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="prices.php">Prices</a></li>
                        <li><a href="contacts.php">Contacts</a></li>';
                        }
                        elseif ($page=='about.php') {
                           print '<li><a href="index.php">Home</a></li>
                        <li><a href="gallery.php"  >Gallery</a></li>
                        <li><a href="about.php" class="active">About us</a></li>
                        <li><a href="prices.php">Prices</a></li>
                        <li><a href="contacts.php">Contacts</a></li>';
                        }
                        elseif ($page=='prices.php') {
                           print '<li><a href="index.php">Home</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="prices.php"   class="active">Prices</a></li>
                        <li><a href="contacts.php">Contacts</a></li>';
                        }
                        elseif ($page=='contacts.php') {
                           print '<li><a href="index.php">Home</a></li>
                        <li><a href="gallery.php" >Gallery</a></li>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="prices.php">Prices</a></li>
                        <li><a href="contacts.php"  class="active">Contacts</a></li>';
                        }
                        elseif ($page==''){
                        print '<li><a href="index.php">Home</a></li>
                        <li><a href="gallery.php" >Gallery</a></li>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="prices.php">Prices</a></li>
                        <li><a href="contacts.php">Contacts</a></li>';
                        }
                         ?>
						
					</ul>
    			</nav>
    			<div id="slider">
                    <div id="cbp-fwslider" class="cbp-fwslider">
                <ul>
                    <li><a href="#"><img src="http://hotels.iberostar.com/public/system/html_items/16218/grand_hotel_page/galerry_grand-hotel-el-mirador-introduction-hotels-image-3.jpg?1339510308" width="960" height="400" alt=""></a></li>
                    <li><a href="#"><img src="http://www.thonhotels.com/Thonhotels/Hoteller/Belgia/Thon_Hotel_EU/galleri/thon-hotel-eu-breakfast-1.jpg" width="960" height="400"/></a></li>
                    <li><a href="#"><img src="http://ad009cdnb.archdaily.net/wp-content/uploads/2012/12/50dca45db3fc4b323000019d_hotel-spa-nauroyal-gcp-arquitetos_imagem-01-1000x705.jpg" width="960" height="400"/></a></li>
                    <li><a href="#"><img src="http://media2.valamar.com/CmsMedia/Objekti/Rabac/Albona/topici/Albona-Hotel-and-Residence.jpg" width="960" height="400"/></a></li>
                    <li><a href="#"><img src="http://www.hotel-kleptuza.com/wp-content/themes/hotelkleptuza/images/front4_1400x426.jpg" width="960" height="400"/></a></li>
                </ul>
            </div>
        </div>
        <script src="js/jquery.cbpFWSlider.js"></script>
        <script>
            $( function() {

                /*
                - how to call the plugin:
                $( selector ).cbpFWSlider( [options] );
                - options:
                {
                    // default transition speed (ms)
                    speed : 500,
                    // default transition easing
                    easing : 'ease'
                }
                - destroy:
                $( selector ).cbpFWSlider( 'destroy' );
                */

                $( '#cbp-fwslider' ).cbpFWSlider();
                $( '#cbp-fwslider' ).cbpFWSlider('interval');

            } );
        </script>		
    		
    		</header>