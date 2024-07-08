<?php
function child_enqueue_styles() {
	wp_enqueue_script( 'scriptjs-name', get_stylesheet_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true );
	wp_enqueue_style( 'atixis-theme-css', get_stylesheet_directory_uri() . '/assets/css/style.css', array('astra-theme-css'), 'all' );
	wp_enqueue_style( 'atixis-responsive-css', get_stylesheet_directory_uri() . '/assets/css/responsive.css', array('astra-theme-css'), 'all' );
}
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles' );