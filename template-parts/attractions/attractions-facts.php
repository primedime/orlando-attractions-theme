<?php
// Advanced Custom Fields
$things_to_do     = get_field('things_to_do');
$fact_1           = get_field('did_you_know_fact_1');
$fact_2           = get_field('did_you_know_fact_2');
$fact_3           = get_field('did_you_know_fact_3');

?>

<div class="destination-facts">
  <section class="things-to-do">
    <h2 class="title">Things to do at <?php the_title(); ?></h2>
    <p itemprop="description"><?php echo $things_to_do; ?></p>
  </section>
  <section class="did-you-know">

    <h5 class="title">Did You Know?</h5>
    <p class="sub-title">Interesting & useful facts</p>

    <div class="fact-wrapper">
      <div class="fact-number">
        <p>1.</p>
      </div>
      <div class="fact-text">
        <p><?php echo $fact_1; ?></p>
      </div>
    </div> <!-- fact-wrapper END -->

    <div class="fact-wrapper">
      <div class="fact-number">
        <p>2.</p>
      </div>
      <div class="fact-text">
        <p><?php echo $fact_2; ?></p>
      </div>
    </div> <!-- fact-wrapper END -->

    <div class="fact-wrapper">
      <div class="fact-number">
        <p>3.</p>
      </div>
      <div class="fact-text">
        <p><?php echo $fact_3; ?></p>
      </div>
    </div> <!-- fact-wrapper END -->

  </section> <!-- did-you-know END -->
</div> <!-- destination-facts END -->