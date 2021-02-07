<?php

/**
 * 각 포스트타입 단일 포스트 상세페이지 템플릿 설정
 *
 * @author       Hansanghyeon
 * @copyright    Hansanghyeon <999@hyeon.pro>
 **/

function get_new_single_template($single_template)
{
  global $post;
  if ('press' === $post->post_type) {
    $single_template =  get_stylesheet_directory() . '/template-single/press.php';
  }
  if ('public_disclosure_in' === $post->post_type) {
    $single_template = get_stylesheet_directory() . '/template-single/publicDisclosureIn.php';
  }
  if ('news' === $post->post_type) {
    $single_template = get_stylesheet_directory() . '/template-single/news.php';
  }
  if ('facilityplantintrodu' === $post->post_type) {
    $single_template = get_stylesheet_directory() . '/template-single/facilityPlantIntrodu.php';
  }
  if ('recruitment' === $post->post_type) {
    $single_template = get_stylesheet_directory() . '/template-single/recruitment.php';
  }
  return $single_template;
}
add_filter('single_template', 'get_new_single_template');
