<?php

$metaBoxes = array(
  'animal' => array(
    'title' => 'Animal Information',
    'applicableto' => 'animal',
    'location' => 'normal',
    'priority' => 'high',
    'fields' => array(
      'animalBreed' => array(
        'title' => 'Breed',
        'type' => 'text'
      ),
      'animalAge' => array(
        'title' => 'Age in years',
        'type' => 'number'
      ),
      'allBlurb' => array(
        'title' => 'Blurb about the animal',
        'type' => 'textarea'
      ),
      'animialCare' => array(
        'title' => 'Care Received',
        'type' => 'textarea'
      )
    )
  ),
  'bonded' => array (
    'title' => 'Bonded Information',
    'applicableto' => 'animal',
    'location' => 'normal',
    'priority' => 'low',
    'fields' => array(
      'animalPaired' => array(
        'title' => 'Is the animal bonded with another?',
        'type' => 'radio',
        'options' => array('Yes', 'No')
      ),
      'animalPairedWith' => array(
        'title' => 'Who is the animal bonded with?',
        'type' => 'text'
      )
    )
  ),
  'vets' => array (
    'title' => 'Vet Information',
    'applicableto' => 'vet',
    'location' => 'normal',
    'priority' => 'high',
    'fields' => array(
      'streetAddress' => array(
        'title' => 'Street Address',
        'type' => 'text'
      ),
      'phoneNumber' => array(
        'title' => 'Phone Number',
        'type' => 'number'
      ),
      'weblink' => array(
        'title' => 'Website',
        'type' => 'text'
      )
    )
  ),
  'supporters' => array (
    'title' => 'Supporter/Sponser Information',
    'applicableto' => 'supporterSponser',
    'location' => 'normal',
    'priority' => 'high',
    'fields' => array(
      'weblink' => array(
        'title' => 'Website',
        'type' => 'text'
      ),
      'allBlurb' => array(
        'title' => 'Blurb about Supporter/Sponser',
        'type' => 'textarea'
      )
    )
  )
);

function add_custom_fields() {
  global $metaBoxes;

  if (!empty($metaBoxes)) {
    foreach ($metaBoxes as $id => $metaBox) {
      add_meta_box($id, $metaBox['title'], 'show_metaboxes', $metaBox['applicableto'], $metaBox['location'], $metaBox['priority'], $id);
    }
  }
}

add_action('admin_init', 'add_custom_fields');

// Change Enter Title to relevent text
function change_default_title( $title ){
  $screen = get_current_screen();

  if  ( $screen->post_type == 'animal' ) {
    return 'Enter Animal Name Here';
  }
}

add_filter( 'enter_title_here', 'change_default_title' );

// Displaying metaboxes
function show_metaboxes($post, $args) {
  global $metaBoxes;
  $fields = $metaBoxes[$args['id']]['fields'];
  $customValues = get_post_custom($post->ID);
  $output = '<input type="hidden" name="post_format_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'">';

  if (!empty($fields)) {
    foreach ($fields as $id => $field) {
      switch ($field['type']) {
        case 'text':
          $output .= '<label for="'.$id.'">'.$field['title'].'</label><br>';
          $output .= '<input type="text" name="'.$id.'" value="'.$customValues[$id][0].'"><br>';
          break;
        case 'number':
          $output .= '<label for="'.$id.'">'.$field['title'].'</label><br>';
          $output .= '<input type="number" name="'.$id.'" value="'.$customValues[$id][0].'"><br>';
          break;
        case 'textarea':
          $output .= '<label for="'.$id.'">'.$field['title'].'</label><br>';
          $output .= '<textarea name="'.$id.'" >'.$customValues[$id][0].'</textarea><br>';
          break;
        case 'radio':
          $output .= '<label for="'.$id.'">'.$field['title'].'</label><br>';
          $options = $field['options'];
          foreach ($options as $option) {
            $checked = '';
            if ($customValues['animalPaired']['0'] == $option) {
              $checked = 'checked="checked"';
            }
            $output .= '<input type="radio" name="'.$id.'" value="'.$option.'" '.$checked.'>'.$option.'<br>';
          }
          break;
        default:
          $output .= '<label for="'.$id.'">'.$field['title'].'</label><br>';
          $output .= '<input type="text" name="'.$id.'" value="'.$customValues[$id][0].'"><br>';
          break;
      }
    }
  }
  echo $output;
}

// Saving if required
function save_metaboxes($postID) {
  global $metaBoxes;
  if (!wp_verify_nonce( $_POST['post_format_meta_box_nonce'], basename(__FILE__) )) {
    return $postID;
  }
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return $postID;
  }
  if ($_POST['post_type'] == 'page') {
    if (! current_user_can('edit_page', $postID)) {
      return $postID;
    }
  } elseif (! current_user_can('edit_page', $postID)) {
    return $postID;
  }

  $post_type = get_post_type();

  foreach ($metaBoxes as $id => $metaBox) {
    if ($metaBox['applicableto'] == $post_type) {
      $fields = $metaBoxes[$id]['fields'];

      foreach ($fields as $id => $field) {
        $oldValue = get_post_meta($postID, $id, true);
        $newValue = $_POST[$id];

        if ($newValue && $newValue != $oldValue) {
          update_post_meta($postID, $id, $newValue);
        } elseif ($newValue == '' && $oldValue || !isset($_POST[$id])) {
          delete_post_meta($postID, $id, $oldValue);
        }
      }
    }
  }
}

add_action('save_post', 'save_metaboxes');
