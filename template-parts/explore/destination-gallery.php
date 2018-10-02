<?php 

$images = get_field('gallery');
$size = 'medium'; // (thumbnail, medium, large, full or custom size)

if( $images ): ?>

<div class="destination-gallery">
  <h2 class="title">Photos of <?php the_title(); ?></h2>
  <div class="destination-carousel owl-carousel owl-theme">
    <?php foreach( $images as $image ): ?>
      <div class="item"><?php echo wp_get_attachment_image( $image['ID'], $size ); ?></div>
    <?php endforeach; ?>
  </div>
</div> <!-- destination-gallery END -->
<?php endif; ?>