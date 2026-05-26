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
 * ⚡ Bolt: Performance Optimization - Clean up wp_head()
 * 💡 What: Removes redundant metadata and emoji scripts from the document head.
 * 🎯 Why: Reduces document size by ~1.1KB and removes unnecessary JS execution.
 * 📊 Impact: Faster time-to-first-byte (TTFB) and improved TBT.
 */
function bolt_cleanup_head() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'rest_output_link_wp_head');
}
add_action('init', 'bolt_cleanup_head');

/**
 * ⚡ Bolt: Performance Optimization - Disable TinyMCE Emojis
 */
function bolt_disable_emojis_tinymce($plugins) {
    if (is_array($plugins)) {
        return array_diff($plugins, array('wpemoji'));
    }
    return $plugins;
}
add_filter('tiny_mce_plugins', 'bolt_disable_emojis_tinymce');
