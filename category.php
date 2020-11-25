<?php
/*
Template Name:　カテゴリページ
*/
?>
<?php get_header(); ?>
<?php $category_id = get_query_var("cat");
$category = get_category($category_id);
?>

カテゴリ：<?php echo $category->cat_name ?>"の記事
<?php //記事数を指定する場合
// query_posts($query_string.'&posts_per_page=12'); 
?>

<!-- 記事一覧開始 -->
<?php if (have_posts()) : ?>
  <?php
  while (have_posts()) :
    the_post();
  ?>
    <?php get_template_part('parts/article'); ?>
  <?php endwhile; ?>
  <!-- 記事一覧終わり -->


  <!-- ページネーション -->
  <?php get_template_part('parts/pagination'); ?>
<?php else : ?>
  <p>投稿記事はありません</p>
<?php endif; ?>
<!--ページ送り-->

<!-- メインページ部分ここまで -->
<?php get_footer(); ?>