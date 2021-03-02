<?php
// variables
$theme_url = get_stylesheet_directory();
$functions_url = get_stylesheet_directory() . '/functions';
$img_url = get_home_url() . '/wp-content/uploads';
$zeplin = get_home_url() . '/wp-content/uploads/zeplin';
get_header();
// get_template_part('template-parts/header/page');
get_template_part('template-parts/header/page-archive');
?>
<main class="pageTemplate benefits">
  <div class="container">
    <div class="pageTitle">
      <p>
      풍원정밀은 유명훈 대표의 경영 철학을 기반으로 업계에서 높은 임금과 우수한 복지 수준을 갖춘 기업으로 알려져 있으며, 역량있는 우수한 인재들이 일하고 싶어하는 중소기업으로 자리매김 하고 있습니다.
      </p>
    </div>
  </div>
  <div class="section section1">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4 mb-5">
          <div class="imgWrap">
            <img draggable="false" src="<?php echo $zeplin ?>/2884.png" srcset="<?php echo $zeplin ?>/2884@2x.png 2x, <?php echo $zeplin ?>/2884@3x.png 3x">
            <div class="content">
              <svg>
                <use xlink:href="#642"></use>
              </svg>
              <span>의료비 지원</span>
            </div>
          </div>
          <p class="contentWrap">직원들이 개인적으로 감당하기 어려운 큰 의료비를 내야 할 상황이 생겼을 때 회사의 가족처럼 지원하고 있습니다. 직원들이 아픈 경우뿐만 아니라 직원의 가족이 아팠을 때도 적용됩니다.</p>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-5">
          <div class="imgWrap">
            <img draggable="false" src="<?php echo $zeplin ?>/2885.png" srcset="<?php echo $zeplin ?>/2885@2x.png 2x, <?php echo $zeplin ?>/2885@3x.png 3x">
            <div class="content">
              <svg>
                <use xlink:href="#2819"></use>
              </svg>
              <span>학자금 지원</span>
            </div>
          </div>
          <p class="contentWrap">
          직원들의 대학생 자녀 학자금도 지원하고 있는데, 국내 대학은 물론 해외 대학 학비도 해당됩니다. 학자금 지원은 국가를 위한 장기적 투자라는 소신을 가지고 있습니다.
          </p>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-5">
          <div class="imgWrap">
            <img draggable="false" src="<?php echo $zeplin ?>/2886.png" srcset="<?php echo $zeplin ?>/2886@2x.png 2x, <?php echo $zeplin ?>/2886@3x.png 3x">
            <div class="content">
              <svg>
                <use xlink:href="#647"></use>
              </svg>
              <span>리프레쉬 제도</span>
            </div>
          </div>
          <p class="contentWrap">
          7일 연속 리프레쉬 제도를 도입하여 오랜 시간 근속한 직원들이 업무를 떠나 마음껏 힐링할 수 있는 기회를 주고 있습니다.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="section section2">
    <div class="container">
      <div class="titleWrap">
        <h1 class="sectionTitle">풍원정밀 사람들</h1>
        <p class="description">
        인재를 소중히 여기는 풍원정밀에는 첨단 과학기술의 실력있는 숨은 일꾼들이 가득합니다. 
        </p>
      </div>
      <div class="postWrap">
        <div class="row">
          <?php
            $peoplePosts = get_posts(array(
              'post_type' => 'benefits',
              'post_status' => 'publish',
              'numberposts' => 999,
            ));

            foreach ($peoplePosts as $pp) {
              $post = $pp;
              setup_postdata($post);
              $thumbnail = get_the_post_thumbnail($pp->post_id);
              $isThumbnailClassName = empty($thumbnail) ? '' : 'isThumbnail';
              $list = <<<HTML
                <div class="col-12 col-md-6 col-lg-4 $isThumbnailClassName">
                  <div class="thumbnail">$thumbnail</div>
                  <div class="contentWrap">
                    $pp->post_content
                    <div class="name"><span>$pp->post_title</span></div>
                  </div>
                </div>
              HTML;
              echo $list;
            }
            wp_reset_postdata();
          ?>
        </div>
      </div>
    </div>
  </div>
</main>
<?php
get_footer();