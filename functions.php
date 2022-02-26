<?php



function load_stylesheets()
{
  wp_register_style('main', get_bloginfo('template_directory') . '/style.css', array(), false, 'all');
  wp_enqueue_style('main');
}
  add_action('wp_enqueue_scripts', 'load_stylesheets');


// Turn on the menus in wordpress
  register_nav_menus(
      array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme'),
      )

    );

// Define image sizes
add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);


// Allowing displaying of certain elements in WP
  add_theme_support('menus');
  add_theme_support('post-thumbnails');
  add_theme_support( 'custom-logo' );


// .landing on front-page.php

function edit_landing_headlines($wp_customize) {
  $wp_customize->add_section('landing-headlines-section', array(
    'title' => 'Úvodní strana - nadpisy'
  ));


  $wp_customize->add_setting('landing-title', array(
    'default' => 'Tohle je hlavní nadpis na úvodní stránce'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize,'landing-title-control', array(
    'label' => 'Nadpis',
    'section' => 'landing-headlines-section',
    'settings' => 'landing-title'
  )));

  $wp_customize->add_setting('landing-subtitle', array(
    'default' => 'Tohle je podnadpis na úvodní stránce'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize,'landing-subtitle-control', array(
    'label' => 'Podnadpis',
    'section' => 'landing-headlines-section',
    'settings' => 'landing-subtitle'
  )));

}

add_action('customize_register', 'edit_landing_headlines');



add_action( 'show_user_profile', 'extra_user_profile_fields' );
add_action( 'edit_user_profile', 'extra_user_profile_fields' );

function extra_user_profile_fields( $user ) { ?>
<h3><?php _e("Další informace", "blank"); ?></h3>

<table class="form-table">
<tr>
<th><label for="author"><?php _e("Kde mám kliniku?"); ?></label></th>
<td>
<textarea name="author" id="author" cols="10" ><?php echo esc_attr( get_the_author_meta( 'author', $user->ID ) ); ?></textarea><br />
<span class="regular-text"><?php _e("Zadejte prosím místo."); ?></span>
</td>
</tr>

</table>
<?php }

add_action( 'personal_options_update', 'save_extra_user_profile_fields' );
add_action( 'edit_user_profile_update', 'save_extra_user_profile_fields' );

function save_extra_user_profile_fields( $user_id ) {

if ( !current_user_can( 'edit_user', $user_id ) ) { return false; }

update_user_meta( $user_id, 'author', $_POST['author'] );
}


function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


add_action('template_redirect', 'my_custom_disable_author_page');

function my_custom_disable_author_page() {
    global $wp_query;

    if ( is_author() ) {
        wp_redirect(get_option('home'), 301); 
        exit; 
    }
}
