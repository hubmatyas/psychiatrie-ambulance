<?php
//Redirect author pages to the homepage with WordPress redirect function
wp_safe_redirect( get_site_url(), 301 );
exit;
