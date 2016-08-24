<?php
/**
 * The template for displaying News posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Nobelium
 */

$post = $wp_query->post;

if (in_category('news')) {
	include(TEMPLATEPATH.'/single-news.php');
}

?>
