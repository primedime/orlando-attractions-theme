<?php
// Advanced Custom Fields
$youtube_video_url             = get_field('youtube_video_url');
$park_intro_text               = get_field('park_intro_text');
$park_address                  = get_field('park_address');
$park_address_url              = get_field('park_address_url');
?>

<div class="park-hero">
  <div class="park-video">
    <iframe width="640" height="396" src="<?php echo $youtube_video_url; ?>" frameborder="0" allow="autoplay; encrypted-media"
      allowfullscreen></iframe>
  </div> <!-- destination-video END -->

  <div class="park-details">
    <div class="park">
      <h1 itemprop="name" class="park-title"><?php the_title(); ?></h1>
      <p itemprop="description" class="park-intro"><?php echo $park_intro_text; ?></p>
    </div> <!-- destination-details END -->

    <div class="attraction-tickets">
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
                    <p class="adult">Adult: <span itemprop="price" content="<?php echo $adult_price; ?>"><span itemprop="priceCurrency" content="USD">$</span><?php echo $adult_price; ?></span></p>
                    <p class="child">Child: <span itemprop="price" content="<?php echo $child_price; ?>"><span itemprop="priceCurrency" content="USD">$</span><?php echo $child_price; ?></span></p>
                  <?php endif; ?>  
                </div>
                <div class="buy-now">
                  <a itemprop="url" href="<?php echo $ticket_url; ?>">Learn More</a>
                </div>
              </div>
            </div>
            
          <?php endwhile; ?>     
        <?php endif; ?>
      </div>
    </div>

  </div> <!-- destination-details END -->
</div> <!-- destination-hero END -->