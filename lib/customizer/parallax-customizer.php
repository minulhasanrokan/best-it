<?php
/**
 * The parallax  file for all parallax customization function
 * 
 * @package best-it
 */


new best_it_parallax_Customizer();

class best_it_parallax_Customizer {
	public function __construct() {
		add_action( 'customize_register', array( $this, 'register_parallax_customize_sections' ) );
	}

	public function register_parallax_customize_sections( $wp_customize ) {
        /*
        * Add settings to sections.
        */
        $this->parallax_info_section( $wp_customize );
    }
    /* Sanitize parallax display option display Inputs */
    public function sanitize_parallax_display_custom_option($input) {
        return ( $input === "No" ) ? "No" : "Yes";
    }

    //Sanitize parallax title 01 
    public function sanitize_custom_parallax_01_title_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

    //Sanitize parallax counter  01
    public function sanitize_custom_parallax_01_counter_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

    //Sanitize parallax title 02 
    public function sanitize_custom_parallax_02_title_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

    //Sanitize parallax counter  02
    public function sanitize_custom_parallax_02_counter_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

    //Sanitize parallax title 03 
    public function sanitize_custom_parallax_03_title_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

    //Sanitize parallax counter  03
    public function sanitize_custom_parallax_03_counter_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

    //Sanitize parallax title 04 
    public function sanitize_custom_parallax_04_title_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

    //Sanitize parallax counter  04
    public function sanitize_custom_parallax_04_counter_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

    /* parallax  info section */
    private function parallax_info_section( $wp_customize ) {
    	// new pannel for parallax info section
    	$wp_customize->add_section('best-it-parallax-info-sections', array(
            'title' => __('parallax Section'),
            'priority' => 2,
            'description' => __('The parallax info section is only displayed parallax the company', 'best-it'),
        ));
        // setting for parallax info setting
    	$wp_customize->add_setting('best-it-parallax-info-display', array(
            'default' => 'No',
            'sanitize_callback' => array( $this, 'sanitize_parallax_display_custom_option' )
        ));
        // control for parallax info control
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-parallax-info-control', array(
            'label' => __('Display parallax section?'),
            'section' => 'best-it-parallax-info-sections',
            'settings' => 'best-it-parallax-info-display',
            'type' => 'select',
            'choices' => array('No' => 'No', 'Yes' => 'Yes')
        )));


        // setting for parallax background image
        $wp_customize->add_setting('parallax_section_bg_image', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        ));

        // setting for parallax Background image
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, ' 
        parallax_section_main_image_control', array(
        'label' => __( 'parallax Background image', 'theme-slug' ),
        'settings' => 'parallax_section_bg_image',
        'section' => 'best-it-parallax-info-sections',
        ))
        );



         // setting for parallax 01 Title
        $wp_customize->add_setting('best-it-parallax-01-title-display', array(
            'default' => 'Input parallax 01 Title:',
            'sanitize_callback' => array( $this, 'sanitize_custom_parallax_01_title_option' )
        ));
        // control for parallax 01 Title
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-parallax-01-title-control', array(
            'label' => __('Input parallax 01 Title:'),
            'section' => 'best-it-parallax-info-sections',
            'settings' => 'best-it-parallax-01-title-display',
            'type' => 'text',
        )));

         // setting for parallax 01 counter
        $wp_customize->add_setting('best-it-parallax-01-counter-display', array(
            'default' => 100,
            'sanitize_callback' => array( $this, 'sanitize_custom_parallax_01_counter_option' )
        ));
        // control for parallax 01 counter
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-parallax-01-counter-control', array(
            'label' => __('Input parallax 01 counter:'),
            'section' => 'best-it-parallax-info-sections',
            'settings' => 'best-it-parallax-01-counter-display',
            'type' => 'number',
        )));


        // setting for parallax 01 image
        $wp_customize->add_setting('parallax_section_01_image', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        ));

        // setting for parallax 01 image
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, ' 
        parallax_section_01_image_control', array(
        'label' => __( 'parallax 01 image', 'theme-slug' ),
        'settings' => 'parallax_section_01_image',
        'section' => 'best-it-parallax-info-sections',
        ))
        );


        // setting for parallax 02 Title
        $wp_customize->add_setting('best-it-parallax-02-title-display', array(
            'default' => 'Input parallax 02 Title:',
            'sanitize_callback' => array( $this, 'sanitize_custom_parallax_02_title_option' )
        ));
        // control for parallax 02 Title
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-parallax-02-title-control', array(
            'label' => __('Input parallax 02 Title:'),
            'section' => 'best-it-parallax-info-sections',
            'settings' => 'best-it-parallax-02-title-display',
            'type' => 'text',
        )));

         // setting for parallax 02 counter
        $wp_customize->add_setting('best-it-parallax-02-counter-display', array(
            'default' => 100,
            'sanitize_callback' => array( $this, 'sanitize_custom_parallax_02_counter_option' )
        ));
        // control for parallax 02 counter
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-parallax-02-counter-control', array(
            'label' => __('Input parallax 02 counter:'),
            'section' => 'best-it-parallax-info-sections',
            'settings' => 'best-it-parallax-02-counter-display',
            'type' => 'number',
        )));


        // setting for parallax 02 image
        $wp_customize->add_setting('parallax_section_02_image', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        ));

        // setting for parallax 02 image
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, ' 
        parallax_section_02_image_control', array(
        'label' => __( 'parallax 02 image', 'theme-slug' ),
        'settings' => 'parallax_section_02_image',
        'section' => 'best-it-parallax-info-sections',
        ))
        );

        // setting for parallax 03 Title
        $wp_customize->add_setting('best-it-parallax-03-title-display', array(
            'default' => 'Input parallax 03 Title:',
            'sanitize_callback' => array( $this, 'sanitize_custom_parallax_03_title_option' )
        ));
        // control for parallax 03 Title
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-parallax-03-title-control', array(
            'label' => __('Input parallax 03 Title:'),
            'section' => 'best-it-parallax-info-sections',
            'settings' => 'best-it-parallax-03-title-display',
            'type' => 'text',
        )));

         // setting for parallax 03 counter
        $wp_customize->add_setting('best-it-parallax-03-counter-display', array(
            'default' => 100,
            'sanitize_callback' => array( $this, 'sanitize_custom_parallax_03_counter_option' )
        ));
        // control for parallax 03 counter
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-parallax-03-counter-control', array(
            'label' => __('Input parallax 03 counter:'),
            'section' => 'best-it-parallax-info-sections',
            'settings' => 'best-it-parallax-03-counter-display',
            'type' => 'number',
        )));


        // setting for parallax 03 image
        $wp_customize->add_setting('parallax_section_03_image', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        ));

        // setting for parallax 03 image
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, ' 
        parallax_section_03_image_control', array(
        'label' => __( 'parallax 03 image', 'theme-slug' ),
        'settings' => 'parallax_section_03_image',
        'section' => 'best-it-parallax-info-sections',
        ))
        );


        // setting for parallax 04 Title
        $wp_customize->add_setting('best-it-parallax-04-title-display', array(
            'default' => 'Input parallax 04 Title:',
            'sanitize_callback' => array( $this, 'sanitize_custom_parallax_04_title_option' )
        ));
        // control for parallax 04 Title
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-parallax-04-title-control', array(
            'label' => __('Input parallax 04 Title:'),
            'section' => 'best-it-parallax-info-sections',
            'settings' => 'best-it-parallax-04-title-display',
            'type' => 'text',
        )));

         // setting for parallax 04 counter
        $wp_customize->add_setting('best-it-parallax-04-counter-display', array(
            'default' => 100,
            'sanitize_callback' => array( $this, 'sanitize_custom_parallax_04_counter_option' )
        ));
        // control for parallax 04 counter
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-parallax-04-counter-control', array(
            'label' => __('Input parallax 04 counter:'),
            'section' => 'best-it-parallax-info-sections',
            'settings' => 'best-it-parallax-04-counter-display',
            'type' => 'number',
        )));


        // setting for parallax 04 image
        $wp_customize->add_setting('parallax_section_04_image', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        ));

        // setting for parallax 04 image
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, ' 
        parallax_section_04_image_control', array(
        'label' => __( 'parallax 04 image', 'theme-slug' ),
        'settings' => 'parallax_section_04_image',
        'section' => 'best-it-parallax-info-sections',
        ))
        );
    }

}