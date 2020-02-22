<?php
// Template Name: Blog
get_header(); ?>

<div class="basic-hero">
    <div class="inner">
        <h1>THE PROCESS BOOK</h1>
    </div>
</div>

<?php
$posts = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => -1
));

if(count($posts->posts)) { ?>

    <div class="blog-grid">
        <div class="row">
            <?php foreach($posts->posts as $p) {
                $postThumbID = get_post_thumbnail_id($p->ID);
                $featuredImg = wp_get_attachment_image($postThumbID, 'full'); ?>

            <div class="col-md-6">
                <div class="blog-item">
                    <a href="<?php the_permalink($p->ID); ?>" class="cover-link"></a>
                    <div class="image">
                        <?php echo $featuredImg ?>
                    </div>
                    <div class="copy">
                        <h2><?php echo $p->post_title ?></h2>
                        <p>Author Name  ||  Date  ||  Tags...</p>
                    </div>
                </div>
            </div>

            <?php } ?>
        </div>
    </div>

<?php } ?>

<?php get_footer(); ?>
