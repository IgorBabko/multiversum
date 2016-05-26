(function($){

    console.log('niko');

    $window = $(window);
    nav = $('nav');

    $('.hamburger-button').click(function() {

        if (nav.hasClass('open')) {
            nav.removeClass('open');
            return;
        }

        nav.addClass('open');
    });

    $(window).resize(function () {
        if ($window.width > 610 && isScreenLarge === false) {
            isScreenLarge = true;
            nav.removeClass('compact'); 
            nav.removeClass('open');
            hamburgerButton.removeClass('active');
        } 

        if ($window <= 610 && isScreenLarge === true) {
            isScreenLarge = false;
            nav.addClass('compact');
        }
    }); 



})(jQuery);
