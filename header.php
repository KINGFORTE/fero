<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <?php if ( is_front_page() || is_page_template( 'page-home.php' ) ) : ?>
        <link rel="preload" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/candidate1.png" as="image" fetchpriority="high">
    <?php endif; ?>
</head>
<body <?php body_class(); ?>>
<header>
    <h1><?php bloginfo( 'name' ); ?></h1>
</header>
