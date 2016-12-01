<?php
/**
 * The main template file.
 *
 * @package Best_Challenge_Theme
 */

get_header(); ?>


<div class="hero-banner">
		</div>
		

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		
		<div class="travel-by">
		
		</div>

		<div class="ccbc-front box container">
			<div class="ccbc-title">
				<h2 class="uppercase">Welcome to commuter challenge bc!</h2>
			</div>
			<div class="ccbc-info">
			<div>
				<img src=" <?php echo get_template_directory_uri() ?>/assets/images/cc-group.png" alt="logo">
				<h3>Join the multi-modal movement</h3>
				<p>Get a team together at work and have fun with sustainable commuting.</p>
			</div>
			<div>
				<img src=" <?php echo get_template_directory_uri() ?>/assets/images/cc-partyhat.png" alt="logo">
				<h3>Celebrate, compete and win prizes!</h3>
				<p>Track your stats and see how you stack up against the rest of BC and Canada.</p>
			</div>

			<div>
				<img src=" <?php echo get_template_directory_uri() ?>/assets/images/cc-heart.png" alt="logo">
				<h3>Boost physical and mental health</h3>
				<p>Get your daily exercise needs in and arrive at work relaxed and ready to go!</p>
			</div>
		</div>
		</div>

		<div class="front-sponsors">
				<div class="fp-sponsors-title">
					<h2 class="uppercase">Sponsored by</h2>
				</div>
				<div class="fp-sponsors-img">
				<div>
					<img src=" <?php echo get_template_directory_uri() ?>/assets/images/evo-logo.png" alt="logo">
				</div>
				<div>
					<img src=" <?php echo get_template_directory_uri() ?>/assets/images/movcolorstack-300.png" alt="logo">
				</div>
				<div>
					<img src=" <?php echo get_template_directory_uri() ?>/assets/images/bc-logo.png" alt="logo">
				</div>
				<div>
					<img src=" <?php echo get_template_directory_uri() ?>/assets/images/modo-logo.png" alt="logo">
				</div>
				<div>
					<img src=" <?php echo get_template_directory_uri() ?>/assets/images/century-group-logo.png" alt="logo">
				</div>
				<div>
					<img src=" <?php echo get_template_directory_uri() ?>/assets/images/goodlife-fitness-gym-logo.png" alt="logo">
				</div>
				<div>
					<img src=" <?php echo get_template_directory_uri() ?>/assets/images/mec-rgb-trademark.png" alt="logo">
				</div>
			</div>
		</div>
		<div class="impact results container">
		
		</div>

		<div class="instagram-grid container">
		
		</div>

		<div class="blog-posts">
		

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

		<?php endif; ?>
</div>



	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
