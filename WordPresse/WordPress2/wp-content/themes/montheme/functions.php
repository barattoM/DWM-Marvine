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

/**
 * Fonction qui va retourner le titre pour chacun des modèles de page WordPress
 *
 * @param boolean $display
 * @return string $title
 */
function tpz_display_page_title( $display = true ) {

	$m        = get_query_var( 'm' );
	$year     = get_query_var( 'year' );
	$monthnum = get_query_var( 'monthnum' );
	$day      = get_query_var( 'day' );
	$search   = get_query_var( 's' );
	$title    = '';

	// If there is a post
	if ( is_single() || ( is_home() && ! is_front_page() ) || ( is_page() && ! is_front_page() ) ) {
		$title = single_post_title( '', false );
	}

	// If there's a post type archive
	if ( is_post_type_archive() ) {
		$post_type = get_query_var( 'post_type' );
		if ( is_array( $post_type ) ) {
			$post_type = reset( $post_type );
		}
		$post_type_object = get_post_type_object( $post_type );
		if ( ! $post_type_object->has_archive ) {
			$title = post_type_archive_title( '', false );
		}
	}

	// If there's a category or tag
	if ( is_category() || is_tag() ) {
		$title = single_term_title( '', false );
	}

	// If there's a taxonomy
	if ( is_tax() ) {
		$term = get_queried_object();
		if ( $term ) {
			$tax   = get_taxonomy( $term->taxonomy );
			$title = single_term_title( $tax->labels->name, false );
		}
	}

	// If there's an author
	if ( is_author() && ! is_post_type_archive() ) {
		$author = get_queried_object();
		if ( $author ) {
			$title = $author->display_name;
		}
	}

	// Post type archives with has_archive should override terms.
	if ( is_post_type_archive() && $post_type_object->has_archive ) {
		$title = post_type_archive_title( '', false );
	}

	// If there's a month
	if ( is_archive() && ! empty( $m ) ) {
		$my_year  = substr( $m, 0, 4 );
		$my_month = $wp_locale->get_month( substr( $m, 4, 2 ) );
		$my_day   = intval( substr( $m, 6, 2 ) );
		$title    = $my_year . ( $my_month ? $my_month : '' ) . ( $my_day ? $my_day : '' );
	}

	// If there's a year
	if ( is_archive() && ! empty( $year ) ) {
		$title = $year;
		if ( ! empty( $monthnum ) ) {
			$title .= $wp_locale->get_month( $monthnum );
		}
		if ( ! empty( $day ) ) {
			$title .= zeroise( $day, 2 );
		}
	}

	// If it's a search
	if ( is_search() ) {
		/* translators: 1: separator, 2: search phrase */
		$title = sprintf( __( 'Résultats de la recherche pour : %s' ), strip_tags( $search ) );
	}

	// If it's a 404 page
	if ( is_404() ) {
		$title = __( 'Erreur 404, la page est introuvable' );
	}

	// Send it out
	if ( $display ) {
		echo $title;
	} else {
		return $title;
	}
}