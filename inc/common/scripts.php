<?php

define('CONSTRA_ASSETS', get_template_directory_uri() . '/assets/plugins/');

// Constra CSS and JS enqueue here
function constra_theme_scripts() {

    // All CSS
    wp_enqueue_style( 'bootstrap',  CONSTRA_ASSETS.'bootstrap/bootstrap.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'fontawesome',  CONSTRA_ASSETS.'fontawesome/css/all.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'animate',  CONSTRA_ASSETS.'animate-css/animate.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'slick',  CONSTRA_ASSETS.'slick/slick.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'slick-theme',  CONSTRA_ASSETS.'slick/slick-theme.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'colorbox',  CONSTRA_ASSETS.'colorbox/colorbox.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'constra-main',  get_template_directory_uri().'/assets/css/style.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );

    // All JS
    //wp_enqueue_script( 'harry-google-map', constra_google_maps_url(), array(), '1.0.0', 'all' );
    wp_register_script('googlemaps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU', array(), 1.1, true);
	wp_enqueue_script( 'bootstrap', CONSTRA_ASSETS.'bootstrap/bootstrap.min.js', array( ), 1.1, true );
	wp_enqueue_script( 'slick-slider', CONSTRA_ASSETS.'slick/slick.min.js"', array( ), 1.1, true );
	wp_enqueue_script( 'slick-animation', CONSTRA_ASSETS.'slick/slick-animation.min.js', array( ), 1.1, true );
	wp_enqueue_script( 'colorbox', CONSTRA_ASSETS.'colorbox/jquery.colorbox.js', array( ), 1.1, true );
	wp_enqueue_script( 'shuffle', CONSTRA_ASSETS.'shuffle/shuffle.min.js', array( ), 1.1, true );
	wp_enqueue_script( 'slider', CONSTRA_ASSETS.'google-map/map.js', array( ), 1.1, true );
	wp_enqueue_script( 'constra-main', get_template_directory_uri().'/assets/js/script.js', array( 'jquery' ), 1.1, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'constra_theme_scripts' );


/*
Register Google Maps API
 *
function constra_google_maps_url() {
    $maps_url = '';

    /*
    Translators: If you need to disable the Google Maps API, translate this to 'off'.
    *
    if ( 'off' !== _x( 'on', 'Google Maps API: on or off', 'constra' ) ) {
        $api_key = 'AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU';
        $maps_url = 'https://maps.googleapis.com/maps/api/js?key=' . urlencode( $api_key ) . '&defer';
    }
    return $maps_url;
}

*/