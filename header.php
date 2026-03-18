<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <?php if (is_front_page()) : ?>
        <!-- Preload LCP candidates -->
        <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/images/candidate1.png" as="image" fetchpriority="high">
        <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/images/candidate2.png" as="image" fetchpriority="high">
    <?php endif; ?>
</head>
<body <?php body_class(); ?>>
<header>
    <img src="<?php echo get_template_directory_uri(); ?>/images/president.png" alt="Presidential Candidate" width="576" height="397" fetchpriority="high" decoding="async">
</header>
