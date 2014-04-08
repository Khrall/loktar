<?php
/**
 * Proper way to enqueue scripts and styles
 */
function front_page_scripts() {

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'bxSlider-css', get_template_directory_uri() . '/css/jquery.bxslider.css' );
	wp_enqueue_style( 'reset-css', get_template_directory_uri() . '/css/reset.css' );
	wp_enqueue_style( 'main-css', get_stylesheet_uri() );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js', array(), '2.6.2', false );
	wp_enqueue_script( 'jquery-mobile', get_template_directory_uri() . '/js/vendor/jquery.mobile.custom.min.js', array('jquery'), '1.4.2', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array(), '3.1.1', true );
	wp_enqueue_script( 'bxSlider-js', get_template_directory_uri() . '/js/vendor/jquery.bxslider.min.js', array('jquery'), '4.1.1', true );
	wp_enqueue_script( 'stellar', get_template_directory_uri() . '/js/vendor/jquery.stellar.min.js', array('jquery'), '0.6.2', true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array('jquery', 'jquery-effects-slide', 'jquery-ui-position'), '1.0.0', true );

}

function ktn_elm_chat_scripts() {

	wp_enqueue_style( 'reset-css', get_template_directory_uri() . '/css/reset.css' );
	wp_enqueue_style( 'nanoscroller', get_template_directory_uri() .'/css/nanoscroller.css');
	wp_enqueue_style( 'ktn-css', get_template_directory_uri() .'/pages/ktn-elm-chat/style.css');
	wp_enqueue_script( 'socketIO', get_template_directory_uri() . '/js/vendor/socket.io.js', array(), '0.9.11', true );
	wp_enqueue_script( 'nanoscroller', get_template_directory_uri() . '/js/vendor/jquery.nanoscroller.min.js', array('jquery'), '0.8.0', true );
	wp_enqueue_script( 'ktn-js', get_template_directory_uri() . '/pages/ktn-elm-chat/script.js', array('jquery', 'socketIO', 'nanoscroller'), '1.0.0', true );

}

function pn_web_home_scripts() {
	wp_enqueue_style( 'bootstrap-old-css', get_template_directory_uri() . '/pages/pn-web/libs/bootstrap/bootstrap.min.css' );
	wp_enqueue_style( 'responsiveslides-css', get_template_directory_uri() . '/css/responsiveslides.css' );
	wp_enqueue_style( 'pn-web-home-css', get_template_directory_uri() .'/pages/pn-web/style.css');
	
	wp_enqueue_script( 'pn-web-general-js', get_template_directory_uri() . '/pages/pn-web/js/general.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'pn-web-home-js', get_template_directory_uri() . '/pages/pn-web/js/home.js', array('jquery', 'jquery-ui-position', 'jquery-effects-core'), '1.0.0', true );
	
}

function pn_web_project_scripts() {
	wp_enqueue_style( 'bootstrap-old-css', get_template_directory_uri() . '/pages/pn-web/libs/bootstrap/bootstrap.min.css' );
	wp_enqueue_style( 'responsiveslides-css', get_template_directory_uri() . '/css/responsiveslides.css' );
	wp_enqueue_style( 'pn-web-project-css', get_template_directory_uri() .'/pages/pn-web/projects/style.css');

	wp_enqueue_script( 'responsiveslides-js', get_template_directory_uri() . '/js/vendor/responsiveslides.min.js', array('jquery'), '1.5.4', true );
	wp_enqueue_script( 'pn-web-general-js', get_template_directory_uri() . '/pages/pn-web/js/general.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'pn-web-project-js', get_template_directory_uri() . '/pages/pn-web/js/projects.js', array('jquery', 'jquery-ui-position', 'jquery-effects-core','responsiveslides-js'), '1.0.0', true );
	
}

?>