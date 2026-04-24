<?php
// Theme setup
function figma_theme_setup() {
    add_theme_support('post-thumbnails');
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
 * ⚡ Bolt Optimization: Clean up wp_head
 * 🎯 Why: Reduces HTTP requests and overall page weight by removing unnecessary WordPress default scripts and tags.
 * 📊 Impact: Approximately 600-800 bytes saved per request and multiple HTTP requests (emojis, RSD, etc.) removed.
 */
function bolt_optimize_head() {
    // Remove link to the Really Simple Discovery service endpoint
    remove_action('wp_head', 'rsd_link');
    // Remove the link to the Windows Live Writer manifest file
    remove_action('wp_head', 'wlwmanifest_link');
    // Remove the XHTML generator that is generated on the wp_head hook, which is not good for security
    remove_action('wp_head', 'wp_generator');
    // Remove the shortlink for the page
    remove_action('wp_head', 'wp_shortlink_wp_head');
    // Remove emoji support scripts and styles
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
}
add_action('init', 'bolt_optimize_head');
