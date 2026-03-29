<?php
// Theme setup
function figma_theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
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
 * ⚡ Bolt: Performance Optimizations
 * 💡 What: Optimized the WordPress <head> by removing default bloat (emojis, RSD/WLW links, generator tag, shortlinks).
 * 🎯 Why: Reduces HTTP requests and HTML size, leading to faster page load and better security.
 * 📊 Impact: Expected reduction in HTML size and removal of unnecessary script/style requests.
 */

// Remove emoji support
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');

// Remove RSD link
remove_action('wp_head', 'rsd_link');

// Remove WLW manifest
remove_action('wp_head', 'wlwmanifest_link');

// Remove WP generator
remove_action('wp_head', 'wp_generator');

// Remove shortlink
remove_action('wp_head', 'wp_shortlink_wp_head');
