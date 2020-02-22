<script>
    console.log(<?php echo json_encode($module); ?>);
</script>

<div class="basic-content <?php if($module['centered']){ echo 'centered'; } ?>">
    <div class="inner">

        <?php if($module['header']){ echo '<h2 class="'. ($module['centered'] ? "text-center" : "") .'">' . $module['header'] . '</h2>'; } ?>

        <div class="row">
            <div class="col-md-<?php echo $module['columns'] == 2 ? '6' : '10'; ?> <?php if($module['centered']){ echo 'offset-md-1'; } ?>">
                <?php echo apply_filters('the_content', $module['column_one']); ?>
            </div>

            <?php if($module['columns'] == 2) { ?>
            <div class="col-md-6">
                <?php echo apply_filters('the_content', $module['column_two']); ?>
            </div>
            <?php } ?>
        </div>
    </div>
</div>