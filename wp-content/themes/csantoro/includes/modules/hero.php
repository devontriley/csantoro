<div class="hero">
    <?php
    $image = wp_get_attachment_image($module['image']['id'], 'full');

    echo $image;
    ?>

    <div class="inner">
        <h1><?php echo $module['header'] ?></h1>

        <?php if($module['meta_data'])
        {
            echo '<div class="meta">';

            foreach($module['meta_data'] as $m)
            {
                echo '<p><strong>' . $m['meta_data_name'] . '</strong> ' . $m['meta_data_text'] . '</p>';
            }

            echo '</div>';
        } ?>

        <?php if($module['copy']) { echo $module['copy']; } ?>
    </div>
</div>