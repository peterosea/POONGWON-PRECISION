<?php

// variables
$theme_url = get_stylesheet_directory();
$functions_url = get_stylesheet_directory() . '/functions';
$img_url = get_home_url() . '/wp-content/uploads';
$zeplin = get_home_url() . '/wp-content/uploads/zeplin';
get_header();
get_template_part('template-parts/header/page-archive');
?>
<main class="pageTemplate non-result">
  <div class="container text-center">
    <h1>현재 포스트가 없습니다.</h1>
  </div>
</main>
<?php
get_footer();
