<?php
function mytheme_scripts() {
    wp_enqueue_style( 'style-bxslider', get_template_directory_uri().'/css/jquery.bxslider.css' );
    wp_enqueue_style( 'style-bootstrap', get_template_directory_uri().'/css/bootstrap.css' );
    wp_enqueue_style( 'style-superfish', get_template_directory_uri().'/css/superfish.css' );
    wp_enqueue_script( 'script-bxslider', get_template_directory_uri() . '/js/jquery.bxslider.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script-superfish', get_template_directory_uri() . '/js/superfish.js', array(), '1.0.0', true );
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true );
}
 
add_action( 'wp_enqueue_scripts', 'mytheme_scripts' );
?> 