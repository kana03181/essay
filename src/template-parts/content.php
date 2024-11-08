            <article class="c-media p-article">
              <a href="<?php the_permalink(); ?>" class="c-media__body">
                <h3 class="c-media__title"><?php the_title(); ?></h3>
                <p class="c-media__date"><time datetime="<?php the_time(DATE_W3C); ?>"><?php the_time(get_option('date_format')); ?></time></p>
                <p class="c-media__text"><?php the_excerpt(); ?></p>
              </a>
              <!-- /.c-media__body -->
              <figure class="c-media__thumbnail">
                <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('article-thumbnail'); ?>
                <?php else: ?>
                  <img src="https://placehold.jp/327x220.png" alt="アイキャッチ画像はありません。">
                <?php endif; ?>
              </figure>
              <div class="c-media__categories">
                <?php the_tags('', ''); ?>
              </div>
              <!-- /.c-media__tag -->
            </article>
