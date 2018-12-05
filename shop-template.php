<?php
  /* Template Name: Shop Template */
  get_header();
?>
      <div class="container">
        <h2 class="text-center pageTitle"><?php the_title(); ?></h2>
        <div class="card-columns">

        <?php
          $args = array (
            'post_type' => 'product'
          );

          $posts = new WP_Query($args);

          if ($posts->have_posts()):
            while ($posts->have_posts()): $posts->the_post();
              get_template_part('content-card', get_post_type());
            endwhile;
          endif;
        ?>

      </div>
    <?php wp_footer(); ?>
  </body>
</html>
