<?php
get_header();
 ?>


<div class="wrapper single-post">

  <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="wayback" >&#8592; Zpátky na zobrazení všech článků</a>

  <h1 class="title post-title"><?php the_title();?></h1>


  <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

    <div class="post-image" style="background: url('<?php echo get_the_post_thumbnail_url()?>'); background-repeat: no-repeat;background-position: top;background-attachment: fixed;"></div>
  
  <div class="post-content"><?php the_content(); ?></div>


  <?php endwhile;endif; ?>



  <a class="share" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo home_url($wp->request)?>" target="blank">
    <span class="facebook">
      <i class="fa fa-facebook"></i>
    </span>
    <p>Sdílejte tento článek na Facebooku!</p>
  </a>


</div>


<?php get_footer(); ?>
