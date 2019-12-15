<?php
/**
 * blank functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package blank
 */

if ( ! function_exists( 'blank_setup' ) ) :
	function blank_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
	}
endif;
add_action( 'after_setup_theme', 'blank_setup' );

/**
 * Enqueue scripts and styles.
 */
function blank_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script( 'TweenMax', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.0/TweenMax.min.js', array('jquery'));
	wp_enqueue_script( 'scrollMagic', get_template_directory_uri() . '/js/vendor/scrollMagic.js', array('jquery'));
	wp_enqueue_script( 'AnimationGSAP', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/plugins/animation.gsap.min.js', array('jquery'));
	wp_enqueue_script( 'indicators', get_template_directory_uri() . '/js/vendor/addIndicators.js', array('jquery'));
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/vendor/slick.js', array('jquery'));
	wp_enqueue_script( 'ouibounce', get_template_directory_uri() . '/js/vendor/ouibounce.js');
	wp_enqueue_script( 'sliders', get_template_directory_uri() . '/js/sliders.js');
	wp_enqueue_script( 'Magic', get_template_directory_uri() . '/js/magic.js');
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array('jquery'));
    wp_enqueue_script( 'conf-script', get_template_directory_uri() . '/js/conf-script.js', array('jquery'));
    
	wp_enqueue_script( 'remodal', get_template_directory_uri() . '/js/vendor/remodal.js', array('jquery'));

    wp_enqueue_style( 'modalStyletheme', get_template_directory_uri() . '/sass/conference/vendor/remodal-default-theme.css' );
    wp_enqueue_style( 'modalStyle', get_template_directory_uri() . '/sass/conference/vendor/remodal.css' );



}
add_action( 'wp_enqueue_scripts', 'blank_scripts' );
add_action( 'wp_print_styles', 'tn_dequeue_font_awesome_style' );

function tn_dequeue_font_awesome_style() {
      wp_dequeue_style( 'fontawesome' );
      wp_deregister_style( 'fontawesome' );
}


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
//	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter( 'use_default_gallery_style', '__return_false' );

// admin bar
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

function get_excerpt(){
    $excerpt = get_the_content();
//    $excerpt = preg_replace(" ([.*?])",'',$excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, 150);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = $excerpt.'...';
    return $excerpt;
}
// contact form 7 remove style
add_filter('wpcf7_autop_or_not', '__return_false');

// admin panel clean
if (!(current_user_can('administrator'))) {
    function latus_remove_form_admin() {
//        remove_menu_page( 'wpcf7' ); 
        remove_menu_page( 'tools.php' ); 
        remove_menu_page( 'profile.php' ); 
        remove_menu_page( 'edit.php?post_type=instructors' ); 
    }

    add_action('admin_menu', 'latus_remove_form_admin');
 }

add_filter( 'wpcf7_load_js', '__return_false' );