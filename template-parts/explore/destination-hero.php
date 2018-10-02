<?php
// Advanced Custom Fields
$youtube_video_url             = get_field('youtube_video_url');
$destination_address           = get_field('destination_address');
$destination_address_url       = get_field('destination_address_url');
$destination_phone             = get_field('destination_phone');
$destination_phone_url         = get_field('destination_phone_url');
$destination_email             = get_field('destination_email');
$facebook                      = get_field('facebook');
$twitter                       = get_field('twitter');
$google_plus                   = get_field('google_plus');
$youtube                       = get_field('youtube');
$instagram                     = get_field('instagram');

?>

<div class="destination-hero">
  <div class="destination-video">
    <iframe width="640" height="385" src="<?php echo $youtube_video_url; ?>" frameborder="0" allow="autoplay; encrypted-media"
      allowfullscreen></iframe>
  </div> <!-- destination-video END -->

  <div class="destination-details">
    <div class="destination">
      <h1 class="destination-title"><?php the_title(); ?></h1>
      <ul>
        <li>Visitor Center: <a href="<?php echo $destination_address_url; ?>" class="address" target="_blank"><?php echo $destination_address; ?></a></li>
        <li>Phone: <a href="tel:<?php echo $destination_phone_url; ?>" class="phone"><?php echo $destination_phone; ?></a></li>
        <li>Email: <a href="mailto:<?php echo $destination_email; ?>" class="email"><?php echo $destination_email; ?></a></li>
      </ul>
    </div> <!-- destination-details END -->

    <div class="destination-social">
      <ul>
        <?php if( !empty($facebook) ) : ?>
        <li><a itemprop="sameAs" href="<?php echo $facebook; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
        <?php endif; ?>
        <?php if( !empty($twitter) ) : ?>
        <li><a itemprop="sameAs" href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
        <?php endif; ?>
        <?php if( !empty($google_plus) ) : ?>
        <li><a itemprop="sameAs" href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
        <?php endif; ?>
        <?php if( !empty($youtube) ) : ?>
        <li><a itemprop="sameAs" href="#" target="_blank"><i class="fab fa-youtube"></i></span></a></li>
        <?php endif; ?>
        <?php if( !empty($instagram) ) : ?>
        <li><a itemprop="sameAs" href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
        <?php endif; ?>
      </ul>
    </div> <!-- destination-social END -->

    <div class="destination-highlights">
      <h3>Destination Highlights</h3>  
    <?php 
        $hashtags = get_field('hashtags');

      if( $hashtags ): ?>    
        <div class="tags"> 
        <?php foreach( $hashtags as $hashtag ): ?> 
          <div class="tag">            
            <i class="fas fa-hashtag"></i><?php echo $hashtag; ?>  
          </div> 
          <?php endforeach; ?> 
        </div>
        
        <?php endif; ?>
    </div>

  </div> <!-- destination-details END -->
</div> <!-- destination-hero END -->