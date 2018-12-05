    <?php
      get_header();

      if (get_header_image() == false){
        $homeImage = get_template_directory_uri() . '/assets/img/default.jpg';
      } else {
        $homeImage = get_header_image();
      }

      $homePageData = array();
      if (get_theme_mod('front_page_title_setting') != false || get_theme_mod('front_page_textarea_setting') != false ) {
        array_push($homePageData, get_theme_mod('front_page_title_setting'), get_theme_mod('front_page_textarea_setting'));
      }

      if (get_header_image()):
    ?>
      <div class="bg-dark front-page-banner" style="background-image: url(<?= $homeImage; ?>);">
        <?php if (sizeof($homePageData) === 2):  ?>
          <div class="container position-relative">
            <a class="frontScroll" href="#information"><?= get_theme_mod('front_page_title_setting') ?><span class="dashicons dashicons-arrow-down-alt "> </span></a>
          </div>
        <?php endif ?>
      </div>
    <?php
      endif;

      if (sizeof($homePageData) === 2):
    ?>
        <div class="container">
          <div class="row">
            <div class="col-sm-6 home-text">
              <h2 id="information"><?= get_theme_mod('front_page_title_setting') ?></h2>
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
