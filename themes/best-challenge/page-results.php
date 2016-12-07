<?php
/**
 * Template Name: Impact Results 
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class = "page-heading">	
				 <div class="picture-wrapper-results">		
					<?php the_title( '<div class="heading"><h1>', '</h1></div>' ); ?>
					<p>British Columbia Commuter Challenge participants made a real impact!</p>
            		<div class="title-info">
						<?php echo CFS()->get( 'title_info'); ?>
					</div>
				</div>
			</div>
			<div class="content"> 
				</div>
			


<?php get_footer(); ?>