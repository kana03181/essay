<?php get_header(); ?>
<main>
  <div class="l-contents">
    <div class="l-container">
      <h2 class="c-title"><span class="-search"><?php the_search_query(); ?>の検索結果</span></h2>
      <div class="p-article__wrapper">
        <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post() ?>
        <?php get_template_part('template-parts/content') ?>
        <?php endwhile; ?>
        <?php else: ?>

        <p>すみません、見つかりませんでした…</p>

      </div>
      <!-- /.p-article__wrapper -->
      <?php endif; ?>

    </div>
    <!-- /.l-container -->
  </div>
</main>
<?php wp_footer() ?>
<?php get_footer(); ?>