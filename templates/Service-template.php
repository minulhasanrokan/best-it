<?php
/**
 * The Service Tempalte for displaying Service page
 * 
 * Template Name: Service
 * @package best-it
 */
//get header file....
get_header();?>
<?php do_action('do_best_it_breadcrumbs','best-it');?>
    <div id="about" class="section wb">
        <div class="container">
           <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="about-item">
                        <div class="about-icon">
                            <span class="icon icon-display"></span>
                        </div>
                        <div class="about-text">
                            <h3> <a href="#">Lorem ipsum dolor. </a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur ea, quis magnam deserunt. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="about-item">
                        <div class="about-icon">
                            <span class="icon icon-database"></span>
                        </div>
                        <div class="about-text">
                            <h3> <a href="#">Lorem ipsum dolor. </a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur ea, quis magnam deserunt. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="about-item">
                        <div class="about-icon">
                            <span class="icon icon-magic-wand"></span>
                        </div>
                        <div class="about-text">
                            <h3> <a href="#">Lorem ipsum dolor. </a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur ea, quis magnam deserunt. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="about-item">
                        <div class="about-icon">
                            <span class="icon icon-cloud"></span>
                        </div>
                        <div class="about-text">
                            <h3> <a href="#">Lorem ipsum dolor. </a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur ea, quis magnam deserunt. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end section -->
    
    <!-- service-->
    <?php do_action('do_best_it_service_display','best-it');?>
    <!--/ End service -->

    <!--footer file include.....-->
    <?php get_footer(); ?>
    <!--end footer file include.....-->