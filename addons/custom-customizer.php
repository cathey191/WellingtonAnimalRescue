<?php

function custom_theme_customizer( $wp_customize ) {
  $wp_customize->remove_section("static_front_page");

  // Pages
  $wp_customize->add_panel('page_data', array(
    'title' => __('Pages Information', 'wartheme'),
    'priority' => 30,
    'description' => 'This panel holds information that will be on all pages'
  ));

  // Front Page Logo
  $wp_customize->add_section('front_page_logo_section', array(
    'title' => __('Logo', 'wartheme'),
    'priority' => 20,
    'panel' => 'page_data'
  ));

  $wp_customize->add_setting('front_page_logo_setting', array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'front_page_logo_control', array(
    'label'      => __( 'Upload a logo', 'wartheme' ),
    'section'    => 'front_page_logo_section',
    'settings'   => 'front_page_logo_setting'
  )));

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

  $wp_customize->add_setting('front_title_colour_setting', array(
    'default' => '#FDFAFA',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'front_title_colour_control', array(
    'label'      => __( 'Scroll Button Colour', 'wartheme' ),
    'section'    => 'front_page_text_section',
    'settings'   => 'front_title_colour_setting'
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
    'title' => __('Help Us Page', 'wartheme'),
    'priority' => 20,
    'panel' => 'page_data'
  ));

  $wp_customize->add_setting('supporter_content_title_setting', array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'supporter_content_title_control', array(
    'label' => __('Content Title', 'wartheme'),
    'section' => 'supporter_page_section',
    'settings' => 'supporter_content_title_setting'
  )));

  $wp_customize->add_setting('supporter_supporter_title_setting', array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'supporter_supporter_title_control', array(
    'label' => __('Supporters Title', 'wartheme'),
    'section' => 'supporter_page_section',
    'settings' => 'supporter_supporter_title_setting'
  )));

  // Enquire
  $wp_customize->add_section('adoption_enquire_section', array(
    'title' => __('Adoption Enquire Button', 'wartheme'),
    'priority' => 20,
    'panel' => 'page_data'
  ));

  $wp_customize->add_setting('adoption_enquire_text_setting', array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'adoption_enquire_text_control', array(
    'label' => __('Button Text', 'wartheme'),
    'section' => 'adoption_enquire_section',
    'settings' => 'adoption_enquire_text_setting'
  )));

  $wp_customize->add_setting('adoption_enquire_link_setting', array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'adoption_enquire_link_control', array(
    'label' => __('Button Link', 'wartheme'),
    'section' => 'adoption_enquire_section',
    'settings' => 'adoption_enquire_link_setting'
  )));

  // Adoption Page
  $wp_customize->add_section('adoption_page_section', array(
    'title' => __('Adoption Policy', 'wartheme'),
    'priority' => 20,
    'panel' => 'page_data'
  ));

  $wp_customize->add_setting('adoption_notice_setting', array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'adoption_notice_control', array(
    'label' => __('Adoption Notice', 'wartheme'),
    'section' => 'adoption_page_section',
    'settings' => 'adoption_notice_setting'
  )));

  $wp_customize->add_setting('adoption_content_title_setting', array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'adoption_content_title_control', array(
    'label' => __('Content Title', 'wartheme'),
    'section' => 'adoption_page_section',
    'settings' => 'adoption_content_title_setting'
  )));

  $wp_customize->add_setting('adoption_content_policy_setting', array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'adoption_content_policy_control', array(
    'label' => __('Content Text', 'wartheme'),
    'section' => 'adoption_page_section',
    'settings' => 'adoption_content_policy_setting',
    'type' => 'textarea'
  )));

  $wp_customize->add_setting('adoption_button_title_setting', array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'adoption_button_title_control', array(
    'label' => __('Button Title', 'wartheme'),
    'section' => 'adoption_page_section',
    'settings' => 'adoption_button_title_setting'
  )));

  $wp_customize->add_setting('adoption_button_link_setting', array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'adoption_button_link_control', array(
    'label' => __('Button Link', 'wartheme'),
    'section' => 'adoption_page_section',
    'settings' => 'adoption_button_link_setting'
  )));

  // Navbar
  $wp_customize->add_panel('navbar_data', array(
    'title' => __('Navigation Bar', 'wartheme'),
    'priority' => 30,
    'description' => 'This panel holds information that will be on navigation bar'
  ));

  $wp_customize->add_section('navbar_logo_section', array(
    'title' => __('Logo', 'wartheme'),
    'priority' => 20,
    'panel' => 'navbar_data'
  ));

  $wp_customize->add_setting('navbar_logo_colour_setting', array(
    'default' => '#FDFAFA',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'navbar_logo_colour_control', array(
    'label'      => __( 'Logo Colour', 'wartheme' ),
    'section'    => 'navbar_logo_section',
    'settings'   => 'navbar_logo_colour_setting'
  )));

  $wp_customize->add_setting('navbar_logo_text_setting', array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'navbar_logo_text_control', array(
    'label' => __('Logo Text', 'wartheme'),
    'section' => 'navbar_logo_section',
    'settings' => 'navbar_logo_text_setting'
  )));

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

  // buttons Colours
  $wp_customize->add_section('colour_buttons_section', array(
    'title' => __('Buttons', 'wartheme'),
    'priority' => 20,
    'panel' => 'colour_data'
  ));

  $wp_customize->add_setting('colour_buttons_bg_setting', array(
    'default' => '#2969A9',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'colour_buttons_bg_control', array(
    'label'      => __( 'Background', 'wartheme' ),
    'section'    => 'colour_buttons_section',
    'settings'   => 'colour_buttons_bg_setting'
  )));

  $wp_customize->add_setting('colour_buttons_text_setting', array(
    'default' => '#FDFAFA',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'colour_buttons_text_control', array(
    'label'      => __( 'Text', 'wartheme' ),
    'section'    => 'colour_buttons_section',
    'settings'   => 'colour_buttons_text_setting'
  )));

  $wp_customize->add_setting('colour_btn_bg_hover_setting', array(
    'default' => '#3A171A',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'colour_btn_bg_hover_control', array(
    'label'      => __( 'Background when hover', 'wartheme' ),
    'section'    => 'colour_buttons_section',
    'settings'   => 'colour_btn_bg_hover_setting'
  )));

  $wp_customize->add_setting('colour_btn_text_hover_setting', array(
    'default' => '#FDFAFA',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'colour_btn_text_hover_control', array(
    'label'      => __( 'Text when hover', 'wartheme' ),
    'section'    => 'colour_buttons_section',
    'settings'   => 'colour_btn_text_hover_setting'
  )));

  // Text Colours
  $wp_customize->add_section('colour_text_section', array(
    'title' => __('Text', 'wartheme'),
    'priority' => 20,
    'panel' => 'colour_data'
  ));

  $wp_customize->add_setting('colour_text_setting', array(
    'default' => '#3A171A',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'colour_text_control', array(
    'label'      => __( 'Background', 'wartheme' ),
    'section'    => 'colour_text_section',
    'settings'   => 'colour_text_setting'
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
      body, .modal-content {
        background-color: <?= get_theme_mod('colour_bg_setting', '#FDFAFA'); ?>  !important;
        color: <?= get_theme_mod('colour_text_setting', '#3A171A'); ?>  !important;
      }

      .navbar {
        background-color: <?= get_theme_mod('navbar_bgcolor_setting', '#DC544B'); ?>  !important;
      }

      .navbar-brand {
        color: <?= get_theme_mod('navbar_logo_colour_setting', '#FDFAFA'); ?>  !important;
      }

      .dropdown-menu{
        background-color: <?= get_theme_mod('navbar_bgcolor_setting', '#DC544B'); ?>  !important;
      }

      .navbar-nav .nav-link {
        color: <?= get_theme_mod('navbar_txtcolor_setting', '#FDFAFA'); ?>  !important;
      }

      .dropdown-item{
        color: <?= get_theme_mod('navbar_txtcolor_setting', '#FDFAFA'); ?>  !important;
      }

      .home-image-size {
        background-image: url('<?= $front_page_image; ?>') !important;
      }

      .frontScroll{
        color: <?= get_theme_mod('front_title_colour_setting', '#FDFAFA'); ?>  !important;
      }

      .cust-btn {
        background-color: <?= get_theme_mod('navbar_button_bgcolor_setting', '#2969A9'); ?>  !important;
        color: <?= get_theme_mod('navbar_button_txtcolor_setting', '#FDFAFA'); ?>  !important;
      }

      .red-btn {
        background-color: <?= get_theme_mod('navbar_bgcolor_setting', '#DC544B'); ?>  !important;
        color: <?= get_theme_mod('navbar_txtcolor_setting', '#FDFAFA'); ?>  !important;
      }

      .red-btn:hover {
        background-color: <?= get_theme_mod('colour_btn_bg_hover_setting', '#3A171A'); ?>  !important;
        color: <?= get_theme_mod('colour_btn_text_hover_setting', '#FDFAFA'); ?>  !important;
      }

      .card {
        background-color: <?= get_theme_mod('colour_card_bg_setting', '#F2F2F6'); ?>  !important;
        border: 1px solid <?= get_theme_mod('colour_card_border_setting', '#2969A9'); ?>  !important;
        color: <?= get_theme_mod('colour_card_text_setting', '#3A171A'); ?>  !important;
      }

      .blue-btn, .button {
        background-color: <?= get_theme_mod('colour_buttons_bg_setting', '#2969A9'); ?>  !important;
        color: <?= get_theme_mod('colour_buttons_text_setting', '#FDFAFA'); ?>  !important;
      }

      .blue-btn:hover {
        background-color: <?= get_theme_mod('colour_btn_bg_hover_setting', '#3A171A'); ?>  !important;
        color: <?= get_theme_mod('colour_btn_text_hover_setting', '#FDFAFA'); ?>  !important;
      }
    </style>
  <?php
}
add_action('wp_head', 'custom_theme_customizer_styles');
