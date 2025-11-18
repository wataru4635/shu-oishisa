<?php get_header(); ?>

<main>

<section class="sub-mv">
    <h1 class="sub-mv__title">404</h1>
</section>

<section class="not-found">
    <div class="not-found__inner inner">
      <h2 class="not-found__title">お探しのページは見つかりませんでした。</h2>
      <p class="not-found__text">
      申し訳ありませんが、アクセスしようとしたページは削除されたか、<br class="u-desktop">
      URLが間違っている可能性があります。
      </p>
      <div class="not-found__top-link-wrap">
        <a href="<?php echo HOME_URL; ?>" class="link-btn02">ページトップへ</a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>