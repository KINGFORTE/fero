<?php
// Theme setup
function figma_theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag'); // Let WordPress manage the document title
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'figma-theme'),
    ));
}
add_action('after_setup_theme', 'figma_theme_setup');

// Enqueue styles and scripts
function figma_enqueue_styles() {
    wp_enqueue_style('figma-style', get_stylesheet_uri());

    // Dequeue Gutenberg block library styles as they are not used in this custom grid theme
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-block-style'); // WooCommerce blocks if present
}
add_action('wp_enqueue_scripts', 'figma_enqueue_styles', 100);

// Optimize wp_head by removing unnecessary default bloat
function figma_optimize_head() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

    remove_action('wp_head', 'rsd_link'); // EditURI link
    remove_action('wp_head', 'wlwmanifest_link'); // Windows Live Writer link
    remove_action('wp_head', 'wp_generator'); // WordPress version
}
add_action('init', 'figma_optimize_head');
