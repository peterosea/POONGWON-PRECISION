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
  <h1 class="pageTitle">풍원정밀 (주)</h1>
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
  <div class="section section1">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 order-1 order-lg-0 infoCol">
          <img src="<?php echo $zeplin ?>/2783-black.svg" alt="풍원정밀">
          <div class="address">경기도 안산시 단원구 산단로 35번길 24</div>
        </div>
        <div class="col-12 col-lg-6 order-0 order-lg-0 iconCol">
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
</main>
<?php
get_footer();
