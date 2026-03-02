<?php
/**
 * Theme setup and performance optimizations
 */

function figma_theme_setup() {
    // Let WordPress manage the document title
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'figma-theme'),
    ));
}
add_action('after_setup_theme', 'figma_theme_setup');

/**
 * Enqueue styles and dequeue unused block library styles
 */
function figma_enqueue_styles() {
    wp_enqueue_style('figma-style', get_stylesheet_uri());

    // Dequeue Gutenberg block styles as they aren't used in this custom theme
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-block-style'); // WooCommerce blocks if present
}
add_action('wp_enqueue_scripts', 'figma_enqueue_styles', 100);

/**
 * Clean up wp_head() from unnecessary bloat
 */
function figma_cleanup_head() {
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');
}
add_action('init', 'figma_cleanup_head');
