<h1>トップページです</h1>

<?php
while (have_posts()) :
  the_post();
?>
  <!-- 記事単体 -->
  <?php get_template_part('parts/article'); ?>

<?php endwhile; ?>
<?php get_template_part('parts/pagination'); ?>