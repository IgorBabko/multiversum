$(function() {
    console.log('nikk');
    $('header').parallax({
        imageSrc: '/img/background3.jpg'
    });

    $('.parallax-content').parallax({
        imageSrc: '/img/background1.jpg'
    });

    var n = true, k = false;

    $(window).on('scroll', function() {
        console.log('scrolled');
        if ($(this).scrollTop() >= 100 && n && !k) {
            k = true;
            $('.navbar').animate({
                'backgroundColor': 'rgba(0,0,0,0.7)',
                'padding': 0
            }, 500, function () {
                k = false;
            });
            n = false;
        }
        if ($(this).scrollTop() < 100 && !n && !k) {
            k = true;
            $('.navbar').animate({
                'backgroundColor': 'rgba(0,0,0,0)',
                'padding': '50px 0'
            }, 500, function () {
                k = false;
            });
            n = true;
        }
    });
});