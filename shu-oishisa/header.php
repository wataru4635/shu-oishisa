<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo('charset'); ?>">
  <?php if(is_page('contact')): ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <?php else: ?>
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <?php endif; ?>
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title>
    <?php
    if (is_front_page()) {
        echo esc_html('【公式】餃子の秀｜工場直売餃子｜卸販売＆OEM｜静岡県磐田市');
    } elseif (is_home()) {
        $blog_page_title = get_the_title(get_option('page_for_posts'));
        echo esc_html($blog_page_title . '｜【公式】餃子の秀｜工場直売餃子｜卸販売＆OEM｜静岡県磐田市');
    } elseif (is_singular('post') || is_singular('products')) {
        echo esc_html(get_the_title() . '｜【公式】餃子の秀｜工場直売餃子｜卸販売＆OEM｜静岡県磐田市');
    } elseif (is_page()) {
        echo esc_html(get_the_title() . '｜【公式】餃子の秀｜工場直売餃子｜卸販売＆OEM｜静岡県磐田市');
    } elseif (is_post_type_archive('products')) {
        echo esc_html('商品｜【公式】餃子の秀｜工場直売餃子｜卸販売＆OEM｜静岡県磐田市');
    } elseif (is_category()) {
        echo esc_html(single_cat_title('', false) . '一覧｜【公式】餃子の秀｜工場直売餃子｜卸販売＆OEM｜静岡県磐田市');
    } elseif (is_archive()) {
        echo esc_html(single_cat_title('', false) . '｜【公式】餃子の秀｜工場直売餃子｜卸販売＆OEM｜静岡県磐田市');
    } elseif (is_search()) {
        echo esc_html('検索結果: ' . get_search_query() . '｜【公式】餃子の秀｜工場直売餃子｜卸販売＆OEM｜静岡県磐田市');
    } elseif (is_404()) {
        echo esc_html('ページが見つかりません｜【公式】餃子の秀｜工場直売餃子｜卸販売＆OEM｜静岡県磐田市');
    } else {
        echo esc_html('【公式】餃子の秀｜工場直売餃子｜卸販売＆OEM｜静岡県磐田市');
    }
    ?>
  </title>

  <meta name="description" content="<?php
    $base_description = '静岡県磐田市・浜松市の自社農場から直送の新鮮野菜と、鹿児島産の厳選豚肉を使用したこだわり餃子。業務用餃子の卸販売・OEM製造も承ります。食品加工会社として野菜・肉を取り扱っているヤマセイグループです。';
    if (is_front_page()) {
        echo esc_attr($base_description);
    } elseif (is_home()) {
        echo esc_attr(get_the_title(get_option('page_for_posts')) . ' - ' . $base_description);
    } elseif (is_page()) {
        echo esc_attr(get_the_title() . ' - ' . $base_description);
    } elseif (is_post_type_archive('products')) {
        echo esc_attr('商品 - ' . $base_description);
    } elseif (is_singular('post') || is_singular('products')) {
        $excerpt = get_the_excerpt();
        echo esc_attr(get_the_title() . ' - ' . ($excerpt ? $excerpt : $base_description));
    } elseif (is_category()) {
        echo esc_attr(single_cat_title('', false) . '一覧 - ' . $base_description);
    } elseif (is_archive()) {
        echo esc_attr(single_cat_title('', false) . 'の記事一覧 - ' . $base_description);
    } elseif (is_search()) {
        echo esc_attr('検索結果: ' . get_search_query() . ' - ' . $base_description);
    } elseif (is_404()) {
        echo esc_attr('ページが見つかりません - ' . $base_description);
    } else {
        echo esc_attr($base_description);
    }
?>">
  <meta name="keywords" content="餃子製造,業務用餃子,OEM餃子,餃子卸売,冷凍餃子,浜松,磐田,餃子の秀,食品加工会社,ヤマセイ" />
  <!-- canonical -->
  <link rel="canonical" href="<?php
    if (is_front_page()) {
        echo esc_url(home_url('/'));
    } elseif (is_singular()) {
        echo esc_url(get_permalink());
    } elseif (is_category() || is_tag() || is_tax()) {
        echo esc_url(get_term_link(get_queried_object()));
    } elseif (is_post_type_archive()) {
        echo esc_url(get_post_type_archive_link(get_post_type()));
    } elseif (is_search()) {
        echo esc_url(home_url('/') . '?s=' . get_search_query());
    } else {
        echo esc_url(home_url('/'));
    }
  ?>" />
  <!-- ogp -->
  <meta property="og:title" content="<?php
    if (is_front_page()) {
        echo esc_attr('【公式】餃子の秀｜工場直売餃子｜卸販売＆OEM｜静岡県磐田市');
    } elseif (is_singular('post') || is_singular('products')) {
        echo esc_attr(get_the_title() . '｜【公式】餃子の秀｜工場直売餃子｜卸販売＆OEM｜静岡県磐田市');
    } elseif (is_page()) {
        echo esc_attr(get_the_title() . '｜【公式】餃子の秀｜工場直売餃子｜卸販売＆OEM｜静岡県磐田市');
    } elseif (is_post_type_archive('products')) {
        echo esc_attr('商品｜【公式】餃子の秀｜工場直売餃子｜卸販売＆OEM｜静岡県磐田市');
    } else {
        echo esc_attr('【公式】餃子の秀｜工場直売餃子｜卸販売＆OEM｜静岡県磐田市');
    }
  ?>" />
  <meta property="og:type" content="<?php echo esc_attr((is_singular('post') || is_singular('products')) ? 'article' : 'website'); ?>">
  <meta property="og:url" content="<?php
    if (is_front_page()) {
        echo esc_url(home_url('/'));
    } elseif (is_singular()) {
        echo esc_url(get_permalink());
    } elseif (is_category() || is_tag() || is_tax()) {
        echo esc_url(get_term_link(get_queried_object()));
    } elseif (is_post_type_archive()) {
        echo esc_url(get_post_type_archive_link(get_post_type()));
    } else {
        echo esc_url(home_url('/'));
    }
  ?>" />
  <meta property="og:image" content="<?php echo esc_url(home_url('/wp-content/themes/oro-shopdesign/assets/images/og_img.jpg')); ?>" />
  <meta property="og:site_name" content="【公式】餃子の秀｜工場直売餃子｜卸販売＆OEM｜静岡県磐田市" />
  <meta property="og:description" content="<?php
    $base_description = '静岡県磐田市・浜松市の自社農場から直送の新鮮野菜と、鹿児島産の厳選豚肉を使用したこだわり餃子。業務用餃子の卸販売・OEM製造も承ります。食品加工会社として野菜・肉を取り扱っているヤマセイグループです。';
    if (is_front_page()) {
        echo esc_attr($base_description);
    } elseif (is_singular('post') || is_singular('products')) {
        $excerpt = get_the_excerpt();
        echo esc_attr($excerpt ? $excerpt : $base_description);
    } elseif (is_page()) {
        echo esc_attr(get_the_title() . ' - ' . $base_description);
    } elseif (is_post_type_archive('products')) {
        echo esc_attr('商品 - ' . $base_description);
    } else {
        echo esc_attr($base_description);
    }
  ?>" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!---------  header  --------->

  <header class="header">
    <div class="header__inner">
    <a href="<?php echo HOME_URL; ?>" class="header__logo-link">
        <?php
          $logo_tag = (is_front_page() || is_home()) ? 'h1' : 'div';
        ?>
        <<?php echo esc_attr($logo_tag); ?> class="header__logo">
          <img src="<?php echo IMAGEPATH; ?>/common/logo.webp" alt="餃子の秀ロゴ" width="133"
            height="43.921" class="header__logo-img" >
        </<?php echo esc_attr($logo_tag); ?>>
      </a>
      <nav class="header__nav">
        <ul class="header__nav-list">
          <li class="header__nav-item">
            <a href="<?php echo GYOZA_URL; ?>" class="header__nav-link<?php if(is_page('gyoza')): ?> current<?php endif; ?>">本気の餃子づくり</a>
          </li>
          <li class="header__nav-item">
            <a href="<?php echo PRODUCTS_URL; ?>" class="header__nav-link<?php if(is_post_type_archive('products') || is_singular('products')): ?> current<?php endif; ?>">商品一覧</a>
          </li>
          <li class="header__nav-item">
            <a href="<?php echo TENPOANNAI_URL; ?>" class="header__nav-link<?php if(is_page('tenpoannai')): ?> current<?php endif; ?>">店舗案内</a>
          </li>
          <li class="header__nav-item">
            <a href="<?php echo WHOLESALE_OEM_URL; ?>" class="header__nav-link<?php if(is_page('wholesale-oem')): ?> current<?php endif; ?>">卸販売／OEM</a>
          </li>
          <!-- <li class="header__nav-item">
            <a href="" class="header__nav-link" target="_blank" rel="noopener noreferrer">ネットショップ</a>
          </li> -->
          <li class="header__nav-item">
            <a href="<?php echo CONTACT_URL; ?>" class="header__nav-link<?php if(is_page('contact')): ?> current<?php endif; ?>">お問い合わせ</a>
          </li>
        </ul>
      </nav>
        <button class="header__hamburger-button js-hamburger" type="button" aria-label="メニューを開く">
        <span></span>
          <span></span>
          <span></span>
        </button>
        </div>
  </header>

  <div class="drawer">
    <div class="drawer__body">
      <ul class="drawer__list">
        <li class="drawer__item">
          <a href="<?php echo GYOZA_URL; ?>"
            class="drawer__link<?php if(is_page('gyoza')): ?> current<?php endif; ?>">本気の餃子づくり</a>
        </li>
        <li class="drawer__item">
          <a href="<?php echo PRODUCTS_URL; ?>"
            class="drawer__link<?php if(is_post_type_archive('products') || is_singular('products')): ?> current<?php endif; ?>">商品一覧</a>
        </li>
        <li class="drawer__item">
          <a href="<?php echo TENPOANNAI_URL; ?>"
            class="drawer__link<?php if(is_page('tenpoannai')): ?> current<?php endif; ?>">店舗案内</a>
        </li>
        <li class="drawer__item">
          <a href="<?php echo WHOLESALE_OEM_URL; ?>"
            class="drawer__link<?php if(is_page('wholesale-oem')): ?> current<?php endif; ?>">卸販売／OEM</a>
        </li>
        <!-- <li class="drawer__item">
          <a href=""
            class="drawer__link" target="_blank" rel="noopener noreferrer">ネットショップ</a>
        </li> -->
        <li class="drawer__item">
          <a href="<?php echo CONTACT_URL; ?>"
            class="drawer__link<?php if(is_page('contact')): ?> current<?php endif; ?>">お問い合わせ</a>
        </li>
      </ul>
    </div>
  </div>