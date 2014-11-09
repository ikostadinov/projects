  $(document).ready(function(){
            $('.salads').click(function(){
                $('.main-dish').hide("fast");
                $('.dessert').hide("fast");
                $('.salad').fadeIn("slow");                
            });

             $('.main-dishes').click(function(){
                $('.salad').hide("fast");
                $('.dessert').hide("fast");
                $('.main-dish').fadeIn("slow");                
            });

             $('.desserts').click(function(){
                $('.salad').hide("fast");
                $('.main-dish').hide("fast");
                $('.dessert').fadeIn("slow");                
            });

              $('.all').click(function(){
                $('.salad').fadeIn("slow");
                $('.main-dish').fadeIn("slow");
                $('.dessert').fadeIn("slow");                
            });
        });