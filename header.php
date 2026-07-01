<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    // Preload the primary LCP image for optimal performance
    if (is_front_page() || is_home() || is_page_template('page-home.php')) : ?>
        <link rel="preload" as="image" href="<?php echo esc_url(get_template_directory_uri()); ?>/images/president.jpg.png" fetchpriority="high">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
    <h1>Welcome to the Campaign</h1>
    <?php if (is_front_page() || is_home() || is_page_template('page-home.php')) : ?>
        <!-- Hero image with fetchpriority="high" to prioritize LCP -->
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/president.jpg.png"
             alt="Presidential Campaign Hero"
             width="576"
             height="397"
             fetchpriority="high">
    <?php endif; ?>
</header>
