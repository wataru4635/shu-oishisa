<?php
/*
Template Name: お問い合わせ完了
*/
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && (!isset($_POST['contact_confirm_nonce']) || !wp_verify_nonce($_POST['contact_confirm_nonce'], 'contact_form_confirm'))) {
  wp_redirect(home_url('/contact'));
  exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['contact_form'])) {
  $form_data = $_SESSION['contact_form'];

  // フォームの実項目に合わせた必須チェック
  $required_fields = array('お名前', 'ふりがな', 'メールアドレス', 'メールアドレス確認用', '電話番号', 'お問い合わせ内容');
  $is_valid = true;

  foreach ($required_fields as $field) {
    if (empty($form_data[$field])) {
      $is_valid = false;
      break;
    }
  }

  if ($is_valid && !filter_var($form_data['メールアドレス'], FILTER_VALIDATE_EMAIL)) {
    $is_valid = false;
  }

  if ($is_valid) {
    $admin_email = ADMIN_CONTACT_EMAIL;
    $from_email  = REPLY_EMAIL;
    $site_name   = SITE_NAME;

    send_admin_email($form_data, $admin_email, $site_name, $from_email);
    send_auto_reply($form_data, $from_email, $site_name, $admin_email);

    unset($_SESSION['contact_form']);
  } else {
    wp_redirect(home_url('/contact'));
    exit;
  }
} else {
  wp_redirect(home_url('/contact'));
  exit;
}

/**
 * 管理者宛メール送信
 */
function send_admin_email($data, $admin_email, $site_name, $from_email) {
  // メールタイトル（管理者用）
  $subject = "【餃子の秀】ホームページよりお問い合わせがありました。";
  $subject = wp_strip_all_tags($subject);

  $message = "※本メールはシステムからの自動配信メールです。\n\n";
  $message .= "以下の内容でお問い合わせがありました。\n\n";
  $message .= "ーー お問い合わせ内容 ーー\n\n";

  // 会社名（任意項目）
  if (!empty($data['会社名'])) {
    $message .= "■会社名\n" . esc_html($data['会社名']) . "\n\n";
  }

  $message .= "■お名前\n" . esc_html($data['お名前']) . "\n\n";
  $message .= "■ふりがな\n" . esc_html($data['ふりがな']) . "\n\n";
  $message .= "■メールアドレス\n" . sanitize_email($data['メールアドレス']) . "\n\n";
  $message .= "■電話番号\n" . esc_html($data['電話番号']) . "\n\n";
  $message .= "■お問い合わせ内容\n" . esc_html($data['お問い合わせ内容']) . "\n\n";

  $message .= "--------------------------------------\n";
  $message .= "送信日時：" . date("Y/m/d H:i") . "\n";
  $message .= "IPアドレス：" . sanitize_text_field($_SERVER['REMOTE_ADDR']) . "\n";
  $message .= "--------------------------------------";

  $headers = array(
    'From: ' . $site_name . ' <' . sanitize_email($from_email) . '>'
  );

  wp_mail($admin_email, $subject, $message, $headers);
}

/**
 * 自動返信メール送信
 */
function send_auto_reply($data, $from_email, $site_name, $reply_to_email) {
  // メールタイトル（お客様用）
  $subject = "【餃子の秀】お問い合わせありがとうございます。";
  $subject = wp_strip_all_tags($subject);

  $message = esc_html($data['お名前']) . " 様\n\n";
  $message .= "※本メールはシステムからの自動配信メールです。こちらのメールアドレス宛にはご返信いただけませんので、ご了承ください。\n\n";
  $message .= "お問い合わせありがとうございます。\n";
  $message .= "以下の内容で受付しました。\n\n";
  $message .= "ーー お問い合わせ内容 ーー\n\n";

  if (!empty($data['会社名'])) {
    $message .= "■会社名\n" . esc_html($data['会社名']) . "\n\n";
  }

  $message .= "■お名前\n" . esc_html($data['お名前']) . "\n\n";
  $message .= "■ふりがな\n" . esc_html($data['ふりがな']) . "\n\n";
  $message .= "■メールアドレス\n" . sanitize_email($data['メールアドレス']) . "\n\n";
  $message .= "■電話番号\n" . esc_html($data['電話番号']) . "\n\n";
  $message .= "■お問い合わせ内容\n" . esc_html($data['お問い合わせ内容']) . "\n\n";

  $message .= "お問い合わせ内容確認後、担当者よりご返答いたします。\n";
  $message .= "数日経ちましても返答が無い場合は、サーバの不具合等も考えられるため、お手数ですがお電話またはメールフォームにて再度お問い合わせください。\n\n";

  $message .= "==========================\n";
  $message .= "{$site_name}\n";
  $message .= "URL: " . esc_url(home_url()) . "\n";
  $message .= "==========================\n";

  $headers = array(
    'From: ' . $site_name . ' <' . sanitize_email($from_email) . '>',
    'Reply-To: ' . sanitize_email($reply_to_email)
  );

  wp_mail(sanitize_email($data['メールアドレス']), $subject, $message, $headers);
}
?>

<?php get_header(); ?>

<main>

  <section class="sub-mv">
    <h1 class="sub-mv__title">お問い合わせ</h1>
  </section>

  <section class="contact-thanks">
    <img src="<?php echo IMAGEPATH; ?>/contact/contact-bg.svg" alt="" aria-hidden="true" width="100%" height="auto"
      class="contact-thanks__bg">
    <div class="contact-thanks__inner">
      <p class="contact-thanks__text">お問い合わせありがとうございました。</p>
      <p class="contact-thanks__note">
        内容を確認の上、担当者よりご連絡させていただきます。<br>一定期間以上経ちましても返信がない場合は、システムエラーの可能性がございますため、お手数ですが、メールフォームまたはお電話にて再度お問い合わせください。
      </p>
      <div class="contact-thanks__btn">
        <a href="<?php echo HOME_URL; ?>" class="link-btn02">ページトップへ</a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>