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

            <div class="picture-wrapper-contact">
                <h1>contact us</h1>
                <p>Get in touch with the organizers here at B.E.S.T</p>
            </div>

            <div class="contact-person-section">
                <div class="contact-person-image">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/stephen-white.png"></img>
                </div>
                <div class="contact-person-data">
                    <h2>connect with us directly</h2>
                    <h2>we are here to help!</h2>
                    <p>Say 'Hi' to Stephen from B.E.S.T</p>
                    <p>Stephen White | stephen@best.bc.ca | (604) 669-2860 ext.200</p>
                </div>
            </div>

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
                        <p>Hear about upcoming event, new tools and lots 
                        more! Sign up for our newsletter today!</p>
                        <div class="sign-up-email"><input type="email" name="your_email" id="your-email" value="" placeholder="Enter your email..." aria-label="Subscribe Email Input"></div>
                    	<div class="sign-up-button"><input type="submit" name="subscribe" value="Subscribe" id="subscribe"></div>
                    </div>

                    <?php get_template_part( 'template-parts/green-banner' ); ?>
                    
        </main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
