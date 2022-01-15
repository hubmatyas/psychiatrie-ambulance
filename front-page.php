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
	 

  <section class="dashboard">
    <h3 class="commonTitle">O nás - Psychiatrie - Ambulance s.r.o.</h3>
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
	<script
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUEVlByzT8CL183iWpsB3yKLbSfHZ4qFM&map_ids=54220ee84d2e31ca" async>
</script>
	<script>
		
    function initMap(){
      // Map options
      var options = {
        zoom:10,
        center:{lat:49.8179884,lng:13.3920277},
		  mapId: '54220ee84d2e31ca'
      }

      var map = new google.maps.Map(document.getElementById('map'), options);


      var markers = [
        {
          coords:{lat:49.7536835,lng:13.3769782},
              content:'<div class="map-box"><strong>Plzeň, Rondel</strong><p>Lochotínská 18, 301 00 Plzeň 1</p><a href="">Zobrazit v mapách google</a></div>'
        },
        {
          coords:{lat:49.7307896,lng:13.3986162},
          content:'<div class="map-box"><strong>Plzeň, Slovany</strong><p>Lochotínská 18, 301 00 Plzeň 1</p><a href="">Zobrazit v mapách google</a></div>'
        },
        {
          coords:{lat:49.8179884,lng:13.3920277},
          content:'<div class="map-box"><strong>Třemošná</strong><p>Zálužská 138, 330 11 Třemošná</p><a href="">Zobrazit v mapách google</a></div>'
        },
        {
          coords:{lat:49.9346361,lng:13.3992181},
          content:'<div class="map-box"><strong>Plasy</strong><p>Potoční 546, 331 01 Plasy</p><a href="">Zobrazit v mapách google</a></div>',
        }
      ];


      for(var i = 0;i < markers.length;i++){
        addMarker(markers[i]);
      }

      function addMarker(props){
        var marker = new google.maps.Marker({
          position:props.coords,
          map:map,
        });

        if(props.iconImage){
          marker.setIcon(props.iconImage);
        }

        if(props.content){
          var infoWindow = new google.maps.InfoWindow({
            content:props.content
          });

          marker.addListener('click', function(){
            infoWindow.open(map, marker);
          });
        }
      }
    }
		
window.addEventListener('load', function() {
   initMap();
});
  </script>





  <?php
   if (have_posts()) : while(have_posts()) : the_post();
   the_content();
   endwhile;endif;
  ?>

</div> <!-- wrapper -->

<?php get_footer(); ?>
