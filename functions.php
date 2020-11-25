<?php

/**
 * Template Name: Wordpressの機能の設定ファイル
 */
?>
<?php
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


// add_theme_support('post-thumbnails');
// add_filter( 'show_admin_bar', '__return_false' );
// function twpp_enqueue_scripts() {
//   wp_enqueue_script(
//     'main-script',
//     get_template_directory_uri() . '/js/header_hum.js',
//     false,
//     true
//   );
// }

// add_action( 'wp_enqueue_scripts', 'twpp_enqueue_scripts' );

// function foo_pop($trail)
// {
// {
// array_shift($trail->trail);
// }
// }
// add_action('bcn_after_fill', 'foo_pop');
?>