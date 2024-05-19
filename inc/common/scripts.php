<?php

define('CONSTRA_CSS', get_template_directory_uri() . '/assets/css/');
define('CONSTRA_JS', get_template_directory_uri() . '/assets/js/');

// Constra CSS and JS enqueue here
function constra_theme_scripts() {

    // All CSS
    wp_enqueue_style( 'CONSTRA-main',  CONSTRA_CSS.'style.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );

    // All JS
	wp_enqueue_script( 'slider', CONSTRA_JS.'slider.js', array( ), 1.1, true );
	wp_enqueue_script( 'CONSTRA-main', CONSTRA_JS.'custom.js', array( 'jquery' ), 1.1, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'constra_theme_scripts' );