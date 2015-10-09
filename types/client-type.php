<?php
/*
 * Code for the Clients post type
 *
 */
add_action( 'init', 'register_cpt_client' );

function register_cpt_client() {

    $labels = array(
        'name' => _x( 'Clients', 'Client' ),
        'singular_name' => _x( 'Client', 'Client' ),
        'add_new' => _x( 'Add New', 'Client' ),
        'add_new_item' => _x( 'Add New Client', 'Client' ),
        'edit_item' => _x( 'Edit Client', 'Client' ),
        'new_item' => _x( 'New Client', 'Client' ),
        'view_item' => _x( 'View Client', 'Client' ),
        'search_items' => _x( 'Search Clients', 'Client' ),
        'not_found' => _x( 'No Clients found', 'Client' ),
        'not_found_in_trash' => _x( 'No Clients found in Trash', 'Client' ),
        'parent_item_colon' => _x( 'Parent Client:', 'Client' ),
        'menu_name' => _x( 'Clients', 'Client' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,

        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'revisions' ),

        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-lightbulb',

        'show_in_nav_menus' => false,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array( 'slug' => 'client', 'feeds' => false ),
        'capability_type' => 'post',
    );

    register_post_type( 'client', $args );

}

