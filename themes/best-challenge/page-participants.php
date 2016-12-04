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
				<?php
					$terms = get_terms('participant_type', array('order' => 'DESC'));  

					foreach($terms as $participant_type) { ?>
					
						<h2><?php echo $participant_type->name; ?> </h2>

					<?php $args = array(
							'post_type' => 'participant',
							'tax_query' => array(
								'relation' => 'AND',
								array(
									'taxonomy' => 'participant_location',
									'field'    => 'slug',
									'terms'    => array( 'bc', 'metro-vancouver' ),
								),
								array(
									'taxonomy' => 'participant_type',
									'field'    => 'term_id',
									'terms'    => array( 103, 115, 206 ),
									'operator' => 'NOT IN',
								),
							),
						);

						$prizes = get_posts( $args ); ?>
					
					
						<?php foreach( $prizes as $post ) : setup_postdata($post); ?>

							
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
						
						
				} ?>
			</div> <!-- prize wrapper section ends -->
			
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>