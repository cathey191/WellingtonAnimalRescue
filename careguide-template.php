<?php
  /* Template Name: Care Guide Template */
  get_header();
?>
      <div class="container">
        <h2 class="text-center pageTitle"><?php the_title(); ?></h2>
        <div class="card-columns">

        <?php

          $args = array (
            'post_type' => 'careGuide'
          );

          $postType = new WP_Query($args);

          if ($postType->have_posts()):
            while ($postType->have_posts()): $postType->the_post();
        ?>

          <div class="card w-100" style="width: 18rem;">
            <?php
              if( has_post_thumbnail()) {
                the_post_thumbnail('card-top', ['class'=>'card-img-top img-fluid', 'alt'=> 'Image of animal']);
              };
            ?>
            <div class="card-body">
              <h5 class="card-title"><?php the_title(); ?></h5>
              <p class="card-text"><?= wp_trim_words( get_the_excerpt() , '20' ); ?></p>
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
