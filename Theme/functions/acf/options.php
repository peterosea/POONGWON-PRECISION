<?php

/**
 * ACF Options 활성화
 *
 * @author       Hansanghyeon
 * @copyright    Hansanghyeon <999@hyeon.pro>
 **/

if (function_exists('acf_add_options_sub_page')) {
  // 회사소개 > 연혁
  acf_add_options_sub_page(array(
    'page_title'   => 'history',
    'menu_title'   => 'history',
    'parent_slug'  => 'edit.php?post_type=history',
  ));
   // 홍보센터 > 풍원정밀 소식
   acf_add_options_sub_page(array(
    'page_title'   => 'news',
    'menu_title'   => 'news',
    'parent_slug'  => 'edit.php?post_type=news',
  ));
  // 홍보센터 > 공시정보
  acf_add_options_sub_page(array(
    'page_title'   => 'public_disclosure_in',
    'menu_title'   => 'public_disclosure_in',
    'parent_slug'  => 'edit.php?post_type=public_disclosure_in',
  ));
  // 홍보센터 > 보도자료
  acf_add_options_sub_page(array(
    'page_title'   => 'press',
    'menu_title'   => 'press',
    'parent_slug'  => 'edit.php?post_type=press',
  ));
  // 인재채용 > 복리후생
  acf_add_options_sub_page(array(
    'page_title'   => 'benefits',
    'menu_title'   => 'benefits',
    'parent_slug'  => 'edit.php?post_type=benefits',
  ));
  // 인재채용 > 채용공고
  acf_add_options_sub_page(array(
    'page_title'   => 'recruitment',
    'menu_title'   => 'recruitment',
    'parent_slug'  => 'edit.php?post_type=recruitment',
  ));
}
