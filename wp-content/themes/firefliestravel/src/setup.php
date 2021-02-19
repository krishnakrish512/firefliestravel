<?php
function firefile_setup() {
    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );

    register_nav_menus( [
        'primary' => 'Primary'
    ] );
    add_image_size('category-thumb', 350, 250,true);
    add_image_size( 'thumb-crazy', 375,275, true);

}

add_action( 'after_setup_theme', 'firefile_setup' );

function firefile_scripts() {

    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/assets/css/custom.css.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_style( 'vendors-style', get_template_directory_uri() . '/assets/css/vendors.css' );

    wp_enqueue_script( 'modernizr-script', get_template_directory_uri() . '/assets/js/modernizr.js', [], '1.0', true );
    wp_enqueue_script( 'common_scripts', get_template_directory_uri() . '/assets/js/common_scripts.js', [], '1.0', true );
    wp_enqueue_script( 'main-script-script', get_template_directory_uri() . '/assets/js/main.js', [], '1.0', true );
    wp_enqueue_script( 'validate-script', get_template_directory_uri() . '/assets/js/validate.js', [], '1.0', true );
    wp_enqueue_script( 'flexslider-script', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', [], '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'firefile_scripts' );
