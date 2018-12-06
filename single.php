<?php
  get_header();
?>
      <div class="container main">

        <?php
          if(have_posts()):
          while(have_posts()): the_post();
        ?>

        <?php
          if (get_post_type() == 'animal'):
            $id = get_the_id();
            $blurb = get_post_meta($id, get_the_content(), true);
            $bonded = get_post_meta($id, 'animalPairedWith', true);
        ?>

          <div class="row">
            <?php if( has_post_thumbnail()): ?>
              <div class="d-none d-sm-block col-6 ">
                <?php the_post_thumbnail('medium_large', ['class'=>'card-img-top img-fluid', 'alt'=> 'Image of animal']) ?>
              </div>
            <?php endif; ?>
            <div class="col-sm-6 home-text">
              <h2><?= the_title(); ?></h2>
              <?php if ($bonded): ?>
                <p>Bonded with <span class="font-md"><?= $bonded ?></span></p>
              <?php endif; ?>
              <p>
                <span class="font-md">Breed: </span><?= get_post_meta($id, 'animalBreed', true) ?><br>
                <span class="font-md">Age: </span>Around <?= get_post_meta($id, 'animalAge', true) ?> years old<br>
                <span class="font-md">Care Received: </span><?= get_post_meta($id, 'animialCare', true) ?><br>
              </p>
              <?= the_content(); ?>
              <?php if (get_theme_mod('adoption_content_policy_setting')):?>
                <div class="col w-100 text-center">
                  <button class="btn red-btn float-right" data-toggle="modal" data-target="#policyModal" ><?= get_theme_mod('adoption_content_title_setting'); ?></button>
                </div>

                <div class="modal" id="policyModal" tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title"><?= get_theme_mod('adoption_content_title_setting'); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p><?= get_theme_mod('adoption_content_policy_setting') ?></p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn red-btn" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

              <?php endif; ?>
            </div>
          </div>

        <?php else: ?>
          <div class="row">
            <?php if( has_post_thumbnail()): ?>
              <div class="d-none d-sm-block col-6 ">
                <?php the_post_thumbnail('medium_large', ['class'=>'card-img-top img-fluid', 'alt'=> 'Image of animal']) ?>
              </div>
            <?php endif; ?>
            <div class="col-sm-6 home-text">
              <h2><?= the_title(); ?></h2>
              <p><?= the_content(); ?></p>
            </div>
          </div>

        <?php endif; ?>

        <?php
          endwhile;
          endif;
        ?>

      </div>
    <?php get_footer(); ?>
