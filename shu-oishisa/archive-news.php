<?php get_header(); ?>

<main>

  <section class="sub-mv">
    <h1 class="sub-mv__title">お知らせ</h1>
  </section>

  <section class="news">
    <div class="news__header">
      <div class="news__line"></div>
      <h2 class="news__title section-title">お知らせ一覧</h2>
    </div>
    <div class="news__inner">
      <div class="news__content">
        <ul class="news__list news-list">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <li class="news-list__item">
                <a href="<?php the_permalink(); ?>" class="news-list__link">
                  <time class="news-list__date" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                    <?php echo esc_html(get_the_date('Y.m.d')); ?>
                  </time>
                  <span class="news-list__title"><?php the_title(); ?></span>
                </a>
              </li>
            <?php endwhile; ?>
          <?php else : ?>
            <li class="news-list__item">
              <p class="news-list__title">現在、投稿はありません。</p>
            </li>
          <?php endif; ?>
        </ul>
        <?php
        global $wp_query;
        if ($wp_query->max_num_pages > 1) : ?>
          <div class="news__pagination">
            <?php get_template_part('parts/pagination'); ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <div class="news__btn-wrap">
      <a href="<?php echo HOME_URL; ?>" class="link-btn02">ページトップへ</a>
    </div>
  </section>
</main>

<?php get_footer(); ?>