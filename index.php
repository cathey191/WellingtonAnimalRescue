<?php
  get_header();
?>
      <div class="container main">
        <h2 class="text-center pageTitle"><?php the_title(); ?></h2>
      <?php
        if(have_posts()):
        while(have_posts()): the_post();
      ?>
        <div class="row">
          <?php if( has_post_thumbnail()): ?>
            <div class="d-none d-sm-block col-6 ">
              <?php the_post_thumbnail('medium_large', ['class'=>'card-img-top img-fluid', 'alt'=> 'Image of animal']) ?>
            </div>
          <?php endif; ?>
          <div class="col-6">
            <?= the_content(); ?>
          </div>
        </div>

      <?php
        endwhile;
        endif;
      ?>

      </div>
    <?php get_footer(); ?>
