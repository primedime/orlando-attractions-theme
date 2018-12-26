<?php 

$images = get_field('gallery');
$size = 'medium'; // (thumbnail, medium, large, full or custom size)

if( $images ): ?>

<div class="destination-gallery">
  <h2 class="title">Photos of <?php the_title(); ?></h2>
  <div class="destination-carousel owl-carousel owl-theme">
    <?php foreach( $images as $image ): ?>
      <div class="item"><img itemprop="image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></div>
    <?php endforeach; ?>
  </div>
</div> <!-- destination-gallery END -->
<?php endif; ?>