<?php
/*
The temaplate to display taxonomy type archive 
*/
?>

<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class = "resources-page-heading">	
                <div class="title-wrapper">	
				    <?php 
					    $activity_type = get_term_by('slug' ,'team-activities','activity_type');  ?>
						<div class="heading">
							<h1><?php echo $activity_type->name; ?> </h1>
						</div>
                </div>
			</div>
			
			
			<div class="activities-section">
				<?php
					$terms = get_terms('activity_type', array('order' => 'DESC')); ?>
					<div class="activities-wrapper"> 
					<?php	
						foreach($terms as $activity_type) { ?>
							<div class="activity-posts">	
								<?php $args = array(
									'post_type' => 'resources',
									'posts_per_page' => -1,
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
                    <?php
			    }
			?>
    </div><!-- #main-content -->
 
 <!-- This is the beginning of a template part that toggles a button on and off -->
                    <div class="green-banner">
                        <div class="green-banner-flex">
                            <div class="green-banner-data">
                                <p>get involved</p>
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