<footer class="l-footer">
  <div class="l-footer__inner">
    <div class="p-footer__top">
      <h1 class="p-logo -footer"><a href="#"><?php bloginfo('name'); ?></a></h1>
      <div class="p-footer-nav">
        <?php
        $args = [
          'theme_location' => 'footer_nav',
          'menu_class' => 'p-footer-nav__menu',
          'container' => 'false'
        ];
        wp_nav_menu($args);
        ?>
        <ul class="p-footer-nav__sns">
          <li class="p-footer-nav__list">
            <a href="<?php
                      $link_URL = 'instagram.com/friy04';
                      echo esc_url($link_URL);
                      ?>" target="_blank" class="-sns">
              <img class="-Instagram" src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/logo_Instagram.svg" alt="">
            </a>
          </li>
          <li class="p-footer-nav__list">
            <a href="<?php
                      $link_URL = 'https://x.com/friy04';
                      echo esc_url($link_URL);
                      ?>" target="_blank" class="-sns">
              <img class="-x" src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/logo_x.svg" alt="">
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- /.p-footer__top -->
    <div class="p-footer__bottom">
      <ul class="p-footer__develop">
        <li class="p-footer__develop__list"><span class="p-footer__develop__text">Design / Develop / Photograph : kana</span></li>
        <li class="p-footer__develop__list"><span class="p-footer__develop__text">CMS : WordPress</span></li>
        <li class="p-footer__develop__list"><span class="p-footer__develop__text">Front-End Languages : HTML / SCSS / JavaScript(GSAP)</span></li>
      </ul>
    </div>
    <!-- /.p-footer__bottom -->
    <p class="p-footer__toTop">
      <a href="#top" class="p-footer__toTop__link"><span class="u-visuallyHidden">トップへ</span></a>
    </p>
    <p class="p-footer__copyright"><small>&copy;ワイのエッセイ</small></p>
  </div>
  <!-- /.l-container -->
</footer>
</body>

</html>
