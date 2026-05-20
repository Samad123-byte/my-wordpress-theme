<?php
function theme_enqueue_script() {

    wp_enqueue_style(
        'theme-main',
        get_template_directory_uri() . '/style.css',
        array(),
        time()
    );

    wp_enqueue_script(
        'theme-main-js',
        get_template_directory_uri() . '/js/main.js',
        array(),
        time(),
        true
    );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_script');


function my_theme_setup() {
        // ✅ Enable Featured Images
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary_menu' => 'Primary Menu',
        'footer_menu'  => 'Footer Menu'
    ));
}
add_action('after_setup_theme', 'my_theme_setup');




