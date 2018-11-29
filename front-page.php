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
    <?php
      endif;

      $homePageData = array();
      if (get_theme_mod('front_page_title_setting') != false || get_theme_mod('front_page_textarea_setting') != false ) {
        array_push($homePageData, get_theme_mod('front_page_title_setting'), get_theme_mod('front_page_textarea_setting'));
      }


      if (sizeof($homePageData) === 2):
    ?>
        <div class="container">
          <div class="row">
            <div class="col-sm-6 home-text">
              <h2><?= get_theme_mod('front_page_title_setting') ?></h2>
              <p><?= get_theme_mod('front_page_textarea_setting') ?></p>
            </div>
            <div class="d-none d-sm-block col-6 home-image-size">
            </div>
          </div>
        </div>
    <?php
      endif;
      wp_footer();
    ?>
  </body>
</html>
