<?php
 

 add_theme_support( 'post-thumbnails' );

function wpmu_nav_menus() {

  register_nav_menus( array(
	  'primary' => __( 'Primary Navigation', 'wpmu-theme' ),
	  'footer' => __( 'Footer Navigation', 'wpmu-theme' ),
	) );
	
}
add_action( 'after_setup_theme', 'wpmu_nav_menus' );


// Adds 'odd' and 'even' classes to each post
function wpsd_oddeven_post_class ( $classes ) {
	global $current_class;
	$classes[] = $current_class;
	$current_class = ($current_class == 'odd') ? 'even' : 'odd';
	return $classes;
}
add_filter ('post_class', 'wpsd_oddeven_post_class');
global $current_class;
$current_class = 'odd';

/* 
	CUSTOM STYLES 
*/

function wpdixsept_styles()
{

    wp_register_style( 'font-awesome-style', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '20170208', 'all' );
    wp_register_style( 'ionicons-style', get_template_directory_uri() . '/assets/css/ionicons.css', array(), '20170208', 'all' );
    wp_register_style( 'isotope-style', get_template_directory_uri() . '/assets/css/isotope.css', array(), '20170208', 'all' );
    wp_register_style( 'lightcase-style', get_template_directory_uri() . '/assets/css/lightcase.css', array(), '20170208', 'all' );
    wp_register_style( 'carousel-style', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '20170208', 'all' );
    wp_register_style( 'animate-style', get_template_directory_uri() . '/assets/css/animate.css', array(), '20170208', 'all' );
    wp_register_style( 'fullpage-style', get_template_directory_uri() . '/assets/css/fullpage.min.css', array(), '20170208', 'all' );
    wp_register_style( 'mqueries-style', get_template_directory_uri() . '/assets/css/mqueries.css', array(), '20170208', 'all' );
 
    wp_enqueue_style( 'font-awesome-style');
    wp_enqueue_style( 'ionicons-style' );
    wp_enqueue_style( 'isotope-style' );
    wp_enqueue_style( 'carousel-style' );
    wp_enqueue_style( 'animate-style');
    wp_enqueue_style( 'fullpage-style' );
    wp_enqueue_style( 'mqueries-style');
}

function wpdixsept_scripts()
{

	wp_register_script('modernizr_script', get_template_directory_uri() . '/assets/js/modernizr-detectizr.min.js');
	wp_register_script('jquery_script', get_template_directory_uri() . '/assets/js/jquery-1.12.4.min.js');
	wp_register_script('carousel_script', get_template_directory_uri() . '/assets/js/jquery.owl.carousel.min.js');
	wp_register_script('sticky_script', get_template_directory_uri() . '/assets/js/jquery.sticky-kit.min.js');
	wp_register_script('plugin_script', get_template_directory_uri() . '/assets/js/plugins.js');
	wp_register_script('phatvideobg_script', get_template_directory_uri() . '/assets/js/jquery.min.phatvideobg.js');
	wp_register_script('imageloaded_script', get_template_directory_uri() . '/assets/js/jquery.imagesloaded.min.js');
	wp_register_script('isotope_script', get_template_directory_uri() . '/assets/js/jquery.isotope.min.js');
	wp_register_script('easings_script', get_template_directory_uri() . '/assets/js/jquery.easings.min.js');
	wp_register_script('fullpage_script', get_template_directory_uri() . '/assets/js/fullpage.min.js');
	wp_register_script('instafeed_script', get_template_directory_uri() . '/assets/js/instafeed.js');
	wp_register_script('main_script', get_template_directory_uri() . '/assets/js/script.js');
	wp_register_script('animsition_script', get_template_directory_uri() . '/assets/js/animsition.js');


    wp_enqueue_script( 'modernizr_script');
    wp_enqueue_script( 'jquery_script');
    wp_enqueue_script( 'carousel_script' );
    wp_enqueue_script( 'sticky_script' );
    wp_enqueue_script( 'plugin_script');
    wp_enqueue_script( 'phatvideobg_script' );
    wp_enqueue_script( 'imageloaded_script');
    wp_enqueue_script( 'isotope_script' );
    wp_enqueue_script( 'easings_script' );
    wp_enqueue_script( 'fullpage_script');
    wp_enqueue_script( 'instafeed_script');
    wp_enqueue_script( 'main_script');
    wp_enqueue_script( 'animsition_script');
	
}

add_action('wp_enqueue_scripts', 'wpdixsept_styles' );
add_action('wp_enqueue_scripts', 'wpdixsept_scripts');



/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dixseptparis_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'dixseptparis' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'dixseptparis' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Contact ', 'dixseptparis' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'dixseptparis' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => __( 'Social', 'dixseptparis' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'dixseptparis' ),
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widget-title title-alt">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Menu', 'dixseptparis' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'dixseptparis' ),
		'before_widget' => '<div class="widget align-right menu-bottom">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Instagram', 'dixseptparis' ),
		'id'            => 'instafeed-5',
		'description'   => __( 'Add widgets here to appear in your footer.', 'dixseptparis' ),
		'before_widget' => '<div class="widget instafeed %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'dixseptparis_widgets_init' );



