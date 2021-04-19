<?php
/**
 * The About Us Tempalte for displaying about us page
 * 
 * Template Name: About Us
 * @package best-it
 */

//get header file....
get_header();?>
<?php do_action('do_best_it_breadcrumbs','best-it');?>
<!-- about-->
<?php do_action('do_best_it_about_section_display','best-it');?>
<!--/ End about -->
<!-- service-->
<?php do_action('do_best_it_feature_section_display','best-it');?>
<!--/ End service -->
<!--footer file include.....-->
<?php get_footer(); ?>
<!--end footer file include.....-->