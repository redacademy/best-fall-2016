<?php
/**
 * Template Name: Get Involved
 *
 * @package Best_Challenge_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div class="content-area-mobile">
                <div class="picture-wrapper">
                    <h1>get your workplace involved!</h1>
                </div>
            </div>
                <div class="challenge-benefit-blocks">
                    <div class="single-benefit-block">
                        <img></img><i class="fa fa-bicycle" aria-hidden="true"></i>
                        <h3>Increased Productivity</h3>
                        <p>Being multi-modal reduces commute-related stress and increases productivity and morale</p>
                    </div>
                    <div class="single-benefit-block">
                        <img></img><i class="fa fa-bicycle" aria-hidden="true"></i>
                        <h3>Healthier Lifestyle</h3>
                        <p>Active and sustainable commute enhances your physical, mental, and emotional health</p>
                    </div>
                    <div class="single-benefit-block">
                        <img></img><i class="fa fa-bicycle" aria-hidden="true"></i>
                        <h3>Reduced Cost</h3>
                        <p>Being multi-modal reduces commuting and facility related costs, benefiting employees and workplaces</p>
                    </div>
                </div>

                <!-- This is the code for the custom fields -->

            
                <div class="how-to-participate-wrapper">
                    <div class="how-to-participate">
                        <div class="challenge-participate-blocks">
                            <?php 
             
                                $fields = CFS()->get( 'instruction_details' )?>
                                <?php foreach ( $fields as $field ) : ?>
                  
                                 <div class="single-participate-block">
             
                
                                    <p><?php echo $field['number'];?></p>
 
                                        <img src="<?php
                                        echo $field['image'];
                                        ?>" alt="" /> 
    
   
                                        <h3><?php 
                                        echo $field['header'];?></h3>
                                        
                                        <div class="description-wrapper">
                                        <p><?php 
                                        echo $field['description'];?></p>
                                        </div>
    
                                </div>
                            <?php endforeach; ?>
                        </div>
                     </div>

                    <div class="signUpForm">
                	    <form id="sign-up-form">
						    <input type="submit" name="subscribe" value="Sign Up" id="sign-up">
                            <p class="font-under-button">on Canada Site</p>
                            <p class="underline-under-button">or log in on the canada site</p>
                	    </form>
            	    </div>
                </div>

<!-- This is the end of the custom field code -->
		
             
                    <div class="need-resources">
                        <h2>need resources?</h2>
                        <p>Check out our resources page for everything you need to know about engaging your coworkers and 
                            promoting the event (email templates, posters and more!)
                        </p>
                        <div class="resources-link">
                            <a href="">Check out resources ></a>
                        </div>
                        <h2>prizes for everyone</h2>
                        <p>We have prizes for everyone-those who are trying something new and those who are already commuting 
                            sustainably, high-achievers, and lucky ones, teams and individuals. Check them out!
                        </p>
                        <div class="resources-link">
                            <a href="">Check out prizes ></a>
                        </div>
                    </div>
                    <div class="testimonial">
                        <p>"Several coworkers told me commuting by bike used to be a remote idea to them. They were glad to try it 
                            during the Commuter Challenge"</p>
                        <div class="testimonial-author">
                        <p>Allison W</p>
                        <p>Commuter Challenge Coordinator</p>
                    </div>


			<!--<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
