<?php

function add_animal_post_type() {
  $labels = array (
    'name' => _x('Animals', 'post type name', 'wartheme'),
    'singular_name' => _x('Animal', 'post type name', 'wartheme'),
    'add_new' => _x('Add Animal', 'adding a new animal', 'wartheme'),
    'add_new_item' => _x('Add Animal', 'adding a new animal', 'wartheme')
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


function hide_posts_types() {
  ?>
    <style type="text/css" media="screen">
      #menu-posts, #menu-comments {display:none;}
    </style>
  <?php
}
add_action('admin_head', 'hide_posts_types');
