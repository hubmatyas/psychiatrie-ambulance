<?php get_header(); ?>

<div class="wrapper">
  <section class="landing">

    <h1 class="title"><?php echo get_theme_mod('landing-title'); ?></h1>
    <h2 class="subtitle"><?php echo get_theme_mod('landing-subtitle'); ?></h2>

  </section>
	<!--
	<section class="last-posts-front">
		<h3 class="commonTitle">Přečtěte si náš poslední článek</h3>
	<div class="post-wrapper">
    <?php
        $args = array( 'numberposts' => 3, 'order'=> 'DESC', 'orderby' => 'publish_date' );
        $postslist = get_posts( $args );
        foreach ($postslist as $post) :  setup_postdata($post); ?><a class="post" href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail();?>
      <h2><?php the_title();?></h2>
      <?php the_excerpt(); ?>
      <span>Přečíst článek <strong>&raquo;</strong></span>
    </a><?php endforeach; ?>
</div>
</section>
	-->
	 
  <?php
   if (have_posts()) : while(have_posts()) : the_post();
   the_content();
   endwhile;endif;
  ?>

    <h3 class="commonTitle">O nás - Psychiatrie - Ambulance s.r.o.</h3>
  <section class="dashboard">
    <div>
      <img width="200" height="200" src="/wp-content/themes/psychiatric/res/svg/icons/brain.svg" alt="Ikona - Poskytujeme psychiatrickou, psychologickou a psychoterapeutickou péči.">
      <p>Poskytujeme psychiatrickou, psychologickou a psychoterapeutickou péči.</p>
    </div>
    <div>
      <img width="200" height="200" src="/wp-content/themes/psychiatric/res/svg/icons/partners.svg" alt="Ikona - Jsme partnery všech zdravotních pojišťoven a partneři CDZ Plzeň">
      <p>Jsme partnery všech zdravotních pojišťoven a partneři CDZ Plzeň</p>
    </div>
    <div>
      <img width="200" height="200" src="/wp-content/themes/psychiatric/res/svg/icons/insurance.svg" alt="Ikona - Všechny naše výkony jsou hrazeny zdravotními pojišťovnami">
      <p>Všechny naše výkony jsou hrazeny zdravotními pojišťovnami</p>
    </div>
    <div>
      <img width="200" height="200" src="/wp-content/themes/psychiatric/res/svg/icons/capacity.svg" alt="Ikona - Díky naší kapacitě můžeme registrovat nové pacienty">
      <p>Díky naší kapacitě můžeme registrovat nové pacienty</p>
    </div>
    <div>
      <img width="200" height="200" src="/wp-content/themes/psychiatric/res/svg/icons/ambulance.svg" alt="Ikona - Pracujeme ve čtyřech ambulancích a péči poskytuje našich pět lékařů">
      <p>Pracujeme ve čtyřech ambulancích a péči poskytuje našich pět lékařů</p>
    </div>
  </section>
	
	
	<h3 class="commonTitle">Kde nás najdete?</h3>

	<div id="map"></div>

</div> <!-- wrapper -->

<?php get_footer(); ?>
