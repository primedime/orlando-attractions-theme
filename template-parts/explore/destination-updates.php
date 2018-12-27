<?php
// Advanced Custom Fields
$facebook_feed           = get_field('facebook_feed');
$destination_category    = get_field('category');
?>

<div class="destination-updates">
      <section itemscope itemtype="http://schema.org/Blog" class="recent-news">
        <h2 class="title">Recent <?php the_title(); ?> News</h2>
        <?php
        $recent_posts = wp_get_recent_posts(array(
          'category' => $destination_category,
          'numberposts' => 3, // Number of recent posts thumbnails to display
          'post_status' => 'publish' // Show only the published posts
        ));
        foreach($recent_posts as $post) : ?>
        <article itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting" class="recent-post">
          <div class="featured-image">
          <?php echo get_the_post_thumbnail($post['ID'], 'thumbnail', array( 'class' => 'attractions-image', 'itemprop' => 'image' )); ?>
          </div>
          <div class="post-details">
            <h3 itemprop="headline" class="post-title"><?php echo $post['post_title'] ?></h3>
            <p itemprop="description" class="post-excerpt"><?php echo wp_trim_words($post['post_content'], 27); ?></p>
            <a itemprop="url" href="<?php echo get_permalink($post['ID']) ?>" class="post-link">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
          </div>
        </article>
        <?php endforeach; wp_reset_query(); ?>        
      </section> <!-- recent-news END -->

      <div class="social-feed">
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F<?php echo $facebook_feed; ?>%2F&tabs=timeline%2Cevents%2Cmessages&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1645195352258588"
          width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"
          allow="encrypted-media"></iframe>
      </div>
    </div> <!-- destination-updates END -->
