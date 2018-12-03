<?php
  /* Template Name: Adopt Template */
  get_header();
?>
      <div class="container">
        <h2 class="text-center"><?php the_title(); ?></h2>

        <?php if (get_theme_mod('adoption_content_policy_setting')):?>
          <div class="col w-100 text-center">
            <button class="btn red-btn " data-toggle="modal" data-target="#policyModal" ><?= get_theme_mod('adoption_content_title_setting'); ?></button>
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

        <div class="card-columns">

        <?php

          $args = array (
            'post_type' => 'animal'
          );

          $animalsPost = new WP_Query($args);

          if ($animalsPost->have_posts()):
            while ($animalsPost->have_posts()): $animalsPost->the_post();

        ?>

          <div class="card w-100" style="width: 18rem;">
            <?php
              if( has_post_thumbnail()) {
                the_post_thumbnail('card-top', ['class'=>'card-img-top img-fluid', 'alt'=> 'Image of animal']);
              };
            ?>
            <div class="card-body">
              <h5 class="card-title"><?php the_title(); ?></h5>
              <p class="card-text"><?= wp_trim_words( get_the_content() , '20' ); ?></p>
              <a class="btn blue-btn float-right" href="<?= esc_url(get_permalink()); ?>">Read More</a>
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
