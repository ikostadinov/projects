<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <link rel="stylesheet" href="css/admin-style.css">
        <script>
                 $('.add-item').click(function(){
                    $("#menu-content").load('admin/gallery-add-item.php');
                 });

                $('.edit-item').click(function(){
                    $("#menu-content").load('admin/gallery-edit.php');
                 });

 </script>

         <style>
	
	a{
		color: white;
	}
</style>
    </head>
    <body>
       
       <a  href="#" class="add-item">Добави снимка</a> | <a  href="#" class="edit-item">Редактирай снимка</a>
       <div id="menu-content">
       	
       </div> 
       
    </body>
</html>


