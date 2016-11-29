<?php
/**
 * The template for displaying all single prizes.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

	        	<?php get_template_part( 'template-parts/prize-archive', 'single' ); ?>

			    <?php
				// If comments are open or we have at least one comment, load up the comment template.
				    if ( comments_open() || get_comments_number() ) :
					comments_template();
				    endif;
			    ?>
		    <?php endwhile; // End of the loop. ?>

            <div class="prize-post">            
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>
        
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="prize-thumbnail"><a href="<?php the_permalink() ; ?> "> <?php the_post_thumbnail( 'large' ); ?> </a></div>
                    <?php endif; ?>

                    <div class="prize-info">  
                        <p> 
                            <?php the_title('<p class="prize-title">'); ?> 
                        <?php echo CFS()->get( 'prize_info' ); ?> 
                        </p>
                    </div>
                </article><!-- #post-## -->
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>