<?php

/**
 * Template Name: 検索結果のページ
 */
get_header();
?>
<?php $value = get_query_var("s"); ?>

検索結果：<?php echo $value ?>"の検索結果
<?php get_template_part('assets/template/article_index'); ?>
<!-- メインページ部分ここまで -->
<?php get_footer(); ?>