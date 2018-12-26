<?php 

$images = get_field('gallery');
$size = 'medium'; // (thumbnail, medium, large, full or custom size)

if( $images ): ?>

<section class="parks-gallery">
  <h2 class="title">Photos of <?php the_title(); ?></h2>
  <div class="parks-carousel owl-carousel owl-theme">
    <?php foreach( $images as $image ): ?>
      <div class="item"><img itemprop="image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></div>
    <?php endforeach; ?>
  </div>
</section> <!-- parks-gallery END -->
<?php endif; ?>