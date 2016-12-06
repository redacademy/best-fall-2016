<?php
/**
 * Template for the Prizes page. 
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class = "page-heading-participants">	
				<div class="title-wrapper">		
					<?php the_title( '<div class="heading"><h1>', '</h1></div>' ); ?>
					<?php
						$props=CFS()->get_field_info('title_info');
					?>
            		<div class="title-info">
						<?php echo CFS()->get( 'title_info'); ?>
					</div>
				</div>
			</div>
			<div class="content"> 
				<?php
					$id=61;
					$post = get_post($id);
					$content = apply_filters('the_content', $post->post_content);
					echo $content;
				?>	
			</div>	
			<div class= "participants">
				<div class="map">
					<img id="myImage" src="<?php echo get_template_directory_uri() ?>/assets/images/bcmap.jpg">
				</div>
				<div class="buttons">
					<div class="dark-button">
						<input type="submit" value="British Columbia">
					</div>
					
					<div class="dark-button">
						<input type="submit"  value="Metro-Vancouver">
					</div>
				</div>
			</div>

		<!--</div>-->
	</div><!-- #primary -->
<?php get_footer(); ?>