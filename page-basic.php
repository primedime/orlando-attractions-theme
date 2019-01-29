<?php
/**
 * The template for displaying Park featured pages
 * 
 * 
 * Template Name: Basic Template
 * @package Orlando_Attractions
 */

get_header();
?>

	
<div id="primary" class="content-area">
	<main id="main" class="basic-main">
    <div class="content-body">
    <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>
    </div><!-- .content-body -->
    <aside id="secondary" class="park-aside widget-area">
      <?php
      get_sidebar('parks'); ?>
    </aside>
	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();