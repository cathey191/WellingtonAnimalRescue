<?php

function addCustomThemeStyles () {
  // style
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.1.3', 'all');
  wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/theme-style.css', array(), '0.0.1', 'all');
  wp_enqueue_style( 'dashicons' );

  // scripts
  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '4.1.3', true);
  wp_enqueue_script('customModal', get_template_directory_uri() . '/assets/js/customModal.js', array(), '4.1.3', true);
}

add_action('wp_enqueue_scripts', 'addCustomThemeStyles');

// Admin Styles
function add_admin_custom_styles () {
  wp_enqueue_style('admin-style', get_template_directory_uri() . '/assets/css/theme-admin.css', array(), '0.0.1', 'all');
}

add_action('admin_enqueue_scripts', 'add_admin_custom_styles');

// Init functions
function initFunctions() {
  add_theme_support('menus');
  register_nav_menu('header_nav', 'This is the navigation at the top of the page');
}
add_action('init', 'initFunctions');

register_nav_menu('header_nav', 'This is the navigation which appears at the top of the page');

// Bootstrap classes for nav
require_once get_template_directory() . '/addons/class-wp-bootstrap-navwalker.php';
require_once get_template_directory() . '/addons/class-wp-comments-walker.php';

// Register images
register_default_headers( array(
	'defaultImage' => array(
		'url'           => get_template_directory_uri() . '/assets/img/default.jpg',
		'thumbnail_url' => get_template_directory_uri() . '/assets/img/default.jpg',
		'description'   => __( 'defaultImage', 'wartheme' )
	)
) );
$defaultImage = array(
  'default-image'          => get_template_directory_uri() . '/assets/img/default.jpg',
  'width'                  => 1280,
  'height'                 => 720,
  'header-text'            => false
);
add_theme_support( 'custom-header', $defaultImage );
add_theme_support( 'post-thumbnails' );
add_image_size( 'card-top', 300, 250, array( 'center', 'center' ) ); // Hard crop left top
add_theme_support( 'woocommerce' );

// Customizers
require get_parent_theme_file_path('./addons/educational_alert.php');
require get_parent_theme_file_path('./addons/custom-customizer.php');
require get_parent_theme_file_path('./addons/custom-metaboxes.php');
require get_parent_theme_file_path('./addons/custom-post-types.php');
