</div> <!-- content -->




<footer>
  <div class="wrapper">

    <ul>
      <li><a href="mailto:psychiatrie.ambulance.sro@gmail.com">psychiatrie.ambulance.sro@gmail.com</a></li>
      <li><a href="tel:+420602350018">+420 602 350 018</a></li>
    </ul>

    <address>
      Psychiatrie-ambulance s.r.o.<br>
      Lochotínská 1108/18, Severní Předměstí, 301 00 Plzeň<br>
      IČO: 01695525
    </address>

</div>

</footer>
<!-- Cookie Consent by https://www.FreePrivacyPolicy.com -->
<script type="text/javascript" src="https://www.freeprivacypolicy.com/public/cookie-consent/4.0.0/cookie-consent.js" charset="UTF-8"></script>
<script type="text/javascript" charset="UTF-8">
document.addEventListener('DOMContentLoaded', function () {
cookieconsent.run({"notice_banner_type":"simple","consent_type":"express","palette":"light","language":"cs","page_load_consent_levels":["strictly-necessary"],"notice_banner_reject_button_hide":false,"preferences_center_close_button_hide":false,"page_refresh_confirmation_buttons":false,"website_name":"Psychiatrie-ambulance.cz"});
});
</script>

<!-- Google Analytics -->

		<script type="text/plain" cookie-consent="tracking">
window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-W3LY67WLWZ');
</script>
<!-- end of Google Analytics-->

<!-- End Cookie Consent -->
<?php
if (is_front_page()):?>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUEVlByzT8CL183iWpsB3yKLbSfHZ4qFM&map_ids=54220ee84d2e31ca" async></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/res/init-map.js"></script>
<?php
endif;

if (is_page('ordinacni-hodiny')):
?>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/res/jquery.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/res/slick.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/res/slick-init.js"></script>
<?php endif; ?>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/res/main.js"></script>
</script>
</body>
</html>


<!-- end of the file -->
