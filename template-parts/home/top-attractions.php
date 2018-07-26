<?php
// Advanced Custom Fields
$top_attractions_title       = get_field('top_attractions_title');
$top_attractions_description = get_field('top_attractions_description');
$attraction_image = get_field('attraction_image');
?>

<div class="content-body">
    <section class="top-attractions">  
      <div class="top-attractions-text">
        <h2 class="top-title"><?php echo $top_attractions_title; ?></h2>
        <p class="top-description"><?php echo $top_attractions_description; ?></p>
      </div>  
      <div class="attractions-carousel owl-carousel">
        <?php $loop = new WP_Query( array( 'post_type' => 'featured_attraction', 'orderby' => 'post_id', 'order' => 'ASC', 'posts_per_page' => '20') ); ?>		
        <?php while( $loop->have_posts() ) : $loop->the_post(); 
          $attraction_image = get_field('attraction_image');
        ?>		
        <div>
          <a href="<?php the_field('attraction_url'); ?>">				
            <img src="<?php echo $attraction_image['url']; ?>" alt="<?php echo $attraction_image['alt']; ?>">
            <div class="overlay-text">
              <p class="overlay-title"><?php the_title(); ?></p>
            </div>
          </a>
        </div>
        <? endwhile; ?>
      </div> <!-- end carousel -->
      
    <div class="fun-things">      
      <div class="whats-new">
        <div class="video-box">
          <div class="whats-new-video">
            <iframe width="456" height="267" src="https://www.youtube.com/embed/aWn59LH7B78?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
          <div class="whats-new-text">
            <h3 class="whats-new-title">What's New in Orlando?</h3>
            <p class="whats-new-description">Watch our video to find out</p>
          </div>
          <hr class="hr-75">
          <div class="coupons-block">
            <h3 class="coupons-title">Best Nearby Destinations</h3>
            <a href="#" class="button button-yellow" role="button">Explore ></a>
          </div>
        </div>
      </div>
      
      <div class="fun-lists">
        <h2 class="fun-title">Fun Things to do in Orlando Besides the Theme Parks</h2>
        <hr class="hr-grey-60">        
          <div class="best-lists">
            <div class="best-action">
              <h3 class="action-title">Best Action Attractions</h3>
              <?php
                wp_nav_menu( array(
                  'menu'             => 'best-action',
                  'theme_location'   => 'best-action',
                  'container'        => 'div',
                  'container_class'  => 'best-action',
                  'menu_class'       => 'action-list'
                ));
              ?>
            </div>
            <div class="best-distraction">
              <h3 class="distraction-title">Best Distraction Attractions</h3>
              <?php
                wp_nav_menu( array(
                  'menu'             => 'best-distraction',
                  'theme_location'   => 'best-distraction',
                  'container'        => 'div',
                  'container_class'  => 'best-distraction',
                  'menu_class'       => 'distraction-list'
                ));
              ?>
            </div>
          </div> <!-- END best lists -->    
        </div><!-- END fun lists -->    
      </div> <!-- END fun things -->
    </section>
  </div> <!-- .content-body -->