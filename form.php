<?php

// Template Name: Napište nám


get_header();

?>



<div class="wrapper">

  <h1 class="title">Napište nám</h1>

  <?php
  if ( have_posts() ) : while ( have_posts() ) : the_post();
   the_content();
  endwhile; endif;
  ?>



</div>

<?php get_footer(); ?>
