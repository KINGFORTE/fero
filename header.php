<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LCP Preload for Performance -->
    <link rel="preload" href="<?php echo esc_url(get_template_directory_uri()); ?>/images/candidate1.png" as="image" fetchpriority="high">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <h1>Welcome to Our Site</h1>
</header>
<main>
