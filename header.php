<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <!-- CRP Optimization: Preload the LCP hero image -->
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/images/president.jpg.png" as="image" fetchpriority="high">
</head>
<body <?php body_class(); ?>>
<header>
    <!-- CRP Optimization: Hero image with high priority -->
    <img src="<?php echo get_template_directory_uri(); ?>/images/president.jpg.png" alt="President" width="576" height="397" fetchpriority="high">
</header>
