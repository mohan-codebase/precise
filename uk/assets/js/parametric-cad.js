$(window).scroll(function() {
    var fixmeTop = $('.my-stick-nav').offset().top;
    var currentScroll = $(window).scrollTop();
    if (currentScroll >= 580) {
        $('.my-stick-nav').addClass('need-to-fixtop');
    }
    if (currentScroll <= 580) {
        $('.my-stick-nav').removeClass('need-to-fixtop')
    }
});
$(document).ready(function() {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        loop: true,
        nav: true,
        autoplay: false,
        autoplayTimeout: 3000,
        margin: 5,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            960: {
                items: 3
            },
            1200: {
                items: 3
            }
        }
    });
})