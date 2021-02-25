(function($) {
  // GNB Border Hover에러 처리
  $(".gnb_border").hover(
    function(){$("nav.GNB").addClass("_active");},
    function(){$("nav.GNB").removeClass("_active");}
  );
  // 모바일메뉴
  $('.hamberger').on('click', function(e) {
  // $(".hamberger").click(function(){
    if($("nav.GNB").hasClass("_m_active")){
      $("nav.GNB").removeClass("_m_active");
    } else {
      $("nav.GNB").addClass("_m_active");
    }
  });

  var myElement = document.querySelector("nav.GNB");
  var options = {};
  var headroom = new Headroom(myElement, options);

  headroom.init();

  // mobile
  var shrinkHeader = 10;
  $(window).scroll(function () {
    var scroll = getCurrentScroll();
    if (scroll >= shrinkHeader) {
      $("nav.GNB").addClass("shrink");
    } else {
      $("nav.GNB").removeClass("shrink");
    }
  });
  function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
  }

  // $(".mobile_menu li.menu-item").click(function(){
  //   if($(".mobile_menu").hasClass("_active")){
  //     $(this).children('ul.sub-menu').removeClass('_active');
  //   } else {
  //     $(this).children('ul.sub-menu').addClass('_active');
  //   }
   
  // });

})(jQuery);
