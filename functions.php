<?php

// handle post thumnails
add_theme_support( 'post-thumbnails' );
// automatically add title to the header
add_theme_support( 'title-tag' );

// create a custom post type
// https://virtualhost/cpt-name
function breakfast_register_post_types() {
  // CPT Portfolio
  $labels = [
    'name' => 'gallery',
    'all_items' => 'All images',  // affiché dans le sous menu
    'singular_name' => 'Image',
    'add_new_item' => 'Add an image',
    'edit_item' => 'Edit image',
    'menu_name' => 'Gallery'
  ];

	$args = [
    'labels' => $labels,
    'public' => true,
    'show_in_rest' => true,
    'has_archive' => true,
    'supports' => [ 'title', 'editor','thumbnail', 'excerpt' ],
    'menu_position' => 5,
    'menu_icon' => 'dashicons-format-gallery',
	];

	register_post_type( 'gallery', $args );
}
add_action( 'init', 'breakfast_register_post_types' );
