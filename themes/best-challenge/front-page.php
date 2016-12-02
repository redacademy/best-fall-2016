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
				<div class="fp-sponsors-title container">
					<h2 class="uppercase">Sponsored by</h2>
				</div>
				<div class="fp-sponsors-img container">
				<div>
					<img src=" <?php echo get_template_directory_uri() ?>/assets/images/evo-logo.png" alt="logo">
				</div>
				<div>
					<img src=" <?php echo get_template_directory_uri() ?>/assets/images/movcolorstack-300.png" alt="logo">
				</div>
				<div>
					<img src=" <?php echo get_template_directory_uri() ?>/assets/images/bc-logo.png" alt="logo">
				</div>
				<div class="modologo">
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

		

		<div class="blog-posts">
			<div class = "best-journal container">
		<?php
		$args = array( 
			'post_type' => 'post', 
			'posts_per_page' => 1, 
			'order' => 'DESC');
   $journal_posts = get_posts( $args ); // returns an array of posts
   ?>
   <?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
   	<div class ="best-journal-post">
   		<?php the_post_thumbnail(); ?>
   		<div class = "best-post-container">
   			<div>
   				<?php the_date();?>
   				<?php comments_number();?>
   			</div>
   			<h3><?php the_title();?></h3>
   			<a class ="read" href="<?php the_permalink();?>">Read Entry</a>
   		</div>
   	</div>
   <?php endforeach; wp_reset_postdata(); ?>
</div>
</div>

<div class="instagram-grid container">
	<h2 class="uppercase">#commuterchallenge</h2>
	<?php echo wdi_feed(array('id'=>'1')); ?>
</div>

<?php get_template_part( 'template-parts/green-banner' ); ?>


	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
