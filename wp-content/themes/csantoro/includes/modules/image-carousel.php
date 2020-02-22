<div class="image-carousel">
    <div class="glide">
        <div data-glide-el="track" class="glide__track">
            <ul class="glide__slides">
                <?php foreach($module['images'] as $image) {
                    $image = wp_get_attachment_image($image['image']['id'], 'full');

                    echo '<li class="glide__slide">'. $image .'</li>';
                } ?>
            </ul>
        </div>
    </div>
</div>