<?php
get_header(); // Include the header.php file
?>

<div class="grid-container">
    <div class="grid-item">
        <h3>Welcome to My Landing Page</h3>
        <p>This is a fallback template for the theme. Customize this page as needed.</p>
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/president.jpg.png" alt="President" fetchpriority="high" decoding="async">
    </div>
</div>

<?php
get_footer(); // Include the footer.php file
?>
