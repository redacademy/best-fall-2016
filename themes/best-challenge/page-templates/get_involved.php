<?php
/**
 * Template Name: Get Involved
 *
 * @package Best_Challenge_Theme
 */



get_header(); ?>

</div>




<div class="toggle-visible-hidden">
   <div class="redirect-page-area"> 
			<div class="page-banner">
        <div class="challenge-logo">
		 <img src="<?php echo get_template_directory_uri() ?>/assets/images/commuterchallengebc-copy.png"></img>
		 </div>
			<h1>hooray!!!</h1>
			<h2>See you later!</h2>
			</div>

			<div class="redirect-explain">
				<p>You are now leaving Commuter Challenge BC and will 
					automatically be redirected to <span>Commuter Challenge - Canada to Register.</span>
			</div>
			<div class ="resources">
				<p>Don't forget we have got your back with fun and unique <a href="">BC Resources</a></p>
			</div>
    </div>
</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div class="picture-wrapper">
                    <h1>get your workplace involved!</h1>
                </div>


                <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'template-parts/content', 'page' ); ?>
                <?php endwhile; // End of the loop. ?>

                <div class="challenge-benefit-blocks">
                    <div class="single-benefit-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-up.png"></img>
                        <h3>Increased Productivity</h3>
                        <p>Being multi-modal reduces commute-related stress and increases productivity and morale</p>
                    </div>
                    <div class="single-benefit-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/heart.png"></img>
                        <h3>Healthier Lifestyle</h3>
                        <p>Active and sustainable commute enhances your physical, mental, and emotional health</p>
                    </div>
                    <div class="single-benefit-block">
                       <img src="<?php echo get_template_directory_uri() ?>/assets/images/piggy-bank.png"></img>
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
                            <form action="" id="form" method="post" name="form" onsubmit="return redirect(); return false;">
                             <!-- This link will take user to extrnal site -->
						        <input type="submit" name="submit" value="Sign Up" id="sign-up">
                                <div class="font-under-button"><p>on Canada Site</p></div>
                                <div class="underline-under-button"><a href="https://commuterchallenge.ca/">or log in on the canada site</a><div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="resources-section">
                <div class="need-resources">
                    <div class="flex">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/desktop-clipart.png"></img>
                        <h2>need resources?</h2>
                        <p>Check out our resources page for everything you need to know about engaging your coworkers and
                            promoting the event (email templates, posters and more!)
                        </p>
                        <div class="resources-link">
                            <a href="">Check out resources ></a>
                                    <!-- This link will take user to another page for more resources -->
                        </div>
                    </div> 
                    <div class="flex">
                        <div class="need-prizes">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/gift-clipart.jpg"></img>
                            <h2>prizes for everyone</h2>
                            <p>We have prizes for everyone-those who are trying something new and those who are already commuting
                            sustainably, high-achievers, and lucky ones, teams and individuals. Check them out!
                            </p>
                        <div class="resources-link">
                                <a href="">Check out prizes ></a>
                        </div>      <!-- This link will take user prizes page -->
                    </div>
                </div>
            </div>
        </div>
                <div class="testimonial">
                        <p><em>"Several co-workers told me commuting by bike used to be a remote idea to them. They were glad to try it
                            during the Commuter Challenge"</em></p>
                    <div class="testimonial-author">
                        <p>Allison W</p>
                        <p>Commuter Challenge Coordinator</p>
                    </div>
                </div>
   
     <!-- This is the beginning of a template part that toggles a button on and off -->
                    <div class="green-banner">
                        <div class="green-banner-flex">
                            <div class="green-banner-data">
                                <p>engage as individuals!</p>
                                <p>Discover how you can get involved</p>
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
