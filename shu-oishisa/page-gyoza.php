<?php
/*
Template Name: 本気の餃子づくり
*/
?>
<?php get_header(); ?>

<main>

  <section class="gyoza-header">
    <div class="gyoza-header__inner">
      <h1 class="gyoza-header__title">餃子の秀がこだわる<br>「3つの本気」</h1>
    </div>
  </section>

  <section class="gyoza">
    <img src="<?php echo IMAGEPATH; ?>/gyoza/gyoza-bg.svg" alt="" width="1366" height="313" aria-hidden="true" loading="lazy" class="gyoza__bg">
    <img src="<?php echo IMAGEPATH; ?>/gyoza/gyoza-bg-bottom.svg" alt="" width="1366" height="310" aria-hidden="true" loading="lazy" class="gyoza__bg-bottom">
    <div class="gyoza__inner">
      <ul class="gyoza__list">

        <li class="gyoza__item">
          <div class="gyoza__content">
            <h2 class="gyoza__title js-fade-in">素材への本気</h2>
            <p class="gyoza__text js-fade-in --delay-2">
              野菜は100％国産で、主に磐田市・浜松市の自社農場、契約農園から新鮮なまま直送仕入れています。豚肉は、畜産王国・鹿児島の温暖な気候と豊かな自然の中で育てられた、こだわりの国産豚肉を使用。その中でも特に餃子に適した厳選部位を選び、自社工場にて丁寧に挽肉加工。野菜も肉も「餃子の秀」を運営している食品加工会社、株式会社ヤマセイが加工管理しているので安心安全です。
            </p>
          </div>
          <div class="gyoza__img-wrap js-scaleImg --delay-3">
            <picture>
              <source srcset="<?php echo IMAGEPATH; ?>/gyoza/gyoza-item01-sp.webp" media="(max-width: 767px)" type="image/webp" width="350" height="214">
              <img src="<?php echo IMAGEPATH; ?>/gyoza/gyoza-item01.webp" alt="畑で収穫作業を行う3名のスタッフの写真" width="663" height="402" loading="lazy" class="gyoza__img">
            </picture>
          </div>
        </li>

        <li class="gyoza__item">
          <div class="gyoza__content">
            <h2 class="gyoza__title js-fade-in">低価格への本気</h2>
            <p class="gyoza__text js-fade-in --delay-2">
              野菜は自社農園や契約農家からの直送、豚肉も信頼できるルートからの直送仕入れにより、安定した品質を保ちながらコストを抑えることが可能です。さらに、私たちは食品加工会社として原材料の仕入れから加工・製造までをすべて自社で一貫して行う体制を整えています。中間業者を挟まない分、流通コストを削減できるため、低価格でのご提供を実現できます。
            </p>
          </div>
          <div class="gyoza__img-wrap js-scaleImg --delay-3">
            <picture>
              <source srcset="<?php echo IMAGEPATH; ?>/gyoza/gyoza-item02-sp.webp" media="(max-width: 767px)" type="image/webp" width="350" height="219">
              <img src="<?php echo IMAGEPATH; ?>/gyoza/gyoza-item02.webp" alt="新鮮な野菜と豚ひき肉を並べた調理前の食材写真" width="663" height="402" loading="lazy" class="gyoza__img">
            </picture>
          </div>
        </li>

        <li class="gyoza__item">
          <div class="gyoza__content">
            <h2 class="gyoza__title js-fade-in">美味しさへの本気</h2>
            <p class="gyoza__text js-fade-in --delay-2">
              パリッと香ばしく焼きあがる自社製のこだわりの皮が、素材の美味しさを引き立てます。柔らかいキャベツをたっぷり使い、国産にんにくの自然な甘みと新鮮な野菜の風味に加え、豚肉の旨みが溶けだすまろやかな味わいが合わさることで、栄養価が高く、タレなしでもしっかり美味しい味わいに仕上げました。
            </p>
          </div>
          <div class="gyoza__img-wrap js-scaleImg --delay-3">
            <img src="<?php echo IMAGEPATH; ?>/gyoza/gyoza-item03.webp" alt="皿に盛られた焼き目のきれいな餃子の写真" width="663" height="402" loading="lazy" class="gyoza__img">
          </div>
        </li>

      </ul>
    </div>
  </section>

  <section class="yamasei-strength">
    <div class="yamasei-strength__inner">
      <h2 class="yamasei-strength__title js-fade-in">一貫した製造体制・品質管理の強み</h2>
      <div class="yamasei-strength__img-wrap js-scaleImg">
        <img src="<?php echo IMAGEPATH; ?>/gyoza/yamasei-strength.webp" alt="食品加工会社ヤマセイの外観写真" width="659" height="400" loading="lazy" class="yamasei-strength__img">
      </div>

      <p class="yamasei-strength__text js-fade-in">
        「餃子の秀」を運営している食品加工会社、株式会社ヤマセイでは、徹底した品質管理で安全な商品を「安定価格」×「安定供給」でお届けしています。最新鋭の設備を導入しつつも、設備だけに頼らない。人の目と手も重要視し、自社品質基準に則った工程で、原料の段階から商品になるまですべての部門において安全性を最優先に考え、取り組んでいます。こうした品質管理のもと、一貫した製造体制で「餃子の秀」の餃子は作られております。
      </p>

    </div>
  </section>

  <div class="gyoza-btn">
    <a href="<?php echo HOME_URL; ?>" class="link-btn02">ページトップへ</a>
  </div>

</main>

<?php get_footer(); ?>