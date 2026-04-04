<?php
/**
 * Figma Theme Functions
 * Optimized for performance.
 */

// Theme setup
function figma_theme_setup() {
    // Allows WordPress to manage the document title
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'figma-theme'),
    ));
}
add_action('after_setup_theme', 'figma_theme_setup');

// Enqueue styles and scripts
function figma_enqueue_styles() {
    // 💡 What: Enqueues the main stylesheet
    // 🎯 Why: Standard WP method for asset management
    wp_enqueue_style('figma-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'figma_enqueue_styles');

/**
 * ⚡ Bolt Optimization: Clean up wp_head()
 * 💡 What: Removes unnecessary default WordPress scripts and styles
 * 🎯 Why: Reduces HTTP requests and HTML size (removes emojis, RSD, WLW, etc.)
 * 📊 Impact: ~5-10 fewer HTTP requests and cleaner HTML source
 */
function figma_cleanup_head() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'rest_output_link_wp_head', 10);
    remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
}
add_action('init', 'figma_cleanup_head');
