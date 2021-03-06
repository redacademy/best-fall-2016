<?php
/**
 * Template Name: Contact Us
 *
 * @package Best_Challenge_Theme
 */



get_header(); ?>

</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <div class = "picture-wrapper-contact"> 
                <div class="title-wrapper">     
                    <?php the_title( '<div class="heading"><h1>', '</h1></div>' ); ?>              
                    <div class="title-info">    
                        <p><?php echo CFS()->get( 'title_info'); ?></p>
                    </div>
                </div> <!-- title wrapper ends -->
            </div> <!-- page heading ends -->
            
           
             <?php get_template_part( 'template-parts/contact-person' ); ?>

         
            <div class="contact-form-area">
                <div class="contact-form-7-area">
                    <h2>have questions? want to learn more?</h2>
                    <h2>leave us a message!</h2>
                <div class="contact-form-proper">
                    <?php echo do_shortcode( '[contact-form-7 id="72" title="BEST Contact Form"]' ); ?>
                </div>
                </div>
            </div>
            		
                <div class="directions-area">
                    <div class="google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2603.7015508123154!2d-123.10360868621243!3d49.26310248008171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54867178f624f99d%3A0xad58a3d44971c436!2sBetter+Environmentally+Sound+Transportation!5e0!3m2!1sen!2sca!4v1480810567421" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="address">
                        <h2>our vancouver office</h2>
                        <p>Better Environmentally Sound Transportation</p>
                        <p>204-175 East Broadway</p>
                        <p>Vancouver, BC</p>
                        <p>V5T 1W2</p>
                        <div class="email-contact">
                            <p>commuterchallenge@best.bc.ca | (604) 669-2860</p>
                        </div>
                    </div>
                </div>
                    
                <div class="newsletter-sign-up">
                    <h2>sign up for our newsletter</h2>
                    <div class="sign-up-text">
                        <div class="sign-up-text-request">
                            <p>Get Involved!</p> 
                            <p>Challenge yourself. Challenge your team.</p>
                        </div>
                        <div class="input-and-buttons">
                            <div class="sign-up-email"><input type="email" name="your_email" id="your-email-inputs" value="" placeholder="Enter your email..." aria-label="Subscribe Email Input"></div>
                    	    <div class="sign-up-button"><input type="submit" name="subscribe" value="Subscribe" id="subscribe-newsletters"></div>
                        </div>
                    </div>
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
         </div>
          
        </main><!-- #main -->
	</div><!-- #primary -->
</div>
</div>

<?php get_footer(); ?>


