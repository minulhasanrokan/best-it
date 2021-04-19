<?php
/**
* The ffooter widgets file for displaying footer widgets 
* 
* @package best-it
*/
if (!function_exists('best_it_footer_widgets_section_display')) {
function best_it_footer_widgets_section_display(){
?>
<footer class="footer">
    <div class="container">
        <div class="row">
        <?php
            //footer widgets
            if(is_active_sidebar( 'footer-widgets' )){
             dynamic_sidebar( 'footer-widgets');
            }
        ?>
        </div><!-- end row -->
    </div><!-- end container -->
</footer><!-- end footer -->
<?php
}
add_action("do_best_it_footer_widgets_section_display","best_it_footer_widgets_section_display");
}