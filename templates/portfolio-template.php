<?php
/**
* The portfolio Tempalte for displaying portfolios page
* 
* Template Name: portfolio
* @package best-it
*/

//get header file....
get_header();?>
<?php do_action('do_best_it_breadcrumbs','best-it');?>

<div id="portfolio" class="section wb">
    <div class="container">
        <div class="section-title text-center">
            <h3>Our Portfolio</h3>
            <p class="lead">We build professional website templates, web design projects, material designs and UI kits. <br>Some of our awesome completed projects in below.</p>
        </div><!-- end title -->
    </div><!-- end container -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="portfolio-filter text-center">
                    <ul>
                        <li><a class="btn btn-dark btn-radius btn-brd active" href="#" data-filter="*"><span class="oi hidden-xs" data-glyph="grid-three-up"></span> All</a></li>
                        <?php 

                        $portfolio_menus = get_terms('portfolio-category');
                        foreach ($portfolio_menus as $portfolio_menu) {
                        ?>
                        <li><a class="btn btn-dark btn-radius btn-brd"  href="#" data-filter=".<?php echo $portfolio_menu->slug; ?>"><?php echo $portfolio_menu->name; ?></a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </nav>
            </div>
        </div>

        <hr class="invis">

        <div id="da-thumbs" class="da-thumbs portfolio">
        	<?php
         // The Query
         $the_portfolio = new WP_Query( array( 
            'post_type' => 'portfolio', 
            'order' => 'DSC',
            'post_status' => 'publish',
            'posts_per_page' => 20,
      
         ) );
         // The Loop for the_Service 
         if ( $the_portfolio->have_posts() ) {
             while ( $the_portfolio->have_posts() ) {
                 $the_portfolio->the_post();
        ;?>
            <div class="post-media pitem item-w1 item-h1 <?php $portfoio_items = get_the_terms(get_the_id(),'portfolio-category');
                 foreach ($portfoio_items as $portfoio_item) {
                 	echo $portfoio_item->slug." ";
                 }?>">
                <a href="<?php the_permalink();?>" >
                    <img src="<?php echo esc_url(the_post_thumbnail_url());?>" alt="" class="img-responsive">
                    <div>
                        <h3><?php
                        // service title
                        if (the_title()) {
                            the_title();
                            }
                        ?>  <small><?php $portfoio_items = get_the_terms(get_the_id(),'portfolio-category');
                 foreach ($portfoio_items as $portfoio_item) {
                 	echo $portfoio_item->name.", ";
                 }?></small></h3>
                        <i class="flaticon-unlink"></i>
                    </div>
                </a>
            </div>
            <!-- end service -->       
            <?php
                        }
             }
             /* Restore original Service Post Data */
             wp_reset_postdata(); 
            ?>

        </div><!-- end portfolio -->
    </div><!-- end container -->
</div><!-- end section -->
<!-- service-->
<?php do_action('do_best_it_service_display','best-it');?>
<!--/ End service -->


<!--footer file include.....-->
<?php get_footer(); ?>
<!--end footer file include.....-->