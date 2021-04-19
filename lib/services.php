<?php
/**
 * The Service for create and  displaying Service file
 * 
 * @package best-it
 */
 /**
 * Register a custom post type called "Service".
 *
 */
function best_it_Service_custom_post() {
    $labels = array(
        'name'                  => _x( 'Services', 'best-it' ),
        'singular_name'         => _x( 'Service', 'best-it' ),
        'menu_name'             => _x( 'Services', 'best-it' ),
        'name_admin_bar'        => _x( 'Service', 'best-it' ),
        'add_new'               => __( 'Add Service', 'best-it' ),
        'add_new_item'          => __( 'Add New Services', 'best-it' ),
        'new_item'              => __( 'New Service', 'best-it' ),
        'edit_item'             => __( 'Edit Service', 'best-it' ),
        'view_item'             => __( 'View Service', 'best-it' ),
        'all_items'             => __( 'All Services', 'best-it' ),
        'search_items'          => __( 'Search Service', 'best-it' ),
        'parent_item_colon'     => __( 'Parent Service:', 'best-it' ),
        'not_found'             => __( 'No Services found.', 'best-it' ),
        'not_found_in_trash'    => __( 'No Services found in Trash.', 'best-it' ),
        'featured_image'        => _x( 'Service Image', 'best-it' ),
        'set_featured_image'    => _x( 'Set Service image','best-it' ),
        'remove_featured_image' => _x( 'Remove Service image','best-it' ),
        'use_featured_image'    => _x( 'Use as Service image','best-it' ),
        'archives'              => _x( 'Service archives',  'best-it' ),
        'insert_into_item'      => _x( 'Insert into Service','best-it' ),
        'filter_items_list'     => _x( 'Filter Services list', 'best-it' ),
        'items_list_navigation' => _x( 'Services list navigation', 'best-it' ),
        'items_list'            => _x( 'Services list', 'best-it' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Service' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','custom-fields','page-attributes' ),
        'taxonomies'          => array( 'post_tag','genres','Service-category'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
    );
 
    register_post_type( 'Service', $args );
}
 
add_action( 'init', 'best_it_Service_custom_post' );


register_taxonomy("Service-category", array("Service"), array(
    "hierarchical"  =>  true, 
    "label" => "Service Categories", 
    "singular_label" => 
    "Service Category",  
    "rewrite" => true,
    'default_term'  => 'Un Category',
));

// this function makes all posts in the default category service
 
function set_service_categories($post_id) {
    // If this is a revision, get real post ID
    if ( $parent_id = wp_is_post_revision( $post_id ) ) 
        $post_id = $parent_id;
 
    // Get default category ID from options
    $defaultcat = get_option( 'Service-category' );
 
    // Check if this post is in default category
    if ( in_category( $defaultcat, $post_id ) ) {
        // unhook this function so it doesn't loop infinitely
        remove_action( 'save_post', 'set_service_categories' );
 
        // update the post, which calls save_post again
        wp_update_post( array( 'ID' => $post_id, 'post_status' => 'service' ) );
 
        // re-hook this function
        add_action( 'save_post', 'set_service_categories' );
    }
}
add_action( 'save_post', 'set_service_categories' );

