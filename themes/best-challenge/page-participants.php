<?php
/**
 * Template for the Prizes page. 
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class = "page-heading-participants">	
				<div class="title-wrapper">		
					<?php the_title( '<div class="heading"><h1>', '</h1></div>' ); ?>
				
            		<div class="title-info">	
						<p><?php echo CFS()->get( 'title_info'); ?></p>
					</div>
				</div> <!-- title wrapper ends -->
			</div> <!-- page heading ends -->
			
			<div class="page-description"> 
					<p><?php echo CFS()->get( 'page_description'); ?></p>
			</div>	
			<div class= "participants">
				<div class="bc-map">
					<img id="bc-map" src="<?php echo get_template_directory_uri() ?>/assets/images/maps/bc.png">
					<img id="van-map" src="<?php echo get_template_directory_uri() ?>/assets/images/maps/metrovan.png">
				</div>

				<div class="buttons">
					<div class="dark-button" id="bc">
						<a href="<?php echo esc_url( site_url( '/participant_location/bc/' ) ); ?>" >
							<input type="button" value="British Columbia">
						</a> 
					</div>
					
					<div class="dark-button" id="vancouver">
						<a href="<?php echo esc_url( site_url( '/participant_location/metro-vancouver/' ) ); ?>">
							<input type="button"  value="Metro-Vancouver">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>	

 <?php get_template_part( 'template-parts/green-banner' ); ?>
<?php get_template_part ('template-parts/sponsors-banner'); ?>
<?php get_footer(); ?>
