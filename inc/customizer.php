<?php
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function wp_shosi_customize_register( $wp_customize ) {
	/* Link Color */
	$wp_customize->add_setting(
		'cleanblog_link_color',
		array(
			'default'     		 => '#777',
			'transport'   		 => 'refresh'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'link_color',
			array(
			    'label'      => 'Link Color',
			    'section'    => 'colors',
			    'settings'   => 'cleanblog_link_color'
			)
		)
	);
	/* Link Color */
	$wp_customize->add_setting(
		'cleanblog_link_hover_color',
		array(
			'default'     		 => '#1e73be',
			'transport'   		 => 'refresh'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'link_hover_color',
			array(
			    'label'      => 'Link Hover Color',
			    'section'    => 'colors',
			    'settings'   => 'cleanblog_link_hover_color'
			)
		)
	);

	$wp_customize->add_setting( 'shosi_color_scheme', array(
	  'capability' => 'edit_theme_options',
	  'default' => 'primary'
	) );

	$wp_customize->add_control( 'shosi_color_scheme', array(
	  'type' => 'radio',
	  'section' => 'colors', // Add a default or your own section
	  'label' => __( 'Color Schemes' ),
	  'description' => __( 'Select Theme Main Color Scheme' ),
	  'choices' => array(
	    'blue' => __( 'blue' ),
	    'brown' => __( 'brown' ),
	    'cyan' => __( 'cyan' ),
	    'primary' => __( 'primary' ),
	    'green' => __( 'green' ),
	    'grey-blue' => __( 'grey-blue' ),
	    'indigo' => __( 'indigo' ),
	  ),
	) );

	/**
	 * -------------------------------------------
	 * 		Instagram Configuration
	 * -------------------------------------------
	 */
	// Register a new section
	$wp_customize->add_section('insta_config',array(
		'title' => 'Instagram Configuration'
	));


	$wp_customize->add_setting('insta_user_id',array(
		"default" => "CleanBlog Wordpress theme by <a href='//rayhan.info' target='_blank'>@KingRayhan</a>",
		"transport" => "refresh"
	));
	$wp_customize->add_control('insta_user_id',array(
		'label' => __('User Id','cleanblog'),
		'description' => 'Note that <code>YOUR_USER_ID</code> corresponds to your Instagram account ID (eg: 4385108), not your username.<br>Get your instagram userid from <a target="_blank" href="//smashballoon.com/instagram-feed/find-instagram-user-id/">here</a>',
		'type'  => 'text',
		'section' => 'insta_config'
	));

	$wp_customize->add_setting('insta_client_id',array(
		"default" => "CleanBlog Wordpress theme by <a href='//rayhan.info' target='_blank'>@KingRayhan</a>",
		"transport" => "refresh"
	));
	$wp_customize->add_control('insta_client_id',array(
		'label' => __('Client Id','cleanblog'),
		'type'  => 'text',
		'section' => 'insta_config'
	));




	/**
	 * -------------------------------------------
	 * 		Footer
	 * -------------------------------------------
	 */

	// Register a new section
	$wp_customize->add_section('footer_section',array(
		'title' => 'Footer'
	));


	$wp_customize->add_setting('footer_copyright',array(
		"default" => "CleanBlog Wordpress theme by <a href='//rayhan.info' target='_blank'>@KingRayhan</a>",
		"transport" => "refresh"
	));
	$wp_customize->add_control('footer_copyright',array(
		'label' => __('Footer copyright text','cleanblog'),
		'type'  => 'textarea',
		'section' => 'footer_section'
	));



	$wp_customize->add_setting('social_icons',array(
		'transport' => 'refresh'
	));
	$wp_customize->add_control('social_icons',array(
		'section' => 'footer_section',
		'type' => 'hidden',
		'label' => __('','cleanblog'),
		'description' => __("<h1>Social Icons</h1>Give your social profile url which icons you want to show in footer. <br/><b>NOTE:</b> you must have to put url with <code>http://</code> or <code>https://</code>",'cleanblog')
	));
	/*-----------------------------------------------------------*
	 * Defining our own 'Social Links' section
	 *-----------------------------------------------------------*/
	/* Twitter URL */
	$wp_customize->add_setting(
		'cleanblog_social_twitter',
		array(
			'default'            => '',
			'transport'          => 'refresh'
		)
	);
	$wp_customize->add_control(
		'cleanblog_social_twitter',
		array(
			'section'  => 'footer_section',
			'label'    => 'Twitter',
			'type'     => 'text'
		)
	);
	/* Facebook URL */
	$wp_customize->add_setting(
		'cleanblog_social_facebook',
		array(
			'default'            => '',
			'transport'          => 'refresh'
		)
	);
	$wp_customize->add_control(
		'cleanblog_social_facebook',
		array(
			'section'  => 'footer_section',
			'label'    => 'Facebook',
			'type'     => 'text'
		)
	);
	/* Google URL */
	$wp_customize->add_setting(
		'cleanblog_social_google',
		array(
			'default'            => '',
			'transport'          => 'refresh'
		)
	);
	$wp_customize->add_control(
		'cleanblog_social_google',
		array(
			'section'  => 'footer_section',
			'label'    => 'Google+',
			'type'     => 'text'
		)
	);
	/* Pinterest URL */
	$wp_customize->add_setting(
		'cleanblog_social_pinterest',
		array(
			'default'            => '',
			'transport'          => 'refresh'
		)
	);
	$wp_customize->add_control(
		'cleanblog_social_pinterest',
		array(
			'section'  => 'footer_section',
			'label'    => 'Pinterest',
			'type'     => 'text'
		)
	);
	/* Linkedin URL */
	$wp_customize->add_setting(
		'cleanblog_social_linkedin',
		array(
			'default'            => '',
			'transport'          => 'refresh'
		)
	);
	$wp_customize->add_control(
		'cleanblog_social_linkedin',
		array(
			'section'  => 'footer_section',
			'label'    => 'Linkedin',
			'type'     => 'text'
		)
	);
	/* Github URL */
	$wp_customize->add_setting(
		'cleanblog_social_github',
		array(
			'default'            => '',
			'transport'          => 'refresh'
		)
	);
	$wp_customize->add_control(
		'cleanblog_social_github',
		array(
			'section'  => 'footer_section',
			'label'    => 'Github',
			'type'     => 'text'
		)
	);
	/* Instagram URL */
	$wp_customize->add_setting(
		'cleanblog_social_instagram',
		array(
			'default'            => '',
			'transport'          => 'refresh'
		)
	);
	$wp_customize->add_control(
		'cleanblog_social_instagram',
		array(
			'section'  => 'footer_section',
			'label'    => 'Instagram',
			'type'     => 'text'
		)
	);
	/* Medium URL */
	$wp_customize->add_setting(
		'cleanblog_social_medium',
		array(
			'default'            => '',
			'transport'          => 'refresh'
		)
	);
	$wp_customize->add_control(
		'cleanblog_social_medium',
		array(
			'section'  => 'footer_section',
			'label'    => 'Medium',
			'type'     => 'text'
		)
	);
	/* Vine URL */
	$wp_customize->add_setting(
		'cleanblog_social_vine',
		array(
			'default'            => '',
			'transport'          => 'refresh'
		)
	);
	$wp_customize->add_control(
		'cleanblog_social_vine',
		array(
			'section'  => 'footer_section',
			'label'    => 'Vine',
			'type'     => 'text'
		)
	);
	/* Tumblr URL */
	$wp_customize->add_setting(
		'cleanblog_social_tumblr',
		array(
			'default'            => '',
			'transport'          => 'refresh'
		)
	);
	$wp_customize->add_control(
		'cleanblog_social_tumblr',
		array(
			'section'  => 'footer_section',
			'label'    => 'Tumblr',
			'type'     => 'text'
		)
	);
	/* YouTube URL */
	$wp_customize->add_setting(
		'cleanblog_social_youtube',
		array(
			'default'            => '',
			'transport'          => 'refresh'
		)
	);
	$wp_customize->add_control(
		'cleanblog_social_youtube',
		array(
			'section'  => 'footer_section',
			'label'    => 'YouTube',
			'type'     => 'text'
		)
	);
}
add_action( 'customize_register', 'wp_shosi_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function wp_shosi_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function wp_shosi_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function wp_shosi_customize_preview_js() {
	wp_enqueue_script( 'wp_shosi_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'wp_shosi_customize_preview_js' );
