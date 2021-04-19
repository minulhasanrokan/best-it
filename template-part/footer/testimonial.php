<?php
/**
* The testimonials file for displaying testimonials section
* 
* @package best-it
*/
if (!function_exists('best_it_testimonial_section_display')) {
function best_it_testimonial_section_display(){
//testimonial section display or not get value from about 01 customizer
if (get_theme_mod('best-it-testimonial-section-info-display') == 'Yes') { 
?>
<div id="testimonials" class="parallax section db parallax-off" style="background-image:url('<?php
    if(get_theme_mod('testimonial_section_bg_image')){
        echo esc_url(get_theme_mod('testimonial_section_bg_image'));
    }
    else{
        echo get_template_directory_uri()."/uploads/parallax_03.jpg";
    }

    ?>');">
    <div class="container">
        <div class="section-title text-center">
             <?php 
                if(get_theme_mod('best-it-testimonial-section-title-display')){
                    echo "<h3>".get_theme_mod('best-it-testimonial-section-title-display')."</h3>";
                }

                if(get_theme_mod('best-it-testimonial-section-deatils-display')){
                    echo "<p class='lead'>".get_theme_mod('best-it-testimonial-section-deatils-display')."</p>";
                }
            ?>
        </div><!-- end title -->

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="testi-carousel owl-carousel owl-theme">
                    <?php
                    // The Query
                    $the_testimonial = new WP_Query( array( 
                        'post_type' => 'testimonial', 
                        'order' => 'DSC',
                        'post_status' => 'publish',
                    ) );
                    // The Loop for testimonial 
                    if ( $the_testimonial->have_posts() ) {
                         while ( $the_testimonial->have_posts() ) {
                             $the_testimonial->the_post();
                             $Testimonial_meta = get_post_meta( get_the_ID() );
                    ;?>

                    <div class="testimonial clearfix">
                        <div class="desc">
                            <a href="<?php the_permalink();?>">
                                <h3><i class="fa fa-quote-left"></i> 
                                    <?php
                                    // testimonial title
                                    if (the_title()) {

                                        the_title();
                                        }
                                    ?>
                                </h3>
                            </a>
                            <?php
                            // testimonial content
                            if (get_the_content()) {
                            echo  get_the_content();
                            }
                            ?>
                        </div>
                        <div class="testi-meta">
                            <img src="<?php 
                            if(has_post_thumbnail()){
                                echo esc_url(the_post_thumbnail_url());
                            }
                            else{
                            echo get_template_directory_uri().'/uploads/testi_01.png'; }?>" alt="" class="img-responsive alignleft">
                            <?php
                                if(isset($Testimonial_meta['Testimonial_Client_Name'][0])){
                            ?>
                            <h4><a href="
                            <?php 
                                if(isset($Testimonial_meta['Testimonial_client_link'][0])){
                                    echo esc_url($Testimonial_meta['Testimonial_client_link'][0]);
                                }
                                else{
                                    echo "#";
                                }
                            ?>"><?php echo esc_html($Testimonial_meta['Testimonial_Client_Name'][0]); ?></a><small><?php 
                            if(isset($Testimonial_meta['Testimonial_Company_name'][0])){
                            echo esc_html($Testimonial_meta['Testimonial_Company_name'][0]); 
                            } ?>
                            </small></h4>
                           <?php }?>
                        </div>
                        <!-- end testi-meta -->
                    </div>
                    <!-- end testimonial -->   
                    <?php
                    }
                     } else {

                     }
                     /* Restore original testimonial Post Data */
                     wp_reset_postdata(); 
                    ?>

                </div><!-- end carousel -->
            </div><!-- end col -->
        </div><!-- end row -->

        <!-- clients logo-->
        <?php get_template_part('template-part/footer/client','best-it');?>
        <!--/ End clients logo -->

    </div><!-- end container -->
</div><!-- end section -->
<?php
}
}
add_action("do_best_it_testimonial_section_display","best_it_testimonial_section_display");
}