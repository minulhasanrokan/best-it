<?php
/**
 * The Feature file for displaying all Feature.....
 * 
 * @package best-it
 */
if (!function_exists('best_it_feature_section_display')) {
function best_it_feature_section_display(){
//Feature section display or not get value from customizer
if (get_theme_mod('best-it-feature-info-display') == 'Yes') { 
?>
<div id="features" class="section lb">
    <div class="container">
        <div class="section-title text-center">
            <?php 
                if(get_theme_mod('best-it-feature-title-display')){
                    echo "<h3>".get_theme_mod('best-it-feature-title-display')."</h3>";
                }

                if(get_theme_mod('best-it-feature-deatils-display')){
                    echo get_theme_mod('best-it-feature-deatils-display');
                }
            ?>
        </div><!-- end title -->

        <div class="row">
            <div class="
            <?php
            if(empty(get_theme_mod('feature_section_main_image'))){
                echo "col-md-6 col-sm-6 col-xs-12";
            }
            else{
                echo "col-md-4 col-sm-6 col-xs-12";
            }
            ?>
            ">
                <ul class="features-left">
                    <?php 
                        if(get_theme_mod('best-it-feature-01-title-display')){
                    ?>
                    <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                        <i ><img src="<?php echo esc_url(get_theme_mod('feature_section_01_image'));?>"></i>
                        <div class="fl-inner">
                            <?php echo "<h4>".get_theme_mod('best-it-feature-01-title-display')."</h4>";?>
                            <p><?php echo get_theme_mod('best-it-feature-01-details-display');?></p>
                        </div>
                    </li>
                    <?php }?>
                    <?php 
                        if(get_theme_mod('best-it-feature-03-title-display')){
                    ?>
                    <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                        <i ><img src="<?php echo esc_url(get_theme_mod('feature_section_03_image'));?>"></i>
                        <div class="fl-inner">
                            <?php echo "<h4>".get_theme_mod('best-it-feature-03-title-display')."</h4>";?>
                            <p><?php echo get_theme_mod('best-it-feature-03-details-display');?></p>
                        </div>
                    </li>
                    <?php }?>
                    <?php 
                        if(get_theme_mod('best-it-feature-05-title-display')){
                    ?>
                    <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                        <i ><img src="<?php echo esc_url(get_theme_mod('feature_section_05_image'));?>"></i>
                        <div class="fl-inner">
                            <?php echo "<h4>".get_theme_mod('best-it-feature-05-title-display')."</h4>";?>
                            <p><?php echo get_theme_mod('best-it-feature-05-details-display');?></p>
                        </div>
                    </li>
                    <?php }?>
                    <?php 
                        if(get_theme_mod('best-it-feature-07-title-display')){
                    ?>
                    <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                        <i ><img src="<?php echo esc_url(get_theme_mod('feature_section_07_image'));?>"></i>
                        <div class="fl-inner">
                            <?php echo "<h4>".get_theme_mod('best-it-feature-07-title-display')."</h4>";?>
                            <p><?php echo get_theme_mod('best-it-feature-07-details-display');?></p>
                        </div>
                    </li>
                    <?php }?>
                  
                </ul>
            </div>
            <?php 
                if(get_theme_mod('feature_section_main_image')){
            ?>
            <div class="col-md-4 hidden-xs hidden-sm">
                <img src="<?php echo esc_url(get_theme_mod('feature_section_main_image'));?>" class="img-center img-responsive" alt="">
            </div>
            <?php }?>
            <div class="
            <?php
            if(empty(get_theme_mod('feature_section_main_image'))){
                echo "col-md-6 col-sm-6 col-xs-12";
            }
            else{
                echo "col-md-4 col-sm-6 col-xs-12";
            }
            ?>">
                <ul class="features-right">
                    <?php 
                        if(get_theme_mod('best-it-feature-02-title-display')){
                    ?>
                    <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                        <i ><img src="<?php echo esc_url(get_theme_mod('feature_section_02_image'));?>"></i>
                        <div class="fr-inner">
                            <?php echo "<h4>".get_theme_mod('best-it-feature-02-title-display')."</h4>";?>
                            <p><?php echo get_theme_mod('best-it-feature-02-details-display');?></p>
                        </div>
                    </li>
                    <?php }?>
                      <?php 
                        if(get_theme_mod('best-it-feature-04-title-display')){
                    ?>
                    <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                        <i ><img src="<?php echo esc_url(get_theme_mod('feature_section_04_image'));?>"></i>
                        <div class="fr-inner">
                            <?php echo "<h4>".get_theme_mod('best-it-feature-04-title-display')."</h4>";?>
                            <p><?php echo get_theme_mod('best-it-feature-04-details-display');?></p>
                        </div>
                    </li>
                    <?php }?>
                    <?php 
                        if(get_theme_mod('best-it-feature-06-title-display')){
                    ?>
                    <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                        <i ><img src="<?php echo esc_url(get_theme_mod('feature_section_06_image'));?>"></i>
                        <div class="fr-inner">
                            <?php echo "<h4>".get_theme_mod('best-it-feature-06-title-display')."</h4>";?>
                            <p><?php echo get_theme_mod('best-it-feature-06-details-display');?></p>
                        </div>
                    </li>
                    <?php }?>
                    <?php 
                        if(get_theme_mod('best-it-feature-08-title-display')){
                    ?>
                    <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                        <i ><img src="<?php echo esc_url(get_theme_mod('feature_section_08_image'));?>"></i>
                        <div class="fr-inner">
                            <?php echo "<h4>".get_theme_mod('best-it-feature-08-title-display')."</h4>";?>
                            <p><?php echo get_theme_mod('best-it-feature-08-details-display');?></p>
                        </div>
                    </li>
                    <?php }?>
                </ul>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->
<?php
}
}
add_action("do_best_it_feature_section_display","best_it_feature_section_display");
}