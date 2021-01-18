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
