<?php
function aff_post_types(){

  register_post_type('nyheter', array(
    'supports' => array('title', 'editor', 'excerpt'),
    'rewrite' => array('slug' => 'nyheter'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Nyheter',
      'add_new_item' => 'Legg til ny nyhetssak',
      'edit_item' => 'Rediger nyhet',
      'all_items' => 'Alle nyheter',
      'singular_name' => 'nyhet'
    ),
    'menu_icon' => 'dashicons-images-alt2'
  ));

  register_post_type('arrangementer', array(
    'supports' => array('title', 'editor', 'excerpt'),
    'rewrite' => array('slug' => 'arrangementer'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Arrangementer',
      'add_new_item' => 'Legg til nytt arrangement',
      'edit_item' => 'Rediger arrangement',
      'all_items' => 'Alle arrangementer',
      'singular_name' => 'arrangement'
    ),
    'menu_icon' => 'dashicons-calendar'
  ));

add_post_type_support( 'page', 'excerpt' );
}

add_action('init', 'aff_post_types');
?>