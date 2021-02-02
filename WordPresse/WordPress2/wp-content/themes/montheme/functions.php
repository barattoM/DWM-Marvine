<?php 
register_nav_menus(array('menu-principal' => 'Menu principal'));
//Image au premier plan
function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );

//Extrait
// Réduire l'extrait
function new_excerpt_length($length) {
    global $post;
    return 40;
}
add_filter('excerpt_length', 'new_excerpt_length');

// Changer le lien read more
function new_excerpt_readmore($more) {
    global $post;
    if((is_home()||is_category()||is_search()) && !is_category('6')): 
        return '... <a href="'.get_permalink().'" class="suite"><i class="fal fa-long-arrow-right"></i></a>';
    else:
        return '... <i class="fal fa-long-arrow-right"></i>';
    endif;
}
add_filter('excerpt_more', 'new_excerpt_readmore');
