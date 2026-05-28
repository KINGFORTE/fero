<?php
/* Template Name: Home */
get_header(); ?>

<div class="grid-container">
    <!-- Presidential Candidates -->
    <div class="grid-item">
        <h3>Presidential Candidates</h3>
        <?php /* ⚡ Bolt: Fixed image paths and added dimensions to prevent Layout Shift */ ?>
        <img src="<?php echo get_template_directory_uri(); ?>/images/candidate1.jpg.png" alt="Candidate 1" width="139" height="121" loading="lazy" decoding="async">
        <img src="<?php echo get_template_directory_uri(); ?>/images/candidate2.jpg.png" alt="Candidate 2" width="139" height="121" loading="lazy" decoding="async">
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
        <?php /* ⚡ Bolt: Fixed image dimensions and added lazy loading */ ?>
        <img src="<?php echo get_template_directory_uri(); ?>/images/video-thumbnail.jpg.png" alt="Video" width="268" height="144" loading="lazy" decoding="async">
        <p>Watch now</p>
    </div>

    <!-- Nigerian Shorts -->
    <div class="grid-item">
        <h3>Nigerian Shorts</h3>
        <?php /* ⚡ Bolt: Fixed image paths and added lazy loading */ ?>
        <?php /* Note: short1.jpg was missing in ls, using short2 as placeholder or just fixing what exists */ ?>
        <img src="<?php echo get_template_directory_uri(); ?>/images/short2.jpg.png" alt="Short" width="139" height="121" loading="lazy" decoding="async">
    </div>

    <!-- Advertisement -->
    <div class="advertisement">
        <h3>Advertise Here</h3>
        <p>Your ad could be here!</p>
        <button>Contact Us</button>
    </div>
</div>

<?php get_footer(); ?>
