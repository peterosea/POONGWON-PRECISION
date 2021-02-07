<?php

$postType = get_post_type();
$zeplin = get_home_url() . '/wp-content/uploads/zeplin';

if (!empty($postType)) {
  add_action('pre_get_posts', function ($query) {
    if (
      !is_admin()
      && $query->is_post_type_archive(get_post_type())
      && $query->is_main_query()
    ) {
      $query->set('posts_per_page', -1);
    }
  });

  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

  // Define page_id
  $page_ID = get_the_ID();

  // Define paginated posts
  $page    = get_query_var('page');

  // Define custom query parameters
  $args    = array(
    'post_type'      => $postType, // post types
    'posts_per_page' => 10,
    'paged'          => (get_query_var('paged')) ? get_query_var('paged') : 1
  );

  // If is_front_page "paged" parameters as $page number
  if (is_front_page())
    $args['paged'] = $page;

  // Instantiate custom query
  $custom_query = new WP_Query($args);

  // Custom loop
  if ($custom_query->have_posts()) :
    $renderTable = <<<HTML
        <div class="boardTemplate nonTable">
          <div class="header row">
            <div class="col-9">내용</div>
            <div class="col-2">등록일</div>
            <div class="col-1"></div>
          </div>
          <div class="body">
HTML;
    while ($custom_query->have_posts()) :
      $custom_query->the_post();
      /**
       * Displaying content
       *
       * the_title(), the_permalink(), the_content() etc
       * Or see Twentysixteen theme page.php
       * get_template_part( 'template-parts/content', 'page' );
       *
       */
      $ID = get_the_ID();
      $_title = get_the_title();
      $_permalink = get_the_permalink();
      $_date = get_the_date('Y-m-d');
      $_content = get_the_content();
      $renderTable .= <<<HTML
          <div class="row list" id="list-$ID">
            <div class="col-9">$_title</div>
            <div class="col-2 date">$_date</div>
            <div class="col-1 btnWrap">
              <img id="control-$ID" class="btn" src="$zeplin/shape-684.png" srcset="$zeplin/shape-684@2x.png 2x, $zeplin/shape-684@3x.png 3x">
            </div>
            <div class="content" id="content-$ID">
              $_content
            </div>
            <script>
              document.querySelector('#control-$ID').addEventListener('click', function(e) {
                console.log(e);
                if (document.querySelector('#list-$ID').classList.contains('show')) {
                  document.querySelector('#list-$ID').classList.remove('show');
                } else {
                  document.querySelector('#list-$ID').classList.add('show');
                }
              })
            </script>
          </div>
HTML;
    endwhile;
    $renderTable .= <<<HTML
        </div>
  </div>
HTML;
    echo $renderTable;

    /**
     * Pagination parameters of the_posts_pagination() since: 4.1.0
     *
     * @see the_posts_pagination
     * https://codex.wordpress.org/Function_Reference/the_posts_pagination
     *
     */
    $arrow = <<<HTML
      <div class="arrow"></div>
HTML;

    $pagination_args = array(
      'mid_size'           => 5,
      'prev_text'          => __($arrow, 'theme-domain'),
      'next_text'          => __($arrow, 'theme-domain'),
      'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('', 'theme-domain') . ' </span>',
      'screen_reader_text' => __('screen-reader-text')
    );

    /**
     * Fix pagination link base
     *
     * If in paginated posts w/o multiple loop
     *
     */

    if (!is_front_page() && 0 < intval($page))
      $pagination_args['base'] = user_trailingslashit(
        untrailingslashit(get_page_link($page_ID)) . '/page/%#%'
      );
    /**
     * Fix Pagination with $GLOBALS['wp_query'] = {custom_query}
     *
     * @see get_the_posts_pagination use $GLOBALS['wp_query']
     * https://developer.wordpress.org/reference/functions/get_the_posts_pagination/#source-code
     *
     */

    $GLOBALS['wp_query'] = $custom_query;
    echo <<<HTML
      <div class="paginationWrap">
        <style>
          .paginationWrap {
            display: flex;
          }
          .paginationWrap .nav-links {
            display: flex;
            align-items: center;
          }
          .paginationWrap .nav-links > *:not(:last-child, .prev, .next) {
            padding: 6px;
          }
          .paginationWrap .prev {
            margin-right: 26px;
          }
          .paginationWrap .next {
            margin-left: 26px;
          }
          .paginationWrap .prev .arrow {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='38.296' height='38.296' viewBox='0 0 38.296 38.296'%3E%3Cg fill='none' stroke='%23999'%3E%3Ccircle cx='19.148' cy='19.148' r='19.148' stroke='none'/%3E%3Ccircle cx='19.148' cy='19.148' r='18.648'/%3E%3C/g%3E%3Cpath fill='none' stroke='%23999' stroke-width='2px' d='M1381.182 7160.768l-5.135 5.5 5.135 6.025' transform='translate(-1359.815 -7147.566)'/%3E%3C/svg%3E%0A");
          }
          .paginationWrap .arrow {
            font-size: 0;
            width: 39px;
            height: 39px;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='38.296' height='38.296' viewBox='0 0 38.296 38.296'%3E%3Cg fill='none' stroke='%23999'%3E%3Cg transform='translate(.46) translate(-.46)'%3E%3Ccircle cx='19.148' cy='19.148' r='19.148' stroke='none'/%3E%3Ccircle cx='19.148' cy='19.148' r='18.648'/%3E%3C/g%3E%3Cpath stroke-width='2px' d='M1376.048 7160.768l5.135 5.5-5.135 6.025' transform='translate(.46) translate(-1358.579 -7147.566)'/%3E%3C/g%3E%3C/svg%3E%0A");
            background-position: center;
            background-repeat: no-repeat;
          }
        </style>
HTML;
    if ($paged === 1) {
      echo <<<HTML
      <div class="prev">
        <div class="arrow disable"></div>
      </div>
HTML;
    }
    $nav = get_the_posts_pagination($pagination_args);
    $nav = str_replace('<h2 class="screen-reader-text">screen-reader-text</h2>', '', $nav);
    echo $nav;
    $endPage = $wp_query->max_num_pages;
    if ($paged === $endPage) {
      echo <<<HTML
      <div class="next">
        <div class="arrow disable"></div>
      </div>
HTML;
    }
    echo "</div>";
  else :
    /**
     * Empty Post
     *
     * Run your stuff here if posts empty
     * Or see Twentysixteen theme page.php
     * get_template_part( 'template-parts/content', 'none' );
     */
  endif;
  wp_reset_query(); // Restore the $wp_query and global post data to the original main query.
}
