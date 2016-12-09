<?php
/**
 * Template for the Resources page. 
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class = "resources-page-heading">	
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
			
			
			<div class="activities-section">
				<?php
					$terms = get_terms('activity_type', array('order' => 'DESC')); ?>
					<div class="activities-wrapper"> 
					<?php	
						foreach($terms as $activity_type) { ?>
							<h2><?php echo $activity_type->name; ?> </h2>
							<div class="activity-posts">	
								<?php $args = array(
									'post_type' => 'resources',
									'posts_per_page' => 3,
									'tax_query' => array( 
										array(
											'taxonomy' => 'activity_type',
											'field'    => 'slug',
											'terms'    =>  $activity_type,		
										),
									),  
								);
								$activities = get_posts( $args ); ?>
							
							
								<?php foreach( $activities as $post ) : setup_postdata($post); ?>								
									<div class="single-activity-post">
										<div class="activity-image">
											<?php the_post_thumbnail( 'large' ); ?>							
										</div>

										<div class="activity-title">
											<h3><?php the_title(); ?></h3>
										</div>
										<div class="activity-description">
											<p><?php the_content(); ?></p>
										</div>
									</div>
								<?php endforeach; wp_reset_postdata(); ?>
							</div>	
						</div> <!-- activity wrapper section ends -->
						<div class="load-more">
							<a href="<?php echo esc_url( site_url( 'activity_type/team-activities/' ) ); ?>">
								<p>Read More</p>
							</a>
						</div>
					<?php
					} ?>
			</div>
		
		
	   		<!--for every child of  show with sub-children show sub-children-->
			<!--get all from main parent - download_type-->
			<?php
			$taxonomy = 'download_type';
			$terms = get_terms($taxonomy, array('parent' => 0, 'order' => 'DESC'));   
				foreach($terms as $download_type) { ?>
					<div class="taxonomy-wrapper">
						<div class="results">
							<h2><?php echo $download_type->name; ?> </h2> 
						<?php 

						$children_ids = get_term_children( $download_type->term_id, $taxonomy );

						if (count($children_ids)> 0) {					//if taxonomy has children, show it's children and posts
							foreach( $children_ids as $child_id ) {
								$child = get_term($child_id, $taxonomy); ?>
									<h3><?php echo $child->name; ?> </h3> 
									<?php
										$args = array(
											'post_type' => 'resources',
											'posts_per_page' => 3,
											'tax_query' => array( 
												array(
													'taxonomy' => $taxonomy,
													'field'    => 'slug',
													'terms'    =>  $child,										
												),
											),  
										);
										$downloads = get_posts( $args );

								foreach( $downloads as $post ) : setup_postdata($post); ?>
									<div class="taxonomy-post">
										<div class="taxonomy-image">
											<?php the_post_thumbnail( 'large' ); ?>							
										</div>

										<div class="taxonomy-title">
											<h3><?php the_title(); ?></h3>
										</div>
										<div class="taxonomy-description">
											<p><?php the_content(); ?></p>
										</div>
									</div>
								<?php endforeach; wp_reset_postdata();
							}
						} 
						else {	// show me the posts 
							$args = array(
								'post_type' => 'resources',
								'posts_per_page' => 3,
								'tax_query' => array( 
									array(
										'taxonomy' => $taxonomy,
										'field'    => 'slug',
										'terms'    =>  $download_type,
										
									),
								),  
							);
						$downloads = get_posts( $args ); 
						?>
						<?php foreach( $downloads as $post ) : setup_postdata($post); ?>
							<div class="taxonomy-post">
								<div class="prize-image">
									<?php the_post_thumbnail( 'large' ); ?>							
								</div>

								<div class="taxonomy-title">
									<h3><?php the_title(); ?></h3>
								</div>
								<div class="taxonomy-description">
									<p><?php the_content(); ?></p>
								</div>
							</div>
						<?php endforeach; wp_reset_postdata(); ?>
					</div>
				</div> <!-- prize wrapper section ends -->
			<?php
				} 
			}
			?>
		</div>
	
   <!-- This is the beginning of a template part that toggles a button on and off -->
                    <div class="green-banner">
                        <div class="green-banner-flex">
                            <div class="green-banner-data">
                                <p>be a part of the movement!</p>
                                <p>Challenge yourself. Challenge your team.</p>
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


