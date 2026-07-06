<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    // CRP Optimization: Preload the primary LCP hero image to reduce Largest Contentful Paint.
    // We only preload on the home page where the asset is actually used.
    if (is_front_page() || is_home() || is_page_template('page-home.php')) :
    ?>
    <link rel="preload" href="<?php echo esc_url(get_template_directory_uri()); ?>/images/president.jpg.png" as="image" fetchpriority="high">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
