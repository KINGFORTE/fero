<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if (is_front_page() || is_page_template('page-home.php')): ?>
    <!-- Critical Rendering Path: Preload LCP Hero Image for Landing Page -->
    <link rel="preload" as="image" href="<?php echo get_template_directory_uri(); ?>/images/president.png" fetchpriority="high">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <h1>Fero Landing Page</h1>
</header>
