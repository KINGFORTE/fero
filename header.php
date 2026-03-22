<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    $template_uri = get_template_directory_uri();
    // ⚡ Bolt: Preload LCP candidates: Presidential Candidate images to improve Largest Contentful Paint
    ?>
    <link rel="preload" href="<?php echo $template_uri; ?>/images/candidate1.jpg.png" as="image" fetchpriority="high">
    <link rel="preload" href="<?php echo $template_uri; ?>/images/candidate2.jpg.png" as="image" fetchpriority="high">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <h1>Fero</h1>
</header>
