<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WestComfort
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="serch-bar" class="search-widget" role="complementary">
	<?php dynamic_sidebar( 'sidebar-search' ); ?>
</aside><!-- #secondary -->
