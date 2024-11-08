<?php get_header(); ?>
<main>
  <div class="l-hero">
    <div class="l-hero__inner">
      <figure class="p-hero__img">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/img/hero_img_sp.jpg 320w, <?php echo get_theme_file_uri(); ?>/assets/img/hero_img_sp@2x.jpg 640w" sizes="100vw" media="(max-width: 767px)">
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/img/hero_img_tab.jpg 768w, <?php echo get_theme_file_uri(); ?>/assets/img/hero_img_tab@2x.jpg 1536w" sizes="100vw" media="(max-width: 1023px)">
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/img/hero_img_pc.jpg 1125w, <?php echo get_theme_file_uri(); ?>/assets/img/hero_img_pc@2x.jpg 2250w" sizes="100vw" media="(min-width: 1024px)">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/img/hero_img_pc@2x.jpg" width="2250" height="1352" decoding="async" alt="江の島の海と夕焼け空">
        </picture>
      </figure>
    </div>
    <!-- /.l-hero__inner -->
  </div>
  <!-- /.l-hero -->
  <section class="l-concept">
    <div class="p-concept__items">
      <div class="p-concept__texts">
        <div class="p-concept__text -lead">
          <p>ひとりごとを<wbr>ありのままに綴る</p>
          <p>自由帳みたいな<wbr>Webサイト</p>
        </div>
        <!-- /.p-concept__lead -->
        <div class="p-concept__text -main">
          <p>友人関係、仕事、家族のことなど、<wbr>日々の暮らしで頭の中に<wbr>沸々と浮かんだ言葉を<wbr>エッセイとして書いています。</p>
        </div>
        <!-- /.p-concept__text -->
      </div>
      <!-- /.p-concept__texts -->
      <div class="p-concept__images">
        <figure class="p-concept__image -first">
          <img srcset="<?php echo get_theme_file_uri(); ?>/assets/img/concept_img1_sp.jpg 150w,
                        <?php echo get_theme_file_uri(); ?>/assets/img/concept_img1_sp@2x.jpg 300w,
                        <?php echo get_theme_file_uri(); ?>/assets/img/concept_img1_tab.jpg 250w,
                        <?php echo get_theme_file_uri(); ?>/assets/img/concept_img1_tab@2x.jpg 500w,
                        <?php echo get_theme_file_uri(); ?>/assets/img/concept_img1_pc.jpg 300w,
                        <?php echo get_theme_file_uri(); ?>/assets/img/concept_img1_pc@2x.jpg 600w" src="<?php echo get_theme_file_uri(); ?>/assets/img/concept_img1_pc.jpg" sizes="(max-width: 1280px) 100vw, 1280px" width="300" height="200" decoding="async" alt="民家の花壇に咲く花">
        </figure>
        <figure class="p-concept__image -second">
          <img srcset="<?php echo get_theme_file_uri(); ?>/assets/img/concept_img2_sp.jpg 150w,
                        <?php echo get_theme_file_uri(); ?>/assets/img/concept_img2_sp@2x.jpg 300w,
                        <?php echo get_theme_file_uri(); ?>/assets/img/concept_img2_tab.jpg 250w,
                        <?php echo get_theme_file_uri(); ?>/assets/img/concept_img2_tab@2x.jpg 500w,
                        <?php echo get_theme_file_uri(); ?>/assets/img/concept_img2_pc.jpg 300w,
                        <?php echo get_theme_file_uri(); ?>/assets/img/concept_img2_pc@2x.jpg 600w" src="<?php echo get_theme_file_uri(); ?>/assets/img/concept_img2_pc.jpg" sizes="(max-width: 1280px) 100vw, 1280px" width="300" height="200" decoding="async" alt="電車の中からの撮った線路の景色">
        </figure>
        <figure class="p-concept__image -third">
          <img srcset="<?php echo get_theme_file_uri(); ?>/assets/img/concept_img3_sp.jpg 150w,
                        <?php echo get_theme_file_uri(); ?>/assets/img/concept_img3_sp@2x.jpg 300w,
                        <?php echo get_theme_file_uri(); ?>/assets/img/concept_img3_tab.jpg 250w,
                        <?php echo get_theme_file_uri(); ?>/assets/img/concept_img3_tab@2x.jpg 500w,
                        <?php echo get_theme_file_uri(); ?>/assets/img/concept_img3_pc.jpg 300w,
                        <?php echo get_theme_file_uri(); ?>/assets/img/concept_img3_pc@2x.jpg 600w" src="<?php echo get_theme_file_uri(); ?>/assets/img/concept_img3_pc.jpg" sizes="(max-width: 1280px) 100vw, 1280px" width="300" height="200" decoding="async" alt="海沿いの道路。白い車が向かいから来ている。">
        </figure>
      </div>
      <!-- /.p-concept__images -->
    </div>
    <!-- /.p-concept__items -->
  </section>
  <section class="l-about">
    <div class="l-container">
      <h2 class="c-title js-title"><span>わたし</span></h2>
      <div class="p-about__wrapper">
        <div class="p-about__items">
          <div class="p-about__profile">
            <h3 class="p-about__name">kana</h3>
            <p class="p-about__text">
              <span class="-number">1996</span>年<span class="-number">3</span>月<span class="-number">18</span>日生まれ。魚座のAB型。福岡県大野城市でこの世に生まれ、<span class="-number">2</span>歳からは母の生まれ故郷の熊本で育つ。<br>高校卒業後、大阪の専門学校でブライダル業界ついて学び、その後ブライダル系の会社で式場のドレスコーディネーターとして働く。<br>Web業界に興味を持ち、IT業界に転職。現在はオンラインサロンでコーディングの勉強をしながらフロンエンドエンジニアを目指して日々勉強中。
            </p>
          </div>
          <!-- /.p-about__texts -->
          <div class="p-about__img__wrap">
            <figure class="p-about__img">
              <img srcset="<?php echo get_theme_file_uri(); ?>/assets/img/about_img_sp.jpg 288w,
                          <?php echo get_theme_file_uri(); ?>/assets/img/about_img_sp@2x.jpg 576w,
                          <?php echo get_theme_file_uri(); ?>/assets/img/about_img_tab.jpg 304w,
                          <?php echo get_theme_file_uri(); ?>/assets/img/about_img_tab@2x.jpg 608w,
                          <?php echo get_theme_file_uri(); ?>/assets/img/about_img_pc.jpg 417w,
                          <?php echo get_theme_file_uri(); ?>/assets/img/about_img_pc@2x.jpg 834w" src="<?php echo get_theme_file_uri(); ?>/assets/img/about_img_pc.jpg" sizes="(max-width: 1280px) 100vw, 1280px" width="417" height="342" decoding="async" alt="kana 顔写真">
            </figure>
          </div>
        </div>
        <!-- /.p-about__items -->
      </div>
      <!-- /.p-about__wrapper -->
    </div>
    <!-- /.l-container -->
  </section>
  <section class="l-articles">
    <div class="l-container">
      <h2 class="c-title js-title"><span>日々</span></h2>
      <div class="p-article__wrapper">
        <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post() ?>
        <?php get_template_part('template-parts/content') ?>
        <?php endwhile; ?>
        <?php
          global $wp_query;
          if ($wp_query->found_posts > 3):
          ?>
        <p class="p-article__link">
              <a href="#">過去のエッセイを読む</a>
              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/arrow.svg" alt="">
            </p>
        <?php endif; ?>
        <?php else: ?>

        <p>投稿がありません。</p>

      </div>
      <!-- /.p-article__wrapper -->
      <?php endif; ?>

    </div>
    <!-- /.l-container -->
  </section>
</main>
<?php wp_footer() ?>
<?php get_footer(); ?>