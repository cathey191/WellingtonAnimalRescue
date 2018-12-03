<?php

function custom_theme_customizer( $wp_customize ) {
  $wp_customize->remove_section("static_front_page");

  // Pages
  $wp_customize->add_panel('page_data', array(
    'title' => __('Pages Information', 'wartheme'),
    'priority' => 30,
    'description' => 'This panel holds information that will be on all pages'
  ));

  // Front Page
  $wp_customize->add_section('front_page_text_section', array(
    'title' => __('Front Page', 'wartheme'),
    'priority' => 20,
    'panel' => 'page_data'
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

  global $defaultImage;
  $wp_customize->add_setting('front_page_image_setting', array(
    'default' => get_stylesheet_directory_uri() . '/assets/img/default.jpg',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'front_page_image_control', array(
    'label'      => __( 'Upload a photo', 'wartheme' ),
    'section'    => 'front_page_text_section',
    'settings'   => 'front_page_image_setting',
    'context'    => 'your_setting_context'
  )));

  // Supporter Page
  $wp_customize->add_section('supporter_page_section', array(
    'title' => __('Supporter Page', 'wartheme'),
    'priority' => 20,
    'panel' => 'page_data'
  ));

  $wp_customize->add_setting('supporter_content_title_setting', array(
    'default' => 'Ways to Help',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'supporter_content_title_control', array(
    'label' => __('Content Title', 'wartheme'),
    'section' => 'supporter_page_section',
    'settings' => 'supporter_content_title_setting'
  )));

  $wp_customize->add_setting('supporter_supporter_title_setting', array(
    'default' => 'Sponsors and Supporters',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'supporter_supporter_title_control', array(
    'label' => __('Supporters Title', 'wartheme'),
    'section' => 'supporter_page_section',
    'settings' => 'supporter_supporter_title_setting'
  )));


  // Navbar
  $wp_customize->add_panel('navbar_data', array(
    'title' => __('Navigation Bar', 'wartheme'),
    'priority' => 30,
    'description' => 'This panel holds information that will be on navigation bar'
  ));

  $wp_customize->add_section('navbar_colours_section', array(
    'title' => __('Colours', 'wartheme'),
    'priority' => 20,
    'panel' => 'navbar_data'
  ));

  $wp_customize->add_setting('navbar_bgcolor_setting', array(
    'default' => '#DC544B',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'navbar_bgcolor_control', array(
    'label'      => __( 'Background Colour', 'wartheme' ),
    'section'    => 'navbar_colours_section',
    'settings'   => 'navbar_bgcolor_setting'
  )));

  $wp_customize->add_setting('navbar_txtcolor_setting', array(
    'default' => '#FDFAFA',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'navbar_txtcolor_control', array(
    'label'      => __( 'Text Colour', 'wartheme' ),
    'section'    => 'navbar_colours_section',
    'settings'   => 'navbar_txtcolor_setting'
  )));

  $wp_customize->add_section('navbar_button_section', array(
    'title' => __('Button', 'wartheme'),
    'priority' => 20,
    'panel' => 'navbar_data'
  ));

  $wp_customize->add_setting('navbar_button_link_setting', array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'navbar_button_link_control', array(
    'label'      => __( 'URL Link', 'wartheme' ),
    'section'    => 'navbar_button_section',
    'settings'   => 'navbar_button_link_setting'
  )));

  $wp_customize->add_setting('navbar_button_text_setting', array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'navbar_button_text_control', array(
    'label'      => __( 'Text', 'wartheme' ),
    'section'    => 'navbar_button_section',
    'settings'   => 'navbar_button_text_setting'
  )));

  $wp_customize->add_setting('navbar_button_bgcolor_setting', array(
    'default' => '#2969A9',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'navbar_button_bgcolor_control', array(
    'label'      => __( 'Background Colour', 'wartheme' ),
    'section'    => 'navbar_button_section',
    'settings'   => 'navbar_button_bgcolor_setting'
  )));

  $wp_customize->add_setting('navbar_button_txtcolor_setting', array(
    'default' => '#FDFAFA',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'navbar_button_txtcolor_control', array(
    'label'      => __( 'Text Colour', 'wartheme' ),
    'section'    => 'navbar_button_section',
    'settings'   => 'navbar_button_txtcolor_setting'
  )));

  // Colours
  $wp_customize->add_panel('colour_data', array(
    'title' => __('Colours', 'wartheme'),
    'priority' => 30,
    'description' => 'This panel holds colour information'
  ));

  $wp_customize->add_section('colour_bg_section', array(
    'title' => __('Background', 'wartheme'),
    'priority' => 20,
    'panel' => 'colour_data'
  ));

  $wp_customize->add_setting('colour_bg_setting', array(
    'default' => '#FDFAFA',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'colour_bg_control', array(
    'label'      => __( 'Background', 'wartheme' ),
    'section'    => 'colour_bg_section',
    'settings'   => 'colour_bg_setting'
  )));

  // Card Colours
  $wp_customize->add_section('colour_cards_section', array(
    'title' => __('Cards', 'wartheme'),
    'priority' => 20,
    'panel' => 'colour_data'
  ));

  $wp_customize->add_setting('colour_card_bg_setting', array(
    'default' => '#F2F2F6',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'colour_card_bg_control', array(
    'label'      => __( 'Background', 'wartheme' ),
    'section'    => 'colour_cards_section',
    'settings'   => 'colour_card_bg_setting'
  )));

  $wp_customize->add_setting('colour_card_border_setting', array(
    'default' => '#2969A9',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'colour_card_border_control', array(
    'label'      => __( 'Border', 'wartheme' ),
    'section'    => 'colour_cards_section',
    'settings'   => 'colour_card_border_setting'
  )));

  $wp_customize->add_setting('colour_card_text_setting', array(
    'default' => '#3A171A',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'colour_card_text_control', array(
    'label'      => __( 'Text', 'wartheme' ),
    'section'    => 'colour_cards_section',
    'settings'   => 'colour_card_text_setting'
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
      body {
        background-color: <?= get_theme_mod('colour_bg_setting', '#FDFAFA'); ?>  !important;
      }

      .navbar {
        background-color: <?= get_theme_mod('navbar_bgcolor_setting', '#DC544B'); ?>  !important;
      }

      .navbar-nav .nav-link {
        color: <?= get_theme_mod('navbar_txtcolor_setting', '#FDFAFA'); ?>  !important;
      }

      .home-image-size {
        background-image: url('<?= $front_page_image; ?>') !important;
      }

      .cust-btn {
        background-color: <?= get_theme_mod('navbar_button_bgcolor_setting', '#2969A9'); ?>  !important;
        color: <?= get_theme_mod('navbar_button_txtcolor_setting', '#FDFAFA'); ?>  !important;
      }

      .card {
        background-color: <?= get_theme_mod('colour_card_bg_setting', '#F2F2F6'); ?>  !important;
        border: 1px solid <?= get_theme_mod('colour_card_border_setting', '#2969A9'); ?>  !important;
        color: <?= get_theme_mod('colour_card_text_setting', '#3A171A'); ?>  !important;
      }
    </style>
  <?php
}
add_action('wp_head', 'custom_theme_customizer_styles');
