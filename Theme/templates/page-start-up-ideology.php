<?php

/**
 * Template Name: 창업이념
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
<main class="pageTemplate startUpIdeology">
  <div class="section section1">
    <div class="bgCover">
      <!-- <img draggable="false" src="<?php echo $zeplin ?>/rectangle-645.jpg" srcset="<?php echo $zeplin ?>/rectangle-645@2x.jpg 2x, <?php echo $zeplin ?>/rectangle-645@3x.jpg 3x" class="custom-position"> -->
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 contentCol">
          <p>
            풍원정밀의 역사는 1967년 설립된 풍원화학으로부터 시작되었습니다. 풍원화학은 해외 유수 업체의 표면처리 약품을 수입 판매해 오다가, 표면처리 관련 기술을 직접 개발하고, 주요 고객사에 납품해 오고 있습니다.  
          </p>
          <br />
          <p>
            풍원화학은 성장을 거듭하여 1996년 풍원정밀을 별도 법인으로 설립, 사진식각(Photo-etching) 공장을 만들어 녹즙기부터 시작하여 다양한 금속 가공기술을 발전시켜 왔습니다. 그리하여 오늘날 반도체 리드 프레임(Lead Frame), 자동차, 전기 및 전자 정밀부품, OLED 증착용 메탈 마스크(Metal Mask) 등 핵심 부품까지 생산하게 되었습니다.
          </p>
        </div>
        <div class="col-12 col-lg-6">
        </div>
      </div>
    </div>
  </div>
  <div class="section section2">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 imgCol">
          <img draggable="false" src="<?php echo $zeplin ?>/dam-9836.jpg" srcset="<?php echo $zeplin ?>/dam-9836@2x.jpg 2x, <?php echo $zeplin ?>/dam-9836@3x.jpg 3x">
        </div>
        <div class="col-12 col-lg-6 contentCol">
          <h2 class="title">풍원정밀과 풍원화학은 협력 시스템을 통해 메탈 마스크(Metal Mask) 제작은 물론 진공증착(Sputtering) 및 기존 고객사가 진행하던 후속 공정도 원스탑(One-Stop)으로 제공하며 함께 성장하고 있습니다.</h2>
          <p>풍원정밀의 창업이념은 부터 지금까지 그 무엇보다 함께 하는 직원들의 가치를 소중히 하는 것입니다. 풍원정밀 본사 1층 로비 안에는 천장을 가릴 정도로 커다란 나무 한그루가 심어져 있습니다. 창업자인 유화평 대표가 심어놓은 이 나무는 고된 작업 일정 사이 사이에 휴식을 취하는 직원들이 잠시라도 자연을 느낄 수 있도록 하기 위한 ‘작은 배려’입니다. 또 한편으로는 직원과 그의 가족들을 든든하게 책임지는 ‘큰 나무’ 같은 풍원정밀이 되라는 창업자의 정신이 담겨 있습니다.</p>
        </div>
      </div>
    </div>
  </div>
</main>
<?php
get_footer();
