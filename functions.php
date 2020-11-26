<?php

/**
 * Template Name: Wordpressの機能の設定ファイル
 */
?>
<?php

// タイトルのカスタマイズ
function wp_document_title_parts($title)
{
  if (is_home() || is_front_page()) {
    unset($title['tagline']); // キャッチフレーズを出力しない
  } else if (is_category()) {
    $title['title'] = '「' . $title['title'] . '」カテゴリーの記事一覧';
  } else if (is_tag()) {
    $title['title'] = '「' . $title['title'] . '」タグの記事一覧';
  } else if (is_archive()) {
    $title['title'] = $title['title'] . 'の記事一覧';
  }
  return $title;
}

add_filter('document_title_parts', 'wp_document_title_parts', 10, 1);
add_theme_support('title-tag');
// タイトルのカスタマイズここまで

function sng_register_sidebars()
{
  //メインのサイドバー
  register_sidebar(array(
    'id' => 'sidebar1',
    'name' => 'サイドバー',
    'description' => 'メインのサイドバーです。',
    'before_widget' => '<div id="" class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
  ));
} //END sng_register_sidebars

?>