<?php get_header(); ?>

<!-- メインページ部分 -->
<div class="main">
	<div class="artcles_index">
		<p id="index">ARTICLES / ALL</p>
		<p>すべての記事</p>
	</div>
	<!-- 記事一覧開始 -->
	<?php if (have_posts()) :?>

	<div id="content_main">
		<?php
		while (have_posts()) :
			the_post();
			?>
			<!-- 記事単体 -->
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
			<p>投稿記事はありません</p>

		<?php endif; ?>
		<!--ページ送り-->
	</div>

	<!-- メインページ部分ここまで -->
	<?php get_footer(); ?>
