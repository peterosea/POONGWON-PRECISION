<?php

/**
 * Template Name: 찾아오시는 길
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
<main class="pageTemplate onYourWay">
  <div class="container">
    <div class="pageTitle">풍원정밀 (주)</div>
  </div>
  <div class="section section1">
    <div class="bgCover double">
      <img src="<?php echo $zeplin ?>/dsc-2979.jpg" srcset="<?php echo $zeplin ?>/dsc-2979@2x.jpg 2x, <?php echo $zeplin ?>/dsc-2979@3x.jpg 3x">
      <img src="<?php echo $zeplin ?>/dam-9176.jpg" srcset="<?php echo $zeplin ?>/dam-9176@2x.jpg 2x, <?php echo $zeplin ?>/dam-9176@3x.jpg 3x">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6">
        </div>
        <div class="col-12 col-lg-6 iconCol">
          <p class="content">
            이러한 우수한 제작능력을 바탕으로 풍원정밀에서는 작업이 까다로운 비정형 디스플레이용 OMM까지 생산하고 있으며 이는 비정형의 스마트 고글이나 차량용 디스플레이에 사용되고 있습니다.
          </p>
          <img src="<?php echo $zeplin ?>/2783-black.svg" alt="풍원정밀">
          <div class="address">경기도 안산시 단원구 산단로 35번길 24</div>
          <ul>
            <li>
              <img src="<?php echo $zeplin ?>/2762.svg" alt="">
              <p>
                원시역(서해선) 2번 출구<br />
                도보 11분 (587m)
              </p>
            </li>
            <li>
              <img src="<?php echo $zeplin ?>/2761.svg" alt="">
              <p>
                대표전화<br />
                <a href="tel:031-493-2107">031-493-2107</a>
              </p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- * 카카오맵 - 지도퍼가기 -->
  <!-- 1. 지도 노드 -->
  <div id="daumRoughmapContainer1612147397908" class="root_daum_roughmap root_daum_roughmap_landing" style="width: 100%"></div>

  <!--
	2. 설치 스크립트
	* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
-->
  <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

  <!-- 3. 실행 스크립트 -->
  <script charset="UTF-8">
    new daum.roughmap.Lander({
      "timestamp": "1612147397908",
      "key": "247py",
      "mapHeight": "400",
    }).render();
  </script>
</main>
<?php
get_footer();
