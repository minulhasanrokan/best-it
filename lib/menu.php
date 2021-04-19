<?php
/**
 * The menu file for all menu function
 * 
 * @package best-it
 */


// main menu/header menu.........
 if (!function_exists('best_it_main_menu')) {
    function best_it_main_menu(){
        wp_nav_menu( array( 
        'theme_location' => 'main-menu',
        'container' => 'div',
        'container_id'=>'navbar',
        'container_class'=>'navbar-collapse collapse',
        'menu_class' => 'nav navbar-nav navbar-right',
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'      => 0,
        'fallback_cb' =>  'best_it_custom_main_menu_fallback',
        ) );
    }
    add_action('do_best_it_main_menu','best_it_main_menu');
}

// main menu/header menu fall back
function best_it_custom_main_menu_fallback() {
  ?>
  <li><a href="<?php echo admin_url('nav-menus.php'); ?>"><?php esc_html_e( 'Set Up Your Menu', 'best-it' ); ?></a></li>
  <?php
}