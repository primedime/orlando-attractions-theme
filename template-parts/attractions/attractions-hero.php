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
    <iframe width="640" height="396" src="<?php echo $youtube_video_url; ?>" frameborder="0" allow="autoplay; encrypted-media"
      allowfullscreen></iframe>
  </div> <!-- destination-video END -->

  <div class="destination-details">
    <div class="destination">
      <h1 class="destination-title"><?php the_title(); ?></h1>
      <ul>
        <li>Location: <a href="<?php echo $attraction_address_url ; ?>" class="address" target="_blank"><?php echo $attraction_address; ?></a></li>
        <li>Phone: <a href="tel:<?php echo $attraction_phone_url; ?>" class="phone"><?php echo $attraction_phone; ?></a></li>
        <li>Website: <a href="<?php echo $attraction_website; ?>" class="email" target="_blank"><?php echo $attraction_website; ?></a></li>
      </ul>
    </div> <!-- destination-details END -->

    <div class="destination-social">
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
    </div> <!-- destination-social END -->
    <div class="attraction-tickets">
    <h3><?php the_title(); ?> Tickets</h3>
      <div class="partner-ticket-carousel owl-carousel owl-theme">
        <?php if( have_rows('tickets') ): ?>

          <?php while( have_rows('tickets') ): the_row();

              $ticket_title   = get_sub_field('ticket_title');
              $ticket_price   = get_sub_field('ticket_price');
              $adult_price    = get_sub_field('adult_price');
              $child_price    = get_sub_field('child_price');
              $ticket_url     = get_sub_field('ticket_url');

            ?>
            
            <div class="ticket-wrapper">
              <div class="ticket-title">
                <h3><?php echo $ticket_title; ?></h3>
              </div>
              <div class="price-section">
                <div class="prices">
                  <?php if( !empty($ticket_price) ): ?>
                    <p class="adult">Ticket: <?php echo $ticket_price; ?></p>
                  <?php elseif( !empty($adult_price || $child_price) ): ?>
                    <p class="adult">Adult: <?php echo $adult_price; ?></p>
                    <p class="child">Child: <?php echo $child_price; ?></p>
                  <?php endif; ?>  
                </div>
                <div class="buy-now">
                  <a href="#">Buy Now</a>
                </div>
              </div>
            </div>
            
          <?php endwhile; ?>     
        <?php endif; ?>
      </div>
    </div>

  </div> <!-- destination-details END -->
</div> <!-- destination-hero END -->