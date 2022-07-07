<?php
/**
 * Moina Classic functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Moina Classic
 */

if ( ! defined( 'MOINA_NEW_VERSION' ) ) {
	$moina_new_theme = wp_get_theme();
	define( 'MOINA_NEW_VERSION', $moina_new_theme->get( 'Version' ) );
}


/**
 * Enqueue scripts and styles.
 */
function moina_new_scripts() {
    wp_enqueue_style( 'moina-new-parent-style', get_template_directory_uri() . '/style.css',array('bootstrap','slicknav','moina-default-block','moina-style'), '', 'all');
    wp_enqueue_style( 'moina-new-main-style',get_stylesheet_directory_uri() . '/assets/css/main-style.css',array(), MOINA_NEW_VERSION, 'all');
}
add_action( 'wp_enqueue_scripts', 'moina_new_scripts' );

/**
 * Custom excerpt length.
 */
function moina_new_excerpt_length( $length ) {
    return 19;
}
add_filter( 'excerpt_length', 'moina_new_excerpt_length', 999 );