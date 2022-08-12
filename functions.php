<?php

function add_reset_stylesheet(){

    wp_enqueue_style( 
        'reset_style', 
        get_stylesheet_directory_uri().'/css_reset/reset_style.css' 
    );
    
}

function add_stylesheet(){

    wp_enqueue_style( 
        'main_style', 
        get_stylesheet_directory_uri().'/style.css' 
    );

    wp_enqueue_style( 
        'smart_phone_main_style', 
        get_stylesheet_directory_uri().'/css_main/style_smart_phone.css' 
    );

    wp_enqueue_style( 
        'tablet_main_style', 
        get_stylesheet_directory_uri().'/css_main/style_tablet.css' 
    );

    wp_enqueue_style(
        'header_style',
        get_stylesheet_directory_uri().'/css_header/header_style.css'
    );

    wp_enqueue_style(
        'top_page_content_style',
        get_stylesheet_directory_uri().'/css_top/top_content_style.css'
    );

    wp_enqueue_style(
        'top_page_content_style_smart_phone',
        get_stylesheet_directory_uri().'/css_top/top_content_style_smart_phone.css'
    );
    
}

function google_fonts() {
    wp_enqueue_style( 
        'google-fonts', 
        'https://fonts.googleapis.com/css?family=Noto+Serif+JP', 
        false 
    );
}

add_action('wp_enqueue_scripts', 'add_reset_stylesheet');
add_action('wp_enqueue_scripts', 'add_stylesheet');
add_action('wp_enqueue_scripts', 'google_fonts');

?>