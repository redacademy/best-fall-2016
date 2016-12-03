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
			

			<div class="prize-wrapper">
				<?php
					$terms = get_terms('prize_type', array('order' => 'DESC'));  

					foreach($terms as $prize_type) { ?>
					
						<h2><?php echo $prize_type->name; ?> </h2>

						<?php $args = array(
							'post_type' => 'prize',
							'tax_query' => array( 
								array(
									'taxonomy' => 'prize_type',
									'field'    => 'slug',
									'terms'    =>  $prize_type,
								),
							),  
						);

						$prizes = get_posts( $args ); ?>
					
					
						<?php foreach( $prizes as $post ) : setup_postdata($post); ?>

							
							<div class="single-prize">
								<div class="prize-image">
									<?php the_post_thumbnail( 'large' ); ?>							
								</div>

								<div class="prize-title">
									<h3><?php the_title(); ?></h3>
								</div>
								<div class="prize-description">
									<p><?php the_content(); ?></p>
								</div>
							</div>

						<?php endforeach; wp_reset_postdata();

					} ?>
			</div>
			
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>
