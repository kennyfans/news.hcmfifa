<?php
	/**
	* The header for our theme.
	*
	* Displays all of the <head> section and everything up till <div id="content">
	*
	* @package redwaves-lite
	*/
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php redwaves_favicon(); ?>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'redwaves-lite' ); ?></a>
			<header id="masthead" class="site-header" role="banner">
				<div id="mobile-menu-wrapper">
					<a href="javascript:void(0); " id="sidemenu_hide" class="sideviewtoggle">Menu</a>
					<?php redwaves_small_search_bar() ?>
					<nav id="navigation" class="clearfix">
						<div id="mobile-menu" class="mobile-menu">
							<?php wp_nav_menu( array( 'theme_location' => 'mobile-menu', 'menu_class' => 'nav-menu' ) ); ?>
						</div>
					</nav>							
				</div>
				<div class="container header-container">
					<div class="header-inner">
						<div class="logo-wrap">
							<?php redwaves_logo(); ?>
						</div><!-- .logo-wrap -->
						<div class="header_area-wrap" style="font-family: Times New Roman;text-transform: uppercase;margin-left: 12px;">
							<div>
								<a href="http://vietnamesports.vn/" target="_blank">
									<img src="http://news.hcmfo3club.net/wp-content/uploads/2015/06/VN-Esport-Ad.jpg" alt="Đối tác - Cybercore">
								</a>
								<a href="http://www.cybercore.vn/" target="_blank">
									<img src="http://news.hcmfo3club.net/wp-content/uploads/2015/06/Cyber-Ad.jpg" alt="Đối tác - Vietnam Esports evelopment" style="margin-left: 12px;">
								</a>
								<a href="http://apshop.vn/" target="_blank">
									<img src="http://news.hcmfo3club.net/wp-content/uploads/2015/06/APshop-Ad.jpg" alt="Đối tác - Apshop" style="margin-left: 12px;">
								</a>
							</div>
						</div>
						<!-- .header_area-wrap -->
					</div><!-- .header-inner -->
				</div><!-- .container -->
				<div id="sideviewtoggle" class="secondary-navigation">
					<div class="container clearfix"> 
						<a href="javascript:void(0); " id="sidemenu_show" class="sideviewtoggle">Menu</a>  
					</div><!--.container-->
				</div>	
				<div id="sticky" class="secondary-navigation">
					<div class="container clearfix">
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
						</nav><!-- #site-navigation -->
					</div><!--.container -->
				</div>	
			</header><!-- #masthead -->
			<div id="content" class="main-container">
			<div id="page">			