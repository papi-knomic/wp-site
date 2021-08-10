/*
Theme Name: LawFirm Sample
Author: Knomic
Description: Sample Wordpress Website
Version: 1.0.0
*/

<?php

function registerNav() {
    register_nav_menus( [
        'header' => 'Header'
    ]
    );

    register_nav_menus( [
            'footer' => 'Footer'
        ]
    );

    register_nav_menus( [
            '404' => '404'
        ]
    );
}

if ( ! function_exists( 'setup' ) ) :
    function setup() {
    registerNav();
    add_theme_support( 'post_thumbnails' );
    add_image_size( 'team', 475, 475, [ 'center', 'center' ] );
    }
    endif;

function scriptsHeader() {
    wp_enqueue_style( 'init', get_stylesheet_uri() );
}
function scriptsFooter() {
//    wp_enqueue_script( 'init', get_template_directory_uri() . '/js/init.js', [ 'jQuery'] );
}

add_action( 'after_setup_theme', 'setup');
add_action( 'wp_enqueue_scripts', 'scriptsHeader' );
//add_action( 'wp_footer', 'scriptsFooter' );