<?php
/*
Template Name:　カテゴリページ
*/
get_header();
?>
<?php $category_id = get_query_var("cat");
$category = get_category($category_id);
?>

カテゴリ：<?php echo $category->cat_name ?>"の記事
<?php //記事数を指定する場合
// query_posts($query_string.'&posts_per_page=12'); 
?>

<!-- 記事一覧の表示 -->
<?php get_template_part('assets/template/article_index'); ?>


<!-- メインページ部分ここまで -->
<?php get_footer(); ?>