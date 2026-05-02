<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/president.png" as="image" fetchpriority="high">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/president.png" alt="President" width="576" height="397" fetchpriority="high" decoding="async">
</header>
