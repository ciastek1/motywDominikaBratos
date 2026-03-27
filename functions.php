<?php
function bookstore_enqueue_assets() {
    wp_enqueue_style(
        'bookstore-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        '1.0.0'
    );
    
    wp_enqueue_script(
        'bookstore-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'bookstore_enqueue_assets');
function bookstore_setup() {
    add_theme_support('title-tag');
    add_theme_support('custom-header');
}
add_action('after_setup_theme', 'bookstore_setup');

?>