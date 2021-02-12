<?php

function mytheme_customize_register( $wp_customize ) {
    // 1st marquee code here start 
    $wp_customize->add_setting( 'marquee_setting' , array(
        'default'   => 'Enter Your text',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_section( 'marquee_section' , array(
        'title'      => __( 'Marquee', 'mohammad_mojibur_rahman' ),
        'priority'   => 1,
    ) );

    $wp_customize->add_control( 'marquee_setting', array(
        'type' => 'text',
        'section' => 'marquee_section', // Add a default or your own section
        'setting' => 'marquee_setting', // Add a default or your own section
        'label' => __( 'Custom Text' ),
        'description' => __( 'This is a custom text box.' ),
    ) );

    // 1st marquee code here end

    // 2nd marquee code here start
    $wp_customize->add_setting( 'marquee2_setting' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_section( 'marquee2_section' , array(
        'title'      => __( 'Marquee-2', 'mohammad_mojibur_rahman' ),
        'priority'   => 1,
    ) );

    $wp_customize->add_control( 'marquee2_setting', array(
        'type' => 'text',
        'section' => 'marquee2_section', // Add a default or your own section
        'setting' => 'marquee2_setting', // Add a default or your own section
        'label' => __( 'Custom Text' ),
        'description' => __( 'This is a custom text box.' ),
    ) );

    // 2nd marquee code here end

    // Still banner code here start
    $wp_customize->add_setting( 'banner_setting' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_section( 'Banner_section' , array(
        'title'      => __( 'Banner', 'mohammad_mojibur_rahman' ),
        'priority'   => 1,
    ) );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'logo',
            array(
                'label'      => __( 'Upload a logo', 'mohammad_mojibur_rahman' ),
                'section'    => 'Banner_section',
                'settings'   => 'banner_setting',
        )));
    // Still banner code here end

    // Header part code start here 
    $wp_customize->add_section( 'header_section' , array(
        'title'      => __( 'Header', 'mohammad_mojibur_rahman' ),
        'priority'   => 1,
        ) );
        
    // Header Left code here start
    $wp_customize->add_setting( 'header_setting' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'header_setting', array(
        'type' => 'text',
        'section' => 'header_section', // Add a default or your own section
        'setting' => 'header_setting', // Add a default or your own section
        'label' => __( 'Custom Text' ),
        'description' => __( 'This is a custom text box.' ),
    ) );
     // Header Left code here end

     // Header right code here start
    $wp_customize->add_setting( 'header_setting1' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'header_setting1', array(
        'type' => 'text',
        'section' => 'header_section', // Add a default or your own section
        'setting' => 'header_setting1', // Add a default or your own section
        'label' => __( 'Custom Text' ),
        'description' => __( 'This is a custom text box.' ),
    ) );
    // Header right code here start
    
    // Header part code end here 
    
    
    
    


   

 }
 add_action( 'customize_register', 'mytheme_customize_register' );