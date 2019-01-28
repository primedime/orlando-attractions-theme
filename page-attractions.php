<?php
/**
 * The template for displaying Explore featured pages
 * 
 * 
 * Template Name: Attractions
 * @package Orlando_Attractions
 */

get_header();
?>

	
<div id="primary" class="content-area">
	<main id="main" class="site-main">
        <div itemscope itemtype="http://schema.org/TouristAttraction" class="content-body">
            <?php get_template_part( 'template-parts/attractions/attractions','hero' ); ?>

            <?php get_template_part( 'template-parts/explore/destination','updates' ); ?>

            <?php get_template_part( 'template-parts/explore/destination','gallery' ); ?>

            <?php get_template_part( 'template-parts/attractions/attractions','facts' ); ?>
            <div class="wysiwyg-editor">
            <?php the_field('partner_content'); ?>
            </div>
        </div><!-- .content-body -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();