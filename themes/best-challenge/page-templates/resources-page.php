<?php
/**
 * Template Name: Resources
 *
 * @package Best_Challenge_Theme
 */



get_header(); ?>

</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <div class="picture-wrapper-contact">
                <h1>resources</h1>
                <p>We've got your back!</p>
            </div>


                <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'template-parts/content', 'page' ); ?>
                <?php endwhile; // End of the loop. ?>


            <div class="activities">

                            <?php

                                $fields = CFS()->get( 'activities_loop' )?>
                                <?php foreach ( $fields as $field ) : ?>

                                    <img src="<?php
                                        echo $field['image'];
                                        ?>" alt="" />
                                 
                                       <h3><?php
                                        echo $field['header'];?></h3>


                                    <p><?php echo $field['description'];?></p>

                                        <img src="<?php
                                        echo $field['download_image'];
                                        ?>" alt="" />


                                     
                                
                            <?php endforeach; ?>
    <!-- This is the end of the custom field code -->
            </div>



                <?php get_template_part( 'template-parts/contact-person' ); ?>

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
