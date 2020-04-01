<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package canyon
 */

if ( ! is_active_sidebar('sidebar-product' ) ) {
	return;
}
?>

<aside class="product-siderbar-top">
	<?php dynamic_sidebar( 'sidebar-product' ); ?>
</aside><!-- #secondary -->
