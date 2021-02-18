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
          2010년 기술연구소를 설립하고 우수한 석박사 출신의 연구 인력이 스마트폰 및 TV 디스플레이 
관련 첨단 기술 개발에 집중하고 있습니다. 
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
          정교함이 생명인 디스플레이 시장에서 풍원정밀의 
포토 에칭(Photo-Etching) 기술은 단연 독보적이며 이에 2019년 중소벤처기업부 소재부품장비 강소기업 100에 선정되기도 하였습니다.
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
