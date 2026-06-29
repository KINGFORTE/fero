<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    /**
     * Critical Rendering Path Optimization:
     * Preload the primary LCP hero image to ensure it starts loading as early as possible.
     * fetchpriority="high" is used to signal its importance to the browser.
     */
    if (is_front_page() || is_home() || is_page_template('page-home.php')) : ?>
        <link rel="preload" as="image" href="<?php echo esc_url(get_template_directory_uri()); ?>/images/president.jpg.png" fetchpriority="high">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
    <h1><?php bloginfo('name'); ?></h1>
</header>
