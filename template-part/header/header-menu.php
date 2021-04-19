<?php
/**
 * The header menu for displaying header menu
 * 
 * @package best-it
 */
?>
<header class="header header_style_01">
    <nav class="megamenu navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php
                    // logo and title....................
                    $best_it_custom_logo_id = get_theme_mod( 'custom_logo' );
                    $best_it_logo = wp_get_attachment_image_src( $best_it_custom_logo_id , 'full' );
                    if ( has_custom_logo() ) {
                            echo '<a class="navbar-brand" href="'.esc_url(get_home_url()).'"><img src="' . esc_url( $best_it_logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
                    } else {
                            echo '<a href="'.esc_url(get_home_url()).'"><h1>'. get_bloginfo( 'name' ) .'</h1></a>';
                    } 
                ?>
            </div>
            <!--main menu/header menu call-->
            <?php do_action('do_best_it_main_menu','best-it');?>
        </div>
    </nav>
</header>