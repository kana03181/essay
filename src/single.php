<?php get_header(); ?>
<main>
  <?php while (have_posts()): the_post(); ?>
    <article class="l-contents">
      <div class="l-container">
        <div class="p-contents__items">
          <div class="p-contents__header">
            <h2 class="p-contents__title"><?php the_title(); ?></h2>
            <p class="p-contents__date"><time datetime="<?php the_time(DATE_W3C); ?>">
                <?php the_time(get_option('date_format')); ?></time>
            </p>
          </div>
          <!-- /.p-contents__header -->
          <div class="p-contents__body">
            <p class="p-contents__text"><?php the_content(); ?></p>
          </div>
          <!-- /.p-contents__body -->
          <?php if (has_post_thumbnail()): ?>
            <figure class="p-contents__thumbnail">
              <?php the_post_thumbnail(); ?>
            </figure>
          <?php endif; ?>
          <div class="c-media__categories -single">
            <?php the_tags('', ''); ?>
          </div>
        </div>
      </div>
      <!-- /.l-container -->
    </article>
  <?php endwhile; ?>
</main>
<?php wp_footer() ?>
<?php get_footer(); ?>
