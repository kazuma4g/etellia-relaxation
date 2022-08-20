<?php

function add_stylesheet(){

    wp_enqueue_style( 
        'reset_style', 
        get_stylesheet_directory_uri().'/css_reset/reset_style.css' 
    );

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
    
    wp_enqueue_style(
        'footer_style',
        get_stylesheet_directory_uri().'/css/footer_style.css'
    );

    if(is_page('about')){
        wp_enqueue_style(
            'about_content_style',
            get_stylesheet_directory_uri().'/css/about_style.css'
        );
    }

    if(is_page('menu')){
        wp_enqueue_style(
            'menu_content_style',
            get_stylesheet_directory_uri().'/css/menu_style.css'
        );
    }

    if(is_page('notes')){
        wp_enqueue_style(
            'notes_content_style',
            get_stylesheet_directory_uri().'/css/notes_style.css'
        );
    }

    if(is_page('recruit')){
        wp_enqueue_style(
            'recruit_content_style',
            get_stylesheet_directory_uri().'/css/recruit_style.css'
        );
    }
    
}

function add_components_stylesheet(){
    if(is_front_page() == false){
        wp_enqueue_style(
            'title_red_border_style',
            get_stylesheet_directory_uri().'/components/common/title_red_border/title_red_border_style.css'
        );
        wp_enqueue_style(
            'top_img_style',
            get_stylesheet_directory_uri().'/components/common/top_img/top_img_style.css'
        );
    }

    if(is_page('menu')){
        wp_enqueue_style(
            'menu_description_style',
            get_stylesheet_directory_uri().'/components/menu/menu_description/menu_description_style.css'
        );

        wp_enqueue_style(
            'facial_menu_style',
            get_stylesheet_directory_uri().'/components/menu/facial_menu/facial_menu_style.css'
        );

        wp_enqueue_style(
            'body_menu_style',
            get_stylesheet_directory_uri().'/components/menu/body_menu/body_menu_style.css'
        );

        wp_enqueue_style(
            'foot_menu_style',
            get_stylesheet_directory_uri().'/components/menu/foot_menu/foot_menu_style.css'
        );
    }

    if(is_page('about')){
        wp_enqueue_style(
            'about_us_style',
            get_stylesheet_directory_uri().'/components/about/about_us/about_us_style.css'
        );

        wp_enqueue_style(
            'about_us_google_map_style',
            get_stylesheet_directory_uri().'/components/about/about_us_google_map/about_us_google_map_style.css'
        );
    }

    if(is_page('notes')){
        wp_enqueue_style(
            'about_us_style',
            get_stylesheet_directory_uri().'/components/notes/caution_style.css'
        );
    }

    if(is_page('recruit')){
        wp_enqueue_style(
            'outline_style',
            get_stylesheet_directory_uri().'/components/recruit/outline_style.css'
        );
    }
    
    

    wp_enqueue_style(
        'reservation_btn_style',
        get_stylesheet_directory_uri().'/components/common/reservation_btn/reservation_btn_style.css'
    );

   
}

function add_java_script_files(){

    if(is_front_page()){
        wp_enqueue_script(
            'top_images_hover_action_js',
            get_stylesheet_directory_uri().'/js/top_img_hover.js' 
        );
    }

    wp_enqueue_script(
        'hamburger_menu_js',
        get_stylesheet_directory_uri().'/js/hamburger_menu.js' 
    );
    
}

function google_fonts() {
    wp_enqueue_style( 
        'google-fonts', 
        'https://fonts.googleapis.com/css?family=Noto+Serif+JP', 
        false 
    );
}

add_action('wp_enqueue_scripts', 'add_stylesheet');
add_action('wp_enqueue_scripts', 'add_components_stylesheet');

add_action('wp_footer', 'add_java_script_files');
add_action('wp_enqueue_scripts', 'google_fonts');

add_filter('show_admin_bar','__return_false');
?>