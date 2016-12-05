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
// function display_custom_archive_title ($title) {
// 	if (is_post_type_archive ('prize' )) {
// 		$title="Prizes";
// 	}
// 	elseif(is_tax() ) {
//         $title=single_term_title( '', false );
//     }
// return $title;
// }
	
// add_filter( 'get_the_archive_title', 'display_custom_archive_title');

// custom login logo

function my_login_logo() { ?>
   <style type="text/css">
       #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bccommuterchallenge.png);
            padding-bottom: 30px;
		      	background-size: 310px !important; 
		      	width: 310px !important;
			      background-position: bottom !important;
       }
   </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

/// custom logo end

/// Excerpt script

function red_wp_trim_excerpt( $text ) {
    $raw_excerpt = $text;
    
    if ( '' == $text ) {
        // retrieve the post content
        $text = get_the_content('');
        
        // delete all shortcode tags from the content
        $text = strip_shortcodes( $text );
        
        $text = apply_filters( 'the_content', $text );
        $text = str_replace( ']]>', ']]&gt;', $text );
        
        // indicate allowable tags
        $allowed_tags = '<p>,<a>,<em>,<strong>,<blockquote>,<cite>';
        $text = strip_tags( $text, $allowed_tags );
        
        // change to desired word count
        $excerpt_word_count = 50;
        $excerpt_length = apply_filters( 'excerpt_length', $excerpt_word_count );
        
        // create a custom "more" link
        $excerpt_end = '<span>[...]</span><p><a href="' . get_permalink() . '" class="read-more">Read more &rarr;</a></p>'; // modify excerpt ending
        $excerpt_more = apply_filters( 'excerpt_more', ' ' . $excerpt_end );
        
        // add the elipsis and link to the end if the word count is longer than the excerpt
        $words = preg_split( "/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY );
        
        if ( count( $words ) > $excerpt_length ) {
            array_pop( $words );
            $text = implode( ' ', $words );
            $text = $text . $excerpt_more;
        } else {
            $text = implode( ' ', $words );
        }
    }
    
    return apply_filters( 'wp_trim_excerpt', $text, $raw_excerpt );
}

remove_filter( 'get_the_excerpt', 'wp_trim_excerpt' );
add_filter( 'get_the_excerpt', 'red_wp_trim_excerpt' );

//// excerpt end


// print_posts
function print_teams_tests( $teams ) {
	foreach( $teams as $post ) : setup_postdata($post); ?>
		<div class="taxonomy-participant">
			<div class="taxonomy-image">
				<?php the_post_thumbnail( 'large' ); ?>							
			</div>

			<div class="taxonomy-title">
				<h3><?php the_title(); ?> </h3>
			</div>
			<div class="taxonomy-description">
				<p><?php the_content(); ?></p>
			</div>
		</div>

	<?php endforeach; wp_reset_postdata();
	} ?>


	