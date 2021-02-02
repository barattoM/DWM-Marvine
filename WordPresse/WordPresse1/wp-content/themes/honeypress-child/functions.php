<?php
 /**
 ** activation theme 
 **/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' ,1);
function theme_enqueue_styles() {
    // pour fixer la feuille de style parent
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    //pour fixer la feuille de style enfant
    wp_enqueue_style( 'parent-style', get_stylesheet_directory_uri() . '/style.css' );
}
