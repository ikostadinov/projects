$(document).ready(function(){

  $(".history_menu").mouseover(function() {  
    $(this).find("ul").stop(true, true).slideDown("slow");  
  });  
    
  $(".history_menu").mouseleave(function() {  
    $(this).find("ul").stop(true, true).hide();  
  });
  
  $(".culture_menu").mouseover(function() {  
    $(this).find("ul").stop(true, true).slideDown("slow");  
  });

  $(".culture_menu").mouseleave(function() {  
    $(this).find("ul").stop(true, true).hide();  
  });
  
  $(".education_menu").mouseover(function() {  
    $(this).find("ul").stop(true, true).slideDown("slow");
  }); 
  
  $(".education_menu").mouseleave(function() {  
    $(this).find("ul").stop(true, true).hide();
  });
});