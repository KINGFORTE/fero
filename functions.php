<?php
/**
 * Theme setup and optimizations.
 * ⚡ Bolt: One small performance improvement at a time.
 */

function figma_theme_setup() {
    // 💡 What: Add theme support for title tag.
    // 🎯 Why: Allows WordPress to manage document titles efficiently.
    // 📊 Impact: Improves SEO and reduces manual <title> tag maintenance.
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'figma-theme'),
    ));
}
add_action('after_setup_theme', 'figma_theme_setup');

/**
 * 💡 What: Clean up WordPress <head> by removing default bloat.
 * 🎯 Why: Reduces HTTP requests and HTML size by disabling unused features.
 * 📊 Impact: Saves a few hundred bytes and reduces external DNS lookups (emojis).
 */
function figma_optimize_head() {
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
}
add_action('init', 'figma_optimize_head');

// Enqueue styles and scripts
function figma_enqueue_styles() {
    wp_enqueue_style('figma-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'figma_enqueue_styles');
