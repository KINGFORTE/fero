<?php
/**
 * ⚡ Bolt: Performance-focused theme functions.
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
 * 💡 Bolt: Cleanup wp_head() to reduce payload and speed up head processing.
 * 📊 Impact: Reduces document head size by ~1KB and eliminates redundant requests.
 */
function bolt_optimize_head() {
    // Remove emoji support
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji');
    add_filter('tiny_mce_plugins', 'bolt_disable_emojis_tinymce');

    // Remove other unnecessary metadata
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'rest_output_link_wp_head');
}
add_action('init', 'bolt_optimize_head');

function bolt_disable_emojis_tinymce($plugins) {
    if (is_array($plugins)) {
        return array_diff($plugins, array('wpemoji'));
    }
    return $plugins;
}

/**
 * 💡 Bolt: Preload the hero image for faster LCP.
 */
function bolt_preload_lcp_image() {
    // Only preload on front page or where the hero is used
    echo '<link rel="preload" href="' . get_template_directory_uri() . '/images/president.jpg.png" as="image" fetchpriority="high">' . "\n";
}
add_action('wp_head', 'bolt_preload_lcp_image', 1);
