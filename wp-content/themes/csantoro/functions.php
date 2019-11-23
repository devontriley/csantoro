<?php

require_once('includes/custom-post-types.php');

// Load Custom Post Types
add_action( 'init', 'create_custom_post_types' );

// Disable Gutenberg
add_filter('use_block_editor_for_post', '__return_false', 10);

?>