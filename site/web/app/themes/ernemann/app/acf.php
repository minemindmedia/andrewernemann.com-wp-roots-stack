<?php

/**
 * Save ACF Fields via Json
 */
add_filter('acf/settings/save_json', function ($path) {
    $targetDir = get_template_directory().'/acf-json';
    return (file_exists($targetDir) && is_dir($targetDir)) ? $targetDir : $path;
});

/**
 * Theme Options Pages
 */

if( function_exists('acf_add_options_page') )
{	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

/**
 * Testimonials
 */
add_action('admin_head', 'hide_testimonials_title_input');
function hide_testimonials_title_input() {
  $screen = get_current_screen();
  if ($screen->id != 'testimonials') {
    return;
  }
  ?>
    <style type="text/css">
      #post-body-content #titlediv #titlewrap {
        display: none;
      }
    </style>
  <?php 
}
function testimonials_title( $value, $post_id, $field ) {
	if ( get_post_type( $post_id ) == 'testimonials' ) {

		$new_title = get_field('testimonial_author', $post_id) . ' ' . $value;
		$new_slug = sanitize_title( $new_title );

		// update post
		wp_update_post( array(
			'ID'         => $post_id,
			'post_title' => $new_title,
			'post_name'  => $new_slug,
			) );
	}
	return $value;
}
add_filter( 'acf/update_value/name=testimonial_author', 'testimonials_title', 10, 3 );

/**
 * Press
 */
add_action('admin_head', 'hide_press_title_input');
function hide_press_title_input() {
  $screen = get_current_screen();
  if ($screen->id != 'press') {
    return;
  }
  ?>
    <style type="text/css">
      #post-body-content #titlediv #titlewrap {
        display: none;
      }
    </style>
  <?php 
}
function press_title( $value, $post_id, $field ) {
	if ( get_post_type( $post_id ) == 'press' ) {

		$new_title = get_field('press_heading', $post_id) . ' ' . $value;
		$new_slug = sanitize_title( $new_title );

		// update post
		wp_update_post( array(
			'ID'         => $post_id,
			'post_title' => $new_title,
			'post_name'  => $new_slug,
			) );
	}
	return $value;
}
add_filter( 'acf/update_value/name=press_heading', 'press_title', 10, 3 );

/**
 * Properties
 */
add_action('admin_head', 'hide_property_title_input');
function hide_property_title_input() {
  $screen = get_current_screen();
  if ($screen->id != 'properties') {
    return;
  }
  ?>
    <style type="text/css">
      #post-body-content #titlediv #titlewrap {
        display: none;
      }
    </style>
  <?php 
}
function property_title( $value, $post_id, $field ) {
	if ( get_post_type( $post_id ) == 'properties' ) {

		$new_title = get_field('property_address', $post_id) . ' ' . $value;
		$new_slug = sanitize_title( $new_title );

		// update post
		wp_update_post( array(
			'ID'         => $post_id,
			'post_title' => $new_title,
			'post_name'  => $new_slug,
			) );
	}
	return $value;
}
add_filter( 'acf/update_value/name=property_address', 'property_title', 10, 3 );

/**
 * Google Maps
 */
function my_acf_google_map_api( $api ){
    $api['key'] = 'AIzaSyB6Wll1w6ospTf_vhgfQmnrjpYi0567VFs';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');