<?php
/**
 * The Speatial section 01 file for displaying all Speatial section 01.....
 * 
 * @package best-it
 */
if (!function_exists('best_it_speatial_section_display')) {
function best_it_speatial_section_display(){
//Speatial section display or not get value from about 01 customizer
if (get_theme_mod('best-it-speatial-section-info-display') == 'Yes') { 
?>

<div class="parallax section noover" data-stellar-background-ratio="0.7" style="
    <?php
        if(get_theme_mod("Speatial_section_bg_image")){
    ?>

    background-image:url('<?php echo get_theme_mod("Speatial_section_bg_image");?>');
    <?php }
        else{
            echo "background: black";
        }
    ?>
    ">
    <div class="container">
        <div class="row text-center">
            <div class="
            <?php
                if(get_theme_mod('speatial_section_image')){
                    echo "col-md-6";
                }
                else{
                    echo "col-md-12";
                }
            ?>">
                <div class="customwidget text-left">
                    <?php 
                        if(get_theme_mod('best-it-speatial-section-title-display')){
                            echo "<h1>".get_theme_mod('best-it-speatial-section-title-display')."</h1>";
                        }

                        if(get_theme_mod('best-it-speatial-section-deatils-display')){
                            echo get_theme_mod('best-it-speatial-section-deatils-display');
                        }
                    ?>
                    <?php 

                        if(get_theme_mod('best-it-speatial-section-button-text-display')){
                    ?>
                    <a href="<?php echo esc_url(get_theme_mod('best-it-speatial-section-button-link-display'));?>" data-scroll class="btn btn-light btn-radius btn-brd"><?php echo get_theme_mod('best-it-speatial-section-button-text-display');?></a>
                    <?php

                        }
                    ?>
                </div>
            </div><!-- end col -->
            <?php 
                if (get_theme_mod('speatial_section_image')) { 
            ?>
			<div class="col-md-6">
                <div class="text-center image-center hidden-sm hidden-xs">
                    <img src="<?php echo get_theme_mod('speatial_section_image'); ?>" alt="" class="img-responsive wow fadeInUp">
                </div>
            </div>
            <?php }?>
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->
<?php
}
}
add_action("do_best_it_speatial_section_display","best_it_speatial_section_display");
}