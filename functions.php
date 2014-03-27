<?php
/**
 * Proper way to enqueue scripts and styles
 */
function theme_name_scripts() {

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'reset-css', get_template_directory_uri() . '/css/reset.css' );
	wp_enqueue_style( 'main-css', get_stylesheet_uri() );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js', array(), '2.6.2', false );
	wp_enqueue_script( 'jquery-mobile', get_template_directory_uri() . '/js/vendor/jquery.mobile.custom.min.js', array('jquery'), '1.4.2', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array(), '3.1.1', true );
	wp_enqueue_script( 'responsiveslides', get_template_directory_uri() . '/js/vendor/responsiveslides.min.js', array('jquery'), '1.54', true );
	wp_enqueue_script( 'stellar', get_template_directory_uri() . '/js/vendor/jquery.stellar.min.js', array('jquery'), '0.6.2', true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array('jquery', 'jquery-effects-slide', 'jquery-ui-position'), '1.0.0', true );

}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

?>