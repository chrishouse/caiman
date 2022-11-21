<?php
/**
 * caiman-web-design functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package caiman-web-design
 */

if ( ! function_exists( 'caiman_web_design_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function caiman_web_design_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on caiman-web-design, use a find and replace
		 * to change 'caiman-web-design' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'caiman-web-design', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'caiman-web-design' ),
			'sidebar-links-generic' => esc_html__( 'Sidebar Links-Generic', 'caiman-web-design' ),
			'subbar-links-generic' => esc_html__( 'Subbar Links-Generic', 'caiman-web-design' ),
			'subbar-links-website-creation' => esc_html__( 'Subbar Links-Website Creation', 'caiman-web-design' ),
			'subbar-links-marketing' => esc_html__( 'Subbar Links-Marketing', 'caiman-web-design' ),
			'subbar-links-hosting-and-upkeep' => esc_html__( 'Subbar Links-Hosting & Upkeep', 'caiman-web-design' ),
			'subbar-links-our-company' => esc_html__( 'Subbar Links-Our Company', 'caiman-web-design' ),
			'subbar-links-our-team' => esc_html__( 'Subbar Links-Our Team', 'caiman-web-design' ),
			'subbar-links-why-choose-us' => esc_html__( 'Subbar Links-Why Choose Us', 'caiman-web-design' ),
		) );


		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'caiman_web_design_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'caiman_web_design_setup' );


/** Create our custom post types **/
function create_post_type() {
  register_post_type( 'testimonials',
    array(
      'labels' => array(
        'name' => __( 'Testimonials' ),
        'singular_name' => __( 'Testimonial' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title', 'editor')
    )
  );
	register_post_type( 'portfolio',
    array(
      'labels' => array(
        'name' => __( 'Portfolio' ),
        'singular_name' => __( 'Portfolio' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title')
    )
  ); 	
}  
add_action( 'init', 'create_post_type' );

//Create shortcodes for subbar menus

//[subbar-generic]
function subbarGeneric($atts){
	return wp_nav_menu( array(
		'theme_location' => 'subbar-links-generic',
		'menu_id'        => 'subbar-links-generic',
		'menu_class'     => 'subbar-links',
		'link_after'          => '&nbsp;&nbsp;&nbsp;<i class="fas fa-chevron-right"></i>',
	) );
}
add_shortcode( 'subbar-generic', 'subbarGeneric' );

//[subbar-web-design-101]
function subbarWebDesign101($atts){
	return wp_nav_menu( array(
		'theme_location' => 'subbar-links-web-design-101',
		'menu_id'        => 'subbar-links-web-design-101',
		'menu_class'     => 'subbar-links',
		'link_after'          => '&nbsp;&nbsp;&nbsp;<i class="fas fa-chevron-right"></i>',
	) );
}
add_shortcode( 'subbar-web-design-101', 'subbarWebDesign101' );

//[subbar-our-process]
function subbarOurProcess($atts){
	return wp_nav_menu( array(
		'theme_location' => 'subbar-links-our-process',
		'menu_id'        => 'subbar-links-our-process',
		'menu_class'     => 'subbar-links',
		'link_after'          => '&nbsp;&nbsp;&nbsp;<i class="fas fa-chevron-right"></i>',
	) );
}
add_shortcode( 'subbar-our-process', 'subbarOurProcess' );

//[subbar-website-creation]
function subbarWebsiteCreation($atts){
	return wp_nav_menu( array(
		'theme_location' => 'subbar-links-website-creation',
		'menu_id'        => 'subbar-links-website-creation',
		'menu_class'     => 'subbar-links',
		'link_after'          => '&nbsp;&nbsp;&nbsp;<i class="fas fa-chevron-right"></i>',
	) );
}
add_shortcode( 'subbar-website-creation', 'subbarWebsiteCreation' );

//[subbar-marketing]
function subbarMarketing($atts){
	return wp_nav_menu( array(
		'theme_location' => 'subbar-links-marketing',
		'menu_id'        => 'subbar-links-marketing',
		'menu_class'     => 'subbar-links',
		'link_after'          => '&nbsp;&nbsp;&nbsp;<i class="fas fa-chevron-right"></i>',
	) );
}
add_shortcode( 'subbar-marketing', 'subbarMarketing' );

//[subbar-how-wordpress-works]
function subbarHowWordpressWorks($atts){
	return wp_nav_menu( array(
		'theme_location' => 'subbar-links-how-wordpress-works',
		'menu_id'        => 'subbar-links-how-wordpress-works',
		'menu_class'     => 'subbar-links',
		'link_after'          => '&nbsp;&nbsp;&nbsp;<i class="fas fa-chevron-right"></i>',
	) );
}
add_shortcode( 'subbar-how-wordpress-works', 'subbarHowWordpressWorks' );

//[subbar-hosting-and-upkeep]
function subbarHostingAndUpkeep($atts){
	return wp_nav_menu( array(
		'theme_location' => 'subbar-links-hosting-and-upkeep',
		'menu_id'        => 'subbar-links-hosting-and-upkeep',
		'menu_class'     => 'subbar-links',
		'link_after'          => '&nbsp;&nbsp;&nbsp;<i class="fas fa-chevron-right"></i>',
	) );
}
add_shortcode( 'subbar-hosting-and-upkeep', 'subbarHostingAndUpkeep' );

//[subbar-our-company]
function subbarOurCompany($atts){
	return wp_nav_menu( array(
		'theme_location' => 'subbar-links-our-company',
		'menu_id'        => 'subbar-links-our-company',
		'menu_class'     => 'subbar-links',
		'link_after'          => '&nbsp;&nbsp;&nbsp;<i class="fas fa-chevron-right"></i>',
	) );
}
add_shortcode( 'subbar-our-company', 'subbarOurCompany' );

//[subbar-our-team]
function subbarOurTeam($atts){
	return wp_nav_menu( array(
		'theme_location' => 'subbar-links-our-team',
		'menu_id'        => 'subbar-links-our-team',
		'menu_class'     => 'subbar-links',
		'link_after'          => '&nbsp;&nbsp;&nbsp;<i class="fas fa-chevron-right"></i>',
	) );
}
add_shortcode( 'subbar-our-team', 'subbarOurTeam' );

//[subbar-why-choose-us]
function subbarWhyChooseUs($atts){
	return wp_nav_menu( array(
		'theme_location' => 'subbar-links-why-choose-us',
		'menu_id'        => 'subbar-links-why-choose-us',
		'menu_class'     => 'subbar-links',
		'link_after'          => '&nbsp;&nbsp;&nbsp;<i class="fas fa-chevron-right"></i>',
	) );
}
add_shortcode( 'subbar-why-choose-us', 'subbarWhyChooseUs' );


//Edit the excerpt more
function new_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function caiman_web_design_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'caiman_web_design_content_width', 640 );
}
add_action( 'after_setup_theme', 'caiman_web_design_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function caiman_web_design_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'caiman-web-design' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'caiman-web-design' ),
		'before_widget' => '<section id="%1$s" class="sidebar-widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'caiman_web_design_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

function caiman_web_design_scripts() {
	wp_enqueue_style( 'caiman-web-design-style', get_stylesheet_uri() );

	wp_enqueue_style( 'caiman-web-design-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' );

	wp_enqueue_script( "caiman-web-design-main", get_template_directory_uri() . "/js/main.min.js", array("jquery"), "1", true ); 

	wp_enqueue_script( 'caiman-web-design-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'caiman-web-design-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( "caiman-web-design-font-awesome", "https://use.fontawesome.com/releases/v5.0.6/js/all.js", array(), "1", false ); 

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'caiman_web_design_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

