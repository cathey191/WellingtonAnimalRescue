<?php
  /* Template Name: Shop Template */
  get_header();
?>
      <div class="container">
        <h2 class="text-center"><?php the_title(); ?></h2>
        <div class="card-columns">

        <?php

          $args = array (
            'post_type' => 'product'
          );

          $posts = new WP_Query($args);


          if ($posts->have_posts()):
            while ($posts->have_posts()): $posts->the_post();
              $id = get_the_id();
              $blurb = get_post_meta($id, 'allBlurb', true);
        ?>

          <div class="card w-100" style="width: 18rem;">
            <?php
              if( has_post_thumbnail()) {
                the_post_thumbnail('thumbnail', ['class'=>'card-img-top img-fluid', 'alt'=> 'Image of animal']);
              };
            ?>
            <div class="card-body">
              <h5 class="card-title"><?php the_title(); ?></h5>
              <?php if (the_content()): ?>
                <p class="card-text"><?= wp_trim_words( the_content() , '20' ); ?></p>
              <?php endif; ?>
              <a class="btn blue-btn" href="<?= esc_url(get_permalink()); ?>">Read More</a>
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
