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
				<h1>PRIZES</h1>
				<p>Anyone can win!</p>
			</div>
			

			<?php
            $props=CFS()->get_field_info('prizes_page_description');
            
            ?>
            <?php echo CFS()->get( 'prizes_page_description'); ?>


			<div class="prize-wrapper">
				<?php
					$terms = get_terms('prize_type');  

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