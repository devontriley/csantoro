<?php get_header(); ?>

<?php include('includes/modules.php'); ?>

<?php
$headshot = get_field('author_headshot', $post->ID);
$bio = get_field('author_bio', $post->ID);

if($headshot && $bio) { ?>

    <div class="author-bio">
        <div class="image">
            <?php echo wp_get_attachment_image($headshot['ID'], 'full') ?>
        </div>

        <p>
            <strong>ABOUT THE AUTHOR</strong><br />
            <?php echo $bio ?>
        </p>
    </div>

<?php } ?>

<?php include('includes/contact-form.php'); ?>

<?php include('includes/schedule-call.php'); ?>

<?php get_footer(); ?>