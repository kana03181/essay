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
          $dataImages = '[
                {"src": "' . get_theme_file_uri() . '/assets/img/404_img1_pc@2x.jpg", "alt": "砂浜で手を繋ぐカップル"},
                {"src": "' . get_theme_file_uri() . '/assets/img/404_img2_pc@2x.jpg", "alt": "大阪駅"},
                {"src": "' . get_theme_file_uri() . '/assets/img/404_img3_pc@2x.jpg", "alt": "カーテンに写る花の影"},
                {"src": "' . get_theme_file_uri() . '/assets/img/404_img4_pc@2x.jpg", "alt": "夕暮れの鎌倉駅"}
            ]';

          // JSONデータを配列にデコード
          $images = json_decode($dataImages, true);
          ?>

          <?php if (!empty($images)): ?>
          <?php
            $randomImage = $images[array_rand($images)];
            $imgSrc = $randomImage['src'];
            $imgAlt = $randomImage['alt'];
            ?>
          <figure class="p-contents__thumbnail -notFound">
            <img id="js-randomImage" class="js-randomImage" data-images='<?php echo $dataImages; ?>' src="<?php echo $imgSrc; ?>" width="1400" height="920" alt="<?php echo $imgAlt; ?>">
          </figure>

          <?php else: ?>

          <figure class="p-contents__thumbnail -notFound">
            <img id="js-randomImage" class="js-randomImage" src="<?php echo get_theme_file_uri(); ?>/assets/img/404_img1_pc@2x.jpg" width="1400" height="920" alt="砂浜で手を繋ぐカップル">
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