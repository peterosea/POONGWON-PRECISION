<?php
// variables
$theme_url = get_stylesheet_directory();
$functions_url = get_stylesheet_directory() . '/functions';
$img_url = get_home_url() . '/wp-content/uploads';
get_header();
get_template_part('template-parts/header/page-archive');
?>
<main class="pageTemplate history">
  <div class="container">
    <div class="pageTitle">
      26년간 180여개 기업에<br>
      제품 개발 및 공급
      <p>
      풍원정밀은 1996년 1월 회사 설립 이후 지난 26년간 금속 박막 가공 기술을 통한 고부가가치 제품 총 1만4천 여개를 개발 양산해, 총 180여개 기업에 공급해 오고 있습니다. 매년 600개 종류의 금속 박막 제품을 개발, 생산, 공급하며 공격적으로 설비를 확장하는 중입니다. 
      </p>
    </div>
  </div>
  <div class="section section2">
    <div class="container">
      <div class="timelineWrap">
        <ul class="timeline">
          <?php
          $historyPosts = get_posts(array(
            'post_type' => 'history',
            'post_status' => 'publish',
            'numberposts' => 999,
          ));

          foreach ($historyPosts as $hp) {
            $post = $hp;
            setup_postdata($post);
            $thumbnail = get_the_post_thumbnail($hp->post_id);
            $isThumbnailClassName = empty($thumbnail) ? '' : 'isThumbnail';
            $date = get_field('date');
            $timeline = <<<HTML
                  <li class="$isThumbnailClassName">
                    <div class="historyWrap">
                      <div class="date">
                        <span>$hp->post_title</span>
                      </div>
                      <div class="content">
                        $hp->post_content
                      </div>
                      <div class="thumbnail">$thumbnail</div>
                    </div>
                  </li>
            HTML;
            echo $timeline;
          }
          wp_reset_postdata();
          ?>
        </ul>
      </div>
    </div>
  </div>
</main>
<?php
get_footer();
