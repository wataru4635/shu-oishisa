<?php get_header(); ?>

<main>

  <section class="sub-mv">
    <h1 class="sub-mv__title">商品一覧</h1>
  </section>

  <section class="products">
  <div class="products__inner">

    <?php if ( have_posts() ) : ?>
      <ul class="products__list">

        <?php while ( have_posts() ) : the_post(); ?>
          <?php
            $title     = get_the_title();
            $image_url = '';
            $image_alt = '';

            // アイキャッチ画像がある場合は優先的に使用
            if ( has_post_thumbnail() ) {
              $thumb_id  = get_post_thumbnail_id();
              // 必要に応じてサイズを変更してください（例: 'medium', 'large' など）
              $image_url = wp_get_attachment_image_url( $thumb_id, 'medium' );
              $image_alt = get_post_meta( $thumb_id, '_wp_attachment_image_alt', true );
            }

            // アイキャッチがない場合は本文内の最初の画像を使用
            if ( ! $image_url ) {
              $content = get_the_content();

              if ( $content && preg_match( '/<img[^>]+>/i', $content, $matches ) ) {
                $first_img_tag = $matches[0];

                if ( preg_match( '/src=["\']([^"\']+)["\']/i', $first_img_tag, $src_match ) ) {
                  $image_url = $src_match[1];
                }

                if ( preg_match( '/alt=["\']([^"\']*)["\']/i', $first_img_tag, $alt_match ) ) {
                  $image_alt = $alt_match[1];
                }
              }
            }

            // 本文内にも画像がない場合はダミー画像を使用
            if ( ! $image_url ) {
              $image_url = IMAGEPATH . '/products/dummy-img.webp';
            }

            // alt が設定されていない場合はタイトルを使用
            if ( ! $image_alt ) {
              $image_alt = $title;
            }
          ?>

            <li class="products__item">
              <a href="<?php the_permalink(); ?>" class="products__card">
                <div class="products__img-wrap">
                  <img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $image_alt ); ?>" width="300" height="300" class="products__img">
                </div>
                <p class="products__title">
                  <?php the_title(); ?>
                </p>
              </a>
            </li>
        <?php endwhile; ?>

      </ul>
    <?php else : ?>
      <p class="products__empty" style="text-align: center;">現在、商品はありません。</p>
    <?php endif; ?>

    <?php
        global $wp_query;
        if ($wp_query->max_num_pages > 1) : ?>
          <div class="products__pagination">
            <?php get_template_part('parts/pagination'); ?>
          </div>
        <?php endif; ?>

    <div class="products__btn">
      <a href="#top" class="link-btn02">ページトップへ</a>
    </div>

  </div>
</section>


</main>

<?php get_footer(); ?>