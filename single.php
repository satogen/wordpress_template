<?php
/*
Template Name:　投稿ページ
*/
?>

<?php
get_header();
?>


<div class="main">
  <?php
  if (have_posts()) :
    while (have_posts()) :
      the_post();
  ?>
      <?php
      if (function_exists('bcn_display')) {
        bcn_display();
      }
      ?>

      <!-- sns アイコン -->
      <?php
      $url_encode = urlencode(get_permalink());
      $title_encode = urlencode(get_the_title()) . '｜' . get_bloginfo('name');
      ?>
      <!-- 	sns_icon編集 -->
      <div class="sns_icon">
        <ul class="nav">
          <!-- 			  <li class='sns_title'>Share</li> -->
          <li><a href="//www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode; ?>&t=<?php echo $title_encode; ?>" class="btn-social-circle btn-social-circle-facebook"><i class="fab fa-facebook-f " width="50" height="50"></i></a></li>
          <li><a href="//twitter.com/intent/tweet?url=<?php echo $url_encode ?>&text=<?php echo $title_encode ?>&tw_p=tweetbutton" class="btn-social-circle btn-social-circle-twitter"><i class="fab fa-twitter"></i></a></li>
          <!-- 			  <li><a href="#"><img  src="<?php echo get_template_directory_uri(); ?>/img/icon-instagram-circle-color.png" width="50" 								height="50" class="insta_logo"/></a></li> -->
          <li><a href="//social-plugins.line.me/lineit/share?url=<?php echo $url_encode; ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/LINE_SOCIAL_Circle.png" width="50" height="50" class="line_logo" /></a></li>
        </ul>
      </div>


      <div class="main_photo">
        <!-- サムネイルの表示 -->
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail(); ?>
        <?php else : ?>
          <img src="<?php echo get_template_directory_uri(); ?>/img/default.png">
        <?php endif; ?>
      </div>

      <!-- タイトルの表示 -->
      <?php the_title(); ?>

      <!-- タグの表示 -->
      <?php
      $tags = get_the_tags();
      if ($tags) :
        foreach ($tags as $tag) : ?>
          <?php echo '<a href="' . get_category_link($tag->term_id) . '">' . "#" . $tag->name . '</a>';
          ?> <?php endforeach; ?>
      <?php else : ?>
      <?php endif; ?>

      <!-- 時刻の表示 -->
      <?php echo get_the_date(); ?>

      <!-- 本文表示 -->
      <?php the_content(); ?>


      <div class="sns_icon_i">
        <ul class="nav_i">
          <li><a href="#" class="btn-social-circle btn-social-circle-facebook"><i class="fab fa-facebook-f " width="50" height="50"></i></a></li>
          <li><a href="#" class="btn-social-circle btn-social-circle-twitter"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-instagram-circle-color.png" width="50" height="50" class="insta_logo" /></a></li>
          <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/LINE_SOCIAL_Circle.png" width="50" height="50" class="line_logo" /></a></li>
        </ul>
      </div>
</div>
</div>

<!-- 	sns_icon_res編集 -->

<!-- 	sns_icon_res編集 -->


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

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>