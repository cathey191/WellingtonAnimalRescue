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
}

add_action('customize_register', 'custom_theme_customizer');
