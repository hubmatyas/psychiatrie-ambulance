<?php

// Stránka na články

get_header();

?>

<div class="wrapper">

<h1 class="title">Aktuality</h1>

<div class="post-wrapper">
    <?php if (have_posts()) : while(have_posts()) : the_post(); ?><a class="post" href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail();?>
      <h2><?php the_title();?></h2>
      <?php the_excerpt(); ?>
      <span>Přečíst článek <strong>&raquo;</strong></span>
    </a><?php endwhile;endif;?>
</div>

  <div class="paginate">
    <?php echo paginate_links(array(
      'prev_text' => '<span>Předchozí</span>',
      'next_text' => '<span>Další</span>',
    )); ?>
  </div>



</div> <!-- wrapper -->

<?php get_footer();?>
