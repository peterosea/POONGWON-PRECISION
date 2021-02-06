<?php

/**
 * Archive 템플릿 지정
 *
 * @author       Hansanghyeon
 * @copyright    Hansanghyeon <999@hyeon.pro>
 **/

function get_new_archive_template($archive_template)
{
  global $post;
  if ($post->post_type === 'history') {
    $archive_template = get_stylesheet_directory() . '/template-archive/history.php';
  }
  if ($post->post_type === 'press') {
    $archive_template = get_stylesheet_directory() . '/template-archive/press.php';
  }
  return $archive_template;
}
add_filter('archive_template', 'get_new_archive_template');
