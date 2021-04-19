<?php
/**
 * The copy right customizer  file for all header top customizer funtion function
 * 
 * @package best-it
 */

new best_it_copy_right_Customizer();

class best_it_copy_right_Customizer {
	public function __construct() {
		add_action( 'customize_register', array( $this, 'register_copy_right_customize_sections' ) );
	}

	public function register_copy_right_customize_sections( $wp_customize ) {
        /*
        * Add settings to sections.
        */
        $this->copy_right_info_section( $wp_customize );
    }
    /* Sanitize display Inputs */
    public function sanitize_copy_right_option($input) {
        return ( $input === "No" ) ? "No" : "Yes";
    }
    //Sanitize phone number value
    public function sanitize_custom_copy_right_text_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

    /* header top  info section */
    private function copy_right_info_section( $wp_customize ) {
    	// new pannel for header top info section
    	$wp_customize->add_section('best-it-copy-right-info-sections', array(
            'title' => __('Copy Right section'),
            'priority' => 2,
            'description' => __('The Header Top info section is only displayed phone number, email id, opnening and closing time and social incons in header top bar', 'best-it'),
        ));
        // setting for header top info setting
    	$wp_customize->add_setting('best-it-copy-right-info-display', array(
            'default' => 'No',
            'sanitize_callback' => array( $this, 'sanitize_copy_right_option' )
        ));
        // control for header top info control
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-copy-right-info-control', array(
            'label' => __('Display Copy Right section?'),
            'section' => 'best-it-copy-right-info-sections',
            'settings' => 'best-it-copy-right-info-display',
            'type' => 'select',
            'choices' => array('No' => 'No', 'Yes' => 'Yes')
        )));

        // setting for header top Email number info setting
    	$wp_customize->add_setting('best-it-copy-right-text-display', array(
            'default' => 'Design and Developed By <a href="https://www.fiverr.com/mhrokan247"> Md. Minul hasan</a>',
            'sanitize_callback' => array( $this, 'sanitize_custom_copy_right_text_option' )
        ));
        // control for header top Email number info control
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-copy-right-info-email-number-control', array(
            'label' => __('Copy Right Text:'),
            'section' => 'best-it-copy-right-info-sections',
            'settings' => 'best-it-copy-right-text-display',
            'type' => 'textarea',
        )));  
    }

}