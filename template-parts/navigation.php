<?php
/**
 * Template part for displaying Navigation.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Nobelium
 */

?>

<div id="header-wrapper">
	<header id="main-header" role="banner">

	  	<div class="row">
			<nav role="navigation" class="main-nav navbar navbar-default navbar-fixed-top">
			    <div class="container">
			        <div class="navbar-header">
			            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
			                <span class="sr-only">Toggle navigation</span>
			                <span class="icon-bar icon-bar-x"></span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar icon-bar-x"></span>
			            </button>
			            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand">
			            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svgs/nobelium_logo_slim.svg" alt="Nobelium Logo" class="hidden-sm hidden-md hidden-lg">
			            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svgs/nobelium_logo.svg" alt="Nobelium Logo" class="hidden-xs">
						</a>
			        </div>
			        <div id="navbarCollapse" class="collapse navbar-collapse">
			        	<?php wp_nav_menu(array( 
				        	'theme_location' => 'primary', 
			        		'menu' => 'primary', 
				        	'depth' => 2,
				        	'menu_id' => 'primary-menu', 
				        	'menu_class' => 'nav navbar-nav navbar-right',
	                        'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
				        	'walker' => new wp_bootstrap_navwalker()
				        )); ?>
			        </div>
			    </div>
			</nav>
	  	</div>

	</header>
</div>