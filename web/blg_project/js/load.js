$(document).ready(function(){

  $(".antiquity").click(function(){
      $("#main-cont").load("antiquity.html");
  });

  $(".ages").click(function(){
      $("#main-cont").load("ages.html");
  });
  
  $(".renaissance").click(function(){
      $("#main-cont").load("renaissance.html");
  });
  
  $(".liberation_war").click(function(){
      $("#main-cont").load("liberation_war.html");
  });
  
  $(".drama_theatre").click(function(){
      $("#main-cont").load("drama_theatre.html");
  });
  
  $(".chamber_opera").click(function(){
      $("#main-cont").load("chamber_opera.html");
  });
  
  $(".museum").click(function(){
      $("#main-cont").load("museum.html");
  });
  
  $(".ensemble_pirin").click(function(){
      $("#main-cont").load("ensemble_pirin.html");
  });
  
  $(".youth_house").click(function(){
      $("#main-cont").load("youth_house.html");
  });
  
  $(".regional_library").click(function(){
      $("#main-cont").load("regional_library.html");
  });
  
  $(".universities").click(function(){
      $("#main-cont").load("universities.html");
  });
  
  $(".highschools").click(function(){
      $("#main-cont").load("highschools.html");
  });
  
  $(".schools").click(function(){
      $("#main-cont").load("schools.html");
  });
  
  $(".modernity").click(function(){
      $("#main-cont").load("modernity.html");
  });

  $(".future").click(function(){
      $("#main-cont").load("future.html");
  });

  $("#aub").click(function(){
      $("#main-cont").load("aub.html");
  });

  $("#swu").click(function(){
      $("#main-cont").load("swu.html");
  });

  $("#pmg").click(function(){
      $("#main-cont").load("pmg.html");
  });

  $("#eg").click(function(){
      $("#main-cont").load("eg.html");
  });

  $("#nhg").click(function(){
      $("#main-cont").load("nhg.html");
  });

  $("#pgi").click(function(){
      $("#main-cont").load("pgi.html");
  });

  $("#bpg").click(function(){
      $("#main-cont").load("bpg.html");
  });

  $("#pgto").click(function(){
      $("#main-cont").load("pgto.html");
  });

  $("#sch1").click(function(){
      $("#main-cont").load("sch1.html");
  });

  $("#sch2").click(function(){
      $("#main-cont").load("sch2.html");
  });

  $("#sch3").click(function(){
      $("#main-cont").load("sch3.html");
  });

  $("#sch4").click(function(){
      $("#main-cont").load("sch4.html");
  });

  $("#sch5").click(function(){
      $("#main-cont").load("sch5.html");
  });

  $("#sch6").click(function(){
      $("#main-cont").load("sch6.html");
  });

  $("#sch7").click(function(){
      $("#main-cont").load("sch7.html");
  });

  $("#sch8").click(function(){
      $("#main-cont").load("sch8.html");
  });

  $("#sch9").click(function(){
      $("#main-cont").load("sch9.html");
  });

  $("#abouttheauthor").click(function(){
      $("#main-cont").load("abouttheauthor.html");
  });
  
  $("#sitemap").click(function(){
      $("#main-cont").load("sitemap.html");
  });
  
  $(".mail").click(function(){
   	$('#modal_bg').bPopup({
	   contentContainer:'#modal_bg',
	   loadUrl: 'send.php'
   	});
  });
});

function show2(){
if (!document.all&&!document.getElementById)
  return
  thelement=document.getElementById? document.getElementById("tick2"): document.all.tick2
  var Digital=new Date()
  var hours=Digital.getHours()
  var minutes=Digital.getMinutes()
  var seconds=Digital.getSeconds()
  var dn="PM"
  if (hours<12)
    dn="AM"
  if (hours>12)
    hours=hours-12
  if (hours==0)
    hours=12
  if (minutes<=9)
    minutes="0"+minutes
  if (seconds<=9)
    seconds="0"+seconds
  var ctime=hours+":"+minutes+":"+seconds+" "+dn
  thelement.innerHTML=ctime
  setTimeout("show2()",1000)
}
window.onload=show2
