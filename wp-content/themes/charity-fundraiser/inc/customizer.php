<?php
/**
 * Charity Fundraiser Theme Customizer
 * @package Charity Fundraiser
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function charity_fundraiser_customize_register( $wp_customize ) {	

	//add home page setting pannel
	$wp_customize->add_panel( 'charity_fundraiser_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'charity-fundraiser' ),
	    'description' => __( 'Description of what this panel does.', 'charity-fundraiser' ),
	) );

	//layout setting
	$wp_customize->add_section( 'charity_fundraiser_theme_layout', array(
    	'title'      => __( 'Layout Settings', 'charity-fundraiser' ),
		'priority'   => null,
		'panel' => 'charity_fundraiser_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('charity_fundraiser_layout',array(
	        'default' => __( 'Right Sidebar', 'charity-fundraiser' ),
	        'sanitize_callback' => 'charity_fundraiser_sanitize_choices'	        
	    )
    );

	$wp_customize->add_control('charity_fundraiser_layout',
	    array(
	        'type' => 'radio',
	        'label' => __( 'Do you want this section', 'charity-fundraiser' ),
	        'section' => 'charity_fundraiser_theme_layout',
	        'choices' => array(
	            'Left Sidebar' => __('Left Sidebar','charity-fundraiser'),
	            'Right Sidebar' => __('Right Sidebar','charity-fundraiser'),
	            'One Column' => __('One Column','charity-fundraiser'),
	            'Three Columns' => __('Three Columns','charity-fundraiser'),
	            'Four Columns' => __('Four Columns','charity-fundraiser'),
	            'Grid Layout' => __('Grid Layout','charity-fundraiser')
	        ),
	    )
    );

    //Social Icons(topbar)
	$wp_customize->add_section('charity_fundraiser_social_media',array(
		'title'	=> __('Social Icon','charity-fundraiser'),
		'description'	=> __('Add Header Content here','charity-fundraiser'),
		'priority'	=> null,
		'panel' => 'charity_fundraiser_panel_id',
	));

	$wp_customize->add_setting('charity_fundraiser_facebook',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('charity_fundraiser_facebook',array(
		'label'	=> __('Add Facebook link','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_social_media',
		'setting'	=> 'charity_fundraiser_facebook',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('charity_fundraiser_twitter',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('charity_fundraiser_twitter',array(
		'label'	=> __('Add Twitter link','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_social_media',
		'setting'	=> 'charity_fundraiser_twitter',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('charity_fundraiser_google',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('charity_fundraiser_google',array(
		'label'	=> __('Add Google Plus link','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_social_media',
		'setting'	=> 'charity_fundraiser_google',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('charity_fundraiser_pintrest',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('charity_fundraiser_pintrest',array(
		'label'	=> __('Add Pintrest link','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_social_media',
		'setting'	=> 'charity_fundraiser_pintrest',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('charity_fundraiser_insta',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('charity_fundraiser_insta',array(
		'label'	=> __('Add Instagram link','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_social_media',
		'setting'	=> 'charity_fundraiser_insta',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('charity_fundraiser_linkdin',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('charity_fundraiser_linkdin',array(
		'label'	=> __('Add Linkdin link','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_social_media',
		'setting'	=> 'charity_fundraiser_linkdin',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('charity_fundraiser_youtube',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('charity_fundraiser_youtube',array(
		'label'	=> __('Add Youtube link','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_social_media',
		'setting'	=> 'charity_fundraiser_youtube',
		'type'	=> 'url'
	));

	//Topbar section
	$wp_customize->add_section('charity_fundraiser_topbar_icon',array(
		'title'	=> __('Topbar Section','charity-fundraiser'),
		'description'	=> __('Add Header Content here','charity-fundraiser'),
		'priority'	=> null,
		'panel' => 'charity_fundraiser_panel_id',
	));

	$wp_customize->add_setting('charity_fundraiser_email_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('charity_fundraiser_email_text',array(
		'label'	=> __('Add Email Text','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_topbar_icon',
		'setting'	=> 'charity_fundraiser_email_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('charity_fundraiser_email',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('charity_fundraiser_email',array(
		'label'	=> __('Add Email Address','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_topbar_icon',
		'setting'	=> 'charity_fundraiser_email',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('charity_fundraiser_call_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('charity_fundraiser_call_text',array(
		'label'	=> __('Add Contact Text','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_topbar_icon',
		'setting'	=> 'charity_fundraiser_call_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('charity_fundraiser_call_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('charity_fundraiser_call_number',array(
		'label'	=> __('Add Contact Number','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_topbar_icon',
		'setting'	=> 'charity_fundraiser_call_number',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('charity_fundraiser_donate_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('charity_fundraiser_donate_text',array(
		'label'	=> __('Add Donate Text','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_topbar_icon',
		'setting'	=> 'charity_fundraiser_donate_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('charity_fundraiser_donate_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('charity_fundraiser_donate_link',array(
		'label'	=> __('Add Donate Link','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_topbar_icon',
		'setting'	=> 'charity_fundraiser_donate_link',
		'type'		=> 'url'
	));

	//home page slider
	$wp_customize->add_section( 'charity_fundraiser_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'charity-fundraiser' ),
		'priority'   => null,
		'panel' => 'charity_fundraiser_panel_id'
	) );

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'charity_fundraiser_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'charity_fundraiser_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'charity_fundraiser_slider_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'charity-fundraiser' ),
			'section'  => 'charity_fundraiser_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	//Help Section
	$wp_customize->add_section('charity_fundraiser_causes',array(
		'title'	=> __('Causes Section','charity-fundraiser'),
		'description'	=> __('Add Causes sections below.','charity-fundraiser'),
		'panel' => 'charity_fundraiser_panel_id',
	));

	$wp_customize->add_setting('charity_fundraiser_help_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('charity_fundraiser_help_title',array(
		'label'	=> __('Section Title','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_causes',
		'type'		=> 'text'
	));

	$post_list = get_posts();
	$i = 0;
	foreach($post_list as $post){
		$posts[$post->post_title] = $post->post_title;
	}

	$wp_customize->add_setting('charity_fundraiser_image_post',array(
		'sanitize_callback' => 'charity_fundraiser_sanitize_choices',
	));
	$wp_customize->add_control('charity_fundraiser_image_post',array(
		'type'    => 'select',
		'choices' => $posts,
		'label' => __('Select post','charity-fundraiser'),
		'section' => 'charity_fundraiser_causes',
	));

	$wp_customize->add_setting('charity_fundraiser_causes_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('charity_fundraiser_causes_title',array(
		'label'	=> __('Help Us Text','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_causes',
		'type'		=> 'text'
	));	

	$categories = get_categories();
	$cats = array();
	$i = 0;
	foreach($categories as $category){
	if($i==0){
	$default = $category->slug;
	$i++;
	}
	$cats[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('charity_fundraiser_help_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('charity_fundraiser_help_category',array(
		'type'    => 'select',
		'choices' => $cats,
		'label' => __('Select Category to display Latest Post','charity-fundraiser'),
		'section' => 'charity_fundraiser_causes',
	));

	//footer text
	$wp_customize->add_section('charity_fundraiser_footer_section',array(
		'title'	=> __('Footer Text','charity-fundraiser'),
		'description'	=> __('Add some text for footer like copyright etc.','charity-fundraiser'),
		'panel' => 'charity_fundraiser_panel_id'
	));
	
	$wp_customize->add_setting('charity_fundraiser_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('charity_fundraiser_text',array(
		'label'	=> __('Copyright Text','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_footer_section',
		'type'		=> 'text'
	));	
}
add_action( 'customize_register', 'charity_fundraiser_customize_register' );	

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Charity_Fundraiser_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Charity_Fundraiser_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Charity_Fundraiser_Customize_Section_Pro(
			$manager,
			'example_1',
				array(
				'priority'   => 9,
				'title'    => esc_html__( 'Charity Fundraiser Pro', 'charity-fundraiser' ),
				'pro_text' => esc_html__( 'Go Pro', 'charity-fundraiser' ),
				'pro_url'  => esc_url('https://www.themesglance.com/themes/premium-charity-wordpress-theme/')					
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'charity-fundraiser-customize-controls', trailingslashit( get_template_directory_uri() ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'charity-fundraiser-customize-controls', trailingslashit( get_template_directory_uri() ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Charity_Fundraiser_Customize::get_instance();