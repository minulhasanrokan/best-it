<?php
/**
 * The testimonial section  file for all testimonial Section customization function
 * 
 * @package best-it
 */


new best_it_testimonial_section_Customizer();

class best_it_testimonial_section_Customizer {
	public function __construct() {
		add_action( 'customize_register', array( $this, 'register_testimonial_section_customize_sections' ) );
	}

	public function register_testimonial_section_customize_sections( $wp_customize ) {
        /*
        * Add settings to sections.
        */
        $this->testimonial_section_info_section( $wp_customize );
    }
    /* Sanitize testimonial section display option display Inputs */
    public function sanitize_testimonial_section_display_custom_option($input) {
        return ( $input === "No" ) ? "No" : "Yes";
    }
    //Sanitize testimonial section title
    public function sanitize_custom_testimonial_section_title_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

       //Sanitize testimonial section details 
    public function sanitize_custom_testimonial_section_deatils_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

    /* testimonial section  info section */
    private function testimonial_section_info_section( $wp_customize ) {
    	// new pannel for testimonial section info section
    	$wp_customize->add_section('best-it-testimonial-section-info-sections', array(
            'title' => __('testimonial Section'),
            'priority' => 2,
            'description' => __('The testimonial section info section is only displayed testimonial Section the company', 'best-it'),
        ));
        // setting for testimonial section info setting
    	$wp_customize->add_setting('best-it-testimonial-section-info-display', array(
            'default' => 'No',
            'sanitize_callback' => array( $this, 'sanitize_testimonial_section_display_custom_option' )
        ));
        // control for testimonial section info control
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-testimonial-section-info-control', array(
            'label' => __('Display testimonial  section?'),
            'section' => 'best-it-testimonial-section-info-sections',
            'settings' => 'best-it-testimonial-section-info-display',
            'type' => 'select',
            'choices' => array('No' => 'No', 'Yes' => 'Yes')
        )));

        // setting for testimonial section Title
    	$wp_customize->add_setting('best-it-testimonial-section-title-display', array(
            'default' => 'Welcome to Datasoft International LTD',
            'sanitize_callback' => array( $this, 'sanitize_custom_testimonial_section_title_option' )
        ));
        // control for testimonial section Title
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-testimonial-section-title-control', array(
            'label' => __('Input testimonial Section  Title:'),
            'section' => 'best-it-testimonial-section-info-sections',
            'settings' => 'best-it-testimonial-section-title-display',
            'type' => 'text',
        ))); 


        // setting for testimonial section sub Title
    	$wp_customize->add_setting('best-it-testimonial-section-deatils-display', array(
            'default' => 'testimonial Section deatils',
            'sanitize_callback' => array( $this, 'sanitize_custom_testimonial_section_deatils_option' )
        ));
        // control for testimonial section sub Title
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-testimonial-section-deatils-control', array(
            'label' => __('Input testimonial Section deatils:'),
            'section' => 'best-it-testimonial-section-info-sections',
            'settings' => 'best-it-testimonial-section-deatils-display',
            'type' => 'textarea',
        )));

        // setting for testimonial section background image
        $wp_customize->add_setting('testimonial_section_bg_image', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        ));

        // setting for Speatial section background image
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, ' 
        testimonial_section_bg_image_control', array(
        'label' => __( 'Testomonial Background image', 'theme-slug' ),
        'settings' => 'testimonial_section_bg_image',
        'section' => 'best-it-testimonial-section-info-sections',
        ))
        );
    }

}