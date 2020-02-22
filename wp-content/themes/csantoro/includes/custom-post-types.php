<?php

function create_custom_post_types( )
{
    $labels = array(
        'name'                => _x( 'Work', 'Post Type General Name' ),
        'singular_name'       => _x( 'Work', 'Post Type Singular Name' ),
        'menu_name'           => __( 'Work' ),
        'parent_item_colon'   => __( 'Parent Work' ),
        'all_items'           => __( 'All Work' ),
        'view_item'           => __( 'View Work' ),
        'add_new_item'        => __( 'Add New Work' ),
        'add_new'             => __( 'Add New' ),
        'edit_item'           => __( 'Edit Work' ),
        'update_item'         => __( 'Update Work' ),
        'search_items'        => __( 'Search Work' ),
        'not_found'           => __( 'Not Found' ),
        'not_found_in_trash'  => __( 'Not found in Trash' ),
    );

    $args = array(
        'label'               => __( 'Work' ),
        'description'         => __( 'Custom CPT to Manage Case Studies.' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'author', 'thumbnail'),
        'hierarchical'        => true,
        'public'              => true,
        'exclude_from_search' => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_rest'        => true,
        'has_archive'         => false,
        'rewrite' => array('slug' => 'work','with_front' => FALSE),
    );

    register_post_type( 'work', $args );
}

?>