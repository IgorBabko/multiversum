(function($){

    $window = $(window);
    navMenu = $('.nav-list');
    nav = $('nav');

    $('.hamburger-button').click(function() {

        if (navMenu.hasClass('open')) {
            navMenu.removeClass('open');
            return;
        }

        navMenu.addClass('open');
    });

    $(window).resize(function () {
        if ($window.width > 768 && isScreenLarge === false) {
            isScreenLarge = true;
            nav.removeClass('compact'); 
            navMenu.removeClass('open');
        } 

        if ($window <= 768 && isScreenLarge === true) {
            isScreenLarge = false;
            nav.addClass('compact');
        }
    }); 



})(jQuery);
