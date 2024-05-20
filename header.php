<?php
/**
 * The header of the Constra theme.
 *
 * This file serves as the header template for Constra WordPress theme.
 * It contains the opening HTML document structure, <head> section, and
 * the beginning of the <body> section.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Constra
 * @subpackage Template
 * @since 1.0.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php if (is_singular() && pings_open( get_queried_object() ) ) : ?>
    <?php endif; ?>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
    <meta name="generator" content="<?php echo esc_attr( 'WordPress ' . get_bloginfo( 'version' ) ); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="body-inner">
        <?php constra_header(); ?>
        <?php //constra_breadcrumb(); ?>