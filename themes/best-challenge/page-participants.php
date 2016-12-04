<?php
/**
 * Template for the Prizes page. 
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class = "page-heading">	
				<div class="title-wrapper">		
					<?php the_title( '<div class="heading"><h1>', '</h3></div>' ); ?>
					<?php
						$props=CFS()->get_field_info('title_info');
					?>
            		<div class="title-info"><?php echo CFS()->get( 'title_info'); ?></div>
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
				<!--Get specific taxonomy term name-->
				<?php
					$participant_location = get_term_by('slug','bc','participant_location');  
				?>
				<!--echo the term name-->
				<h2><?php echo $participant_location->name; ?> </h2>
				
				<!--echo 2nd taxonomy term name -->
				<?php 
					$terms = get_terms('participant_type', array('order' => 'DESC'));  
					foreach($terms as $participant_type) { ?>
					<h2><?php echo $participant_type->name; ?> </h2>
					
				<!--define the arguments for the posts-->
					<?php $args = array(
							'post_type' => 'participant',
							'tax_query' => array(
							 'relation' => 'AND',
								array(
									'taxonomy' => 'participant_location',
									'field'    => 'slug',
									'terms'    => array( 'bc'),
								),
								array(
									'taxonomy' => 'participant_type',
									'field'    => 'slug',
									'terms'    => $participant_type,
									'operator' => 'IN',
								),
							),
						);
						$bc = get_posts( $args ); ?>
					
				<!--posts loop-->
						<?php foreach( $bc as $post ) : setup_postdata($post); ?>	
							<div class="taxonomy-participant">
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
				?>
			</div> <!-- prize wrapper section ends -->


			<!--Vancouver-->
			<div class="taxonomy-wrapper">
				<!--Get specific taxonomy term name-->
				<?php
					$participant_location = get_term_by('slug','metro-vancouver','participant_location');  
				?>
				<!--echo the term name-->
				<h2><?php echo $participant_location->name; ?> </h2>
				
				<!--echo 2nd taxonomy term name -->
				<?php 
					$terms = get_terms('participant_type', array('order' => 'DESC'));  
					foreach($terms as $participant_type) { ?>
					<h2><?php echo $participant_type->name; ?> </h2>
					
				<!--define the arguments for the posts-->
					<?php $args = array(
							'post_type' => 'participant',
							'tax_query' => array(
							 'relation' => 'AND',
								array(
									'taxonomy' => 'participant_location',
									'field'    => 'slug',
									'terms'    => array( 'metro-vancouver'),
								),
								array(
									'taxonomy' => 'participant_type',
									'field'    => 'slug',
									'terms'    => $participant_type,
									'operator' => 'IN',
								),
							),
						);
						$vancouver = get_posts( $args ); ?>
					
				<!--posts loop-->
						<?php foreach( $vancouver as $post ) : setup_postdata($post); ?>	
							<div class="taxonomy-participant">
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
				?>
			</div> <!-- prize wrapper section ends -->
			
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>