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
        <!--</div> #content -->
    <!--</div> #primary -->
    </div><!-- #main-content -->
 
<?php get_template_part( 'template-parts/green-banner' ); ?>
<?php get_footer(); ?>