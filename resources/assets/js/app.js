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
    $('input[type!="hidden"]').first().focus().select();
    $('.search form').submit(function(e) {
      e.preventDefault();
      if (!/^\s*$/.test($('.search__input').val())) {
        return location.href = $(this).attr('action').replace('?', $('.search__input').val());
      }
    });
    $('.Subscription__form').submit(function(e) {
      var subscriptionRequest;
      e.preventDefault();
      subscriptionRequest = $.ajax({
        url: "/subscribe",
        method: "POST",
        data: $(this).serialize()
      });
      subscriptionRequest.done(function(msg) {
        $('body').append('<div id="ohsnap"></div>');
        ohSnap(msg, {
          color: 'green',
          icon: 'icon-alert'
        });
        return console.log('success');
      });
      return subscriptionRequest.fail(function(jqXHR, textStatus) {
        var error, ref;
        $('#ohsnap').remove();
        error = (ref = JSON.parse(jqXHR.responseText).email[0]) != null ? ref : 'Ошибка на сервере';
        $('body').append('<div id="ohsnap"></div>');
        return ohSnap(error, {
          color: 'red',
          icon: 'icon-alert'
        });
      });
    });
    $('.Subscription__form').submit(function(e) {
      var postId, rateRequest;
      e.preventDefault();
      postId = $(this).find('input[name=id]').val();
      rateRequest = $.ajax({
        url: "/posts/rate/" + postId,
        method: "POST",
        data: $(this).serialize()
      });
      rateRequest.done(function(msg) {
        return console.log('success');
      });
      return rateRequest.fail(function(jqXHR, textStatus) {
        return console.log('fail');
      });
    });
  });

}).call(this);

//# sourceMappingURL=app.js.map
