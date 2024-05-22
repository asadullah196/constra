<?php
/**
 * Theme functions and definitions.
 *
 * This file sets up the theme and provides some helper functions.
 * You can use it to make your theme more functional and customizable.
 * Functions and definitions in this file can be used in your theme templates.
 * A lot of other functional file has been linked in this file.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Constra
 * @since 1.0.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Constra theme support options calling here
function constra_theme_support(){
    
    /** automatic feed link*/
    add_theme_support( 'automatic-feed-links' );

    /** tag-title **/
    add_theme_support( 'title-tag' );

    /** post thumbnail **/
    add_theme_support( 'post-thumbnails' );

    /** HTML5 support **/
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

    /** refresh widgest **/
    add_theme_support( 'customize-selective-refresh-widgets' );

    // constra all the menu
    register_nav_menus( array(
        'primary-menu' => __( 'Primary Menu', 'constra' ),
        'social-menu' => __( 'Social Menu', 'constra' ),
    ) );

    /** post format **/
    add_theme_support( 'post-formats', array( 
            'image',
            'video',
            'audio',
            'quote',
        ) 
    );

    // D-register block editor
    remove_theme_support( 'widgets-block-editor' );
}
add_action('after_setup_theme','constra_theme_support');

// All the theme script calling
if( class_exists ( 'Kirki' ) ){
	include_once('inc/common/kirki.php');
}
include_once('inc/common/scripts.php');
include_once('inc/common/nav-walker.php');
include_once('inc/common/template-functions.php');