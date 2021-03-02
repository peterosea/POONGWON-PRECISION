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
      <p>
      미래에 대한 비전과 희망으로 가득한 중소기업 풍원정밀은 성과, 성장, 그리고 화합을 중요하게 생각합니다. 
      </p>
    </div>
  </div>
  <div class="section section1">
    <div class="container-md-fluid p-0">
      <div class="row">
        <div class="col-12 col-md-6 imgCol">
          <img draggable="false" src="<?php echo $zeplin ?>/dsc-2028.jpg" srcset="<?php echo $zeplin ?>/dsc-2028@2x.jpg 2x, <?php echo $zeplin ?>/dsc-2028@3x.jpg 3x">
        </div>
        <div class="col-12 col-md-6">
          <div class="contentWrap">
            <div class="title">성과에 걸맞는 인정과 보상</div>
            <div class="content">
            근속연수를 채워서 승진하는 것이 아닌 능력과 성과에 의한 발탁인사제도 및 대표이사와 함께 하는 런치데이트, 그리고 풍원 비타민제도 등 성취감을 고취하기 위한 다양한 제도가 있습니다.
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-6">
          <div class="contentWrap">
            <div class="title">화합과 친목</div>
            <div class="content">
            체육대회, 송년회, 야유회 등을 통한 구성원들간의 화합을 도모합니다. 사내 동아리 지원을 통한 친목을 기르는데도 앞장서고 있습니다.
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 imgCol">
          <img draggable="false" src="<?php echo $zeplin ?>/dam-0415.jpg" srcset="<?php echo $zeplin ?>/dam-0415@2x.jpg 2x, <?php echo $zeplin ?>/dam-0415@3x.jpg 3x">
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-6 imgCol">
          <img draggable="false" src="<?php echo $zeplin ?>/dsc-2108.jpg" srcset="<?php echo $zeplin ?>/dsc-2108@2x.jpg 2x, <?php echo $zeplin ?>/dsc-2108@3x.jpg 3x">
        </div>
        <div class="col-12 col-md-6">
          <div class="contentWrap">
            <div class="title">성장 기회</div>
            <div class="content">
            협력사들과의 제휴를 통한 400여개의 온/오프라인 무료 교육을 직원들에게 제공하여 직원들이 끊임없이 성장해 나갈수 있도록 지원합니다 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php
get_footer();
