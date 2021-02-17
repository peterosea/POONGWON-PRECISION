<?php

/**
 * comment
 *
 * @author       Hansanghyeon
 * @copyright    Hansanghyeon <999@hyeon.pro>
 **/

function GNB()
{
  get_template_part('template-parts/GNB');
}
add_action('wp_body_open', 'GNB');

function GNB_8fd30c6f_6025_4027_9a2f_dff96a4d0826_head()
{
?>
  <script src="/wp-content/themes/base/assets/headroom.js"></script>
<?php
}
add_action('wp_head', 'GNB_8fd30c6f_6025_4027_9a2f_dff96a4d0826_head');

function GNB_8fd30c6f_6025_4027_9a2f_dff96a4d0826_footer()
{
?>
  <script src="<?php echo get_stylesheet_directory_uri() ?>/js/gnb-animation.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri() ?>/js/slider.js"></script>
<?php
}
add_action('wp_footer', 'GNB_8fd30c6f_6025_4027_9a2f_dff96a4d0826_footer');
