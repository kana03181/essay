<?php get_header(); ?>
<main>
  <div class="l-contents">
    <div class="l-container">
      <h2 class="c-title"><span class="-category"><?php single_tag_title(); ?></span></h2>
      <div class="p-article__wrapper">
        <?php if (have_posts()): ?>
          <?php while (have_posts()): the_post() ?>
            <?php get_template_part('template-parts/content') ?>
          <?php endwhile; ?>
        <?php else: ?>

          <p>投稿がありません。</p>

      </div>
      <!-- /.p-article__wrapper -->
      <p class="p-article__link">
        <a href="#">過去のエッセイを読む</a>
        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/arrow.svg" alt="">
      </p>
    <?php endif; ?>

    </div>
    <!-- /.l-container -->
  </div>
</main>
<?php wp_footer() ?>
<?php get_footer(); ?>
