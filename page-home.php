<?php
/* Template Name: Home */
get_header(); ?>

<div class="grid-container">
    <!-- Presidential Candidates -->
    <div class="grid-item">
        <h3>Presidential Candidates</h3>
        <img src="<?php echo get_template_directory_uri(); ?>/images/candidate1.png" alt="Candidate" width="139" height="121" decoding="async">
        <img src="<?php echo get_template_directory_uri(); ?>/images/candidate2.png" alt="Candidate" width="139" height="121" decoding="async">
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
        <img src="<?php echo get_template_directory_uri(); ?>/images/video-thumbnail.png" alt="Video" width="268" height="144" loading="lazy" decoding="async">
        <p>Watch now</p>
    </div>

    <!-- Nigerian Shorts -->
    <div class="grid-item">
        <h3>Nigerian Shorts</h3>
        <img src="<?php echo get_template_directory_uri(); ?>/images/short1.png" alt="Short" width="139" height="121" loading="lazy" decoding="async">
        <img src="<?php echo get_template_directory_uri(); ?>/images/short2.png" alt="Short" width="139" height="121" loading="lazy" decoding="async">
    </div>

    <!-- LCP Candidate / Hero Image -->
    <div class="grid-item">
        <h3>Primary Candidate</h3>
        <img src="<?php echo get_template_directory_uri(); ?>/images/president.png" alt="President" width="576" height="397" loading="eager" fetchpriority="high" decoding="async">
    </div>

    <!-- Advertisement -->
    <div class="advertisement">
        <h3>Advertise Here</h3>
        <p>Your ad could be here!</p>
        <button>Contact Us</button>
    </div>
</div>

<?php get_footer(); ?>
