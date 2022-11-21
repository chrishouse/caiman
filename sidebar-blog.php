<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package caiman-web-design
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside class="sidebar sidebar-blog">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>
