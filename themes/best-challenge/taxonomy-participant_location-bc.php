<?php
/*
The temaplate to display taxonomy type archive 
*/
?>
 
<?php get_header(); ?>

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
               
              <?php 
					$participant_location = get_term_by('slug','bc','participant_location');  ?>
							<div class="location-title">
								<h2><?php echo $participant_location->name; ?> </h2>
							</div>

					<?php $types = get_terms('participant_type', array('order' => 'DESC'));  
						foreach($types as $participant_type) { ?>
								<h2><?php echo $participant_type->name; ?> </h2>		
								<h3><?php echo $participant_type->description; ?></h3>
										
				<!--define the arguments for the posts-->
					<?php $args = array(
							'post_type' => 'participant',
							'tax_query' => array(
							 'relation' => 'AND',
								array(
									'taxonomy' => 'participant_location',
									'field'    => 'slug',
									'terms'    => $participant_location,
								),
								array(
									'taxonomy' => 'participant_type',
									'field'    => 'slug',
									'terms'    => $participant_type,
									'operator' => 'IN',
								),
							),
						);
						$teams = get_posts( $args ); ?>
					
				<!--posts loop-->
						<?php foreach( $teams as $post ) : setup_postdata($post); ?>	
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
							} //ends participant_location foreach foreach loop
						?>
			</div> <!-- taxonomy wrapper ends -->
        </div><!-- #content -->
    </div><!-- #primary -->
</div><!-- #main-content -->
 
<?php
get_footer();