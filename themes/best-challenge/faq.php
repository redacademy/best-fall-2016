
<?php /* Template Name: FAQ page 
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
        

			 <section class="about-hero">
             <h1> About </h1>
            </section>
            
        <div id="primary" class="content-area">
		<!-- <main id="main" class="site-main" role="main"> -->

            <div class= "about-text">
            <?php
            $props=CFS()->get_field_info('our_story');
            
            ?>
            <?php echo CFS()->get( 'our_story'); ?>

            <?php
            $props=CFS()-> get_field_info('our_team');
           
            ?>

            <?php 
            echo CFS()->get( 'our_team');
            ?>
            </div>
		
    </main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer();  ?>