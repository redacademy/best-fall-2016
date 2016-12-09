<?php
/**
 * Template Name: Impact Results 
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class = "picture-wrapper-results">	
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
		<div class="impact-results-area"> 

			<div class="ir-co2"> 
				<div class="ir-co2-avg">

				</div>
				<div class="ir-co2-image">

				</div>
				<div class="ir-co2-bc">

				</div>
			</div>
			
			<div class="ir-km"> 
				<div class="ir-km-bc">

				</div>
				<div class="ir-km-image">

				</div>
				<div class="ir-km-commute">
					
				</div>
			</div>

			<div class="ir-register"> 
				<div class="ir-register-work">

				</div>
				<div class="ir-register-image">

				</div>
				<div class="ir-register-indv">
					
				</div>
			</div>

			<div class="ir-calories"> 
				<div class="ir-calories-exercise">

				</div>
				<div class="ir-calories-image">

				</div>
				<div class="ir-calories-burned-bc">
					
				</div>
			</div>

			<div class="ir-fuel"> 
				<div class="ir-fuel-saved">

				</div>
				<div class="ir-fuel-image">

				</div>
				<div class="ir-fuel-sold">
					
				</div>
			</div>	

		</div>

		
		<div class="ir-numbers"> 
			<div class="ir-numbers-title">
				<h3 class="uppercase">Commuter Challenge 2016</h3>
				<p>in numbers</p>
			</div>
			<div class="ir-numbers-info">
				<div class="ir-numbers-stats">
				</div>
				<div class="ir-numbers-bc">
				</div>
				<div class="ir-numbers-canada">
				</div>
		</div>


		
			
				

		</div>
   <!-- This is the beginning of a template part that toggles a button on and off -->
                    <div class="green-banner">
                        <div class="green-banner-flex">
                            <div class="green-banner-data">
                                <p>engage as individuals!</p>
                                <p>Discover how you can get involved</p>
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
