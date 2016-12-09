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
						<a href='http://best.academy.red/participant_location/bc/'>
							<input type="button" value="British Columbia">
						</a> 
					</div>
					
					<div class="dark-button" id="vancouver">
						<a href='http://best.academy.red/participant_location/metro-vancouver/'>
							<input type="button"  value="Metro-Vancouver">
						</a>
					</div>
				</div>
			</div>

		<!--</div>-->
	</div><!-- #primary -->

    <!-- This is the beginning of a template part that toggles a button on and off -->
                    <div class="green-banner">
                        <div class="green-banner-flex">
                            <div class="green-banner-data">
                                <p>reduce your footprint</p>
                                <p>Learn more about how to get involved</p>
                            </div>
                            <form method="POST" action="">
                                <div class="green-buttons">
                                    <div class="button1">
                                        <input type="submit" name="submit" value="Individual" id="go-green-button" >
                                    </div>
                                    <div class="button2">
                                        <input type="submit" name="submit" value="Workplace" id="go-green-button" >
                                    </div>
                                </div><!-- End of green-buttons  -->
                            </form><!-- End of form  -->
                        </div><!-- End of green-banner-flex  -->
                    </div><!-- End of green-banner -->



<?php get_footer(); ?>