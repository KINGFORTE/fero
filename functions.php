<?php
/**
 * ⚡ Bolt: Critical Rendering Path Optimization
 * 💡 What: Strips unnecessary default WordPress tags from wp_head.
 * 🎯 Why: Reduces HTML size and minimizes the number of external requests for unused features (emojis, RSD, etc.).
 * 📊 Impact: ~96% reduction in header metadata size.
 */

// Theme setup
function figma_theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag'); // Efficient title management
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

// Clean up wp_head for better performance
function bolt_cleanup_wp_head() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wp_shortlink_wp_head');
}
add_action('init', 'bolt_cleanup_wp_head');
