$(function() {
    $('header').parallax({
        imageSrc: '/img/background3__.jpg'
    });

    $('.books-and-disks-block').parallax({
        imageSrc: '/img/background1_.jpg'
    });

    var n = true,
        k = false;

    // $(window).on('scroll', function() {
    //     console.log('scrolled');
    //     if ($(this).scrollTop() >= 50 && n && !k) {
    //         k = true;
    //         $('.navbar').animate({
    //             'backgroundColor': 'rgba(29,10,41,1)',
    //             'padding': 0
    //         }, 300, function() {
    //             k = false;
    //         });
    //         n = false;
    //     }
    //     if ($(this).scrollTop() < 50 && !n && !k) {
    //         k = true;
    //         $('.navbar').animate({
    //             'backgroundColor': 'rgba(0,0,0,0)',
    //             'padding': '25px 0'
    //         }, 300, function() {
    //             k = false;
    //         });
    //         n = true;
    //     }
    // });

    $('header h1').fadeIn(1000, function() {
        $('.bounce').fadeIn(500);
    });

    var quotesArray = [
        "Все стремится друг к другу",
        "Мир не терпит пустоты",
        "Все стремится к покою"
    ];

    function changeQuotes(counter) {
        var quote = quotesArray[counter];
        $('#quote').html(quote).fadeIn(1000, function() {
            setTimeout(function() {
                delete quotesArray[counter];
                quotesArray.push(quote);
                $('#quote').fadeOut(1000, function() {
                    changeQuotes(counter + 1);
                });
            }, 5000);
        });
    };

    changeQuotes(0);

    // scroll magic
    var controller = new ScrollMagic.Controller();

    // about block appears
    new ScrollMagic.Scene({
        triggerElement: '.about-me-wrapper'
    }).on('enter', function () {
        $('#main-avatar, #about-info').addClass('visible');
    }).addIndicators('hello').addTo(controller);

    // videos appear
    new ScrollMagic.Scene({
        triggerElement: '.video1'
    }).on('enter', function () {
        $('.video1').addClass('visible');
    }).addIndicators('hello').addTo(controller);

    new ScrollMagic.Scene({
        triggerElement: '.video2'
    }).on('enter', function () {
        $('.video2').addClass('visible');
    }).addIndicators('hello').addTo(controller);

    new ScrollMagic.Scene({
        triggerElement: '.video3'
    }).on('enter', function () {
        $('.video3').addClass('visible');
    }).addIndicators('hello').addTo(controller);

    //posts appear
    new ScrollMagic.Scene({
        triggerElement: '.post1'
    }).on('enter', function () {
        $('.post1').addClass('visible');
    }).addIndicators('hello').addTo(controller);

    new ScrollMagic.Scene({
        triggerElement: '.post2'
    }).on('enter', function () {
        $('.post2').addClass('visible');
    }).addIndicators('hello').addTo(controller);

    new ScrollMagic.Scene({
        triggerElement: '.post3'
    }).on('enter', function () {
        $('.post3').addClass('visible');
    }).addIndicators('hello').addTo(controller);

});