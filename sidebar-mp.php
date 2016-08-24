<?php
/**
 * The sidebar containing the MP widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nobelium
 */

if ( ! is_active_sidebar( 'sidebar-mp' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-mp' ); ?>
</aside><!-- #secondary -->
