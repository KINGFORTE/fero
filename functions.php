<?php
// Theme setup
function figma_theme_setup() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'figma_theme_setup');

// Bolt Optimization: Inline small CSS (~1KB) to eliminate a render-blocking HTTP request
function figma_inline_styles() {
    ?>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        .grid-container { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; padding: 20px; max-width: 1200px; margin: 0 auto; background-color: #fff; }
        .grid-item { background-color: #fafafa; padding: 10px; text-align: center; border: 1px solid #e4e4e4; }
        .advertisement { grid-column: span 4; text-align: center; background-color: #e6f7ff; padding: 15px; margin-top: 20px; }
        .advertisement button { padding: 10px 20px; background-color: #007bff; color: #fff; border: none; cursor: pointer; }
        .advertisement button:hover { background-color: #0056b3; }
    </style>
    <?php
}
add_action('wp_head', 'figma_inline_styles');

// Bolt Optimization: Remove default WordPress bloat from wp_head to reduce payload and HTTP requests
function figma_optimize_head() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wp_shortlink_wp_head');
}
add_action('init', 'figma_optimize_head');
