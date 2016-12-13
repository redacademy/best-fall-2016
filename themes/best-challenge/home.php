<?php
/**
 * The template for displaying blog posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>
	<div class="container journal-wrapper">
	<div id="primary" class="content-area journal-posts" >
	
		<main id="main" class="site-main" role="main">

	

		      <div class="blog-posts">
        <div class = "best-journal container">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 1,
                'order' => 'DESC');
            $journal_posts = get_posts( $args ); // returns an array of posts
             foreach ($journal_posts as $post) : setup_postdata( $post ); ?>
            
            <div class ="best-journal-content">
                <div class = "best-post-thumb">
                    <h3 class ="best-post-title mobile"><?php the_title();?></h3>
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class = "best-post-info">
                    <div class ="best-post-title desktop"><h3><?php the_title();?></h3></div>
                    <div class="excerpt"><p><?php the_excerpt(); ?></p></div>      
                
             <div class="green-read">
                <a class ="read-green" href="<?php the_permalink();?>">Read Kelsey's Full Story</a>
            </div>
        </div>
    </div><!-- best-journal-content -->
        

            <?php endforeach; wp_reset_postdata(); ?>
        </div> <!--best journal container -->
    </div> <!-- blog pos section ends -->


</div>

<?php get_footer(); ?>