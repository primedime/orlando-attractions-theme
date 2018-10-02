<?php
/**
 * The template for displaying Explore featured pages
 * 
 * 
 * Template Name: Explore
 * @package Orlando_Attractions
 */

get_header();
?>

	
<div id="primary" class="content-area">
	<main id="main" class="site-main">
        <div class="content-body">
            <?php get_template_part( 'template-parts/explore/destination','hero' ); ?>

            <?php get_template_part( 'template-parts/explore/destination','updates' ); ?>

            <?php get_template_part( 'template-parts/explore/destination','gallery' ); ?>

            <?php get_template_part( 'template-parts/explore/destination','facts' ); ?>
            <div class="wysiwyg-editor">
            <?php /* Start the Loop */ ?>
            <?php while(have_posts()) : the_post(); ?>
                <?php the_content();?>
            <?php endwhile; ?>
            </div>
        </div><!-- .content-body -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
