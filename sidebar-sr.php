<?php
/**
 * The sidebar containing the SR widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nobelium
 */

if ( ! is_active_sidebar( 'sidebar-sr' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-sr' ); ?>
</aside><!-- #secondary -->
