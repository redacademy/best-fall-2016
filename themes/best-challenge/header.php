<?php
/**
 * The header for our theme.
 *
 * @package Best_Challenge_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<!--<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"
                rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1"
                crossorigin="anonymous">
				 <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Montserrat">-->
		<script src="https://use.fontawesome.com/d46b9d73e5.js"></script>

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>
			<header id="masthead" class="site-header stickyBar" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</div><!-- .site-branding -->
			
		<div class="best-header container">
			<div class="logo-date">				
				<div class="logo-header">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src=" <?php echo get_template_directory_uri() ?>/assets/images/logotitlebc-mobile.png" alt="mobile-logo" class= "mobile mobile-logo">
						<img src=" <?php echo get_template_directory_uri() ?>/assets/images/bccommuterchallenge.png" alt="desktop-logo" class= "desktop">
					</a>
				</div>
			<div class="event-date">
				<h2><span>June<span> 4 to 10, 2017 </h2>
			</div>
			<div class="menu-icon lines"><a class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?><i class="fa fa-bars" aria-hidden="true"></i></a></div>
		</div>

		<div class="header-nav">
				<nav id="site-navigation" class="main-navigation hidden" role="navigation">
				
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</div>
		</div>
		</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">
