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
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="<?= bloginfo('home');?>"><?= bloginfo('name'); ?></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
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
        ?>
        <div class="form-inline my-2 my-lg-0">
          <a class="btn blue-btn my-2 my-sm-0" href="https://givealittle.co.nz/org/wellingtonrabbitrescue">Donate</a>
        </div>
      </div>
    </nav>
