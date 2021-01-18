<?php
$zeplin = get_home_url() . '/wp-content/uploads/zeplin';
?>
<nav class="GNB">
  <div class="logo">
    <img src="<?php echo $zeplin ?>/2783.svg">
  </div>
  <div class="container">
    <?php wp_nav_menu() ?>
  </div>
</nav>