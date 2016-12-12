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
		
			<div class="downloads">
				<h2>Resource downloads</h2>
				<!--Show only the Download Categories-->
				<?php
				$taxonomy = 'download_type';
				
				$terms = get_terms($taxonomy, array('parent' => 0, 'order' => 'DESC'));   
					foreach($terms as $download_type) { ?>
						<div class="download-categories">
							<div class="category-titles">
								<div class=download-name>
									<?php echo "<img src=" . get_template_directory_uri() . "/assets/images/icons/download-icons/" . $download_type->slug . ".png>"; ?>
									<?php $url=get_term_link($download_type->slug , 'download_type'); ?>
									<a href="<?php echo $url ?>"><h2><?php echo $download_type->name ?></h2></a>
								</div>
								<div class="arrow"><a href="<?php echo $url ?>" class="arrow-link"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
							</div>		
						</div>
				<?php
					} 
				?>
			</div>
		</div>
	</div>
 <!-- This is the beginning of a template part that toggles a button on and off -->
                    <div class="green-banner">
                        <div class="green-banner-flex">
                            <div class="green-banner-data">
                                <p>be part of the movement</p>
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
<?php get_template_part ('template-parts/sponsors-banner'); ?>
<?php get_footer(); ?>


