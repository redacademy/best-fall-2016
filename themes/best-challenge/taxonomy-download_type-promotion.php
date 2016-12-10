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
							$download_type = get_term_by('slug' ,'promotion','download_type');  ?>
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
 <?php get_template_part( 'template-parts/green-banner' ); ?>
                   
  <!-- sponsors -->
                    	<div class="front-sponsors">
				<div class="fp-sponsors-title container">
					<h2 class="uppercase">Sponsored by</h2>
				</div>
				<div class="fp-sponsors-img container">
				<div>
					<img src=" <?php echo get_template_directory_uri() ?>/assets/images/evo-logo.png" alt="logo">
				</div>
				<div>
					<img src=" <?php echo get_template_directory_uri() ?>/assets/images/movcolorstack-300.png" alt="logo">
				</div>
				<div>
					<img src=" <?php echo get_template_directory_uri() ?>/assets/images/bc-logo.png" alt="logo">
				</div>
				<div class="modologo">
					<img src=" <?php echo get_template_directory_uri() ?>/assets/images/modo-logo.png" alt="logo">
				</div>
				<div>
					<img src=" <?php echo get_template_directory_uri() ?>/assets/images/century-group-logo.png" alt="logo">
				</div>
				<div>
					<img src=" <?php echo get_template_directory_uri() ?>/assets/images/goodlife-fitness-gym-logo.png" alt="logo">
				</div>
				<div>
					<img src=" <?php echo get_template_directory_uri() ?>/assets/images/mec-rgb-trademark.png" alt="logo">
				</div>
			</div>
		</div>
        <!-- END of sponsors -->
                    
        </main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>