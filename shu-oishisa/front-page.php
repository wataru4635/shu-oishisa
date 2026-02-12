<?php
/*
* Template Name: トップページ
*/
?>
<?php get_header(); ?>

<main>

  <section class="mv">
    <div class="mv__swiper swiper js-mv-swiper">
      <div class="swiper-wrapper mv__swiper-wrapper">
        <div class="swiper-slide mv__slide">
          <div class="swiper-img mv__slide-img-wrap">
            <picture>
              <source srcset="<?php echo IMAGEPATH; ?>/top/mv01-sp.webp" media="(max-width: 767px)" type="image/webp"
                width="350" height="290">
              <img src="<?php echo IMAGEPATH; ?>/top/mv01.webp" alt="フライパンに美しく並べられた焼き餃子" width="1214" height="683"
                loading="eager" decoding="async" fetchpriority="high" class="mv__slide-img">
            </picture>
          </div>
        </div>
        <div class="swiper-slide mv__slide">
          <div class="swiper-img mv__slide-img-wrap">
            <picture>
              <source srcset="<?php echo IMAGEPATH; ?>/top/mv02-sp.webp" media="(max-width: 767px)" type="image/webp"
                width="350" height="290">
              <img src="<?php echo IMAGEPATH; ?>/top/mv02.webp" alt="箸で掴まれた焼きたての餃子" width="1214" height="683"
                loading="lazy" decoding="async" class="mv__slide-img">
            </picture>
          </div>
        </div>
        <div class="swiper-slide mv__slide">
          <div class="swiper-img mv__slide-img-wrap">
            <picture>
              <source srcset="<?php echo IMAGEPATH; ?>/top/mv03-sp.webp" media="(max-width: 767px)" type="image/webp"
                width="350" height="290">
              <img src="<?php echo IMAGEPATH; ?>/top/mv03.webp" alt="工場で製造される餃子の製造工程" width="1214" height="683"
                loading="lazy" decoding="async" class="mv__slide-img">
            </picture>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="top-lead">
    <div class="top-lead__inner inner">
      <p class="top-lead__text js-fade-in">
        国産野菜100％と鹿児島産の厳選豚肉を使用。<br class="u-desktop">食品加工会社「ヤマセイ」が自社一貫で加工・製造することで<br
          class="u-desktop">こだわり品質を、低価格でお届けします。
      </p>
    </div>
  </div>

  <section class="top-gyoza">
    <img src="<?php echo IMAGEPATH; ?>/top/top-gyoza__bg-top.svg" alt="" aria-hidden="true" width="1366" height="100"
      loading="lazy" class="top-gyoza__bg-top">
    <div class="top-gyoza__inner">
      <div class="top-gyoza__content-wrap">
        <div class="top-gyoza__img-wrap js-scaleImg">
          <img src="<?php echo IMAGEPATH; ?>/top/top-gyoza.webp" alt="黒皿に並ぶ餃子を箸で持ち上げたアップ" width="547" height="351"
            loading="lazy" class="top-gyoza__img">
        </div>

        <div class="top-gyoza__content js-text-box">
          <h2 class="top-gyoza__title section-title">本気の餃子づくり</h2>
          <p class="top-gyoza__text">
            素材への本気、低価格への本気、美味しさへの本気。<br class="u-desktop">餃子の秀がこだわる「3つの本気」についてご紹介します。
          </p>
          <div class="top-gyoza__btn-wrap">
            <a href="<?php echo GYOZA_URL; ?>" class="link-btn">詳細を見る</a>
          </div>
        </div>
      </div>
    </div>
    <img src="<?php echo IMAGEPATH; ?>/top/top-gyoza_bg-bottom.svg" alt="" aria-hidden="true" width="1366" height="100"
      loading="lazy" class="top-gyoza__bg-bottom">
  </section>

  <section class="top-page-links">
    <div class="top-page-links__inner">
      <ul class="top-page-links__list">
        <li class="top-page-links__item js-fade-up">
          <h2 class="top-page-links__title section-title">商品一覧</h2>
          <a href="<?php echo PRODUCTS_URL; ?>" class="top-page-links__link">
            <div class="top-page-links__img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/top/top-products.webp" alt="冷凍餃子と青い箱のギフトセット" width="424" height="272"
                loading="lazy" class="top-page-links__img">
            </div>
            <p class="top-page-links__link-text link-btn">詳細を見る</p>
          </a>
        </li>

        <li class="top-page-links__item js-fade-up --delay-1">
          <h2 class="top-page-links__title section-title">店舗案内</h2>
          <a href="<?php echo TENPOANNAI_URL; ?>" class="top-page-links__link">
            <div class="top-page-links__img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/top/top-tenpoannai.webp" alt="餃子の販売店舗内の冷凍ショーケースと受付カウンター" width="424"
                height="272" loading="lazy" class="top-page-links__img">
            </div>
            <p class="top-page-links__link-text link-btn">詳細を見る</p>
          </a>
        </li>
      </ul>
    </div>
  </section>

  <section class="top-oem">
    <div class="top-oem__inner">
      <div class="top-oem__content-wrap">
        <div class="top-oem__img-wrap js-scaleImg">
          <img src="<?php echo IMAGEPATH; ?>/top/top-oem.webp" alt="整然と並んだ冷凍餃子のクローズアップ写真" width="547" height="351"
            loading="lazy" class="top-oem__img">
        </div>
        <div class="top-oem__content js-text-box">
          <h2 class="top-oem__title section-title">卸販売 / OEM</h2>
          <p class="top-oem__text">
            大ロット・小ロット両方に対応可能です。<br class="u-desktop">こだわりが詰まった餃子づくりを、真心こめてサポートします。
          </p>
          <div class="top-oem__btn-wrap">
            <a href="<?php echo WHOLESALE_OEM_URL; ?>" class="link-btn">詳細を見る</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="top-shop">
    <div class="top-shop__inner js-fade-in">
      <a href="<?php echo SHOP_URL; ?>" class="top-shop__link-banner link-banner" target="_blank" rel="noopener noreferrer">
        <div class="link-banner__content">
          <h2 class="link-banner__title section-title">ネットショップ</h2>
          <p class="link-banner__text">商品のご購入はこちら</p>
        </div>
        <div class="link-banner__img-wrap">
          <picture>
            <source srcset="<?php echo IMAGEPATH; ?>/top/top-shop-sp.webp" media="(max-width: 767px)" type="image/webp"
              width="350" height="187">
            <img src="<?php echo IMAGEPATH; ?>/top/top-shop.webp" alt="冷凍餃子と青いギフト箱のセット" width="429" height="199"
              loading="lazy" class="link-banner__img">
          </picture>
          <span class="link-banner__img-text">ショップページへ</span>
        </div>
      </a>
    </div>
  </section>

  <section class="top-news">
    <div class="top-news__header js-line-title">
      <div class="top-news__line"></div>
      <h2 class="top-news__title section-title">お知らせ</h2>
    </div>
    <div class="top-news__inner">

      <div class="top-news__content">
        <?php
        $args = array(
          'post_type'      => 'news',
          'posts_per_page' => 3,
          'post_status'    => 'publish',
          'orderby'        => 'date',
          'order'          => 'DESC'
        );
        $news_query = new WP_Query($args);
        ?>

        <?php if ($news_query->have_posts()) : ?>
          <ul class="top-news__list news-list js-news-list">
            <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
              <li class="news-list__item">
                <a href="<?php the_permalink(); ?>" class="news-list__link">
                  <time class="news-list__date" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                    <?php echo esc_html(get_the_date('Y.m.d')); ?>
                  </time>
                  <span class="news-list__title"><?php the_title(); ?></span>
                </a>
              </li>
            <?php endwhile; ?>
          </ul>

          <div class="top-news__btn-wrap">
            <a href="<?php echo NEWS_URL; ?>" class="link-btn">詳細を見る</a>
          </div>
        <?php else : ?>
          <p class="top-news__no-posts">現在、投稿はありません。</p>
        <?php endif; ?>

        <?php
        // サブループ後はリセット
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </section>

  <section class="top-external">
    <div class="top-external__inner">
      <ul class="top-external__list">
        <li class="top-external__item top-external__item--instagram js-fade-in">
          <a href="https://www.instagram.com/gyoza_shu/" class="top-external__link" target="_blank"
            rel="noopener noreferrer">
            <div class="top-external__label">
              <span class="top-external__label-text">Instagram</span>
              <img src="<?php echo IMAGEPATH; ?>/common/instagram.webp" alt="Instagramのアイコン" width="33" height="33"
                loading="lazy" class="top-external__label-img">
            </div>
            <div class="top-external__btn-wrap">
              <p class="link-btn">詳細を見る</p>
            </div>
          </a>
        </li>

        <li class="top-external__item top-external__item--hometown js-fade-in --delay-1">
          <a href="https://www.satofull.jp/products/list.php?partner=138800076|%E6%A0%AA%E5%BC%8F%E4%BC%9A%E7%A4%BE%E3%83%A4%E3%83%9E%E3%82%BB%E3%82%A4" class="top-external__link" target="_blank"
            rel="noopener noreferrer">
            <div class="top-external__label">
              <span class="top-external__label-text">ふるさと納税</span>
            </div>
            <div class="top-external__btn-wrap">
              <p class="link-btn">詳細を見る</p>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </section>

  <section class="top-company">
    <div class="top-company__inner">
      <div class="top-company__content-wrap">
        <div class="top-company__img-wrap js-scaleImg">
          <img src="<?php echo IMAGEPATH; ?>/top/top-company.webp" alt="整然と並んだ冷凍餃子のクローズアップ写真" width="547" height="351"
            loading="lazy" class="top-company__img">
        </div>
        <div class="top-company__content js-text-box">
          <h2 class="top-company__title section-title">株式会社ヤマセイ</h2>
          <p class="top-company__text">
            ヤマセイグループは、つねに安心・安全な食品を提供しています。持ち帰り専門店「餃子の秀」は食品加工会社ヤマセイに併設された工場直売店です。
          </p>
          <div class="top-company__btn-wrap">
            <a href="https://fresh-yamasei.jp/" class="link-btn" target="_blank" rel="noopener noreferrer">詳細を見る</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="top-contact">
    <div class="top-contact__inner js-fade-in">
      <a href="<?php echo CONTACT_URL; ?>" class="top-contact__link-banner link-banner">
        <div class="link-banner__content">
          <h2 class="link-banner__title section-title">お問い合わせ</h2>
          <p class="link-banner__text">お問い合わせはこちらから</p>
        </div>
        <div class="link-banner__img-wrap">
          <picture>
            <source srcset="<?php echo IMAGEPATH; ?>/top/top-contact-sp.webp" media="(max-width: 767px)"
              type="image/webp" width="350" height="187">
            <img src="<?php echo IMAGEPATH; ?>/top/top-contact.webp" alt="お問い合わせフォーム" width="429" height="199"
              loading="lazy" class="link-banner__img">
          </picture>
          <span class="link-banner__img-text">お問い合わせフォーム</span>
        </div>
      </a>
    </div>
  </section>
</main>

<?php get_footer(); ?>
