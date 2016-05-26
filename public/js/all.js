(function($){

    var aboutSection = $('.section-blue');

    $('.main-button').click(function () {
        $('html, body').animate({
            scrollTop: aboutSection.offset().top
        }, 500);
        return false;
    });

    var $window = $(window);
    var nav = $('nav');
    var $navLinks = $('.nav-list-link');
    var $htmlAndBody = $('html, body');
    var $sections = $('.section');

    $navLinks.on("click", function(e) {
        e.preventDefault();
        var $self = $(this);
        var sectionId = $self.data("section-id");

        $htmlAndBody.animate({
            scrollTop: $("#" + sectionId)
                .offset()
                .top - 50
        }, 300, function() {
            $navLinks.removeClass("active");
            $self.addClass("active");
        });
    });

    $window.on('mousewheel scroll', function() {
        console.log('ni');
        var aboveBlocks = $sections.map(function(i, section) {
            if (section.getBoundingClientRect().top <= $window.height() / 3) {
                return section;
            }
        });
        $navLinks.removeClass("active");
        $($navLinks[aboveBlocks.length - 1]).addClass("active");
    });

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

//# sourceMappingURL=all.js.map
