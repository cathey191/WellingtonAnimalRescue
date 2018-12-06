<?php
  /* Template Name: Supporters Template */
  get_header();
?>
      <div class="container main">
        <h2 class="text-center pageTitle"><?php the_title(); ?></h2>

        <?php
          if(have_posts()):
          while(have_posts()): the_post();
        ?>

          <div class="row">
              <div class="col-sm-6 home-text">
                <h4><?= get_theme_mod('supporter_content_title_setting'); ?></h4>
                <?php if (get_the_content()): ?>
                  <p><?= the_content(); ?></p>
                <?php endif; ?>
              </div>
            <div class="col-sm-6 home-text">
              <h4><?= get_theme_mod('supporter_supporter_title_setting'); ?></h4>
              <?php
                $args = array (
                  'post_type' => 'supporter'
                );

                $postType = new WP_Query($args);

                if ($postType->have_posts()):
                  while ($postType->have_posts()): $postType->the_post();
                  $id = get_the_id();
              ?>

                <div class="media">
                  <?php
                    if( has_post_thumbnail()) {
                      the_post_thumbnail('thumbnail', ['class' => 'mr-3', 'alt'=> 'Image of animal']);
                    };
                  ?>
                    <div class="media-body">
                      <h5 class="mt-0"><?php the_title(); ?></h5>
                      <a href="http://<?= get_post_meta($id, 'weblink', true); ?>"><?= get_post_meta($id, 'weblink', true); ?></a>
                    </div>
                </div>

              <?php
                  endwhile;
                endif;
              ?>

            </div>
          </div>

        <?php
          endwhile;
          endif;
        ?>
      </div>

    <?php get_footer(); ?>
