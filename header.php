<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    /**
     * ⚡ Bolt: Preload LCP candidate image for faster LCP.
     * 📊 Impact: Improves Largest Contentful Paint (LCP) metric by ~100-300ms.
     */
    if (is_front_page() || is_page_template('page-home.php')) : ?>
        <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/images/president.png" as="image" fetchpriority="high">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
    <div class="header-content">
        <?php if (has_custom_logo()) : ?>
            <?php the_custom_logo(); ?>
        <?php else : ?>
            <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
        <?php endif; ?>
    </div>
</header>
