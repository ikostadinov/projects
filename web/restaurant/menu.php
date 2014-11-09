<?php 
$pageTitle="Ресторант  |Меню";
include 'header.php';


if ($db_found) {
    $SQL="SELECT * FROM `menu`";
    $result=mysql_query($SQL);
}
 ?>
    		<div id="web-content">
    			<div id="main-content">
                        <span class="all">Всички</span>
    					<span class="salads">Салати</span>
                        <span class="main-dishes">Основни</span>
                        <span class="desserts">Десерти</span>
                        <br>
                        <hr>
                        <?php while ($db_field=mysql_fetch_assoc($result)) : ?>
                        <?php if ($db_field['foodtype']=='salad') {
                            print "<article class='salad'>";
                        } 
                        elseif($db_field['foodtype']=='main-dish'){
                             print "<article class='main-dish'>";
                        }
                        elseif($db_field['foodtype']=='dessert'){
                             print "<article class='dessert'>";
                        }
                        ?>
                        <!--<article class="salad" >-->
                                 <img src="admin/<?php print $db_field['image']; ?>" width="100" height="100" title="<?php print $db_field['description']; ?>" align="left">
                                    <p><?php print $db_field['name'];?></p>
                                    <p>Грамаж: <?php print $db_field['weight']."гр"; ?></p>
                                    <p>Цена: <?php print $db_field['price']."лв"; ?></p>
                        <?php print "</article>"; ?>
                        <!--</article>-->

                         <!--<article class="main-dish">
                                 <img src="img/menu/product2.jpg"  align="left" >
                                    <p>Описание: Пилешки бутчета</p>
                                    <p>Грамаж: 300гр</p>
                                    <p>Цена: 7лв</p>
                        </article>

                        <article class="main-dish" >
                                 <img src="img/menu/product3.jpg" width="100" height="100" align="left">
                                    <p>Описание: Мусака</p>
                                    <p>Грамаж: 300гр</p>
                                    <p>Цена: 4,50лв</p>
                        </article>

                        <article class="dessert">
                                 <img src="img/menu/product4.jpg" width="100" height="100" align="left">
                                    <p>Описание: Шоколадово суфле</p>
                                    <p>Грамаж: 150гр</p>
                                    <p>Цена: 2,50лв</p>
                        </article>-->
                        <?php endwhile; ?>
                        <!--<table>
                        

    						<tr>
    							<div class="salasadd" style="display:none;">
                                     <td><img src="img/product1.jpg"></td>
    							     <td>Описание: Плодова салата<p class="weight">Грамаж: 250гр</p>
                                     <p class="price">Цена: 5лв</p></td></div>
    							

                                <td><img src="img/product2.jpg"></td>
    							<td><p class="description">Описание: Пилешки бутчета</p><p class="weight">Грамаж: 300гр</p><p class="price">Цена: 7лв</p></td>
    						</tr>
    					</table>-->
                 	</div>
    			<?php include 'aside.php'; ?>   
            </div>             
        </div>
        <?php 

include 'footer.php';

 ?>