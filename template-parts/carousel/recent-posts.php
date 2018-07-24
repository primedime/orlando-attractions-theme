<div class="container">
  <div class="slider-wrapper owl-carousel">
    <?php
      $recent_posts = wp_get_recent_posts(array(
        'numberposts' => 10, // Number of recent posts thumbnails to display
        'post_status' => 'publish' // Show only the published posts
      ));
      foreach($recent_posts as $post) : ?>
        <article class="item" style="width:600px">
          <a class="slider-link" href="<?php echo get_permalink($post['ID']) ?>">
            <div class="img-mask"></div>
              <?php echo get_the_post_thumbnail($post['ID'], 'large', array( 'class' => 'slider-img' )); ?>
              <div class="slider-text-block">
                <h3 class="slider-title"><?php echo $post['post_title'] ?></h3>
                <p class="slider-description"><?php echo wp_trim_words($post['post_content'], 12); ?></p>
              </div>
          </a>
        </article>
    <?php endforeach; wp_reset_query(); ?>       
  </div><!-- .slider-wrapper -->
</div><!-- .container -->