<?php
/*
Template Name:　記事単体のテンプレート
*/
?>

<?php
get_header();
?>

<!-- 投稿先のリンク -->
<a href="<?php the_permalink(); ?>">
  <?php if (has_post_thumbnail()) : ?>
    <!-- アイキャッチ画像 -->
    <?php the_post_thumbnail(); ?>
  <?php else : ?>
    <!-- デフォルト画像の表示 -->
    <img src="<?php echo get_template_directory_uri(); ?>/img/default.png">
  <?php endif; ?>

  <!-- タイトル -->
  <?php the_title(); ?>

  <!-- 投稿日 -->
  <?php echo get_the_date(); ?>
  <!-- 文章テキストを表示 -->
  <?php
  if (mb_strlen($post->post_content, 'UTF-8') > 30) {
    $content = mb_substr(strip_tags($post->post_content), 0, 30, 'UTF-8');
    echo $content . '……';
  } else {
    echo strip_tags($post->post_content);
  }
  ?>
</a>

<!-- カテゴリを表示 -->
<?php
$categorys = get_the_category();
if ($categorys) :
  foreach ($categorys as $category) : ?>
    <?php echo '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>';
    ?> <?php endforeach; ?>
<?php else : ?>
  <a href="#">カテゴリはありません</a>
<?php endif; ?>

<!-- タグを表示 -->
<?php
$tags = get_the_tags();
if ($tags) :
  foreach ($tags as $tag) : ?>
    <?php echo '<a href="' . get_category_link($tag->term_id) . '">' . "#" . $tag->name . '</a>';
    ?> <?php endforeach; ?>
<?php else : ?>
  <a href="#">タグはまだありません</a>
<?php endif; ?>


<?php get_footer(); ?>