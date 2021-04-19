<?php
/**
* The slider file for displaying all slider in home page  file
* 
* @package best-it
*/
if (!function_exists('best_it_slider_display')) {
function best_it_slider_display(){

//Slider display or not get value from Slider customizer
if (get_theme_mod('best-it-slider-info-display') == 'Yes') { 
// get slider category
$slider_category=get_theme_mod('best-it-slider-category-display');
// get slider number
$slider_number=get_theme_mod('best-it-slider-number-display');
?>
<div class="slider-area">
	<div class="slider-wrapper owl-carousel">
		<?php
		 // The Query
		 $the_slider = new WP_Query( array( 
		 	'post_type' => 'slider', 
		 	'order' => 'DSC',
		    'post_status' => 'publish',
		    'posts_per_page' => $slider_number,
		    'tax_query' => array(
                array(
                     'taxonomy' => 'slider-category',
                     'field' => 'slug',
                     'terms' => $slider_category
                )
           )
		 ) );
		 // The Loop for slider 
		 if ( $the_slider->have_posts() ) {
			 while ( $the_slider->have_posts() ) {
				 $the_slider->the_post();
				 $slider_meta = get_post_meta( get_the_ID() );
		;?>
		<div class="slider-item text-center home-one-slider-otem slider-item-four" style="background-image:url('<?php 
			if(has_post_thumbnail()){
			echo esc_url(the_post_thumbnail_url());
			}
			else{
				echo esc_url(get_home_url()."/wp-content/themes/best-it/uploads/slider_02.jpg");
			}
			?>')">
			<div class="container">
				<div class="row">
					<div class="slider-content-area">
						<div class="slide-text">
							<h1 class="homepage-three-title"><span>
								<?php
								// slider title
								if (the_title()) {
									the_title();
									}
								?>
							</span></h1>
								<?php
								// slider sub title
								if (isset($slider_meta['slider_sub_title'][0])){
								echo "<h2>".$slider_meta['slider_sub_title'][0]."</h2>";
								}
								?>
							<div class="slider-content-btn">
								<?php
								// slider button 01
								if (isset($slider_meta['slider_button_01_text'][0])) {
								?>
								<a class="button btn btn-light btn-radius btn-brd" href="<?php echo esc_url($slider_meta['slider_button_01_link'][0]); ?>"><?php echo $slider_meta['slider_button_01_text'][0];?></a>
								<?php }?>
								<?php 
								// slider button 02
								if (isset($slider_meta['slider_button_02_text'][0])){
								?>
								<a class="button btn btn-light btn-radius btn-brd" href="<?php echo esc_url($slider_meta['slider_button_02_link'][0]); ?>"><?php echo $slider_meta['slider_button_02_text'][0];?></a>
								<?php }?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php
					}
		 }
		 /* Restore original slider Post Data */
		 wp_reset_postdata(); 
		?>

	</div>
</div>
<?php 

}

}
add_action('do_best_it_slider_display','best_it_slider_display');

}