<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Orlando_Attractions
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="post-main">
      <div class="news-body">
        <div class="container">
          <div class="news-grid">
            <?php
              $recent_posts = wp_get_recent_posts(array(
                'numberposts' => 15, // Number of recent posts thumbnails to display
                'offset' => 0,
                'post_status' => 'publish' // Show only the published posts
              ));
            foreach($recent_posts as $post) : ?>
            <article itemscope itemtype="http://schema.org/Article" class="news-cell">
              <a href="<?php echo get_permalink($post['ID']) ?>">
              <?php echo get_the_post_thumbnail($post['ID'], 'full', array( 'class' => 'responsive-image', 'itemprop' => 'image' )); ?>
                <div class="news-title">
                  <h2 itemprop="name"><?php echo $post['post_title'] ?></h2>
                </div>
              </a>
            </article>
            <?php endforeach; wp_reset_query(); ?>         
          </div> <!-- .news-grid end -->
        </div> <!-- .container end -->
        <?php
          wp_link_pages( array(
			    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'orlando-attractions' ),
			    'after'  => '</div>',
		      ) );
		    ?>
      </div> <!-- .news-body end -->

      <aside id="secondary" class="post-aside widget-area">
        <?php
        get_sidebar('parks'); ?>
      </aside>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
