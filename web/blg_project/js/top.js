$(document).ready(function(){
    $(window).scroll(function(){
        if($(window).scrollTop() > 150){
            $('.top').fadeIn("slow");   
        }

        if($(window).scrollTop() < 150){
            $('.top').fadeOut("slow");   
        }
    });

    $('.top').click(function(){
        $('html').animate({ scrollTop: 0 }, "slow");
    });

});