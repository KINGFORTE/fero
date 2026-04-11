<?php
get_header();
$theme_uri = esc_url( get_template_directory_uri() );
?>

<div class="grid-container">
    <div class="grid-item">
        <h3>Welcome to My Landing Page</h3>
        <p>This is a fallback template for the theme. Customize this page as needed.</p>
        <img src="<?php echo $theme_uri; ?>/images/candidate1.png"
             alt="Candidate"
             width="139" height="121"
             decoding="async"
             fetchpriority="high">
    </div>
</div>

<?php
get_footer();
?>
