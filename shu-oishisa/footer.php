<button class="to-top" aria-label="トップへ移動">
  <div class="to-top__inner">
    <span class="to-top__icon"></span>
    <span class="to-top__text">Top</span>
  </div>
</button>

<div class="cta-btn">
  <a href="<?php echo WHOLESALE_OEM_URL; ?>" class="cta-button__link">
    <span class="cta-btn__text">卸販売 / OEM</span>
    <span class="cta-btn__icon"></span>
  </a>
</div>

<div class="footer-wrapper">
  <footer class="footer">
    <img src="<?php echo IMAGEPATH; ?>/common/footer-bg.svg" alt="" aria-hidden="true" width="1366" height="60"
      loading="lazy" class="footer__bg-img footer__bg-img--pc">
    <img src="<?php echo IMAGEPATH; ?>/common/footer-bg-sp.svg" alt="" aria-hidden="true" width="390" height="50"
      loading="lazy" class="footer__bg-img footer__bg-img--sp">
    <div class="footer__inner">
  
      <a href="<?php echo HOME_URL; ?>" class="footer__logo">
        <img src="<?php echo IMAGEPATH; ?>/common/logo.webp" alt="餃子の秀のロゴマーク" width="156.944" height="51.828"
          loading="lazy" class="footer__img">
      </a>
  
      <nav class="footer-nav" aria-label="フッターナビゲーション">
        <ul class="footer-nav__list">
          <li class="footer-nav__item"><a href="<?php echo GYOZA_URL; ?>" class="footer-nav__link">本気の餃子づくり</a></li>
          <li class="footer-nav__item"><a href="<?php echo PRODUCTS_URL; ?>" class="footer-nav__link">商品一覧</a></li>
          <li class="footer-nav__item"><a href="<?php echo TENPOANNAI_URL; ?>" class="footer-nav__link">店舗案内</a></li>
          <li class="footer-nav__item"><a href="<?php echo WHOLESALE_OEM_URL; ?>" class="footer-nav__link">卸販売 / OEM</a>
          </li>
          <li class="footer-nav__item"><a href="<?php echo SHOP_URL; ?>" class="footer-nav__link" target="_blank" rel="noopener noreferrer">ネットショップ</a></li>
          <li class="footer-nav__item"><a href="<?php echo CONTACT_URL; ?>" class="footer-nav__link">お問い合わせ</a></li>
        </ul>
      </nav>
  
      <a href="<?php echo PRIVACY_POLICY_URL; ?>" class="footer__privacy">
        プライバシーポリシー
      </a>
  
      <small class="footer__copy">＠2026 餃子の秀 all rights reserved.</small>
  
    </div>
  </footer>
</div>

<?php wp_footer(); ?>
</body>

</html>