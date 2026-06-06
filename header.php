<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php /* ⚡ Bolt: Preload LCP hero image to improve FCP/LCP by starting the download as early as possible */ ?>
    <link rel="preload" as="image" href="<?php echo get_template_directory_uri(); ?>/images/president.jpg.png" fetchpriority="high">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <?php /* ⚡ Bolt: LCP Hero Image with high fetch priority and sync decoding for fastest possible paint */ ?>
    <img src="<?php echo get_template_directory_uri(); ?>/images/president.jpg.png" alt="President" width="576" height="397" fetchpriority="high" decoding="sync">
</header>
