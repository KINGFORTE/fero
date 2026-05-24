<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php /* ⚡ Bolt: Preload LCP hero image to improve LCP metric */ ?>
    <link rel="preload" as="image" href="<?php echo get_template_directory_uri(); ?>/images/president.jpg.png" fetchpriority="high">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
    <?php /* ⚡ Bolt: Prioritize LCP image with fetchpriority="high" and explicit dimensions to prevent CLS */ ?>
    <img src="<?php echo get_template_directory_uri(); ?>/images/president.jpg.png"
         alt="Presidential Candidate"
         width="576" height="397"
         fetchpriority="high"
         decoding="sync">
</header>
