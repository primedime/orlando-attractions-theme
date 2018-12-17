<div class="article-container">
  <div class="left-side">
    <?php
        $recent_posts = wp_get_recent_posts(array(
          'numberposts' => 1, // Number of recent posts thumbnails to display
          'offset' => 0,
          'post_status' => 'publish' // Show only the published posts
        ));
      foreach($recent_posts as $post) : ?>
    <a href="<?php echo get_permalink($post['ID']) ?>">
      <div class="article-overlay">
        <div class="featured-article-details">
          <div class="category">
          <i class="fas fa-rss"></i><p class="category-text">News</p>
          </div>
          <h2 class="article-title"><?php echo $post['post_title'] ?></h2>
          <div class="read-more">
            <p class="link-text">Read More</p><i class="fas fa-long-arrow-alt-right"></i>
          </div>
        </div>
      </div>
      <?php echo get_the_post_thumbnail($post['ID'], 'full', array( 'class' => 'featured-article-image' )); ?>
    </a>
    <?php endforeach; wp_reset_query(); ?>
  </div>
  
  <div class="right-side">
    <?php
        $next_recent_posts = wp_get_recent_posts(array(
          'numberposts' => 3, // Number of recent posts thumbnails to display
          'offset' => 5,
          'post_status' => 'publish' // Show only the published posts
        ));
      foreach($next_recent_posts as $post) : ?>
    <div class="article-thumb">
      <a href="<?php echo get_permalink($post['ID']) ?>">
        <div class="featured-image">
        <?php echo get_the_post_thumbnail($post['ID'], 'medium', array( 'class' => 'thumb-article-image' )); ?>
        </div>
        <div class="article-thumb-details">
          <div class="category">
            <i class="fas fa-rss"></i><p class="category-text">News</p>
          </div>
          <div class="title">
            <h2><?php echo $post['post_title'] ?></h2>
          </div>
          <div class="read-more">
            <p class="link-text">Read More</p><i class="fas fa-long-arrow-alt-right"></i>
          </div>
        </div>
      </a>
    </div>
    <?php endforeach; wp_reset_query(); ?>
  </div>

</div>