<?php
/*
Template Name:　おすすめタグのテンプレート
*/
?>
<div class="tag_container">
  <div class="recom_tag">
    <p><span>＃</span>おすすめのタグ</p>
  </div>
	<div class="recom_none">
    <p><span>＃</span>おすすめのタグ</p>
  </div>
</div>
  <div class="tag_box">
    <?php
    $tags = get_tags();
    if($tags):
      foreach ( $tags as $tag ):?>
      <?php	echo '<a href="'. get_category_link($tag->term_id) .'">'."#" . $tag->name . '</a>';
      ?>				<?php endforeach; ?>
    <?php else: ?>
      <a href="#">タグはまだありません</a>
    <?php endif;?>
  </div>
