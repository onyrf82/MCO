<?php
/**
 * marqueandco Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package marqueandco
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_MARQUEANDCO_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'marqueandco-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_MARQUEANDCO_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

// Modèles projet
//require_once ASTRA_THEME_DIR . 'inc/modele-projet.php';

/* css & js */
define('CSS_URL', get_template_directory_uri() . '/assets/css/');
define('JS_URL', get_template_directory_uri() . '/assets/js/');
define('IMG_URL', get_template_directory_uri() . '/assets/images/');
define('VIDEOS_URL', get_template_directory_uri() . '/assets/videos/');
define('THEME_URL', get_template_directory_uri() . '/');
define('WHISE_JS_URL', get_template_directory_uri() . '/whise/js/');

function load_css_js_front() {

	wp_register_script( 'jquery', JS_URL . 'jquery.min.js', array(), true, false, true );
	wp_register_script( 'slick', JS_URL . 'slick.min.js', array(), true, false, false );
	wp_register_script( 'wow', JS_URL . 'wow.js', array(), true, false, false );
	wp_register_script( 'custom', JS_URL . 'custom.js', array(), null, false, false );
	wp_enqueue_style( 'fancybox', JS_URL.'fancybox/jquery.fancybox.css', array(), false );

	wp_enqueue_style( 'slick', CSS_URL . 'slick.css' );
	wp_enqueue_style( 'animate', CSS_URL . 'animate.css' );
	wp_enqueue_style( 'bootstrap', CSS_URL . 'bootstrap.min.css' );
	wp_enqueue_style( 'styles', CSS_URL . 'styles.css' );

	wp_enqueue_script( 'jquery', false, array(), false, true );
	wp_enqueue_script('fancybox/jquery.fancybox', JS_URL.'fancybox/jquery.fancybox.js',  array(), true, true );
	wp_enqueue_script( 'slick', false, array(), null, true );
    wp_enqueue_script( 'isotop', false, array(), false, true );
    wp_enqueue_script( 'wow', false, array(), null, true );
	wp_enqueue_script( 'custom', false, array(), null, true );



}
add_action( 'wp_enqueue_scripts', 'load_css_js_front' );

function add_menuclass($ulclass) {
    return preg_replace('/rel="data-fancybox"/', 'data-fancybox', $ulclass, -1);
}
add_filter('wp_nav_menu','add_menuclass');

//Ajouter menu Admin
add_theme_support("nav_menu");
register_nav_menu('Main-Menu','Navigation principal');
register_nav_menu('Burger-Menu-Left','Navigation burger gauche');
register_nav_menu('Burger-Menu-Right','Navigation burger droite');
