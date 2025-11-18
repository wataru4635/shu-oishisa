<?php get_header(); ?>

<main>

  <section class="post-products">
    <h1 class="post-products__title"><?php the_title(); ?></h1>
    <div class="post-products__inner">
        <div class="post-products__img-wrap">
          <?php
            $thumb_id  = get_post_thumbnail_id();
            $image_url = $thumb_id ? wp_get_attachment_image_url( $thumb_id, 'large' ) : '';
            $image_alt = $thumb_id ? get_post_meta( $thumb_id, '_wp_attachment_image_alt', true ) : '';

            if ( ! $image_alt ) {
              $image_alt = get_the_title();
            }
          ?>
          <?php if ( $image_url ) : ?>
            <img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $image_alt ); ?>" class="post-products__img">
          <?php endif; ?>
        </div>
      <div class="post-products__content">
        <?php the_content(); ?>
      </div>
    </div>
    <?php if (get_previous_post() || get_next_post()) : ?>
          <div class="post-products__post-navigation post-navigation">
            <?php get_template_part('parts/post-navigation'); ?>
          </div>
        <?php endif; ?>
        <div class="post-products__btn-links">
          <a href="<?php echo PRODUCTS_URL; ?>" class="link-btn02 link-btn02--yellow">商品一覧に戻る</a>
          <a href="<?php echo HOME_URL; ?>" class="link-btn02">ページトップへ</a>
        </div>
  </section>

</main>

<?php get_footer(); ?>