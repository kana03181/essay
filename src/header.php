  <!DOCTYPE html>
  <html <?php language_attributes(); ?>>

  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QFFQ32NN25"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-QFFQ32NN25');
    </script>
    <?php wp_head(); ?>
  </head>

  <body class="js-body">
    <header class="l-header">
      <div class="l-header__inner">
        <h1 class="p-logo -header"><a href="<?php echo esc_url(home_url()); ?>"><?php bloginfo('name'); ?></a></h1>
        <nav>
          <h2 class="u-visuallyHidden">サイト内メニュー</h2>
          <button type="button" class="p-hamburger js-hamburger" aria-controls="global-nav" aria-expanded="false">
            <span class="p-hamburger__line"><span class="u-visuallyHidden">メニューを開閉する</span></span>
          </button>
          <div id="global-nav" class="p-global-nav">
            <?php
            $args = [
              'theme_location' => 'header_nav',
              'menu_class' => 'p-global-nav__menu',
              'container' => 'false',
            ];
            wp_nav_menu($args);
            ?>
            <ul class="p-global-nav__sns">
              <li class="p-global-nav__list">
                <a href="<?php
                          $link_URL = 'instagram.com/friy04';
                          echo esc_url($link_URL);
                          ?>" target="_blank" class="-sns">
                  <img class="-Instagram" src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/logo_Instagram.svg" alt="">
                </a>
              </li>
              <li class="p-global-nav__list">
                <a href="<?php
                          $link_URL = 'https://x.com/friy04';
                          echo esc_url($link_URL);
                          ?>" target="_blank" class="-sns">
                  <img class="-x" src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/logo_x.svg" alt="">
                </a>
              </li>
            </ul>
            <?php dynamic_sidebar('search'); ?>
          </div>
        </nav>
      </div>
      <!-- /.l-header__inner -->
    </header>