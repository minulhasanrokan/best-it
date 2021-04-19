<?php
/**
* The copyrights file for displaying copyrights 
* 
* @package best-it
*/
if (!function_exists('best_it_copy_right_section_display')) {
function best_it_copy_right_section_display(){
//Fcopy right display or not get value from customizer
if (get_theme_mod('best-it-copy-right-info-display') == 'Yes') { 
?>
<div class="copyrights">
    <div class="container">
        <div class="footer-distributed">
            <div class="footer-left">                   
                <p class="footer-company-name">
                	<?php
	                if (get_theme_mod('best-it-copy-right-text-display')) {
	                	echo get_theme_mod('best-it-copy-right-text-display');
	                }
	            	?>
                </p>
            </div>
        </div>
    </div><!-- end container -->
</div><!-- end copyrights -->
<?php
}
}
add_action("do_best_it_copy_right_section_display","best_it_copy_right_section_display");
}
