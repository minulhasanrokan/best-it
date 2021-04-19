<?php
/**
 * The about  file for all about customization function
 * 
 * @package best-it
 */


new best_it_about_us_Customizer();

class best_it_about_us_Customizer {
	public function __construct() {
		add_action( 'customize_register', array( $this, 'register_about_us_customize_sections' ) );
	}

	public function register_about_us_customize_sections( $wp_customize ) {
        /*
        * Add settings to sections.
        */
        $this->about_us_info_section( $wp_customize );
    }
    /* Sanitize about us display option display Inputs */
    public function sanitize_about_us_display_custom_option($input) {
        return ( $input === "No" ) ? "No" : "Yes";
    }
    //Sanitize about us title
    public function sanitize_custom_about_us_title_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

       //Sanitize about us sub title
    public function sanitize_custom_about_us_sub_title_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

       //Sanitize about us details 
    public function sanitize_custom_about_deatils_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

     //Sanitize about us page video link
    public function sanitize_custom_about_video_link_option($input) {
        return filter_var($input, FILTER_SANITIZE_URL);
    }

       //Sanitize about us page button text
    public function sanitize_custom_about_button_text_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

     //Sanitize about us page button link
    public function sanitize_custom_about_button_link_option($input) {
        return filter_var($input, FILTER_SANITIZE_URL);
    }

    /* about us  info section */
    private function about_us_info_section( $wp_customize ) {
    	// new pannel for about us info section
    	$wp_customize->add_section('best-it-about-us-info-sections', array(
            'title' => __('About us info section 01'),
            'priority' => 2,
            'description' => __('The about us info section is only displayed about the company', 'best-it'),
        ));
        // setting for about us info setting
    	$wp_customize->add_setting('best-it-about-us-info-display', array(
            'default' => 'No',
            'sanitize_callback' => array( $this, 'sanitize_about_us_display_custom_option' )
        ));
        // control for about us info control
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-about-us-info-control', array(
            'label' => __('Display Hedaer top section?'),
            'section' => 'best-it-about-us-info-sections',
            'settings' => 'best-it-about-us-info-display',
            'type' => 'select',
            'choices' => array('No' => 'No', 'Yes' => 'Yes')
        )));

        // setting for about us Title
    	$wp_customize->add_setting('best-it-about-us-title-display', array(
            'default' => 'Welcome to Datasoft International LTD',
            'sanitize_callback' => array( $this, 'sanitize_custom_about_us_title_option' )
        ));
        // control for about us Title
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-about-us-title-control', array(
            'label' => __('Input About Us Title:'),
            'section' => 'best-it-about-us-info-sections',
            'settings' => 'best-it-about-us-title-display',
            'type' => 'text',
        ))); 

        // setting for about us sub Title
    	$wp_customize->add_setting('best-it-about-us-sub-title-display', array(
            'default' => 'About Us Sub title',
            'sanitize_callback' => array( $this, 'sanitize_custom_about_us_sub_title_option' )
        ));
        // control for about us sub Title
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-about-us-sub-title-control', array(
            'label' => __('Input About Us Title:'),
            'section' => 'best-it-about-us-info-sections',
            'settings' => 'best-it-about-us-sub-title-display',
            'type' => 'text',
        ))); 


        // setting for about us sub Title
    	$wp_customize->add_setting('best-it-about-us-deatils-display', array(
            'default' => 'About Us deatils',
            'sanitize_callback' => array( $this, 'sanitize_custom_about_deatils_option' )
        ));
        // control for about us sub Title
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-about-deatils-control', array(
            'label' => __('Input About Us deatils:'),
            'section' => 'best-it-about-us-info-sections',
            'settings' => 'best-it-about-us-deatils-display',
            'type' => 'textarea',
        )));


        // setting for about us video link
    	$wp_customize->add_setting('best-it-about-us-video-link-display', array(
            'default' => esc_url('minulhasan.com'),
            'sanitize_callback' => array( $this, 'sanitize_custom_about_video_link_option' )
        ));
        // control for about us Page Button Text
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-about-us-video-link-control', array(
            'label' => __('Input About us video Link:'),
            'section' => 'best-it-about-us-info-sections',
            'settings' => 'best-it-about-us-video-link-display',
            'type' => 'url',
        )));

        // setting for about us Page Button Text
    	$wp_customize->add_setting('best-it-about-us-button-text-display', array(
            'default' => 'Read more',
            'sanitize_callback' => array( $this, 'sanitize_custom_about_button_text_option' )
        ));
        // control for about us Page Button Text
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-about-button-text-control', array(
            'label' => __('Input About Us deatils:'),
            'section' => 'best-it-about-us-info-sections',
            'settings' => 'best-it-about-us-button-text-display',
            'type' => 'text',
        )));


        // setting for about us Page Button link
    	$wp_customize->add_setting('best-it-about-us-button-link-display', array(
            'default' => esc_url('datasoftint.com'),
            'sanitize_callback' => array( $this, 'sanitize_custom_about_button_link_option' )
        ));
        // control for about us Page Button Text
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-about-us-button-link-control', array(
            'label' => __('Input About us page Link:'),
            'section' => 'best-it-about-us-info-sections',
            'settings' => 'best-it-about-us-button-link-display',
            'type' => 'url',
        )));

        // setting for about us Page video thumbnail
        $wp_customize->add_setting('about_us_video_thumbnail', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		));

        // setting for about us Page video thumbnail
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, ' 
		about_us_video_thumbnail_control', array(
		'label' => __( 'Video Thumbnail', 'theme-slug' ),
		'settings' => 'about_us_video_thumbnail',
		'section' => 'best-it-about-us-info-sections',
		))
		);

    }

}



new best_it_about_us_02_Customizer();

class best_it_about_us_02_Customizer{
	public function __construct() {
		add_action( 'customize_register', array( $this, 'register_about_us_02_customize_sections' ) );
	}

	public function register_about_us_02_customize_sections( $wp_customize ) {
        /*
        * Add settings to sections.
        */
        $this->about_us_02_info_section( $wp_customize );
    }
    /* Sanitize about us display option display Inputs */
    public function sanitize_about_us_02_display_custom_option($input) {
        return ( $input === "No" ) ? "No" : "Yes";
    }
    //Sanitize about us title
    public function sanitize_custom_about_us_02_title_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

       //Sanitize about us sub title
    public function sanitize_custom_about_us_02_sub_title_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

       //Sanitize about us details 
    public function sanitize_custom_about_02_deatils_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }



       //Sanitize about us page button text
    public function sanitize_custom_about_button_02_text_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

     //Sanitize about us page button link
    public function sanitize_custom_about_02_02_button_link_option($input) {
        return filter_var($input, FILTER_SANITIZE_URL);
    }

    /* about us  info section */
    private function about_us_02_info_section( $wp_customize ) {
    	// new pannel for about us info section
    	$wp_customize->add_section('best-it-about-us-02-info-sections', array(
            'title' => __('About us info section 02'),
            'priority' => 2,
            'description' => __('The about us info section is only displayed about the company', 'best-it'),
        ));
        // setting for about us info setting
    	$wp_customize->add_setting('best-it-about-us-02-info-display', array(
            'default' => 'No',
            'sanitize_callback' => array( $this, 'sanitize_about_us_02_display_custom_option' )
        ));
        // control for about us info control
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-about-us-02-info-control', array(
            'label' => __('Display Hedaer top section?'),
            'section' => 'best-it-about-us-02-info-sections',
            'settings' => 'best-it-about-us-02-info-display',
            'type' => 'select',
            'choices' => array('No' => 'No', 'Yes' => 'Yes')
        )));

        // setting for about us Title
    	$wp_customize->add_setting('best-it-about-us-02-title-display', array(
            'default' => 'Welcome to Datasoft International LTD',
            'sanitize_callback' => array( $this, 'sanitize_custom_about_us_02_title_option' )
        ));
        // control for about us Title
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-about-us-02-title-control', array(
            'label' => __('Input About Us Title:'),
            'section' => 'best-it-about-us-02-info-sections',
            'settings' => 'best-it-about-us-02-title-display',
            'type' => 'text',
        ))); 

        // setting for about us sub Title
    	$wp_customize->add_setting('best-it-about-us-02-sub-title-display', array(
            'default' => 'About Us Sub title',
            'sanitize_callback' => array( $this, 'sanitize_custom_about_us_02_sub_title_option' )
        ));
        // control for about us sub Title
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-about-us-02-sub-title-control', array(
            'label' => __('Input About Us Title:'),
            'section' => 'best-it-about-us-02-info-sections',
            'settings' => 'best-it-about-us-02-sub-title-display',
            'type' => 'text',
        ))); 


        // setting for about us details
    	$wp_customize->add_setting('best-it-about-us-02-deatils-display', array(
            'default' => 'About Us deatils',
            'sanitize_callback' => array( $this, 'sanitize_custom_about_02_deatils_option' )
        ));
        // control for about us sub Title
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-about-02-deatils-control', array(
            'label' => __('Input About Us deatils:'),
            'section' => 'best-it-about-us-02-info-sections',
            'settings' => 'best-it-about-us-02-deatils-display',
            'type' => 'textarea',
        )));


        // setting for about us Page Button Text
    	$wp_customize->add_setting('best-it-about-us-02-button-text-display', array(
            'default' => 'Read more',
            'sanitize_callback' => array( $this, 'sanitize_custom_about_button_02_text_option' )
        ));
        // control for about us Page Button Text
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-about-button-02-text-control', array(
            'label' => __('Input About Us deatils:'),
            'section' => 'best-it-about-us-02-info-sections',
            'settings' => 'best-it-about-us-02-button-text-display',
            'type' => 'text',
        )));


        // setting for about us Page Button link
    	$wp_customize->add_setting('best-it-about-us-02-button-link-display', array(
            'default' => esc_url('datasoftint.com'),
            'sanitize_callback' => array( $this, 'sanitize_custom_about_02_02_button_link_option' )
        ));
        // control for about us Page Button Text
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-about-us-02-button-link-control', array(
            'label' => __('Input About us page Link:'),
            'section' => 'best-it-about-us-02-info-sections',
            'settings' => 'best-it-about-us-02-button-link-display',
            'type' => 'url',
        )));



        // setting for about us Page image
        $wp_customize->add_setting('about_us_page_image', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		));

        // setting for about us Page image
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, ' 
		about_us_page_image_control', array(
		'label' => __( 'image', 'theme-slug' ),
		'settings' => 'about_us_page_image',
		'section' => 'best-it-about-us-02-info-sections',
		))
		);

    }

}
