<?php
//Redirect author pages to the homepage with WordPress redirect function
wp_safe_redirect( get_home_url(), 302 );
exit;