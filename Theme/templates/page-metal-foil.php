<?php

/**
 * Template Name: 금속박
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
<main class="pageTemplate metalFoil">
  <div class="container">
    <div class="pageTitle">
      봉지 공정에 사용되는 금속박막
      <div class="subTitle">
        Encapsulation / Metal Foil
      </div>
    </div>
  </div>
  <div class="section section1">
    <div class="bgCover">
      <img draggable="false" src="<?php echo $zeplin ?>/2-6-roll.jpg" srcset="<?php echo $zeplin ?>/2-6-roll@2x.jpg 2x, <?php echo $zeplin ?>/2-6-roll@3x.jpg 3x">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-xs-12"></div>
        <div class="col-md-8 col-xs-12 contentCol">
          <p>유기물인 OLED 소재는 수분과 산소에 약하기 때문에 투습을 방지하여 수명을 확보하기 위한 박막봉지가 반드시 필요합니다.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="section section2">
    <div class="bgCover">
      <img draggable="false" src="<?php echo $zeplin ?>/1104-0531.jpg" srcset="<?php echo $zeplin ?>/1104-0531@2x.jpg 2x, <?php echo $zeplin ?>/1104-0531@3x.jpg 3x">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-xs-12">
          <h1>이러한 봉지공정은 증착을 통해 만들어진 OLED 패널이 외부의 영향을 받지 않고 오랫동안 사용될 수 있도록 마감하는 단계로서, OLED 패널의 수명을 좌우합니다.
            <br><br>
            풍원정밀이 생산하는 금속박막(Metal Foil)은 유기박막과 무기박막이 겹쳐진 봉지 필름과 함께 OLED 기판을 덮어서 수분과 산소의 유입을 차단하는 봉지 공정(Encapsulation)의 재료가 됩니다.
          </h1>
        </div>
        <div class="col-md-7 col-xs-12">
          <!-- <img draggable="false" src="<?php echo $zeplin ?>/1104-0531.jpg" style="visibility:hidden"> -->
        </div>
      </div>
    </div>
  </div>
  <div class="section section3">
    <div class="sliderWrap slickCarouselVideo">
      <?php
      $metalFoil = get_posts(array(
        'post_type' => 'metalfoil-slide',
        'post_status' => 'publish'
      ));
      ?>
      <div id="slickSlideBg" class="slickSlideBg">
        <?php
        foreach ($metalFoil as $p) {
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
              });
            </script>
          </div>
HTML;
        } ?>
      </div>
      <div id="slickSlideSmall" class="slickSlideSmall">
        <?php
        foreach ($metalFoil as $p) {
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
      <script>
        $('#slickSlideBg').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          dots: false,
          fade: true,
          asNavFor: '#slickSlideSmall',
          draggable: false,
          responsive: [{
            breakpoint: 768,
            settings: {
              draggable: true,
              dots: true,
              asNavFor: '',
            }
          }]
        });
        $('#slickSlideSmall').slick({
          slidesToShow: 2,
          slidesToScroll: 1,
          arrows: false,
          asNavFor: '#slickSlideBg',
          focusOnSelect: true,
          edgeFriction: true,
          autoplay: true,
          autoplaySpeed: 2000,
          centerMode: true,
        });
      </script>
    </div>
  </div>
</main>
<?php
get_footer();
