<?php

/**
 * comment
 *
 * @author       Hansanghyeon
 * @copyright    Hansanghyeon <999@hyeon.pro>
 **/


function header_681831b7_622b_4bd5_a39b_9856d597446c()
{
  wp_enqueue_style('katex', 'https://cdn.jsdelivr.net/npm/katex@0.12.0/dist/katex.min.css');
  wp_enqueue_script('katex', 'https://cdn.jsdelivr.net/npm/katex@0.12.0/dist/katex.min.js');
  wp_enqueue_script('katex2', 'https://cdn.jsdelivr.net/npm/katex@0.12.0/dist/contrib/auto-render.min.js');
}
add_action('wp_enqueue_scripts', 'header_681831b7_622b_4bd5_a39b_9856d597446c');
