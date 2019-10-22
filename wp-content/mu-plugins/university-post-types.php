<?php

function university_post_types() {
  register_post_type('event', array(
    'rewrite' => array('slug' => 'events'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Events',
      'add_new_item' => 'Add New Event',
      'edit_item' => 'Edit Event',
      'all_items' => 'All Events',
      'singular_name' => 'Event'
    ),
    'menu_icon' => 'dashicons-calendar'
  ));

  register_post_type('program', array(
    'rewrite' => array('slug' => 'program'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'program',
      'add_new_item' => 'Add New program',
      'edit_item' => 'Edit program',
      'all_items' => 'All program',
      'singular_name' => 'program'
    ),
    'menu_icon' => 'dashicons-calendar'
  ));
}

add_action('init', 'university_post_types');