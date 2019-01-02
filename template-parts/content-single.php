<?php
/**
 * Single Post Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Orlando_Attractions
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			the_title( '<h1 class="entry-title">', '</h1>' );
		
		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				orlando_attractions_posted_on();
				// orlando_attractions_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
  </header><!-- .entry-header -->
  
  <div class="post-thumbnail">
  <?php the_post_thumbnail( 'medium_large' ); ?>
    </div>

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'orlando-attractions' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'orlando-attractions' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
</article> 
