<?php
$zeplin = get_home_url() . '/wp-content/uploads/zeplin';
?>
<nav class="GNB">
  <div class="logo">
    <a href="/">
      <img draggable="false" src="<?php echo $zeplin ?>/2783.svg">
    </a>
  </div>
  <div class="gnb_border"></div>
  <div class="container pc_menu">
    <?php wp_nav_menu(array('menu' => 'GNB')) ?>
  </div>
  <div class="side_menu">
    <?php wp_nav_menu(array(
      'menu' => 'Lang',
      'menu_class' => 'menu_lang'
      )) ?>
  </div>
  <div class="mobile_menu">
    <div class="hamberger">
      <span class="bar1"></span>
      <span class="bar2"></span>
      <span class="bar3"></span>
    </div>
    <div class="container">
      <?php wp_nav_menu(array('menu' => 'GNB')) ?>
      <?php wp_nav_menu(array(
      'menu' => 'Lang',
      'menu_class' => 'menu_lang'
      )) ?>
    </div>
  </div>
</nav>
<script type="text/javascript">
  (function($) {
    $(".mobile_menu ul.menu > li.menu-item > a").click(function(e){
      e.preventDefault();
      if($(this).hasClass("_active")){
        $(this).removeClass("_active");
        $(this).closest('ul.sub-menu').removeClass('_active');
      } else {
        $(this).addClass("_active");
        $(this).closest('ul.sub-menu').addClass('_active');
      }
    });
  })(jQuery);
</script>