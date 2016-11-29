<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Best_Challenge_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php echo esc_html( 'Woops! page not found.' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content info-404">
					<div class="clock">
						<img src="http://i1.istockimg.com/file_thumbview_approve/28439520/5/stock-illustration-28439520-digital-alarm-clock-cartoon.jpg" alt="clock">
					</div>
					<div>
						<p> Looks like we hit the snooze button too many times and are late to work!</p>
						<p><a href="#">Go back</a> or visit our <a href="#">Home Page</a></p>
						<p>(or wake us up and send us feedback)<br> <a href="#">Contact Us</a></p>
					</div>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
