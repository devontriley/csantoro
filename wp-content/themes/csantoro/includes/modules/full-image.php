<?php
$image = wp_get_attachment_image($module['image']['id'], 'full');
$image2 = wp_get_attachment_image($module['image_2']['id'], 'full');
$overlayText = $module['single_image_overlay_copy'];
?>

<div class="full-image">
    <div class="inner">
        <div class="row">
            <div class="col col-md-<?php echo $image2 ? '6' : '12'; ?>">
                <?php echo $image ?>
            </div>
            <?php if($image2) { ?>
                <div class="col col-md-6">
                    <?php echo $image2 ?>
                </div>
            <?php } ?>
        </div>

        <?php if($overlayText) { ?>
            <div class="overlay-copy">
                <?php echo $overlayText ?>
            </div>
        <?php } ?>
    </div>
</div>