<?php
/*
Template Name: お問い合わせ
*/
?>
<?php get_header(); ?>

<main>

  <section class="sub-mv">
    <h1 class="sub-mv__title">お問い合わせ</h1>
  </section>

  <section class="contact-form">
    <img src="<?php echo IMAGEPATH; ?>/contact/contact-bg.svg" alt="" aria-hidden="true" width="100%" height="auto"
      class="contact-form__bg">
    <div class="contact-form__inner">
      <p class="contact-form__intro">下記のフォームへ必要事項をご入力の上、「確認」ボタンを押してください。</p>
      <p class="contact-form__note"><span class="contact-form__required"></span>印は必須項目です。
      </p>
      <form id="contact-form" action="<?php echo esc_url(home_url('/contact-confirm')); ?>" method="post">
        <?php wp_nonce_field('contact_form_submit', 'contact_nonce'); ?>
        <dl class="contact-form__list">
          <div class="contact-form__item">
            <dt>
              <label for="company-name" class="contact-form__label"><span class="contact-form__none-required"></span>会社名</label>
            </dt>
            <dd class="contact-form__input">
              <input type="text" id="company-name" name="会社名" autocomplete="organization">
            </dd>
          </div>
          <div class="contact-form__item">
            <dt>
              <label for="name" class="contact-form__label"><span class="contact-form__required"></span>お名前（ご担当者名）</label>
            </dt>
            <dd class="contact-form__input">
              <input type="text" id="name" name="お名前" required autocomplete="name">
              <span class="error-message">この項目は必須です</span>
            </dd>
          </div>
          <div class="contact-form__item">
            <dt><label for="furigana" class="contact-form__label"><span
                  class="contact-form__required"></span>ふりがな</label>
            </dt>
            <dd class="contact-form__input">
              <input type="text" id="furigana" name="ふりがな" required autocomplete="additional-name">
              <span class="error-message">この項目は必須です</span>
            </dd>
          </div>
          <div class="contact-form__item">
            <dt class="contact-form__label--mt"><label for="email"
                class="contact-form__label contact-form__label--column"><span
                  class="contact-form__required"></span><span class="contact-form__label-text">メールアドレス<br><span
                    class="contact-form__label-note">※半角英数字</span></span></label>
            </dt>
            <dd class="contact-form__input">
              <input type="email" id="email" name="メールアドレス" required autocomplete="email">
              <span class="error-message">この項目は必須です</span>
            </dd>
          </div>
          <div class="contact-form__item">
            <dt class="contact-form__label--mt"><label for="email-confirm"
                class="contact-form__label contact-form__label--column"><span
                  class="contact-form__required"></span><span class="contact-form__label-text">メールアドレス（確認用）<br><span
                    class="contact-form__label-note">※半角英数字</span></span></label>
            </dt>
            <dd class="contact-form__input">
              <input type="email" id="email-confirm" name="メールアドレス確認用" required autocomplete="email">
              <span class="error-message">この項目は必須です</span>
              <span class="email-mismatch-error error-message">メールアドレスが一致しません</span>
            </dd>
          </div>
          <div class="contact-form__item">
            <dt><label for="phone" class="contact-form__label"><span class="contact-form__required"></span>電話番号</label>
            </dt>
            <dd class="contact-form__input">
              <input type="tel" id="phone" name="電話番号" pattern="^(\d{10}|\d{11}|\d{2,4}-\d{1,4}-\d{4})$" required
                autocomplete="tel">
              <span class="error-message">この項目は必須です</span>
            </dd>
          </div>
          <div class="contact-form__item contact-form__item--textarea">
            <dt><label for="inquiry" class="contact-form__label"><span
                  class="contact-form__required"></span>お問い合わせ内容</label></dt>
            <dd class="contact-form__input">
              <textarea id="inquiry" name="お問い合わせ内容" required></textarea>
              <span class="error-message">この項目は必須です</span>
            </dd>
          </div>
        </dl>
        <div class="contact-form__submit">
          <button class="contact-form__submit-btn" type="submit">確認</button>
        </div>
      </form>
    </div>
  </section>

  <div class="contact-form__btn">
  <a href="<?php echo HOME_URL; ?>" class="link-btn02">ページトップへ</a>
  </div>

</main>

<?php get_footer(); ?>