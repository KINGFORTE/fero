<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    // Performance: Preload Largest Contentful Paint (LCP) candidates
    $template_uri = esc_url(get_template_directory_uri());
    ?>
    <link rel="preload" href="<?php echo $template_uri; ?>/images/candidate1.jpg.png" as="image" fetchpriority="high">
    <link rel="preload" href="<?php echo $template_uri; ?>/images/candidate2.jpg.png" as="image" fetchpriority="high">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
    <h1><?php bloginfo('name'); ?></h1>
</header>
