<?php
function basic_enqueue_styles(){
    wp_register_style( 'styles', get_template_directory_uri().'/css/styles.css');
    $dependencies = array('styles');
    wp_enqueue_style('basic-style', get_stylesheet_uri(), $dependencies );
}

function basic_enqueue_scripts(){
    $dependencies = array('javascript');
    wp_enqueue_script( 'scripting', get_template_directory_uri().'/js/script.js', $dependencies );
}

add_action('wp_enqueue_scripts', 'basic_enqueue_styles');
add_action('wp_enqueue_scripts', 'basic_enqueue_scripts');


add_theme_support('post-thumbnails')
?>