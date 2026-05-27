<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
    <div class="container">
        <h1><?php bloginfo('name'); ?></h1>
        <?php /* 💡 Bolt: Primary LCP element with high fetch priority and sync decoding for fastest paint. */ ?>
        <img src="<?php echo get_template_directory_uri(); ?>/images/president.jpg.png" alt="President" width="576" height="397" fetchpriority="high" decoding="sync">
    </div>
</header>
