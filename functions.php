<?php
/**
 * Figma Landing Page functions and definitions
 */

function figma_theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
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
 * ⚡ Performance Optimization: Clean up WordPress <head>
 * 💡 What: Removes unnecessary default bloat from the wp_head() output.
 * 🎯 Why: Reduces HTML size and minimizes the number of DNS lookups and requests.
 * 📊 Impact: Faster time-to-first-byte (TTFB) and cleaner DOM.
 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head');
// REST API and oEmbed links are retained to avoid breaking modern block editor functionality.
