<?php

/**
 * Template Name: FMM
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
<main class="pageTemplate fmm">
  <div class="container">
    <div class="pageTitle">
      고해상도의 디스플레이를 위한 첨단 소재 파인 메탈 마스크
      <div class="subTitle">FMM, Fine Metal Mask</div>
    </div>
  </div>
  <div class="section section1">
    <div class="bgCover">
      <img src="<?php echo $zeplin ?>/dam-9914.jpg" srcset="<?php echo $zeplin ?>/dam-9914@2x.jpg 2x, <?php echo $zeplin ?>/dam-9914@3x.jpg 3x">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-4"></div>
        <div class="col-8 contentCol">
          <p>
            풍원정밀은 TV 디스플레이의 핵심인 OLED 제조 공정이 아몰레드(AMOLED, 능동형 유기발광다이오드)로 발전됨에 따라 풍원정밀은 아몰레드(AMOLED)용 유기물을 증착하기 위한 바(Bar) 형태의 메탈 마스크를 제작하고 있습니다.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="section section2">
    <div class="bgCover">
      <img src="<?php echo $zeplin ?>/dam-9782.jpg" srcset="<?php echo $zeplin ?>/dam-9782@2x.jpg 2x, <?php echo $zeplin ?>/dam-9782@3x.jpg 3x">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-5">
          <p>
            TV용 OLED 패널 제작에 사용되는 기판은 크기가 커서 오픈 메탈 마스크로는 작업이 어려워 풍원정밀은 그에 맞는 스틱 바 형태의 메탈 마스크를 독자적으로 개발, 양산하게 되었습니다. 스틱바 마스크는 길이가 길어 인장을 하더라도 쳐지면서 증착대상인 기판에 닿게 되고 이 과정에서 불량을 유발하게 될 수 있습니다.
          </p>
          <p class="head">
            풍원정밀의 스틱바 마스크는 기판과의 간격을 유지하기 위한 돌기 형태의 구조물(지지대)을 고안하여 특허를 받았으며 작업에 있어서 최소한의 오차 범위로 업계에서 뛰어난 기술력을 인정받고 있습니다.
          </p>
        </div>
        <div class="col-7">
          <img src="<?php echo $zeplin ?>/1104-0531.jpg" style="visibility:hidden">
        </div>
      </div>
    </div>
  </div>
  <div class="section section3">
    <div class="bgCover double">
      <img src="<?php echo $zeplin ?>/dsc-1784.jpg" srcset="<?php echo $zeplin ?>/dsc-1784@2x.jpg 2x, <?php echo $zeplin ?>/dsc-1784@3x.jpg 3x">
      <img src="<?php echo $zeplin ?>/dam-9832.jpg" srcset="<?php echo $zeplin ?>/dam-9832@2x.jpg 2x, <?php echo $zeplin ?>/dam-9832@3x.jpg 3x">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-7"></div>
        <div class="col-5 contentCol">
          <p>
            TV용 OLED 패널 제작에 사용되는 기판은 크기가 커서 오픈 메탈 마스크로는 작업이 어려워 풍원정밀은 그에 맞는 스틱 바 형태의 메탈 마스크를 독자적으로 개발, 양산하게 되었습니다. 스틱바 마스크는 길이가 길어 인장을 하더라도 쳐지면서 증착대상인 기판에 닿게 되고 이 과정에서 불량을 유발하게 될 수 있습니다.
          </p>
          <p class="head">
            풍원정밀의 스틱바 마스크는 기판과의 간격을 유지하기 위한 돌기 형태의 구조물(지지대)을 고안하여 특허를 받았으며 작업에 있어서 최소한의 오차 범위로 업계에서 뛰어난 기술력을 인정받고 있습니다.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="section section4">
    <div class="sliderWrap slickCarouselVideo">
      <?php
      $FMM = get_posts(array(
        'post_type' => 'fmm-slide',
        'post_status' => 'publish'
      ));
      ?>
      <div id="slickSlideBg" class="slickSlideBg">
        <?php
        foreach ($FMM as $p) {
          $video = get_field('video', $p->ID);
          $videoElement = '';
          if (!empty($video)) {
            $videoElement = <<<HTML
              <video controls id="target_$p->ID">
                <source src="$video">
              </video>
HTML;
          }
          $className = $videoElement === '' ? 'empty' : '';
          $poster = get_field('video_cover', $p->ID);
          echo <<<HTML
          <div class="slide">
            <div class="videoWrap $className" id="videoWrap_$p->ID">
              <img src="$poster" alt="" class="poster">
              <div class="controlBtn">
                <img id="control_$p->ID" src="$zeplin/2796.png" srcset="$zeplin/2796@2x.png 2x, $zeplin/2796@3x.png 3x">
              </div>
              $videoElement
              <div class="bottomCover">
              </div>
            </div>
            <script>
              var control_$p->ID = document.querySelector('#control_$p->ID');
              var target_$p->ID = document.querySelector('#target_$p->ID');
              var videoWrap_$p->ID = document.querySelector('#videoWrap_$p->ID');
              control_$p->ID.addEventListener('click', function() {
                target_$p->ID.play();
                videoWrap_$p->ID.classList.add('play');
              });
              target_$p->ID.addEventListener('ended', function() {
                videoWrap_$p->ID.classList.remove('play');
              })
            </script>
          </div>
HTML;
        } ?>
      </div>
      <div id="slickSlideSmall" class="slickSlideSmall">
        <?php
        foreach ($FMM as $p) {
          $thumbnailUrl = get_the_post_thumbnail_url($p);
          echo <<<HTML
            <div class="slide">
              <div class="thumbnail">
                <img src="$thumbnailUrl" alt="">
              </div>
              <div class="title">
                $p->post_title
              </div>
            </div>
HTML;
        } ?>
      </div>
      <script>
        $('#slickSlideBg').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          dots: false,
          fade: true,
          asNavFor: '#slickSlideSmall',
          draggable: false
        });
        $('#slickSlideSmall').slick({
          slidesToShow: 3,
          slidesToScroll: 1,
          arrows: false,
          asNavFor: '#slickSlideBg',
          focusOnSelect: true,
          edgeFriction: true,
          autoplay: true,
          autoplaySpeed: 2000,
          centerMode: true
        });
      </script>
    </div>
  </div>
</main>
<?php
get_footer();
