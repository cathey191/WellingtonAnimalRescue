<?php
  get_header();

  $id = get_the_id();
  $blurb = get_post_meta($id, 'allBlurb', true);
?>
      <div class="container">

        <?php if (get_post_type() == 'animal'): ?>

          <div class="row">
            <?php if( has_post_thumbnail()): ?>
              <div class="d-none d-sm-block col-6 ">
                <?php the_post_thumbnail('thumbnail', ['class'=>'card-img-top img-fluid', 'alt'=> 'Image of animal']) ?>
              </div>
            <?php endif; ?>
            <div class="col-sm-6 home-text">
              <h2><?= the_title(); ?></h2>
              <?php if (get_post_meta($id, 'animalPaired', true) == 'Yes'): ?>
                <p>Bonded with <span class="font-md"><?= get_post_meta($id, 'animalPairedWith', true) ?></span></p>
              <?php endif; ?>
              <p>
                <span class="font-md">Breed: </span><?= get_post_meta($id, 'animalBreed', true) ?><br>
                <span class="font-md">Age: </span>Around <?= get_post_meta($id, 'animalAge', true) ?> years old<br>
                <span class="font-md">Care Received: </span><?= get_post_meta($id, 'animialCare', true) ?><br>
              </p>
              <p><?= $blurb ?></p>
            </div>
          </div>

        <?php else: ?>

          <div class="row">
            <?php if( has_post_thumbnail()): ?>
              <div class="d-none d-sm-block col-6 ">
                <?php the_post_thumbnail('thumbnail', ['class'=>'card-img-top img-fluid', 'alt'=> 'Image of animal']) ?>
              </div>
            <?php endif; ?>
            <div class="col-sm-6 home-text">
              <h2><?= the_title(); ?></h2>
              <p><?= the_content(); ?></p>
            </div>
          </div>
        <?php endif; ?>


      </div>
    <?php wp_footer(); ?>
  </body>
</html>
