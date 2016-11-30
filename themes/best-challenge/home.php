<?php
/**
 * The template for displaying blog posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>
	<div class="container journal-wrapper">
	<div id="primary" class="content-area journal-posts" >
	
		<main id="main" class="site-main" role="main">

	

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		</main><!-- #main -->
</div><!-- #primary -->

		
<?php get_sidebar(); ?>
	
</div>
<?php get_footer(); ?>