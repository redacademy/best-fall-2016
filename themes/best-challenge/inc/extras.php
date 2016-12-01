<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Best_Challenge_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function best_challenge_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'best_challenge_body_classes' );

/**
*	Set custom archive title
*/ 
function display_custom_archive_title ($title) {
	if (is_post_type_archive ('prize' )) {
		$title="Prizes";
	}
	elseif(is_tax() ) {
        $title=single_term_title( '', false );
    }
return $title;
}
	
add_filter( 'get_the_archive_title', 'display_custom_archive_title');

/** 
* Display custom taxonomies 
*/

function display_taxonomy_terms($post_type, $display = false) {
    global $post;
}
 