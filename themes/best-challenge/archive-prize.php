<?php
/**
 * The template for displaying prizes archive.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class = "page-heading">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description('<h2 class="page-description">', '</h1>' );
				?>
			</div>
			<?php
        
        //    $terms=get_terms('prize_type');  
        //     	foreach( $terms as $term ) {
   		// 		 $args = array(
		// 			'post_type' => 'prize',
		// 			'prize_cat' => $term->slug
    	// 			);
   		// 		 $prizes = new WP_Query( $args );
		// 			print_r($prizes);
     	// 		}
			// $tests=get_terms( array(
			// 	'taxonomy' => 'prize_type',
			// 	'hide_empty' => 0,
			// ));
			// 	foreach ($test as $term) 

			$terms=get_terms('prize_type');  
        		foreach( $terms as $term ) {
						 
	 		$args = array(
					'post_type' => 'prize',
					'tax_query' => array( 
						array(
							'taxonomy' => 'prize_type',
							'field'    => 'slug',
							'terms'    =>  array( 'individual-prizes', 'prize-packs')
						),
					),
				);
				$prizes= new WP_Query( $args );
				}
				?>

			<div class="prize-wrapper">
				<?php while ( $prizes->have_posts() ) : $prizes->the_post(); ?>
					
					<div class="single-prize">
						<div class="prize-image">
							<?php the_post_thumbnail( 'large' ); ?>							
						</div>

						<div class="prize-title">
							<h3><?php the_title(); ?></h3>
						</div>
						<div class="prize-description">
							<p><?php the_content(); ?></p>
						</div>
							<!--<a href="<?php the_permalink(); ?>">Read More</a>-->
					</div>
				<?php endwhile;
				?>
			</div>
     
   				 // use reset postdata to restore orginal query
   				<?php wp_reset_postdata(); ?>
			</div>
			
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>
