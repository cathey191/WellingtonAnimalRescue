<?php
  get_header();
?>
      <div class="container">

        <?php
          if (have_posts()):
            while (have_posts()): the_post();
        ?>


        <div class="card" style="width: 18rem;">
          <?php
            if( has_post_thumbnail()) {
              the_post_thumbnail('thumbnail', ['class'=>'card-img-top img-fluid', 'alt'=> 'Image of animal']);
            };
          ?>
          <div class="card-body">
            <h5 class="card-title"><?php the_title(); ?></h5>
            <a class="btn btn-primary" href="<?= esc_url(get_permalink()); ?>">Read More</a>
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
