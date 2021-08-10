<?php
/*
Template Name: 問い合わせ
*/
?>

<?php get_header(); ?>

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
<?php get_footer();