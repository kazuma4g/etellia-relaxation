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
    
}

function add_pc_stylesheet_files(){
    wp_enqueue_style(
        'header_style_pc',
        get_stylesheet_directory_uri().'/css_pc/header_style.css'
    );

    wp_enqueue_style(
        'top_page_content_style_pc',
        get_stylesheet_directory_uri().'/css_pc/top_content_style.css'
    );

    wp_enqueue_style(
        'footer_style_pc',
        get_stylesheet_directory_uri().'/css_pc/footer_style.css'
    );

}

function add_smart_phone_stylesheet_files(){
    wp_enqueue_style( 
        'smart_phone_main_style', 
        get_stylesheet_directory_uri().'/css_smart_phone/style_smart_phone.css' 
    );

    wp_enqueue_style(
        'header_style_smart_phone',
        get_stylesheet_directory_uri().'/css_smart_phone/header_style_smart_phone.css'
    );

    wp_enqueue_style(
        'top_page_content_style_smart_phone',
        get_stylesheet_directory_uri().'/css_smart_phone/top_content_style_smart_phone.css'
    );

    wp_enqueue_style(
        'footer_style_smart_phone',
        get_stylesheet_directory_uri().'/css_smart_phone/footer_style_smart_phone.css'
    );
}

function add_tablet_stylesheet_files(){
    wp_enqueue_style( 
        'tablet_main_style', 
        get_stylesheet_directory_uri().'/css_tablet/style_tablet.css' 
    );

    wp_enqueue_style( 
        'tablet_header_style', 
        get_stylesheet_directory_uri().'/css_tablet/header_style_tablet.css' 
    );
}

function add_java_script_files(){
    wp_enqueue_script(
        'hamburger_menu_js',
        get_stylesheet_directory_uri().'/js/hamburger_menu.js' 
    );

    wp_enqueue_script(
        'top_images_hover_action_js',
        get_stylesheet_directory_uri().'/js/top_img_hover.js' 
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
add_action('wp_enqueue_scripts', 'add_pc_stylesheet_files');
add_action('wp_enqueue_scripts', 'add_smart_phone_stylesheet_files');
add_action('wp_enqueue_scripts', 'add_tablet_stylesheet_files');
add_action('wp_footer', 'add_java_script_files');
add_action('wp_enqueue_scripts', 'google_fonts');
add_filter('show_admin_bar','__return_false');

?>