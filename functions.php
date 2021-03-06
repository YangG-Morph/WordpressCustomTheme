<?php

function register_theme_styles(){

    $version = wp_get_theme()->get( 'Version' );
    $name = 'bootstrapcustom-';
    wp_enqueue_style($name . 'style', get_template_directory_uri() . "/style.css", array($name . 'bootstrap'), $version, 'all');
    wp_enqueue_style($name . 'bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '5.13.0', 'all');
    wp_enqueue_style($name . 'fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '4.4.1', 'all');
}

add_action( 'wp_enqueue_scripts', 'register_theme_styles');

?>
