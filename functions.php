<?php

function add_stylesheet(){

    wp_enqueue_style( 
        'main_style', 
        get_stylesheet_directory_uri().'/style.css' 
    );

    wp_enqueue_style(
        'header_style',
        get_stylesheet_directory_uri().'/css/header_style.css'
    );

    wp_enqueue_style(
        'top_page_content_style',
        get_stylesheet_directory_uri().'/css/top_content_style.css'
    );
    
}
add_action('wp_enqueue_scripts', 'add_stylesheet');

?>