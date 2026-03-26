<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if (is_front_page() || is_page_template('page-home.php')) :
        $theme_uri = get_template_directory_uri(); ?>
        <link rel="preload" href="<?php echo $theme_uri; ?>/images/candidate1.jpg.png" as="image" fetchpriority="high">
        <link rel="preload" href="<?php echo $theme_uri; ?>/images/candidate2.jpg.png" as="image" fetchpriority="high">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <h1><?php bloginfo('name'); ?></h1>
</header>
