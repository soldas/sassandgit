<?php

function import_resources(){
	
	wp_enqueue_style('style', get_stylesheet_uri());
}
	
add_action('wp_enqueue_scripts', 'import_resources');

// Theme setup
function theme_setup() {
	
	//Nav
	register_nav_menus(array(
	'primary' => ('Primary Menu'), 
	'footer' => ('Footer Menu'),
	));
	
	
	
	// Featured image
	add_theme_support('post-thumbnails');
	add_image_size('small-thumb', 180, 120, true);
	add_image_size('banner', 960, 210, array('left', 'top'));
	
	//Add Post Format
	add_theme_support('post-formats', array('aside', 'gallery', 'link'));
} 

add_action('after_setup_theme', 'theme_setup');


// Top page sub nav
function get_top_id() {
	
	global $post;
	
	if ($post->post_parent) {
		$ancestors = array_reverse(get_post_ancestors($post->ID));
		return $ancestors[0];
	}
	return $post->ID;
}

// Children?

function has_children() {
	
	global $post;
	
	$pages = get_pages('child_of= . $post->ID');
	return count($pages);
}

// Excerpt length
function theme_excerpt_lenght(){
	return 20;
} 

add_filter('excerpt_lenght', 'theme_excerpt_lenght');

// Widgets
function widgetsimport(){
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebarright',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="title-widget">',
		'after_title' => '</h4>'
	));
	register_sidebar(array(
		'name' => 'Footer 1',
		'id' => 'footer1'
	));
	register_sidebar(array(
		'name' => 'Footer 2',
		'id' => 'footer2'
	));
	register_sidebar(array(
		'name' => 'Footer 3',
		'id' => 'footer3'
	));
	register_sidebar(array(
		'name' => 'Footer 4',
		'id' => 'footer4'
	));
	
}
add_action('widgets_init', 'widgetsimport');