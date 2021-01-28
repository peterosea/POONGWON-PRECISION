<?php

/**
 * Template Name: 템플릿_이름
 * Template Post Type: 템플릿_타입
 */


// variables
$theme_url = get_stylesheet_directory();
$functions_url = get_stylesheet_directory() . '/functions';
$img_url = get_home_url() . '/wp-content/uploads';
$zeplin = get_home_url() . '/wp-content/uploads/zeplin';
get_header();
get_template_part('template-parts/header/page');
?>
<main class="pageTemplate">
  <div class="section section1">

  </div>
</main>
<?php
get_footer();
