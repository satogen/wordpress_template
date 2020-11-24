<?php
/*
Template Name: お問い合わせページ
*/
?>
<?php get_header(); ?>
<!-- 固定ページ用のページ -->
<main>
      <div class="contact_header">
        <h3>CONTACT</h3>
        <p>
          下記フォームにご入力下さい。<br />
          <span class="required_color">*</span>
          は入力必須項目になります。
        </p>
      </div>
      <?php echo apply_filters('the_content', '[contact-form-7 id="151" title="mimakuru-lab"]'); ?>
    </main>
    <link href="<?php echo get_template_directory_uri(); ?>/css/contact/contact.css" rel="stylesheet">
<?php get_footer(); ?>
