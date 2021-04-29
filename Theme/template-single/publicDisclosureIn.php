<?php

// variables
$theme_url = get_stylesheet_directory();
$functions_url = get_stylesheet_directory() . '/functions';
$img_url = get_home_url() . '/wp-content/uploads';
$zeplin = get_home_url() . '/wp-content/uploads/zeplin';
get_header();
get_template_part('template-parts/header/page-archive');
$_attachment = get_field('attached_file', get_the_ID());
$_linkname = get_field('link_name', get_the_ID());
if (empty($_linkname)) {
  $_linkname = '다운로드';
} else {
  // 항상 참
  $_linkname = is_string($_attachment) ? basename($_attachment) : '';
}
?>
<main class="pageTemplate press-single">
  <div class="section section1">
    <div class="container">
      <div class="row header">
        <div class="col">
          <?php the_title() ?>
        </div>
        <div class="col date">
          <?php echo get_the_date('Y-m-d') ?>
        </div>
      </div>
      <div class="row contentRow">
        <div class="content">
          <?php
            $mypost = get_post($post->ID);
            $str = apply_filters('the_content',$mypost->post_content);
            echo $str;
          ?>
        </div>
        <div class="attachment">
        <?php
        if (!empty($_attachment)) {
        echo <<<HTML
                <a href="$_attachment" download>$_linkname
                  <img draggable="false" src="$zeplin/2789.svg" alt="" style="margin-left: 16px">
                </a>
HTML;
        }
        ?>
        </div>
      </div>
      <div class="row footer">
        <div class="prev-next">
          <?php
          $prev_post = get_previous_post();
          if ($prev_post) {
            echo '<a rel="prev" class="btn next" href="' . get_permalink($prev_post->ID) . '" title="' . get_the_title($prev_post->ID) . '">이전</a>';
          } else {
            echo '<div rel="prev" class="btn next disable">이전</div>';
          }
          $next_post = get_next_post();
          if ($next_post) {
            echo '<a rel="prev" class="btn prev" href="' . get_permalink($next_post->ID) . '" title="' . get_the_title($next_post->ID) . '">다음</a>';
          } else {
            echo '<div rel="prev" class="btn prev disable">다음</div>';
          }
          
          ?>
        </div>
        <a class="btn list" href="/<?php echo get_post_type(); ?>">
          목록
        </a>
      </div>
    </div>
  </div>
</main>
<?php
get_footer();
