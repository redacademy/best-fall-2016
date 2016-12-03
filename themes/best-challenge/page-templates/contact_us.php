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
                    <?php echo do_shortcode( '[contact-form-7 id="72" title="BEST Contact Form"]' ); ?>
                </div>
            </div>
            		
                    
                    
        </main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
