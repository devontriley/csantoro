<?php // Template Name: Work
get_header();
?>

<section id="work-grid">
    <div class="inner" id="work-grid-fullpage">

        <?php
        $loopCounter = 1;
        $allWork = new WP_Query(array(
            'post_type' => 'work',
            'posts_per_page' => -1,
            'orderby' => 'menu_order',
            'order' => 'ASC'
        ));
        $allWorkCount = count($allWork->posts);

        if(count($allWork->posts))
        {
            foreach($allWork->posts as $work)
            {
                if($loopCounter % 2 != 0) {
                    echo '<div class="section"><div class="row">';
                }

                $workID = $work->ID;
                $title = $work->post_title;
                $permalink = get_permalink($workID);
                //$image = get_attachment_image();
                ?>

                <div class="col-md-6 animateIn">
                    <div class="image">
                        <img src="<?php bloginfo('template_directory'); ?>/images/Case_Study_Thumbnail_Beantown.jpg" />
                    </div>
                    <div class="copy">
                        <div class="copy-inner">
                            <h2><?php echo $title ?></h2>
                            <p><?php echo $title ?></p>
                            <p>Brand Strategy Design // Graphic Design // Website Design // Art Direction</p>
                            <a href="<?php echo $permalink ?>" class="btn btn-outline-secondary">View Case Study</a>
                        </div>
                    </div>
                </div>

            <?php

                if($loopCounter % 2 == 0 || ($allWorkCount % 2 != 0 && $loopCounter == $allWorkCount)) {
                    echo '</div></div>';
                }

                $loopCounter++;
            }
        }
        ?>

    </div>
</section>

<?php get_footer(); ?>