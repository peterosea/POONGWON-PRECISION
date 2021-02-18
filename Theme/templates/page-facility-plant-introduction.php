<?php

/**
 * Template Name: 설비 공장 소개
 * Template Post Type: page
 */


// variables
$theme_url = get_stylesheet_directory();
$functions_url = get_stylesheet_directory() . '/functions';
$img_url = get_home_url() . '/wp-content/uploads';
get_header();
get_template_part('template-parts/header/page');
?>
<main class="pageTemplate facilityPlantIntroduction">
  <div class="container">
    <div class="pageTitle">
      섬세한 초정밀 금속 가공을 위한<br />
      첨단 설비 라인
      <p>
      풍원정밀은 제품에 따라 크게 3개의 생산 라인을 가지고 있습니다. 연구소 및 본사와 함께 위치한 설비 공장은 안전하고 위생적으로 관리되며 24시간 가동이 가능합니다. 특히 극도로 섬세한 초정밀 금속 가공을 위하여 미세먼지도 허락하지 않는 클린룸(clean room) 공정을 완벽히 갖추고 있습니다.
      </p>
    </div>
  </div>
  <div class="section section1">
    <div class="container-fluid px-0 sprite">
      <div class="row m-0">
        <div class="container">
          <div class="row">
            <div class="col">
              <span class="label">
                대지면적
              </span>
              <span class="value" id="t231">
              </span>
              <script>
                katex.render("5,406m^2", document.querySelector('#t231'), {
                  throwOnError: false
                });
              </script>
            </div>
            <div class="col">
              <span class="label">주요생산품</span>
              <span class="value">
                금속박막(Metal Foil), 오픈 메탈 마스크(OMM),<br>
                파인 메탈 마스크(FMM), 스틱바 마스크(SBM)
                </span>
            </div>
          </div>
        </div>
      </div>
      <div class="row m-0">
        <div class="container">
          <div class="row">
            <div class="col">
              <span class="label">
                연면적
              </span>
              <span class="value" id="t232">
              </span>
              <script>
                katex.render("13,109m^2", document.querySelector('#t232'), {
                  throwOnError: false
                });
              </script>
            </div>
            <div class="col">
              <span class="label">근무인원</span>
              <span class="value">150여명</span>
            </div>
          </div>
        </div>
      </div>
      <div class="row m-0">
        <div class="container">
          <div class="row">
            <div class="col">
              <span class="label">
                주요시설
              </span>
              <span class="value">
              생산동, 물류동, 사무동
              </span>
            </div>
            <div class="col">
              <span class="label">주요인증</span>
              <span class="value">ISO9001, ISO14001</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section section2">
    <?php echo do_shortcode('	[ess_grid alias="facilityPlantIntroduction"]') ?>
  </div>
</main>
<?php
get_footer();
