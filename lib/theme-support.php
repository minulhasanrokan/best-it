<?php
/**
 * The Theme support file for theme supporting
 * 
 * @package best-it
 */

function best_it_setup_theme(){

	// title and tag
    add_theme_support('title-tag');

	// custom logo setup..........
	add_theme_support( 'custom-logo', array(
	    'height'      => 55,
	    'width'       => 180,
	    'flex-height' => true,
	    'flex-width'  => true,
	    'header-text' => array( 'site-title', 'site-description' ),
	) );

	//menu register
	register_nav_menus(array(
        'main-menu' => __('Primary Menu/Header Menu ', 'best-it'),
        'important-link' => __('Important link Menu', 'best-it'),
        'footer-menu' => __('Footer Menu', 'best-it')
    ));

    // post & page image or video support.....
	add_theme_support( 'post-thumbnails', array( 'post', 'page','slider','service','testimonial','portfolio') );

}
add_action('after_setup_theme','best_it_setup_theme');