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

    var updateValidErrors = function ($form, validErrors) { 
        $form.find('input, textarea').each(function (index, input) { 
            var $input = $(input);
            var fieldName = $input.attr('name');
            var $errorBlock = $input.next('.error');
            var $errorMsg; 

            if (validErrors[fieldName] != null) {
                switch(fieldName) {
                    case 'email':
                        $errorMsg = validErrors[fieldName][0];
                        break;
                    case 'password':
                        $errorMsg = validErrors[fieldName][0].replace('password', 'пароль');
                        break;
                    case 'message':
                        $errorMsg = validErrors[fieldName][0].replace('message', 'сообщение');
                }
            }

            $errorBlock.text($errorMsg);
        });
    };

    $('.modal-form').submit(function (e) { 
        e.preventDefault();

        var $this = $(this);

        var request = $.ajax({
            url: $this.attr('action'),
            method: 'POST',
            data: $this.serialize()
        });

        request.done(function (response) {
            if ($this.closest('.remodal').length != 0) {
//                $('.Nav__item--modal').remove();
//                $('.Nav__list').append('<li class="Nav__item"><a href="/profile" class="Nav__link"><span>My profile</span></a></li>');
//                $('.Nav__list').append('<li class="Nav__item"><a href="/logout" class="Nav__link"><span>Logout</span></a></li>');
                ohSnap(response.message, {color: 'green'});
            } else {
                updateValidErrors($this, {});
                ohSnap(response.notifyMessage, {color: 'green'});
                $this.next().html(response.message);
                $('html, body').animate({scrollTop: $('.Block').position().top}, 'slow');
            }
            $this.find('.remodal-cancel').trigger('click');
        });

        request.fail(function (response) { 
            ohSnap(response.responseText.message || 'пожалуйста, исправьте ошибки в форме', {color: 'red'});
            updateValidErrors($this, JSON.parse(response.responseText));
        });
    });

    //show flash message in alert
    var flashMessage = $('#ohsnap').data('notify')
    if (flashMessage != null) { 
        ohSnap(flashMessage, {color: 'green'});
    }

})(jQuery);
