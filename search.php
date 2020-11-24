<?php get_header(); ?>
<?php $value = get_query_var("s" );
?>

<!-- メインページ部分 -->
<div class="main">

  <div class="artcles_index">
    <p id="index">ARTICLES / SEARCH</p>
    <p><span style="font-weight: 600;font-size: 15px;">検索結果</span>"<?php echo $value ?>"の検索結果</p>
  </div>
  <!-- 記事一覧開始 -->
  <?php //query_posts('posts_per_page=4'); ?>

  <?php if (have_posts()) :?>

    <div id="content_main">
      <?php
      while (have_posts()) :
        the_post();
        ?>
		<?php get_template_part('article'); ?>

        <?php endwhile;?>
      </div>
      <!-- 記事一覧終わり -->

      <div id="pagenation">

        <?php the_posts_pagination(array(
          'mid_size' => 2,
          'prev_text'           => '＜',
          'next_text'           => '＞',
          'screen_reader_text'  => ' ',));  ?>

        </div>
      <?php else : ?>
	<div class="no_article_box">
        <p>投稿記事はありません</p>		
	</div>

      <?php endif; ?>
      <!--ページ送り-->
    </div>

    <!-- メインページ部分ここまで -->
    <?php get_footer(); ?>
