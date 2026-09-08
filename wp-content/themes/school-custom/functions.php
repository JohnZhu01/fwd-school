<?php
/** Load the School theme styles on the website. */
function school_custom_enqueue_styles() {
    wp_enqueue_style(
        'school-custom-normalize',
        get_theme_file_uri( 'assets/css/normalize.css' ),
        array(),
        '8.0.1'
    );
    wp_enqueue_style(
        'school-custom-style',
        get_stylesheet_uri(),
        array( 'school-custom-normalize' ),
        filemtime( get_theme_file_path( 'style.css' ) )
    );
    wp_enqueue_style(
        'school-custom-responsive',
        get_theme_file_uri( 'assets/css/responsive.css' ),
        array( 'school-custom-style' ),
        filemtime( get_theme_file_path( 'assets/css/responsive.css' ) )
    );
}
add_action( 'wp_enqueue_scripts', 'school_custom_enqueue_styles' );

/** Use the same styles inside the block editor. */
function school_custom_editor_styles() {
    add_editor_style( array(
        'assets/css/normalize.css',
        'style.css',
        'assets/css/responsive.css',
    ) );
}
add_action( 'after_setup_theme', 'school_custom_editor_styles' );