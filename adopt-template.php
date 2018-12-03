<?php
  /* Template Name: Adopt Template */
  get_header();
?>
      <div class="container">
        <h2 class="text-center"><?php the_title(); ?></h2>
        <div class="card-columns">

        <?php

          $args = array (
            'post_type' => 'animal'
          );

          $animalsPost = new WP_Query($args);

          if ($animalsPost->have_posts()):
            while ($animalsPost->have_posts()): $animalsPost->the_post();

                  // get_template_part('content', get_post_format()); - Wigs out the card sizing
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
