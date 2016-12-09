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
					<?php
						$props=CFS()->get_field_info('title_info');
					?>
            		<div class="title-info">
						<?php echo CFS()->get( 'title_info'); ?>
					</div>
				</div>
			</div>
			<div class="content"> 
				<?php
					$id=61;
					$post = get_post($id);
					$content = apply_filters('the_content', $post->post_content);
					echo $content;
				?>	
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
                                <p>Learn more about how to get involved.</p>
                            </div>
                            <form method="POST" action="" >
                                <div class="green-buttons">
                                    <div class="button1">
                                      <!--<input type="submit" name="submit" value="Individual" id="go-green-button" >-->
                                        <a href="<?php echo esc_url( site_url( '/get-involved/' ) ); ?>" rel="program">Individual</a>

                                    </div>
                                    <div class="button2">
                                        <a href="<?php echo esc_url( site_url( '/get-involved/' ) ); ?>" rel="program">Workplace</a>
                                    </div>
                                </div><!-- End of green-buttons  -->
                            </form><!-- End of form  -->
                        </div><!-- End of green-banner-flex  -->
                    </div><!-- End of green-banner -->
            
                   
  <!-- sponsors -->
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
        <!-- END of sponsors -->
                    
        </main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
