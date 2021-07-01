// スライダー
$(function () {
  $('.rec-slick').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: true,//オートプレイON
    speed: 1000,
    autoplaySpeed: 5000,//オートプレイスピード5秒
    arrows: false,//ボタン非表示
    centerPadding: '100px',//横切れ端の見え方
    centerMode: true
  });
});

$(function () {
  $('#nav-btn').on('click', function () {//nav-btnClassをクリックしたら
    $(this).toggleClass('-active');//-activeClassを付け外しする
    $('.nav').toggleClass('-active');//-activeClassを付け外しする


  });
});