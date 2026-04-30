<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php /* ⚡ Bolt: LCP Preload for the primary hero image */ ?>
    <link rel="preload" as="image" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/president.png" fetchpriority="high">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/president.png" alt="Presidential Candidate" width="576" height="397" fetchpriority="high">
</header>
