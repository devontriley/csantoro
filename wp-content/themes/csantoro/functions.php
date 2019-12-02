<?php

require_once('includes/custom-post-types.php');

// Load Custom Post Types
add_action( 'init', 'create_custom_post_types' );

// Disable Gutenberg
add_filter('use_block_editor_for_post', '__return_false', 10);

// Enqueue Scripts
function load_custom_scripts()
{
    wp_enqueue_script('main', get_template_directory_uri().'/main.js', null, '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'load_custom_scripts');
?>