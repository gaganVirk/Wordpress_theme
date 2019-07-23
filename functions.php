<?php
function simple_theme_setup() {
	// Feature image support
	add_theme_support('post-thumbnails');

	// Menus
	register_nav_menus(array(
		'primary' => _('Primary Menu')
	));
} 

add_action('after_setup_theme', 'simple_theme_setup');

// Excerpt length
function set_excerpt_length() {
	return 60;
}

add_filter('excerpt_length', 'set_excerpt_length');

// Widget Locations
function init_widgets($id) {
	register_sidebar($arrayName = array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div class="side-widget">',
		'after_widget' => '</div>',
		'after_title' => '</h3>' 
	));
}

add_action('widgets_init', 'init_widgets');
