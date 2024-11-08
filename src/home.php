<?php get_header(); ?>
<main>
  <section class="l-articles">
    <div class="l-container">
      <h2 class="c-title"><span>日々</span></h2>
      <div class="p-article__wrapper">
        <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post() ?>
        <?php get_template_part('template-parts/content') ?>
        <?php endwhile; ?>
        <?php
          $args = [
            'mid_size' => 1,
            'prev_text' => '&lt;',
            'next_text' => '&gt;',
          ];
          ?>
        <?php the_posts_pagination($args) ?>
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