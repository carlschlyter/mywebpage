<?php

//Load style sheets
function load_css(){

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css', array(), false, 'all');
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

    wp_register_style('contact_section', get_template_directory_uri() . '/css/contact_section.css', array(), false, 'all');
    wp_enqueue_style('contact_section');

    wp_register_style('my_services', get_template_directory_uri() . '/css/my_services.css', array(), false, 'all');
    wp_enqueue_style('my_services');

    wp_register_style('service_pages', get_template_directory_uri() . '/css/service_pages.css', array(), false, 'all');
    wp_enqueue_style('service_pages');

}
add_action('wp_enqueue_scripts','load_css');

//Load js
function load_js(){

    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');

    wp_register_script('greensock', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js', array(), false, true);
    wp_enqueue_script('greensock');

    wp_register_script('main', get_template_directory_uri() . '/js/main.js', array(), false, true);
    wp_enqueue_script('main');
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

// Custom image sizes
add_image_size('hero-image',1920, 1080, true);
add_image_size('hero-image-shallow', 1920, 800, true);
add_image_size('hero-image-new', 2048, 800, true);
add_image_size('icon-image', 60, 60, true);
add_image_size('offers-image', 300, 150, true);
add_image_size('miniature-image', 225, 150, true);
add_image_size('imgtxt-section-image', 375, 250, true);

//Contact form
add_action('wp_ajax_contact', 'contact_form');
add_action('wp_ajax_nopriv_contact', 'contact_form');

function contact_form(){

    $formdata = [];

    wp_parse_str($_POST['contact'], $formdata);

    //The sender of the email i.e. the admin email
    $admin_email = get_option('admin_email');

    //Email headers
    $headers[] = 'Content-Type: text/html; charset=utf-8';
    $headers[] = 'Från' . $admin_email;
    $headers[] = 'Svara till' . $formdata['E-post'];

    //The recipient of the email
    $send_to = $admin_email;

    //Subject
    $subject = 'Meddelande från ' . $formdata['Förnamn'] . ' ' . $formdata['Efternamn'];

    //Message
    $message = '';

    foreach($formdata as $index => $field){

        $message .= '<strong>' . $index . '</strong>: ' . $field . '<br/>';
    }

    try {

        if(wp_mail($send_to, $subject, $message, $headers)){

            wp_send_json_success('E-post skickat');

        }
        else {

            wp_send_json_error('E-post fel');

        }

    } catch (Exception $e){

            wp_send_json_error($e-> getMessage());
    }


}

