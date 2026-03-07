<?php
/* Template Name: Home */
get_header();
$template_uri = get_template_directory_uri();
?>

<div class="grid-container">
    <!-- Presidential Candidates -->
    <div class="grid-item">
        <h3>Presidential Candidates</h3>
        <img src="<?php echo $template_uri; ?>/images/candidate1.png" alt="Candidate 1" fetchpriority="high" decoding="async">
        <img src="<?php echo $template_uri; ?>/images/candidate2.png" alt="Candidate 2" decoding="async">
    </div>

    <!-- Voter Instructions -->
    <div class="grid-item">
        <h3>Voter Instructions</h3>
        <p>Step 1: Register.</p>
        <p>Step 2: Vote responsibly.</p>
    </div>

    <!-- Video Page -->
    <div class="grid-item">
        <h3>Video Page</h3>
        <img src="<?php echo $template_uri; ?>/images/video-thumbnail.png" alt="Video Thumbnail" loading="lazy" decoding="async">
        <p>Watch now</p>
    </div>

    <!-- Nigerian Shorts -->
    <div class="grid-item">
        <h3>Nigerian Shorts</h3>
        <img src="<?php echo $template_uri; ?>/images/short2.png" alt="Short 2" loading="lazy" decoding="async">
    </div>

    <!-- Advertisement -->
    <div class="advertisement">
        <h3>Advertise Here</h3>
        <p>Your ad could be here!</p>
        <button>Contact Us</button>
    </div>
</div>

<?php get_footer(); ?>
