<?php
/*
Template Name:　タグ絞り込み結果
*/
get_header();
?>

<?php //記事数を指定する場合
// query_posts($query_string.'&posts_per_page=12'); 
?>

<!-- 記事一覧の表示 -->
<?php get_template_part('assets/template/article_index'); ?>


<!-- メインページ部分ここまで -->
<?php get_footer(); ?>