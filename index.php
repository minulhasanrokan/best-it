<?php
/**
 * The index file for displaying main  file
 * 
 * @package best-it
 */

	//get header file....
	get_header();?>
	
	<!-- Slider-->
    <?php do_action('do_best_it_slider_display','best-it');?>
    <!--/ End Slider -->

    <!-- about-->
    <?php do_action('do_best_it_about_section_display','best-it');?>
    <!--/ End about -->
    
    <!-- parallax-->
      <?php do_action('do_best_it_parallax_section_display','best-it');?>
    <!--/ End parallax -->
	
    <!-- service-->
    <?php do_action('do_best_it_service_display','best-it');?>
    <!--/ End service -->
	
	<!-- service-->
    <?php do_action('do_best_it_speatial_section_display','best-it');?>
    <!--/ End service -->

    <!-- service-->
    <?php do_action('do_best_it_feature_section_display','best-it');?>
    <!--/ End service -->
    <!--footer file include.....-->
   	<?php get_footer(); ?>
    <!--end footer file include.....-->