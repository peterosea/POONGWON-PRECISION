<?php

/**
 * Template Name: 연구소 소개
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
<main class="pageTemplate labIntroduction">
  <div class="section section1">
    <div class="bgCover">
      <img draggable="false" src="<?php echo $zeplin ?>/dsc-2093.jpg" srcset="<?php echo $zeplin ?>/dsc-2093@2x.jpg 2x, <?php echo $zeplin ?>/dsc-2093@3x.jpg 3x">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-4"></div>
        <div class="col-8 contentCol">
          <p>
            2014년 기술연구소를 설립하고 00명의 석박사 출신의 연구 인력이 스마트폰 및 TV 디스플레이 관련 첨단 과학 기술을 연구중입니다.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="section section2">
    <div class="bgCover">
      <img draggable="false" src="<?php echo $zeplin ?>/dam-0213.jpg" srcset="<?php echo $zeplin ?>/dam-0213@2x.jpg 2x, <?php echo $zeplin ?>/dam-0213@3x.jpg 3x">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-5">
          <p>
            정교함이 생명인 디스플레이 시장에서 풍원정밀의 wet etching 기술은 단연 독보적이며 이에 2019년 중소벤처기업부 소재부품장비 강소기업 100에 선정되기도 하였습니다.
            <br />
            <br />
            2020년에는 연구소 설비를 대폭 늘려 총 000평 부지의 연구시설을 증축하였으며 000 등의 최첨단 장비를 갖추고 있습니다.
          </p>
        </div>
        <div class="col-7">
        </div>
      </div>
    </div>
  </div>
</main>
<?php
get_footer();
