<?php
// ==========================================================================
// WordPress テーマの基本設定
// ==========================================================================
function my_theme_setup() {
    // アイキャッチ画像を有効化
    add_theme_support('post-thumbnails');

    // タイトルタグ自動生成を有効化
    add_theme_support('title-tag');

    // RSSフィードリンクを自動生成
    add_theme_support('automatic-feed-links');

    // HTML5 マークアップのサポート（フォーム、コメント、ギャラリーなど）
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    // ウィジェットの部分的なリフレッシュを有効化
    add_theme_support('customize-selective-refresh-widgets');
}
add_action('after_setup_theme', 'my_theme_setup');

// ==========================================================================
// スクリプトとスタイルのエンキュー（共通 + 特定ページ）
// ==========================================================================
function enqueue_custom_scripts() {
    $theme_path = get_theme_file_path();
    $asset_uri  = get_theme_file_uri('/assets');

    // ファイルのバージョンを取得（存在すれば filemtime、なければテーマバージョン）
    $get_ver = function($file_path) {
        return file_exists($file_path) ? filemtime($file_path) : wp_get_theme()->get('Version');
    };

    // トップページ専用JS・CSS
    if (is_front_page()) {
        // Swiper JS
        wp_enqueue_script(
            'swiper-js',
            'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
            [],
            '11.1.14',
            true
        );
        
        // Swiper CSS
        wp_enqueue_style(
            'swiper-css',
            'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
            [],
            '11.1.14'
        );
        
        // トップページ専用JS
        $script = '/js/top.js';
        wp_enqueue_script(
            'top-script',
            "{$asset_uri}{$script}",
            ['swiper-js'],
            $get_ver("{$theme_path}/assets{$script}"),
            true
        );
    }

    // 卸販売 / OEMページ専用JS
    if (is_page('wholesale-oem') || is_page_template('page-wholesale-oem.php')) {
        $script = '/js/faq.js';
        wp_enqueue_script(
            'faq-script',
            "{$asset_uri}{$script}",
            [],
            $get_ver("{$theme_path}/assets{$script}"),
            true
        );
    }

    // お問い合わせページ専用JS
    if (is_page('contact') || is_page_template('page-contact.php')) {
        $script = '/js/form.js';
        wp_enqueue_script(
            'form-script',
            "{$asset_uri}{$script}",
            [],
            $get_ver("{$theme_path}/assets{$script}"),
            true
        );
    }

    // CSS（共通）- 最後に読み込む
    $style_file = '/css/style.css';
    wp_enqueue_style(
        'common-style',
        "{$asset_uri}{$style_file}",
        [],
        $get_ver("{$theme_path}/assets{$style_file}")
    );

    // JS（共通）- 最後に読み込む
    $script_file = '/js/script.js';
    wp_enqueue_script(
        'common-script',
        "{$asset_uri}{$script_file}",
        [],
        $get_ver("{$theme_path}/assets{$script_file}"),
        true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');


// ==========================================================================
// ヘッダーへのプリロード
// ==========================================================================
function enqueue_preload_headers() {
  ?>
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@500&family=Noto+Sans+JP:wght@400;500;600;700&family=Noto+Serif+JP:wght@400;500;600;700&display=swap" rel="preload"
    as="style" fetchpriority="high">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@500&family=Noto+Sans+JP:wght@400;500;600;700&family=Noto+Serif+JP:wght@400;500;600;700&display=swap" rel="stylesheet"
    media="print" onload="this.media='all'">
<?php
}
add_action('wp_head', 'enqueue_preload_headers');

// ==========================================================================
// 不要な head内のタグやスクリプトを削除する関数
// ==========================================================================
function codeups_clean_up_head() {
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'feed_links_extra', 3);
}

add_action('after_setup_theme', 'codeups_clean_up_head');

// ==========================================================================
// SEOプラグイン使用しない場合：wp_head の <title> タグを削除
// ==========================================================================
remove_action('wp_head', '_wp_render_title_tag', 1);

// ==========================================================================
// ブロックエディタのスタイルを追加
// ==========================================================================

function add_block_editor_styles() {
    wp_enqueue_style( 'editor-styles', get_stylesheet_directory_uri() . '/assets/css/editor.css' );
    
    // エディターにフォントファミリーを追加
    add_editor_style( array(
        'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap',
    ) );
    
    // インラインスタイルでフォントファミリーを設定
    wp_add_inline_style( 'editor-styles', '
        .editor-styles-wrapper {
            font-family: "Noto Sans JP", "Noto Sans", sans-serif !important;
        }
    ' );
}
add_action( 'enqueue_block_editor_assets', 'add_block_editor_styles' );

// ==========================================================================
// カスタム投稿タイプのパーマリンク設定
// ==========================================================================

add_filter('post_type_link', 'custom_post_type_permalink', 10, 2);
function custom_post_type_permalink($link, $post) {
    if ($post->post_type === 'news') {
        return home_url('/' . $post->post_type . '/' . $post->ID . '/');
    }
    if ($post->post_type === 'products') {
        return home_url('/' . $post->post_type . '/' . $post->ID . '/');
    }
    return $link;
}

add_filter('rewrite_rules_array', 'custom_post_type_rewrite_rules');
function custom_post_type_rewrite_rules($rules) {
    $new_rules = array(
        'news/([0-9]+)/?$' => 'index.php?post_type=news&p=$matches[1]',
        'products/([0-9]+)/?$' => 'index.php?post_type=products&p=$matches[1]',
    );
    return $new_rules + $rules;
}

// ==========================================================================
// メール送信者を変更
// ==========================================================================
add_action('phpmailer_init', function($phpmailer) {
    $phpmailer->Sender = REPLY_EMAIL;
});