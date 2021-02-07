<?php

// variables
$theme_url = get_stylesheet_directory();
$functions_url = get_stylesheet_directory() . '/functions';
$img_url = get_home_url() . '/wp-content/uploads';
$zeplin = get_home_url() . '/wp-content/uploads/zeplin';
get_header();
get_template_part('template-parts/header/page-archive');
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
      <div class="row content">
        <?php the_content() ?>
      </div>
      <div class="row footer">
        <div class="prev-next">
          <?php
          $next_post = get_next_post();
          if ($next_post) {
            echo '<a rel="prev" class="btn prev" href="' . get_permalink($next_post->ID) . '" title="' . get_the_title($next_post->ID) . '">다음</a>';
          } else {
            echo '<div rel="prev" class="btn prev disable">다음</div>';
          }

          $prev_post = get_previous_post();
          if ($prev_post) {
            echo '<a rel="prev" class="btn next" href="' . get_permalink($prev_post->ID) . '" title="' . get_the_title($prev_post->ID) . '">이전</a>';
          } else {
            echo '<div rel="prev" class="btn next disable">이전</div>';
          }
          ?>
        </div>
        <a class="btn list" href="/<?php echo get_post_type() ?>">
          목록
        </a>
      </div>
    </div>
  </div>
</main>
<?php
get_footer();
