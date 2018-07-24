<?php
/**
 * The template for displaying the home page
 * 
 * 
 * Template Name: Home
 * @package Orlando_Attractions
 */

 // Advanced Custom Fields
$top_attractions_title       = get_field('top_attractions_title');
$top_attractions_description = get_field('top_attractions_description');
$attraction_image = get_field('attraction_image');
get_header();
?>

	
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		
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
<div class="content-body">
			<section class="top-attractions">
  
  <div class="top-attractions-text">
    <h2 class="top-title"><?php echo $top_attractions_title; ?></h2>
    <p class="top-description"><?php echo $top_attractions_description; ?></p>
  </div>
  
  <div class="attractions-carousel owl-carousel">

		<?php $loop = new WP_Query( array( 'post_type' => 'featured_attraction', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>
		
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
          <h3 class="coupons-title">Want Coupons?</h3>
          <a href="#" class="button button-yellow" role="button">Start Saving</a>
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
        </div> <!-- end best lists -->
      
    </div><!-- end fun lists -->
    
  </div> <!-- end fun things -->
  
</section>
</div> <!-- .content-body -->

<div class="app-container">
  
  <div class="app-details-container">
    <div class="mock-up-container">
      <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/17163/iphone-mock-ups.png' alt=''>
  	</div>
   	<div class="app-text">
     	<h2 class="download-title">Download the Orlando Attractions App</h2>
       	<div class="app-features-list">
					<ul>
						<li>Latest Orlando News</li>
						<li>Live Theme Park Info</li>
						<li>Attraction Updates</li>
						<li>Discount Deals</li>
						<li>Day Trip Destinations</li>
						<li>Attraction Videos</li>
						<li>Shopping Venues</li>
						<li>Family Dining</li>
						<li>Rental Car Safety</li>
						<li>Google Directions</li>
						<li>Offline Access Anytime</li>
						<li>Easy to use Vacation Planner</li>
					</ul>
				 </div> <!-- app-features-list end -->
			<div class="download-links">
				<h3 class="download-links-title">Available Free</h3>
				<div class="download-buttons">
					<a href="#"><img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/17163/apple-download.png' alt='' height="45px"></a>
					<a href="#"><img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/17163/google-play-download.png' alt='' height="45px"></a>
				</div>
			</div> <!-- download-links end -->
   	</div>
 
  </div> <!-- app-details-container end -->
  
</div> <!-- app-container end -->

			<div class="content-body">
				<section class="top-attractions">
					<div class="top-attractions-text">
						<h2 class="top-title-pink">Top Orlando Park Ticket Deals</h2>
						<p class="top-description">Real deals, real tickets, real fast from a trusted authorized worldwide ticket seller.</p>
					</div>
				</section>
				<div class="top-tickets-container">
  <div class="tickets-container">
    <div class="tickets-carousel owl-carousel owl-theme">
      <div class="ticket-card">
        <div class="ticket-image">
          <img src="http://via.placeholder.com/210x116" alt="">
        </div>
        <div class="ticket-name">
          <h3>SeaWorld Multi-Park - Unlimited Visits + FREE Parking</h3>
        </div>
        <div class="ticket-prices">
          <div class="adult-price">
            <p class="price-text">Adult Price: $137.00</p>
            <div class="ribbon"></div>
          </div>
          <div class="child-price">
            <p class="price-text">Child Price: $137.00</p>
            <div class="ribbon"></div>
          </div>
          <div class="ticket-button">
            <p class="ticket-button-title">Buy Ticket</p>
          </div>
        </div> <!-- ticket-prices end -->
      </div> <!-- ticket-card end -->
      
      <div class="ticket-card">
        <div class="ticket-image">
          <img src="http://via.placeholder.com/210x116" alt="">
        </div>
        <div class="ticket-name">
          <h3>SeaWorld Multi-Park - Unlimited Visits + FREE Parking</h3>
        </div>
        <div class="ticket-prices">
          <div class="adult-price">
            <p class="price-text">Adult Price: $137.00</p>
            <div class="ribbon"></div>
          </div>
          <div class="child-price">
            <p class="price-text">Child Price: $137.00</p>
            <div class="ribbon"></div>
          </div>
          <div class="ticket-button">
            <p class="ticket-button-title">Buy Ticket</p>
          </div>
        </div> <!-- ticket-prices end -->
      </div> <!-- ticket-card end -->
      
      <div class="ticket-card">
        <div class="ticket-image">
          <img src="http://via.placeholder.com/210x116" alt="">
        </div>
        <div class="ticket-name">
          <h3>SeaWorld Multi-Park - Unlimited Visits + FREE Parking</h3>
        </div>
        <div class="ticket-prices">
          <div class="adult-price">
            <p class="price-text">Adult Price: $137.00</p>
            <div class="ribbon"></div>
          </div>
          <div class="child-price">
            <p class="price-text">Child Price: $137.00</p>
            <div class="ribbon"></div>
          </div>
          <div class="ticket-button">
            <p class="ticket-button-title">Buy Ticket</p>
          </div>
        </div> <!-- ticket-prices end -->
      </div> <!-- ticket-card end -->
      
      <div class="ticket-card">
        <div class="ticket-image">
          <img src="http://via.placeholder.com/210x116" alt="">
        </div>
        <div class="ticket-name">
          <h3>SeaWorld Multi-Park - Unlimited Visits + FREE Parking</h3>
        </div>
        <div class="ticket-prices">
          <div class="adult-price">
            <p class="price-text">Adult Price: $137.00</p>
            <div class="ribbon"></div>
          </div>
          <div class="child-price">
            <p class="price-text">Child Price: $137.00</p>
            <div class="ribbon"></div>
          </div>
          <div class="ticket-button">
            <p class="ticket-button-title">Buy Ticket</p>
          </div>
        </div> <!-- ticket-prices end -->
      </div> <!-- ticket-card end -->
    </div> <!-- ticket-carousel end -->
    <div class="buy-tickets-button">
      <a href="#">More Tickets ></a>
    </div>
  </div> <!-- tickets-container end -->
  <div class="ticket-reviews">
		<div class="reviews-title">
		</div>
    <!-- TrustBox widget - Grid -->
<div class="trustpilot-widget" data-locale="en-GB" data-template-id="539adbd6dec7e10e686debee" data-businessunit-id="4f5267c40000640005135718" data-style-height="400px" data-style-width="100%" data-theme="light" data-stars="1,2,3,4,5" data-schema-type="Organization">
<a href="https://uk.trustpilot.com/review/www.orlandoattractions.com" target="_blank">Trustpilot</a>
</div>
<!-- End TrustBox widget -->
  </div>
</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
