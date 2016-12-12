<?php
/**
* Template part for displaying green banner 
*
* @package RED_Starter_Theme
*/
?>    
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
                        <a href="<?php echo esc_url( site_url( '/get-involved/' ) ); ?>" rel="program"><input type="submit" name="submit" value="Individual"></a>

                    </div>
                    <div class="button2">
                        <a href="<?php echo esc_url( site_url( '/get-involved/' ) ); ?>" rel="program"><input type="submit" name="submit" value="Workplace"></a> 
                    </div>
                </div><!-- End of green-buttons  -->
            </form><!-- End of form  -->
        </div><!-- End of green-banner-flex  -->
    </div><!-- End of green-banner -->
               

