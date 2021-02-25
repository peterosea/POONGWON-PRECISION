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
      <img draggable="false" src="<?php echo $zeplin ?>/dam-9914.jpg" srcset="<?php echo $zeplin ?>/dam-9914@2x.jpg 2x, <?php echo $zeplin ?>/dam-9914@3x.jpg 3x">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-xs-12"></div>
        <div class="col-md-8 col-xs-12 contentCol">
          <p>
          오픈 메탈 마스크(OMM, Open Metal Mask)가 OLED 기판에 기능적인 역할을 하는 유기막을 디스플레이 전면에 증착하기 위해 사용되는 부품인데 비해서,<br><br>
          파인 메탈 마스크(FMM, Fine Metal Mask) 는 OLED 디스플레이 제조 공정에서 적색(Red), 녹색(Green), 청색(Blue)의 세 가지 빛을 발광하는 픽셀을 각각 증착하는데 사용하는 얇은 금속판으로  고해상도의 색상 구성 요소를 정확하게 증착하는데 사용하는 메탈 마스크입니다.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="section section2">
    <div class="bgCover">
      <img draggable="false" src="<?php echo $zeplin ?>/dam-9782.jpg" srcset="<?php echo $zeplin ?>/dam-9782@2x.jpg 2x, <?php echo $zeplin ?>/dam-9782@3x.jpg 3x">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-5 contentCol">
          <p>
          FMM에는 10~20 마이크로미터의 미세한 구멍이 뚫려 있으며, 커다랗게 확대해서 보면 마치 분화구 같은 모습입니다. 
고해상도 OLED 제조의 핵심은 RGB 화소를 형성하는 증착공정에 있습니다. 여기서 FMM은 증착 유기물이 TFT 화소 영역에만 정밀하게 증착될 수 있도록 하는 주요 부품의 역할을 하게 됩니다. 
따라서 FMM의 미세 구멍의 균일한 크기, 미세 구멍의 단면 각도와 둔턱(step height), 그리고 위치 정밀도는 FMM 제조 공정에 있어서 가장 중요한 항목들입니다. 또한 FMM 외관 검사에서 변형, 찍힘, 막힘, 고착, 이물 등 어떤 결함도 허용되지 않고 있습니다. 
          </p>
          <p>
          풍원정밀은 첨단의 연구 제조 시설을 갖추고 글로벌 스탠다드에 맞는 완벽한 FMM을 생산하기 위해 오늘도 끊임없이 연구 개발에 박차를 가하며 많은 특허를 확보하였습니다.
          </p>
        </div>
        <div class="col-md-7">
          <!-- <img draggable="false" src="<?php echo $zeplin ?>/1104-0531.jpg" style="visibility:hidden"> -->
        </div>
      </div>
    </div>
  </div>
  <div class="section section3">
    <!-- <div class="bgCover double">
      <img draggable="false" src="<?php echo $zeplin ?>/dsc-1784.jpg" srcset="<?php echo $zeplin ?>/dsc-1784@2x.jpg 2x, <?php echo $zeplin ?>/dsc-1784@3x.jpg 3x">
      <img draggable="false" src="<?php echo $zeplin ?>/dam-9832.jpg" srcset="<?php echo $zeplin ?>/dam-9832@2x.jpg 2x, <?php echo $zeplin ?>/dam-9832@3x.jpg 3x">
    </div> -->
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-xs-12 imgCol">
          <img draggable="false" src="<?php echo $zeplin ?>/dam-9832.jpg" srcset="<?php echo $zeplin ?>/dam-9832@2x.jpg 2x, <?php echo $zeplin ?>/dam-9832@3x.jpg 3x">
        </div>
        <div class="col-md-5 col-xs-12 contentCol">
          <p>
          스마트폰 시장에서 OLED 수요가 급격히 증가하면서 디스플레이 제조사들이 OLED 생산량을 늘리고 있는 가운데, FMM에 대한 수요도 함께 증가하고 있습니다.
          </p>
          <p class="head">
          풍원정밀은 2017년부터 진입장벽이 높은 모바일 FMM 시장에 본격적으로 참여하여 글로벌한 소재분야의 선두 기업들과 경쟁하고 있습니다.
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
              <img draggable="false" src="$poster" alt="" class="poster">
              <div class="controlBtn">
                <img draggable="false" id="control_$p->ID" src="$zeplin/2796.png" srcset="$zeplin/2796@2x.png 2x, $zeplin/2796@3x.png 3x">
              </div>
              $videoElement
              <div class="bottomCover">
              </div>
            </div>
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
    asNavFor: '#slickSlideSmall',
    draggable: false,
    responsive: [
      {
          breakpoint: 768,
          settings: {
            draggable: true,
            dots: true,
          }
      }
    ]
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
    centerMode: true,
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
