<?php

/**
 *	Aurum WordPress Theme
 *
 *	Laborator.co
 *	www.laborator.co
 */

/* Add bootstrap support to the Wordpress theme*/

function theme_add_bootstrap()
{
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '-child/bootstrap/css/bootstrap.min.css');
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '-child/bootstrap/js/bootstrap.min.js', array(), true);
}

add_action('wp_enqueue_scripts', 'theme_add_bootstrap', 102);



// This function will enqueue style.css of child theme, feel free to add yours
function aurum_enqueue_child_theme_scripts()
{
	wp_enqueue_style('aurum-child', get_stylesheet_directory_uri() . '/custom-css/style.css');
}

add_action('wp_enqueue_scripts', 'aurum_enqueue_child_theme_scripts', 100);


