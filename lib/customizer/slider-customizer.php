<?php
/**
 * The slider customizer file for load all  slider customoizer functions
 * 
 * @package best-it
 */

new best_it_slider_Customizer();

class best_it_slider_Customizer {
	public function __construct() {
		add_action( 'customize_register', array( $this, 'register_slider_customize_sections' ) );
	}

	public function register_slider_customize_sections( $wp_customize ) {
        /*
        * Add settings to slider sections.
        */
        $this->best_it_slider_info_section( $wp_customize );
    }
    /* Sanitize slider display Inputs */
    public function best_it_slider_sanitize_custom_option($input) {
        return ( $input === "No" ) ? "No" : "Yes";
    }

     /* Sanitize slider category display Inputs */
    public function sanitize_best_it_slider_category_option($input) {
        return $input;
    }
    /* Sanitize slider display Inputs */
    public function best_it_slider_number_sanitize_custom_option($input) {
        return $input;
    }

    /* header top  info section */
    private function best_it_slider_info_section( $wp_customize ) {
    	// new pannel for header top info section
    	$wp_customize->add_section('best-it-slider-info-sections', array(
            'title' => __('Slider section'),
            'priority' => 3,
            'description' => __('The Slider section section is only displayed on Home page you can control category option and how many slioder will displayed', 'best-it'),
        ));
        // setting for header top info section
    	$wp_customize->add_setting('best-it-slider-info-display', array(
            'default' => 'No',
            'sanitize_callback' => array( $this, 'best_it_slider_sanitize_custom_option' )
        ));
        // control for slider info setting and section
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-slider-info-control', array(
            'label' => __('Display slider section?'),
            'section' => 'best-it-slider-info-sections',
            'settings' => 'best-it-slider-info-display',
            'type' => 'select',
            'choices' => array('No' => 'No', 'Yes' => 'Yes')
        )));
        /// get category for slider to display
           $categories =get_terms('slider-category');

        $cats = array();
        $i = 0;
        foreach($categories as $category){
            if($i==0){
                $default = $category->slug;
                $i++;
            }
            $cats[$category->slug] = $category->name;
        }
        // setting for slider category option
    	$wp_customize->add_setting('best-it-slider-category-display', array(
            'default'        => 'UnCategory',
            'sanitize_callback' => array( $this, 'sanitize_best_it_slider_category_option' )
        ));
        // control for header top phone number info control
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-header-top-info-phone-number-control', array(
            'label' => __('Select Slider Category:'),
            'section' => 'best-it-slider-info-sections',
            'settings' => 'best-it-slider-category-display',
            'type'    => 'select',
            'choices' => $cats
        )));

        // setting for slider count display section
        $wp_customize->add_setting('best-it-slider-number-display', array(
            'default' => 5,
            'sanitize_callback' => array( $this, 'best_it_slider_number_sanitize_custom_option' )
        ));
        // control for slider info setting and section
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-slider-number-control', array(
            'label' => __('How may slider want to section?'),
            'section' => 'best-it-slider-info-sections',
            'settings' => 'best-it-slider-number-display',
            'type' => 'select',
            'choices' => array(1 => 'One',2 => 'Two' ,3=> 'Three', 4=>  'Four', 5=> 'Five', 6=> 'Six',)
        )));

    }

}
