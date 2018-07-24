<?php
/**
 * The template for displaying the home page
 * 
 * 
 * Template Name: Home
 * @package Orlando_Attractions
 */

get_header();
?>

	
<div id="primary" class="content-area">
	<main id="main" class="site-main">
    <?php get_template_part( 'template-parts/carousel/recent','posts' ); ?>

    <?php get_template_part( 'template-parts/home/top','attractions' ); ?>

    <?php get_template_part( 'template-parts/home/app','section' ); ?>

    <?php get_template_part( 'template-parts/home/top','tickets' ); ?> 
	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
