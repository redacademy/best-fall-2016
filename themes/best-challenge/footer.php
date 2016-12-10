<?php
/**
 * The template for displaying the footer.
 *
 * @package Best_Challenge_Theme
 */

?>

</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="footer-column">
				<div class="footer-section">
					<div class="footer-content">
						<div class="first-column">
							<div class="about-best">
								<div class="logo-image">
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/best-logo.png"></img>
							</div>

								<div class="para-heading"><p>About<span> b.e.s.t</span></p>
								</div>
								<div class="para-content"><p>B.E.S.T is a non-profit charitable organization with a long history of
								promoting sustainable transportation</p>
								</div>
									<div class="learn-more">
										<div class="para-heading"><a href="<?php echo esc_url( site_url( '/home/' ) ); ?>">learn more ></a>
									</div>
							</div>
						</div><!--end of first-column-->
							
						<div class="contact-us">
							<div class="para-heading"><p>Contact us</p><div>
						<div class="para-content"><p>Do you have any questions? Contact us today!</p></div>
						</div>
						<div class="commuterChallenge-contact-logos">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
						</div>
						<div class="questions">
							<p><a href="mailto:commuterchallenge@best.bc.ca">commuterchallenge@<br>best.bc.ca</a></p>
							<div class="para-content"><p>(604)669-2860</p></div>
						</div>
					</div>	
				</div>			


<?php echo do_shortcode( '[contact-form-7 id="134" title="Newsletter Subscription From"]' ); ?>
					</div>
				</div>
			</div>




			<div class="footer-social">
				<div class="font-awesome">
					<span>
						<a href="http://facebook.com"><i class="fa fa-facebook-square"></i></a>
					</span>
					<span>
						<a href="http://instagram.com"><i class="fa fa-instagram"></i></a>
					</span>
					<span>
						<a href="http://twitter.com"><i class="fa fa-twitter-square"></i></a>
					</span>
					</div>
					<p>Copyright © 2016 B.E.S.T.</p>
				
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>




