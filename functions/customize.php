<?php

/**
 * Adds the individual sections, settings, and controls to the theme customizer
 */
function dvk_customizer( $wp_customize ) {

    /**
     *  Add Header Section
     */
    $wp_customize->add_section( 'header_section', array(
            'title' => 'DVK Header Settings',
            'priority' => 35,
    ) );

    $wp_customize->add_setting( 'logo-upload', );
 
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'logo-upload',
            array(
                'label' => 'Logo Upload',
                'section' => 'header_section',
                'settings' => 'logo-upload'
            )
        )
    );

    $wp_customize->add_setting(
          'header_layout',
          array(
              'default' => 'left',
          )
      );
       
      $wp_customize->add_control(
          'header_layout',
          array(
              'type' => 'radio',
              'label' => 'Logo placement',
              'section' => 'header_section',
              'choices' => array(
                  'header-1' => 'Bootstrap Standard',
                  'header-2' => 'Bootstrap Standard with Top Bar',
                  'header-3' => 'Logo Left : Nav Below',
                  'header-4' => 'Logo Center : Nav Below'
              ),
          )
      );


    /**
     *  Add Slider Section
     */
    $wp_customize->add_section( 'slider_section', array(
            'title' => 'Dans Slider',
            'priority' => 36,
    ) );

    $wp_customize->add_setting( 'slider-image-1', );
    $wp_customize->add_setting( 'slider-title-1', );
    $wp_customize->add_setting( 'slider-paragraph-1', );
    $wp_customize->add_setting( 'slider-image-2', );
    $wp_customize->add_setting( 'slider-title-2', );
    $wp_customize->add_setting( 'slider-paragraph-2', );
    $wp_customize->add_setting( 'slider-image-3', );
    $wp_customize->add_setting( 'slider-title-3', );
    $wp_customize->add_setting( 'slider-paragraph-3', );


    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'slider-image-1',
            array(
                'label' => 'Slider Image 1',
                'section' => 'slider_section',
                'settings' => 'slider-image-1'
            )
        )
    );

    $wp_customize->add_control( 'slider-title-1', array(
          'label' => __( 'Slider Title 1' ),
          'section' => 'slider_section',
          'priority' => 10, // Optional. Order priority to load the control. Default: 10
          'type' => 'text', // Can be either text, email, url, number, hidden, or date
          'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
          'input_attrs' => array( // Optional.
             'class' => 'my-custom-class',
             'style' => 'border: 1px solid rebeccapurple',
             'placeholder' => __( 'Enter name...' ),
          ),
       )
    );

    $wp_customize->add_control( 'slider-paragraph-1', array(
          'label' => __( 'Slider Paragraph 1' ),
          'description' => esc_html__( 'Sample description' ),
          'section' => 'slider_section',
          'priority' => 10, // Optional. Order priority to load the control. Default: 10
          'type' => 'textarea',
          'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
          'input_attrs' => array( // Optional.
             'class' => 'my-custom-class',
             'style' => 'border: 1px solid #999',
             'placeholder' => __( 'Enter message...' ),
          ),
       )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'slider-image-2',
            array(
                'label' => 'Slider Image 2',
                'section' => 'slider_section',
                'settings' => 'slider-image-2'
            )
        )
    );

    $wp_customize->add_control( 'slider-title-2', array(
          'label' => __( 'Slider Title 2' ),
          'section' => 'slider_section',
          'priority' => 10, // Optional. Order priority to load the control. Default: 10
          'type' => 'text', // Can be either text, email, url, number, hidden, or date
          'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
          'input_attrs' => array( // Optional.
             'class' => 'my-custom-class',
             'style' => 'border: 1px solid rebeccapurple',
             'placeholder' => __( 'Enter name...' ),
          ),
       )
    );

    $wp_customize->add_control( 'slider-paragraph-2', array(
          'label' => __( 'Slider Paragraph 2' ),
          'description' => esc_html__( 'Sample description' ),
          'section' => 'slider_section',
          'priority' => 10, // Optional. Order priority to load the control. Default: 10
          'type' => 'textarea',
          'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
          'input_attrs' => array( // Optional.
             'class' => 'my-custom-class',
             'style' => 'border: 1px solid #999',
             'placeholder' => __( 'Enter message...' ),
          ),
       )
    );


    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'slider-image-3',
            array(
                'label' => 'Slider Image 3',
                'section' => 'slider_section',
                'settings' => 'slider-image-3'
            )
        )
    );

    $wp_customize->add_control( 'slider-title-3', array(
          'label' => __( 'Slider Title 3' ),
          'section' => 'slider_section',
          'priority' => 10, // Optional. Order priority to load the control. Default: 10
          'type' => 'text', // Can be either text, email, url, number, hidden, or date
          'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
          'input_attrs' => array( // Optional.
             'class' => 'my-custom-class',
             'style' => 'border: 1px solid rebeccapurple',
             'placeholder' => __( 'Enter name...' ),
          ),
       )
    );

    $wp_customize->add_control( 'slider-paragraph-3', array(
          'label' => __( 'Slider Paragraph 3' ),
          'description' => esc_html__( 'Sample description' ),
          'section' => 'slider_section',
          'priority' => 10, // Optional. Order priority to load the control. Default: 10
          'type' => 'textarea',
          'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
          'input_attrs' => array( // Optional.
             'class' => 'my-custom-class',
             'style' => 'border: 1px solid #999',
             'placeholder' => __( 'Enter message...' ),
          ),
       )
    );

  
}

add_action( 'customize_register', 'dvk_customizer' );