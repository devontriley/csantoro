<?php get_header(); ?>

<?php include('includes/modules.php'); ?>

<?php
$loopCounter = 0;
$currentPageID = $post->ID;
$nextPageURL = '';
$prevPageURL = '';
$allWork = new WP_Query(array(
    'post_type' => 'work',
    'posts_per_page' => -1,
    'order' => 'ASC',
    'orderby' => 'menu_order'
));
$allWorkCount = count($allWork->posts);

foreach($allWork->posts as $work)
{
    if($work->ID == $currentPageID)
    {
        $nextPageURL = get_permalink($allWork->posts[$loopCounter + 1]->ID);
        $prevPageURL = get_permalink($allWork->posts[$loopCounter - 1]->ID);

        if($loopCounter == $allWorkCount - 1)
        {
            // Last array element
            $nextPageURL = get_permalink($allWork->posts[0]->ID);
        }

        if($loopCounter == 0)
        {
            // First array element
            $prevPageURL = get_permalink($allWork->posts[$allWorkCount - 1]->ID);
        }
    }
    
    $loopCounter++;
}
?>

<div class="work-nav">

    <a href="<?php echo $prevPageURL ?>" class="work-prev" data-direction="prev">
        <svg viewBox="0 0 14.1 25.3">
            <use xlink:href="#arrow-left-icon"></use>
        </svg>
        <span>Previous Project</span>
    </a>

    <a href="<?php echo bloginfo('url'); ?>/work" class="work-all">
        <svg viewBox="0 0 91.824 73.33">
            <use xlink:href="#all-projects-icon"></use>
        </svg>
        <span>All Projects</span>
    </a>

    <a href="<?php echo $nextPageURL ?>" class="work-next" data-direction="next">
        <svg viewBox="0 0 14.1 25.3">
            <use xlink:href="#arrow-left-icon"></use>
        </svg>
        <span>Next Project</span>
    </a>
</div>

<?php get_footer(); ?>