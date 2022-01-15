<?php

get_header();

 ?>


 <div class="wrapper">


   <?php
   if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content();
   endwhile; endif;
   ?>





 </div> <!-- wrapper -->



 <?php get_footer();?>
