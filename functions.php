<?php

add_action( 'wp_enqueue_scripts', 'isc_styles' );

function isc_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );

    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'after_setup_theme', 'isc_setup' );

function isc_setup() {

  $defaults = array(
      'default-image' => get_stylesheet_directory_uri() . '/images/header.png'
  );

  add_theme_support( 'custom-header', $defaults);
}

?>