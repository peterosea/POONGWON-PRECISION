<?php
// variables
$theme_url = get_stylesheet_directory();
$functions_url = get_stylesheet_directory() . '/functions';
$img_url = get_home_url() . '/wp-content/uploads';
$zeplin = get_home_url() . '/wp-content/uploads/zeplin';
?>
<header class="default">
  <div class="coverBg">
    <?php if (!empty(get_field('header_img', 'option'))) :
      echo wp_get_attachment_image(get_field('header_img', 'option'), 'full');
    else : ?>
      <img src="<?php echo $zeplin ?>/2743.png" srcset="<?php echo $zeplin ?>/2743@2x.png 2x, <?php echo $zeplin ?>/2743@3x.png 3x">
    <?php endif ?>
  </div>
  <div class="container">
    <div class="parent">
      <?php
      $parentitems = my_menu_parent('menu-1');
      foreach ($parentitems as $parentitem) {
        echo $parentitem;
      }
      ?>
    </div>
    <div class="downArrow">
      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.012 512.012" style="enable-background:new 0 0 512.012 512.012;" xml:space="preserve">
        <path d="M505.325,129.52c-9.241-9.802-24.699-10.167-34.452-0.951l-214.88,203.566L41.138,128.57
    c-9.753-9.241-25.187-8.851-34.452,0.951c-9.265,9.777-8.851,25.211,0.927,34.476l231.63,219.439
    c4.681,4.438,10.728,6.681,16.75,6.681c6.022,0,12.093-2.243,16.775-6.681l231.63-219.439
    C514.176,154.731,514.59,139.298,505.325,129.52z" />
      </svg>
    </div>
    <div class="selectorWrap">
      <button type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <p>
          <?php echo post_type_archive_title('', false); ?>
        </p>
        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34">
          <g transform="rotate(90 2348.5 1117.5)">
            <circle cx="17" cy="17" r="17" fill="#f7f6f2" transform="translate(1231 3432)" />
            <g>
              <path fill="#333" d="M.964 10a.923.923 0 0 1-.65-.266.9.9 0 0 1 0-1.285L3.78 5.022.27 1.552a.9.9 0 0 1 0-1.285.926.926 0 0 1 1.3 0L5.73 4.38a.9.9 0 0 1 0 1.285L1.614 9.734a.926.926 0 0 1-.65.266z" transform="rotate(-90 2350 1104) rotate(90 5 5)" />
            </g>
          </g>
        </svg>
      </button>
      <?php
      wp_nav_menu(array(
        'menu'     => 'GNB',
        'sub_menu' => true,
        'container_class' => 'dropdown-menu',
      )); ?>
    </div>
  </div>
</header>