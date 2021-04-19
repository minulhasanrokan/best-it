<?php
/**
 * The speatial section  file for all Speatial Section customization function
 * 
 * @package best-it
 */


new best_it_speatial_section_Customizer();

class best_it_speatial_section_Customizer {
	public function __construct() {
		add_action( 'customize_register', array( $this, 'register_speatial_section_customize_sections' ) );
	}

	public function register_speatial_section_customize_sections( $wp_customize ) {
        /*
        * Add settings to sections.
        */
        $this->speatial_section_info_section( $wp_customize );
    }
    /* Sanitize speatial section display option display Inputs */
    public function sanitize_speatial_section_display_custom_option($input) {
        return ( $input === "No" ) ? "No" : "Yes";
    }
    //Sanitize speatial section title
    public function sanitize_custom_speatial_section_title_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

       //Sanitize speatial section details 
    public function sanitize_custom_speatial_section_deatils_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

       //Sanitize speatial section page button text
    public function sanitize_custom_speatial_section_button_text_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

     //Sanitize speatial section page button link
    public function sanitize_custom_speatial_section_button_link_option($input) {
        return filter_var($input, FILTER_SANITIZE_URL);
    }

    /* speatial section  info section */
    private function speatial_section_info_section( $wp_customize ) {
    	// new pannel for speatial section info section
    	$wp_customize->add_section('best-it-speatial-section-info-sections', array(
            'title' => __('Speatial Section'),
            'priority' => 2,
            'description' => __('The speatial section info section is only displayed Speatial Section the company', 'best-it'),
        ));
        // setting for speatial section info setting
    	$wp_customize->add_setting('best-it-speatial-section-info-display', array(
            'default' => 'No',
            'sanitize_callback' => array( $this, 'sanitize_speatial_section_display_custom_option' )
        ));
        // control for speatial section info control
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-speatial-section-info-control', array(
            'label' => __('Display Speatial  section?'),
            'section' => 'best-it-speatial-section-info-sections',
            'settings' => 'best-it-speatial-section-info-display',
            'type' => 'select',
            'choices' => array('No' => 'No', 'Yes' => 'Yes')
        )));

        // setting for speatial section Title
    	$wp_customize->add_setting('best-it-speatial-section-title-display', array(
            'default' => 'Welcome to Datasoft International LTD',
            'sanitize_callback' => array( $this, 'sanitize_custom_speatial_section_title_option' )
        ));
        // control for speatial section Title
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-speatial-section-title-control', array(
            'label' => __('Input Speatial Section  Title:'),
            'section' => 'best-it-speatial-section-info-sections',
            'settings' => 'best-it-speatial-section-title-display',
            'type' => 'text',
        ))); 


        // setting for speatial section sub Title
    	$wp_customize->add_setting('best-it-speatial-section-deatils-display', array(
            'default' => 'Speatial Section deatils',
            'sanitize_callback' => array( $this, 'sanitize_custom_speatial_section_deatils_option' )
        ));
        // control for speatial section sub Title
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-speatial-section-deatils-control', array(
            'label' => __('Input Speatial Section deatils:'),
            'section' => 'best-it-speatial-section-info-sections',
            'settings' => 'best-it-speatial-section-deatils-display',
            'type' => 'textarea',
        )));


        // setting for speatial section Page Button Text
    	$wp_customize->add_setting('best-it-speatial-section-button-text-display', array(
            'default' => 'Read more',
            'sanitize_callback' => array( $this, 'sanitize_custom_speatial_section_button_text_option' )
        ));
        // control for speatial section Page Button Text
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-speatial-section-button-text-control', array(
            'label' => __('Portfolio link text'),
            'section' => 'best-it-speatial-section-info-sections',
            'settings' => 'best-it-speatial-section-button-text-display',
            'type' => 'text',
        )));


        // setting for speatial section Page Button link
    	$wp_customize->add_setting('best-it-speatial-section-button-link-display', array(
            'default' => esc_url('datasoftint.com'),
            'sanitize_callback' => array( $this, 'sanitize_custom_speatial_section_button_link_option' )
        ));
        // control for Speatial Section  Page Button Text
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-speatial-section-button-link-control', array(
            'label' => __('Input Portfolio page Link:'),
            'section' => 'best-it-speatial-section-info-sections',
            'settings' => 'best-it-speatial-section-button-link-display',
            'type' => 'url',
        )));


        // setting for Speatial section  image
        $wp_customize->add_setting('speatial_section_image', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        ));

        // setting for Speatial section image
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, ' 
        Speatial_section_image_control', array(
        'label' => __( 'Speatial section image', 'theme-slug' ),
        'settings' => 'speatial_section_image',
        'section' => 'best-it-speatial-section-info-sections',
        ))
        );

        // setting for Speatial section background image
        $wp_customize->add_setting('Speatial_section_bg_image', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        ));

        // setting for Speatial section background image
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, ' 
        Speatial_section_bg_image_control', array(
        'label' => __( 'Background image', 'theme-slug' ),
        'settings' => 'Speatial_section_bg_image',
        'section' => 'best-it-speatial-section-info-sections',
        ))
        );

    }

}