<?php

/**
 * ACF Options 활성화
 *
 * @author       Hansanghyeon
 * @copyright    Hansanghyeon <999@hyeon.pro>
 **/

if (function_exists('acf_add_options_sub_page')) {
  acf_add_options_sub_page(array(
    'page_title'   => 'history',
    'menu_title'   => 'history',
    'parent_slug'  => 'edit.php?post_type=history',
  ));
  acf_add_options_sub_page(array(
    'page_title'   => 'press',
    'menu_title'   => 'press',
    'parent_slug'  => 'edit.php?post_type=press',
  ));
}
