            <footer id="web-footer">
    			<section>
    				<p>© Всички права запазени <?php print date('Y'); ?></p>
    			</section>
    			<section>
    				<header><h2>Ние на картата</h2></header>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2968.3230105457983!2d23.106158000000004!3d41.92891!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14aa5bfb7cae8c21%3A0x9ed5f9c5100492a3!2z0KDQtdGB0YLQvtGA0LDQvdGCIC0gItCf0YDQuNC60LDQt9C10L0g0LrRitGCIg!5e0!3m2!1sbg!2s!4v1404680210070" width="200" height="150" frameborder="0" style="border:0"></iframe>
    			</section>
    			<section>
    				<header><h2>Работно време</h2></header>
    				<?php 
                    if ($db_found) {
                        $SQL = "SELECT * FROM  `working-time` ";
                        $result=mysql_query($SQL);                        
                           print "
   <table>";                     
while ($db_field=mysql_fetch_assoc($result)) {
                           print "
                            <tr>
                                <td>".$db_field['day']."</td>
                                <td>".$db_field['open']."</td>
                                <td>".$db_field['close']."</td>
                            </tr>";
                           
                        }
                        print "</table>";

                        mysql_close($db_handle);
                    }
                    else
                    {
                        print "db not found";
                    }

                     ?>
    			</section>
    			<section>
    				<p>
    					<a href="https://www.google.com" target="_blank"><div class="go"></div></a>
                        <a href="https://www.twitter.com" target="_blank"><div class="tw"></div></a>
                        <a href="https://www.facebook.com" target="_blank"><div class="fb"></div></a>
    				</p>
    			</section>
    		</footer>
    </body>
</html>