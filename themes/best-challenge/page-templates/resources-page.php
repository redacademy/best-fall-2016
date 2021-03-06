<?php
/**
 * Template Name: Resources
 *
 * @package Best_Challenge_Theme
 */



get_header(); ?>

</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <div class="picture-wrapper-contact">
                <h1>resources</h1>
                <p>We've got your back!</p>
            </div>
				<?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'template-parts/content', 'page' ); ?>
                <?php endwhile; // End of the loop. ?>

				<div class="activities">
				<h2>team activities and more!</h2>
				<div class="activities-wrapper">
                    <div class="activities-blocks">
                            <?php

                                $fields = CFS()->get( 'activities_loop' )?>
                                <?php foreach ( $fields as $field ) : ?>

							<div class="single-activity-block">

                                    <img src="<?php
                                        echo $field['image'];
                                        ?>" alt="" />

								<div class="description-wrapper">
									
                                       <h3><?php
                                        echo $field['header'];?></h3>
									
                                    <p><?php echo $field['description'];?></p>

									<div class="download-area">
					
										<p><?php echo $field['download_word'];?></p>

									 <img src="<?php
                                        echo $field['download_image'];
                                        ?>" alt="" />
									
									</div>

								</div>
							</div>
                                      <?php endforeach; ?>
   						</div>

					<div class="load-more">
						<p>Load More</p>
						<img src=" <?php echo get_template_directory_uri() ?>/assets/images/arrow-down-small.png" alt="logo">
					</div>
				</div>
			</div>

 <!-- This is the end of the custom field code -->



		<!-- This is the custom field code for the download area-->
 			<div class="resource-downloads">
				<h2>resource downloads</h2>
					<div class="download-categories">
						<div>
							<div class="icons">
								<div class="icon"><img src=" <?php echo get_template_directory_uri() ?>/assets/images/clipboard-black.jpg" alt="logo"></div>
								<div class="icon"><img src=" <?php echo get_template_directory_uri() ?>/assets/images/bugle-black.png" alt="logo"></div>
								<div ><img src=" <?php echo get_template_directory_uri() ?>/assets/images/abacus-black.png" alt="logo"></div>
							</div>
						</div>
					<div>
						<?php 
						$fields=CFS()->get( 'downloads_loop' ); 
                        foreach ( $fields as $field ) { ?>

							<div class="category-name"> 
                               <h3><?php echo $field['category_name']; ?></h3>
                        	</div>
                        	<div class="category-description">
                                <p><?php echo $field['category_description'];
							} ?></p>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- End of custom field code for the download area-->	

                <?php get_template_part( 'template-parts/contact-person' ); ?>

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
