<?php
/*
 * Code for the portfolio items post type
 *
 */
add_action( 'init', 'register_cpt_portfolio_item' );

function register_cpt_portfolio_item() {

    $labels = array(
        'name' => _x( 'Portfolio Items', 'portfolio item' ),
        'singular_name' => _x( 'Portfolio Item', 'portfolio item' ),
        'add_new' => _x( 'Add New', 'portfolio item' ),
        'add_new_item' => _x( 'Add New Portfolio Item', 'portfolio item' ),
        'edit_item' => _x( 'Edit Portfolio Item', 'portfolio item' ),
        'new_item' => _x( 'New Portfolio Item', 'portfolio item' ),
        'view_item' => _x( 'View Portfolio Item', 'portfolio item' ),
        'search_items' => _x( 'Search Portfolio Items', 'portfolio item' ),
        'not_found' => _x( 'No portfolio items found', 'portfolio item' ),
        'not_found_in_trash' => _x( 'No portfolio items found in Trash', 'portfolio item' ),
        'parent_item_colon' => _x( 'Parent Portfolio Item:', 'portfolio item' ),
        'menu_name' => _x( 'Portfolio Items', 'portfolio item' ),
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
        'rewrite' => array( 'slug' => 'portfolio', 'feeds' => false ),
        'capability_type' => 'post',
    );

    register_post_type( 'portfolio_item', $args );

}

