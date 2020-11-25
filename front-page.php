<?php

/**
 * Template Name: トップページ
 */
get_header();
?>

<h1>トップページです</h1>

<!-- 記事一覧の表示 -->
<?php get_template_part('assets/template/article_index'); ?>

<?php get_footer(); ?>