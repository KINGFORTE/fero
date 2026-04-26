<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    /**
     * ⚡ Bolt: LCP Preload
     * 💡 What: Preloads the main LCP image candidate.
     * 🎯 Why: Improves Largest Contentful Paint by starting the download earlier.
     */
    if ( is_front_page() || is_page_template( 'page-home.php' ) ) : ?>
        <link rel="preload" as="image" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/candidate1.png" fetchpriority="high">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
    <h1><?php bloginfo( 'name' ); ?></h1>
    <p><?php bloginfo( 'description' ); ?></p>
</header>
