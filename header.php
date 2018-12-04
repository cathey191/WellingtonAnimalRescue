<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      <?php
        if(is_front_page() == 1) {
          echo bloginfo('name');
        } else {
          echo get_the_title();
        }
      ?>
    </title>
    <link href="https://fonts.googleapis.com/css?family=Niramit:400,700|Pacifico|Roboto:400,500" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark " role="navigation">
      <div class="container">
        <a class="navbar-brand" href="<?= bloginfo('home');?>">
          <?php
            if (get_theme_mod('navbar_logo_text_setting')) {
              echo get_theme_mod('navbar_logo_text_setting');
            } else {
              echo bloginfo('name');
            }
          ?>
        </a>

        <?php
          wp_nav_menu( array(
            'theme_location'    => 'header_nav',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
          ) );

          $navText = get_theme_mod('navbar_button_text_setting');
          $navlink = get_theme_mod('navbar_button_link_setting');

          if ($navText && $navlink):
        ?>
          <div class="form-inline my-2 my-lg-0">
            <a class="btn cust-btn my-2 my-sm-0" href="<?= $navlink; ?>"><?= $navText; ?></a>
          </div>
        <?php endif; ?>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
