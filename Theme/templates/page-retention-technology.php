<?php

/**
 * Template Name: 보유 기술
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
<main class="pageTemplate retentionTechnology">
  <div class="section section1">
    <div class="container">
      <div class="row">
        <div class="col">
          <p>
          풍원정밀은 26년간 박막 메탈에 대한 포토 에칭(Photo-Etching) 공정의 개발 및 양산을 지속해 온 첨단 부품 제조업체입니다. 반도체, 디스플레이 제조과정에서 꼭 필요한 핵심소재를 얇은 철판을 이용해 고부가가치 제품으로 가공하는 기술을 가지고 있습니다.
          </p>
        </div>
        <div class="col">
          <p>
          최근 풍원정밀이 디스플레이 시장에서 주목 받는 이유는 화질이 뛰어나고 얇으면서 여러 가지 Form Factor의 디스플레이를 구현할 수 있어 급성장하고 있는 OLED(유기발광다이오드) 디스플레이 제조 공정의 핵심 소재들을 생산, 공급하고 있기 때문입니다. 
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="section section2">
    <div class="container">
      <div class="titleWrap">
        <h1 class="sectionTitle">풍원정밀의 핵심기술</h1>
        <!-- <p class="description">OLED 증착용 Metal Mask 제조기술</p> -->
      </div>
      <div class="table">
        <div class="inner">
          <div class="row head">
            <div class="col-2 rowTitle">구분</div>
            <div class="col">핵심기술명</div>
            <div class="col">설명</div>
            <div class="col">지적재산권</div>
          </div>
          <div class="body">
            <div class="row">
              <div class="col-2 rowTitle">설계</div>
              <div class="col">Edge Define Technology</div>
              <div class="col content">
                직사각형에 가까운 Pixel을 구현하기 위해 Photomask를 설계하는 기술
              </div>
              <div class="col">
                <ul>
                  <li>10-2004-0016982(등록)</li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-2 rowTitle">소재</div>
              <div class="col">Etching Resist For FMM </div>
              <div class="col">FMM 제작공정에서 2차 Etching공정시 1차 Etching면을 보호하면서 소재의 변형을 방지할 수 있는 독자개발 소재</div>
              <div class="col">
                <ul>
                  <li>10-2010-0001986(등록)</li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-2 rowTitle">공정</div>
              <div class="col">Fine Etching Technology</div>
              <div class="col">공정조건을 조율하여 수 ㎛단위의 미세패턴을 정확하게 구현하는 기술</div>
              <div class="col">
                <ul>
                  <li>10-2004-0016982(등록)</li>
                  <li>10-2012-0102915(등록)</li>
                  <li>10-2012-0102916(등록)</li>
                  <li>10-2012-0115864(등록)</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section section3 section3n">
    <div class="bgCover">
      <img draggable="false" src="<?php echo $zeplin ?>/dam-9937.jpg" srcset="<?php echo $zeplin ?>/dam-9937@2x.jpg 2x, <?php echo $zeplin ?>/dam-9937@3x.jpg 3x">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-5">
          <div class="label">
            설계
          </div>
          <h1 class="title">Edge Define Technology</h1>
          <h2 class="subTitle">(설계 보정 기술)</h2>
          <p>
          Wet-Etching을 이용한 FMM 제작은 일반적으로 금속 판을 Roll 형태로 장비에 연결하여 연속적으로 생산이 가능한 Roll-to Roll 방식이 적용됩니다. 이 과정에서 얇은 금속판은 미세하게 변형이 발생하게 되고, 이를 그대로 가공할 경우 불량이 발생합니다. 
풍원정밀은 제조 과정에서 일어나는 변형을 분석한 설계 보정기술을 가지고 제품 불량을 최소화하고 있습니다.
          </p>
        </div>
        <div class="col-7">
        </div>
      </div>
    </div>
  </div>
  <div class="section section4 section3n">
    <div class="bgCover">
      <img draggable="false" src="<?php echo $zeplin ?>/dsc-1973.jpg" srcset="<?php echo $zeplin ?>/dsc-1973@2x.jpg 2x, <?php echo $zeplin ?>/dsc-1973@3x.jpg 3x">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-7">
        </div>
        <div class="col-5">
          <div class="label">
            소재
          </div>
          <h1 class="title">Etching Resist For FMM</h1>
          <h2 class="subTitle">(FMM 제조에 최적화된 합성수지액)</h2>
          <p>
          FMM 제조 공정에 합성수지(Resin)를 도포하는 과정이 있습니다. 이때 합성수지의 배합, 코팅 두께, 건조 조건 등은 미세하고 정밀한 FMM 공정에 영향을 미칩니다. 풍원정밀은 폴리우레탄계의 고분자 물질을 넣은 새로운 합성수지 배합을 자체 개발하여 한층 뛰어난 품질의 FMM을 생산하고 있습니다.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="section section5 section3n">
    <div class="bgCover ">
      <img draggable="false" src="<?php echo $zeplin ?>/dsc-1810.jpg" srcset="<?php echo $zeplin ?>/dsc-1810@2x.jpg 2x, <?php echo $zeplin ?>/dsc-1810@3x.jpg 3x">
      <!-- <img draggable="false" src="<?php echo $zeplin ?>/dsc-1979.jpg" srcset="<?php echo $zeplin ?>/dsc-1979@2x.jpg 2x, <?php echo $zeplin ?>/dsc-1979@3x.jpg 3x"> -->
    </div>
    <div class="container">
      <div class="row">
        <div class="col-5">
          <div class="label">
            공정
          </div>
          <h1 class="title">Fine Etching Technology</h1>
          <h2 class="subTitle">(정교한 에칭 기술)</h2>
          <p>
          오픈 메탈 마스크(OMM) 또는 스틱바 마스크(SBM)에 비교해서 파인 메탈 마스크(FMM)는 매우 섬세하고 정교한 공정 및 기술 수준을 요합니다. 풍원정밀은 OMM/SBM 개발 과정에서 확보한 에칭공정 기술을 발전시켜 FMM을 위한 미세 에칭 공정 기술을 개발하였습니다. Roll to Roll 공정 단계별로 공정변수를 최적화하여 얇은 메탈 박막이 이동하면서 발생할 수 있는 오차를 최소화하였습니다.
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
