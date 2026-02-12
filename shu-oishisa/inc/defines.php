<?php
// ==========================================================================
// 定義
// ==========================================================================
/* ---------- パスの短縮 ---------- */
define('IMAGEPATH',            get_template_directory_uri() . '/assets/images');
define('PDFPATH',              get_template_directory_uri() . '/assets/pdf');

/* ---------- 各ページのリンク ---------- */
define('HOME_URL',             esc_url(home_url('/')));                          // トップページ
define('GYOZA_URL',            esc_url(home_url('/gyoza/')));                    // 本気の餃子づくり
define('TENPOANNAI_URL',       esc_url(home_url('/tenpoannai/')));               // 店舗案内
define('PRODUCTS_URL',         esc_url(home_url('/products/')));                 // 商品
define('WHOLESALE_OEM_URL',    esc_url(home_url('/wholesale-oem/')));            // 卸販売/OEM
define('NEWS_URL',             esc_url(home_url('/news/')));                     // お知らせ
define('CONTACT_URL',          esc_url(home_url('/contact/')));                  // お問い合わせ
define('CONTACT_CONFIRM_URL',  esc_url(home_url('/contact-confirm/')));          // お問い合わせ確認
define('CONTACT_THANKS_URL',   esc_url(home_url('/contact-thanks/')));           // お問い合わせ完了
define('PRIVACY_POLICY_URL',   esc_url(home_url('/privacy-policy/')));           // プライバシーポリシー
define('SHOP_URL',            esc_url('https://shu-oishisa.stores.jp/'));       // ネットショップ（外部）

/* ---------- メール設定 ---------- */
define('ADMIN_CONTACT_EMAIL',  'info@fresh-yamasei.jp');        // 管理者受信用メールアドレス
define('REPLY_EMAIL',          'contact@shu-oishisa.com');      // 自動返信送信元メールアドレス
define('SITE_NAME',            '餃子の秀｜株式会社ヤマセイ');     // サイト名