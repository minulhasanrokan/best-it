<?php
/**
* The footer file for displaying footer section
* 
* @package best-it 
*/
?>
<!-- Testimonials-->
     <?php do_action('do_best_it_testimonial_section_display','best-it');?>
<!--/ End Testimonials -->
<!-- footer widgets-->
    <?php do_action('do_best_it_footer_widgets_section_display','best-it');?>
<!--/ End footer widgets -->

<!-- copyrights-->
    <?php do_action('do_best_it_copy_right_section_display','best-it');?>
<!--/ End copyrights -->

<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

<!-- ALL JS FILES -->
<script src="<?php echo get_template_directory_uri();?>/js/all.js"></script>
<!-- ALL PLUGINS -->
<script src="<?php echo get_template_directory_uri();?>/js/custom.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/portfolio.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/hoverdir.js"></script>    
<?php wp_footer();?>
</body>
</html>