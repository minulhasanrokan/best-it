<?php
/**
 * The Service file for displaying all services.....
 * 
 * @package best-it
 */
if (!function_exists('best_it_service_display')) {
function best_it_service_display(){
//service display or not get value from service customizer
if (get_theme_mod('best-it-service-info-display') == 'Yes') { 

?>
<div id="services" class="parallax section lb">
    <div class="container">
        <div class="section-title text-center">
            <?php
            if (get_theme_mod('best-it-service-title-display')) { 
                echo "<h3>".get_theme_mod('best-it-service-title-display')."</h3>";
            }
            ?>
            
            <?php
            if (get_theme_mod('best-it-service-deatils-display')) { 
                echo "<h3>".get_theme_mod('best-it-service-deatils-display')."</h3>";
            }
            ?>            
        </div><!-- end title -->

        <div class="owl-services owl-carousel owl-theme">
            <?php
         // The Query
         $the_Service = new WP_Query( array( 
            'post_type' => 'Service', 
            'order' => 'DSC',
            'post_status' => 'publish',
            'posts_per_page' => 10,
      
         ) );
         // The Loop for the_Service 
         if ( $the_Service->have_posts() ) {
             while ( $the_Service->have_posts() ) {
                 $the_Service->the_post();
        ;?>
            <div class="service-widget">
                <div class="post-media wow fadeIn">
                    <a href="<?php echo esc_url(the_post_thumbnail_url());?>" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                    <img src="<?php echo esc_url(the_post_thumbnail_url());?>" alt="" class="img-responsive img-rounded">
                </div>
				<div class="service-dit">
                    <a href="<?php the_permalink();?>">
					<h3><?php
                        // service title
                        if (the_title()) {
                            the_title();
                            }
                        ?>        
                    </h3>
                   </a>
					<?php
                    // service content
                    if (get_the_content()) {
                    echo wp_trim_words( get_the_content(), 20 );
                    }
                    ?>
				</div>
            </div>
            <!-- end service -->       
            <?php
                        }
             }
             /* Restore original Service Post Data */
             wp_reset_postdata(); 
            ?>
        </div><!-- end row -->
        <?php
        if (get_theme_mod('best-it-service-button-text-display')) { 
        ?> 
        <hr class="hr1">

        <div class="text-center">
            <a data-scroll href="<?php echo esc_url(get_theme_mod('best-it-service-button-link-display'));?>" class="btn btn-light btn-radius btn-brd"><?php echo get_theme_mod('best-it-service-button-text-display');?></a>
        </div>
        <?php }?>
    </div><!-- end container -->
</div><!-- end section -->

<?php
}
}
add_action("do_best_it_service_display","best_it_service_display");

}