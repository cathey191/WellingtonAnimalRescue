    <?php get_header(); ?>
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
        ?>


        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="<?= get_header_image(); ?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php the_title(); ?></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
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
