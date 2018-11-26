<?php

function custom_theme_customizer( $wp_customize ) {
  $wp_customize->remove_section("static_front_page");

  // Front Page
  $wp_customize->add_panel('front_page_data', array(
    'title' => __('Front Page', 'wartheme'),
    'priority' => 30,
    'description' => 'This panel holds information that will be on the home page'
  ));

  $wp_customize->add_section('front_page_text_section', array(
    'title' => __('Front Page Text', 'wartheme'),
    'priority' => 20,
    'panel' => 'front_page_data'
  ));

  $wp_customize->add_setting('front_page_title_setting', array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'front_page_title_control', array(
    'label' => __('Title', 'wartheme'),
    'section' => 'front_page_text_section',
    'settings' => 'front_page_title_setting'
  )));

  $wp_customize->add_setting('front_page_textarea_setting', array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'front_page_textarea_control', array(
    'label' => __('Paragraph', 'wartheme'),
    'section' => 'front_page_text_section',
    'settings' => 'front_page_textarea_setting',
    'type' => 'textarea',
  )));

  $wp_customize->add_section('front_page_image_section', array(
    'title' => __('Front Page Image', 'wartheme'),
    'priority' => 20,
    'panel' => 'front_page_data'
  ));

  global $defaultImage;
  $wp_customize->add_setting('front_page_image_setting', array(
    'default' => get_stylesheet_directory_uri() . '/assets/img/default.jpg',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'front_page_image_control', array(
    'label'      => __( 'Upload a photo', 'wartheme' ),
    'section'    => 'front_page_image_section',
    'settings'   => 'front_page_image_setting',
    'context'    => 'your_setting_context'
  )));
}

add_action('customize_register', 'custom_theme_customizer');


function custom_theme_customizer_styles() {

  if ( get_theme_mod( 'front_page_image_setting' ) ) {
				$front_page_image = get_theme_mod( 'front_page_image_setting' );
			} else {
				$front_page_image = get_stylesheet_directory_uri() . '/assets/img/default.jpg';
			}
  ?>
    <style type="text/css">
      .home-image-size {
        background-image: url('<?= $front_page_image; ?>') !important;
      }
    </style>
  <?php
}
add_action('wp_head', 'custom_theme_customizer_styles');
