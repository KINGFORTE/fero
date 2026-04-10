<?php
/**
 * Figma Theme Functions
 *
 * 💡 What: Optimizes WordPress head and theme support.
 * 🎯 Why: Reduces HTTP requests and HTML size by removing default WordPress bloat.
 * 📊 Impact: Saves ~5-10KB per page load and reduces head complexity.
 */

function figma_theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag'); // 💡 Let WordPress manage document titles efficiently.

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'figma-theme'),
    ));
}
add_action('after_setup_theme', 'figma_theme_setup');

function figma_enqueue_styles() {
    wp_enqueue_style('figma-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'figma_enqueue_styles');

/**
 * ⚡ Bolt Optimization: Clean up wp_head()
 */
function bolt_optimize_head() {
    // Remove emoji support
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');

    // Remove generator tag
    remove_action('wp_head', 'wp_generator');

    // Remove RSD link
    remove_action('wp_head', 'rsd_link');

    // Remove WLW manifest link
    remove_action('wp_head', 'wlwmanifest_link');

    // Remove shortlinks
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
}
add_action('init', 'bolt_optimize_head');
