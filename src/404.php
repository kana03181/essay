<?php get_header(); ?>
<main>
  <div class="l-contents">
    <div class="l-container">
      <div class="p-contents__items">
        <h2 class="p-contents__title -notFound">
          <span>お探しのページは<wbr>見つかりませんでした…</span>
        </h2>
        <div class="p-contents__thumbnail__wrapper">
          <?php
          // data-images属性から画像情報を取得
          $dataImages = [
            ["src" => esc_url(get_theme_file_uri() . '/assets/img/404_img1_pc@2x.jpg'), "alt" => "砂浜で手を繋ぐカップル"],
            ["src" => esc_url(get_theme_file_uri() . '/assets/img/404_img2_pc@2x.jpg'), "alt" => "鮮やかな紅葉"],
            ["src" => esc_url(get_theme_file_uri() . '/assets/img/404_img3_pc@2x.jpg'), "alt" => "山頂から見える阿蘇の景色"],
            ["src" => esc_url(get_theme_file_uri() . '/assets/img/404_img4_pc@2x.jpg'), "alt" => "東京駅のイルミネーション"],
          ];
          // ランダムな画像を取得
          $randomImage = $dataImages[array_rand($dataImages)];
          $imgSrc = $randomImage['src'];
          $imgAlt = $randomImage['alt'];

          ?>

          <?php if ($randomImage): ?>

            <figure class="p-contents__thumbnail -notFound">
              <img class="p-contents__img" src="<?php echo $imgSrc; ?>" width="1400" height="920" alt="<?php echo $imgAlt; ?>">
            </figure>
          <?php else: ?>

            <figure class="p-contents__thumbnail -notFound">
              <img class="p-contents__img" src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/404_img1_pc@2x.jpg" width="1400" height="920" alt="砂浜で手を繋ぐカップル">
            </figure>

          <?php endif; ?>
        </div>
        <!-- /.p-contents__thumbnail__wrapper -->
        <div class="p-contents__body -notFound">
          <p class="p-contents__text -notFound">検索キーワードを変えてみると<wbr>見つかるかも！</p>
        </div>
        <!-- /.p-contents__body -notFound -->
      </div>
      <!-- /.p-contents__items -->
    </div>
    <!-- /.l-container -->
  </div>
  <!-- /.l-404 -->
</main>
<?php wp_footer() ?>
<?php get_footer(); ?>
