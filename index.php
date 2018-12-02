<?php
  get_header();
?>
      <div class="container">
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
          <div class="col-sm-6 home-text">
            <h2><?= the_title(); ?></h2>
            <?php if (get_the_content()): ?>
              <p><?= the_content(); ?></p>
            <?php endif; ?>
          </div>
        </div>

      <?php
        endwhile;
        endif;
      ?>

      </div>
    <?php wp_footer(); ?>
  </body>
</html>
