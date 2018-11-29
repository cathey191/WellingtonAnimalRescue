<?php
  get_header();

  $id = get_the_id();
  $blurb = get_post_meta($id, 'allBlurb', true);
?>
      <div class="container">

        <div class="row">
          <?php if( has_post_thumbnail()): ?>
            <div class="d-none d-sm-block col-6 ">
              <?php the_post_thumbnail('thumbnail', ['class'=>'card-img-top img-fluid', 'alt'=> 'Image of animal']) ?>
            </div>
          <?php endif; ?>
          <div class="col-sm-6 home-text">
            <h2><?= the_title(); ?></h2>
            <p><?= $blurb ?></p>
          </div>
        </div>


      </div>
    <?php wp_footer(); ?>
  </body>
</html>
