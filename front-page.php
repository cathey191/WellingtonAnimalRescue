    <?php
      get_header();

      if (get_header_image() == false){
        $homeImage = get_template_directory_uri() . '/assets/img/default.jpg';
      } else {
        $homeImage = get_header_image();
      }

      if (get_header_image()):
    ?>
      <div class="bg-dark front-page-banner" style="background-image: url(<?= $homeImage; ?>);"></div>
    <?php endif; ?>
      <div class="container">
        <h1>test</h1>
      </div>
    <?php wp_footer(); ?>
  </body>
</html>
