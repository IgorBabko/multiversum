$(function() {
    $('.header').parallax({
        imageSrc: '/img/background3.jpg'
    });

    $('.header__heading').fadeIn(1000, function() {
        $('.header__arrow').fadeIn(500);
    });

    $('.navbar .dropdown').hover(function() {
        $(this).find('.dropdown-menu').first().stop(true, true).delay(1).slideDown(100);
    }, function() {
        $(this).find('.dropdown-menu').first().stop(true, true).delay(1).slideUp(100);
    });

    var quotesArray = [
        "Все стремится друг к другу",
        "Мир не терпит пустоты",
        "Все стремится к покою"
    ];

    function changeQuotes(counter) {
        var quote = quotesArray[counter];
        $('.header__quote').html(quote).fadeIn(1000, function() {
            setTimeout(function() {
                delete quotesArray[counter];
                quotesArray.push(quote);
                $('.header__quote').fadeOut(1000, function() {
                    changeQuotes(counter + 1);
                });
            }, 5000);
        });
    };

    changeQuotes(0);

    // scroll magic
    var controller = new ScrollMagic.Controller();


    // if (location.pathname == '/') {

    //     // animate navbar
    //     new ScrollMagic.Scene({
    //         offset: 100
    //     }).setClassToggle('.navbar', 'compact-navbar')  .addTo(controller);

    //     // about block appears
    //     new ScrollMagic.Scene({
    //         triggerElement: '.about-me-wrapper',
    //         triggerHook: '0.6'
    //     }).on('enter', function() {
    //         $('#main-avatar, #about-info').addClass('visible');
    //     })  .addTo(controller);

    //     // videos appear
    //     new ScrollMagic.Scene({
    //         triggerElement: '.video1',
    //         triggerHook: '0.7'
    //     }).on('enter', function() {
    //         $('.video1').addClass('visible');
    //     })  .addTo(controller);

    //     new ScrollMagic.Scene({
    //         triggerElement: '.video2',
    //         triggerHook: '0.7'
    //     }).on('enter', function() {
    //         $('.video2').addClass('visible');
    //     })  .addTo(controller);

    //     new ScrollMagic.Scene({
    //         triggerElement: '.video3',
    //         triggerHook: '0.7'
    //     }).on('enter', function() {
    //         $('.video3').addClass('visible');
    //     })  .addTo(controller);

    //     //posts appear
    //     new ScrollMagic.Scene({
    //         triggerElement: '.post1',
    //         triggerHook: '0.7'
    //     }).on('enter', function() {
    //         $('.post1').addClass('visible');
    //     })  .addTo(controller);

    //     new ScrollMagic.Scene({
    //         triggerElement: '.post2',
    //         triggerHook: '0.7'
    //     }).on('enter', function() {
    //         $('.post2').addClass('visible');
    //     })  .addTo(controller);

    //     new ScrollMagic.Scene({
    //         triggerElement: '.post3',
    //         triggerHook: '0.7'
    //     }).on('enter', function() {
    //         $('.post3').addClass('visible');
    //     })  .addTo(controller);

    //     // books appear
    //     new ScrollMagic.Scene({
    //         triggerElement: '.book1',
    //         triggerHook: '0.9'
    //     }).on('enter', function() {
    //         $('.book1').addClass('scaled');
    //     })  .addTo(controller);

    //     new ScrollMagic.Scene({
    //         triggerElement: '.book2',
    //         triggerHook: '0.9'
    //     }).on('enter', function() {
    //         $('.book2').addClass('scaled');
    //     })  .addTo(controller);

    //     new ScrollMagic.Scene({
    //         triggerElement: '.book3',
    //         triggerHook: '0.9'
    //     }).on('enter', function() {
    //         $('.book3').addClass('scaled');
    //     })  .addTo(controller);

    //     new ScrollMagic.Scene({
    //         triggerElement: '.book4',
    //         triggerHook: '0.9'
    //     }).on('enter', function() {
    //         $('.book4').addClass('scaled');
    //     })  .addTo(controller);

    //     // disks appear
    //     new ScrollMagic.Scene({
    //         triggerElement: '.disk1',
    //         triggerHook: '0.9'
    //     }).on('enter', function() {
    //         $('.disk1').addClass('scaled');
    //     })  .addTo(controller);

    //     new ScrollMagic.Scene({
    //         triggerElement: '.disk2',
    //         triggerHook: '0.9'
    //     }).on('enter', function() {
    //         $('.disk2').addClass('scaled');
    //     })  .addTo(controller);

    //     new ScrollMagic.Scene({
    //         triggerElement: '.disk3',
    //         triggerHook: '0.9'
    //     }).on('enter', function() {
    //         $('.disk3').addClass('scaled');
    //     })  .addTo(controller);

    //     new ScrollMagic.Scene({
    //         triggerElement: '.disk4',
    //         triggerHook: '0.9'
    //     }).on('enter', function() {
    //         $('.disk4').addClass('scaled');
    //     })  .addTo(controller);
    // }


    // // if (location.pathname == '/webinars') {
    // //     $('.video').each(function(i, video) {
    // //         new ScrollMagic.Scene({
    // //             triggerElement: video,
    // //             triggerHook: '0.9'
    // //         }).on('enter', function() {
    // //             $(video).addClass('visible');
    // //         })  .addTo(controller);
    // //     });
    // // }

    // if (location.pathname == '/posts') {
    //     $('.post').each(function(i, post) {
    //         new ScrollMagic.Scene({
    //             triggerElement: post,
    //             triggerHook: '0.9'
    //         }).on('enter', function() {
    //             $(post).addClass('visible');
    //         })  .addTo(controller);
    //     });
    // }

    // if (location.pathname == '/books') {
    //     $('.book').each(function(i, book) {
    //         new ScrollMagic.Scene({
    //             triggerElement: book,
    //             triggerHook: '0.9'
    //         }).on('enter', function() {
    //             $(book).addClass('visible');
    //         })  .addTo(controller);
    //     });
    // }

    // if (location.pathname == '/disks') {
    //     $('.disk').each(function(i, disk) {
    //         new ScrollMagic.Scene({
    //             triggerElement: disk,
    //             triggerHook: '0.9'
    //         }).on('enter', function() {
    //             $(disk).addClass('visible');
    //         })  .addTo(controller);
    //     });
    // }*/
});