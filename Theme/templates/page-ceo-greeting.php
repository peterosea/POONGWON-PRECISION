<?php

/**
 * Template Name: CEO 인사말
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
<main class="pageTemplate ceoGreeting">
  <div class="container">
    <div class="pageTitle">
      “독보적인 기술력의<br />
      첨단소재기업이 되겠습니다.”
    </div>
  </div>
  <div class="section section1">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <p>
            풍원정밀은 설립 첫 해인 1996년부터 박막 금속 가공 기술을 이용한 디스플레이 핵심 소재 개발에 매진해 오고 있습니다. 디스플레이 기술의 변화 속도가 빨라지면서 소재부품의 중요성도 한층 커지고 있습니다. 최근 풍원정밀이 시장에서 주목 받는 이유는 있는 OLED(유기발광다이오드) 디스플레이 제조 공정의 핵심 소재들인 OMM(Open Metal Mask), 금속박(Metal Foil) 들을 순수 국내 기술로 개발, 양산하여 공급하고 있기 때문입니다.
          </p>
          <p>
            특히 2017년에는 종이보다 얇은 금속 박막을 이용한 모바일 FMM(Fine Metal Mask) 양산에 성공하여 그 동안 일본 기업이 독점하고 있던 고부가치사업 분야인 FMM 시장을 본격적으로 공략해
            나갈 계획입니다.
          </p>
        </div>
        <div class="col-12 col-md-6">
          <p>
            독보적인 기술력을 갖춘 풍원정밀은 고부가가치의 사업영역을 개척해 오고 있으며, 뛰어난 연구 인력을 갖추고 있습니다. 고객사들이 필요로 하는 제품을 수동적으로 납품만 하는 것이 아니라 제조 공정을 개선시킬수 있는 혁신적인 기술들을 먼저 개발하고 제안하는 능동적 R&D로 업계에서도 인정받고 있습니다.
          </p>
          <p>
            기술 개발의 힘은 우수한 인력으로부터 나옵니다. 고객사들의 성장을 위해 끊임없이 노력하는 풍원정밀은 함께 일하는 직원들의 성장에도 큰 관심과 지원을 아끼지 않고 있습니다. 고객사들에게는 든든한 기술 개발의 조력자이자 파트너로, 200명 풍원정밀 직원들에게는 든든한 버팀목이 되겠습니다.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="section section2">
    <img class="ceo" src="<?php echo $zeplin ?>/1104-0344.jpg" srcset="<?php echo $zeplin ?>/1104-0344@2x.jpg 2x, <?php echo $zeplin ?>/1104-0344@3x.jpg 3x">
    <div class="container">
      <p>
        대학원에서 고분자합성을 전공한 유명훈 대표는 부친이 운영하는 풍원화학에서부터 가업을 배워오던 중 부친과 함께 1996년 풍원정밀을 설립하고 R&D뿐 아니라 기획 및 영업까지 전 분야를 아우르며 기업성장을 주도하고 있습니다.
      </p>
      <div class="name">
        유명훈 대표
      </div>
      <div class="position">
        한양대학교 화학공학과 학사 및 석사
      </div>
    </div>
  </div>
</main>
<?php
get_footer();
