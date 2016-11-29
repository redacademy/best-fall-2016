<?php
/**
 * Template Name: Get Involved
 *
 * @package Best_Challenge_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div class="content-area-mobile">
                <div class="picture-wrapper">
                    <h1>get your workplace involved!</h1>
                </div>

                <div class="commuter-challenge-benefits-wrapper">
                    
                    
                    <div class="">
                        <h3>Increased Productivity</h3>
                    <img src=></img>
                    <p>Being multi-modal reduces commute-related stress and increases productivity and morale</p>
                    </div>
                    <div class="">
                        <h3>Healthier LifeStyle</h3>
                    <img scr=></img>
                    <p>Active and sustainable commute enhances your physical, mental, and emotional health</p>
                    </div>
                    <div class="">
                        <h3>Reduced Cost</h3>
                    <img src=""></img>
                    <p>Being multi-modal reduces commuting and facility related costs, benefiting employees and workplaces</p>
                    </div>


                </div>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
