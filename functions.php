<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Enqueue styles and scripts
 */
function child_enqueue_styles() {
	// Styles
	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), '1.0.0', 'all' );
    
    // Scripts
    // Load Tailwind CDN with no Async/Defer interference if possible, but standard enqueue is safer than hardcode
    wp_enqueue_script( 'tailwindcss', 'https://cdn.tailwindcss.com', array(), '3.4.1', false );
    
    // Load Config - Dependent on tailwindcss
    wp_enqueue_script( 'tailwind-config', get_stylesheet_directory_uri() . '/js/tailwind-config.js', array('tailwindcss'), '1.0.0', false );
}
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );
