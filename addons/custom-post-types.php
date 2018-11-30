<?php

function add_animal_post_type() {
  $labels = array (
    'name' => _x('Animals', 'post type name', 'wartheme'),
    'singular_name' => _x('Animal', 'post type name', 'wartheme'),
    'add_new' => _x('Add Animal', 'adding a new animal', 'wartheme'),
    'add_new_item' => _x('Add Animal', 'adding a new animal', 'wartheme'),
    'edit_item' => _x('Edit Animal', 'edit animal', 'wartheme'),
  );

  $args = array(
    'labels' => $labels,
    'description' => 'Posts for the animals in the rescue',
    'public' => true,
    'hierarchical' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'menu_position' => 4,
    'menu_icon' => 'dashicons-carrot',
    'supports' => array( 'title', 'thumbnail' ),
    'query_var' => true
  );
  register_post_type('animal', $args);
}

add_action('init', 'add_animal_post_type');

function add_care_post_type() {
  $labels = array (
    'name' => _x('Care Guide', 'post type name', 'wartheme'),
    'singular_name' => _x('Care Guide Item', 'post type name', 'wartheme'),
    'add_new' => _x('Add Care Guide Item', 'adding a new Care Guide Item', 'wartheme'),
    'add_new_item' => _x('Add Care Guide Item', 'adding a new Care Guide Item', 'wartheme'),
    'edit_item' => _x('Edit Care Guide Item', 'edit Care Guide Item', 'wartheme'),
  );

  $args = array(
    'labels' => $labels,
    'description' => 'Posts for the Care Guide',
    'public' => true,
    'hierarchical' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'menu_position' => 4,
    'menu_icon' => 'dashicons-heart',
    'supports' => array( 'title', 'thumbnail', 'editor' ),
    'query_var' => true
  );
  register_post_type('careGuide', $args);
}

add_action('init', 'add_care_post_type');

function add_vet_post_type() {
  $labels = array (
    'name' => _x('Vets', 'post type name', 'wartheme'),
    'singular_name' => _x('Vet', 'post type name', 'wartheme'),
    'add_new' => _x('Add Vet', 'adding a new Vet', 'wartheme'),
    'add_new_item' => _x('Add Vet', 'adding a new Vet', 'wartheme'),
    'edit_item' => _x('Edit Vet', 'edit Vet', 'wartheme'),
  );

  $args = array(
    'labels' => $labels,
    'description' => 'Different Vets',
    'public' => true,
    'hierarchical' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'menu_position' => 4,
    'menu_icon' => 'dashicons-portfolio',
    'supports' => array( 'title' ),
    'query_var' => true
  );
  register_post_type('vet', $args);
}

add_action('init', 'add_vet_post_type');

function add_supporters_post_type() {
  $labels = array (
    'name' => _x('Supporters / Sponsers', 'post type name', 'wartheme'),
    'singular_name' => _x('Supporter/Sponser', 'post type name', 'wartheme'),
    'add_new' => _x('Add Supporter/Sponser', 'adding a new Supporter/Sponser', 'wartheme'),
    'add_new_item' => _x('Add Supporter/Sponser', 'adding a new Supporter/Sponser', 'wartheme'),
    'edit_item' => _x('Edit Supporter/Sponser', 'edit Supporter/Sponser', 'wartheme'),
  );

  $args = array(
    'labels' => $labels,
    'description' => 'Different Supporters/Sponsers',
    'public' => true,
    'hierarchical' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'menu_position' => 4,
    'menu_icon' => 'dashicons-id-alt',
    'supports' => array( 'title', 'thumbnail' ),
    'query_var' => true
  );
  register_post_type('supporterSponser', $args);
}

add_action('init', 'add_supporters_post_type');

function hide_posts_types() {
  ?>
    <style type="text/css" media="screen">
      #menu-posts, #menu-comments {display:none;}
    </style>
  <?php
}
add_action('admin_head', 'hide_posts_types');
