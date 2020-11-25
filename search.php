<?php get_header(); ?>
<?php $value = get_query_var("s"); ?>

検索結果：<?php echo $value ?>"の検索結果

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
    <?php get_template_part('parts/article'); ?>
  <?php endwhile; ?>
  <!-- 記事一覧終わり -->

  <?php get_template_part('parts/pagination'); ?>
<?php else : ?>
  <div class="no_article_box">
    <p>投稿記事はありません</p>
  </div>

<?php endif; ?>
<!--ページ送り-->
</div>

<!-- メインページ部分ここまで -->
<?php get_footer(); ?>