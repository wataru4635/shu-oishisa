<?php get_header(); ?>

<main>

<section class="sub-mv">
    <h1 class="sub-mv__title">お知らせ</h1>
  </section>

  <section class="post-news">
    <div class="post-news__inner">
      <div class="post-news__header">
        <h2 class="post-news__title"><?php the_title(); ?></h2>
        <time class="post-news__date" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
          <?php echo esc_html(get_the_date('Y.m.d')); ?>
        </time>
      </div>
      <div class="post-news__content">
        <?php the_content(); ?>
      </div>
    </div>
    <?php if (get_previous_post() || get_next_post()) : ?>
          <div class="post-news__post-navigation post-navigation">
            <?php get_template_part('parts/post-navigation'); ?>
          </div>
        <?php endif; ?>
        <div class="post-news__btn-links">
          <a href="<?php echo NEWS_URL; ?>" class="link-btn02 link-btn02--yellow">お知らせ一覧に戻る</a>
          <a href="<?php echo HOME_URL; ?>" class="link-btn02">ページトップへ</a>
        </div>
  </section>

</main>

<?php get_footer(); ?>