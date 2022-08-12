<?php

if ( !defined( 'ABSPATH' ) ) exit;

/* enqueue scripts and style from parent theme */
function gswp_twentytwentyone_styles() {
    wp_enqueue_style(
        'child-style',
        get_stylesheet_uri(),
        array( 'twenty-twenty-one-style' ),
        wp_get_theme()->get('Version')
    );
}
 
add_action( 'wp_enqueue_scripts', 'gswp_twentytwentyone_styles' );
