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
				</div>
				<div class="impact-results-info">
						<p>The Commuter Challenge 
							is all about having fun while making a 
							difference. Here’s how the community 
							of British Columbia made an impact in 2016.</p>
					</div>
			</div>
		<div class="impact-results-area"> 

			<div class="ir-co2"> 
				<div class="">

				</div>
				<div class="">

				</div>
				<div class="">

				</div>
			</div>
			
			<div class="ir-km"> 
				<div class="">

				</div>
				<div class="">

				</div>
				<div class="">
					
				</div>
			</div>

			<div class="ir-register"> 
				<div class="">

				</div>
				<div class="">

				</div>
				<div class="">
					
				</div>
			</div>

			<div class="ir-calories"> 
				<div class="">

				</div>
				<div class="">

				</div>
				<div class="">
					
				</div>
			</div>

			<div class="ir-fuel"> 
				<div class="">

				</div>
				<div class="">

				</div>
				<div class="">
					
				</div>
			</div>	

		</div>

		
		<div class="ir-numbers"> 

		</div>


		
			

<div class="front-sponsors">
				<div class="fp-sponsors-img container">
				<div>
					<img src=" <?php echo get_template_directory_uri() ?>/assets/images/evo-logo.png" alt="logo" class="desktop">
				</div>
				<div>
					<img src=" <?php echo get_template_directory_uri() ?>/assets/images/movcolorstack-300.png" alt="logo" class="desktop">
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
					<img src=" <?php echo get_template_directory_uri() ?>/assets/images/goodlife-fitness-gym-logo.png" alt="logo" class="desktop">
				</div>
				<div>
					<img src=" <?php echo get_template_directory_uri() ?>/assets/images/mec-rgb-trademark.png" alt="logo" class="desktop">
				</div>
			</div>
		</div>

		</div>
   <!-- This is the beginning of a template part that toggles a button on and off -->
                    <div class="green-banner">
                        <div class="green-banner-flex">
                            <div class="green-banner-data">
                                <p>guzzle less gas</p>
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
