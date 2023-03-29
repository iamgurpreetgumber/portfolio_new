<?php

// this is child theme functions file.

// enqueue styles.

// echo get_stylesheet_directory_uri() . '/assets/style.css';
// die;

function add_theme_scripts() {
  wp_enqueue_style( 'generatepress-child', get_stylesheet_directory_uri() . '/assets/style.css', array(), '1.1', 'all' );
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'generatepress-child', get_stylesheet_directory_uri() . '/assets/custom.js', array(), '1.1', 'all' );


	// wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), 1.1, true );
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

?>