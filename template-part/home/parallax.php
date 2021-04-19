<?php
/**
 * The parallax file for displaying all parallax in home page
 * @package best-it
 */ 
if (!function_exists('best_it_parallax_section_display')) {
function best_it_parallax_section_display(){
//parllax section display or not get value from customizer
if (get_theme_mod('best-it-parallax-info-display') == 'Yes') { 
?>
<div class="parallax section parallax-off" data-stellar-background-ratio="0.9" style="background-image:url('<?php
    if(get_theme_mod('parallax_section_bg_image')){
        echo get_theme_mod('parallax_section_bg_image');
    }
    else{
    echo get_template_directory_uri()."/uploads/parallax_04.jpg"; 
    }?>');">
    <div class="container">
        <div class="row text-center stat-wrap">
            <?php
                if (get_theme_mod('best-it-parallax-01-title-display')) {
            ?>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <span data-scroll class="global-radius icon_wrap effect-1"><i><img style="width: 100px; height: 100px; border-radius: 50px; margin-top: -7px; border-radius: 25px 0px 25px 0px;" src="<?php echo get_theme_mod('parallax_section_01_image');?>"></i></span>
                <?php
                    if(get_theme_mod('best-it-parallax-01-counter-display')){
                ?>
                <p class="stat_count"><?php echo get_theme_mod('best-it-parallax-01-counter-display');?></p>
                <?php }?>
                <h3><?php echo get_theme_mod('best-it-parallax-01-title-display');?></h3>
            </div><!-- end col -->
            <?php }?>

            <?php
                if (get_theme_mod('best-it-parallax-02-title-display')) {
            ?>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <span data-scroll class="global-radius icon_wrap effect-1"><i><img style="width: 100px; height: 100px; border-radius: 50px; margin-top: -7px; border-radius: 25px 0px 25px 0px;" src="<?php echo get_theme_mod('parallax_section_02_image');?>"></i></span>
                <?php
                    if(get_theme_mod('best-it-parallax-02-counter-display')){
                ?>
                <p class="stat_count"><?php echo get_theme_mod('best-it-parallax-02-counter-display');?></p>
                <?php }?>
                <h3><?php echo get_theme_mod('best-it-parallax-02-title-display');?></h3>
            </div><!-- end col -->
            <?php }?>

            <?php
                if (get_theme_mod('best-it-parallax-03-title-display')) {
            ?>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <span data-scroll class="global-radius icon_wrap effect-1"><i><img style="width: 100px; height: 100px; border-radius: 50px; margin-top: -7px; border-radius: 25px 0px 25px 0px;" src="<?php echo get_theme_mod('parallax_section_03_image');?>"></i></span>
                <?php
                    if(get_theme_mod('best-it-parallax-03-counter-display')){
                ?>
                <p class="stat_count"><?php echo get_theme_mod('best-it-parallax-03-counter-display');?></p>
                <?php }?>
                <h3><?php echo get_theme_mod('best-it-parallax-03-title-display');?></h3>
            </div><!-- end col -->
            <?php }?>

            <?php
                if (get_theme_mod('best-it-parallax-04-title-display')) {
            ?>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <span data-scroll class="global-radius icon_wrap effect-1"><i><img style="width: 100px; height: 100px; border-radius: 50px; margin-top: -7px; border-radius: 25px 0px 25px 0px;" src="<?php echo get_theme_mod('parallax_section_04_image');?>"></i></span>
                <?php
                    if(get_theme_mod('best-it-parallax-04-counter-display')){
                ?>
                <p class="stat_count"><?php echo get_theme_mod('best-it-parallax-04-counter-display');?></p>
                <?php }?>
                <h3><?php echo get_theme_mod('best-it-parallax-04-title-display');?></h3>
            </div><!-- end col -->
            <?php }?>
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->
<?php
}
}
add_action("do_best_it_parallax_section_display","best_it_parallax_section_display");
}