<?php
/**
 * Template for the Prizes page. 
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class = "page-heading">
				<?php
					// the_archive_title( '<h1 class="page-title">', '</h1>' );
					// the_archive_description('<h2 class="page-description">', '</h1>' );
				?>
			</div>
			

			<div class="prize-wrapper">
				<?php
					$terms=get_terms('prize_type');  
					foreach($terms as $prize_type) {
						$args = get_posts(array(
							'post_type' => 'prize',
							'tax_query' => array( 
								array(
									'taxonomy' => 'prize_type',
									'field'    => 'slug',
									'terms'    =>  $prize_type,
								),
							),  
						));

						$prizes = get_posts( $args );

						// FOREACH OVER PRIZES
						foreach( $prizes as $prize ) : setup_postdata($prize); ?>
					
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
					</div>
					<?php endforeach; wp_reset_postdata();

					} ?>

			</div>
			
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>
