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
					<header>
						<h2 class="page-title screen-reader-text"><?php single_post_title(); ?></h2>
					</header>
			
			<?php /* Start the Loop */ ?>
				<?php while ( $prizes->have_posts() ) { 
								$prizes->the_post(); ?>
		
					<?php the_post_thumbnail( 'large' ); ?>
					<div class="post-title">
						<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
					</div>
					<a href="<?php the_permalink(); ?>">Read More</a>
				<?php 
						}; ?>
				<?php endif; ?>
		</div>
	</div><!-- #primary -->
	


<?php get_footer(); ?>
