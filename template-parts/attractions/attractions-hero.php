<?php
// Advanced Custom Fields
$youtube_video_url             = get_field('youtube_video_url');
$attraction_website           = get_field('attraction_website');
$facebook                      = get_field('facebook');
$twitter                       = get_field('twitter');
$google_plus                   = get_field('google_plus');
$youtube                       = get_field('youtube');
$instagram                     = get_field('instagram');

$attractions_address_rows      = get_field('attraction_locations'); // get all the rows
$attractions_address_first_row = $attractions_address_rows[0]; // get the first row
$attraction_address            = $attractions_address_first_row['attraction_address']; // get the sub field value
$attraction_address_url        = $attractions_address_first_row['attraction_address_url']; // get the sub field value
$attraction_phone              = $attractions_address_first_row['attraction_phone']; // get the sub field value
$attraction_phone_url          = $attractions_address_first_row['attraction_phone_url']; // get the sub field value

?>

<div class="destination-hero">
  <div class="destination-video">
    <embed width="640" height="396" src="<?php echo $youtube_video_url; ?>" frameborder="0" allow="autoplay; encrypted-media"
      allowfullscreen>
  </div> <!-- destination-video END -->

  <div class="destination-details">
    <section class="destination">
      <h1 class="destination-title"><?php the_title(); ?></h1>
      <ul>
        <li itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">Location: <a href="<?php echo $attraction_address_url ; ?>" class="address" target="_blank"><span itemprop="streetAddress"><?php echo $attraction_address; ?></span></a></li>
        <li>Phone: <a href="tel:<?php echo $attraction_phone_url; ?>" class="phone"><span itemprop="telephone"><?php echo $attraction_phone; ?></span></a></li>
        <li>Website: <a href="<?php echo $attraction_website; ?>" itemprop="url" class="email" target="_blank"><?php echo $attraction_website; ?></a></li>
      </ul>
    </section> <!-- destination-details END -->

    <section class="destination-social">
      <ul>
        <?php if( !empty($facebook) ) : ?>
        <li><a itemprop="sameAs" href="<?php echo $facebook; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
        <?php endif; ?>
        <?php if( !empty($twitter) ) : ?>
        <li><a itemprop="sameAs" href="<?php echo $twitter; ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
        <?php endif; ?>
        <?php if( !empty($google_plus) ) : ?>
        <li><a itemprop="sameAs" href="<?php echo $google_plus; ?>" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
        <?php endif; ?>
        <?php if( !empty($youtube) ) : ?>
        <li><a itemprop="sameAs" href="<?php echo $youtube; ?>" target="_blank"><i class="fab fa-youtube"></i></span></a></li>
        <?php endif; ?>
        <?php if( !empty($instagram) ) : ?>
        <li><a itemprop="sameAs" href="<?php echo $instagram; ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
        <?php endif; ?>
      </ul>
    </section> <!-- destination-social END -->
    <section class="attraction-tickets">
      <?php if( have_rows('tickets') ): ?>
        <h3><?php the_title(); ?> Tickets</h3>
      <?php endif; ?>
      <div class="partner-ticket-carousel owl-carousel owl-theme">
        <?php if( have_rows('tickets') ): ?>
        
          <?php while( have_rows('tickets') ): the_row();

              $ticket_title   = get_sub_field('ticket_title');
              $ticket_price   = get_sub_field('ticket_price');
              $adult_price    = get_sub_field('adult_price');
              $child_price    = get_sub_field('child_price');
              $ticket_url     = get_sub_field('ticket_url');

            ?>

            <div itemscope itemtype="http://schema.org/Product" class="ticket-wrapper">
              <div class="ticket-title">
                <h3 itemprop="name"><?php echo $ticket_title; ?></h3>
              </div>
              <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="price-section">
              <meta itemprop="availability" content="http://schema.org/InStock">
                <div class="prices">
                  <?php if( !empty($ticket_price) ): ?>
                    <p class="adult">Ticket: <span itemprop="price" content="<?php echo $ticket_price; ?>"><span itemprop="priceCurrency" content="USD">$</span><?php echo $ticket_price; ?></span></p>
                  <?php elseif( !empty($adult_price || $child_price) ): ?>
                    <p class="adult">Adult: <span itemprop="price" content="<?php echo $ticket_price; ?>"><span itemprop="priceCurrency" content="USD">$</span><?php echo $adult_price; ?></span></p>
                    <p class="child">Child: <span itemprop="price" content="<?php echo $ticket_price; ?>"><span itemprop="priceCurrency" content="USD">$</span><?php echo $child_price; ?></span></p>
                  <?php endif; ?>  
                </div>
                <div class="buy-now">
                  <a href="<?php echo $ticket_url; ?>" itemprop="url">Buy Now</a>
                </div>
              </div>
            </div>
            
          <?php endwhile; ?>     
        <?php endif; ?>
      </div>
    </section>

  </div> <!-- destination-details END -->
</div> <!-- destination-hero END -->