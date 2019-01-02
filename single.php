<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Orlando_Attractions
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="post-main">
			<div class="post-body">
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'single' );

					// the_post_navigation();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</div>
			<aside id="secondary" class="post-aside widget-area">
				<?php 
				get_sidebar('parks'); ?>
			</aside>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
