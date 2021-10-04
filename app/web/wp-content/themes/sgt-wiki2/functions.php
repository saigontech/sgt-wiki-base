<?php

function load_css()
{
    wp_register_style('tailwind', get_template_directory_uri() . '/assets/styles.css', [], 1, 'all');
    wp_enqueue_style('tailwind');

    wp_register_style('highlight', get_template_directory_uri() . '/assets/highlight/styles/default.min.css', [], 1, 'all');
    wp_enqueue_style('highlight');

	wp_register_style('app', get_template_directory_uri() . '/assets/app/css/app.css', [], 1, 'all');
    wp_enqueue_style('app');
}
add_action('wp_enqueue_scripts', 'load_css');

function load_js()
{
    wp_register_script('jsquery', get_template_directory_uri() . '/assets/app/js/jquery-3.4.1.min.js', array(), 1, 1, 1);
    wp_enqueue_script('jsquery');

    wp_register_script('highlight', get_template_directory_uri() . '/assets/highlight/highlight.min.js', array(), 1, 1, 1);
    wp_enqueue_script('highlight');

    wp_register_script('app', get_template_directory_uri() . '/assets/app/js/app.js', ['jsquery'], 1, true);
    wp_enqueue_script('app');

}
add_action('wp_enqueue_scripts', 'load_js');

// Theme Support
add_theme_support('menus');
add_theme_support( 'post-thumbnails' );

// Image Sizes
add_image_size('small', 400, 400, false);
add_image_size('large', 700, 700, false);

