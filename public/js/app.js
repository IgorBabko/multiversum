$(function() {
    $('header').parallax({
        imageSrc: '/img/background3.jpg'
    });

    $('.books-and-disks-block').parallax({
        imageSrc: '/img/background1.jpg'
    });

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


    if (location.pathname == '/') {

        // animate navbar
        new ScrollMagic.Scene({
            offset: 100
        }).setClassToggle('.navbar', 'compact-navbar') /*.addIndicators('hello')*/ .addTo(controller);

        // about block appears
        new ScrollMagic.Scene({
            triggerElement: '.about-me-wrapper',
            triggerHook: '0.6'
        }).on('enter', function() {
            $('#main-avatar, #about-info').addClass('visible');
        }) /*.addIndicators('hello')*/ .addTo(controller);

        // videos appear
        new ScrollMagic.Scene({
            triggerElement: '.video1',
            triggerHook: '0.7'
        }).on('enter', function() {
            $('.video1').addClass('visible');
        }) /*.addIndicators('hello')*/ .addTo(controller);

        new ScrollMagic.Scene({
            triggerElement: '.video2',
            triggerHook: '0.7'
        }).on('enter', function() {
            $('.video2').addClass('visible');
        }) /*.addIndicators('hello')*/ .addTo(controller);

        new ScrollMagic.Scene({
            triggerElement: '.video3',
            triggerHook: '0.7'
        }).on('enter', function() {
            $('.video3').addClass('visible');
        }) /*.addIndicators('hello')*/ .addTo(controller);

        //posts appear
        new ScrollMagic.Scene({
            triggerElement: '.post1',
            triggerHook: '0.7'
        }).on('enter', function() {
            $('.post1').addClass('visible');
        }) /*.addIndicators('hello')*/ .addTo(controller);

        new ScrollMagic.Scene({
            triggerElement: '.post2',
            triggerHook: '0.7'
        }).on('enter', function() {
            $('.post2').addClass('visible');
        }) /*.addIndicators('hello')*/ .addTo(controller);

        new ScrollMagic.Scene({
            triggerElement: '.post3',
            triggerHook: '0.7'
        }).on('enter', function() {
            $('.post3').addClass('visible');
        }) /*.addIndicators('hello')*/ .addTo(controller);

        // books appear
        new ScrollMagic.Scene({
            triggerElement: '.book1',
            triggerHook: '0.9'
        }).on('enter', function() {
            $('.book1').addClass('scaled');
        }) /*.addIndicators('hello')*/ .addTo(controller);

        new ScrollMagic.Scene({
            triggerElement: '.book2',
            triggerHook: '0.9'
        }).on('enter', function() {
            $('.book2').addClass('scaled');
        }) /*.addIndicators('hello')*/ .addTo(controller);

        new ScrollMagic.Scene({
            triggerElement: '.book3',
            triggerHook: '0.9'
        }).on('enter', function() {
            $('.book3').addClass('scaled');
        }) /*.addIndicators('hello')*/ .addTo(controller);

        new ScrollMagic.Scene({
            triggerElement: '.book4',
            triggerHook: '0.9'
        }).on('enter', function() {
            $('.book4').addClass('scaled');
        }) /*.addIndicators('hello')*/ .addTo(controller);

        // disks appear
        new ScrollMagic.Scene({
            triggerElement: '.disk1',
            triggerHook: '0.9'
        }).on('enter', function() {
            $('.disk1').addClass('scaled');
        }) /*.addIndicators('hello')*/ .addTo(controller);

        new ScrollMagic.Scene({
            triggerElement: '.disk2',
            triggerHook: '0.9'
        }).on('enter', function() {
            $('.disk2').addClass('scaled');
        }) /*.addIndicators('hello')*/ .addTo(controller);

        new ScrollMagic.Scene({
            triggerElement: '.disk3',
            triggerHook: '0.9'
        }).on('enter', function() {
            $('.disk3').addClass('scaled');
        }) /*.addIndicators('hello')*/ .addTo(controller);

        new ScrollMagic.Scene({
            triggerElement: '.disk4',
            triggerHook: '0.9'
        }).on('enter', function() {
            $('.disk4').addClass('scaled');
        }) /*.addIndicators('hello')*/ .addTo(controller);
    }


    // if (location.pathname == '/webinars') {
    //     $('.video').each(function(i, video) {
    //         new ScrollMagic.Scene({
    //             triggerElement: video,
    //             triggerHook: '0.9'
    //         }).on('enter', function() {
    //             $(video).addClass('visible');
    //         }) /*.addIndicators('hello')*/ .addTo(controller);
    //     });
    // }
});