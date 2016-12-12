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
					<?php the_title( '<div class="heading"><h1>', '</h1></div>' ); ?>
				
            		<div class="title-info">	
						<p><?php echo CFS()->get( 'title_info'); ?></p>
					</div>
				</div> <!-- title wrapper ends -->
			</div> <!-- page heading ends -->
			
			<div class="page-description"> 
					<p><?php echo CFS()->get( 'page_description'); ?></p>
			</div>	

			<div class="prizes-section">
				<?php
					$terms = get_terms('prize_type', array('order' => 'DESC'));  
					foreach($terms as $prize_type) { ?>
						<div class="taxonomy-wrapper">
							<div class="results">
								<h2><?php echo $prize_type->name; ?> </h2>

								<?php $args = array(
									'post_type' => 'prize',
									// 'posts_per_page' => 4,
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
								
									<div class="taxonomy-post" id="prize-posts">
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
			

				<div class="prize-categories">
						<h2 class="section-title">prize categories</h2>

						<?php $fields=CFS()->get( 'prize_categories' );
							foreach ( $fields as $field ) { ?>

							<div class="category-name"> 
								<div class="category-title"><h3><?php echo $field['category_name']; ?></h3></div>
								<!--<div class="arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></div>-->
							<div class="arrow"><?php echo "<img src=" . get_template_directory_uri() . "/assets/images/icons/green-checkmark.png>"; ?></div>
							</div>
							<div class="category-description">
									<p><?php echo $field['category_description']; } ?></p>
							</div>
					</div>
			</div>
</div>

   <!-- This is the beginning of a template part that toggles a button on and off -->
                    <div class="green-banner">
                        <div class="green-banner-flex">
                            <div class="green-banner-data">
                                <p>great prizes to be won</p>
                                <p>Learn more about how to get involved</p>
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
