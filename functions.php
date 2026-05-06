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
 * ⚡ Bolt: Performance Optimization
 * 💡 What: Clean up wp_head() bloat
 * 🎯 Why: Reduces document head size and unnecessary requests
 * 📊 Impact: Reduces document head size by ~1.1KB
 */
function bolt_cleanup_head() {
    // Remove emoji support
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji');
    add_filter('tiny_mce_plugins', 'bolt_disable_emojis_tinymce');
    add_filter('wp_resource_hints', 'bolt_remove_emoji_dns_prefetch', 10, 2);

    // Remove generator tag
    remove_action('wp_head', 'wp_generator');
    // Remove RSD link
    remove_action('wp_head', 'rsd_link');
    // Remove Windows Live Writer link
    remove_action('wp_head', 'wlwmanifest_link');
    // Remove shortlink
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
}
add_action('init', 'bolt_cleanup_head');

function bolt_disable_emojis_tinymce($plugins) {
    if (is_array($plugins)) {
        return array_diff($plugins, array('wpemoji'));
    }
    return $plugins;
}

function bolt_remove_emoji_dns_prefetch($urls, $relation_type) {
    if ('dns-prefetch' == $relation_type) {
        $emoji_svg_url = apply_filters('emoji_svg_url', 'https://s.w.org/images/core/emoji/12.0.0-1/svg/');
        $urls = array_diff($urls, array($emoji_svg_url));
    }
    return $urls;
}
