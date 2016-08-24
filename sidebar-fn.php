<?php
/**
 * The sidebar containing the FN widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nobelium
 */

if ( ! is_active_sidebar( 'sidebar-fn' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-fn' ); ?>
</aside><!-- #secondary -->
