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