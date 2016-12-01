<?php
/**
 * Template Name: Get Involved
 *
 * @package Best_Challenge_Theme
 */

get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>
            </div>

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
    <!-- This is the end of the custom field code -->
                        </div>
                     </div>

                    <div class="signUpForm">
                	    <form id="sign-up-form">
                             <!-- This link will take user to extrnal site -->
						    <input type="submit" name="subscribe" value="Sign Up" id="sign-up">
                            <div class="font-under-button"><p>on Canada Site</p></div>
                            <div class="underline-under-button"><p>or log in on the canada site</p><div>
                	    </form>
            	    </div>
                </div>
            </div>
        </div>

            <div class="resources-section">
                <div class="need-resources">
                        <img src="http://images.all-free-download.com/images/graphiclarge/yin_yang_symbol_black_round_sticker_311430.jpg"/>
                        <h2>need resources?</h2>
                        <p>Check out our resources page for everything you need to know about engaging your coworkers and 
                            promoting the event (email templates, posters and more!)
                        </p>
                    <div class="resources-link">
                           <a href="">Check out resources ></a>
                            <!-- This link will take user to another page for more resources -->
                    </div>
                    <div class="need-prizes">
                             <img src="http://images.all-free-download.com/images/graphiclarge/yin_yang_symbol_black_round_sticker_311430.jpg"/>
                        <h2>prizes for everyone</h2>
                        <p>We have prizes for everyone-those who are trying something new and those who are already commuting 
                            sustainably, high-achievers, and lucky ones, teams and individuals. Check them out!
                        </p>
                    <div class="resources-link">
                            <a href="">Check out prizes ></a>
                             <!-- This link will take user prizes page -->
                    </div>
                </div>
            </div>
        </div>
                <div class="testimonial">
                        <p><em>"Several coworkers told me commuting by bike used to be a remote idea to them. They were glad to try it 
                            during the Commuter Challenge"</em></p>
                    <div class="testimonial-author">
                        <p>Allison W</p>
                        <p>Commuter Challenge Coordinator</p>
                    </div>
                </div>
                <!-- This is the beginning of a template part that toggles a button on and off -->
                    <div class="green-banner">
                        <div>
                            <p>this is some text that will end up being very annoying I believe</p>
                            <p>this is some other text that will be even more annoying</p>
                        </div>
                        <div class="button1">
                            <input type="submit" name="subscribe" value="thisOneMayDisappear" id="go-green-button">
                        </div>
                        <div class="button2">
                            <input type="submit" name="subscribe" value="thisOneMightToo" id="go-green-button">
                        </div>
                    </div>
                <!-- This is the end of that template part  -->

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
