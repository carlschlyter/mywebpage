<?php

//Load style sheets
function load_css(){

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');

    wp_register_style('menu', get_template_directory_uri() . '/css/menu.css', array(), false, 'all');
    wp_enqueue_style('menu');

    wp_register_style('hero_section', get_template_directory_uri() . '/css/hero_section.css', array(), false, 'all');
    wp_enqueue_style('hero_section');

    wp_register_style('icon_section', get_template_directory_uri() . '/css/icon_section.css', array(), false, 'all');
    wp_enqueue_style('icon_section');

    wp_register_style('offers_section', get_template_directory_uri() . '/css/offers_section.css', array(), false, 'all');
    wp_enqueue_style('offers_section');

}
add_action('wp_enqueue_scripts','load_css');

//Load js
function load_js(){

    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'load_js');

//Theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');


//Menus
register_nav_menus(

    array(
        'top-menu' => 'Top Menu Location',
        'footer-menu' => 'Footer Menu Location'
    )

);

// Custom omage sizes
add_image_size('hero-image',1920, 1080, true);
add_image_size('hero-image-shallow', 1920, 800, true);
add_image_size('hero-image-new', 2048, 800, true);
add_image_size('icon-image', 60, 60, true);
