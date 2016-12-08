<?php
/**
 * Template for the Resources page. 
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class = "page-heading">	
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
			
			
			<div class="activities-section">
				<?php
					$terms = get_terms('activity_type', array('order' => 'DESC')); ?>
					<div class="activities-wrapper"> 
					<?php	
					foreach($terms as $activity_type) { ?>
							<div class="results">
								<h2><?php echo $activity_type->name; ?> </h2>

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
										<div class="actiity-description">
											<p><?php the_content(); ?></p>
										</div>
									</div>
								<?php endforeach; wp_reset_postdata(); ?>
							</div>
						</div> <!-- activity wrapper section ends -->
						<div class="load-more">
							<p>Load More</p>
							<img src=" <?php echo get_template_directory_uri() ?>/assets/images/arrow-down-small.png" alt="logo">
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
	</div><!-- #primary -->

<?php get_footer(); ?>
