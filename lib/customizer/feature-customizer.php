<?php
/**
 * The feature  file for all feature customization function
 * 
 * @package best-it
 */


new best_it_feature_Customizer();

class best_it_feature_Customizer {
	public function __construct() {
		add_action( 'customize_register', array( $this, 'register_feature_customize_sections' ) );
	}

	public function register_feature_customize_sections( $wp_customize ) {
        /*
        * Add settings to sections.
        */
        $this->feature_info_section( $wp_customize );
    }
    /* Sanitize feature display option display Inputs */
    public function sanitize_feature_display_custom_option($input) {
        return ( $input === "No" ) ? "No" : "Yes";
    }
    //Sanitize feature title
    public function sanitize_custom_feature_title_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

       //Sanitize feature details 
    public function sanitize_custom_feature_deatils_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

    //Sanitize feature title 01 
    public function sanitize_custom_feature_01_title_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

    //Sanitize feature details  01
    public function sanitize_custom_feature_01_details_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

    //Sanitize feature title 02 
    public function sanitize_custom_feature_02_title_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

    //Sanitize feature details  02
    public function sanitize_custom_feature_02_details_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

    //Sanitize feature title 03 
    public function sanitize_custom_feature_03_title_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

    //Sanitize feature details  03
    public function sanitize_custom_feature_03_details_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

    //Sanitize feature title 04 
    public function sanitize_custom_feature_04_title_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

    //Sanitize feature details  04
    public function sanitize_custom_feature_04_details_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

    //Sanitize feature title 05 
    public function sanitize_custom_feature_05_title_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

    //Sanitize feature details  05
    public function sanitize_custom_feature_05_details_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

    //Sanitize feature title 06 
    public function sanitize_custom_feature_06_title_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

    //Sanitize feature details  06
    public function sanitize_custom_feature_06_details_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

    //Sanitize feature title 07 
    public function sanitize_custom_feature_07_title_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

    //Sanitize feature details  07
    public function sanitize_custom_feature_07_details_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

    //Sanitize feature title 08 
    public function sanitize_custom_feature_08_title_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

    //Sanitize feature details  08
    public function sanitize_custom_feature_08_details_option($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }


    /* feature  info section */
    private function feature_info_section( $wp_customize ) {
    	// new pannel for feature info section
    	$wp_customize->add_section('best-it-feature-info-sections', array(
            'title' => __('feature Section'),
            'priority' => 2,
            'description' => __('The feature info section is only displayed feature the company', 'best-it'),
        ));
        // setting for feature info setting
    	$wp_customize->add_setting('best-it-feature-info-display', array(
            'default' => 'No',
            'sanitize_callback' => array( $this, 'sanitize_feature_display_custom_option' )
        ));
        // control for feature info control
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-feature-info-control', array(
            'label' => __('Display feature section?'),
            'section' => 'best-it-feature-info-sections',
            'settings' => 'best-it-feature-info-display',
            'type' => 'select',
            'choices' => array('No' => 'No', 'Yes' => 'Yes')
        )));

        // setting for feature Title
    	$wp_customize->add_setting('best-it-feature-title-display', array(
            'default' => 'Welcome to Datasoft International LTD',
            'sanitize_callback' => array( $this, 'sanitize_custom_feature_title_option' )
        ));
        // control for feature Title
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-feature-title-control', array(
            'label' => __('Input feature  Title:'),
            'section' => 'best-it-feature-info-sections',
            'settings' => 'best-it-feature-title-display',
            'type' => 'text',
        ))); 


        // setting for feature details
    	$wp_customize->add_setting('best-it-feature-deatils-display', array(
            'default' => 'feature deatils',
            'sanitize_callback' => array( $this, 'sanitize_custom_feature_deatils_option' )
        ));
        // control for feature details
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-feature-deatils-control', array(
            'label' => __('Input feature deatils:'),
            'section' => 'best-it-feature-info-sections',
            'settings' => 'best-it-feature-deatils-display',
            'type' => 'textarea',
        )));

        // setting for feature main image
        $wp_customize->add_setting('feature_section_main_image', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        ));

        // setting for feature main image
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, ' 
        feature_section_main_image_control', array(
        'label' => __( 'Feature main image', 'theme-slug' ),
        'settings' => 'feature_section_main_image',
        'section' => 'best-it-feature-info-sections',
        ))
        );



         // setting for feature 01 Title
        $wp_customize->add_setting('best-it-feature-01-title-display', array(
            'default' => 'Input Feature 01 Title:',
            'sanitize_callback' => array( $this, 'sanitize_custom_feature_01_title_option' )
        ));
        // control for feature 01 Title
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-feature-01-title-control', array(
            'label' => __('Input feature 01 Title:'),
            'section' => 'best-it-feature-info-sections',
            'settings' => 'best-it-feature-01-title-display',
            'type' => 'text',
        )));

         // setting for feature 01 details
        $wp_customize->add_setting('best-it-feature-01-details-display', array(
            'default' => 'Input Feature 01 details:',
            'sanitize_callback' => array( $this, 'sanitize_custom_feature_01_details_option' )
        ));
        // control for feature 01 details
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-feature-01-details-control', array(
            'label' => __('Input feature 01 deatils:'),
            'section' => 'best-it-feature-info-sections',
            'settings' => 'best-it-feature-01-details-display',
            'type' => 'text',
        )));


        // setting for feature 01 image
        $wp_customize->add_setting('feature_section_01_image', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        ));

        // setting for feature 01 image
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, ' 
        feature_section_01_image_control', array(
        'label' => __( 'Feature 01 image', 'theme-slug' ),
        'settings' => 'feature_section_01_image',
        'section' => 'best-it-feature-info-sections',
        ))
        );


        // setting for feature 02 Title
        $wp_customize->add_setting('best-it-feature-02-title-display', array(
            'default' => 'Input Feature 02 Title:',
            'sanitize_callback' => array( $this, 'sanitize_custom_feature_02_title_option' )
        ));
        // control for feature 02 Title
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-feature-02-title-control', array(
            'label' => __('Input feature 02 Title:'),
            'section' => 'best-it-feature-info-sections',
            'settings' => 'best-it-feature-02-title-display',
            'type' => 'text',
        )));

         // setting for feature 02 details
        $wp_customize->add_setting('best-it-feature-02-details-display', array(
            'default' => 'Input Feature 02 details:',
            'sanitize_callback' => array( $this, 'sanitize_custom_feature_02_details_option' )
        ));
        // control for feature 02 details
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-feature-02-details-control', array(
            'label' => __('Input feature 02 deatils:'),
            'section' => 'best-it-feature-info-sections',
            'settings' => 'best-it-feature-02-details-display',
            'type' => 'text',
        )));


        // setting for feature 02 image
        $wp_customize->add_setting('feature_section_02_image', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        ));

        // setting for feature 02 image
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, ' 
        feature_section_02_image_control', array(
        'label' => __( 'Feature 02 image', 'theme-slug' ),
        'settings' => 'feature_section_02_image',
        'section' => 'best-it-feature-info-sections',
        ))
        );

        // setting for feature 03 Title
        $wp_customize->add_setting('best-it-feature-03-title-display', array(
            'default' => 'Input Feature 03 Title:',
            'sanitize_callback' => array( $this, 'sanitize_custom_feature_03_title_option' )
        ));
        // control for feature 03 Title
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-feature-03-title-control', array(
            'label' => __('Input feature 03 Title:'),
            'section' => 'best-it-feature-info-sections',
            'settings' => 'best-it-feature-03-title-display',
            'type' => 'text',
        )));

         // setting for feature 03 details
        $wp_customize->add_setting('best-it-feature-03-details-display', array(
            'default' => 'Input Feature 03 details:',
            'sanitize_callback' => array( $this, 'sanitize_custom_feature_03_details_option' )
        ));
        // control for feature 03 details
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-feature-03-details-control', array(
            'label' => __('Input feature 03 deatils:'),
            'section' => 'best-it-feature-info-sections',
            'settings' => 'best-it-feature-03-details-display',
            'type' => 'text',
        )));


        // setting for feature 03 image
        $wp_customize->add_setting('feature_section_03_image', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        ));

        // setting for feature 03 image
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, ' 
        feature_section_03_image_control', array(
        'label' => __( 'Feature 03 image', 'theme-slug' ),
        'settings' => 'feature_section_03_image',
        'section' => 'best-it-feature-info-sections',
        ))
        );


        // setting for feature 04 Title
        $wp_customize->add_setting('best-it-feature-04-title-display', array(
            'default' => 'Input Feature 04 Title:',
            'sanitize_callback' => array( $this, 'sanitize_custom_feature_04_title_option' )
        ));
        // control for feature 04 Title
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-feature-04-title-control', array(
            'label' => __('Input feature 04 Title:'),
            'section' => 'best-it-feature-info-sections',
            'settings' => 'best-it-feature-04-title-display',
            'type' => 'text',
        )));

         // setting for feature 04 details
        $wp_customize->add_setting('best-it-feature-04-details-display', array(
            'default' => 'Input Feature 04 details:',
            'sanitize_callback' => array( $this, 'sanitize_custom_feature_04_details_option' )
        ));
        // control for feature 04 details
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-feature-04-details-control', array(
            'label' => __('Input feature 04 deatils:'),
            'section' => 'best-it-feature-info-sections',
            'settings' => 'best-it-feature-04-details-display',
            'type' => 'text',
        )));


        // setting for feature 04 image
        $wp_customize->add_setting('feature_section_04_image', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        ));

        // setting for feature 04 image
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, ' 
        feature_section_04_image_control', array(
        'label' => __( 'Feature 04 image', 'theme-slug' ),
        'settings' => 'feature_section_04_image',
        'section' => 'best-it-feature-info-sections',
        ))
        );

        // setting for feature 05 Title
        $wp_customize->add_setting('best-it-feature-05-title-display', array(
            'default' => 'Input Feature 05 Title:',
            'sanitize_callback' => array( $this, 'sanitize_custom_feature_05_title_option' )
        ));
        // control for feature 05 Title
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-feature-05-title-control', array(
            'label' => __('Input feature 05 Title:'),
            'section' => 'best-it-feature-info-sections',
            'settings' => 'best-it-feature-05-title-display',
            'type' => 'text',
        )));

         // setting for feature 05 details
        $wp_customize->add_setting('best-it-feature-05-details-display', array(
            'default' => 'Input Feature 05 details:',
            'sanitize_callback' => array( $this, 'sanitize_custom_feature_05_details_option' )
        ));
        // control for feature 05 details
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-feature-05-details-control', array(
            'label' => __('Input feature 05 deatils:'),
            'section' => 'best-it-feature-info-sections',
            'settings' => 'best-it-feature-05-details-display',
            'type' => 'text',
        )));


        // setting for feature 05 image
        $wp_customize->add_setting('feature_section_05_image', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        ));

        // setting for feature 05 image
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, ' 
        feature_section_05_image_control', array(
        'label' => __( 'Feature 05 image', 'theme-slug' ),
        'settings' => 'feature_section_05_image',
        'section' => 'best-it-feature-info-sections',
        ))
        );

        // setting for feature 06 Title
        $wp_customize->add_setting('best-it-feature-06-title-display', array(
            'default' => 'Input Feature 06 Title:',
            'sanitize_callback' => array( $this, 'sanitize_custom_feature_06_title_option' )
        ));
        // control for feature 06 Title
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-feature-06-title-control', array(
            'label' => __('Input feature 06 Title:'),
            'section' => 'best-it-feature-info-sections',
            'settings' => 'best-it-feature-06-title-display',
            'type' => 'text',
        )));

         // setting for feature 06 details
        $wp_customize->add_setting('best-it-feature-06-details-display', array(
            'default' => 'Input Feature 06 details:',
            'sanitize_callback' => array( $this, 'sanitize_custom_feature_06_details_option' )
        ));
        // control for feature 06 details
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-feature-06-details-control', array(
            'label' => __('Input feature 06 deatils:'),
            'section' => 'best-it-feature-info-sections',
            'settings' => 'best-it-feature-06-details-display',
            'type' => 'text',
        )));


        // setting for feature 06 image
        $wp_customize->add_setting('feature_section_06_image', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        ));

        // setting for feature 04 image
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, ' 
        feature_section_06_image_control', array(
        'label' => __( 'Feature 06 image', 'theme-slug' ),
        'settings' => 'feature_section_06_image',
        'section' => 'best-it-feature-info-sections',
        ))
        );



        // setting for feature 07 Title
        $wp_customize->add_setting('best-it-feature-07-title-display', array(
            'default' => 'Input Feature 07 Title:',
            'sanitize_callback' => array( $this, 'sanitize_custom_feature_07_title_option' )
        ));
        // control for feature 07 Title
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-feature-07-title-control', array(
            'label' => __('Input feature 07 Title:'),
            'section' => 'best-it-feature-info-sections',
            'settings' => 'best-it-feature-07-title-display',
            'type' => 'text',
        )));

         // setting for feature 07 details
        $wp_customize->add_setting('best-it-feature-07-details-display', array(
            'default' => 'Input Feature 07 details:',
            'sanitize_callback' => array( $this, 'sanitize_custom_feature_07_details_option' )
        ));
        // control for feature 07 details
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-feature-07-details-control', array(
            'label' => __('Input feature 07 deatils:'),
            'section' => 'best-it-feature-info-sections',
            'settings' => 'best-it-feature-07-details-display',
            'type' => 'text',
        )));


        // setting for feature 07 image
        $wp_customize->add_setting('feature_section_07_image', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        ));

        // setting for feature 07 image
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, ' 
        feature_section_07_image_control', array(
        'label' => __( 'Feature 07 image', 'theme-slug' ),
        'settings' => 'feature_section_07_image',
        'section' => 'best-it-feature-info-sections',
        ))
        );


        // setting for feature 08 Title
        $wp_customize->add_setting('best-it-feature-08-title-display', array(
            'default' => 'Input Feature 08 Title:',
            'sanitize_callback' => array( $this, 'sanitize_custom_feature_08_title_option' )
        ));
        // control for feature 08 Title
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-feature-08-title-control', array(
            'label' => __('Input feature 08 Title:'),
            'section' => 'best-it-feature-info-sections',
            'settings' => 'best-it-feature-08-title-display',
            'type' => 'text',
        )));

         // setting for feature 08 details
        $wp_customize->add_setting('best-it-feature-08-details-display', array(
            'default' => 'Input Feature 08 details:',
            'sanitize_callback' => array( $this, 'sanitize_custom_feature_08_details_option' )
        ));
        // control for feature 08 details
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'best-it-feature-08-details-control', array(
            'label' => __('Input feature 08 deatils:'),
            'section' => 'best-it-feature-info-sections',
            'settings' => 'best-it-feature-08-details-display',
            'type' => 'text',
        )));


        // setting for feature 08 image
        $wp_customize->add_setting('feature_section_08_image', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        ));

        // setting for feature 08 image
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, ' 
        feature_section_08_image_control', array(
        'label' => __( 'Feature 08 image', 'theme-slug' ),
        'settings' => 'feature_section_08_image',
        'section' => 'best-it-feature-info-sections',
        ))
        );
    }

}