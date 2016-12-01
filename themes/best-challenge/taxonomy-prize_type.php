<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					// the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			
				<article class= id="post-<?php the_ID(); ?>"<?php post_class(); ?>>

					<div class="archive-area">
        			<?php while ( have_posts() ) : the_post(); ?>
					
					<div class="prize-post">
            			<div class="prize-thumbnail">
							<a href="<?php the_permalink() ; ?> "><?php the_post_thumbnail( 'large' ); ?></a>
						</div>
         				
						 <div class="prize-info">  
         					<p class="archive-title"> 
								<?php the_title('<p class="archive-title">'); ?> 
              					<?php echo CFS()->get( 'prize_price' ); ?> 
							</p>
        				</div>
					</div> <!-- product-post -->
					<?php endwhile ?>
				</div>
				</article><!-- #post-## -->

					<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>
					<?php endif; ?>
			

	</div><!-- #primary -->


<?php get_footer(); ?>