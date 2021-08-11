<!DOCTYPE html>
<html <?php language_attributes(); //html要素のlang属性を出力
        ?>>

<head>

    <?php get_header(); //header.phpを取得
    ?>

</head>

<body <?php body_class(); //bodyタグにページの種類に応じたクラス名を与える
        ?>>
    <!-- ヘッダー -->
    <header class="header">
        <div class="header-fixed">
            <h1 class="header-logo"><img src="<?php echo get_template_directory_uri(); ?>/image/logo.png" alt="極楽亭"></h1>
            <button class="nav-btn" id="nav-btn" type="button" aria-label="メニュー"><span></span><span></span><span></span></button>
        </div>
        <div class="nav header-nav" id='nav'>
            <nav class="nav-warp">
                <ul class="nav-list">
                    <li class="item"><a href="#">宿泊予約</a></li>
                    <li class="item"><a href="#">観光情報</a></li>
                    <li class="item"><a href="#">よくあるご質問</a></li>
                    <li class="item"><a href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a></li>
                </ul>
            </nav>
        </div>
    </header>

  <div class="inquiry-image"></div>
  <div class="breadcrumb">
    <ul class="breadcrumb-list">
      <?php mytheme_breadcrumb(); //パンくずナビ ?>
    </ul>
  </div>
  <section class="inquiry cmn-section -black">
    <?php while ( have_posts() ) { ?>
      <h2 class="cmn-title">
      <?php the_title(); //投稿（固定ページ）のタイトルを表示 ?></h2>
      <?php the_post(); ?>
      <div class="content"><?php the_content(); ?></div>
    <?php } ?>
  </section>
<?php get_footer(); ?>

</body>

</html>