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

    <!-- メイン -->
    <main>
        <!-- トップ画像 -->
        <div class="top">
            <div class="top-title">祇園の中心に佇む<br>京の極楽浄土</div>
        </div>
        <div class="breadcrumb">
            <ul class="breadcrumb-list">
                <?php mytheme_breadcrumb(); //パンくずナビ
                ?>
            </ul>
        </div>
        <!-- 本館の特徴 -->
        <section class="features cmn-section -black">
            <div class="inner wow animate_animated animate_fadeIn">
                <h2 class="cmn-title">
                    <span class="main">本館の特徴</span>
                    <span class="sub">features</span>
                </h2>
                <div class="features-cont">
                    <ul class="features-list">
                        <li class="features-item wow animate_animated animate_fadeIn" data-wow-offset="100">
                            <div class="text">
                                <div class="title">
                                    京都文化の粋と<br>英国文化の伝統が調和したホテル。
                                </div>
                                <p class="desc">イングランド北方のスコットランドのアーツ＆クラフトと古都エジン バラをテーマにデザインされています。京都とエジンバラは姉妹都市
                                    であるばかりでなく古い街並や伝統的な生活、文化などヨーロッパと アジアの美しい古都として非常に似ています。デザインは共通の工芸 に関わる文化をテーマに構成しています。
                                </p>
                                <div class="features-link cmn-link"><a href="#">お部屋の詳細</a></div>
                            </div>
                            <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/image/feature-item01.png" alt=""></div>
                        </li>
                        <li class="features-item wow animate_animated animate_fadeIn" data-wow-offset="100">
                            <div class="text">
                                <div class="title">
                                    京都ならではの季節の味覚をみなさまに。<br>丁寧に作りあげた逸品に舌鼓。 </div>
                                <p class="desc">京都の街並みを思わせるような日本料理「風風堂」、英国の伝統ある 邸宅の書斎がモチーフとしたカフェ「ライブラリー」。極楽亭で過ご
                                    す時間をもっとラグジュアリーなひとときに。京都ならではの食材を 使った料理は、今この時しか味わえない逸品。昼下がりにカフェでの んびりと読書してみるのもおすすめ。
                                </p>
                                <div class="features-link cmn-link"><a href="#">コース料理の詳細</a></div>
                            </div>
                            <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/image/feature-item02.png" alt=""></div>
                        </li>
                        <li class="features-item wow animate_animated animate_fadeIn" data-wow-offset="100">
                            <div class="text">
                                <div class="title">
                                    五感を癒す。<br>天然温泉から美と活力を。
                                </div>
                                <p class="desc">京の極楽の最上階にある「スパ・ゴクラク」。湧き上がる天然温泉の 恵みで細胞内のバランスを整え新陳代謝を向上させてくれます。大い
                                    なる自然を感じながらリラックスすれば、身体の奥から元気が蘇って くるでしょう。京都らしい和のテイストを取り入れた五感を癒すペン
                                    トハウススパ。心と体のリフレッシュに最適です。</p>
                                <div class="features-link cmn-link"><a href="#">温泉の詳細</a></div>
                            </div>
                            <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/image/feature-item03.png" alt=""></div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- おすすめプラン -->
        <section class="plan cmn-section -black">
            <div class="inner wow animate_animated animate_fadeIn">
                <h2 class="cmn-title">
                    <span class="main">おすすめプラン</span>
                    <span class="sub">recommend plan</span>
                </h2>
                <div class="rec service">
                    <div class="rec-slick rec-list" id="rec-slick">
                        <div class="rec-item">
                            <div class="text">
                                <div class="title">温泉で湯ったりポカポカプラン＜朝食 選択可＞</div>
                                <div class="price">お値段：<span>6000円 </span>/ 人</div>
                            </div>
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/rec-plan01.png" alt="">
                            </div>
                        </div>
                        <div class="rec-item">
                            <div class="text">
                                <div class="title">【ケーキセット】選べるケーキお飲物 のセット！</div>
                                <div class="price">お値段：<span>2000円 </span>/ 人</div>
                            </div>
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/rec-plan02.png" alt="">
                            </div>
                        </div>
                        <div class="rec-item">
                            <div class="text">
                                <div class="title">バータイム「2DRINKSプラン」選べる ドリンク2杯におつまみが付いたプラン</div>
                                <div class="price">お値段：<span>8000円 </span>/ 人</div>
                            </div>
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/rec-plan03.png" alt="">
                            </div>
                        </div>
                        <div class="rec-item">
                            <div class="text">
                                <div class="title">【リモート宴会プラン】京の極楽から シェフ厳選メニューをご提供！</div>
                                <div class="price">お値段：<span>6000円 </span>/ 人</div>
                            </div>
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/rec-plan04.png" alt="">
                            </div>
                        </div>
                        <div class="rec-item">
                            <div class="text">
                                <div class="title">【数量限定】季節の会席とミニボトル のドリンク付きプラン</div>
                                <div class="price">お値段：<span>8000円 </span>/ 人</div>
                            </div>
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/rec-plan05.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="service-warp">
                        <ul class="service-list">
                            <li class="service-item">
                                <div class="text">
                                    <div class="title">最低価格保証</div>
                                    <p class="desc">極楽亭の公式ホームページでのご宿泊料金 は、どの予約サイトよりも最低価格である ことをお約束いたします。</p>
                                </div>
                                <div class="image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/service-item01.png" alt="">
                                </div>
                            </li>
                            <li class="service-item">
                                <div class="text">
                                    <div class="title">全客室Wi-Fi無料</div>
                                    <p class="desc">ロビー・客室フロアに無線LANアクセスポ イントを設置し、各客室内でもWi-Fi接続 によるインターネットを利用できる環境を
                                        構築しています。</p>
                                </div>
                                <div class="image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/service-item02.png" alt="">
                                </div>
                            </li>
                            <li class="service-item">
                                <div class="text">
                                    <div class="title">会員限定料金</div>
                                    <p class="desc">会員の方は、会員料金でご宿泊いただける ほか、オンラインクーポンなどの限定メニ ューもご利用いただけます。</p>
                                </div>
                                <div class="image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/service-item03.png" alt="">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- ブログ -->
        <section class="blog cmn-section -black">
            <div class="inner wow animate_animated animate_fadeIn">
                <h2 class="cmn-title">
                    <span class="main">ブログ</span>
                    <span class="sub">blog</span>
                </h2>
                <div class="blog-cont">
                    <dl class="blog-list">
                        <div class="row">
                            <dt>お知らせ</dt>
                            <dd><a href="#">2021年4月より、極楽亭に新たに宴会場「風の間」が新設されました。</a></dd>
                        </div>
                        <div class="row">
                            <dt>お知らせ</dt>
                            <dd><a href="#">2021年5月より、極楽亭の別館が開館します！こちらも予約を随時、受付けておりま す。</a></dd>
                        </div>
                        <div class="row">
                            <dt>採用</dt>
                            <dd><a href="#">2021年度の採用募集を開始いたしました。一緒に極楽亭を盛り上げていきませんか？</a></dd>
                        </div>
                        <div class="row">
                            <dt>お知らせ</dt>
                            <dd><a href="#">2021年2月20日、極楽亭の創業50年を迎えました。</a></dd>
                        </div>
                        <div class="row">
                            <dt>イベント</dt>
                            <dd><a href="#">2020年12月25日までクリスマスフェア開催中です！出来立てのお料理を絶景とともに お愉しみいただけます。</a></dd>
                        </div>
                    </dl>
                    <div class="blog-link cmn-link"><a href="#">もっと見る</a></div>
                </div>

            </div>
        </section>
        <!-- FAQ -->
        <section class="faq cmn-section -black">
            <div class="inner wow animate_animated animate_fadeIn">
                <h2 class="cmn-title">
                    <span class="main">よくある質問</span>
                    <span class="sub -faq">faq</span>
                </h2>
                <div class="faq-cont">
                    <ul class="faq-list">
                        <li class="faq-item">
                            <a href="javascript:void(0)" class="title js-accordion">
                                <p>Q. チェックイン、チェクアウトの時間は何時ですか？</p>
                            </a>
                            <div class="detail">
                                <p>A. チェックインの時間は15:00～17:00です。もし17:00を過ぎるようでしたら、ご一報を入れていただくよう
                                    お願いしております。チェックアウトの時間は翌朝10:00でございます。</p>
                            </div>
                        </li>
                        <li class="faq-item">
                            <a href="javascript:void(0)" class="title js-accordion">
                                <p>Q. 露天風呂がついたお部屋はありますか？</p>
                            </a>
                            <div class="detail">
                                <p>A. 露天風呂付のお部屋は全部で24室ございます。</p>
                            </div>
                        </li>
                        <li class="faq-item">
                            <a href="javascript:void(0)" class="title js-accordion">
                                <p>Q. ペットを連れて行きたいのですが可能ですか？</p>
                            </a>
                            <div class="detail">
                                <p>A. ペット同伴のご宿泊はお断りさせて頂いております。お車で5分ほどの場所に、一時預かりを行っているペット ハウスがございますのでそちらのご利用をお願い致します。</p>
                            </div>
                        </li>
                        <li class="faq-item">
                            <a href="javascript:void(0)" class="title js-accordion">
                                <p>Q. キャスター付きのバッグで行っても大丈夫ですか？</p>
                            </a>
                            <div class="detail">
                                <p>A. 全館畳敷きの為、キャスター付きバッグのご利用をご遠慮頂いております。お荷物は、係りの者がお部屋までお 持ち致しますのでご協力をお願い致します。</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>

    <?php get_footer();?>

</body>

</html>