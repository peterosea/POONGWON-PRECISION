<?php

/**
 * Template Name: 기업문화
 * Template Post Type: page
 */



// variables
$theme_url = get_stylesheet_directory();
$functions_url = get_stylesheet_directory() . '/functions';
$img_url = get_home_url() . '/wp-content/uploads';
$zeplin = get_home_url() . '/wp-content/uploads/zeplin';
get_header();
get_template_part('template-parts/header/page');
?>
<main class="pageTemplate corporateCulture">
  <div class="container">
    <div class="pageTitle">
      풍원정밀 경영 철학
      <p>
        풍원정밀은 유명훈 대표의 경영 철학을 기반으로 업계에서 높은 임금과 우수한 복지 수준을 갖춘 기업으로,<br />
        역량있는 우수한 인재들이 일하고 싶어하는 중소기업으로 기업문화를 만들어 나가고 있습니다.
      </p>
    </div>
  </div>
  <div class="section section1">
    <div class="container-md-fluid p-0">
      <div class="row">
        <div class="col-12 col-md-6 imgCol">
          <img src="<?php echo $zeplin ?>/dam-9557.jpg" srcset="<?php echo $zeplin ?>/dam-9557@2x.jpg 2x, <?php echo $zeplin ?>/dam-9557@3x.jpg 3x">
        </div>
        <div class="col-12 col-md-6">
          <div class="contentWrap">
            <div class="title">성과에 걸맞는 인정과 보상</div>
            <div class="content">
              근속연수를 채워서 승진하는 것이 아닌 능력과 성과에 의한 발탁인사제도 및 대표이사와 함께 하는 런치데이트, 그리고 00000한 풍원 비타민제도 등 성취감을 고취하기 위한 다양한 제도가 있습니다.
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-6">
          <div class="contentWrap">
            <div class="title">화합과 친목</div>
            <div class="content">
              체육대회, 송년회, 아유회 등을 통한 구성원들간의 화합을
              도모합니다. 사내 동아리 지원을 통한 친목을 기르는데도
              앞장서고 있습니다.
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 imgCol">
          <img src="<?php echo $zeplin ?>/dam-0415.jpg" srcset="<?php echo $zeplin ?>/dam-0415@2x.jpg 2x, <?php echo $zeplin ?>/dam-0415@3x.jpg 3x">
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-6 imgCol">
          <img src="<?php echo $zeplin ?>/dsc-2108.jpg" srcset="<?php echo $zeplin ?>/dsc-2108@2x.jpg 2x, <?php echo $zeplin ?>/dsc-2108@3x.jpg 3x">
        </div>
        <div class="col-12 col-md-6">
          <div class="contentWrap">
            <div class="title">화합과 친목</div>
            <div class="content">
              체육대회, 송년회, 아유회 등을 통한 구성원들간의 화합을
              도모합니다. 사내 동아리 지원을 통한 친목을 기르는데도
              앞장서고 있습니다.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php
get_footer();
