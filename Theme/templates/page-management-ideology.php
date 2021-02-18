<?php

/**
 * Template Name: 경영이념
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
<main class="pageTemplate managementIdeology">
  <div class="section section1">
    <div class="bgCover">
      <img draggable="false" src="<?php echo $zeplin ?>/management-01.png" srcset="<?php echo $zeplin ?>/management-01@2x.png 2x, <?php echo $zeplin ?>/management-01@3x.png 3x">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-5"></div>
        <div class="col-12 col-md-7 contentCol">
          <p class="labelContent">
          새로운 차원의 기술로<br>
          무한한 디스플레이 세계를<br>
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
      <p class="desc">
      끊임없는 혁신으로 미래를 창조하여 기술이 사람을 행복하게 만드는 기업을 만들어 나가겠습니다.
      </p>
      <div class="goalWrap">
        <div class="goalElement">
          <div class="bgCover">
          </div>
          <div class="content">
            <h1 class="title">고객</h1>
            <p class="desc">
            미래를 함께 창조해 나갈 수 있는<br>
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
            포토 에칭(Photo-Etching) 기술 고도화<br>
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
            싱글 PPM(Single PPM) 유지로<br>
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
            글로벌 고객 확보를 통한<br>
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
            고객, 주주, 회사, 구성원 모두가<br>
            행복할 수 있는 회사
            </p>
            <svg>
              <use xlink:href="#2706"></use>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section section3">
    <div class="bgCover">
      <img draggable="false" src="<?php echo $zeplin ?>/2807.png" srcset="<?php echo $zeplin ?>/2807@2x.png 2x, <?php echo $zeplin ?>/2807@3x.png 3x">
    </div>
    <div class="container">
      <h1 class="labelTitle">
        비전
      </h1>
      <p class="labelContent">
      인간의 삶을 즐겁고 행복하게<br />
      만들어주는 테크놀로지
      </p>
    </div>
  </div>
</main>
<?php
get_footer();
