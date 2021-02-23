<?php

/**
 * Template Name: Stick Bar
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
<main class="pageTemplate sitckbar">
  <div class="container">
    <div class="pageTitle">
    TV에 들어가는 AMOLED용 유기물을 증착하기 위한<br>
바(Bar) 형태의 메탈 마스크(Metal Mask)
    </div>
  </div>
  <div class="section section1">
    <div class="bgCover">
      <img draggable="false" src="<?php echo $zeplin ?>/dam-0077.jpg" srcset="<?php echo $zeplin ?>/dam-0077@2x.jpg 2x, <?php echo $zeplin ?>/dam-0077@3x.jpg 3x">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-4"></div>
        <div class="col-8 contentCol">
          <p>
          풍원정밀은 OLED TV를 제작하는데 있어 유기물을 증착하기 위한 바(Bar) 형태의 메탈 마스크를 제작하고 
있습니다.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="section section2">
    <div class="bgCover">
      <img draggable="false" src="<?php echo $zeplin ?>/dam-0100.jpg" srcset="<?php echo $zeplin ?>/dam-0100@2x.jpg 2x, <?php echo $zeplin ?>/dam-0100@3x.jpg 3x">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-5 contentCol">
          <p>
          TV용 OLED 패널 제작에 사용되는 기판(2,200X2,500㎜)은 크기가 커서 오픈 메탈 마스크로 제작하기가 어렵습니다. 이에 풍원정밀은 대형 기판에 유기물을 증착하기 위한 스틱 바 형태의 메탈 마스크를 독자적으로 개발하여,  양산하게 되었습니다.  스틱바 마스크는 길이가 3m정도로 길어 인장을 하더라도 쳐지면서 증착대상인 기판에 닿게 되고 이 과정에서 불량을 유발할 수 있습니다.
          </p>
          <p class="head">
          풍원정밀은 스틱바 마스크는 기판과의 간격을 유지하기 위한 돌기 형태의 구조물(지지대)을 고안하여 특허로 등록하였으며, 작업에 있어서 최소한의 오차 범위로 업계에서 뛰어난 기술력을 인정받고 있습니다.
          </p>
        </div>
        <div class="col-7"></div>
      </div>
    </div>
  </div>
</main>
<?php
get_footer();
