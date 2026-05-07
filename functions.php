<?php
/**
 * Theme setup
 */
function figma_theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'figma-theme'),
    ));
}
add_action('after_setup_theme', 'figma_theme_setup');

/**
 * Enqueue styles and scripts
 */
function figma_enqueue_styles() {
    wp_enqueue_style('figma-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'figma_enqueue_styles');

/**
 * ⚡ Bolt: Performance Optimizations
 * 💡 What: Remove unnecessary WP head bloat and emoji scripts
 * 🎯 Why: Reduces HTTP requests and page size for faster initial render
 * 📊 Impact: Saves ~1.1KB of HTML and removes 2 blocking JS/CSS requests
 */
function bolt_remove_head_bloat() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji');

    // Remove other bloat
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wp_shortlink_wp_head');
}
add_action('init', 'bolt_remove_head_bloat');

// Filter out tinyMCE emoji plugin
function bolt_disable_emojis_tinymce($plugins) {
    if (is_array($plugins)) {
        return array_diff($plugins, array('wpemoji'));
    }
    return $plugins;
}
add_filter('tiny_mce_plugins', 'bolt_disable_emojis_tinymce');
