<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/css/style.css?ver=0.6" />
  <title>泉原遥輝 | Haruki Izumihara</title>
  <!-- <?php wp_head(); ?> -->
</head>
<body>
  <div class="Container">
  <header class="Header">
    <div class="Header__inner js-Header__inner">
      <h1 class="Header__title">
        <a href="<?php echo home_url(); ?>">
          <img class="Header__logo" src="<?php echo get_theme_file_uri(); ?>/images/logo.svg" alt="ロゴ">
        </a>
      </h1>
      <!-- hamburger Menu -->
      <div class="Header__ham">
        <div class="Header__hamBtn js-Header__hamBtn">
          <span class="Header__hamBar js-Header__hamBar"></span>
          <span class="Header__hamBar js-Header__hamBar"></span>
        </div>
        <nav class="Header__hamList js-Header__hamList">
          <li class="Header__hamItem"><a href="/about" class="Header__hamLink">About</a></li>
          <li class="Header__hamItem"><a href="/notes" class="Header__hamLink">Notes</a></li>
          <li class="Header__hamItem"><a href="https://haru-haru0.com/" target="_blank" class="Header__hamLink">Blog</a></li>
        </nav>
      </div>

      <nav class="Header__nav">
        <ul class="Header__navList">
          <li class="Header__navItem"><a href="/about" class="Header__navLink">About</a></li>
          <li class="Header__navItem"><a href="/notea" class="Header__navLink">Notes</a></li>
          <li class="Header__navItem"><a href="https://haru-haru0.com/" target="_blank" class="Header__navLink">Blog</a></li>
        </ul>
      </nav>
    </div>
  </header>