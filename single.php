<?php get_header(); ?>
<div class="Post">
  <div class="Post__header">
    <div class="Post__headerInner">
      <div class="Post__thumbnail">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="サムネイル画像">
      </div>
      <div class="Post__textWrap">
        <h2 class="Post__title"><?php the_title(); ?></h2>
        <div class="Post__dateWrap">
          <p class="Post__dateText">公開日:<?php the_time('Y/m/d');?></p>
          <p class="Post__dateText">更新日:<?php the_modified_date('Y/m/d') ?></p>
        </div>
      </div>
    <!-- /Post__headerInner -->
    </div>
  <!-- /Post__header -->
  </div>
  <div class="Post__body">
    <?php the_content(); ?>
  </div>
</div>
<?php get_footer(); ?>
