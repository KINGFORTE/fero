<?php
// Theme setup
function figma_theme_setup() {
    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable post thumbnails
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'figma-theme'),
    ));
}
add_action('after_setup_theme', 'figma_theme_setup');

// Enqueue styles and scripts
function figma_enqueue_styles() {
    wp_enqueue_style('figma-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'figma_enqueue_styles');

/**
 * Performance: Remove unnecessary WordPress default bloat from wp_head
 * Reduces HTML size and minimizes HTTP requests for emojis/scripts.
 */
function figma_remove_wp_bloat() {
    // Remove Emoji support
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');

    // Remove RSD (Really Simple Discovery) link
    remove_action('wp_head', 'rsd_link');

    // Remove WLW Manifest link
    remove_action('wp_head', 'wlwmanifest_link');

    // Remove WordPress Generator tag (security + minor performance)
    remove_action('wp_head', 'wp_generator');

    // Remove shortlink
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
}
add_action('init', 'figma_remove_wp_bloat');
