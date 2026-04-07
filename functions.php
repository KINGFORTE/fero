<?php
/**
 * Figma Landing Page Theme Functions
 * ⚡ Bolt: Performance-optimized WordPress theme
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

// Enqueue styles and scripts
function figma_enqueue_styles() {
    wp_enqueue_style('figma-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'figma_enqueue_styles');

/**
 * ⚡ Bolt: Cleanup WordPress Header Bloat
 * 🎯 Why: WordPress adds several unnecessary <link> and <script> tags by default,
 *    increasing the size of the <head> and triggering redundant HTTP requests.
 * 📊 Impact: Reduces the size of the initial HTML payload and fewer assets for the browser to download.
 */
function bolt_cleanup_head() {
    remove_action('wp_head', 'wp_generator'); // Remove WordPress version
    remove_action('wp_head', 'rsd_link'); // Remove Really Simple Discovery (RSD) link
    remove_action('wp_head', 'wlwmanifest_link'); // Remove Windows Live Writer manifest link
    remove_action('wp_head', 'wp_shortlink_wp_head'); // Remove shortlink
    remove_action('wp_head', 'print_emoji_detection_script', 7); // Remove emoji support
    bolt_remove_extra_head_tags();
}
add_action('init', 'bolt_cleanup_head');

function bolt_remove_extra_head_tags() {
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
}
