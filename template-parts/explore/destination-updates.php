<?php
// Advanced Custom Fields
$facebook_feed = get_field('facebook_feed');
?>

<div class="destination-updates">
      <div class="recent-news">
        <h2 class="title">Recent <?php the_title(); ?> News</h2>
        <article class="recent-post">
          <div class="featured-image">
            <img class="attractions-image" src="http://via.placeholder.com/145x145">
          </div>
          <div class="post-details">
            <h3 class="post-title">Top 10 Things to do in Winter Park</h3>
            <p class="post-excerpt">There is so much to do in Winter Park - it’s a destination like no other in Central
              Florida. The European architecture and quaint cafes are a world away from Disney and the attractions.</p>
            <a href="#" class="post-link">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
          </div>
        </article>

        <article class="recent-post">
          <div class="featured-image">
            <img class="attractions-image" src="http://via.placeholder.com/145x145">
          </div>
          <div class="post-details">
            <h3 class="post-title">Hot Deals Winter Park</h3>
            <p class="post-excerpt">Feeling the heat in Orlando? Take a break and cool off in nearby Winter Park. This
              pristine enclave is famous for it's European style cafe culture, chic boutiques and a terrific...</p>
            <a href="#" class="post-link">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
          </div>
        </article>

        <article class="recent-post">
          <div class="featured-image">
            <img class="attractions-image" src="http://via.placeholder.com/145x145">
          </div>
          <div class="post-details">
            <h3 class="post-title">The Art of Winter Park</h3>
            <p class="post-excerpt">This week sees the return of the ever-popular Winter Park Sidewalk Arts Festival -
              the 59th one to be exact, and it gets bigger and better every year!</p>
            <a href="#" class="post-link">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
          </div>
        </article>
      </div> <!-- recent-news END -->

      <div class="social-feed">
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F<?php echo $facebook_feed; ?>%2F&tabs=timeline%2Cevents%2Cmessages&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1645195352258588"
          width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"
          allow="encrypted-media"></iframe>
      </div>
    </div> <!-- destination-updates END -->
