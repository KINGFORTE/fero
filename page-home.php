<?php
/* Template Name: Home */
get_header(); ?>

<div class="grid-container">
    <!-- Presidential Candidates -->
    <div class="grid-item">
        <h3>Presidential Candidates</h3>
        <img src="<?php echo get_template_directory_uri(); ?>/images/candidate1.jpg" alt="Candidate">
        <img src="<?php echo get_template_directory_uri(); ?>/images/candidate2.jpg" alt="Candidate">
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
        <img src="<?php echo get_template_directory_uri(); ?>/images/video-thumbnail.jpg" alt="Video">
        <p>Watch now</p>
    </div>

    <!-- Nigerian Shorts -->
    <div class="grid-item">
        <h3>Nigerian Shorts</h3>
        <img src="<?php echo get_template_directory_uri(); ?>/images/short1.jpg" alt="Short">
        <img src="<?php echo get_template_directory_uri(); ?>/images/short2.jpg" alt="Short">
    </div>

    <!-- Advertisement -->
    <div class="advertisement">
        <h3>Advertise Here</h3>
        <p>Your ad could be here!</p>
        <button>Contact Us</button>
    </div>
</div>

<?php get_footer(); ?>
