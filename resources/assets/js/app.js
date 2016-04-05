(function() {
  $(function() {
    var changeQuotes, controller, quotesArray;
    $('.header__heading').fadeIn(1000, function() {
      return $('.header__arrow').fadeIn(500);
    });
    if ($(".header__iframe iframe").length > 0) {
      $(".header__iframe iframe")[0].src += "&autoplay=1";
    }
    quotesArray = ["Все стремится друг к другу", "Мир не терпит пустоты", "Все стремится к покою"];
    $(window).keyup(function(e) {
      if (e.keyCode === 27 && window.innerWidth < 768) {
        return $('.navbar-toggle').trigger('click');
      }
    });
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
    $('input[type!="hidden"]').first().focus();
    $('.search form').submit(function(e) {
      e.preventDefault();
      if (/^\s*$/.test($('.search__input').val())) {
        return location.href = location.href.match(/\/[^\/]+(\/[^\/]+)/)[1];
      } else {
        return location.href = $(this).attr('action').replace('?', $('.search__input').val());
      }
    });
  });

}).call(this);

//# sourceMappingURL=app.js.map
