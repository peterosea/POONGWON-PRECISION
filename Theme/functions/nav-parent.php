<?php

/**
 * comment
 *
 * @author       Hansanghyeon
 * @copyright    Hansanghyeon <999@hyeon.pro>
 **/

function my_menu_parent($theme_location)
{
  $locations = get_nav_menu_locations();
  if (isset($locations[$theme_location])) {
    $menu = wp_get_nav_menu_object($locations[$theme_location]);
    $menu_items = wp_get_nav_menu_items($menu->term_id);
    _wp_menu_item_classes_by_context($menu_items);
    $breadcrumbs = array();

    foreach ($menu_items as $menu_item) {
      if ($menu_item->current_item_ancestor) {
        $breadcrumbs[] = $menu_item->title;
      }
    }

    return $breadcrumbs;
  }
}