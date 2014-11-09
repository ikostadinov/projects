$(document).ready(function(){
                          $("#content").load('admin/home.php');

        		$('.reservations').click(function(){
        			$("#content").load('admin/reservations.php');
        		});

        		$('.menu').click(function(){
        			$("#content").load('admin/menu.php');
        		});

        		$('.gallery').click(function(){
        			$("#content").load('admin/gallery.php');
        		});

        		$('.working-time').click(function(){
        			$("#content").load('admin/working-time.php');
        		});

                $('.home-page').click(function(){
                    $("#content").load('admin/home.php');
                 });



        	});