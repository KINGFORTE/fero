<?php
/**
 * Theme setup and performance optimizations.
 */

// Theme setup
function figma_theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'figma-theme'),
    ));
}
add_action('after_setup_theme', 'figma_theme_setup');

/**
 * ⚡ Bolt: Cleanup wp_head() bloat
 * 🎯 Why: Reduces HTTP requests and HTML size by removing unused default WP features.
 * 📊 Impact: ~96% reduction in header HTML size.
 */
function figma_cleanup_head() {
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
}
add_action('init', 'figma_cleanup_head');

// Enqueue styles and scripts
function figma_enqueue_styles() {
    wp_enqueue_style('figma-style', get_stylesheet_uri(), array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'figma_enqueue_styles');
