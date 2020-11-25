<?php

/**
 * Template Name: 記事一覧ページ
 */
?>

<?php //記事数を指定する場合
// query_posts($query_string.'&posts_per_page=12'); 
?>

<?php if (have_posts()) : ?>
  <!-- 記事一覧開始 -->
  <?php
  while (have_posts()) :
    the_post();
  ?>
    <!-- 記事を表示 -->
    <?php get_template_part('assets/template/parts/_article'); ?>
  <?php endwhile; ?>
  <!-- 記事一覧終わり -->

  <!-- ページネーション -->
  <?php get_template_part('assets/template/parts/_pagination'); ?>
<?php else : ?>
  <p>投稿記事はありません</p>
<?php endif; ?>