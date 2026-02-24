<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $theme_uri = get_template_directory_uri();
    ?>
    <!-- Preload Largest Contentful Paint (LCP) image -->
    <link rel="preload" href="<?php echo $theme_uri; ?>/images/candidate1.png" as="image" fetchpriority="high">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
    <div class="container">
        <h1><?php bloginfo('name'); ?></h1>
    </div>
</header>
