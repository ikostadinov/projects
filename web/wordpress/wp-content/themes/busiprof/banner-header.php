<?php
  /*
   *Theme Name	: BusiProf
   * @file           banner-header.php
   * @package        Busiprof
   * @author         Priyanshu Mittal
   * @copyright      2013 Webriti
   * @license        license.txt
   * @filesource     wp-content/themes/Busiprof/banner-header.php
  */
  	get_header();
  	$current_options=get_option('busiprof_theme_options'); 
  ?>	<!-- Header top Slide -->
<div class="inner_top_mn">
  <div class="container">
    <div class="row-fluid about_space">
      <h2 class="about_head pull-left"><?php the_title(); ?><br /><span><?php bloginfo('description');?></span></h2>
    </div>
  </div>
</div>