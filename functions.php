<?php

function add_stylesheet(){
    wp_enqueue_style( 
        'main', 
        get_stylesheet_directory_uri().'/style.css' 
    );
}
add_action('wp_enqueue_scripts', 'add_stylesheet');

?>