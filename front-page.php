<h1>トップページです</h1>

<?php
while (have_posts()) :
  the_post();
?>
  <!-- 記事単体 -->
  <?php get_template_part('article'); ?>

<?php endwhile; ?>

<?php the_posts_pagination(array(
  'mid_size' => 2,
  'prev_text'           => '＜',
  'next_text'           => '＞',
  'screen_reader_text'  => ' ',
));  ?>