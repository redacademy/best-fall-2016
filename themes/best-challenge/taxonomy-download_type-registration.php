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
							$download_type = get_term_by('slug' ,'registration','download_type');  ?>
								<div class="heading">
									<h1><?php echo $download_type->name; ?> </h1>
								</div>
					</div>
				</div>
       
			<?php		
			    $terms = get_terms($download_type, array('parent' => 0, 'order' => 'DESC'));   
				?>
					<div class="download-wrapper">
                        <?php 
						$children_ids = get_term_children( $download_type->term_id, 'download_type');

							//show taxonomy children and posts
							foreach( $children_ids as $child_id ) { 
								$child = get_term($child_id, $taxonomy); ?>
									<h3><?php echo $child->name; ?> </h3> 
									<div class='results'>
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
									<div class="download-post">
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
								<?php endforeach; wp_reset_postdata(); ?>
								</div>
							<?php	
							}
						?>
						
					</div>
				</div> <!-- prize wrapper section ends -->
		</div>
 <!-- This is the beginning of a template part that toggles a button on and off -->
                    <div class="green-banner">
                        <div class="green-banner-flex">
                            <div class="green-banner-data">
                                <p>get involved</p>
                                <p>Challenge yourself. Challenge your team.</p>
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