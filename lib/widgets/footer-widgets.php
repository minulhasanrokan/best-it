<?php
/**
 * The widgets file for include  all footer widgets functions
 * 
 * @package best-it
 */
// custom footer menu widgets
class best_it_footer_menu_Widget extends WP_Widget {
 
    function __construct() {
    	$widget_ops = array(
			'description'                 => __( 'Add a Footer menu to your footer section.' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'Footer-Menu-widgets', __( 'Footer Menu widgets' ), $widget_ops );
 
 
        add_action( 'widgets_init', function() {
            register_widget( 'best_it_footer_menu_Widget' );
        });
 
    }
    public $args = array(
        'before_widget' => '<div class="col-md-4 col-sm-4 col-xs-12"><div class="widget clearfix">',
        'after_widget'  => ' </div></div>',
        'before_title'  => '<div class="widget-title"><h3>',
        'after_title'   => '<h3></div>',
    );
 public function widget( $args, $instance ) {
		// Get menu.
		$footer_menu = ! empty( $instance['footer_menu'] ) ? wp_get_nav_menu_object( $instance['footer_menu'] ) : false;

		if ( ! $footer_menu ) {
			return;
		}
		$title         = ! empty( $instance['title'] ) ? $instance['title'] : '';

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

		echo $args['before_widget'];

		if ( $title ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}

			$footer_menu_args = array(
				'fallback_cb' => '',
				'menu'        => $footer_menu,
				'items_wrap'  => '<ul class="footer-links hov">%3$s</ul>',
				'link_after' =>'<span class="icon icon-arrow-right2"></span>',
			);
	
		wp_nav_menu( apply_filters( 'widget_footer_menu_args', $footer_menu_args, $footer_menu, $args, $instance ) );

		echo $args['after_widget'];
	}


	public function update( $new_instance, $old_instance ) {
		$instance = array();
		if ( ! empty( $new_instance['title'] ) ) {
			$instance['title'] = sanitize_text_field( $new_instance['title'] );
		}
		if ( ! empty( $new_instance['footer_menu'] ) ) {
			$instance['footer_menu'] = (int) $new_instance['footer_menu'];
		}
		return $instance;
	}

	public function form( $instance ) {
		global $wp_customize;
		$title    = isset( $instance['title'] ) ? $instance['title'] : '';
		$footer_menu = isset( $instance['footer_menu'] ) ? $instance['footer_menu'] : '';

		// Get menus.
		$menus = wp_get_nav_menus();

		// If no menus exists, direct the user to go and create some.
		?>
		<div class="nav-menu-widget-form-controls">
			<p>
				<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>"/>
			</p>
			<p>
				<label for="<?php echo $this->get_field_id( 'footer_menu' ); ?>"><?php _e( 'Select Menu:' ); ?></label>
				<select id="<?php echo $this->get_field_id( 'footer_menu' ); ?>" name="<?php echo $this->get_field_name( 'footer_menu' ); ?>">
					<option value="0"><?php _e( '&mdash; Select &mdash;' ); ?></option>
					<?php foreach ( $menus as $menu ) : ?>
						<option value="<?php echo esc_attr( $menu->term_id ); ?>" <?php selected( $footer_menu, $menu->term_id ); ?>>
							<?php echo esc_html( $menu->name ); ?>
						</option>
					<?php endforeach; ?>
				</select>
			</p>
			<?php if ( $wp_customize instanceof WP_Customize_Manager ) : ?>
				<p class="edit-selected-nav-menu" style="<?php echo $footer_menu_style; ?>">
					<button type="button" class="button"><?php _e( 'Edit Menu' ); ?></button>
				</p>
			<?php endif; ?>
		</div>
<?php
 
    }
 
}
$my_widget = new best_it_footer_menu_Widget();





// custom footer news leetter widgets
class best_it_footer_news_letter_Widget extends WP_Widget {
 
    function __construct() {
    	$widget_ops = array(
			'description'                 => __( 'Add a News Latter to your footer section.' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'footer_news_letter_Widget', __( 'Footer News Latter widgets' ), $widget_ops );
 
 
        add_action( 'widgets_init', function() {
            register_widget( 'best_it_footer_news_letter_Widget' );
        });
 
    }
    public $args = array(
        'before_widget' => '<div class="col-md-4 col-sm-4 col-xs-12"><div class="widget clearfix">',
        'after_widget'  => ' </div></div>',
        'before_title'  => '<div class="widget-title"><h3>',
        'after_title'   => '<h3>',
    );
 public function widget( $args, $instance ) {
		$news_letter_Title         = ! empty( $instance['news_letter_Title'] ) ? $instance['news_letter_Title'] : '';
		$news_latter_details         = ! empty( $instance['news_latter_details'] ) ? $instance['news_latter_details'] : '';
		$footer_news_letter_short_code         = ! empty( $instance['footer_news_letter_short_code'] ) ? $instance['footer_news_letter_short_code'] : '';

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$news_letter_Title = apply_filters( 'widget_title', $news_letter_Title, $instance, $this->id_base );

		echo $args['before_widget'];

		if ( $news_letter_Title ) {
			echo $args['before_title'] . $news_letter_Title . $args['after_title'];
		}
		if ( $news_latter_details ) {
			echo $news_latter_details;
		}

		echo '</div><div class="footer-right">';

		if ( $footer_news_letter_short_code ) {
			echo do_shortcode ($footer_news_letter_short_code);


		}
		echo '<i class="fa fa-envelope-o"></i></div>';
		

		
		

		echo $args['after_widget'];
	}


	public function update( $new_instance, $old_instance ) {
		$instance = array();
		if ( ! empty( $new_instance['news_letter_Title'] ) ) {
			$instance['news_letter_Title'] = sanitize_text_field( $new_instance['news_letter_Title'] );
		}
		if ( ! empty( $new_instance['news_latter_details'] ) ) {
			$instance['news_latter_details'] = sanitize_text_field( $new_instance['news_latter_details'] );
		}
		if ( ! empty( $new_instance['footer_news_letter_short_code'] ) ) {
			$instance['footer_news_letter_short_code'] = sanitize_text_field( $new_instance['footer_news_letter_short_code'] );
		}

		return $instance;
	}

	public function form( $instance ) {
		global $wp_customize;
		$news_letter_Title    = isset( $instance['news_letter_Title'] ) ? $instance['news_letter_Title'] : '';
		$news_latter_details = isset( $instance['news_latter_details'] ) ? $instance['news_latter_details'] : '';
		$footer_news_letter_short_code = isset( $instance['footer_news_letter_short_code'] ) ? $instance['footer_news_letter_short_code'] : '';
		?>
		<div class="nav-menu-widget-form-controls" >
			<p>
				<label for="<?php echo $this->get_field_id( 'news_letter_Title' ); ?>"><?php _e( 'news_letter_Title:' ); ?></label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'news_letter_Title' ); ?>" name="<?php echo $this->get_field_name( 'news_letter_Title' ); ?>" value="<?php echo esc_attr( $news_letter_Title ); ?>"/>
			</p>
			<p>
				<label for="<?php echo $this->get_field_id( 'news_latter_details' ); ?>"><?php _e( 'News latter Details:' ); ?></label>
				<textarea class="widefat" id="<?php echo $this->get_field_id( 'news_latter_details' ); ?>" name="<?php echo $this->get_field_name( 'news_latter_details' ); ?>" value="<?php echo esc_attr( $news_latter_details ); ?>"><?php echo esc_attr( $news_latter_details ); ?></textarea>
			</p>
			<p>
				<label for="<?php echo $this->get_field_id( 'footer_news_letter_short_code' ); ?>"><?php _e( 'News latter Form Short Code:' ); ?></label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'footer_news_letter_short_code' ); ?>" name="<?php echo $this->get_field_name( 'footer_news_letter_short_code' ); ?>" value="<?php echo esc_attr( $footer_news_letter_short_code ); ?>"/>
			</p>
	
		</div>
<?php
 
    }
 
}
$my_widget = new best_it_footer_news_letter_Widget();




// footer  sidebar display option
function best_it_footer_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Footer Sidebar', 'best-it' ),
        'description'	=> __('Display all footer wdgets here'),
        'id'            => 'footer-widgets',
        'before_widget' => '<div class="col-md-4 col-sm-4 col-xs-12"><div class="widget clearfix">',
        'after_widget'  => ' </div></div>',
        'before_title'  => '<div class="widget-title"><h3>',
        'after_title'   => '<h3></div>',
    ) );
}

add_action( 'widgets_init', 'best_it_footer_widgets_init' );


