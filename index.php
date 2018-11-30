<?php
  get_header();
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
            <p><?= the_content(); ?></p>
          </div>
        </div>


      </div>
    <?php wp_footer(); ?>
  </body>
</html>
