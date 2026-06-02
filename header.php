<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    /**
     * ⚡ Bolt: LCP Preload
     * 💡 What: Preload the largest contentful paint image.
     * 🎯 Why: Start fetching the hero image as early as possible.
     */
    ?>
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/images/president.jpg.png" as="image" fetchpriority="high">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
    <img src="<?php echo get_template_directory_uri(); ?>/images/president.jpg.png" alt="President" width="576" height="397" fetchpriority="high" decoding="sync">
</header>
