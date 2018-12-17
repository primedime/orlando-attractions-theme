<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Orlando_Attractions
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}

?>


	<?php dynamic_sidebar( 'sidebar-2' ); ?>
<!-- #secondary -->