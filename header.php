<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" as="image" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/president.png" fetchpriority="high">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/president.png" alt="Presidential Candidate" fetchpriority="high">
</header>
