<?php

/**
 * Template Name: 홈페이지
 * Template Post Type: page
 */

// variables
$theme_url = get_stylesheet_directory();
$functions_url = get_stylesheet_directory() . '/functions';
$img_url = get_home_url() . '/wp-content/uploads';
$zeplin = get_home_url() . '/wp-content/uploads/zeplin';
get_header();
?>
<main class="home">
  <?php include_once('home/section1.php') ?>
  <?php include_once('home/section2.php') ?>
  <!-- 기술 적용 제품  --><?php include_once('home/section3.php') ?>
  <?php include_once('home/section4.php') ?>
  <!-- 풍원정밀 사람들 --><?php include_once('home/section5.php') ?>
</main>
<?php
get_footer();
