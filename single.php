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
                <?php if ($linkBond = get_post_meta($id, 'weblink', true)): ?>
                  <a class="btn blue-btn" href="<?= $linkBond ?>">View <?= $bonded; ?></a>
                <?php endif; ?>
                <p>Bonded with <span class="font-md"><?= $bonded; ?></span></p>
              <?php endif; ?>
              <p>
                <span class="font-md">Breed: </span><?= get_post_meta($id, 'animalBreed', true) ?><br>
                <span class="font-md">Age: </span>Around <?= get_post_meta($id, 'animalAge', true) ?> years old<br>
                <span class="font-md">Care Received: </span><?= get_post_meta($id, 'animialCare', true) ?><br>
              </p>
              <?= the_content(); ?>
              <?php
                $adopTitle = get_theme_mod('adoption_content_title_setting');
                $polcCont = get_theme_mod('adoption_content_policy_setting');
                $enquirebtn = get_theme_mod('adoption_enquire_text_setting');
                $enquireLink = get_theme_mod('adoption_enquire_link_setting');

                if ($adopTitle && $polcCont || $enquirebtn && $enquireLink):
              ?>
                <div class="col w-100 text-center">
                  <?php if ($adopTitle && $polcCont): ?>
                    <button class="btn red-btn float-right margin-left" data-toggle="modal" data-target="#policyModal" ><?= $adopTitle; ?></button>
                  <?php endif; ?>
                  <?php if ($enquirebtn && $enquireLink ): ?>
                    <a class="btn blue-btn float-right " href="<?= $enquireLink ?>" ><?= $enquirebtn; ?></a>
                  <?php endif; ?>
                </div>

                <?php if ($adopTitle && $polcCont): ?>
                  <div class="modal" id="policyModal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title"><?= $adopTitle; ?></h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p><?= $polcCont; ?></p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn red-btn" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php
                    endif;
                  endif;
                ?>
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
