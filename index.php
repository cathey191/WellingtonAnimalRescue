<?php
  get_header();
?>
      <div class="container main">
        <h2 class="text-center pageTitle"><?php the_title(); ?></h2>
      <?php
        if(have_posts()):
        while(have_posts()): the_post();
      ?>

        <?= the_content(); ?>

      <?php
        endwhile;
        endif;
      ?>

      </div>
    <?php get_footer(); ?>
