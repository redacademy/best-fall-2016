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
			
			<?php
// List posts by the terms for a custom taxonomy 
				$terms = get_terms('download_type', array('order' => 'DESC'));  
				foreach($terms as $download_type) { ?>
					<div class="taxonomy-wrapper">
						<div class="results">
							<h2><?php echo $download_type->name; ?> </h2>

							<?php $args = array(
								'post_type' => 'resources',
								// 'posts_per_page' => 4,
								'tax_query' => array( 
									array(
										'taxonomy' => 'download_type',
										'field'    => 'slug',
										'terms'    =>  $download_type,
										
									),
								),  
							);	
							$downloads = get_posts( $args ); ?>
						
						
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
				} ?>

		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>
