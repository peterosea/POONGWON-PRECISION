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
      <img src="<?php echo $zeplin ?>/rectangle-645.png" srcset="<?php echo $zeplin ?>/rectangle-645@2x.png 2x, <?php echo $zeplin ?>/rectangle-645@3x.png 3x">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-5"></div>
        <div class="col-12 col-md-7 contentCol">
          <h1 class="labelTitle">
            경영이념
          </h1>
          <p class="labelContent">
            새로운 차원의 기술 현실화로<br />
            무한한 상상의 디스플레이 세계를<br />
            현실화 시키는 기업
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="section section2">
    <div class="container">
      <h1 class="labelTitle">
        경영 목표
      </h1>
      <div class="goalWrap">
        <div class="goalElement">
          <div class="bgCover">
          </div>
          <div class="content">
            <h1 class="title">고객</h1>
            <p class="desc">
              미래를 함께 창조해 나갈 수 있는<br />
              신뢰 관계 구축
            </p>
            <svg>
              <use xlink:href="#2738"></use>
            </svg>
          </div>
        </div>

        <div class="goalElement">
          <div class="bgCover">
          </div>
          <div class="content">
            <h1 class="title">기술</h1>
            <p class="desc">
              Photo-Etching 기술 고도화<br />
              + 차세대 핵심 기술 개발
            </p>
            <svg>
              <use xlink:href="#2729"></use>
            </svg>
          </div>
        </div>

        <div class="goalElement">
          <div class="bgCover">
          </div>
          <div class="content">
            <h1 class="title">품질</h1>
            <p class="desc">
              Single PPM 유지로<br />
              세계 제일의 품질 목표 달성
            </p>
            <svg>
              <use xlink:href="#484"></use>
            </svg>
          </div>
        </div>

        <div class="goalElement">
          <div class="bgCover">
          </div>
          <div class="content">
            <h1 class="title">시장</h1>
            <p class="desc">
              글로벌 고객 확보를 통한<br />
              시장 확장
            </p>
            <svg>
              <use xlink:href="#2731"></use>
            </svg>
          </div>
        </div>

        <div class="goalElement">
          <div class="bgCover">
          </div>
          <div class="content">
            <h1 class="title">상생</h1>
            <p class="desc">
              고객, 회사, 구성원 모두가<br />
              행복할 수 있는 회사
            </p>
            <svg>
              <use xlink:href="#2706"></use>
            </svg>
          </div>
        </div>
      </div>
    </div>
</main>
<?php
get_footer();
