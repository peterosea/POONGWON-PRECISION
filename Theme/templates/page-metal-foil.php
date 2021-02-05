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
      봉지 공정에 사용되는 금속박
      <div class="subTitle">
        Encapsulation / Metal Foil
      </div>
    </div>
  </div>
  <div class="section section1">
    <div class="bgCover">
      <img src="<?php echo $zeplin ?>/1104-0524.jpg" srcset="<?php echo $zeplin ?>/1104-0524@2x.jpg 2x, <?php echo $zeplin ?>/1104-0524@3x.jpg 3x">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-4"></div>
        <div class="col-8 contentCol">
          <p>유기물인 OLED 소재는 수분과 산소에 약하기 때문에
            투습을 방지하여 수명을 확보하기 위한 박막봉지가
            반드시 필요합니다.
            풍원정밀이 생산하는 금속박(Metal Foil)은 유기박막과 무기박막을 3~5겹 정도 감아서 OLED 층을 완전히 덮어 씌우는, 봉지 공정(Encapsulation)의 재료가 됩니다.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="section section2">
    <div class="bgCover">
      <img src="<?php echo $zeplin ?>/1104-0531.jpg" srcset="<?php echo $zeplin ?>/1104-0531@2x.jpg 2x, <?php echo $zeplin ?>/1104-0531@3x.jpg 3x">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-5">
          <h1>봉지공정은 OLED 증착 공정 후 이어지는 핵심
            공정으로 매우 중요합니다.</h1>
          <p>증착을 통해 만들어진 OLED 패널이 외부의 영향을 받지 않고 오랫동안 사용될 수 있도록 마감하는 단계이기 때문입니다. OLED 디스플레이에서 빛을 내는 유기물질과 전극은 산소와 수분에 매우 민감하게 반응해 발광 특성을 잃기 때문에, OLED 디스플레이 제조 공정에서 산소와 수분이 유기물에 침투하지 못하도록 확실하게 밀봉하는 봉지공정에 있어서 풍원 정밀의 금속박(Metal Foil)은 큰 역할을 담당하고 있습니다. </p>
        </div>
        <div class="col-7">
          <img src="<?php echo $zeplin ?>/1104-0531.jpg" style="visibility:hidden">
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
        foreach ($metalFoil as $p) {
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
