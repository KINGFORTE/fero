<?php
/**
 * Figma Theme Functions
 *
 * @package FigmaTheme
 */

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
 * 💡 What: WordPress Head Cleanup
 * 🎯 Why: WordPress adds a lot of unnecessary bloat by default (emojis, RSD, WLW, generator tags)
 * 📊 Impact: Reduces document size by ~650 bytes and removes extra DNS lookups/HTTP requests
 */
function bolt_cleanup_head() {
    // Remove emoji detection script and styles from frontend and admin
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');

    // Remove emoji-related filters
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

    // Remove from TinyMCE
    add_filter('tiny_mce_plugins', 'bolt_disable_emojis_tinymce');

    // Disable DNS prefetch for emojis
    add_filter('emoji_svg_url', '__return_false');

    // Remove other head bloat
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wp_shortlink_wp_head');
}
add_action('init', 'bolt_cleanup_head');

/**
 * Filter function used to remove the tinyMCE emoji plugin.
 *
 * @param array $plugins TinyMCE plugins.
 * @return array Modified plugins.
 */
function bolt_disable_emojis_tinymce($plugins) {
    if (is_array($plugins)) {
        return array_diff($plugins, array('wpemoji'));
    }
    return array();
}
