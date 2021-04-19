<?php
/**
 * The service  file for all service customization function
 * 
 * @package best-it
 */


new best_it_service_Customizer();

class best_it_service_Customizer {
	public function __construct() {
		add_action( 'customize_register', array( $this, 'register_service_customize_sections' ) );
	}

	public function register_service_customize_sections( $wp_customize ) {
        /*
        * Add settings to sections.
        */
        $this->service_info_section( $wp_customize );
    }
    /* Sanitize service us display option display Inputs */
    public function sanitize_service_display_custom_option($input) {
        return ( $input === "No" ) ? "No" : "Yes";
    }
    //Sanitize service us title
    public function sanitize_custom_service_title_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

       //Sanitize service us details 
    public function sanitize_custom_service_deatils_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

       //Sanitize service us page button text
    public function sanitize_custom_service_button_text_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

     //Sanitize service us page button link
    public function sanitize_custom_service_button_link_option($input) {
        return filter_var($input, FILTER_SANITIZE_URL);
    }

    /* service us  info section */
    private function service_info_section( $wp_customize ) {
    	// new pannel for service us info section
    	$wp_customize->add_section('best-it-service-info-sections', array(
            'title' => __('Service Section'),
            'priority' => 2,
            'description' => __('The service us info section is only displayed service the company', 'best-it'),
        ));
        // setting for service us info setting
    	$wp_customize->add_setting('best-it-service-info-display', array(
            'default' => 'No',
            'sanitize_callback' => array( $this, 'sanitize_service_display_custom_option' )
        ));
        // control for service us info control
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-service-info-control', array(
            'label' => __('Display Service section?'),
            'section' => 'best-it-service-info-sections',
            'settings' => 'best-it-service-info-display',
            'type' => 'select',
            'choices' => array('No' => 'No', 'Yes' => 'Yes')
        )));

        // setting for service us Title
    	$wp_customize->add_setting('best-it-service-title-display', array(
            'default' => 'Welcome to Datasoft International LTD',
            'sanitize_callback' => array( $this, 'sanitize_custom_service_title_option' )
        ));
        // control for service us Title
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-service-title-control', array(
            'label' => __('Input service  Title:'),
            'section' => 'best-it-service-info-sections',
            'settings' => 'best-it-service-title-display',
            'type' => 'text',
        ))); 


        // setting for service us sub Title
    	$wp_customize->add_setting('best-it-service-deatils-display', array(
            'default' => 'service deatils',
            'sanitize_callback' => array( $this, 'sanitize_custom_service_deatils_option' )
        ));
        // control for service us sub Title
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-service-deatils-control', array(
            'label' => __('Input service deatils:'),
            'section' => 'best-it-service-info-sections',
            'settings' => 'best-it-service-deatils-display',
            'type' => 'textarea',
        )));


        // setting for service us Page Button Text
    	$wp_customize->add_setting('best-it-service-button-text-display', array(
            'default' => 'Read more',
            'sanitize_callback' => array( $this, 'sanitize_custom_service_button_text_option' )
        ));
        // control for service us Page Button Text
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-service-button-text-control', array(
            'label' => __('Portfolio link text'),
            'section' => 'best-it-service-info-sections',
            'settings' => 'best-it-service-button-text-display',
            'type' => 'text',
        )));


        // setting for service us Page Button link
    	$wp_customize->add_setting('best-it-service-button-link-display', array(
            'default' => esc_url('datasoftint.com'),
            'sanitize_callback' => array( $this, 'sanitize_custom_service_button_link_option' )
        ));
        // control for service  Page Button Text
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-service-button-link-control', array(
            'label' => __('Input Portfolio page Link:'),
            'section' => 'best-it-service-info-sections',
            'settings' => 'best-it-service-button-link-display',
            'type' => 'url',
        )));

    }

}