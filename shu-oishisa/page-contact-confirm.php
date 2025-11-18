<?php
/*
Template Name: お問い合わせ確認
*/

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && (!isset($_POST['contact_nonce']) || !wp_verify_nonce($_POST['contact_nonce'], 'contact_form_submit'))) {
  wp_redirect(home_url('/contact'));
  exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $sanitized_data = array();
  foreach ($_POST as $key => $value) {
    if (!is_string($value)) {
      continue;
    }
    
    $value = str_replace(array("\r\n", "\r"), "\n", $value);
    
    if ($key === 'お問い合わせ内容') {
      $sanitized_data[$key] = sanitize_textarea_field($value);
    } else {
      $sanitized_data[$key] = sanitize_text_field($value);
    }
  }
  
  $_SESSION['contact_form'] = $sanitized_data;
}
?>
<?php get_header(); ?>

<main>
 <section class="sub-mv">
    <h1 class="sub-mv__title">お問い合わせ</h1>
  </section>

  <section class="contact-form contact-form--confirm">
    <div class="contact-form__bg">
      <img src="<?php echo IMAGEPATH; ?>/contact/contact-bg.svg" alt="お問い合わせ確認" width="100%" height="auto" loading="lazy" class="contact-form__bg-img">
    </div>
    <div class="contact-form__inner">
    <p class="contact-form__intro">下記の内容にお間違いがないか確認の上、「送信」ボタンを押してください。</p>
      <p class="contact-form__note"><span class="contact-form__required"></span>印は必須項目です。
      </p>
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $form_data = isset($_SESSION['contact_form']) ? $_SESSION['contact_form'] : array();
        ?>
      <form id="contact-form-confirm" action="<?php echo esc_url(home_url('/contact-thanks')); ?>" method="post">
        <?php wp_nonce_field('contact_form_confirm', 'contact_confirm_nonce'); ?>
        <dl class="contact-form__list contact-form__list--confirm">
          <?php if (!empty($form_data['会社名'])) : ?>
          <div class="contact-form__item">
            <dt class="contact-form__label"><span class="contact-form__none-required"></span>会社名</dt>
            <dd class="contact-form__input contact-form__confirm-text">
              <?php echo esc_html($form_data['会社名']); ?>
            </dd>
          </div>
          <?php endif; ?>

          <div class="contact-form__item">
            <dt class="contact-form__label"><span class="contact-form__required"></span>お名前（ご担当者名）</dt>
            <dd class="contact-form__input contact-form__confirm-text">
              <?php echo isset($form_data['お名前']) ? esc_html($form_data['お名前']) : ''; ?>
            </dd>
          </div>

          <div class="contact-form__item">
            <dt class="contact-form__label"><span class="contact-form__required"></span>ふりがな</dt>
            <dd class="contact-form__input contact-form__confirm-text">
              <?php echo isset($form_data['ふりがな']) ? esc_html($form_data['ふりがな']) : ''; ?>
            </dd>
          </div>

          <div class="contact-form__item">
            <dt class="contact-form__label contact-form__label--column">
              <span class="contact-form__required"></span>
              <span class="contact-form__label-text">
                メールアドレス<br>
                <span class="contact-form__label-note">※半角英数字</span>
              </span>
            </dt>
            <dd class="contact-form__input contact-form__confirm-text">
              <?php echo isset($form_data['メールアドレス']) ? esc_html($form_data['メールアドレス']) : ''; ?>
            </dd>
          </div>

          <div class="contact-form__item">
            <dt class="contact-form__label contact-form__label--column">
              <span class="contact-form__required"></span>
              <span class="contact-form__label-text">
                メールアドレス（確認用）<br>
                <span class="contact-form__label-note">※半角英数字</span>
              </span>
            </dt>
            <dd class="contact-form__input contact-form__confirm-text">
              <?php echo isset($form_data['メールアドレス確認用']) ? esc_html($form_data['メールアドレス確認用']) : ''; ?>
            </dd>
          </div>

          <div class="contact-form__item">
            <dt class="contact-form__label"><span class="contact-form__required"></span>電話番号</dt>
            <dd class="contact-form__input contact-form__confirm-text">
              <?php echo isset($form_data['電話番号']) ? esc_html($form_data['電話番号']) : ''; ?>
            </dd>
          </div>

          <div class="contact-form__item contact-form__item--textarea">
            <dt class="contact-form__label"><span class="contact-form__required"></span>お問い合わせ内容</dt>
            <dd class="contact-form__input contact-form__confirm-text">
              <?php echo isset($form_data['お問い合わせ内容']) ? wp_kses_post(nl2br(esc_html($form_data['お問い合わせ内容']))) : ''; ?>
            </dd>
          </div>
        </dl>

        <div class="contact-form__confirm-submit">
          <div class="contact-form__confirm-submit-back-btn"><button class="contact-form__confirm-submit-back"
              type="button" onclick="history.back()">戻る</button></div>
          <div class="contact-form__confirm-submit-btn"><button class="contact-form__submit-btn" type="submit">送信</button></div>
        </div>
      </form>
      <?php
      } else {
        wp_redirect(home_url('/contact'));
        exit;
      }
      ?>
    </div>
  </section>

  <div class="contact-form__btn">
        <a href="<?php echo HOME_URL; ?>" class="link-btn02">
          ページトップへ
        </a>
      </div>

</main>

<?php get_footer(); ?>