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
				<div class="ir-co2-avg left">
					<p>The average commuter in Canada emits<span> <?php echo CFS()->get( 'avg_commuter_co2' ); ?></span> of CO2 per week. </p>
				</div>
				<div class="ir-co2-image">

				</div>
				<div class="ir-co2-bc right">
					<p> <span><?php echo CFS()->get( 'bc_year_co2' ); ?></span> of CO2 was avoided by BC commuters in 2016! </p>
				</div>
			</div>
			
			<div class="ir-km"> 
				<div class="ir-km-bc  left">
					<p><span> <?php echo CFS()->get( 'bc_total_traveled_in_year' ); ?></span> in total was travelled by BC participants in 2016.</p>
				</div>
				<div class="ir-km-image">

				</div>
				<div class="ir-km-commute right">
					<p>The average commute to work is about <span><?php echo CFS()->get( 'avg_commute_work_canada' ); ?></span> in Canada.</p>
				</div>
			</div>

			<div class="ir-register"> 
				<div class="ir-register-work left">
					<p> <span><?php echo CFS()->get( 'workplaces_registered_year' ); ?></span> workplaces registered and completed in 2016.</p>
				</div>
				<div class="ir-register-image">

				</div>
				<div class="ir-register-indv right">
					<p><span><?php echo CFS()->get( 'ind_registered_participants' ); ?></span> registered individuals participated in the commuter Challenge BC.</p>
				</div>
			</div>

			<div class="ir-calories"> 
				<div class="ir-calories-exercise left">
					<p>The average commuter in Canada emits <span><?php echo CFS()->get( 'percent_exercise' ); ?></span> of Canadians don't get enough exercise.</p>
				</div>
				<div class="ir-calories-image">

				</div>
				<div class="ir-calories-burned-bc right">
					<p>In British Columbia, we burned a collective of <span><?php echo CFS()->get( 'bc_burned_calories' ); ?></span> calories. Way to go!</p>
				</div>
			</div>

			<div class="ir-fuel"> 
				<div class="ir-fuel-saved left">
					<p>Participants in the Commuter Challenge saved <span><?php echo CFS()->get( 'bc_saved_fuel' ); ?></span> of fuel in BC. </p>
				</div>
				<div class="ir-fuel-image">

				</div>
				<div class="ir-fuel-sold right">
					<p>Everyday across BC <span><?php echo CFS()->get( 'bc_fuel_sold_daily' ); ?></span> litres of petrol are sold. </p>
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
