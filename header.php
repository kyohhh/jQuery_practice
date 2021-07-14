<!DOCTYPE html>
<html <?php language_attributes();//html要素のlang属性を出力 ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); //文字エンコーディング情報を出力 ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- noindex設定 -->
    <meta name="robots" content="noindex">

    <title><?php wp_title('|', true, 'right' );//ページタイトル出力 ?><?php bloginfo('name');//サイト名を表示 ?></title>

    <!-- slick導入 -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri();//使用中テーマのスタイルシートURLを出力 ?>">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' );//ピングバックURL出力 ?>">

    <!-- wow.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- jquery導入 -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- slick導入 -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- script.jsの反映 -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>

    <?php wp_head();//テーマの</head>直前に必ず挿入します ?>
</head>

<body <?php body_class();//bodyタグにページの種類に応じたクラス名を与える?>>
    <!-- ヘッダー -->
    <header class="header">
        <div class="header-fixed">
            <h1 class="header-logo"><img src="<?php echo get_template_directory_uri(); ?>/image/logo.png" alt="極楽亭"></h1>
            <button class="nav-btn" id="nav-btn" type="button"
                aria-label="メニュー"><span></span><span></span><span></span></button>
        </div>
        <div class="nav header-nav" id='nav'>
            <nav class="nav-warp">
                <ul class="nav-list">
                    <li class="item"><a href="#">宿泊予約</a></li>
                    <li class="item"><a href="#">観光情報</a></li>
                    <li class="item"><a href="#">よくあるご質問</a></li>
                    <li class="item"><a href="<?php echo home_url( '/contact/' ); ?>">お問い合わせ</a></li>
                </ul>
            </nav>
        </div>
    </header>