<?php

function addCustomThemeStyles () {
  // style
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.1.3', 'all');
  wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/theme-style.css', array(), '0.0.1', 'all');

  // scripts
  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '4.1.3', true);
}

add_action('wp_enqueue_scripts', 'addCustomThemeStyles');

function initFunctions() {
  add_theme_support('menus');
  register_nav_menu('header_nav', 'This is the navigation at the top of the page');
}
add_action('init', 'initFunctions');

register_nav_menu('header_nav', 'This is the navigation which appears at the top of the page');

require_once get_template_directory() . '/addons/class-wp-bootstrap-navwalker.php';
require_once get_template_directory() . '/addons/class-wp-comments-walker.php';

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
