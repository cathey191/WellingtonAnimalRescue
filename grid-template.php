<?php
  /* Template Name: Grid Layout Template */
  get_header();
?>
      <div class="container">

        <?php

          $args = array (
            'post_type' => 'animal',
            'order' => 'ASC',
            'orderby' => 'title'
          );

          $animalsPost = new WP_Query($args);

          if ($animalsPost->have_posts()):
            while ($animalsPost->have_posts()): $animalsPost->the_post();
              $id = get_the_id();
              $animialBlurb = get_post_meta($id, 'animialBlurb', true);
                if ($animialBlurb):
        ?>


        <div class="card" style="width: 18rem;">
          <?php
            if( has_post_thumbnail()) {
              the_post_thumbnail('thumbnail', ['class'=>'card-img-top img-fluid', 'alt'=> 'Image of animal']);
            };
          ?>
          <div class="card-body">
            <h5 class="card-title"><?php the_title(); ?></h5>
            <p class="card-text"><?= wp_trim_words( $animialBlurb , '20' ); ?></p>
            <a class="btn btn-primary" href="<?= esc_url(get_permalink()); ?>">Read More</a>
          </div>
        </div>

        <?php
              endif;
            endwhile;
          endif;
        ?>


      </div>
    <?php wp_footer(); ?>
  </body>
</html>
