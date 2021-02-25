<?php

/**
 * Template Name: 풍원정밀 소개
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
<main class="pageTemplate introduction">
  <div class="container">
    <div class="pageTitle">
    OLED 박막 금속 가공기술의<br>
    세계 최강자 풍원정밀
    </div>
  </div>
  <div class="section section1 max-container">
    <div class="bgCover">
      <!-- <img draggable="false" src="<?php echo $zeplin ?>/rectangle-645.jpg" srcset="<?php echo $zeplin ?>/rectangle-645@2x.jpg 2x, <?php echo $zeplin ?>/rectangle-645@3x.jpg 3x" class="custom-position"> -->
    </div>
    <div class="container">
      <div class="row">
        <div class="col-6">
        </div>
        <div class="col-6 contentCol">
          <p>
          풍원정밀은 첨단 디스플레이 부품 제조 회사로 차세대 디스플레이 제조 공정의 핵심 소재들을 생산, 공급하고 있습니다. 1996년 설립된 이후 박막 금속 가공 기술을 이용해 총 1만 4천개의 제품을 개발, 생산해 총 180여 기업에 공급해 왔습니다.
          </p>
          <br>
          <p>종이보다 얇은 금속을 미세하게 가공하는 초정밀 금속가공기술에 있어서 세계 최고의 기술력을 보유한 풍원정밀의 주력 제품은 OLED디스플레이 증착용 부품인 오픈 메탈 마스크(OMM, Open Metal Mask), 파인 메탈 마스크(FMM, Fine Metal Mask), 스틱바 마스크(SBM, Stick Bar Mask) 와, OLED TV의 봉지공정(Encapsulation)에 사용되는 금속박막(Metal Foil) 등입니다.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="section section2">
    <div class="container">
      <div class="row">
        <div class="col-6 contentCol">
          <p>
          메탈 마스크(Metal Mask)는 OLED 제조 과정에서 빛과 색을 내는 픽셀을 만드는 증착 공정에 사용되며, 금속박막(Metal Foil)은 만들어진 OLED 디스플레이 패널이 산소, 수분과 같은 외부 영향을 받지 않고 오랫동안 사용될 수 있도록 마감하는 봉지공정(Encapsulation)에 꼭 필요한 핵심 소재입니다.
          </p>
          <br>
          <br>
          <p>
          고급 디스플레이 사양인 OLED 시장의 성장세와 함께 업계에서 큰 주목을 받고 있는 풍원정밀은 앞으로도 연구 개발에 집중적으로 투자하여 롤러블(Rollable) 디스플레이 등과 같이 미래 사업 분야에 꼭 필요한 혁신적인 기술을 주도해 나갈 것입니다.
          </p>
        </div>
        <div class="col-6">
        </div>
      </div>
    </div>
    <div class="bgCover">
      <img draggable="false" src="<?php echo $zeplin ?>/dam-9338.jpg" srcset="<?php echo $zeplin ?>/dam-9338@2x.jpg 2x, <?php echo $zeplin ?>/dam-9338@3x.jpg 3x">
    </div>
    <div class="bgPadding"></div>
  </div>
</main>
<?php
get_footer();
