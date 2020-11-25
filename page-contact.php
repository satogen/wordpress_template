<?php
/*
Template Name: お問い合わせページ
*/
?>
<?php get_header(); ?>
<!-- 固定ページ用のページ -->
<h1>お問い合わせ</h1>
<?php echo apply_filters('the_content', '[contact-form-7 id="151" title="mimakuru-lab"]'); ?>
<?php get_footer(); ?>