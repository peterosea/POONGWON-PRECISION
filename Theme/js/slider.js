// 홈페이지 섹션2
$('.sld_sect2').slick({
    slidesToShow: 3,
    autoplay: false,
    responsive: [
        {
            breakpoint: 992,
            settings: {
                dots: true,
                arrows: true,
                slidesToShow: 1,
                autoplay: false,
            }
        }
    ]
});
$('.slider_goal').slick({
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    dots: true,
    arrows: false,
});