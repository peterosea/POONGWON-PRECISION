<?php

/**
 * Template Name: OMM
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
<main class="pageTemplate omm">
  <div class="container">
    <div class="pageTitle">
    OLED 제조 공정의 핵심 소재인 오픈 메탈 마스크
      <div class="subTitle">OMM(Open Metal Mask)</div>
    </div>
  </div>
  <div class="section section1">
    <div class="bgCover">
      <img draggable="false" src="<?php echo $zeplin ?>/dam-0260.jpg" srcset="<?php echo $zeplin ?>/dam-0260@2x.jpg 2x, <?php echo $zeplin ?>/dam-0260@3x.jpg 3x">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-4"></div>
        <div class="col-8 contentCol">
          <div class="wrap">
            <p class="head">
            풍원정밀의 주력 제품은 OLED 디스플레이 증착용 부품인 오픈 메탈 마스크(OMM, Open Metal Mask)입니다. 
            </p>
            <p>
            증착은 OLED 디스플레이 제조 과정의 핵심 공정 가운데 하나로 기판이 되는 유리판(Glass) 위에 빨강(Red), 초록(Green), 파랑(Blue) 색을 내는 유기 발광층을 구성할 때 사용하는 방법입니다. 증착은 ‘증발시킨다(Evaporate)’는 개념과 유사한데 냄비에 물을 끓일 때 수증기가 냄비 뚜껑에 이슬처럼 맺히는 것처럼, OLED 디스플레이 증착 공정은 물이 아닌 유기 재료를 진공 상태에서 가열하여 증착시키는 과정을 의미합니다.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section section2">
    <div class="bgCover">
      <img draggable="false" src="<?php echo $zeplin ?>/dam-9047.jpg" srcset="<?php echo $zeplin ?>/dam-9047@2x.jpg 2x, <?php echo $zeplin ?>/dam-9047@3x.jpg 3x">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-5">
          <p>
          OMM은 두께 약 30mm, 크기 약 1,700X1,100mm의 메탈 프레임에 두께 0.2mm 이하의 얇은 금속막에 스마트폰 사각형 액정 모양으로 수십 개의 셀(Cell)을 뚫어 놓은 모습입니다. 이 셀(Cell)의 스펙은 고객사가 생산하고자 하는 디스플레이 화면 크기 및 형태에 따라 달라집니다.
          </p>
          <p>
          OMM에서 요구되는 사양중 가장 중요한 것은 셀(Cell)의 위치 정확도인데 이것이 우수할수록 베젤(테두리)이 얇은 디스플레이를 제작할 수 있습니다. 풍원정밀은 에칭 공정과 인장 공정에서 발생하는 오차값을 설계에 반영하여 제작함으로써, 업계 최고 수준의 정확도를 자랑합니다.
          </p>
        </div>
        <div class="col-7">
        </div>
      </div>
    </div>
  </div>
  <div class="section section3">
    <div class="bgCover double">
      <img draggable="false" src="<?php echo $zeplin ?>/dsc-1354.jpg" srcset="<?php echo $zeplin ?>/dsc-1354@2x.jpg 2x, <?php echo $zeplin ?>/dsc-1354@3x.jpg 3x">
      <img draggable="false" src="<?php echo $zeplin ?>/dam-9173.jpg" srcset="<?php echo $zeplin ?>/dam-9173@2x.jpg 2x, <?php echo $zeplin ?>/dam-9173@3x.jpg 3x">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-7"></div>
        <div class="col-5 contentCol">
          <p class="head">
          이러한 우수한 제작 능력을 바탕으로 풍원정밀에서는 작업이 까다로운 비정형 디스플레이용 OMM까지 생산하고 있으며 이는 비정형의 스마트 고글이나 차량용 디스플레이에 사용되고 있습니다.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="section section4">
    <div class="sliderWrap slickCarouselVideo">
      <?php
      $OMM = get_posts(array(
        'post_type' => 'omm-slide',
        'post_status' => 'publish',
        'numberposts' => 999,
      ));
      ?>
      <div id="slickSlideBg" class="slickSlideBg">
        <?php
        foreach ($OMM as $p) {
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
              <img draggable="false" src="$poster" alt="" class="poster">
              <div class="controlBtn">
                <img draggable="false" id="control_$p->ID" src="$zeplin/2796.png" srcset="$zeplin/2796@2x.png 2x, $zeplin/2796@3x.png 3x">
              </div>
              $videoElement
              <div class="bottomCover">
              </div>
            </div>
            <!-- <script>
              var control_$p->ID = document.querySelector('#control_$p->ID');
              var target_$p->ID = document.querySelector('#target_$p->ID');
              var videoWrap_$p->ID = document.querySelector('#videoWrap_$p->ID');
              control_$p->ID.addEventListener('click', function() {
                target_$p->ID.play();
                videoWrap_$p->ID.classList.add('play');
              });
              target_$p->ID.addEventListener('ended', function() {
                videoWrap_$p->ID.classList.remove('play');
              });
            </script> -->
          </div>
HTML;
        } ?>
      </div>
      <div id="slickSlideSmall" class="slickSlideSmall">
        <?php
        foreach ($OMM as $p) {
          $thumbnailUrl = get_the_post_thumbnail_url($p);
          echo <<<HTML
            <div class="slide">
              <div class="thumbnail">
                <img draggable="false" src="$thumbnailUrl" alt="">
              </div>
              <div class="title">
                $p->post_title
              </div>
            </div>
HTML;
        } ?>
      </div>
    </div>
  </div>
</main>

<script>
  $('#slickSlideBg').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    fade: true,
    autoplay: false,
    autoplaySpeed: 3000,
    asNavFor: '#slickSlideSmall',
    draggable: false,
    infinite: true,
    responsive: [
      {
          breakpoint: 768,
          settings: {
            draggable: true,
            dots: true,
            asNavFor: '',
          }
      }
    ]
  });
  $('#slickSlideSmall').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    autoplay: false,
    autoplaySpeed: 3000,
    asNavFor: '#slickSlideBg',
    focusOnSelect: true,
    centerMode: true,
    infinite: true,
    responsive: [
      {
          breakpoint: 768,
          settings: {
            draggable: false,
            centerMode: false,
          }
      }
    ]
  });
</script>
<?php
get_footer();
