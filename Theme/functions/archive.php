<?php

/**
 * Archive 템플릿 지정
 *
 * @author       Hansanghyeon
 * @copyright    Hansanghyeon <999@hyeon.pro>
 **/

function get_new_archive_template($archive_template)
{
  $archive_template = get_stylesheet_directory() . '/template-archive/history.php';
  return $archive_template;
}
add_filter('archive_template', 'get_new_archive_template');
