<?php 

if(!function_exists('theme_enqueue_scripts')){

    function theme_enqueue_scripts(){
        wp_enqueue_style('style', get_stylesheet_URI());
    }


    add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
}