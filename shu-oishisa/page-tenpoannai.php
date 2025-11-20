<?php
/*
Template Name: 店舗案内
*/
?>

<?php get_header(); ?>

<main>

  <section class="sub-mv">
    <h1 class="sub-mv__title">店舗案内</h1>
  </section>

  <section class="tenpoannai">
      <div class="tenpoannai__info">
        <div class="tenpoannai__photos">
          <div class="tenpoannai__img-wrap">
            <picture>
              <source srcset="<?php echo IMAGEPATH; ?>/tenpoannai/tenpoannai01-sp.webp" media="(max-width: 767px)" type="image/webp" width="350" height="216">
              <img src="<?php echo IMAGEPATH; ?>/tenpoannai/tenpoannai01.webp" alt="餃子の秀の店舗外観の写真" width="518" height="247" class="tenpoannai__img">
            </picture>
          </div>
          <div class="tenpoannai__img-wrap">
            <picture>
              <source srcset="<?php echo IMAGEPATH; ?>/tenpoannai/tenpoannai02-sp.webp" media="(max-width: 767px)" type="image/webp" width="350" height="216">
              <img src="<?php echo IMAGEPATH; ?>/tenpoannai/tenpoannai02.webp" alt="店内の冷凍ショーケースの写真" width="518" height="247" class="tenpoannai__img">
            </picture>
          </div>
        </div>

          <dl class="tenpoannai__list">
            <div class="tenpoannai__row">
              <dt class="tenpoannai__term">●店舗名</dt>
              <dd class="tenpoannai__desc">餃子の秀</dd>
            </div>
            <div class="tenpoannai__row">
              <dt class="tenpoannai__term">●住所</dt>
              <dd class="tenpoannai__desc">〒438-0834　静岡県磐田市森下106-1</dd>
            </div>
            <div class="tenpoannai__row">
              <dt class="tenpoannai__term">●電話番号</dt>
              <dd class="tenpoannai__desc"><a href="tel:0538-33-5888">0538-33-5888</a></dd>
            </div>
            <div class="tenpoannai__row">
              <dt class="tenpoannai__term">●営業時間</dt>
              <dd class="tenpoannai__desc">9:00～18:00【定休日：日曜日】<br>※商品がなくなり次第終了させていただきます。</dd>
            </div>
            <div class="tenpoannai__row">
              <dt class="tenpoannai__term">●本社</dt>
              <dd class="tenpoannai__desc">
              株式会社ヤマセイ<br>〒438-0834　静岡県磐田市森下106-2
              </dd>
            </div>
            <div class="tenpoannai__row">
              <dt class="tenpoannai__term">●代表者</dt>
              <dd class="tenpoannai__desc">伊藤 旨広</dd>
            </div>
          </dl>
      </div>
      <div class="tenpoannai__inner">
      <div class="tenpoannai__map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.3125034857135!2d137.82535289999998!3d34.7225165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601ae7039619e9c9%3A0x828cece372bf1a04!2z5bel5aC055u05aOy6aSD5a2Q56eA!5e0!3m2!1sja!2sjp!4v1763244991831!5m2!1sja!2sjp" width="902" height="552" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="tenpoannai__sdgs">
        <a href="<?php echo PDFPATH; ?>/CompanyProfile_SDGs.pdf" class="tenpoannai__sdgs-link" target="_blank" rel="noopener noreferrer">
          <div class="tenpoannai__sdgs-label">
            <span class="tenpoannai__sdgs-label-text">SDGsへの<br>取り組み</span>
          </div>
          <div class="tenpoannai__sdgs-btn-wrap">
            <p class="link-btn">詳細を見る</p>
          </div>
        </a>
      </div>

      <div class="tenpoannai__selection">
        <p class="tenpoannai__selection-title">●セレクション</p>
        <p class="tenpoannai__selection-desc">地域経済や日本経済の成長への貢献が期待できる「はばたく中小企業300選」に選ばれました。</p>
        <div class="tenpoannai__selection-img-wrap">
            <img src="<?php echo IMAGEPATH; ?>/tenpoannai/tenpoannai-selection.webp" alt="「はばたく中小企業300選」の証明書の写真" width="332" height="469" loading="lazy" class="tenpoannai__selection-img">
        </div>
      </div>

      <div class="tenpoannai__btn">
        <a href="<?php echo HOME_URL; ?>" class="link-btn02">ページトップへ</a>
      </div>

    </div>
  </section>

</main>

<?php get_footer(); ?>

