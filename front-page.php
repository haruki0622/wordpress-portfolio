<?php get_header(); ?>
<main class="Kv">
  <div class="Kv__inner">
    <div class="Kv__mainTitle">
      <h2 class="Kv__title"><span>シンプルな</span><br class="Kv__title -smIsBlock">本質を狙う。<br><span>だから、</span><br class="Kv__title -smIsBlock">成果が出る。</h2>
      <p class="Kv__text">フリーランスとして活動している泉原です。Web制作、LPのお仕事を請け負っています。本サイトでは実績や、スキルについて掲載しています。お気軽にお問い合わせ下さい。</p>
      <a class="Kv__link" href="/about">プロフィールを見る<img src="<?php echo get_theme_file_uri(); ?>/images/right-arrow.svg" alt="右矢印"></a>
    </div>
    <div class="Kv__imageWrap">
      <img class="Kv__image" src="<?php echo get_theme_file_uri(); ?>/images/profile.png" alt="">
    </div>
  </div>
</main> 
<div class="Features">
  <div class="Features__inner">
    <ul class="Features__list">
      <li class="Features__item">
        <div class="Features__textWrap">
          <h3 class="Features__title -pink"><span>驚き</span>を伝えて<br class="Features__title -smNone">行動に<br>つなげる</h3>
          <p class="Features__text">Webサイトの訪問者が行動につながるサイトを作成します。一切の妥協はしません。</p>
        </div>
        <div class="Features__image -large">
          <img src="<?php echo get_theme_file_uri(); ?>/images/works-5.jpg" alt="デザイン">
        </div>
      </li>
      <li class="Features__item">
        <div class="Features__textWrap">
          <h3 class="Features__title -blue"><span>理想</span>を形にするのが仕事です。</h3>
          <p class="Features__text">こんな機能が欲しい。こんなツールがあれば、嬉しい。私が解決します。</p>
        </div>
        <div class="Features__image">
          <img src="<?php echo get_theme_file_uri(); ?>/images/kouki-3.jpg" alt="コーディング">
        </div>
      </li>
      <li class="Features__item">
        <div class="Features__textWrap">
          <h3 class="Features__title -red"><span>ノーコード</span>で低コストにも対応します。</h3>
          <p class="Features__text">低コストでWebサイトの作成も可能です。目的に合わせたご提案</p>
        </div>
        <div class="Features__image">
          <img src="<?php echo get_theme_file_uri(); ?>/images/tokumotoyane.png" alt="ノーコード">
        </div>
      </li>
    </ul>
  </div>
</div>
<div class="Works">
  <div class="Works__inner">
    <ul class="Works__list">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <li class="Works__item">
          <a class="Works__link" href="<?php the_permalink() ?>">
            <div class="Works__textWrap">
              <h3 class="Works__title"><?php the_title(); ?></h3>
              <p class="Works__moreDetailBtn" href="<?php the_permalink() ?>">詳しく見る<img src="<?php echo get_theme_file_uri(); ?>/images/right-arrow.svg" alt="右矢印">
              </p>
            </div>
            <div class="Works__thumbnail">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="サムネイル画像">
            </div>
          </a>
        </li>
      <?php endwhile; endif; ?>
    </ul>
  </div>
</div>
<?php get_footer(); ?>
