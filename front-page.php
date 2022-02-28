<?php get_header(); ?>

  <header>
    <div class="wrapper">
      <h1 class="title"><?php echo get_theme_mod('landing-title'); ?></h1>
      <h2 class="subtitle"><?php echo get_theme_mod('landing-subtitle'); ?></h2>
    </div>
  </header>
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

  <section id="greetings">
    <div class="wrapper">
      <div class="first-member">
        <h3>Jste u nás poprvé?</h3>
        <p>Využijte našeho kontaktního formuláře <a href="/napiste-nam">zde</a>.<br>
           Brzy se s vámi spojíme!</p>
        <a class="btn" href="/napiste-nam">Napište nám</a>
      </div>
      <div class="existing-member">
        <h3>Pro pacienty</h3>
        <p>Kontakt na vašeho terapeuta/lékaře najdete <a href="/kontakt">zde</a>.<br>
        Více o ordinačních hodinách zjistíte <a href="/ordinacni-hodiny">zde</a>.</p>
        <a class="btn" href="/kontakt">Kontakt</a><a class="btn" href="/ordinacni-hodiny">Ordinační hodiny</a>
      </div>
      <p class="notice">Naši zaměstnanci během svých ordinačních hodin nemusí být vždy na příjmu, doporučujeme tedy vyplnění kontaktního formuláře nebo SMS</p>
    </div>
  </section>

  <section class="dashboard">
    <div class="wrapper">
      <h4 class="commonTitle">O nás &ndash;&nbsp;Psychiatrie&ndash;Ambulance s.r.o.</h4>
      <ul>
        <li>
          <img width="200" height="200" src="/wp-content/themes/psychiatric/res/svg/icons/brain.svg" alt="Ikona - Poskytujeme psychiatrickou, psychologickou a psychoterapeutickou péči.">
          <p>Poskytujeme psychiatrickou, psychologickou a&nbsp;psychoterapeutickou péči.</p>
        </li>
        <li>
          <img width="200" height="200" src="/wp-content/themes/psychiatric/res/svg/icons/partners.svg" alt="Ikona - Jsme partnery všech zdravotních pojišťoven a partneři CDZ Plzeň">
          <p>Jsme partnery všech zdravotních pojišťoven a&nbsp;partneři CDZ Plzeň</p>
        </li>
        <li>
          <img width="200" height="200" src="/wp-content/themes/psychiatric/res/svg/icons/insurance.svg" alt="Ikona - Všechny naše výkony jsou hrazeny zdravotními pojišťovnami">
          <p>Všechny naše výkony jsou hrazeny zdravotními pojišťovnami</p>
        </li>
        <li>
          <img width="200" height="200" src="/wp-content/themes/psychiatric/res/svg/icons/ambulance.svg" alt="Ikona - Pracujeme ve čtyřech ambulancích a péči poskytuje našich pět lékařů">
          <p>Pracujeme ve čtyřech ambulancích a&nbsp;péči poskytuje našich pět lékařů</p>
        </li>
        <li>
          <img width="200" height="200" src="/wp-content/themes/psychiatric/res/svg/icons/capacity.svg" alt="Ikona - Díky naší kapacitě můžeme registrovat nové pacienty">
          <p>Všichni naši zaměstnanci mají dlouholeté zkušenost ve svém oboru</p>
        </li>
      </ul>
    </div>
  </section>

<section class="location">
	<div class="wrapper">
    <h5 class="commonTitle">Kde nás najdete?</h5>
  	<div id="map"></div>
  </div>
</section>


<?php get_footer(); ?>
