<?php
/**
 * The portfolio for create and  displaying portfolio file
 * 
 * @package best-it
 */
 /**
 * Register a custom post type called "portfolio".
 *
 */
function best_it_portfolio_custom_post() {
    $labels = array(
        'name'                  => _x( 'portfolios', 'best-it' ),
        'singular_name'         => _x( 'portfolio', 'best-it' ),
        'menu_name'             => _x( 'portfolios', 'best-it' ),
        'name_admin_bar'        => _x( 'portfolio', 'best-it' ),
        'add_new'               => __( 'Add portfolio', 'best-it' ),
        'add_new_item'          => __( 'Add New portfolios', 'best-it' ),
        'new_item'              => __( 'New portfolio', 'best-it' ),
        'edit_item'             => __( 'Edit portfolio', 'best-it' ),
        'view_item'             => __( 'View portfolio', 'best-it' ),
        'all_items'             => __( 'All portfolios', 'best-it' ),
        'search_items'          => __( 'Search portfolio', 'best-it' ),
        'parent_item_colon'     => __( 'Parent portfolio:', 'best-it' ),
        'not_found'             => __( 'No portfolios found.', 'best-it' ),
        'not_found_in_trash'    => __( 'No portfolios found in Trash.', 'best-it' ),
        'featured_image'        => _x( 'portfolio Image', 'best-it' ),
        'set_featured_image'    => _x( 'Set Client image','best-it' ),
        'remove_featured_image' => _x( 'Remove Client image','best-it' ),
        'use_featured_image'    => _x( 'Use as Client image','best-it' ),
        'archives'              => _x( 'portfolio archives',  'best-it' ),
        'insert_into_item'      => _x( 'Insert into portfolio','best-it' ),
        'filter_items_list'     => _x( 'Filter portfolios list', 'best-it' ),
        'items_list_navigation' => _x( 'portfolios list navigation', 'best-it' ),
        'items_list'            => _x( 'portfolios list', 'best-it' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'portfolio' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        "show_admin_colum"=>true,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','custom-fields','page-attributes' ),
        'taxonomies'          => array( 'post_tag','genres','portfolio-category'),
        'hierarchical'        => true,
        "show_admin_colum"=>true,
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
 
    register_post_type( 'portfolio', $args );
}
 
add_action( 'init', 'best_it_portfolio_custom_post' );

// Add the Custom Meta Box for portfolio

function best_it_portfolio_add_custom_meta_box() {
    add_meta_box(
        'custom_meta_box', // $id
        'Custom Meta Box', // $title 
        'best_it_portfolio_show_custom_meta_box', // $callback
        'portfolio', // $page
        'normal', // $context
        'high' // $priority
    ); 
}
add_action('add_meta_boxes', 'best_it_portfolio_add_custom_meta_box');
// Custom portfolio fields array
$prefix = 'portfolio_';
$custom_meta_fields = array(
    array(
        'label'=> 'Client Name',
        'desc'  => 'Enter Client Name to be displayed',
        'id'    => $prefix.'Client_Name',
        'type'  => 'text',
    ),
 array(
  		'label'=> 'Company name',
        'desc'  => 'Enter Company name',
        'id'    => $prefix.'Company_name',
        'type'  => 'text'
    ),
  array(
        'label'=> 'Client Website Link',
        'desc'  => 'Enter Client Website Link',
        'id'    => $prefix.'client_link',
        'type'  => 'text'
    ),
);
 
// The portfolio callback function
function best_it_portfolio_show_custom_meta_box() {
 
    global $custom_meta_fields, $post;
     
    // Use nonce for verification
    echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';
      
    // Begin the field table and loop
    echo '<table class="form-table">';
     
    foreach ($custom_meta_fields as $field) {
        // get value of this field if it exists for this post
        $meta = get_post_meta($post->ID, $field['id'], true);
        // begin a table row with
        echo '<tr>
                <th><label for="'.$field['id'].'">'.$field['label'].'</label></th>
                <td>';
                switch($field['type']) {
                    // text field
                    case 'text':
                        echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" />
                            <br /><span class="description">'.$field['desc'].'</span>';
                    break;
nbsp;               }
        echo '</td></tr>';
    }
     
    echo '</table>';
     
}
 
// Save the custom meta data
function best_it_portfolio_save_custom_meta($post_id) {
 
    global $custom_meta_fields;
    if (isset($_POST['custom_meta_box_nonce'])) {
        // verify nonce
        if (!wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__))){
            return $post_id;
        } 
    }
         
    // check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post_id;
         
    // check permissions
    if (isset($_POST['post_type'])) {
        if ('page' == $_POST['post_type']) {
            if (!current_user_can('edit_page', $post_id))
                return $post_id;
            } elseif (!current_user_can('edit_post', $post_id)) {
                return $post_id;
        }
    }
    if (isset($_POST['custom_meta_box_nonce'])) {
        // loop through fields and save the portfolio meta data
        foreach ($custom_meta_fields as $field) {
            $old = get_post_meta($post_id, $field['id'], true);
            $new = $_POST[$field['id']];
            if ($new && $new != $old) {
                update_post_meta($post_id, $field['id'], $new);
            } elseif ('' == $new && $old) {
                delete_post_meta($post_id, $field['id'], $old);
            }
        }
    }
}
add_action('save_post', 'best_it_portfolio_save_custom_meta');



register_taxonomy("portfolio-category", array("portfolio"), array(
    "hierarchical"  =>  true,
    "show_admin_colum"=>true,
    "label" => "portfolio Categories", 
    "singular_label" => "portfolio category",
    "portfolio Category",  
    "rewrite" => true,
    'default_term'  => 'Un Category',
));

// this function makes all posts in the default category private
 
function set_portfolio_private_categories($post_id) {
    // If this is a revision, get real post ID
    if ( $parent_id = wp_is_post_revision( $post_id ) ) 
        $post_id = $parent_id;
 
    // Get default category ID from options
    $defaultcat = get_option( 'portfolio-category' );
 
    // Check if this post is in default category
    if ( in_category( $defaultcat, $post_id ) ) {
        // unhook this function so it doesn't loop infinitely
        remove_action( 'save_post', 'set_private_categories' );
 
        // update the post, which calls save_post again
        wp_update_post( array( 'ID' => $post_id, 'post_status' => 'private' ) );
 
        // re-hook this function
        add_action( 'save_post', 'set_private_categories' );
    }
}
add_action( 'save_post', 'set_private_categories' );