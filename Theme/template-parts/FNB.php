<?php
$zeplin = get_home_url() . '/wp-content/uploads/zeplin';
?>
<footer class="FNB">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-xl-8 order-1 order-xl-0">
        <ul class="info">
          <li><strong>상호</strong><span>풍원정밀㈜</span></li>
          <li><strong>주소</strong><span>경기도 안산시 단원구 산단로35번길 24 풍원정밀</span></li>
          <li><strong>대표전화번호</strong><a href="tel:031-493-2107">031-493-2107</a></li>
        </ul>
        <p class="copyright">© 2021 POONGWON. All Rights Reserved. </p>
      </div>
      <div class="col-12 col-xl-4 order-0 order-xl-0 pagelistCol">
        <?php
        wp_nav_menu(array(
          'menu' => 'FNB',
          'container_class' => 'page-list',
        )); ?>
      </div>
    </div>
  </div>
</footer>