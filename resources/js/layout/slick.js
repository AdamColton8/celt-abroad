$(document).ready(function () {

    //right side on univer and program page

    $('.slider-right-side').slick({
        arrows: false,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 10000,
        dots: true,
        customPaging : function(slider, i) {
            return '<a class="dot"></a>';
        },
    });


    //slider on university page

    $('.slider-uni-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: $('.prev-uni-for'),
        nextArrow: $('.next-uni-for'),
        fade: true,
        asNavFor: '.slider-uni-nav',
        adaptiveHeight: true
    });
    $('.slider-uni-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-uni-for',
        centerMode: true,
        arrows: false,
        focusOnSelect: true
    });

});
