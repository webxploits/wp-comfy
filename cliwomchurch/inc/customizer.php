<?php

function comfy_customize_register( $wp_customize ) {

	// Logo
	$wp_customize->add_section( 'comfy_logo_section' , array(
		'title'       => __( 'Logo', 'comfy' ),
		'priority'    => 20,
		'description' => 'Upload a logo to replace the default logo',
	) );
	$wp_customize->add_setting( 'comfy_logo' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'comfy_logo', array(
		'label'    => __( 'Logo', 'comfy' ),
		'section'  => 'comfy_logo_section',
		'settings' => 'comfy_logo',
	) ) );


	// Homepage, Feature image
	$wp_customize->add_section( 'comfy_homefeature_section' , array(
		'title'       => __( 'Home feature image', 'comfy' ),
		'priority'    => 30,
		'description' => 'Add homepage feature image',
	) );
	$wp_customize->add_setting( 'comfy_homefeature' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'comfy_homefeature', array(
		'label'    => __( 'Logo', 'comfy' ),
		'section'  => 'comfy_homefeature_section',
		'settings' => 'comfy_homefeature',
	) ) );


	/*------------------------------------------------------------------------*/
    /*  Section: About
    /*------------------------------------------------------------------------*/
    $wp_customize->add_panel( 'comfy_about' ,
		array(
			'priority'        => 160,
			'title'           => __( 'Section: About', 'comfy' ),
			'description'     => 'Content for the About section',			
	) );

	$wp_customize->add_section( 'comfy_about_section' ,
		array(
			'priority'    => 40,
			'title'       => __( 'Section Settings', 'comfy' ),
			'description' => '',
			'panel'       => 'comfy_about',
		)
	);

		// Show Content
		$wp_customize->add_setting( 'comfy_about_content' );
		$wp_customize->add_control( 'comfy_about_content',
			array(
				'type'        => 'checkbox',
				'label'       => __('Hide this section?', 'comfy'),
				'section'     => 'comfy_about_section',
				'description' => __('Check this box to hide this section.', 'comfy'),
			)
		);
        
        // Section ID
		$wp_customize->add_setting( 'comfy_about_id',
			array(
				'default'     => __('about', 'comfy'),
			)
		);
		$wp_customize->add_control( 'comfy_about_id',
			array(
				'label' 		=> __('Section ID:', 'comfy'),
				'section' 		=> 'comfy_about_section',
				'description'   => __( 'The section id, we will use this for link anchor.', 'comfy' )
			)
		);

		// Title
		$wp_customize->add_setting( 'comfy_about_title',
			array(
				'default'      => __('About Us', 'comfy'),
			)
		);
		$wp_customize->add_control( 'comfy_about_title',
			array(
				'label' 		=> __('Section Title', 'comfy'),
				'section' 		=> 'comfy_about_section',
				'description'   => __('Enter Title', 'comfy'),
			)
		);
		
		// Sub Title
		$wp_customize->add_setting( 'comfy_about_subtitle',
			array(
				'default'       => __('Subtitle', 'comfy'),
			)
		);
		$wp_customize->add_control( 'comfy_about_subtitle',
			array(
				'label' 		=> __('Section Subtitle', 'comfy'),
				'section' 		=> 'comfy_about_section',
				'type' 			=> 'textarea',
				'description'   => __('Enter Sub title', 'comfy'),
			)
		);

		// Description
		$wp_customize->add_setting( 'comfy_about_desc',
			array(
				'default'           => __('Short Description', 'comfy'),
			)
		);
		$wp_customize->add_control( 'comfy_about_desc',
			array(
				'label' 		=> __('Section Description', 'comfy'),
				'section' 		=> 'comfy_about_section',
				'type' 			=> 'textarea',
				'description'   => __('Enter Description', 'comfy'),
			)
		);

		$wp_customize->add_setting( 'comfy_img_upload', array( 
					'default'        => 'image.jpg',
        			'capability'     => 'edit_theme_options',
        			'type'           => 'option',

        ));			
 
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'comfy_img_upload', array(
		            'label' 	=> __( 'Image Upload', 'comfy' ),
		            'section' 	=> 'comfy_about_section',
		            'settings' 	=> 'comfy_img_upload',
		        )
		    )
		);

/*------------------------------------------------------------------------*/
    /*  Section: Promo
    /*------------------------------------------------------------------------*/
    $wp_customize->add_panel( 'comfy_promo' ,
		array(
			'priority'        => 160,
			'title'           => __( 'Section: Promo', 'comfy' ),
			'description'     => 'Content for the Promo Section',			
	) );

	$wp_customize->add_section( 'comfy_promo_section' ,
		array(
			'priority'    => 40,
			'title'       => __( 'Section Settings', 'comfy' ),
			'description' => '',
			'panel'       => 'comfy_promo',
		)
	);

		// Show Content
		$wp_customize->add_setting( 'comfy_promo_content' );
		$wp_customize->add_control( 'comfy_promo_content',
			array(
				'type'        => 'checkbox',
				'label'       => __('Hide this section?', 'comfy'),
				'section'     => 'comfy_promo_section',
				'description' => __('Check this box to hide this section.', 'comfy'),
			)
		);

}
add_action( 'customize_register', 'comfy_customize_register' );

