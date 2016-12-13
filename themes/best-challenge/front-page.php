<?php
/**
 * The main template file.
 *
 * @package Best_Challenge_Theme
 */

get_header(); ?>


<div class="hero-banner">
    <div class="travel-by desktop">
        <div>
            <h3 class="uppercase"> I travel by  <span id="typewrite"> </span></h3>
            <p>Join the Canada-wide competition.<br>
                Celebrate sustainable commuting in BC.<p>
            <form method="POST" action="">
                <div class="green-buttons">
                        <div class="button1">
                                <input type="submit" name="submit" value="Individual" id="go-green-button" >
                        </div>
                        <div class="button2">
                                <input type="submit" name="submit" value="Workplace" id="go-green-button" >
                        </div>
                </div>
            </form>
        </div>
    </div>
</div>
        

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="travel-by-mobile mobile">
            <div class="travel-by-content">
                <h3 class="uppercase"> I travel by </h3>
                <p>Join the Canada-wide competition.<br>
                    Celebrate sustainable commuting in BC.<p>
                <form method="POST" action="">
                    <div class="green-buttons">
                            <div class="button1">
                                    <input type="submit" name="submit" value="Individual" id="go-green-button" >
                            </div>
                            <div class="button2">
                                    <input type="submit" name="submit" value="Workplace" id="go-green-button" >
                            </div>
                    </div>
                </form>
            </div>
        </div>
    
        <div class="ccbc-front box container">
            <div class="ccbc-title">
                <h2 class="uppercase">Welcome to commuter challenge bc!</h2>
            </div>
            <div class="ccbc-info">
                <div class="info-content">
                    <img src=" <?php echo get_template_directory_uri() ?>/assets/images/cc-group.png" alt="logo">
                    <h3>Join the multi-modal movement</h3>
                    <p>Get a team together at work and have fun with sustainable commuting.</p>
                    <div class="black-line"> </div>
                </div>
                <div class="info-content">
                    <img src=" <?php echo get_template_directory_uri() ?>/assets/images/cc-partyhat.png" alt="logo">
                    <h3>Celebrate, compete and win prizes!</h3>
                    <p>Track your stats and see how you stack up against the rest of BC and Canada.</p>
                    <div class="black-line"> </div>
                </div>
                <div class="info-content">
                    <img src=" <?php echo get_template_directory_uri() ?>/assets/images/cc-heart.png" alt="logo">
                    <h3>Boost physical and mental health</h3>
                    <p>Get your daily exercise needs in and arrive at work relaxed and ready to go!</p>
                </div>
            </div>
        </div>

<!-- Sponsors Banner Template Part -->
    <?php get_template_part ('template-parts/sponsors-banner'); ?>
<!-- sponsors banner ends--> 

    <div class="impact-results container">
            <div class="canada-map">
                    <img id="myImage" src="<?php echo get_template_directory_uri() ?>/assets/images/bcmap.jpg">
                    <div class="map-buttons">
                        <a class="bcbutton" onclick="document.getElementById('myImage').src='<?php echo get_template_directory_uri() ?>/assets/images/bcmap.jpg'">BC</a>
                        <a class="canadabutton" onclick="document.getElementById('myImage').src='<?php echo get_template_directory_uri() ?>/assets/images/canadamap.jpg'"> Canada</a>
                    </div>
            </div>

            <div class="fp-impact-results">
                <div class="impact-box">
                    <h2> IMPACT RESULTS 2016</h2>
                    <h3> Total <span>CO2</span> Used </h3>
                    <div class="bc-results-info">            
                        <div class="total">
                            <h4><?php echo CFS()->get( 'bc_co2_total' ); ?></h4>
                            <p>British Columbia Total</p>
                        </div>      
                        <div class="work-avg">
                            <h4><?php echo CFS()->get( 'bc_average' ); ?></h4>
                            <p>Workplace Average</p>
                        </div>
                    </div> 
                    <div class="canada-results-info">            
                        <div class="total">
                            <h4><?php echo CFS()->get( 'canada_co2_total' ); ?></h4>
                            <p>British Columbia Total</p>
                        </div>      
                        <div class="work-avg">
                            <h4><?php echo CFS()->get( 'canada_average' ); ?></h4>
                            <p>Workplace Average</p>
                        </div>
                    </div>         
                    <div class="dark-button">
						<a href="<?php echo esc_url( site_url( '/participant_location/results/' ) ); ?>">
							<input type="button"  value="See More Results">
						</a>
					</div>
                </div>

            </div> <!-- impact results box -->

    </div>
    <!--Blog-->


        <div class="blog-posts">
            <div class = "best-journal container">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'order' => 'DESC');
        $journal_posts = get_posts( $args ); // returns an array of posts
    ?>
    <?php foreach ($journal_posts as $post) :
        setup_postdata( $post ); ?>
    <div class ="best-journal-content">

            <div class = "best-post-thumb">
                <h3 class ="best-post-title mobile"><?php the_title();?></h3>
                    <?php the_post_thumbnail(); ?>
            </div>

            <div class = "best-post-info">
                <h3 class ="best-post-title desktop"><?php the_title();?></h3>
                <?php the_content();?>
                </div>
        </div>
    <div class="green-read">
        <a class ="read-green" href="<?php the_permalink();?>">Read Kelsey's Full Story</a>
    </div>

    <?php endforeach;
wp_reset_postdata(); ?>
</div>
</div>

 <!--Instagram-->
 
<div class="instagram-grid container">
    <h2 class="uppercase">#commuterchallenge</h2>
    <?php echo wdi_feed(array('id'=>'1')); ?>
</div>

 
   <!-- This is the beginning of a template part that toggles a button on and off -->
                    <div class="green-banner">
                        <div class="green-banner-flex">
                            <div class="green-banner-data">
                                <p>inspire and empower your team!</p>
                                <p>Challenge yourself! Challenge your team!</p>
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
               

    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
