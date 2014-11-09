<?php 
$pageTitle="Ресторант  |Галерия";

include 'header.php';
 ?>
    		<div id="web-content">
    			<div id="main-content">
    				<div class="image-row">
					<div class="image-set">
						<?php 

						if ($db_found) {
							$SQL = "SELECT * FROM gallery";
							$result = mysql_query($SQL);

							while ($row=mysql_fetch_assoc($result)) {
								print '<a class="example-image-link" href="admin/'.$row['photo'].'" data-lightbox="example-set" data-title=""><img class="example-image" src="admin/'.$row['photo'].'" alt=""/></a>';
							}
						}


						 ?>
					<!--<a class="example-image-link" href="img/demopage/rest1.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="img/demopage/rest1.jpg" alt=""/></a>
					<a class="example-image-link" href="img/demopage/rest2.jpg" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard."><img class="example-image" src="img/demopage/rest2.jpg" alt="" /></a>
					<a class="example-image-link" href="img/demopage/rest3.jpg" data-lightbox="example-set" data-title="The next image in the set is preloaded as you're viewing."><img class="example-image" src="img/demopage/rest3.jpg" alt="" /></a>
					<a class="example-image-link" href="img/demopage/rest4.jpg" data-lightbox="example-set" data-title="Click anywhere outside the image or the X to the right to close."><img class="example-image" src="img/demopage/rest4.jpg" alt="" /></a>-->
				</div>
				<script src="js/lightbox.js"></script>
			</div>
    			</div>
    			<?php include 'aside.php'; ?>                
    		</div>
        </div>
        <?php 

include 'footer.php';

 ?>