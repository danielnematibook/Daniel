<?php
define('THEME_VERSION', '1.0.0');

// Load textdomain
function my_glass_theme_setup() {
    load_theme_textdomain('my-glass-theme', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form','comment-list','gallery','caption']);
    register_nav_menus([
        'primary' => __('Primary Menu', 'my-glass-theme')
    ]);
}
add_action('after_setup_theme','my_glass_theme_setup');

// Enqueue styles and scripts
function my_glass_enqueue_assets() {
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/vendor/swiper-bundle.min.css', [], '8.4.5');
    wp_enqueue_style('theme-main', get_template_directory_uri() . '/style.css', [], THEME_VERSION);

    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/assets/vendor/swiper-bundle.min.js', [], '8.4.5', true);
    wp_enqueue_script('theme-main-js', get_template_directory_uri() . '/assets/js/main.js', ['swiper-js'], THEME_VERSION, true);
}
add_action('wp_enqueue_scripts','my_glass_enqueue_assets');

// Register Custom Post Types
require get_template_directory() . '/inc/custom-post-types.php';

// RTL support for Persian
function my_glass_rtl_styles() {
    if (is_rtl()) {
        wp_enqueue_style('theme-rtl', get_template_directory_uri() . '/assets/css/rtl.css', [], THEME_VERSION);
    }
}
add_action('wp_enqueue_scripts', 'my_glass_rtl_styles');