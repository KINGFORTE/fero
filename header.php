<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    // Cache template directory URI for performance
    $template_uri = get_template_directory_uri();

    // Preload LCP candidates for faster perceived performance
    if (is_front_page() || is_page_template('page-home.php')) : ?>
        <link rel="preload" href="<?php echo $template_uri; ?>/images/candidate1.jpg.png" as="image" fetchpriority="high">
        <link rel="preload" href="<?php echo $template_uri; ?>/images/candidate2.jpg.png" as="image" fetchpriority="high">
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
