<?php 
session_start();
include 'config.php';
$pageTtile="Ресторант |Админ панел";

$session_username= $_SESSION['username'];

if(!isset($session_username))
{
    header("Location: index.php");
}

 ?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php print $pageTtile; ?></title>
        <link rel="stylesheet" href="css/admin-style.css">
        <script type="text/javascript" src="engine1/jquery.js"></script>
        <script type="text/javascript" src="js/load.js"></script>
        <script>
        $(document).ready(function(){
            $('aside').animate({marginLeft:'0'},"slow");
            $('#top-art').animate({marginTop:'0'},"slow");
        });

        </script>
    </head>
    <body>
        <aside id="left-aside">
        	<a href="#" class="reservations"><img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSu_zssgFasJy1E4RXfYDsMjrKHN1GZXmR5JSldeUFpj-tNJuFW6A" alt="reservations" title="Резервации"></a><br>
        	<a href="#" class="menu"><img src="http://www.alexhost.ru/wp-content/uploads/2014/05/vintage-menu-design_34-60441.jpg?00767a" alt="menu" title="Меню"></a><br>
        	<a href="#" class="gallery"><img src="http://www.fincacomares.com/images/gallery/css3-gallery.jpg" alt="gallery" title="Галрия"></a><br>
        	<a href="#" class="working-time"><img src="http://myebook.bg/wp-content/uploads/2012/05/e-book_worktime.png" alt="working time" title="Работно време"> </a>  <br>     	
            <a href="#" class="home-page"><img src="" alt="home page" title="Начална страница"> </a> 
        </aside>
        <article id="top-art">
                <span>Hello, <?php print $_SESSION['username'];?><br><a href="logout.php">Log out</a><br><a href="index.php" target="_blank">View site</a></span>
            </article>
        <div id="content">
            
        </div>
    </body>
</html>