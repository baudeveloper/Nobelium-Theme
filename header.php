<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nobelium
 */

?>

<!DOCTYPE html>

	<html <?php language_attributes(); ?>>
		<head>
			<meta charset="<?php bloginfo( 'charset' ); ?>">
			<meta http-equiv="x-ua-compatible" content="ie=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
			<link rel="profile" href="http://gmpg.org/xfn/11">
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
			<!-- Favicons -->
			<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-57x57.png?v=kPRybMdXj8">
			<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-60x60.png?v=kPRybMdXj8">
			<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-72x72.png?v=kPRybMdXj8">
			<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-76x76.png?v=kPRybMdXj8">
			<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-114x114.png?v=kPRybMdXj8">
			<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-120x120.png?v=kPRybMdXj8">
			<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-144x144.png?v=kPRybMdXj8">
			<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-152x152.png?v=kPRybMdXj8">
			<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-180x180.png?v=kPRybMdXj8">
			<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/favicon-32x32.png?v=kPRybMdXj8" sizes="32x32">
			<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/android-chrome-192x192.png?v=kPRybMdXj8" sizes="192x192">
			<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/favicon-96x96.png?v=kPRybMdXj8" sizes="96x96">
			<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/favicon-16x16.png?v=kPRybMdXj8" sizes="16x16">
			<link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/manifest.json?v=kPRybMdXj8">
			<link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/safari-pinned-tab.svg?v=kPRybMdXj8" color="#43BCCD">
			<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/favicon.ico?v=kPRybMdXj8">
			<meta name="apple-mobile-web-app-title" content="Site Title">
			<meta name="application-name" content="Site Title">
			<meta name="msapplication-TileColor" content="#43BCCD">
			<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/mstile-144x144.png?v=kPRybMdXj8">
			<meta name="theme-color" content="#ffffff">
			<?php wp_head(); ?>
		</head>

		<body <?php body_class(); ?>>
			<!-- Back to Top -->
			<a class="back-to-top smooth" href="#top"><i class="fa fa-chevron-up" aria-hidden="true"></i><span class="sr-only"><?php _e( 'Back to Top' ); ?></span></a>
			<div id="page" class="site">
				<section name="top" id="page-wrapper" class="clearfix">
				<?php get_template_part( 'template-parts/navigation', get_post_format() ); ?>
