
<?php /* Template Name: FAQ page 
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<section class="title">
             <h1> FAQ</h1>
        </section>
            
        <div id="primary" class="content-area">
         <main id="main" class="site-main" role="main"> 
            <section class="qa-section">
                <!--get the general QA-->
                <?php $fields=CFS()->get( 'general_questions' );
                        foreach ( $fields as $field ) { ?>
                        <div class="question"> 
                               <p><?php echo $field['question']; ?></p>
                        </div>
                        <div class="answer">
                                <p><?php echo $field['answer']; } ?></p>
                        </div>

                <!--get workplace QA-->
                
                <!--get individual QA-->
            </section>
		
    </main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer();  ?>