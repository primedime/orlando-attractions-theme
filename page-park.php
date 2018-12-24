<?php
/**
 * The template for displaying Park featured pages
 * 
 * 
 * Template Name: Parks
 * @package Orlando_Attractions
 */

get_header();
?>

	
<div id="primary" class="content-area">
	<main id="main" class="park-main">
    <div class="content-body">
      <?php get_template_part( 'template-parts/parks/parks','hero' ); ?>
      <?php get_template_part( 'template-parts/parks/parks','gallery' ); ?>

      <div class="wysiwyg-editor">
        <?php the_field('partner_content'); ?>
        <?php
          the_content();

          wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'orlando-attractions' ),
            'after'  => '</div>',
          ) );
        ?>
      </div>
    </div><!-- .content-body -->
    <aside id="secondary" class="park-aside widget-area">
      <?php
      get_sidebar('parks'); ?>
    </aside>
	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();