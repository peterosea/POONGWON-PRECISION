<?php
// variables
$theme_url = get_stylesheet_directory();
$functions_url = get_stylesheet_directory() . '/functions';
$img_url = get_home_url() . '/wp-content/uploads';
get_header();
get_template_part('template-parts/header/page-archive');
?>
<main class="pageTemplate recruitment">
  <div class="section section1">
    <div class="container">
      <?php get_template_part('template-parts/board/recruitment') ?>
    </div>
  </div>
</main>
<?php
get_footer();
