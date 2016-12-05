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
			<div class="taxonomy-wrapper">
				<?php 
					$locations = get_terms('participant_location', array('order' => 'ASC'));  
						foreach($locations as $participant_location) { ?>
							<div class="location-title">
								<h2><?php echo $participant_location->name; ?> </h2>
							</div>

					<?php $types = get_terms('participant_type', array('order' => 'DESC'));  
						foreach($types as $participant_type) { ?>
								<h3><?php echo $participant_type->name; ?> </h3>	
								<h4><?php echo $participant_type->description; ?></h4>
										
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
						} //ends participant_type foreach loop
						?>
			</div> <!-- taxonomy wrapper ends -->
		<!--</div>-->
	</div><!-- #primary -->
<?php get_footer(); ?>