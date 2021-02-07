<?php

// variables
$theme_url = get_stylesheet_directory();
$functions_url = get_stylesheet_directory() . '/functions';
$img_url = get_home_url() . '/wp-content/uploads';
$zeplin = get_home_url() . '/wp-content/uploads/zeplin';
get_header();
get_template_part('template-parts/header/page-archive');
?>
<main class="pageTemplate recruitment-single">
  <div class="section section1">
    <div class="container">
      <div class="row header">
        <div class="col">
          <?php the_title() ?>
        </div>
      </div>
      <div class="row content">
        <table width="100%">
          <colgroup>
            <col span="1" style="width: 20%;">
            <col span="1" style="width: 80%;">
          </colgroup>
          <tbody>
            <?php
            $fields = get_field_objects();
            foreach ($fields as $field) {
              $label = $field['label'];
              $value = $field['value'];
              if (!is_array($value)) {
                echo <<<HTML
                <tr>
                  <th>$label</th>
                  <td>$value</td>
                </tr>
HTML;
              } else {
                echo <<<HTML
                <tr>
                  <th>$label</th>
                  <td>
HTML;
                foreach ($value as $k => $v) {
                  echo <<<HTML
                  <span class="$k">$v</span>
HTML;
                }
                echo <<<HTML
                  </td>
                </tr>
HTML;
              }
            }
            ?>
          </tbody>
        </table>
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
