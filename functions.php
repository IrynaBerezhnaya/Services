<?php
/**
 * Adding scripts and styles
 */

function add_scripts_and_styles() {

  $theme   = wp_get_theme( 'twentytwentyone' );
  $version = $theme->get( 'Version' );

  wp_dequeue_style( 'twenty-twenty-one-style' );

  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array(), $version );

}
add_action( 'wp_enqueue_scripts', 'add_scripts_and_styles' );

//// add acf options page
if (function_exists('acf_add_options_page')) {
	acf_add_options_page();
}
// Add image size for hero images.
add_image_size( 'services', 440, 480, true );
add_image_size( 'post-single-logo', 550, 480, true );
add_image_size( 'card', 330, 400, true );
add_image_size( 'post', 600, 300, true );
add_image_size( 'cart-interior', 740, 400, true );
add_image_size( 'post-single', 900, 400, true );
add_image_size( 'cta', 1520, 750, true );