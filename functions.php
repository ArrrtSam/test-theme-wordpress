<?php

add_action( 'wp_enqueue_scripts', 'theme_name_styles' );
add_action( 'wp_enqueue_scripts', 'wptest_scripts', 11 );

function theme_name_styles() {
  wp_enqueue_style( 'animate-style', get_template_directory_uri() . '/assets/animate.min.css' );
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}



function wptest_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.min.js');
  wp_enqueue_script( 'jquery' );
  
  wp_enqueue_script('wow.min', get_template_directory_uri() . '/assets/wow.min.js', array('jquery'), null, true);
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/script.js', array('jquery'), null, true);
}

add_theme_support('custom-logo');
?>