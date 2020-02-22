<?php
$image = wp_get_attachment_image($module['image']['id'], 'full');
?>

<div class="image-copy-5050">
    <div class="inner">
        <div class="row align-items-center">
            <div class="image col-md-6 px-md-5">
                <?php echo $image ?>
            </div>
            <div class="copy col-md-6 px-md-5">
                <?php echo apply_filters('the_content', $module['copy']); ?>
            </div>
        </div>
    </div>
</div>