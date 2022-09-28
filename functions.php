<?php 
  // アイキャッチ画像を利用できるようにする
  add_theme_support('post-thumbnails');

  // jqueryを無効化
  function delete_jquery() {
    if (!is_admin()) {
      wp_deregister_script('jquery');
    }
  }
  add_action('init', 'delete_jquery');
?>