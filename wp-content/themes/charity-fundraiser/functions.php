<?php
/**
 * Charity Fundraiser functions and definitions
 * @package Charity Fundraiser
 */

/* Breadcrumb Begin */
function charity_fundraiser_the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
			echo esc_url( home_url() );
		echo '">';
			bloginfo('name');
		echo "</a> ";
		if (is_category() || is_single()) {
			the_category(',');
			if (is_single()) {
				echo "<span> ";
					the_title();
				echo "</span> ";
			}
		} elseif (is_page()) {
			the_title();
		}
	}
}


/* Theme Setup */
if ( ! function_exists( 'charity_fundraiser_setup' ) ) :

function charity_fundraiser_setup() {

	$GLOBALS['content_width'] = apply_filters( 'charity_fundraiser_content_width', 640 );
	
	load_theme_textdomain( 'charity-fundraiser', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('charity-fundraiser-homepage-thumb',240,145,true);
	
    register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'charity-fundraiser' ),
		'topmenu' => __( 'Topbar Menu', 'charity-fundraiser' ),
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', charity_fundraiser_font_url() ) );

}
endif;
add_action( 'after_setup_theme', 'charity_fundraiser_setup' );

/* Theme Widgets Setup */
function charity_fundraiser_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'charity-fundraiser' ),
		'description'   => __( 'Appears on blog page sidebar', 'charity-fundraiser' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'charity-fundraiser' ),
		'description'   => __( 'Appears on page sidebar', 'charity-fundraiser' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Third Column Sidebar', 'charity-fundraiser' ),
		'description'   => __( 'Appears on page sidebar', 'charity-fundraiser' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'charity-fundraiser' ),
		'description'   => __( 'Appears on footer', 'charity-fundraiser' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'charity-fundraiser' ),
		'description'   => __( 'Appears on footer', 'charity-fundraiser' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'charity-fundraiser' ),
		'description'   => __( 'Appears on footer', 'charity-fundraiser' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'charity-fundraiser' ),
		'description'   => __( 'Appears on footer', 'charity-fundraiser' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'charity_fundraiser_widgets_init' );

/* Theme Font URL */
function charity_fundraiser_font_url() {
	$font_url = '';
	$font_family = array();
	$font_family[] = 'PT Sans:300,400,600,700,800,900';
	$font_family[] = 'Montserrat:300,400,600,700,800,900';
	$font_family[] = 'Ubuntu:300,300i,400,400i,500,500i,700,700i';
	$font_family[] = 'Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

/*radio button sanitization*/
 function charity_fundraiser_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

/* Theme enqueue scripts */
function charity_fundraiser_scripts() {
	wp_enqueue_style( 'charity-fundraiser-font', charity_fundraiser_font_url(), array() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css' );
	wp_enqueue_style( 'charity-fundraiser-basic-style', get_stylesheet_uri() );
	wp_style_add_data( 'charity-fundraiser-style', 'rtl', 'replace' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/fontawesome-all.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri().'/css/animate.css' );
	wp_enqueue_script( 'charity-fundraiser-customscripts', get_template_directory_uri() . '/js/custom.js', array('jquery') );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery') );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_style('charity-fundraiser-ie', get_template_directory_uri().'/css/ie.css', array('charity-fundraiser-basic-style'));
	wp_style_add_data( 'charity-fundraiser-ie', 'conditional', 'IE' );
}
add_action( 'wp_enqueue_scripts', 'charity_fundraiser_scripts' );

/* Theme Credit link */
define('CHARITY_FUNDRAISER_SITE_URL','https://www.themesglance.com/');

function charity_fundraiser_credit_link() {
    echo "<a href=".esc_url(CHARITY_FUNDRAISER_SITE_URL)." target='_blank'>".esc_html__('Themesglance','charity-fundraiser')."</a>";
}

/* Excerpt Limit Begin */
function charity_fundraiser_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

function charity_fundraiser_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}


/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Customizer additions. */
require get_template_directory() . '/inc/customizer.php';

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';