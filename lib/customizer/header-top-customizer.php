<?php
/**
 * The Header top customizer  file for all header top customizer funtion function
 * 
 * @package best-it
 */

new best_it_header_top_Customizer();

class best_it_header_top_Customizer {
	public function __construct() {
		add_action( 'customize_register', array( $this, 'register_header_top_customize_sections' ) );
	}

	public function register_header_top_customize_sections( $wp_customize ) {
        /*
        * Add settings to sections.
        */
        $this->header_top_info_section( $wp_customize );
    }
    /* Sanitize display Inputs */
    public function sanitize_custom_option($input) {
        return ( $input === "No" ) ? "No" : "Yes";
    }
    //Sanitize phone number value
    public function sanitize_custom_phone_number_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }
    //Sanitize Email id value
    public function sanitize_custom_email_number_option($input) {
        return filter_var($input, FILTER_SANITIZE_EMAIL);
    }
    //Sanitize facebook value
    public function sanitize_custom_facebook_option($input) {
        return filter_var($input, FILTER_SANITIZE_URL);
    }
    //Sanitize twitter value
    public function sanitize_custom_twitter_option($input) {
        return filter_var($input, FILTER_SANITIZE_URL);
    }
    //Sanitize linkedin value
    public function sanitize_custom_linkedin_option($input) {
        return filter_var($input, FILTER_SANITIZE_URL);
    }
    //Sanitize Instagram value
    public function sanitize_custom_Instagram_option($input) {
        return filter_var($input, FILTER_SANITIZE_URL);
    }

    //Sanitize blogger text value
    public function sanitize_custom_blogger_link_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

    /* header top  info section */
    private function header_top_info_section( $wp_customize ) {
    	// new pannel for header top info section
    	$wp_customize->add_section('best-it-header-top-info-sections', array(
            'title' => __('Header Top info section'),
            'priority' => 2,
            'description' => __('The Header Top info section is only displayed phone number, email id, opnening and closing time and social incons in header top bar', 'best-it'),
        ));
        // setting for header top info setting
    	$wp_customize->add_setting('best-it-header-top-info-display', array(
            'default' => 'No',
            'sanitize_callback' => array( $this, 'sanitize_custom_option' )
        ));
        // control for header top info control
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-header-top-info-control', array(
            'label' => __('Display Hedaer top section?'),
            'section' => 'best-it-header-top-info-sections',
            'settings' => 'best-it-header-top-info-display',
            'type' => 'select',
            'choices' => array('No' => 'No', 'Yes' => 'Yes')
        )));

        // setting for header top Email number info setting
    	$wp_customize->add_setting('best-it-header-top-info-email-number-display', array(
            'default' => 'minulhasanrokan@gmail.com',
            'sanitize_callback' => array( $this, 'sanitize_custom_email_number_option' )
        ));
        // control for header top Email number info control
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-header-top-info-email-number-control', array(
            'label' => __('Input Your Emial Id:'),
            'section' => 'best-it-header-top-info-sections',
            'settings' => 'best-it-header-top-info-email-number-display',
            'type' => 'email',
        )));  

                // setting for header top phone number info setting
    	$wp_customize->add_setting('best-it-header-top-info-phone-number-display', array(
            'default' => '+8801627197089',
            'sanitize_callback' => array( $this, 'sanitize_custom_phone_number_option' )
        ));
        // control for header top phone number info control
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-header-top-info-phone-number-control', array(
            'label' => __('Input Your Phone Number:'),
            'section' => 'best-it-header-top-info-sections',
            'settings' => 'best-it-header-top-info-phone-number-display',
            'type' => 'tel',
        )));
        
        // setting for header top facebook social info setting
    	$wp_customize->add_setting('best-it-header-top-info-facebook-display', array(
            'default' => esc_url('facebook.com/mhrokan.cse'),
            'sanitize_callback' => array( $this, 'sanitize_custom_facebook_option' )
        ));
        // control for header top facebook info control
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-header-top-info-facebook-control', array(
            'label' => __('Input facebook Account Link:'),
            'section' => 'best-it-header-top-info-sections',
            'settings' => 'best-it-header-top-info-facebook-display',
            'type' => 'url',
        )));


                        // setting for header top Instagram info setting
    	$wp_customize->add_setting('best-it-header-top-info-Instagram-display', array(
            'default' => esc_url('Instagram.com'),
            'sanitize_callback' => array( $this, 'sanitize_custom_Instagram_option' )
        ));
        // control for header top Instagram info control
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-header-top-info-Instagram-control', array(
            'label' => __('Input Instagram Account Link:'),
            'section' => 'best-it-header-top-info-sections',
            'settings' => 'best-it-header-top-info-Instagram-display',
            'type' => 'url',
        )));

                // setting for header top linkedin info setting
    	$wp_customize->add_setting('best-it-header-top-info-linkedin-display', array(
            'default' => esc_url('linkedin.com'),
            'sanitize_callback' => array( $this, 'sanitize_custom_linkedin_option' )
        ));
        // control for header top linkedin info control
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-header-top-info-linkedin-control', array(
            'label' => __('Input Linkedin Account Link:'),
            'section' => 'best-it-header-top-info-sections',
            'settings' => 'best-it-header-top-info-linkedin-display',
            'type' => 'url',
        )));

        // setting for header top twitter info setting
    	$wp_customize->add_setting('best-it-header-top-info-twitter-display', array(
            'default' => esc_url('twitter.com'),
            'sanitize_callback' => array( $this, 'sanitize_custom_twitter_option' )
        ));
        // control for header top twitter info control
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-header-top-info-twitter-control', array(
            'label' => __('Input Twitter Account Link:'),
            'section' => 'best-it-header-top-info-sections',
            'settings' => 'best-it-header-top-info-twitter-display',
            'type' => 'url',
        )));

        // setting for header top blogger info setting
    	$wp_customize->add_setting('best-it-header-top-info-blogger-link-display', array(
            'default' => esc_url('blogger.com'),
            'sanitize_callback' => array( $this, 'sanitize_custom_blogger_link_option' )
        ));
        // control for header top Instagram info control
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-header-top-info-blogger-url-control', array(
            'label' => __('Input blogger Link:'),
            'section' => 'best-it-header-top-info-sections',
            'settings' => 'best-it-header-top-info-blogger-link-display',
            'type' => 'url',
        )));

    }

}