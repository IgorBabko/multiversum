(function() {
  $(function() {
    var changeQuotes, controller, quotesArray;
    $('.header').parallax({
      imageSrc: '/img/background3.jpg'
    });
    $('.header__heading').fadeIn(1000, function() {
      return $('.header__arrow').fadeIn(500);
    });
    $('.navbar .dropdown').hover(function() {
      return $(this).find('.dropdown-menu').first().stop(true, true).delay(1).slideDown(100);
    }, function() {
      return $(this).find('.dropdown-menu').first().stop(true, true).delay(1).slideUp(100);
    });
    quotesArray = ["Все стремится друг к другу", "Мир не терпит пустоты", "Все стремится к покою"];
    changeQuotes = function(counter) {
      var quote;
      quote = quotesArray[counter];
      return $('.header__quote').html(quote).fadeIn(1000, function() {
        return setTimeout(function() {
          delete quotesArray[counter];
          quotesArray.push(quote);
          return $('.header__quote').fadeOut(1000, function() {
            return changeQuotes(counter + 1);
          });
        }, 5000);
      });
    };
    changeQuotes(0);
    controller = new ScrollMagic.Controller();
    $('.resource').each(function(i, resource) {
      return new ScrollMagic.Scene({
        triggerElement: resource,
        triggerHook: '0.9'
      }).on('enter', function() {
        return $(resource).addClass('visible');
      }).addTo(controller);
    });
    $('.search').submit(function(e) {
      e.preventDefault();
      return location.href = $(this).attr('action').replace('?', $('.search__input').val() || ' ');
    });
  });

}).call(this);

//# sourceMappingURL=app.js.map
