<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
    wp_enqueue_style( 'twentytwenty', get_template_directory_uri().'/style.css' );
}
function google_fonts() {
 
wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Raleway|Roboto&display=swap', false ); 
}
add_action( 'wp_enqueue_scripts', 'google_fonts' );
?>