<?php
/**
 * The about file for displaying all about of website
 * 
 * @package best-it
 */
if (!function_exists('best_it_about_section_display')) {
function best_it_about_section_display(){

//about section display or not get value from about 01 customizer
if (get_theme_mod('best-it-about-us-info-display') == 'Yes') { 
?>
<div id="about" class="section wb">
    <div class="container">
        <div class="row">
            <div class="
            <?php
                if(empty(get_theme_mod('about_us_video_thumbnail'))){
                    echo 'col-md-12';
                }
                else{
                    echo 'col-md-6';
                }
            ?>
            ">
                <div class="message-box">
                    <?php
                    // about us sub title....
                    if (get_theme_mod('best-it-about-us-sub-title-display')) { 
                    ?>
                    <h4><?php echo get_theme_mod('best-it-about-us-sub-title-display'); ?></h4>
                    <?php }?>
                    <?php
                    // about us title....
                    if (get_theme_mod('best-it-about-us-title-display')) { 
                    ?>
                    <h2><?php echo get_theme_mod('best-it-about-us-title-display'); ?></h2>
                    <?php }?>
                    <?php
                    // about us details
                    if (get_theme_mod('best-it-about-us-deatils-display')) {
                        
                        echo get_theme_mod('best-it-about-us-deatils-display');

                    }
                    ?>
                    
                    <?php
                    // about us link text 
                    if (get_theme_mod('best-it-about-us-button-text-display')) {
                    ?>
                    <a href="<?php 
                    // about us button link
                    if (get_theme_mod('best-it-about-us-button-link-display')) {
                    echo esc_url(get_theme_mod('best-it-about-us-button-link-display'));
                    }
                    else{
                        echo "#";
                    }
                     ?>"
                     class="btn btn-light btn-radius btn-brd grd1"><?php echo get_theme_mod('best-it-about-us-button-text-display'); ?></a>
                    <?php }?>

                </div><!-- end messagebox -->
            </div><!-- end col -->
            <?php 
            // about us video link
            if (get_theme_mod('best-it-about-us-video-link-display')) {
            ?>
            <div class="col-md-6">
                <div class="post-media wow fadeIn">
                    <img src="<?php 
                    if(get_theme_mod('about_us_video_thumbnail')){

                        echo get_theme_mod('about_us_video_thumbnail');
                        
                    }
                    else{
                    echo get_template_directory_uri().'/uploads/about_01.jpg'; }?>" alt="" class="img-responsive img-rounded">
                    <a href="<?php echo esc_url(get_theme_mod('best-it-about-us-video-link-display'));?>" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
                </div><!-- end media -->
            </div><!-- end col -->
            <?php }?>
        </div><!-- end row -->
        <?php }

        //about section display or not get value from about 02 customizer
        if (get_theme_mod('best-it-about-us-02-info-display') == 'Yes') { 
        ?>
        <hr class="hr1"> 

        <div class="row">
            <?php 
            // about us video link
            if (get_theme_mod('about_us_page_image')) {
            ?>
            <div class="col-md-6">
                <div class="post-media wow fadeIn">
                    <img src="<?php 
                    if(get_theme_mod('about_us_page_image')){

                        echo get_theme_mod('about_us_page_image');
                        
                    }
                    else{
                    echo get_template_directory_uri().'/uploads/about_01.jpg'; }?>" alt="" class="img-responsive img-rounded">
                    <a href="<?php echo esc_url(get_theme_mod('best-it-about-us-video-link-display'));?>" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
                </div><!-- end media -->
            </div><!-- end col -->
            <?php }?>
            
			
            <div class="<?php
                if(empty(get_theme_mod('about_us_page_image'))){
                    echo 'col-md-12';
                }
                else{
                    echo 'col-md-6';
                }
            ?>">
                <div class="message-box">
                    <?php
                    // about us sub title....
                    if (get_theme_mod('best-it-about-us-02-sub-title-display')) { 
                    ?>
                    <h4><?php echo esc_html(get_theme_mod('best-it-about-us-02-sub-title-display'));?></h4>
                    <?php }?>
                    <?php
                    // about us sub title....
                    if (get_theme_mod('best-it-about-us-02-title-display')) { 
                    ?>
                    <h2><?php echo esc_html(get_theme_mod('best-it-about-us-02-title-display'));?></h2>
                    <?php }?>
                    
                     <?php
                    // about us details
                    if (get_theme_mod('best-it-about-us-02-deatils-display')) {
                        
                        echo get_theme_mod('best-it-about-us-02-deatils-display');

                    }
                    ?>

                    <?php
                    // about us link text 
                    if (get_theme_mod('best-it-about-us-02-button-text-display')) {
                    ?>
                    <a href="<?php 
                    // about us button link
                    if (get_theme_mod('best-it-about-us-02-button-link-display')) {
                    echo esc_url(get_theme_mod('bbest-it-about-us-02-button-link-display'));
                    }
                    else{
                        echo '#';
                    }
                     ?>"
                     class="btn btn-light btn-radius btn-brd grd1"><?php echo get_theme_mod('best-it-about-us-02-button-text-display'); ?></a>
                    <?php }?>
                </div><!-- end messagebox -->
            </div><!-- end col -->
        </div><!-- end row -->
        <?php }?>
    </div><!-- end container -->
</div><!-- end section -->
<?php

}
    add_Action("do_best_it_about_section_display","best_it_about_section_display");
}