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
			$args = array (
						'post_type' => 'prize',
						'orderby' => 'post_date',
						'order' => 'ASC',
						'posts_per_page' => 4
					);
					$prizes = new WP_Query( $args );

					
			if( $prizes->have_posts() ) : ?>
					<!--<div class="prize-name"><h2><?php single_post_title(); ?></h2></div>-->
				<div class="prize-wrapper">
					<?php /* Start the Loop */ ?>
						<?php while ( $prizes->have_posts() ) { 
									$prizes->the_post(); ?>
						<div class="single-prize">
							<div class="prize-image">
								<?php the_post_thumbnail( 'large' ); ?>
							</div>

							<div class="post-title">
								<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
							</div>
							<div class="prize-description">
								<p><?php the_content(); ?></p>
							</div>
						<!--<a href="<?php the_permalink(); ?>">Read More</a>-->
						</div>
					<?php 
							}; ?>
				</div>
					<?php endif; ?>
			</div>
		</div>
	</div><!-- #primary -->
	


<?php get_footer(); ?>
