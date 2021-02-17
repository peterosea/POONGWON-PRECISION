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
  <div class="container">
    <?php wp_nav_menu(array('menu' => 'GNB')) ?>
  </div>
  <div class="side_menu">
    <?php wp_nav_menu(array(
      'menu' => 'Lang',
      'menu_class' => 'menu_lang'
      )) ?>
  </div>
</nav>